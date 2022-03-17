
function Login(id,form,btn,ajaxpage,modal_id,load_after_saved,error_load,completed_message,data_load_to){

    var baseUrl = $('#baseUrl').val();
	//$('#' + btn).prop('disabled', true);
    var fromd = document.getElementById(form);
	var datas  = new FormData(fromd);

    $.ajax({
       type: "POST",
        url: ajaxpage,
        data: datas, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false,


        beforeSend: function () {
            
			 $("#"+error_load).html('<div align="center">Please wait..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 //$('#' + btn).prop('disabled', true);
        },
        success: function (data) {
           
            if ($.isEmptyObject(data.error)) {

				if(data.success=='success'){
                 $("#"+error_load).html('<div class="alert alert-success ">'+completed_message+'</div>');
				 
				 swal("Welcome Back!", "Login Successfull!", "success");
				 

				}

               
            } else {
                
				$('#' + btn).prop('disabled', false);
				$("#"+error_load).html('<div class="alert alert-danger myerror"><b>Invalid Error:</b><br><ul></ul></div>');
                $('.btn').prop('disabled', false);

				$("#"+error_load).find("ul").html('');
				$("#"+error_load).css('display', 'revert');
				$.each(data.error, function (key, value) {
					$(".myerror").find("ul").append('<li>' + value + '</li>');
				});

            }

        }
    });
    // })
}



function Singup(id,form,btn,ajaxpage,modal_id,load_after_saved,error_load,completed_message,data_load_to){

    var baseUrl = $('#baseUrl').val();
	//$('#' + btn).prop('disabled', true);
    var fromd = document.getElementById(form);
	var datas  = new FormData(fromd);

    $.ajax({
       type: "POST",
        url: ajaxpage,
        data: datas, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false,


        beforeSend: function () {
            
			 $("#"+error_load).html('<div align="center">Please wait..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 //$('#' + btn).prop('disabled', true);
        },
        success: function (data) {
           
            if ($.isEmptyObject(data.error)) {

				if(data.success=='success'){
                 $("#"+error_load).html('<div class="alert alert-success ">'+completed_message+'</div>');
				 
				 swal("Welcome!", "Account Created Successfull!", "success");
				 

				}

               
            } else {
                
				$('#' + btn).prop('disabled', false);
				$("#"+error_load).html('<div class="alert alert-danger myerror"><b>Invalid Error:</b><br><ul></ul></div>');
                $('.btn').prop('disabled', false);

				$("#"+error_load).find("ul").html('');
				$("#"+error_load).css('display', 'revert');
				$.each(data.error, function (key, value) {
					$(".myerror").find("ul").append('<li>' + value + '</li>');
				});

            }

        }
    });
    // })
}

