@extends('layouts.admin_main_body',['title' => 'Caryaati | Testimonials List'])

@section('content')
@inject('provider', 'App\Http\Controllers\HomeController')

@php 
$vatvalue = $provider::getvaluefromConfigSetups(49,214);
@endphp


		<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container opened -->
				<div class="container" id="mylistt">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">{{__('Testimonials List')}}</h4>
                                <span class="text-muted mt-1 tx-13 ms-2 mb-0"></span>
							</div>
						</div>
						
					</div>
					<!-- breadcrumb -->
					
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
					<!-- row opened -->
					 <div class="row">
						<div class="col-xl-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<!-- Shopping Cart-->
                                    
                                    <a href="javascript:;" class="btn btn-success" onClick="Open_model('basicModal','modalbody','{{route('OpenModal')}}','<?php echo "admin.cms.testimonials.AddTesti,0,1";?>','Add New Testimonial','exampleModalLabel','larg')">+Add New</a>
                                 
								 
									
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped table-hover"   >
  <tr>
    <td width="5%"><strong>S.no.</strong></td>
    <td width="13%"><strong>Name</strong></td>
    <td width="14%"><strong>Company</strong></td>
    <td width="41%"><strong> Message</strong></td>
    <td width="9%"><strong>Status</strong></td>
    <td width="18%"><strong>Action</strong></td>
  </tr>
  
  <?php
    
    $i = 1;
    foreach($data as $items){

		
		$name 			=  $items->name;
		$company 		=  $items->company;
		$status			=  $items->status;
		$create_date 	=  $items->create_date;
		$message 		=  $items->message;
		$status 		=  $items->status;
		$testi_id 		=  $items->t_id;
		
		
		
		$create_date = date('d-m-Y',strtotime($create_date));
		$lagn_ids = $items->lagn_ids;
												
		$exp_1 = explode(',',$lagn_ids);
		

        if ($status == 1) {
            $status_label = "<span class='badge bg-success'>Enable</span>";
        }
		else if ($status == 2) {
			  $status_label = "<span class=' badge bg-danger'>Disabled</span>";
			}
			
			
			
			 
			
			
        ?>
  
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $company;?></td>
    <td><?php echo $message;?></td>
    <td ><?php echo $status_label;?></td>
    <td>
    
   
      
      <button data-bs-toggle="dropdown" class="btn btn-primary btn-block">Edit Languages <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                            <div class="dropdown-menu">
                             <a href="javascript:;" class="dropdown-item" onClick="Open_model('basicModal','modalbody','{{route('OpenModal')}}','<?php echo "admin.cms.testimonials.AddTesti,$testi_id,1";?>','Edit Testimonials','exampleModalLabel','larg')">English</a>
                            
                            <?php $lang_data = \DB::select("select a.t_id ,a.lang_id,b.lang_name from fr_testimonial a
							LEFT JOIN fr_languages b ON a.lang_id = b.lang_id
							where a.parent_id = '$testi_id'");
                    
                    // $count = count($cp);
                   
                    
                     
                        foreach ($lang_data as $item_cp){
                        
                            $t_id   = $item_cp->t_id; 
							$lang_id   = $item_cp->lang_id; 
							$lang_name   = $item_cp->lang_name; 
			
							?>
                            <a href="javascript:;" class="dropdown-item" onClick="Open_model('basicModal','modalbody','{{route('OpenModal')}}','<?php echo "admin.cms.testimonials.AddTesti,$t_id,$lang_id";?>','Edit Testimonials','exampleModalLabel','larg')"><?php echo $lang_name;?></a>
                           
                           <?php }?>
                        	</div><!-- dropdown-menu -->          </td>
  </tr>
  
   <?php $i++;}
   
?>
</table>




                                   </td>
                           </table>
                                    
                                    
								
									
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
   <style>
#chartdiv2{
	 	 width: 100%;
         height: 350px;
	}
	
#chartdiv{
	 	 width: 100%;
         height: 350px;
	}
</style>
    
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>      
@endsection
@extends('layouts.admin_footer')


