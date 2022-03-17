@inject('functions', 'App\Http\Controllers\HomeController')

@php 
$vatvalue = $functions::getvaluefromConfigSetups(49,214);
@endphp

@foreach ($data as $i => $value)
                        
							<div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<div class="badge bg-pink">New</div>
												<i class="mdi mdi-heart-outline ms-auto wishlist"></i>
                                              
											</div>
											<img class="img-fluid rounded align-top img_cars"
                    data-src="https://www.caryaati.com/erps/admin/images/model/{{$value->img_name}}" alt="####"
                    src="https://www.caryaati.com/erps/admin/images/model/{{$value->img_name}}">
											<a target="_blank" href="{{route('cardetails',"$value->model_id-$value->partner_id")}}" class="adtocart"> <i class="fa fa-car "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">{{$value->make_name.' '.$value->brand_name.' '.$value->model_name}}</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">
                                            
                                            @php
                                             $daily_vat =  $functions::CalulateVatAMount($value->daily_rate,$vatvalue)+$value->daily_rate;
                                             $weekly_vat =  $functions::CalulateVatAMount($value->weekly_rate,$vatvalue)+$value->weekly_rate;;
                                             $monthly_vat =  $functions::CalulateVatAMount($value->monthly_rate,$vatvalue)+$value->monthly_rate;;
                                            @endphp
                                            
                                            Daily: {{round($daily_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Weekly: {{round($weekly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.<br>
                                            Monthly: {{round($monthly_vat,2)}} AED/day {{$vatvalue}}% VAT incl.
                                           
                                             <!--<span class="text-secondary fw-normal tx-13 ms-1 prev-price">$59</span>-->
											</h4>
										</div>
									</div>
								</div>
							</div>
                            
                            
						@endforeach	
                        
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
                        