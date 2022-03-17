<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
@extends('layouts.admin_main_body',['title' => 'Caryaati | Car Details'])



@section('content')
@inject('provider', 'App\Http\Controllers\HomeController')

@php 
$vatvalue = $provider::getvaluefromConfigSetups(49,214);
@endphp

@foreach ($data as $item)
		
        
        @php  $vendor_id_single = $item->vendor_id;
        
        $model_id = $item->model_id;
        
        echo  $brand_id = $item->brand_id;
         $protection_id = $item->protection_id;
        @endphp
			<!-- main-content opened -->
		<div class="main-content horizontal-content">

			<!-- container opened -->
			<div class="container">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> Car Details </h4><span class="text-muted mt-1 tx-13 ms-2 mb-0"> </span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pe-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pe-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pe-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
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

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body h-100">
								<div class="row row-sm ">
									<div class=" col-xl-5 col-lg-12 col-md-12">
										<div class="preview-pic tab-content">
										  <div class="tab-pane active" id="pic-1"><img src="https://www.caryaati.com/erps/admin/images/model/{{$item->img_name}}" alt="image"/></div>
										  <div class="tab-pane" id="pic-2"><img src="../../assets/img/ecommerce/shirt-2.png" alt="image"/></div>
										  <div class="tab-pane" id="pic-3"><img src="../../assets/img/ecommerce/shirt-3.png" alt="image"/></div>
										  <div class="tab-pane" id="pic-4"><img src="../../assets/img/ecommerce/shirt-4.png" alt="image"/></div>
										  <div class="tab-pane" id="pic-5"><img src="../../assets/img/ecommerce/shirt-1.png" alt="image"/></div>
										</div>
										<ul class="preview-thumbnail nav nav-tabs">
										  <li class="active"><a data-bs-target="#pic-1" data-bs-toggle="tab"><img src="https://www.caryaati.com/erps/admin/images/model/{{$item->img_name}}" alt="image"/></a></li>
										  <li><a data-bs-target="#pic-2" data-bs-toggle="tab"><img src="../../assets/img/ecommerce/shirt-2.png" alt="image"/></a></li>
										  <li><a data-bs-target="#pic-3" data-bs-toggle="tab"><img src="../../assets/img/ecommerce/shirt-3.png" alt="image"/></a></li>
										  <li><a data-bs-target="#pic-4" data-bs-toggle="tab"><img src="../../assets/img/ecommerce/shirt-4.png" alt="image"/></a></li>
										  <li><a data-bs-target="#pic-5" data-bs-toggle="tab"><img src="../../assets/img/ecommerce/shirt-1.png" alt="image"/></a></li>
										</ul>
									</div>
									<div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
										<h4 class="product-title mb-1">{{$item->make_name.' '.$item->brand_name.' '.$item->model_name}}</h4>
										
                                        
										<h6 class="price">
                                        
                                        @php
                                             $daily_vat =  $provider::CalulateVatAMount($item->daily_rate,$vatvalue)+$item->daily_rate;
                                             $weekly_vat =  $provider::CalulateVatAMount($item->weekly_rate,$vatvalue)+$item->weekly_rate;;
                                             $monthly_vat =  $provider::CalulateVatAMount($item->monthly_rate,$vatvalue)+$item->monthly_rate;;
                                            @endphp
                                            
                                            Daily: {{round($daily_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Weekly: {{round($weekly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Monthly: {{round($monthly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.
                                        
                                        
                                        
                                        
                                          <!--  Daily: {{ $item->daily_rate}} AED /per day<br>
                                            Weekly: {{$item->weekly_rate}} AED /per day<br>
                                            Monthly: {{ $item->monthly_rate}} AED /per day-->
                                           <!-- <span class="h3 ms-2"></span>-->
                                           
                                           </h6>
                                           
                                       <p class="product-description">
                                       <table align="center" width="100%">
                                        <tbody>

                                            @if($item->specs_value!=NULL)
                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <!-- <i class="fa fa-gas-pump" data-toggle="tooltip" title="Engin Capacity"></i>-->
                                                    <img src="{{url('/').'/assets/engin_img.png'}}" width="15" />
                                                    Engin Capacity:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;">
                                                    <span data-toggle="tooltip" data-placement="right"
                                                        data-original-title="This is the engin capacity of this vehicle"
                                                        class="red-tooltip f11">{{$item->specs_value}}</span>
                                                </td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <i class="fa fa-gas-pump" ></i>
                                                    Fuel Policy:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;">
                                                    <span data-toggle="tooltip" data-placement="right"
                                                        data-original-title="The vehicle should be returned with the same amount of fuel as delivered."
                                                        class="red-tooltip f11">Level to Level</span>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <i class="fa fa-tachometer-alt"></i>
                                                    Mileage:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;" class="f11">
                                                    <span data-toggle="tooltip" data-placement="right"
                                                        data-original-title="This is the mileage limit of the vehicle for selected rental period"
                                                        class="red-tooltip f18">
                                                        {{$ppp = $provider::mileage($item->partner_id,'all',30)}} KM
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <i class="flati-icon fas fa-money-bill"></i>
                                                    Deposit:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;" class="f11">
                                                    <span data-toggle="tooltip" data-placement="right"
                                                        data-original-title="Deposit amount to be paid as security and is refundable after deduction in case of damage or other deductible charges"
                                                        class="red-tooltip f18">
                                                        
                                                        @php $ppp =
                                                        $provider::deposit($item->partner_id,$item->model_id,'all','30') @endphp

                                                        @if(!empty($ppp))
                                                        {!! $ppp !!}
                                                        @endif


                                                        
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <i class="fas fa-shield-alt black"></i>
                                                    Protection:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;" class="f11">
                                                    <span data-toggle="tooltip" data-placement="right"
                                                        data-original-title="Comprehensive protection inlcuded in rental price"
                                                        class="red-tooltip f18">
                                                        Comprehensive
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <i class="fa fa-adjust black"></i>
                                                    Colors:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;" class="f11">
                                                    <span >
                                                      

                                                        <span rel="tooltip" data-placement="right"
                                                            title="Available colors for this vehicle"
                                                            data-toggle="tooltip">
                                                            <svg height="22" width="22">
                                                                <circle cx="13" cy="13" r="8" stroke="gray"
                                                                    stroke-width="2" fill="">
                                                                </circle>

                                                            </svg>
                                                        </span>

                                                    </span>
                                                </td>
                                            </tr>
                                            {{-- s --}}
                                            <tr>
                                                <td style="padding-top:7px;" class="f11">
                                                    <i class="fa fa-credit-card black"></i>
                                                    Payment:
                                                </td>
                                                <td style="padding-top:7px;padding-left:5px;" class="f11">
                                                    <span data-toggle="tooltip" data-placement="right"
                                                        data-original-title="Mode of payment via card only"
                                                        class="red-tooltip f18">Credit Card</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-car"></i>
                                                    <span class="f11">Min Delivery:</span>

                                                </td>
                                                <td>
                                                    <strong class="caryaati_color" data-toggle="tooltip" title="Delivery charges applicable on request and may vary as per delivery location">
                                                        {{$rate_data = $provider::min_del_charger($item->partner_id)}}
                                                    </strong> <span
                                                        style="font-size:12px">AED</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                       
                                       </p>
										
                                        
                                        
                                        
										
										
										
									</div>
								</div>
                                
                                
                                
							
                            
                            
                        <?php 
				$modal_data = json_decode(json_encode($modal_data), true);
				//print_r($modal_data);?>
               <div class="row "> 
                	<div class=" col-xl-12">
               <p>
                
						
                			
                         	<h4 class="product-title mb-1"> Specification of {{$item->make_name.' '.$item->brand_name.' '.$item->model_name}}</h4>
                            </p>
                         
                         	<div class="row ">
                                <div class="col-md-3  mb-4 mb-xl-0"><strong>Vehicle Type</strong></div>
                                <div class="col-md-3  mb-4 mb-xl-0">{{$modal_data[0]['type_name']}}</div>
                                <div class="col-md-3  mb-4 mb-xl-0"><strong>Doors</strong></div>
                                <div class="col-md-3  mb-4 mb-xl-0">{{$modal_data[0]['door']}}</div>
                            </div>
                            
                            <div class="row ">
                                <div class="col-md-3  mb-4 mb-xl-0"><strong>Passengers</strong></div>
                                <div class="col-md-3  mb-4 mb-xl-0">{{$modal_data[0]['passanger']}}</div>
                                <div class="col-md-3  mb-4 mb-xl-0"><strong>Luggage</strong></div>
                                <div class="col-md-3 d mb-4 mb-xl-0">{{$modal_data[0]['luggage']}}</div>
                            </div>
                         
                         	
                        <div class="row "> 
                            <p>   
                            <div class="col-md-12"><h5 class="product-title mb-1">Car Performance</h5></div>
                            </p>
                          
                        </div> 
                     <div class="row ">    
                    @php
                    $cp = \DB::select("SELECT DISTINCT c.spec_name,c.input_type, GROUP_CONCAT( DISTINCT b.specs_value)specs_value2,c.spec_id ,d.model_id FROM vehicles aa 
                        LEFT OUTER JOIN be_vehicles_wsie_specs  a ON aa.rowid = a.`vehicle_id` 
                        LEFT OUTER JOIN be_vehicles_specs_dtl b ON b.specs_apply_id = a.specs_apply_id
                        LEFT OUTER JOIN vehicle_specs c ON c.spec_id = b.specs_id 
                        LEFT OUTER JOIN be_vehicles_specs d ON d.vsp_id = b.`vsp_id`
                        WHERE  aa.vendor_id = '$vendor_id_single' AND d.model_id  = '$model_id' AND  c.spec_type = 'CP' 
                        GROUP BY 1 ORDER BY c.spec_id");
                    
                     $count = count($cp);
                   
                    
                    if ($count > 0) {
                    
                        foreach ($cp as $item_cp){
                        
                            $specs_value2   = $item_cp->specs_value2; 
                            $specs_name   	= $item_cp->spec_name;   
                            if($specs_value2==1) $specs_value2='No';
                            if($specs_value2==2) $specs_value2='Yes';     
                              
                            echo  ' 
                                <div class="col-md-3  mb-4 mb-xl-0"><strong>'.$specs_name.'</strong></div>
                                <div class="col-md-3  mb-4 mb-xl-0">'.$specs_value2.'</div>
                               
                            '; 
                                 
    
                                
                       
                        }//forach  
                        
                          
                    }else{
                    	echo '<div class="col-md-12  mb-4 mb-xl-0">Data Not Found</div>';
                       
                    }//if end
                    
                         
                   @endphp      
                       	 
                        </div>
                        
                        
                        
                        
                        
                        <div class="row "> 
                        <p>   
                        <div class="col-md-12"><h5 class="product-title mb-1">Car Features</h5></div>
                        </p>
                          
                        </div> 
                     <div class="row ml-1">    
                    @php
                    $cp = \DB::select("SELECT DISTINCT c.spec_name,c.input_type, GROUP_CONCAT( DISTINCT b.specs_value)specs_value2,c.spec_id ,d.model_id FROM vehicles aa 
                        LEFT OUTER JOIN be_vehicles_wsie_specs  a ON aa.rowid = a.`vehicle_id` 
                        LEFT OUTER JOIN be_vehicles_specs_dtl b ON b.specs_apply_id = a.specs_apply_id
                        LEFT OUTER JOIN vehicle_specs c ON c.spec_id = b.specs_id 
                        LEFT OUTER JOIN be_vehicles_specs d ON d.vsp_id = b.`vsp_id`
                        WHERE  aa.vendor_id = '$vendor_id_single' AND d.model_id  = '$model_id' AND  c.spec_type = 'CF'
                        GROUP BY 1 ORDER BY c.spec_id");
                    
                     $count = count($cp);
                   
                    
                    if ($count > 0) {
                    
                        foreach ($cp as $item_cp){
                        
                            $specs_value2   = $item_cp->specs_value2; 
                            $specs_name   	= $item_cp->spec_name;   
                            
                            if($specs_value2==1) $specs_value2='No';
                            if($specs_value2==2) $specs_value2='Yes';    
                              
                            echo  ' 
                                <div class="col-md-3  mb-4 mb-xl-0"><strong>'.$specs_name.'</strong></div>
                                <div class="col-md-3  mb-4 mb-xl-0">'.$specs_value2.'</div>
                               
                            '; 
                                 
    
                                
                       
                        }//forach  
                        
                          
                    }else{
                    	echo '<div class="col-md-12  mb-4 mb-xl-0">Data Not Found</div>';
                       
                    }//if end
                    
                         
                   @endphp      
                       	 
                         
                          </div> 
                        
                        
                        </div> 
                  </div>       
                     
                            
                                 
                  <div class="row "> 
                        <p>   
                        <div class="col-md-12"><h5 class="product-title mb-1">Excess Insurance Charges</h5></div>
                 	</p>
                    <div class="col-md-12  mb-4 mb-xl-0"><strong>{{$item->excess_ins_amount}} AED  </strong></div>
                             
                 </div>           
                            
                <div class="row "> 
                        <p>   
                        <div class="col-md-12"><h5 class="product-title mb-1">Hit & run Charges</h5></div>
                 	</p>
                    <div class="col-md-12  mb-4 mb-xl-0"><strong>{{$item->hit_run_amount}} AED  </strong></div>
                             
                 </div>               
                            
                  
                  
                 <div class="row "> 
                        <p>   
                        <div class="col-md-12"><h5 class="product-title mb-1">Delivery Charges</h5>
                        
                        
                        <div class="alert alert-info"><strong>Special Note:</strong><br>
                        <?php echo $dc_note = $provider::getvaluefromConfigSetups(138,$item->partner_id);?>
                        </div>
                        
                        </div>
                 	</p>
                    
                    
                    @php
                    $cp = \DB::select("SELECT config_id,a.val , a.val2,b.name,c.name as acname FROM config_setup a
INNER JOIN config_label b ON a.label_id = b.label_id
left outer join accounts c on c.id = a.val
 where a.vendor_id = '$item->partner_id' and a.label_parent_id = 85 ORDER BY a.label_id");
                    
                     $count = count($cp);
                   
                    
                    if ($count > 0) {
                    
                         
                            
                               
                              
                      @endphp  
                          
                          
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped table-hover">
                                <tr>
                                  <th width="14%" scope="row">
                                    <div align="center"><strong>States</strong></div>                                  </th>
                                  <td width="22%">
                                    <div align="center"><strong>Rate</strong></div>                                  </td>
                                  <td width="23%">
                                    <div align="center"><strong>Free on Daily Rental</strong></div>                                  </td>
                                  <td width="19%">
                                    <div align="center"><strong>Free on Weekly Rental</strong></div>                                  </td>
                                  <td width="22%">
                                    <div align="center"><strong>Free on Monthly Rental</strong></div>                                  </td>
                                </tr>
                                <?php 
								foreach ($cp as $item_cp){
                        
									$rowid   = $item_cp->config_id; 
									$dep_val   	= $item_cp->val; 
									$val_2   	= $item_cp->val2; 
									$name   	= $item_cp->name;  
									$cname   	= $item_cp->acname;  
                                  
                                  $free_on_exp = explode(',', $val_2);

                                  $daily_free_value = $free_on_exp[0] + 0;
                                  $weekly_free_value = $free_on_exp[1] + 0;
                                  $monthly_free_value = $free_on_exp[2] + 0;
                                  

                                  
                                 

                                  $label_name = 'dl_ch_' . $rowid;
                                  $free_on_daily = 'free_on_daily' . $rowid;
                                  $free_on_weekly = 'free_on_weekly' . $rowid;
                                  $free_on_monthly = 'free_on_monthly' . $rowid;




                                  //print_r($gen_array_val);
                                ?>

                                  <tr>
                                    <td><?php echo ucwords(strtolower($name)); ?></td>
                                    <td> <div align="center"><label>
                                       <?php echo $dep_val; ?>
                                      </label> AED</div> </td>
                                    <td>
                                      <div align="center">
                                      <?php 
									  if ($daily_free_value == '1') echo 'Yes'; else echo 'No'
									  ?>
                                      
                                      
                                      </div>                                    </td>
                                    <td>
                                      <div align="center">
                                      
                                       <?php 
									  if ($weekly_free_value == '1') echo 'Yes'; else echo 'No'
									  ?>
                                        
                                      </div>                                    </td>
                                    <td>
                                      <div align="center">
                                      <?php 
									  if ($monthly_free_value == '1') echo 'Yes'; else echo 'No'
									  ?>
                                       
                                      </div>                                    </td>
                                  </tr>

                                <?php  }//forach   ?>
                              </table>           
                          
                          
                          
                             
                      @php           
    
                       
                        
                          
                    }else{
                    	echo '<div class="col-md-12  mb-4 mb-xl-0">Data Not Found</div>';
                       
                    }//if end
                    
                         
                   @endphp      
                 </div>               
                            
                 
                 
                 
                 
                 
                 
                 <div class="row "> 
                        <p>   
                        <div class="col-md-12"><h5 class="product-title mb-1">Pickup Charges</h5>
                        
                             <div class="alert alert-info"><strong>Special Note:</strong><br>
                            <?php echo $dc_note = $provider::getvaluefromConfigSetups(151,$item->partner_id);?>
                            </div>
                        
                        </div>
                 	</p>
                    
                    
                    @php
                    $cp = \DB::select("SELECT config_id,a.val , a.val2,b.name,c.name as acname FROM config_setup a
INNER JOIN config_label b ON a.label_id = b.label_id
left outer join accounts c on c.id = a.val
 where a.vendor_id = '$item->partner_id' and a.label_parent_id = 151 ORDER BY a.label_id");
                    
                     $count = count($cp);
                   
                    
                    if ($count > 0) {
                    
                         
                            
                               
                              
                      @endphp  
                          
                          
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped table-hover">
                                <tr>
                                  <th width="14%" scope="row">
                                    <div align="center"><strong>States</strong></div>                                  </th>
                                  <td width="22%">
                                    <div align="center"><strong>Rate</strong></div>                                  </td>
                                  <td width="23%">
                                    <div align="center"><strong>Free on Daily Rental</strong></div>                                  </td>
                                  <td width="19%">
                                    <div align="center"><strong>Free on Weekly Rental</strong></div>                                  </td>
                                  <td width="22%">
                                    <div align="center"><strong>Free on Monthly Rental</strong></div>                                  </td>
                                </tr>
                                <?php 
								foreach ($cp as $item_cp){
                        
									$rowid   = $item_cp->config_id; 
									$dep_val   	= $item_cp->val; 
									$val_2   	= $item_cp->val2; 
									$name   	= $item_cp->name;  
									$cname   	= $item_cp->acname;  
                                  
                                  $free_on_exp = explode(',', $val_2);

                                  $daily_free_value = $free_on_exp[0] + 0;
                                  $weekly_free_value = $free_on_exp[1] + 0;
                                  $monthly_free_value = $free_on_exp[2] + 0;
                                  

                                  
                                 

                                  $label_name = 'dl_ch_' . $rowid;
                                  $free_on_daily = 'free_on_daily' . $rowid;
                                  $free_on_weekly = 'free_on_weekly' . $rowid;
                                  $free_on_monthly = 'free_on_monthly' . $rowid;




                                  //print_r($gen_array_val);
                                ?>

                                  <tr>
                                    <td><?php echo ucwords(strtolower($name)); ?></td>
                                    <td> <div align="center"><label>
                                       <?php echo $dep_val; ?>
                                      </label> AED</div> </td>
                                    <td>
                                      <div align="center">
                                      <?php 
									  if ($daily_free_value == '1') echo 'Yes'; else echo 'No'
									  ?>
                                      
                                      
                                      </div>                                    </td>
                                    <td>
                                      <div align="center">
                                      
                                       <?php 
									  if ($weekly_free_value == '1') echo 'Yes'; else echo 'No'
									  ?>
                                        
                                      </div>                                    </td>
                                    <td>
                                      <div align="center">
                                      <?php 
									  if ($monthly_free_value == '1') echo 'Yes'; else echo 'No'
									  ?>
                                       
                                      </div>                                    </td>
                                  </tr>

                                <?php  }//forach   ?>
                              </table>           
                          
                          
                          
                             
                      @php           
    
                       
                        
                          
                    }else{
                    	echo '<div class="col-md-12  mb-4 mb-xl-0">Data Not Found</div>';
                       
                    }//if end
                    
                         
                   @endphp      
                    
                    
                             
                 </div>               
                 
                 
                 
                 <div class="row "> 
                        <p>   
                        <div class="col-md-12"><h5 class="product-title mb-1">Insurance</h5>
                        
                      <?php if($protection_id==1){?>  
                             <div class="alert alert-info"><strong>Special Note:</strong><br>
                            <?php echo $dc_note = $provider::getvaluefromConfigSetups(140,$item->partner_id);?>
                            </div>
                        	
                            @php
                    $package_1 = \DB::select(" SELECT config_id,a.val , a.val2,b.name, a.label_id FROM config_setup a
            INNER JOIN config_label b ON a.label_id = b.label_id
            WHERE a.vendor_id = '$item->partner_id' AND a.label_parent_id = 77 ORDER BY a.label_id
                     
                    ");
                    
                     //$count = count($cp);
                   
                         
                            
                               
                              
                      @endphp   
                            
                            
                            
                            <div class="row">
								
                                <?php 
								foreach ($package_1 as $item_cp){
                        
									$rowid   = $item_cp->config_id; 
									$ins_amount   	= $item_cp->val; 
									$descc   	= $item_cp->val2; 
									$name   	= $item_cp->name;  
									//$cname   	= $item_cp->acname;  
									?>
                                
                                    <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
                                        <div class="card card-primary">
                                            <div class="card-header pb-0">
                                                <h5 class="card-title mb-0 pb-0">{{$name}}</h5>
                                            </div>
                                            <div class="card-body text-primary">
                                               <?php echo $descc;?>
                                            </div>
                                            <div class="card-footer">
                                               {{$ins_amount}} AED
                                            </div>
                                        </div>
                                    </div>
							<?php }?>
                        
                        </div>
                            
                            
                            
                            
                            
                            
                        </div>
                 	</p>
                  <?php }//p1
				  
				  	if($protection_id==2){
				  ?>  
                  
                  
                            @php
                    $package_2 = \DB::select("select a.* from cdw_charges a
					  INNER join cdw_charges_dtl b on a.cdw_id = b.cdw_id 
					  INNER JOIN be_brand bb ON b.brand_id = bb.brand_id
					
					 where a.vendor_id = '$item->partner_id' and a.package_id = '2' and b.brand_id = '$brand_id' 
                     
                    ");
                    
                     //$count = count($cp);
                   
                         
                            
                               
                              
                      @endphp   
                            
                            
                            
                            <div class="row">
								
                                <?php 
								foreach ($package_2 as $item_cp){
                        
									$rowid   = $item_cp->cdw_id; 
									//$ins_amount   	= $item_cp->val; 
									$descc   	= $item_cp->desc; 
									$daily   	= $item_cp->daily;  
									$weekly   	= $item_cp->weekly; 
									$monthly   	= $item_cp->monthly;  
									?>
                                
                                    <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
                                        <div class="card card-primary">
                                            <div class="card-header pb-0">
                                                <h5 class="card-title mb-0 pb-0"></h5>
                                            </div>
                                            <div class="card-body text-primary">
                                               <?php echo $descc;?>
                                            </div>
                                            <div class="card-footer">
                                              Daily: {{$daily}} AED Weekly: {{$weekly}} AED Monthly: {{$monthly}} AED
                                            </div>
                                        </div>
                                    </div>
							<?php }?>
                        
                        </div>
                     
                     
                     <?php }//p1
				  
				  	if($protection_id==3){
				  ?>  
                  
                  
                            @php
                    $package_3 = \DB::select("SELECT a.*,b.p_status,a.description as descc,c.cdw_id,cd.daily,cd.weekly,cd.monthly FROM  cdw_points_vendor a
                    LEFT OUTER JOIN cdw_charges_points b ON b.main_point_vid = a.id 
                    INNER JOIN  cdw_charges_dtl c ON c.cdw_id = b.cdw_id AND c.brand_id = '$brand_id'
                    LEFT JOIN  cdw_charges cd ON cd.cdw_id = c.cdw_id 
                    WHERE a.vendor_id = '$item->partner_id' AND a.status = 1 ORDER BY a.id 
                     
                    ");
                    
                     //$count = count($cp);
                   
                              
                      @endphp   
                            
                            
                            
                            <div class="row">
							  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <td width="17%"><span class="style3">Name</span></td>
          <td width="47%"><span class="style3">Description</span></td>
          <td width="7%"><span class="style3">Basic</span></td>
          <td width="8%"><span class="style3">Super</span></td>
          </tr>
      </thead>
      <tbody>	
                                <?php $i = 0;
								foreach ($package_3 as $item_cp){
                        
									$rowid   = $item_cp->cdw_id; 
									$name   	= $item_cp->name; 
									$descc   	= $item_cp->descc; 
									$daily   	= $item_cp->daily;  
									$weekly   	= $item_cp->weekly; 
									$monthly   	= $item_cp->monthly; 
									$p_status   	= $item_cp->p_status;  
									?>
                              
        <?php
       
        ?>
          <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $descc; ?></td>
            <td>
              <div align="center">
                <?php if($p_status==1 or $p_status==3)echo '<i class="si si-check"></i>'; else echo '<i class="si si-close"></i>';?>            
              </div></td>
            <td>
              <div align="center">
                <?php if($p_status==2 or $p_status==3)echo '<i class="si si-check"></i>'; else echo '<i class="si si-close"></i>';?>     
              </div></td>
            </tr>
       
     
                                   
							<?php }?>
                         </tbody>
    </table>
                        </div>
                             
                  Daily: {{$daily}} AED Weekly: {{$weekly}} AED Monthly: {{$monthly}} AED   
                     
                     
                            
                            
                   <?php } //p3?>         
                            
                            
                            
                        </div>
                 	</p>
                  
                    
                 
             
                  
                  
                  
                            
                            
                  <p>&nbsp;</p>          
                <form action="" id="form_addtomylist">  
                
                
                 <div class="form-group" id="load_error"> </div>  
                                                                 
                  <div class="action">
											
                                            
                                            
                                            
                                            
						<button class="add-to-cart btn btn-success" type="button" onclick="SavingData(1,'form_addtomylist','addmylistbtn','{{route('addtomylist')}}','no_modal','{{route('mylistmain')}}','load_error','Addedd Successfull !!','redirect')" id="addmylistbtn">ADD TO MY LIST</button>
				  </div>  
                  <input name="model_id" type="hidden" value="{{$model_id}}" /> 
                  <input name="vendor_id" type="hidden" value="{{$item->partner_id}}" />   
                  
                   <input name="daily_rate" type="hidden" value="{{$item->daily_rate}}" /> 
                   <input name="weekly_rate" type="hidden" value="{{$item->weekly_rate}}" />   
                   <input name="monthly_rate" type="hidden" value="{{$item->monthly_rate}}" /> 
                    <input type="hidden" name="fr_list_id" value="0">           
                </form>            
                            </div>
                       </div>
					</div>
				</div>
				<!-- /row -->
                
               
                

				<!-- row -->
				<div class="row related-products-ltr-h">
                
                @foreach ($dataSuggestion as $item_sug)
			
		
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100">
								<div class="text-center">
									<img src="https://www.caryaati.com/erps/admin/images/model/{{$item_sug->img_name}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<!--<span>Items</span>-->
										<a>{{$item_sug->make_name.' '.$item_sug->brand_name.' '.$item_sug->model_name}}</a>
									</div>
                                    
                                    <div class="cardtitle">
                                     		Daily: {{ $item_sug->daily_rate}} AED  /Per Day  <br>
                                            Weekly: {{$item_sug->weekly_rate}} AED  /Per Day<br>
                                            Monthly: {{ $item_sug->monthly_rate}} AED  /Per Day
                                    </div>
                                    
									<!--<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<span>$799</span>
									</div>-->
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 ps-2 pe-2 ">
								
								<a href="{{route('cardetails',"$item_sug->model_id-$item_sug->partner_id")}}" class="btn btn-success">View Details</a>
							</div>
						</div>
					</div>
					
					
           @endforeach         
                    
                    
                    
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="feature2">
									<i class="mdi mdi-airplane-takeoff bg-purple ht-50 wd-50 text-center brround text-white"></i>
								</div>
								<h5 class="mb-2 tx-16">Free Shipping</h5>
								<span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus orioneu.</span>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="feature2">
									<i class="mdi mdi-headset bg-pink  ht-50 wd-50 text-center brround text-white"></i>
								</div>
								<h5 class="mb-2 tx-16">Customer Support</h5>
								<span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus orioneu.</span>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="feature2">
									<i class="mdi mdi-refresh bg-teal ht-50 wd-50 text-center brround text-white"></i>
								</div>
								<div class="icon-return"></div>
								<h5 class="mb-2  tx-16">30 days money back</h5>
								<span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus orioneu.</span>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
        
    @endforeach	
    
        
@endsection
@extends('layouts.admin_footer')


