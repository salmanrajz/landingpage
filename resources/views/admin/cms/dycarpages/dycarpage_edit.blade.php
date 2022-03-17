@extends('layouts.admin_main_body',['title' => 'Caryaati | Dynamic car Page '])

@section('content')






		<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container opened -->
				<div class="container" id="mylistt">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">
                                @if($page_id>0)
                                {{__('Dynamic Car Pages List Edit')}}
                                @else
                                {{__('Dynamic Car Pages List Add')}}
                                @endif
                                </h4>
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
                                    
                                    
                                 
								  <div class="product-details table-responsive text-nowrap">
									
                           <form action="" method="post" id="form_dy_carpage_add">
                               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped table-hover">

                                   <tr>
                                       <td>

                                           <?php
											
                                            $fr_vendor_id =  auth()->user()->vendor_id;
                                            if ($page_id > 0) {
                                                  $data = \DB::select("select * from fr_car_pges where page_id = '$page_id' and vendor_id = '$fr_vendor_id'");
												foreach ($data as $item){
                        
												$page_title   		= $item->page_title; 
												$page_name   		= $item->page_name;
												
												$page_heading   	= $item->page_heading;
												$description   		= $item->description;
												$second_desc   		= $item->second_desc;
												$meta_title   		= $item->meta_title;
												$meta_keyword   	= $item->meta_keyword;
												$meta_description   = $item->meta_description;
												$image   			= $item->image;
												$banner_link   		= $item->banner_link;
												$status   			= $item->status;
                    							
												}
                                                // $rslt = "select * from faq where vendor_id = '$vendor_rowid' and blog_id = '$blog_id' ";
                                               //$expiry_date = date('d-m-Y',strtotime($expiry_date));
                                            }
											else{
												
												$page_title   		= ''; 
												$page_name   		= '';
												
												$page_heading   	= '';
												$description   		= '';
												$second_desc   		= '';
												$meta_title   		= '';
												$meta_keyword   	= '';
												$meta_description   = '';
												$image   			= '';
												$banner_link   		= '';
												$status   			= '';
												
												
											}



                                            ?>


                                           <table width="75%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped table-hover">
                                               <tr>
                                                   <td style="width:25%"><strong>  {{__('Page Title')}}</strong></td>
                        <td colspan="3"><input type="text" name="page_title" id="page_title" class="form-control" value="{{$page_title}}">                                                   </td>
                                               </tr>
                                             <tr>
                                                   <td><strong>{{__('Page Name')}}</strong></td>
                                                   <td colspan="3"><input type="text" name="page_name" id="page_name" class="form-control" value="<?php echo $page_name; ?>">                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td><strong>  {{__('Main Heading')}}</strong></td>
                                                   <td colspan="3"><input type="text" name="page_heading" id="page_heading" class="form-control" value="<?php echo $page_heading; ?>">                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td><strong> {{__('Primary Description')}}</strong></td>
                                                   <td colspan="3"><textarea name="description" cols="5" rows="10" id="description" placeholder="Primary Description" class="form-control summernote"><?php echo $description; ?></textarea> </td>
                                               </tr>
                                               <tr>
                                                   <td><strong> {{__('Secondary Description')}}  ( {{__('Optional')}} )</strong></td>
                                                   <td colspan="3">
                                                   
                                                   <textarea name="second_desc" cols="5" rows="10" id="description" placeholder="Secondary Description" class="form-control summernote"><?php echo $second_desc; ?></textarea> </td>
                                               </tr>
                                               <tr>
                                                   <td><strong>  {{__('Meta Title')}}</strong></td>
                                                   <td colspan="3"><input type="text" name="meta_title" id="meta_title" class="form-control" value="<?php echo $meta_title; ?>">                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td><strong> {{__('Main Keyword')}}</strong></td>
                                                   <td colspan="3"><input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="<?php echo $meta_keyword; ?>">                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td><strong> {{__('Meta Description')}}</strong></td>
                                                   <td colspan="3"><textarea name="meta_description" cols="5" rows="10" id="meta_description" placeholder="Meta Description" class="form-control"><?php echo $meta_description; ?></textarea> </td>
                                               </tr>
                                               <tr>
                                                   <td><strong>  {{__('Image')}}</strong></td>
                                                   <td width="25%"> <input type="file" name="newblog_img_carapge" id="newblog_img_carapge" onChange="uploadingProgressbar2(1,'addmylistbtn','form_dy_carpage_add','newblog_img_carapge','newblog_img_carapge','0','newblog_img_carapge','sdsd','load_img_data1')"></td>
                                                   <td colspan="2">
                                                       <div id="load_img_data1">
                                                           <?php if (!empty($image)) { ?>
                                                               <img src="<?php echo url('/banners').'/'.$image; ?>" width="300">
                                                           <?php } ?>
                                                       </div>                                                   </td>
                                               </tr>




                                               <tr>
                                               <tr>
                                                 <td><strong> {{__('Banner Link')}}</strong></td>
                                                 <td colspan="3"><label>
                                                  <input type="text" name="banner_link" class="form-control" value="<?php echo $banner_link;?>"/>
                                                   </label>
                                                 </td>
                                               </tr>
                                               <tr>
                                                   <td><strong>{{__('Status')}}</strong></td>
                                                   <td colspan="3">

                                                       <label>
                                                           <select name="status" class="form-control">
                                                               <option value="1" <?php if ($status == 2) echo 'selected'; ?>>Enable</option>
                                                               <option value="2" <?php if ($status == 3) echo 'selected'; ?>>Disable</option>
                                                           </select>
                                                       </label> </td>
                                               </tr>
                                               <tr>
                                                   <td>&nbsp;</td>
                                                   <td colspan="3">&nbsp;</td>
                                               </tr>
                                               <tr>
                                                   <td colspan="4" id="load_errrors"> </td>
                                               </tr>
                                               <tr>
                                                   <td colspan="4">
                                                       <button class="add-to-cart btn btn-success" type="button" onclick="SavingData(1,'form_dy_carpage_add','addmylistbtn','{{route('dy_car_page_savedata')}}','no_modal','{{route('dycarpage_view')}}','load_errrors','Added Successfull !!','redirect')" id="addmylistbtn">{{__('Save')}}</button> </td>
                                               </tr>
                                           </table>


                                     </td>
                               </table>
                               
                               <input name="page_id" type="hidden" value="<?php echo $page_id+0; ?>">



                           </form>
                                    
                                    
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
    
 
@endsection
@extends('layouts.admin_footer')


