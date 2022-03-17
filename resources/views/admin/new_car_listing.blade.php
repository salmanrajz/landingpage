@extends('layouts.admin_main_body',['title' => 'Caryaati | New Car List'])



@section('content')

			<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container opened -->
				<div class="container">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto" id="mylistt">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">New Car List</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0"> </span>
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

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-3 col-md-12 mb-3 mb-md-0">
						<div class="card">
							<div class="card-header border-bottom pt-3 pb-3 mb-0 fw-bold text-uppercase">Filter</div>
							<div class="card-body pb-0">
								<div class="form-group">
									<label class="form-label">Make</label>
									<select name="make_id" id="make_id"
										class="form-control select2 select2-hidden-accessible" onchange="load_carList('make'); load_category('make')">
                                        <option value="all">--All Make--</option>
                                       @php
                    $k = \App\Models\vehicle::select('be_make.make_name','be_make.make_id')
                    ->LeftJoin(
                    'be_model',
                    'be_model.model_id',
                    '=',
                    'vehicles.model_id_be'
                    )
                    ->LeftJoin(
                    'be_brand',
                    'be_brand.brand_id',
                    '=',
                    'be_model.brand_id'
                    )
                    ->LeftJoin(
                    'be_type',
                    'be_type.type_id',
                    '=',
                    'be_brand.type_id'
                    )
                    ->LeftJoin(
                    'be_make',
                    'be_make.make_id',
                    '=',
                    'be_brand.make_id_new'
                    )
                    ->LeftJoin(
                    'partner',
                    'partner.partner_id',
                    '=',
                    'vehicles.vendor_id'
                    )
                    ->where([
                    [
                    'partner.active', '=', '1'
                    ],
                   
                   
                    ])
                    ->whereIn('vehicles.status',array('8.02','8.03'))
                    ->distinct()
                    ->orderBy('be_make.make_name')->get();
                    @endphp
                    @foreach ($k as $item)
                    @if ($item->make_name != '')  
                                        
                                        
                                        
										
										<option value="{{$item->make_id}}">{{$item->make_name}}</option>
					@endif
                    @endforeach
									</select>
								</div>
								<div class="form-group mt-2">
									<label class="form-label">Type</label>
									<select name="type_id" id="type_id" class="form-control" onchange="load_carList('type'); load_category('type')">
										
										
									</select>
								</div>
								<div class="form-group mt-2">
									<label class="form-label">Brand</label>
									<select name="brand_id" id="brand_id" class="form-control" onchange="load_carList('brand'); load_category('brand')">
										
										
									</select>
								</div>
								<div class="form-group mt-2">
									<label class="form-label">Models</label>
									<select name="model_id" id="model_id" class="form-control" onchange="load_carList('model'); load_category('model')">
										
										
									</select>
								</div>
								
							</div>
							<div
								class="card-header border-bottom border-top pt-3 pb-3 mb-0 fw-bold text-uppercase rounded-0">
								Sort By</div>
							<div class="card-body">
								<form role="form product-form">
									<div class="form-group">
										<label>By Price</label>
										<select class="form-control nice-select" id="by_price" onchange="load_carList('by_price');">
											<option value="1">Low to High</option>
											<option value="2">Hight To Low</option>
                                            <option value="3">Latest Models</option>
											
										</select>
									</div>
									<div class="form-group">
										<label>By Price Type</label>
										<select class="form-control nice-select" id="by_price_type" onchange="load_carList('by_price_type');">
											<option value="daily_rate">Daily</option>
											<option value="weekly_rate">Weekly</option>
                                            <option value="monthly_rate">Monthly</option>
											
										</select>
									</div>
								</form>
							</div>
							
							
						</div>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-12">
						<div class="card">
							<div class="card-body p-2">
								<div class="input-group">
									<input type="text" class="form-control" id="searching" placeholder="Search By Make , Brand & Model">
									<span class="input-group-text p-0">
										<button class="btn btn-primary" type="button" onclick="load_carList('searching');">Search</button>
									</span>
								</div>
							</div>
						</div>
						<div class="row row-sm" id="load_data_car">
                        
							<!--<ul class="pagination product-pagination ms-auto float-end">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="#" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>-->
						</div>
					</div>
				</div>
				<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
@endsection
@extends('layouts.admin_footer')


