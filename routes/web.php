<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\fronthomeController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\promotionController;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\CarlistsController;
use App\Http\Controllers\webUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::localized(function () {



		Route::get('/test', [HomeController::class, 'test'])->name('test')->middleware('is_admin');

		Route::prefix('admin')->group(function () {
		Route::get('/', function () { });


		Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('is_admin');
		Route::get('/lg', [HomeController::class, 'lg'])->name('lg')->middleware('is_admin');

		Route::get('signin', function () {
			return view('admin.signin');
		})->name('signinview');;
		Route::get('signout', [AdminAjaxController::class, 'signout'])->name('signout');

		Route::post('/postsignin', [AdminAjaxController::class, 'signin'])->name('signin');

		//car listing
		Route::get('/New-Car-List', [HomeController::class, 'newcarlist'])->name('newcarlist')->middleware('is_admin');
		Route::get('/listview', [HomeController::class, 'newcarlist_cardata'])->name('listview')->middleware('is_admin');
		Route::get('/getvehiclecategory', [AdminAjaxController::class, 'getvehiclecategory'])->name('getvehiclecategory')->middleware('is_admin');

		Route::get('/Car-Details/{model_id}', [HomeController::class, 'cardetails'])->name('cardetails')->middleware('is_admin');


		Route::get('/My-List', [HomeController::class, 'mylistmain'])->name('mylistmain')->middleware('is_admin');
		Route::get('/mylistview', [HomeController::class, 'mylistview'])->name('mylist')->middleware('is_admin');
		Route::post('/addtomylist', [AdminAjaxController::class, 'addtomylist'])->name('addtomylist')->middleware('is_admin');;

		Route::get('/EdiCarModal', [AdminAjaxController::class, 'EdiCarModal'])->name('EdiCarModal')->middleware('is_admin');
		Route::post('/save_my_list_edit', [AdminAjaxController::class, 'save_my_list_edit'])->name('save_my_list_edit')->middleware('is_admin');

		//Leads
		Route::get('/Leads', [LeadsController::class, 'leads'])->name('leads')->middleware('is_admin');
		Route::post('/myleads', [LeadsController::class, 'myleads'])->name('myleads')->middleware('is_admin');

		Route::get('/callremarks', [LeadsController::class, 'callremarks'])->name('callremarks')->middleware('is_admin');
		Route::post('/callremarksupdate', [LeadsController::class, 'callremarksupdate'])->name('callremarksupdate')->middleware('is_admin');

		Route::get('/assign_wa_sale_agent', [LeadsController::class, 'assign_wa_sale_agent'])->name('assign_wa_sale_agent')->middleware('is_admin');
		Route::post('/wa_remarksupdateupdate', [LeadsController::class, 'wa_remarksupdateupdate'])->name('wa_remarksupdateupdate')->middleware('is_admin');

		Route::get('/wa_remarks',  [LeadsController::class, 'wa_remarks'])->name('wa_remarks')->middleware('is_admin');
		Route::post('/wa_remarksupdate', [LeadsController::class, 'wa_remarksupdate'])->name('wa_remarksupdate')->middleware('is_admin');
		Route::post('/updateStatusattd', [LeadsController::class, 'updateStatusattd'])->name('updateStatusattd')->middleware('is_admin');

		//CMS Start
		Route::get('/Dynamic-Car-Page/List',  [CMSController::class, 'dycarpage_view'])->name('dycarpage_view')->middleware('is_admin');
		Route::get('/Dynamic-Car-Page/Add',  [CMSController::class, 'dycarpage_add'])->name('dycarpage_add')->middleware('is_admin');
		Route::get('/Dynamic-Car-Page/Edit/{id}/{lang}',  [CMSController::class, 'dycarpage_edit'])->name('dycarpage_edit')->middleware('is_admin');
		Route::post('/dy_car_page_savedata', [CMSController::class, 'dy_car_page_savedata'])->name('dy_car_page_savedata')->middleware('is_admin');

		Route::post('/uploading', [HomeController::class, 'uploading_img'])->name('uploading_img')->middleware('is_admin');
		Route::get('/get_img_uploaded/',  [HomeController::class, 'uploading_access_img'])->name('uploading_access_img')->middleware('is_admin');
		//Route::get('/Dynamic-Car-Page',  [LeadsController::class, 'dycarpage_view'])->name('dycarpage_view')->middleware('is_admin');
		Route::get('/OpenModal',  [CMSController::class, 'OpenModal'])->name('OpenModal')->middleware('is_admin');

		Route::post('/carmodelsave', [CMSController::class, 'carmodelsave'])->name('carmodelsave')->middleware('is_admin');

		//Promotion
		Route::get('/Promotion/List',  [promotionController::class, 'page_listing_view'])->name('promo.page_listing_view')->middleware('is_admin');
		Route::get('/Promotion/Add',  [promotionController::class, 'page_add'])->name('promo.page_add')->middleware('is_admin');
		Route::get('/Promotion/Edit/{id}/{lang}',  [promotionController::class, 'page_edit'])->name('promo.page_edit')->middleware('is_admin');
		Route::post('/getmodelrates', [promotionController::class, 'getmodelrates'])->name('getmodelrates')->middleware('is_admin');
		Route::get('/loadModeldatas', [promotionController::class, 'loadModeldatas'])->name('loadModeldatas')->middleware('is_admin');

		Route::post('/promosavedata', [promotionController::class, 'savedata'])->name('promo_save')->middleware('is_admin');
		Route::post('/promosavemodel', [promotionController::class, 'savedata_models'])->name('promo_save_model')->middleware('is_admin');

		//blogs
		Route::get('/Blogs/List',  [blogsController::class, 'page_listing_view'])->name('blog.page_listing_view')->middleware('is_admin');
		Route::get('/Blogs/Add',  [blogsController::class, 'page_add'])->name('blog.page_add')->middleware('is_admin');
		Route::get('/Blogs/Edit/{id}/{lang}',  [blogsController::class, 'page_edit'])->name('blog.page_edit')->middleware('is_admin');
		//Route::post('/getmodelrates', [promotionController::class, 'getmodelrates'])->name('getmodelrates')->middleware('is_admin');
		//Route::get('/loadModeldatas', [promotionController::class, 'loadModeldatas'])->name('loadModeldatas')->middleware('is_admin');

		Route::post('/blogsavedata', [blogsController::class, 'savedata'])->name('blog_save')->middleware('is_admin');
		//Route::post('/promosavemodel', [promotionController::class, 'savedata_models'])->name('promo_save_model')->middleware('is_admin');

		//Testimonial
		Route::get('/Testimonials/List',  [blogsController::class, 'page_listing_view_testi'])->name('testimonials.page_listing_view')->middleware('is_admin');
		Route::post('/testimonials_savedata', [blogsController::class, 'testi_save_model'])->name('testi__save')->middleware('is_admin');

	});



			//front web

			//home
			Route::get('/', [fronthomeController::class, 'index'])->name('homeindex');
			Route::get('/lgn', [fronthomeController::class, 'lgn'])->name('lgn');
			Route::get('/feature_checkouts', [fronthomeController::class, 'feature_checkouts'])->name('feature_checkouts');
			Route::get('/fleet-management', [fronthomeController::class, 'fleet_management'])->name('fleet_management');
			Route::get('/booking-and-reservation', [fronthomeController::class, 'fleet_management'])->name('booking.reservation');
			Route::get('/accounting-and-bi-reports', [fronthomeController::class, 'fleet_management'])->name('accouting.reports');
			Route::get('/integration', [fronthomeController::class, 'fleet_management'])->name('integration');
			Route::get('/why-caryaati', [fronthomeController::class, 'fleet_management'])->name('why.caryaati');
			Route::get('/support', [fronthomeController::class, 'fleet_management'])->name('support');
			Route::get('/pricing', [fronthomeController::class, 'fleet_management'])->name('pricing');
			Route::get('/contact-us', [fronthomeController::class, 'fleet_management'])->name('contact-us');
			Route::get('/feature_leads', [fronthomeController::class, 'feature_leads'])->name('feature_leads');
			Route::get('/feature_email', [fronthomeController::class, 'feature_email'])->name('feature_email');
			Route::get('/VehicleSearch', [HomeController::class, 'VehicleSearch'])->name('VehicleSearch');
			Route::post('/step_one', [HomeController::class, 'step_one'])->name('step.one');
			Route::post('/validation', [HomeController::class, 'validation'])->name('step.two');
			Route::post('/load-stripe', [HomeController::class, 'LoadPaymentCard'])->name('LoadPaymentCard');
			Route::get('/stripe', [HomeController::class, 'stripe'])->name('stripe');
			Route::post('/final', [HomeController::class, 'final'])->name('final');
			Route::post('/stripe-pay', [HomeController::class, 'stripePost'])->name('stripepost');
			Route::post('/products/{id}/purchase', [HomeController::class, 'purchase'])->name('products.purchase');
			Route::post('/load-package', [HomeController::class, 'LoadPackage'])->name('load.package');
			Route::post('/PackageDetails', [HomeController::class, 'PackageDetails'])->name('Package.Details');
			Route::post('/PackageCalculate', [HomeController::class, 'PackageCalculate'])->name('Package.calculate');
			Route::post('/LoadStripe', [HomeController::class, 'LoadStripe'])->name('load.final');

            // Route::post('products/{id}/purchase', 'ProductController@purchase')->name('products.purchase');
			Route::get('/login', [webUserController::class, 'login'])->name('web.login');
			Route::post('/weblogin', [webUserController::class, 'weblogin'])->name('weblogin');
			Route::get('/logout', [webUserController::class, 'logout'])->name('weblogout');



			Route::get('/signup', [webUserController::class, 'signup'])->name('web.signup');
			Route::post('/websignup', [webUserController::class, 'UserSignup'])->name('websignup');

            // Route::get('stripe', 'StripePaymentController@stripe');
            // Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');



			//carlisting Normal
			Route::get('rent-a-car/{slug}', [CarlistsController::class, 'car_list_main'])->name('car_list_main');
			Route::get('mycarlist', [CarlistsController::class, 'my_car_listing'])->name('my_car_listing');

			Route::get('range-filter', [HomeController::class, 'getprice_rang'])->name('getprice_rang');


		// }, [
		// 	'supported-locales' => ['en', 'ar', 'tr'
		// 	],
		// 	'omit_url_prefix_for_locale' => 'en',
		// 	'use_locale_middleware' => true,
		// ]);



        // 1. Bootstrap and Responsive Issue
        // 2. Language (Global)
        // 3. LTR , RTL
        // 4. car-rental-solutions existing page + with content
        // 5.
