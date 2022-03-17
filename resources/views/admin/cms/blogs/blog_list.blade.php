@extends('layouts.admin_main_body',['title' => 'Caryaati | Blogs List'])

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
								<h4 class="content-title mb-0 my-auto">{{__('Blogs List')}}</h4>
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
                                    
                                    <a href="{{route('blog.page_add')}}" class="btn btn-success">+Add New</a>
                                 
								 
									
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped table-hover"   >
  <tr>
    <td width="5%"><strong>S.no.</strong></td>
    <td width="36%"><strong>Title</strong></td>
    <td width="15%"><strong>Image</strong></td>
    <td width="15%"><strong> Date</strong></td>
    <td width="9%"><strong>Status</strong></td>
    <td width="20%"><strong>Action</strong></td>
  </tr>
  
  <?php
    
    $i = 1;
    foreach($data as $items){

		
		$title 			=  $items->title;
		//$page_name 		=  $items->page_name;
		$img			=  $items->img;
		$create_date 	=  $items->create_date;
		$blog_id 		=  $items->blog_id;
		$status 		=  $items->status;
		
		
		
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
    <td><?php echo $title;?></td>
    <td><img src="<?php echo url('/blogs').'/'.$img; ?>" width="100px"></td>
    <td><div align="center"><?php echo $create_date;?></div></td>
    <td ><?php echo $status_label;?></td>
    <td>
    
   
      
      <button data-bs-toggle="dropdown" class="btn btn-primary btn-block">Edit Languages <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                            <div class="dropdown-menu">
                             <a href="{{route('blog.page_edit',['id'=>$blog_id,'lang'=>'English'])}}" class="dropdown-item">English</a>
                            
                            <?php $lang_data = \DB::select("select a.blog_id ,a.lang_id,b.lang_name from fr_blogs a
							LEFT JOIN fr_languages b ON a.lang_id = b.lang_id
							where a.parent_id = '$blog_id'");
                    
                    // $count = count($cp);
                   
                    
                     
                        foreach ($lang_data as $item_cp){
                        
                            $promo_id2   = $item_cp->blog_id; 
							$lang_name   = $item_cp->lang_name; 
			
							?>
                            <a href="{{route('blog.page_edit',['id'=>$promo_id2,'lang'=>$lang_name])}}" class="dropdown-item"><?php echo $lang_name;?></a>
                           
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


