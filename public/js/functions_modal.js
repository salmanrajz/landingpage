$(document).ready(function(){
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});		   
						   
    $( document ).on( 'focus', ':input', function(){
        $( this ).attr( 'autocomplete', 'off' );
		
    });
});
function  Open_model(model_id,model_body_id,pageloading,id,modal_title,modal_titel_id,size){
	var baseUrl = $('#baseUrl').val();
	if(size=='larg'){
	$("#modal-size").addClass('modal-lg');
	}
	$("#"+model_id).modal({
        show: false,
        backdrop: 'static',keyboard: false
    });
	
	
	//alert(id);
	
	$("#"+model_id).modal('toggle');
	$("#"+modal_titel_id).html(modal_title);
	$("#"+model_body_id).html('<div align="center">Please wait loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
	$("#"+model_body_id).load(pageloading+'?id='+encodeURIComponent(id));
	
	//modal({backdrop: 'static', keyboard: false}) ; 
	//$(":input:first").focus(); 
	/*if(pageloading=='ConfigPages/AddbrandCdwRate'){
		$('html, body').animate({
					 scrollTop: $('#cdw_id').offset().top
					},1);
		
	}
	
	if(pageloading=='ConfigPages/AddParking'){
		$('html, body').animate({
					 scrollTop: $('#park_id').offset().top
					},1);
		
	}*/
	
}

function img_uplaod(id,btn,form_id,filename,ses_name,filed_num,file_id,validation){

			//alert('adf');
			uploading_url_img
			
			
			$('#load_img_data'+id).html('<div align="center">Please wait uploading..<img src="assets/spin.gif" /></div>');
			var rizwan=document.getElementById(form_id);
			
			//$("#").on('onChange',(function(e) {
			var formData = new FormData();
			formData.append(filename, $('input[type=file]')[filed_num].files[0]); 
			//e.preventDefault();
		//var ff = $('input[type=file]')[filed_num].files[0];
		//console.log(ff.clientWidth);
		//var  imgWidth = $("#"+file_id).width();
		//var  heightt = $("#"+file_id).height();
		//console.log(imgWidth);
		//console.log(heightt);
		//console.log(ff);
			var forms = true;
			var banner_type_id = '';
			var errrors = '';
			
			if(validation=='banner_be'){
				var banner_type_id = $('#banner_type').val();
				//alert(banner_type_id);
				if(banner_type_id==''){
						forms = false;
						errrors = '=> Please Select Banner Type';
				}
				
			}
			
			
			
			if(forms){
			
			$('#'+btn).prop('disabled', true);	
			$.ajax({
			type: "POST",
			url: "include/img_uplaod_dynamic_new?filename="+filename+'&ses_name='+ses_name+'&validation='+validation+'&banner_type='+banner_type_id,
			data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,      
			success: function(result){
				//alert(result);
				if(result==1){
				$('#load_img_data'+id).load('include/img_uplaod_dynamic_new?p=1&ses_name='+ses_name+'&banner_type='+banner_type_id,);
				$('#'+btn).prop('disabled', false);
				//$('#next').prop('disabled', false);
				}else{
				
				$('#load_img_data'+id).html('<div style="color:red;">'+result+'</div>');
				
				}
				
			
               
			  }
		
			  });
			//}));
		 }//form
		 else{
			 
			 $('#load_img_data'+id).html('<div style="color:red;">'+errrors+'</div>');
			 
			 }
				
}



function uploadingProgressbar(id,btn,form_id,filename,ses_name,filed_num,file_id,validation,cancel_btn){

			
			
			
			$('#load_img_data'+id).html('<div align="center">Please wait uploading..<div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"><span id="uploading_bar"></span></div></div>');
			var rizwan=document.getElementById(form_id);
			
			//$("#").on('onChange',(function(e) {
			var formData = new FormData();
			//formData.append(filename, $('input[type=file]')[filed_num].files[0]);
			
			var fileInput = $('#'+filename)[0].files[0];
			//file = fileInput.files[0];
			formData.append(filename, fileInput); 
			
			//var ff = $('input[type=file]')[filed_num].files[0];
			//console.log();
			fileName = fileInput.name;
			fileExtension = fileName.replace(/^.*\./, '');
			//console.log(fileExtension);
			
			var form = true;
			var errors = '';
			/*if(validation=='video'){
					if(fileExtension!='mp4'){
						form = false;
						errors+='Only mp4 Video Format allow<br>';
						}
				
				}*/
			
			
			
			if(form==true){
			
			
		
			$('#'+btn).prop('disabled', true);	
			$('#'+cancel_btn).prop('disabled', true);
			$('#'+file_id).prop('disabled', true);
			
			$.ajax({
			type: "POST",
			url: "includes/img_uplaod_dynamic_pro?filename="+filename+'&ses_name='+ses_name+'&validation='+validation,
			data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			xhr        : function ()
                {
                    var jqXHR = null;
                    if ( window.ActiveXObject )
                    {
                        jqXHR = new window.ActiveXObject( "Microsoft.XMLHTTP" );
                    }
                    else
                    {
                        jqXHR = new window.XMLHttpRequest();
                    }
                    //Upload progress
                    jqXHR.upload.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with upload progress
                           // console.log( 'Uploaded percent', percentComplete );
							$('#uploading_bar').html(percentComplete+'%');
                        }
                    }, false );
                    //Download progress
                    jqXHR.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with download progress
                            console.log( 'Downloaded percent', percentComplete );
                        }
                    }, false );
                    return jqXHR;
                },
			success: function(result){
				//alert(result);
				var parts = result.split('##');
				if(parts[0]==1){
					$('#load_img_data'+id).html('<div style="color:green;" onClick=\DeleteAttechment('+id+',"load_errrors","'+parts[1]+'","'+btn+'","'+cancel_btn+'","'+file_id+'","'+ses_name+'")>Remove</div>');
					
					$('#'+btn).prop('disabled', false);
					$('#'+cancel_btn).prop('disabled', false);	
				}else{
					
					$('#'+btn).prop('disabled', false);
					$('#'+cancel_btn).prop('disabled', false);	
					$('#'+file_id).prop('disabled', false);
				$('#load_img_data'+id).html('<div style="color:red;">'+result+'</div>');
				
				}
				
			
				
               
			  }
		
			  });
			//}));
		}else{
				$('#load_img_data'+id).html('<div style="color:red;">'+errors+'</div>');
				
				}
				
}


function DeleteAttechment(id,error_load,file_name,btn,cancelbtn,file_id,session_name){
			if(confirm("Are you sure want to remove this..?")){
			$('#'+error_load).html('<div align="center">Please wait...<img src="assets/spin.gif" /></div>');
			
			$('#'+btn).prop('disabled', true);	
			$('#'+cancelbtn).prop('disabled', true);	
			
			$.ajax({
			type: "POST",
			url: 'EduPages/ajax_edu',
			data: {DeleteAttechment:'yes' , filename:file_name, session_name:session_name}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			success: function(result){
				
				if(result==1) {
					$('#'+error_load).html('');
					$('#'+cancelbtn).prop('disabled', false);
					$('#'+btn).prop('disabled', false);
					$('#'+file_id).prop('disabled', false);
					$('#'+file_id).val('');
					$('#load_img_data'+id).html('');
				}else{
				$('#'+error_load).show();
				$('#'+error_load).html('<div class="alert alert-danger"><strong>Invalid Errors:<br></strong>'+result+'</div>');
				$('#'+btn).prop('disabled', false);
				
				}
				
			  }
		
			  });
			//}));
		}
				
}



function DeleteAttechmentFrom_id(id,error_load,file_name,file_id,attd_id,ajaxpage){
			if(confirm("Are you sure want to remove this..?")){
			$('#'+error_load).html('<div align="center">Removing<div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"></div></div>');
			
			
			$.ajax({
			type: "POST",
			url: ajaxpage,
			data: {DeleteAttechmentFrom:'yes' , filename:file_name, attd_id:attd_id,file_id:file_id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			success: function(result){
				
				if(result==1) {
					$('#'+error_load).html('');
					$('#'+file_id).prop('disabled', false);
					//$('#load_img_data'+id).html('');
					$('#load_img_data'+id).load('EmailPages/email_load_attechment?id='+id);
					
				}else{
				$('#'+error_load).show();
				$('#'+error_load).html('<div class="alert alert-danger"><strong>Invalid Errors:<br></strong>'+result+'</div>');
				
				
				}
				
			  }
		
			  });
			//}));
		}
				
}



function SavingData4545454(id,form,btn,ajaxpage,modal_id,load_after_saved,error_load,completed_message,data_load_to){
			
			$('#'+error_load).html('<div align="center">Please wait saving data..<img src="assets/spin.gif" /></div>');
			var rizwan=document.getElementById(form);
			alert('fgfg')
		
			$('#'+btn).prop('disabled', true);	
			$.ajax({
			type: "POST",
			url: ajaxpage,
			data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,      
			success: function(result){
				//alert(result);
				
				if(result==1) {
				
				$('#'+error_load).html('<div class="alert alert-success">'+completed_message+'</div>');
				
					setTimeout(function() { 
										$("#"+modal_id).modal('toggle');
										$('#'+data_load_to).html('<div align="center">Please wait Loading..<img src="assets/spin.gif"/></div>');
  										$('#'+data_load_to).load(load_after_saved);
										//window.location = load_after_saved;
										}, 1000);
					
					
					
					
				}else{
				$('#'+error_load).show();
				$('#'+error_load).html('<div class="alert alert-danger"><strong>Invalid Errors:<br></strong>'+result+'</div>');
				$('#'+btn).prop('disabled', false);
				
				}
				
			  }
		
			  });
			//}));
		
				
}



function SavingDatafdgfdg(id,form,btn,ajaxpage,modal_id,load_after_saved,error_load,completed_message,data_load_to){
			
			$('#'+error_load).html('<div align="center">Please wait saving data..<img src="assets/spin.gif" /></div>');
			var rizwan=document.getElementById(form);
			
		
			$('#'+btn).prop('disabled', true);	
			$.ajax({
			type: "POST",
			url: ajaxpage,
			data: new FormData(rizwan), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,      
			success: function(result){
				//alert(result);
				
				if(result==1) {
				
				$('#'+error_load).html('<div class="alert alert-success">'+completed_message+'</div>');
				
					setTimeout(function() { 
										$("#"+modal_id).modal('toggle');
										
  										
										if(data_load_to=='redirect'){
												window.location = load_after_saved;
										}else{
												$('#'+data_load_to).html('<div align="center">Please wait Loading..<img src="assets/img/loading-spinner-blue.gif"/></div>');
											
												$('#'+data_load_to).load(load_after_saved);
											}
										}, 1000);
					
					
					
					
				}else{
				$('#'+error_load).show();
				$('#'+error_load).html('<div class="alert alert-danger"><strong>Invalid Errors:<br></strong>'+result+'</div>');
				$('#'+btn).prop('disabled', false);
				
				}
				
			  }
		
			  });
			//}));
		
				
}


function uploadingProgressbar2(id,btn,form_id,filename,ses_name,filed_num,file_id,validation,error_load){

			 
			 var baseUrl = $('#baseUrl').val();
			 var uploading_url_img = $('#uploading_url_img').val();
			 var uploading_access_img = $('#uploading_access_img').val();
			 
			$("#"+error_load).html('<div align="center">Please wait uploading...<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /><span class="uploading_bar"></span></div>');
		
			//$('#load_img_data'+id).html('<div align="center">Please wait uploading..<div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"></div></div>');
			
			
			var rizwan=document.getElementById(form_id);
			
			//$("#").on('onChange',(function(e) {
			var formData = new FormData();
			//formData.append(filename, $('input[type=file]')[filed_num].files[0]);
			
			var fileInput = $('#'+filename)[0].files[0];
			//file = fileInput.files[0];
			formData.append(filename, fileInput); 
			//alert(ses_name);
			formData.append('filename', fileInput); 
			formData.append('ses_name', ses_name); 
			formData.append('validation', validation);
			formData.append('filename2', filename);
			 
			
			//var ff = $('input[type=file]')[filed_num].files[0];
			//console.log();
			fileName = fileInput.name;
			fileExtension = fileName.replace(/^.*\./, '');
			//console.log(fileExtension);
			
			var form = true;
			var errors = '';
			/*if(validation=='video'){
					if(fileExtension!='mp4'){
						form = false;
						errors+='Only mp4 Video Format allow<br>';
						}
				
				}*/
			var allow_limit = '2000000';
			var imgsize = document.getElementById(filename).files[0].size
			if(imgsize>allow_limit){
					form = false;
					$('#load_img_data'+id).html('<div style="color:red;">Maximum Image Size/ Volume 2Mb</div>');
				}
			
			if(form==true){
			
			
		
			//$('#'+btn).prop('disabled', true);	
			//$('#'+cancel_btn).prop('disabled', true);
			//$('#'+file_id).prop('disabled', true);
			
			$.ajax({
			type: "POST",
			url: uploading_url_img,
			data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			xhr        : function ()
                {
                    var jqXHR = null;
                    if ( window.ActiveXObject )
                    {
                        jqXHR = new window.ActiveXObject( "Microsoft.XMLHTTP" );
                    }
                    else
                    {
                        jqXHR = new window.XMLHttpRequest();
                    }
                    //Upload progress
                    jqXHR.upload.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with upload progress
                           // console.log( 'Uploaded percent', percentComplete );
							$('.uploading_bar').html(percentComplete+'%');
                        }
                    }, false );
                    //Download progress
                    jqXHR.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with download progress
                            //console.log( 'Downloaded percent', percentComplete );
                        }
                    }, false );
                    return jqXHR;
                },
			success: function(result){
				//alert(result);
				//var parts = result.split('##');
				
				if(result==1){
					$('#load_img_data'+id).load(uploading_access_img+'/?ses_name='+ses_name);
					$('#'+btn).prop('disabled', false);
				//$('#next').prop('disabled', false);
				}else{
				
					$('#load_img_data'+id).html('<div style="color:red;">'+result+'</div>');
				
				}
				
			
				
               
			  }
		
			  });
			//}));
		}else{
				$('#load_img_data'+id).html('<div style="color:red;">'+errors+'</div>');
				
				}
				
}



function uploadingProgressbarfor_files(id,btn,form_id,filename,ses_name,filed_num,file_id,validation,cancel_btn){

			
			var allow_limit = '4000000';
			
			//$('#load_img_data'+id).html('<div align="center">Please wait uploading..<div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"><span id="uploading_bar"></span></div></div>');
			
			var mydatass=document.getElementById(form_id);
			
			//$("#").on('onChange',(function(e) {
			var formData = new FormData();
			//formData.append(filename, $('input[type=file]')[filed_num].files[0]);
			
			var fileInput = $('#'+filename)[0].files[0];
			//file = fileInput.files[0];
			formData.append(filename, fileInput); 
			
			//var ff = $('input[type=file]')[filed_num].files[0];
			//console.log();
			fileName = fileInput.name;
			fileExtension = fileName.replace(/^.*\./, '');
			//console.log(fileExtension);
			var imgsize = $('input[type=file]')[filed_num].files[0].size;
			
			var form = true;
			var errors = '';
				
				if(imgsize>allow_limit){
					form = false;
					  errors = 'Maximum Image Size/ Volume 4Mb';
					 //alert('asd');
				}
			
			
			/*if(validation=='video'){
					if(fileExtension!='mp4'){
						form = false;
						errors+='Only mp4 Video Format allow<br>';
						}
				
				}*/
			
			
			
			if(form==true){
			
			$('#load_erros_img'+id).html('<div align="center">Please wait uploading..<div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"><span class="uploading_bar"></span></div></div>');
		
			//$('#'+btn).prop('disabled', true);	
			$('#'+cancel_btn).prop('disabled', true);
			//$('#'+file_id).prop('disabled', true);
			
			$.ajax({
			type: "POST",
			url: "include/img_uplaod_dynamic_pro?filename="+filename+'&ses_name='+ses_name+'&validation='+validation+'&idd='+id,
			data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			xhr        : function ()
                {
                    var jqXHR = null;
                    if ( window.ActiveXObject )
                    {
                        jqXHR = new window.ActiveXObject( "Microsoft.XMLHTTP" );
                    }
                    else
                    {
                        jqXHR = new window.XMLHttpRequest();
                    }
                    //Upload progress
                    jqXHR.upload.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with upload progress
                           // console.log( 'Uploaded percent', percentComplete );
							$('#uploading_bar').html(percentComplete+'%');
                        }
                    }, false );
                    //Download progress
                    jqXHR.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with download progress
                            console.log( 'Downloaded percent', percentComplete );
                        }
                    }, false );
                    return jqXHR;
                },
			success: function(result){
				//alert(result);
				var parts = result.split('##');
				if(parts[0]==1){
					//$('#load_img_data'+id).html('<div style="color:green;" onClick=\DeleteAttechment('+id+',"load_errrors","'+parts[1]+'","'+btn+'","'+cancel_btn+'","'+file_id+'","'+ses_name+'")>Remove</div>');
					$('#load_img_data'+id).load('EmailPages/email_load_attechment?id='+id);
					$('#load_erros_img'+id).html('');
					$('#'+btn).prop('disabled', false);
					$('#'+cancel_btn).prop('disabled', false);	
					$("#"+file_id).val(null);
				}else{
					
					$('#'+btn).prop('disabled', false);
					$('#'+cancel_btn).prop('disabled', false);	
					$('#'+file_id).prop('disabled', false);
				$('#load_erros_img'+id).html('<div style="color:red;">'+result+'</div>');
				
				}
				
			
				
               
			  }
		
			  });
			//}));
		}else{
				$('#load_erros_img'+id).html('<div style="color:red;">'+errors+'</div>');
				
				}
				
}

function OpenWindURL2(url,width,height) {
	popupWindow = window.open(
		url,'popUpWindow','height='+height+',width='+width+',left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=yes,location=no,directories=no,status=yes')
}


function SavingData(id,form,btn,ajaxpage,modal_id,load_after_saved,error_load,completed_message,data_load_to){

    var baseUrl = $('#baseUrl').val();
	$('#' + btn).prop('disabled', true);
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
            
			 $("#"+error_load).html('<div align="center">Please wait loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 //$('#' + btn).prop('disabled', true);
        },
        success: function (data) {
           
            if ($.isEmptyObject(data.error)) {

				if(data.success=='success'){
                 $("#"+error_load).html('<div class="alert alert-success ">'+completed_message+'</div>');
				 
				 if(modal_id!='no_modal')$('#'+modal_id).modal('toggle');
				 if(data_load_to=='redirect'){
					window.location = load_after_saved;	 
				 }
				 else  if(data_load_to=='fun'){
					window[load_after_saved]();
				 }
				 

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



function load_carList(click_type){
	 var baseUrl = $('#baseUrl').val();
	  var car_lis_url = $('#car_lis_url').val();
	  
	  var make_id = $('#make_id').val();
	  var type_id = $('#type_id').val();
	  var brand_id = $('#brand_id').val();
	  var model_id = $('#model_id').val();
	  
	 var by_price 		= $('#by_price').val();
	 var by_price_type = $('#by_price_type').val();
	 var searching = $('#searching').val();
	 if(click_type=='searching'){
		 
		  make_id   = 'all';
	  	  type_id   = 'all';
	 	  brand_id  = 'all';
	  	  model_id  = 'all';
		 
	}else{
		$('#searching').val('');
		}
	 
	 $.ajax({
       type: "GET",
        url: car_lis_url,
        data: {
				make_id:make_id,
				type_id:type_id,
				brand_id:brand_id,
				model_id:model_id,
				click_type:click_type,
				by_price:by_price,
				by_price_type:by_price_type,
				searching:searching,
				
		
		}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        beforeSend: function () {
            
			 $("#load_data_car").html('<div align="center">Loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 
        },
        success: function (data) {
           	$("#load_data_car").html(data);
            
           

        }
    });
	
}


function load_category(click_type){
	 var baseUrl = $('#baseUrl').val();
	  var car_category_url = $('#car_category_url').val();
	  
	  var make_id = $('#make_id').val();
	  var type_id = $('#type_id').val();
	  var brand_id = $('#brand_id').val();
	  var model_id = $('#model_id').val();
	  
	  
	 
	 $.ajax({
       type: "GET",
        url: car_category_url,
        data: {
				make_id:make_id,
				type_id:type_id,
				brand_id:brand_id,
				model_id:model_id,
				click_type:click_type,
				
		
		}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        beforeSend: function () {
            
			// $("#load_data_car").html('<div align="center">Loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 
        },
        success: function (data) {
			
			var parts = data.split(',,');
			//alert(parts[1]);
           	$("#type_id").html(parts[0]);
            $('#type_id').select2();
			
			$("#brand_id").html(parts[1]);
            $('#brand_id').select2();
			
			$("#model_id").html(parts[2]);
            $('#model_id').select2();
           

        }
    });
	
}


function load_MyList(click_type){
	  var baseUrl = $('#baseUrl').val();
	  var car_mylist_url = $('#car_mylist_url').val();
	  
	 /* var make_id = $('#make_id').val();
	  var type_id = $('#type_id').val();
	  var brand_id = $('#brand_id').val();
	  var model_id = $('#model_id').val();
	  
	 var by_price 		= $('#by_price').val();
	 var by_price_type = $('#by_price_type').val();*/
	 var searching = $('#searching').val();
	 if(click_type=='searching'){
		 
		  /*make_id   = 'all';
	  	  type_id   = 'all';
	 	  brand_id  = 'all';
	  	  model_id  = 'all';*/
		 
	}else{
		$('#searching').val('');
		}
	 
	 $.ajax({
       type: "GET",
        url: car_mylist_url,
        data: {
				//make_id:make_id,
				//type_id:type_id,
				//brand_id:brand_id,
				//model_id:model_id,
				click_type:click_type,
				//by_price:by_price,
				//by_price_type:by_price_type,
				searching:searching,
				
		
		}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        beforeSend: function () {
            
			 $("#load_data_car").html('<div align="center">Loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 
        },
        success: function (data) {
           	$("#load_data_car").html(data);
            
           

        }
    });
	
}


function loadFilterszLeads(id,status){
			
			//$('#view_btn').prop('disabled', true);	
			$("#load_data").html("<div align = 'center'>Please Wait Loading...<img src='assets/spin.gif' /></div>");
			var start_date = $('#reportrange').data('daterangepicker').startDate.format('YYYY-MM-DD');
			var end_date = $('#reportrange').data('daterangepicker').endDate.format('YYYY-MM-DD');
			
			var rew_type = $('#rew_type').val();
			//alert(status);
			if(status=='no'){
				 status = $('#top_status').val();
				 //alert(status);
			}
			 var baseUrl = $('#baseUrl').val();
	  		 var ajaxurl = $('#my_lead_url').val();
			
			
			 //$("#load_data").load('ReservationPages/callrequest?from='+encodeURIComponent(start_date)+'&too='+encodeURIComponent(end_date)+'&rew_type='+rew_type+'&id='+id+'&status='+status);
			 
			  $.ajax({
			   type: "POST",
				url: ajaxurl,
				data: { from:start_date,
						too:end_date,
						rew_type:rew_type,
						id:id,
						status:status,
				}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				beforeSend: function () {
				$("#load_data_car").html('<div align="center">Loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
					 
				},
				success: function (data) {
					$("#load_data_car").html(data);
					
				   
		
				}
    });
			 
				
			
			
}	

function LeadsStatusChange(req_type,id,ajaxurl){
		var setvalue = $('#leads_status_'+id).val();
		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: {req_type:req_type , id:id, setvalue:setvalue}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			
			success: function(result) {
				//alert(result);

				if (result == 1) {

					//$('#' + error_load).html('<div class="alert alert-success">' + completed_message + '</div>');



				} 

			}

		});
		//}));


}


function load_modelsdats(url,id){
 			var baseUrl = $('#baseUrl').val();
			var load_url = $('#load_url').val();
			var promo_id = $('#promo_id').val();
			
			 $('#load_model_data').html('<div align="center">Loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
			
             $("#load_model_data").load(load_url+'?promo_id='+promo_id);
}


// Web Front site
function Generate_comaValues(checkBoxid){
	var result = $('input[id="'+checkBoxid+'"]:checked');
     var resultString = $('input[id="'+checkBoxid+'"]:checked').map(function () {
        return this.value;
        }).get().join(",");
	}


function load_carList_frontweb(click_type,tab_id){
	 var baseUrl = $('#baseUrl').val();
	  var car_lis_url = $('#my_car_listing').val();
	  
	  var make_id = $('#make_id').val();
	  var type_id = $('#type_id').val();
	  var brand_id = $('#brand_id').val();
	  var model_id = $('#model_id').val();
	  
	 var by_price 		= $('#by_price').val();
	 var by_price_type = $('#by_price_type').val();
	 var searching = $('#searching').val();
	 var slug = $('#slug').val();
	 
	var engin_values =  Generate_comaValues('engin_values');
	var passenger_values =  Generate_comaValues('passenger_values');
	var cate_values =  Generate_comaValues('cate_values');
	
	 var days = $('#days').val();
	 var sorting= $("input[name='sorting']:checked").val();
	 var other_charges= $("input[name='other_charges']:checked").val();
	 
	  var mini_price= $("#mini_price").val();
	  var max_price= $("#max_price").val();
	  var rangtype= $("#rangtype").val();
	 //alert(other_charges);
	 
	 if(click_type=='searching'){
		 
		  make_id   = 'all';
	  	  type_id   = 'all';
	 	  brand_id  = 'all';
	  	  model_id  = 'all';
		 
	}else{
		$('#searching').val('');
		}
	 
	 $.ajax({
       type: "GET",
        url: car_lis_url,
        data: {
				make_id:make_id,
				type_id:type_id,
				brand_id:brand_id,
				model_id:model_id,
				click_type:click_type,
				by_price:by_price,
				by_price_type:by_price_type,
				searching:searching,
				slug:slug,
				tab_id:tab_id,
				engin_values: engin_values,
				passenger_values: passenger_values,
				cate_values: cate_values,
				total_days:days,
				sorting:sorting,
				other_charges:other_charges,
				max_price:max_price,
				mini_price:mini_price,
				click_type:click_type,
				rangtype:rangtype,
				
				
		
		}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        beforeSend: function () {
            //$(".tab-content").tabs();  
			
			$('html, body').animate({
                
                scrollTop: $("#mylistt").offset().top

            }, 500);
			 $("#"+tab_id).html('<div align="center">Loading..<img src="'+baseUrl+'/assets/img/loader.svg"  width="30" /></div>');
  			 
        },
        success: function (data) {
           	$("#"+tab_id).html(data);
            
           

        }
    });
	
}
function GetDaysColum(days){
	$('#days').val(days);
	load_carList_frontweb('','tab-11');
	}
	
function SearchQuickly(url){
	var home_search = $('#home_search').val();
	
	if(home_search==null)swal ( "Oops" ,  "Please Enter Car Name!" ,  "error" )
	home_search = home_search.replace(" ", "-");
	window.location = url+'/'+home_search;
	
	}	
	




function GetRangFromDWM(url, rate_type, loadtype, ftp) {

    var last_days = $("#quick_days_newww").val();
    if (ftp == '1') {} else {

        console.log(last_days);

        if (last_days == 0 || last_days == undefined) {
            var new_days;
            if (rate_type == 'D') new_days = 3;
            if (rate_type == 'W') new_days = 7;
            if (rate_type == 'M') new_days = 30;
        } else {
            var new_days = last_days;


        }



        if (rate_type == 'D') {
            $("#quick_days").val(new_days).trigger('change');
        } else if (rate_type == 'W') {
            console.log(new_days);
            $("#quick_days").val(new_days).trigger('change');
        } else if (rate_type == 'M') {
            $("#quick_days").val(new_days).trigger('change');
            // $("#monthly_dates_vendor_booking").val('30');
        }
    }
    // var myurl = $("#myurl").val();
    $.ajax({
        type: "GET",
        url: url,
        data: {
            priceRange: 'yes',
            rate_type: rate_type
        }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        success: function (result) {
            //alert(result);
            var parts = result.split('##');
            var mini = parts[0];
            var maxx = parts[1];
            var symbals = parts[2];
            $("#rang_slider_normal_list").slider({
                range: true,
                min: 0,
                max: maxx,
                values: [mini, maxx],
                slide: function (event, ui) {
                    // $("#amount").val("AED " + ui.values[0] + " - AED " + ui.values[1]);
                    $("#price_range").html(symbals + "" + ui.values[0] + ' - ' + symbals + " " + ui.values[1]);

                    var a = $("#mini_price").val(ui.values[0]);
                    var b = $("#max_price").val(ui.values[1]);
                    var rate = rate_type + ',' + $("#mini_price").val() + ',' + $("#max_price").val();
                   // FilterAnalysis($("#range").val(), rate, 'price_range');
				   
                    // getresult(myurl+'getresult.php','l2h','price_range');
                    // $("#rangtype").val(rate_type);
                },
				
				
				  stop: function( event, ui ,rate) {
					    var a = $("#mini_price").val(ui.values[0]);
                    	var b = $("#max_price").val(ui.values[1]);
                    	var rate = rate_type + ',' + $("#mini_price").val() + ',' + $("#max_price").val();	
					   //FilterAnalysis($("#range").val(), rate, 'price_range');
					   load_carList_frontweb('rang_filterz','tab-11');
					  }
				
				
				
            });
            $("#price_range").html(symbals + ' ' + $("#rang_slider_normal_list").slider("values", 0) +
                " - " + symbals + " " + $("#rang_slider_normal_list").slider("values", 1));
			
            if (loadtype == 'no_set_mini_max') {
                console.log(rate_type);
                $("#mini_price").val(mini);
                $("#max_price").val(maxx);
                $("#rangtype").val(rate_type);
                $("#monthly_range").prop('checked', 'true');
                $("#monthly_range").attr('checked', 'true');
                // alert("s");
                // console.log(rate_type);
            } else {
                console.log(rate_type);
                $("#mini_price").val(mini);
                $("#max_price").val(maxx);
                $("#rangtype").val(rate_type);

            }


        }

    });



}














$(document).ready(function(){
	
	
	
	$("input.engin_values").click(function () {
    
		$("input.cate_values").prop('checked', false);
		$("input.passenger_values").prop('checked', false);
		$("input#min_additional_driver_charges").prop('checked', false);
		$("input#min_delviery_charges").prop('checked', false);
	});
	
	$("input.cate_values").click(function () {
    
		$("input.engin_values").prop('checked', false);
		$("input.passenger_values").prop('checked', false);
		$("input#min_additional_driver_charges").prop('checked', false);
		$("input#min_delviery_charges").prop('checked', false);
	});
	
	$("input.passenger_values").click(function () {
    
		$("input.engin_values").prop('checked', false);
		$("input.cate_values").prop('checked', false);
		$("input#min_additional_driver_charges").prop('checked', false);
		$("input#min_delviery_charges").prop('checked', false);
	});
	
	$("input#min_additional_driver_charges").click(function () {
    
		$("input.engin_values").prop('checked', false);
		$("input.cate_values").prop('checked', false);
		$("input.passenger_values").prop('checked', false);
		$("input#min_delviery_charges").prop('checked', false);
	});
	
	$("input#min_delviery_charges").click(function () {
    
		$("input.engin_values").prop('checked', false);
		$("input.cate_values").prop('checked', false);
		$("input.passenger_values").prop('checked', false);
		$("input#min_additional_driver_charges").prop('checked', false);
	});
	
	
	
	 $("#rang_slider_normal_list").slider({
                range: true,
                min: 0,
                max: 250,
                values: [100, 250],
              slide: function (event, ui) {
                   // $("#amount").val("AED " + ui.values[0] + " - AED " + ui.values[1]);
				   var symbals = 'AED';
					$("#price_range").html(symbals+" " + ui.values[0] +' - '+ symbals+" " + ui.values[1]);

                    var a = $("#mini_price").val(ui.values[0]);
                    var b = $("#max_price").val(ui.values[1]);
                    var rate =  'DDD,' + $("#mini_price").val() + ',' + $("#max_price").val();
                    //FilterAnalysis(, rate, 'price_range');
					//$('#price_range').val(rate);
					//FilterAnalysisCheckboxNew($("#range").val(), 'price_range','price_range')
					
                    // getresult(myurl+'getresult.php','l2h','price_range');
                    // $("#rangtype").val(rate_type);
                },
				
				stop: function (event, ui) {
					//alert('asdf');
					//FilterAnalysisCheckboxNew($("#range").val(), 'price_range','price_range');
				}
				
				
            });
	 
	 	$('#start_date').daterangepicker({
			singleDatePicker: true,
			minDate: moment(),
			autoUpdateInput: false,
			timePicker: true,
			locale: {
				format: 'DD-MM-YYYY hh:mm A'
			}
		}, function (chosen_date) {
			$('#start_date').val(chosen_date.format('DD-MM-YYYY hh:mm A'));
			//date_diff_airport();
		});
		
		
		$('#home_search').select2({
        placeholder: 'Enter Car Name',
        // dropdownParent: $('#AddSkill'),
        //theme: 'bootstrap4',
        // dropdownParent: $('#sidebar'),
        // tags: true,
        minimumInputLength: 2,
        ajax: {
            url: $("#search_vehicle").val(),
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.source,
                            id: item.source
                        }
                    })
                };

            }
        }
    });
		

});