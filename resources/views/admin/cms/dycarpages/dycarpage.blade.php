@extends('layouts.admin_main_body',['title' => 'Caryaati | Leads'])

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
								<h4 class="content-title mb-0 my-auto">{{__('Dynamic CarPages List')}}</h4>
                                <span class="text-muted mt-1 tx-13 ms-2 mb-0"></span>
							</div>
						</div>
						
					</div>
					
                    
                    
                    
					<!-- row opened -->
					 <div class="row">
						<div class="col-xl-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<!-- Shopping Cart-->
                                    
                                    <a href="{{route('dycarpage_add')}}" class="btn btn-success">+Add New</a>
                                 
								  <div class="product-details table-responsive text-nowrap">
									
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped table-hover">
                                          <tr>
                                              <td width="8%"><strong>S.no.</strong></td>
                                              <td width="43%"><strong>Page Name</strong></td>
                                              <td width="18%"><strong>Page Title</strong></td>
                                              
                                              <td width="17%"><strong>Status</strong></td>
                                              <td width="14%"><strong>Action</strong></td>
                                          </tr>

                                          <?php
                                            $i = 1;
											foreach($data as $items){

                                                $page_name =  $items->page_name;
                                                $page_title = $items->page_title;
                                               
                                                
                                                $status = $items->status;
                                                $page_id = $items->page_id;
												
												$lagn_ids = $items->lagn_ids;
												
												$exp_1 = explode(',',$lagn_ids);
                                               
                                                if ($status == 1) {
                                                    $status_label = "<span class='badge bg-success'>Enable</span>";
                                                } else if ($status == 2) {
                                                    $status_label = "<span class='badge bg-danger'>Disabled</span>";
                                                }
                                                $arabic_label = '';
												
                                                

                                            ?>

                                              <tr>
                                                  <td><?php echo $i; ?></td>
                                                  <td><?php echo $page_name; ?></td>
                                                  <td><?php echo $page_title; ?></td>
                                                 
                                                  <td><?php echo $status_label; ?></td>
                                                  <td>
							<button data-bs-toggle="dropdown" class="btn btn-primary btn-block">Languages <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                            <div class="dropdown-menu">
                             <a href="{{route('dycarpage_edit',['id'=>$page_id,'lang'=>'English'])}}" class="dropdown-item">English</a>
                            
                            <?php for($a=0; $a<count($exp_1); $a++){
										$exp_2 = explode('##',$exp_1[$a]);
										$lang_id_ln = $exp_2[0];
										$lang_name = $exp_2[1];
							?>
                            <a href="{{route('dycarpage_edit',['id'=>$lang_id_ln,'lang'=>$lang_name])}}" class="dropdown-item"><?php echo $lang_name;?></a>
                           
                           <?php }?>
                           
                           <a href="javascript:;" class="dropdown-item" onClick="Open_model('basicModal','modalbody','{{route('OpenModal')}}','<?php echo "admin.cms.dycarpages.AddModels,$page_id";?>','Add / Edit Car Models: <?php echo $page_name;?>','exampleModalLabel','larg')">Add/Edit Models</a>
                           
                        	</div><!-- dropdown-menu --></td>
                                              </tr>

                                          <?php $i++;
                                            }

                                            ?>
                                     </table>




                                   </td>
                           </table>
                                    
                                    
								  </div>
									
									
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


