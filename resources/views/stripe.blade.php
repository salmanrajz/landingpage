{{-- <!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Stripe Payment Gateway Integration Example - ItSolutionStuff.com</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>|||</h1>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form role="form" action="{{ route('stripepost') }}" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="payment-form">
                        @csrf

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (7)</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });

    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }

  });

  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
</script>
</html> --}}

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="https://www.caryaati,ca/js/jquery.js"></script>
  <style>
    .StripeElement {
      box-sizing: border-box;

      height: 40px;

      padding: 10px 12px;

      border: 1px solid #ddd;
      border-radius: 4px;
      background-color: white;

      box-shadow: 0 1px 3px 0 #e6ebf1;
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
      border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }
  </style>
<div class="col-12 col-md-6">
                          <div class="card">

                            <div class="card-body">


                              <form id="payment-form" data-secret="">
                                <!--<div class="form-group">
                                  <label class="font-weight-bold">Full Name</label>
                                  <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                  <label class="font-weight-bold">Email</label>
                                  <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>-->

                                <!--card--->
                                <div class="form-group">
                                  <label class="font-weight-bold">Card Details</label>
                                  <div id="card-element">
                                    <!-- Elements will create input elements here -->
                                  </div>



                                  <!-- We'll put the error messages in this element -->
                                  <div id="card-errors" role="alert" style="margin-top:10px"></div>

                                </div>

                                <div class="form-group" align="center">
                                  <img src="{{url('https://www.caryaati.ca/assets/stripe_logo.png')}}" width="100%" />
                                </div>
                                <!---card end-->



                                <div class="form-group">
                                  <button id="submit" class="btn btn-block btn-primary">PAY AED
                                    100 AED</button>
                                </div>

                                <input id="stripeToken" type="hidden" value="">
                                <input id="process_url" type="hidden" value="{{route('stripepost')}}">
                                <input id="base_urls" type="hidden" value="{{url('/')}}">
                                <input id="confirmation_urls" type="hidden" value="{{url('/')}}">
                              </form>





                            </div>
                          </div>
                        </div>
                        @php
                        // $GetCaryaatAppSetting_d = \App\Helpers\AppHelper::instance()->GetCaryaatAppSetting();
                        $public_key = env('STRIPE_KEY');
                        $client_sec = 'pi_3KiLv6AlW0hydKcZ0SmfAAHS_secret_PAL0xuGW7Sueybw2vpnWzdVo9';
                        @endphp
                        {{-- //$public_key = 'pk_test_51IvJKOAlW0hydKcZVIQbkymRa7ts4eAO5NCrzzKuORsQRmp62coTGWpNvjHz5DO7ZsWhRPNvds5D6hLIn8HDlVYB00fDyn2c1S';?> --}}
                  <script type="text/javascript">
                    // Set your publishable key: remember to change this to your live publishable key in production
                    // See your keys here: https://dashboard.stripe.com/account/apikeys

                    var stripe = Stripe('<?php echo $public_key;?>');

                    var elements = stripe.elements();

                    // Set up Stripe.js and Elements to use in checkout form
                    var style = {
                      base: {
                        color: "#32325d",
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: "antialiased",
                        fontSize: "16px",
                        "::placeholder": {
                          color: "#aab7c4"
                        }
                      },
                      invalid: {
                        color: "#fa755a",
                        iconColor: "#fa755a"
                      },
                    };

                    var card = elements.create('card', {
                      hidePostalCode: true,
                      style: style
                    });
                    card.mount('#card-element');

                    /*var cardExpiry = elements.create('cardExpiry', {style: style});
                    cardExpiry.mount('#card-exp');

                    var cardCvc = elements.create('cardCvc', {style: style});
                    cardCvc.mount('#card-cvc');*/



                    card.addEventListener('change', ({
                      error
                    }) => {
                      const displayError = document.getElementById('card-errors');
                      if (error) {
                        displayError.textContent = error.message;
                      } else {
                        displayError.textContent = '';
                      }
                    });

                    var form = document.getElementById('payment-form');



                    form.addEventListener('submit', function (ev) {
                      var base_urls = $('#base_urls').val();

                      $('#card-errors').html('<div align="center">Please wait..<img src="' + base_urls +
                        '/assets/loading.gif" width="25"/></div>');

                      ev.preventDefault();

                      stripe.confirmCardPayment('<?php echo $client_sec ;?>', {
                        payment_method: {
                          card: card,
                          billing_details: {
                            name: 'Salman',
                            email: 'salmanahmedrajput@outlook.com'

                          }
                        }
                      }).then(function (result) {
                        if (result.error) {
                          // Show error to your customer (e.g., insufficient funds)
                          //console.log(result.error.message);
                          $('#card-errors').text(result.error.message);

                        } else {
                          // The payment has been processed!
                          if (result.paymentIntent.status === 'succeeded') {
                            // Show a success message to your customer
                            // There's a risk of the customer closing the window before callback
                            // execution. Set up a webhook or plugin to listen for the
                            // payment_intent.succeeded event that handles any business critical
                            // post-payment actions.

                            // console.log(result);
                            var process_url = $('#process_url').val();
                            // var my_priotys = $('#my_priotys').val();

                            $.ajax({
                              type: "POST",
                              url: process_url,
                              data: {
                                passengerCheck: 'yes',
                                paymentIntentstatus: result.paymentIntent.status,
                                payment_method: result.paymentIntent.payment_method,
                                amount: result.paymentIntent.amount,


                                order_id: 1,
                                mypay_id: 2,
                                pay_for: 3,
                                vendor_rowid: 1,
                                customer_id: 1,

                                // my_priotys: my_priotys,

                              }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)

                              success: function (result) {

                                //var parts = result.split('###');
                                var confirmation_urls = $("#confirmation_urls").val();
                                //$("#total_new").val(parts[0]);
                                //$("#isntallment_chart_table").html(parts[1]);
                                if (result == 1) {
                                  $('#card-errors').html(
                                    '<div class="alert alert-success" role="alert">Payment Completed</div>'
                                    );

                                  window.location = confirmation_urls;
                                } else if (result == 2) {
                                  $('#card-errors').html(
                                    '<div class="alert alert-danger" role="alert">Payment Not Complete</div>'
                                    );
                                }

                              }

                            });







                          }
                        }
                      });
                    });
                  </script>


<script>
  $(document).ready(function () {

    var image_selected = new Array();

    //////////////
    $('#d2').on('click', ".select_img", function () {

      var aa = $(this)
      if (!aa.is('.checked')) {
        aa.addClass('checked');

        var my_id = this.id;
        image_selected.push(my_id);
        //alert(my_id);
        var mypart = my_id.split('-');

        if (mypart[2] == 2) {
          $('#btn_n_p2_' + mypart[0]).html(
            '<button type="button" class="btn btn-secondary" style="width:146px;background-color: #feb321;">Selected</button>'
            );
        } else {
          $('#btn_n_' + mypart[0]).html(
            '<button type="button" class="btn btn-secondary" style="width:146px;background-color: #feb321;">Selected</button>'
            );
        }


      } else {
        aa.removeClass('checked');


        var my_id = this.id;

        var mypart2 = my_id.split('-');
        //alert(mypart2);
        if (mypart2[2] == 2) {
          $('#btn_n_p2_' + mypart2[0]).html(
            '<button type="button" class="btn btn-block btn-primary" style="width:128px">Select</button>');

        } else {
          $('#btn_n_' + mypart2[0]).html(
            '<button type="button" class="btn btn-block btn-primary" style="width:128px">Select</button>');
        }



        var index = image_selected.indexOf(my_id);
        if (index > -1) {
          image_selected.splice(index, 1);
        }
      }
      $('#my_priotys').val(image_selected);
    })



  })
</script>
