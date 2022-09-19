// const { indexOf } = require("lodash");

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function printErrorMsg(msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display', 'block');
    $.each(msg, function (key, value) {
        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
    });
}
function printErrorMsg2(msg) {
    $(".print-error-msg2").find("ul").html('');
    $(".print-error-msg2").css('display', 'block');
    $.each(msg, function (key, value) {
        $(".print-error-msg2").find("ul").append('<li>' + value + '</li>');
    });
}
function printErrorMsg3(msg) {
    $(".print-error-msg3").find("ul").html('');
    $(".print-error-msg3").css('display', 'block');
    $.each(msg, function (key, value) {
        $(".print-error-msg3").find("ul").append('<li>' + value + '</li>');
    });
}

function step_one(url, form, redirect) {
         // console.log("Accepted")
         // } else {
         // console.log("Declined")
         var rizwan = document.getElementById(form);
         $.ajax({
             type: "POST",
             url: url,
             data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
             contentType: false, // The content type used when sending data to the server.
             cache: false, // To unable request pages to be cached
             processData: false,
             beforeSend: function () {
                 $("#loading1").show();
                 // // $(".request_call").hide();
                 $('.btn').prop('disabled', true);
                 // $('#' + btn).prop('disabled', true);

             },
             success: function (data) {
                 // alert(data);
                 if ($.isEmptyObject(data.error)) {
                     if(data == 1){
                         $("#MyForm").hide();
                         $("#MyForm2").show();
                     }else{
                         alert("Something Wrong");
                     }
                    //  alert(data.success);
                    //  $("#loading_num3").hide();
                     $('.btn').prop('disabled', false);
                    //  // window.location.href = 'https://soft.riuman.com/admin/activation'
                    //  window.location.href = redirect;
                 } else {
                     $('.btn').prop('disabled', false);
                     // alert("S");
                     $("#loading1").hide();
                     printErrorMsg(data.error);
                 }
             },
             error: function (data) {
                 printErrorMsg(data.responseJSON);

                 // alert(data.responseJSON);
                 // console.log(data.responseJSON);
                 // alert("fail");
             }

         });


}

function step_two(url, form, redirect,StripeRoute) {
         // console.log("Accepted")
         // } else {
         // console.log("Declined")
         var rizwan = document.getElementById(form);
         $.ajax({
             type: "POST",
             url: url,
             data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
             contentType: false, // The content type used when sending data to the server.
             cache: false, // To unable request pages to be cached
             processData: false,
             beforeSend: function () {
                 $("#loading2").show();
                 // // $(".request_call").hide();
                 $('.btn').prop('disabled', true);
                 // $('#' + btn).prop('disabled', true);

             },
             success: function (data) {
                 // alert(data);
                 if ($.isEmptyObject(data.error)) {
                    //  if(data == 1){
                          $("#MyForm2").hide();
                          $("#MyForm3").show();
                          $("#MyForm3").html(data);
                        //   LoadMoreCard(StripeRoute);
                        //   setTimeout(() => {
                        //       window.location.href = 'https://www.caryaati.com'
                        //   }, 5000);
                    //  }else{
                    //      alert("Something Wrong");
                    //  }
                    //  alert(data.success);
                    //  $("#loading_num3").hide();
                    //  $('.btn').prop('disabled', false);
                    //  // window.location.href = 'https://soft.riuman.com/admin/activation'
                    //  window.location.href = redirect;
                 } else {
                     $('.btn').prop('disabled', false);
                     // alert("S");
                     $("#loading2").hide();
                     printErrorMsg2(data.error);
                 }
             },
             error: function (data) {
                 printErrorMsg2(data.responseJSON);

                 // alert(data.responseJSON);
                 // console.log(data.responseJSON);
                 // alert("fail");
             }

         });


}

function FinalStep(url, form, redirect, StripeRoute) {
         // console.log("Accepted")
         // } else {
         // console.log("Declined")
         var rizwan = document.getElementById(form);
         $.ajax({
             type: "POST",
             url: url,
             data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
             contentType: false, // The content type used when sending data to the server.
             cache: false, // To unable request pages to be cached
             processData: false,
             beforeSend: function () {
                 $("#loading2").show();
                 // // $(".request_call").hide();
                 $('.btn').prop('disabled', true);
                 // $('#' + btn).prop('disabled', true);

             },
             success: function (data) {
                 // alert(data);
                 if ($.isEmptyObject(data.error)) {
                    //  if(data == 1){
                          $("#MyForm3").hide();
                          $("#div4").show();
                          $("#div4").html(data);
                        //   LoadMoreCard(StripeRoute);
                        //   setTimeout(() => {
                        //       window.location.href = 'https://www.caryaati.com'
                        //   }, 5000);
                    //  }else{
                    //      alert("Something Wrong");
                    //  }
                    //  alert(data.success);
                    //  $("#loading_num3").hide();
                    //  $('.btn').prop('disabled', false);
                    //  // window.location.href = 'https://soft.riuman.com/admin/activation'
                    //  window.location.href = redirect;
                 } else {
                     $('.btn').prop('disabled', false);
                     // alert("S");
                     $("#loading2").hide();
                     printErrorMsg2(data.error);
                 }
             },
             error: function (data) {
                 printErrorMsg2(data.responseJSON);

                 // alert(data.responseJSON);
                 // console.log(data.responseJSON);
                 // alert("fail");
             }

         });


}
function LoadMoreCard(url){
    // var
    var id = 1;
    $.ajax({
        type: "POST",
        url: url,
        data: {
            id:id
        }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false,
        beforeSend: function () {
            $("#loading2").show();
            // // $(".request_call").hide();
            $('.btn').prop('disabled', true);
            // $('#' + btn).prop('disabled', true);

        },
        success: function (data) {
            // alert(data);
            // console.log(data);
            $("#div3").html(data);
        },
        error: function (data) {
            printErrorMsg2(data.responseJSON);

            // alert(data.responseJSON);
            // console.log(data.responseJSON);
            // alert("fail");
        }

    });
}
//
//
function StripePay(url,form,Reload) {
    // var
    // var id = 1;

    var rizwan = document.getElementById(form);
    $.ajax({
        type: "POST",
        url: url,
        data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false,
        beforeSend: function () {
            $("#loading3").show();
            // // $(".request_call").hide();
            $('.btn').prop('disabled', true);
            // $('#' + btn).prop('disabled', true);

        },
        success: function (data) {
            // alert(data);
            // console.log(data);
            if(data == 1){
                window.location.href = Reload;
            }
            // $("#div3").html(data);
        },
        error: function (data) {
            printErrorMsg3(data.responseJSON);

            // alert(data.responseJSON);
            // console.log(data.responseJSON);
            // alert("fail");
        }

    });
}
// function step_two(){

// }

// public
function PackageChange(url,id){
    // alert(id);
    $.ajax({
        type: "POST",
        url: url,
        data: {
            id:id
        }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        // contentType: false, // The content type used when sending data to the server.
        // cache: false, // To unable request pages to be cached
        // processData: false,
        beforeSend: function () {
            // $("#loading3").show();
            // // $(".request_call").hide();
            // $('.btn').prop('disabled', true);
            // $('#' + btn).prop('disabled', true);

        },
        success: function (data) {
            // alert(data);
            // console.log(data);
            // if (data == 1) {
                // window.location.href = Reload;
            // }
            $("#no_of_cars").val(data);
            // $("#div3").html(data);
        },
        error: function (data) {
            // printErrorMsg3(data.responseJSON);

            // alert(data.responseJSON);
            // console.log(data.responseJSON);
            // alert("fail");
        }

    });
}
function PackageCalculate(url,id){
    // alert(id);
    var package_id = $("#package").val();
    $.ajax({
        type: "POST",
        url: url,
        data: {
            id:id,
            package_id: package_id
        }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        // contentType: false, // The content type used when sending data to the server.
        // cache: false, // To unable request pages to be cached
        // processData: false,
        beforeSend: function () {
            // $("#loading3").show();
            // // $(".request_call").hide();
            // $('.btn').prop('disabled', true);
            // $('#' + btn).prop('disabled', true);

        },
        success: function (data) {
            // alert(data);
            // console.log(data);
            // if (data == 1) {
                // window.location.href = Reload;
            // }
            $("#final-price").val(data);
            // $("#div3").html(data);
        },
        error: function (data) {
            // printErrorMsg3(data.responseJSON);

            // alert(data.responseJSON);
            // console.log(data.responseJSON);
            // alert("fail");
        }

    });
}
