<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   {{-- <title>{{ config('app.name', 'Caryaati') }}</title>--}}
   
   <title>@isset($title) {{ $title }}  @endisset </title> 
    
  

 
   <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="">
		<meta name="Author" content="">
		<meta name="Keywords" content=""/>

		<!-- Title -->
		

		<!-- Favicon -->
		<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

		<!-- Bootstrap css -->
		<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

		<!--  Sidebar css -->
		<link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!--- Internal Morris css-->
		<link href="{{asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

		<!--- Style css --->
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/boxed.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/dark-boxed.css')}}" rel="stylesheet">

		<!--- Dark-mode css --->
		<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
        
        <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

		<!--Internal  Datetimepicker-slider css -->
		<link href="{{asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
        
       
        <!-- Internal Data table css -->
		<link href=" {{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
		<link href=" {{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
		<link href=" {{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />
		<link href=" {{asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
		<link href=" {{asset('assets/plugins/datatable/responsive.dataTables.min.css')}}" rel="stylesheet">
        
		<!--<link href=" {{asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
        <link href=" {{asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">-->
        
        <link href=" {{asset('assets/summernote/summernote.css')}}" rel="stylesheet">
        
      

</head>
<body class="main-body">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">
        
        
        @if(Request::is('admin/signin'))
        
        @else
        
        @include('admin.include.header_nav')
        
		@endif
         
         @yield('content')
         
    </div>
    
    
    
     <!--begin::Modal-->
               <div class="modal fade" id="basicModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document" id="modal-size">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      
                       <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        
                     </div>
                     <div class="modal-body" id="modalbody">

                     </div>

                   </div>
                 </div>
               </div>
               <!--end::Modal-->


               <!--begin::Modal-->
               <div class="modal fade" id="Editmodal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document" id="modal-size2">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel2">New message</h5>
                       <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        
                     </div>
                     </div>
                     <div class="modal-body" id="modalbody2">

                     </div>

                   </div>
                 </div>
               </div>
               <!--end::Modal-->
    
    
</body>
@yield('footer')
</html>
