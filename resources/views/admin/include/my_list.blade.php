@inject('functions', 'App\Http\Controllers\HomeController')

@php 
$vatvalue = $functions::getvaluefromConfigSetups(49,214);
@endphp



		<table width="100%" class="table table-bordered table-hover mb-0 text-nowrap">
<thead>
												<tr>
													<th width="55%" class="text-start">Model</th>
													<th width="18%" class="w-150">My Rate</th>
													<th width="14%">Status</th>
													<th width="13%">Action</th>
												</tr>
											</thead>
                                          <tbody class="custom-cls-no-br">  
                                         @foreach ($data as $i => $value)   
                                            
											@php
                                            $carname = $value->make_name.' '.$value->brand_name.' '.$value->model_name;
                                            @endphp	
                                            
												<tr>
													<td>
														<div class="media">
															<div class="card-aside-img">
																<img src="https://www.caryaati.com/erps/admin/images/model/{{$value->img_name}}" alt="{{$carname}}" class="h-60 w-60">															</div>
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="fw-semibold mt-0 text-uppercase">{{$carname}}</h6>
																	<!--<dl class="card-item-desc-1">
																	  <dt>Size: </dt>
																	  <dd>XXL</dd>
																	</dl>-->
																	<dl class="card-item-desc-1">
																	 <!-- <dt>Vendor Rates: </dt>-->
																	  <dd>
                                                                       @php
                                             $daily_vat =  $functions::CalulateVatAMount($value->daily_rate,$vatvalue)+$value->daily_rate;
                                             $weekly_vat =  $functions::CalulateVatAMount($value->weekly_rate,$vatvalue)+$value->weekly_rate;;
                                             $monthly_vat =  $functions::CalulateVatAMount($value->monthly_rate,$vatvalue)+$value->monthly_rate;;
                                            @endphp
                                            
                                            Daily: {{round($daily_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Weekly: {{round($weekly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Monthly: {{round($monthly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.</dd>
																	</dl>
																</div>
															</div>
														</div>													</td>
													<td>
                                                    
                                                  <dd>  
                                             @php
$params = "$value->fr_list_id-$value->fr_d_rate-$value->fr_w_rate-$value->fr_m_rate-$value->daily_rate-$value->weekly_rate-$value->monthly_rate";
                                             $fr_daily_vat =  $functions::CalulateVatAMount($value->fr_d_rate,$vatvalue)+$value->fr_d_rate;
                                             $fr_weekly_vat =  $functions::CalulateVatAMount($value->fr_w_rate,$vatvalue)+$value->fr_w_rate;
                                             $fr_monthly_vat =  $functions::CalulateVatAMount($value->fr_m_rate,$vatvalue)+$value->fr_m_rate;
                                            @endphp
                                            
                                            Daily: {{round($fr_daily_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Weekly: {{round($fr_weekly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Monthly: {{round($fr_monthly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.</dd>
                                             </dd>       
                                                    
                                                    
                                                    </td>
												  <td >
                                                  {{-- $value->total_available.' - '.$value->total_booked --}}
                                             <div align="center">
                                             @if($value->total_available>0)
                                             <a class="badge bg-success" href="javascript:;">Online</a>
                                             @else
                                                  <a class="badge bg-danger" href="javascript:;">Offline</a>
                                                  
                                              @endif    
                                                 </div> 
                                                  </td>
													<td >
                                                    <div align="center">
                                                    <a class="" href="javascript:;" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove item"><i class="fa fa-trash"></i></a>
                                                  &nbsp;
                                                   <a  href="javascript:;" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit Rates" onClick="Open_model('basicModal','modalbody','{{route('EdiCarModal')}}','{{$params}}','{{$carname}}','exampleModalLabel','normal')"><i class="fa fa-edit"></i></a>  
                                                   </div>
                                                    </td>
												</tr>
                                                
                                                @endforeach
											</tbody>
										</table>
        
{!! $data->links() !!}
                        
                        
                        
       <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            if ($(this).attr('href') != '#') {
                $('#load_data_car').load($(this).attr('href'));
                 $('html, body').animate({
                // scrollBottom: '110px'
                scrollTop: $("#mylistt").offset().top

            }, 800);
            }
        });

    </script>


