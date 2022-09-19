<?php

namespace App\Http\Controllers;

use App\Models\caryaati_packages;
use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
// use Otp;
use Seshac\Otp\Otp;
use Stripe;


class HomeController extends Controller
{
    //
    public function PackageDetails(Request $request){
        // return $request;
        $data = caryaati_packages::findorfail($request->id);
        return $data->no_of_cars;
    }
    public function PackageCalculate(Request $request){
        // return $request;
        $data = caryaati_packages::findorfail($request->package_id);
        // if($request->id )
        // return $data->monthly_price;
        return $data->monthly_price * $request->id;
        // return $data->no_of_cars;
    }
    //
    public function LoadStripe(Request $request){
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // Stripe\Charge::create([
            //     "amount" => 7*100,
            //     "currency" => "AED",
            //     "source" => $request->stripeToken,
            //     "description" => "Test payment from Caryaati Landing Page"
            // ]);
            // $customer = \Stripe\Customer::create(array(
            //     'email' => auth()->user()->email,
            //     'name' => auth()->user()->user_name,
            //     //'source'  => $token
            // ));


            // $strip_amount = 7 * 100;
            // $customer_stripe_id = $customer->id;

            $description = 'Test payment from Caryaati Landing Page';
            $total_amount = $request->final_price;

            // $intent = \Stripe\PaymentIntent::create([
            //     'amount' => $strip_amount,
            //     'currency' => 'AED',
            //     'description' => "$description",
            //     'customer' => $customer_stripe_id,
            //     'setup_future_usage' => 'off_session',

            //     // Verify your integration in this guide by including this parameter
            //     'metadata' => ['integration_check' => 'accept_a_payment'],
            // ]);
            // return
            $customer = \Stripe\Customer::create(array(
                'email' => auth()->user()->email,
                'name' => auth()->user()->user_name,
                //'source'  => $token
            ));


            $strip_amount = $total_amount * 100;
            $customer_stripe_id = $customer->id;


            $intent = \Stripe\PaymentIntent::create([
                'amount' => $strip_amount,
                'currency' => 'AED',
                'description' => "$description",
                'customer' => $customer_stripe_id,
                'setup_future_usage' => 'off_session',

                // Verify your integration in this guide by including this parameter
                'metadata' => ['integration_check' => 'accept_a_payment'],
            ]);

            $client_secret = $intent->client_secret;

            $customer_stripe_id = $customer->id;

            // $cy_my_payments_dd = cy_my_payments::where('mypay_id', $mypay_id )
            // 					->update([
            // 						'stripe_customer_id' => $customer_stripe_id,
            // 						'client_secret' => $client_secret

            // 					]);



        } catch (Exception $e) {
            if ($e) {
                return response()->json(['message' => $e->getMessage()]);
            }
            // return $api_error = $e->getMessage();
        }
        return view('stripe-load', compact('client_secret', 'total_amount'));
    }
    //
    public function test(){
        return "Zoom";
    }
    //
    public function step_one(Request $request){
        $validator = Validator::make($request->all(), [ // <---
            'name' => 'required',
            // 'email' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'privacy_terms' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            // return redirect()->back()
            //     ->withErrors($validator)
            //     ->withInput();
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $otp_email =  Otp::setValidity(30)  // otp validity time in mins
        ->setLength(4)  // Lenght of the generated otp
        ->setMaximumOtpsAllowed(10) // Number of times allowed to regenerate otps
        ->setOnlyDigits(false)  // generated otp contains mixed characters ex:ad2312
        ->setUseSameToken(true) // if you re-generate OTP, you will get same token
        ->generate($request->email);

        $otp_email_phone =  Otp::setValidity(30)  // otp validity time in mins
        ->setLength(4)  // Lenght of the generated otp
        ->setMaximumOtpsAllowed(10) // Number of times allowed to regenerate otps
        ->setOnlyDigits(false)  // generated otp contains mixed characters ex:ad2312
        ->setUseSameToken(true) // if you re-generate OTP, you will get same token
        ->generate($request->phone.$request->email);
        // return $otp =  Otp::generate($request->email);
        // return $verify = Otp::validate($request->email, 578091);
        // return $otp_email;
        // return $otp_email_phone;
        // return "zoom";
        $data = User::create([
            'name'=>$request->name,
            'email'=> $request->email,
            'phone'=>$request->phone,
            // 'privacy_terms'=>$req,
            // 'password'=>,
            'password' => Hash::make($request['password']),
            // 'phone_code' => $otp_email_phone,
            // 'email_code' => $otp_email,
            'is_email_validated' => 0,
            'is_phone_validated' => 0,
            'choosen_package' => 1

        ]);
        $details = [
            'mobile_otp' => $otp_email_phone->token,
            'email_otp' => $otp_email->token,
            // 'Plan' => $number,
            // 'AlternativeNumber' => $alternativeNumber,
        ];
        $subject = 'EMAIL OTP CODE';
        $to = 'parhakooo@gmail.com';
        \Mail::to($data->email)
        ->cc(['salmanahmed334@gmail.com','parhakooo@gmail.com'])
        ->send(new \App\Mail\SendOTP($details));
        Session::put('email',$request->email);
        Session::put('email_phone',$request->phone.$request->email);
        return "1";
    }
    //
    public function validation(Request $request){
        $validator = Validator::make($request->all(), [ // <---
            'phone_code' => 'required',
            'email_code' => 'required',
        ]);
        if ($validator->fails()) {
            // return redirect()->back()
            //     ->withErrors($validator)
            //     ->withInput();
            return response()->json(['error' => $validator->errors()->all()]);
        }
         $email = Session::get('email');
         $phone = Session::get('email_phone');
        // return $request->email_code;
        $verify_email = Otp::setAllowedAttempts(100) // number of times they can allow to attempt with wrong token
        ->validate($email, $request->email_code);
        $verify_phone = Otp::setAllowedAttempts(100) // number of times they can allow to attempt with wrong token
        ->validate($phone, $request->phone_code);
        // return $verify_email['status'];
        // if($verify_email->)
        // foreach($verify_email as $em){
            // return $em[];
        // }
        // return $verify_email;
        // return $verify_email;
        if($verify_email->status == false){
            return response()->json(['error' => ['Error' => 'Email ' . $verify_email->message]], 200);
        }
        if($verify_phone->status == false){
            return response()->json(['error' => ['Error' => 'Phone ' . $verify_phone->message]], 200);
        }
        if($verify_email->status == false || $verify_phone->status == false)
        {
        // return $verify_email[0];
        // $mc = json_decode($verify_email)
        // return $verify_email
        // if($verify_email){
            return response()->json(['error' => ['Error' => 'Email and Phone => ' . $verify_email->message]], 200);
        }
        $data = User::where('email',$email)->first();
        $data->is_email_validated = 1;
        $data->is_phone_validated = 1;
        $data->save();
        $user = User::findorfail($data->id);
        $user = Auth::login($user);

        $caryaati_package = caryaati_packages::all();
        return view('load-packages', compact('caryaati_package'));
        // try {
        //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        //     // Stripe\Charge::create([
        //     //     "amount" => 7*100,
        //     //     "currency" => "AED",
        //     //     "source" => $request->stripeToken,
        //     //     "description" => "Test payment from Caryaati Landing Page"
        //     // ]);
        //     // $customer = \Stripe\Customer::create(array(
        //     //     'email' => auth()->user()->email,
        //     //     'name' => auth()->user()->user_name,
        //     //     //'source'  => $token
        //     // ));


        //     // $strip_amount = 7 * 100;
        //     // $customer_stripe_id = $customer->id;

        //     $description = 'Test payment from Caryaati Landing Page';
        //     $total_amount = 100;

        //     // $intent = \Stripe\PaymentIntent::create([
        //     //     'amount' => $strip_amount,
        //     //     'currency' => 'AED',
        //     //     'description' => "$description",
        //     //     'customer' => $customer_stripe_id,
        //     //     'setup_future_usage' => 'off_session',

        //     //     // Verify your integration in this guide by including this parameter
        //     //     'metadata' => ['integration_check' => 'accept_a_payment'],
        //     // ]);
        //     // return
        //     $customer = \Stripe\Customer::create(array(
        //         'email' => auth()->user()->email,
        //         'name' => auth()->user()->user_name,
        //         //'source'  => $token
        //     ));


        //     $strip_amount = $total_amount * 100;
        //     $customer_stripe_id = $customer->id;


        //     $intent = \Stripe\PaymentIntent::create([
        //         'amount' => $strip_amount,
        //         'currency' => 'AED',
        //         'description' => "$description",
        //         'customer' => $customer_stripe_id,
        //         'setup_future_usage' => 'off_session',

        //         // Verify your integration in this guide by including this parameter
        //         'metadata' => ['integration_check' => 'accept_a_payment'],
        //     ]);

        //     $client_secret = $intent->client_secret;

        //     $customer_stripe_id = $customer->id;

        //     // $cy_my_payments_dd = cy_my_payments::where('mypay_id', $mypay_id )
        //     // 					->update([
        //     // 						'stripe_customer_id' => $customer_stripe_id,
        //     // 						'client_secret' => $client_secret

        //     // 					]);



        // } catch (Exception $e) {
        //     if ($e) {
        //         return response()->json(['message' => $e->getMessage()]);
        //     }
        //     // return $api_error = $e->getMessage();
        // }
        // return view('stripe-load', compact('client_secret'));
        // return "1";
        // return 1;
        // return
        // $details = array(
        //     'email' => $verify_email,
        //     'phone' => $verify_phone,
        //     // 'date_time' => $request->date_time,
        //     // 'userid' => $request->userid,
        // );

        // return response()->json(
        //     [
        //         'ResponseCode' => '1',
        //         'ResponseMessage' => 'Home Data',
        //         'ResponseData' => $details,
        //         // 'ResponseToken' => $sam,
        //     ],
        //     500
        // );
    }
    //
    // public function stripe()
    // {
    //     // $data
    //     $user = User::findorfail(1);
    //     $user = Auth::login($user);
    //     if (Auth::check()){
    //         $intent = auth()->user()->createSetupIntent();
    //     }


    //     return view('stripe',compact('intent'));
    // }
    public function final(){
        // return "Zoom";
        // return "1";
        $details_welcome = [
            'subject' => 'Welcome Email',
            'content' => 'Welcome Content',
        ];
        $details_invoice = [
            'subject' => 'Invoice Email',
            'content' => 'Invoice Content',
        ];
        \Mail::to(auth()->user()->email)
        ->cc(['salmanahmed334@gmail.com', 'parhakooo@gmail.com'])
        ->send(new \App\Mail\WelcomeMail($details_welcome));
        \Mail::to(auth()->user()->email)
        ->cc(['salmanahmed334@gmail.com', 'parhakooo@gmail.com'])
        ->send(new \App\Mail\InvoiceMail($details_invoice));
        return 1;


    }


    public function stripePost(Request $request)
    {


        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // Stripe\Charge::create([
            //     "amount" => 7*100,
            //     "currency" => "AED",
            //     "source" => $request->stripeToken,
            //     "description" => "Test payment from Caryaati Landing Page"
            // ]);
                $customer = \Stripe\Customer::create(array(
                    'email' => auth()->user()->email,
                    'name' => auth()->user()->user_name,
                    //'source'  => $token
                ));


                $strip_amount = 7 * 100;
                $customer_stripe_id = $customer->id;

                $description = 'Test payment from Caryaati Landing Page';

                $intent = \Stripe\PaymentIntent::create([
                    'amount' => $strip_amount,
                    'currency' => 'AED',
                    'description' => "$description",
                    'customer' => $customer_stripe_id,
                    'setup_future_usage' => 'off_session',

                    // Verify your integration in this guide by including this parameter
                    'metadata' => ['integration_check' => 'accept_a_payment'],
                ]);
                // return
						$customer = \Stripe\Customer::create(array(
							'email' => auth()->user()->email,
							'name' => auth()->user()->user_name,
							//'source'  => $token
						));


						$strip_amount = $total_amount*100;
						$customer_stripe_id = $customer->id;


						$intent = \Stripe\PaymentIntent::create([
						  'amount' => $strip_amount,
						  'currency' => 'AED',
						  'description' => "$description",
						  'customer' => $customer_stripe_id,
						  'setup_future_usage' => 'off_session',

						  // Verify your integration in this guide by including this parameter
						  'metadata' => ['integration_check' => 'accept_a_payment'],
						]);

						$client_secret = $intent->client_secret;

						$customer_stripe_id = $customer->id;

						// $cy_my_payments_dd = cy_my_payments::where('mypay_id', $mypay_id )
						// 					->update([
						// 						'stripe_customer_id' => $customer_stripe_id,
						// 						'client_secret' => $client_secret

						// 					]);



					}catch(Exception $e) {
                        if($e){
                            return response()->json(['message' => $e->getMessage()]);
                        }
						// return $api_error = $e->getMessage();
					}
            return view('stripe-load',compact('client_secret'));
        // return "1";
        // Session::flash('success', 'Payment successful!');

        return back();
    }
    public function purchase(Request $request, Product $product)
    {
        $user          = $request->user();
        $paymentMethod = $request->input('payment_method');

        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge($product->price * 100, $paymentMethod);
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }

        return back()->with('message', 'Product purchased successfully!');
    }

}
