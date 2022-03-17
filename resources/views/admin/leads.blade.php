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
								<h4 class="content-title mb-0 my-auto">Leads</h4>
                                <span class="text-muted mt-1 tx-13 ms-2 mb-0"></span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pe-1  mb-xl-0">
								<button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pe-1  mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->
					
                    
                    
                    
                    
                    
                    
                    <div class="row row-sm">
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-primary-gradient text-white ">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-trending-up tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Total Leads</span>
												<h2 class="text-white mb-0">{{$weight_array['total_leads']}}</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-danger-gradient text-white">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-trending-up tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Today's Leads</span>
												<h2 class="text-white mb-0">{{$weight_array['todays_leads']}}</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-success-gradient text-white">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fe fe-users tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Total Agents</span>
												<h2 class="text-white mb-0">{{$weight_array['total_agents']}}</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-12">
							<div class="card bg-warning-gradient text-white">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="icon1 mt-2 text-center">
												<i class="fa fa-car tx-40"></i>
											</div>
										</div>
										<div class="col-6">
											<div class="mt-0 text-center">
												<span class="text-white">Total Cars</span>
												<h2 class="text-white mb-0">{{$weight_array['total_models']}}</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
					<!-- row opened -->
					 <div class="row">
						<div class="col-xl-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<!-- Shopping Cart-->
                                    
                                    
                                    
                                    
                                    
                                     <div class="row bg-primary" style="height: 69px;padding-top: 15px; margin-bottom:10px;">
       
       <div class="col-md-2" align="center">
        
         <label style="margin-top:10px">
            <strong>Select Date Range</strong>
         </label>
	 </div>
    
    
         <div class="col-md-3">
            <div class="daterange-container">
               <div id="reportrange" class="form-control">
                  <span></span> <i class="icon-chevron-down down-arrow"></i>
               </div>
            </div>
         </div>
         
         <div class="col-md-2" align="center">
        
             <label style="margin-top:10px">
                <strong>Select Channel</strong>
       		  </label>
	 		</div>
         
        
                 <div class="col-md-2">
                   <select id="rew_type" class="form-control">
                        <option value="all">All Channels</option>
                        <option value="1">Call</option>
                        <option value="2">Email</option>
                         <option value="3">Adv.Reserve</option>
                     	<option value="4">WhatsApp</option>
                      
                      
                   </select>
                 </div>
                
                
                
                
                 <div class="col-md-2">
                   <select id="top_status" class="form-control">
                        <option value="all">All Status</option>
                        
                        @php
                    	$leads_status = \DB::select("select * from leads_status");
                    
                    
                        foreach ($leads_status as $item_ls){
                        
                            $status_name   = $item_ls->status_name; 
                            $l_id   	= $item_ls->id;   
                            $selected = '';
                             if($l_id==5)$selected =  'selected';
                              
                            echo  ' 
                                 <option value="'.$l_id.'" '.$selected.'>'.$status_name.'</option>
                               
                            '; 
                           
                        }//forach  
                        
                   		@endphp      
                        
                      
                      
                   </select>
                   
                   
                   <input id="my_lead_url" type="hidden" value="{{route('myleads')}}" />
                 </div>
                
                
                     <div class="col-md-1">
                        <button class="btn btn-success" id="view_btn" onClick="loadFilterszLeads('','no');">View</button>
                     </div>
                 
       </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
									<div class="product-details table-responsive text-nowrap" id="load_data_car">
										
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


