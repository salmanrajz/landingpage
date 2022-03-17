@extends('layouts.admin_main_body',['title' => 'Caryaati | Promotion | Add/Edit '])

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
                                @if($promo_id>0)
                                {{__('Promotion List Edit')}}
                                @else
                                {{__('Promotion List Add')}}
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
									
                           <form action="" method="post" id="form_data_1">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped ">

                                   <tr>
                                       <td>

                                           <?php
											
                                            $fr_vendor_id =  auth()->user()->vendor_id;
                                            if ($promo_id > 0) {
                                                  $data = \DB::select("select * from fr_promos where promo_id = '$promo_id' and vendor_id = '$fr_vendor_id'");
												foreach ($data as $item){
                        
												$title   		= $item->title; 
												$short_desc   		= $item->short_desc;
												
												$p_desc   			= $item->p_desc;
												$terms   			= $item->terms;
												$expiry_date   		= $item->expiry_date;
												$img   				= $item->img;
												$meta_title   		= $item->meta_title;
												$meta_desc   		= $item->meta_desc;
												$meta_key   		= $item->meta_key;
												$status   			= $item->status;
												$images   			= $item->img;
												$lang_id   			= $item->lang_id;
												
                    							
												}
                                                // $rslt = "select * from faq where vendor_id = '$vendor_rowid' and blog_id = '$blog_id' ";
                                               //$expiry_date = date('d-m-Y',strtotime($expiry_date));
                                            }
											else{
												
												$title   		= ''; 
												$short_desc   		= '';
												
												$p_desc   			= '';
												$terms   			= '';
												$expiry_date   		= '';
												$img   				= '';
												$meta_title   		= '';
												$meta_desc   		= '';
												$meta_key   		= '';
												$status   			= '';
												$images   			= '';
												$lang_id   			= '1';
											}



                                            ?>

 <table width="75%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-stripped table-hover">
                         <tr>
                           <td width="27%"><strong>{{__('Title')}}</strong></td>
                           <td colspan="3">
                             <input type="text" name="title" id="title" class="form-control" value="<?php echo $title; ?>"> </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Short Description')}}</strong></td>
                           <td colspan="3"><label><textarea name="short_desc" cols="50" rows="10" id="short_desc" placeholder="Description" class="form-control"><?php echo $short_desc; ?></textarea></label>
                           </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Long Description')}}</strong></td>
                           <td colspan="3"><label>
                             <textarea name="promo_desc" cols="5" rows="10" id="promo_desc" placeholder="Description" class="form-control summernote"><?php echo $p_desc; ?></textarea> </label></td>
                         </tr>
                         <tr>
                           <td> <strong>{{__('Terms & Consitions')}}</strong></td>
                           <td colspan="3"> <label><textarea name="terms" cols="5" rows="10" id="terms" placeholder="Terms &amp; Consitions" class="form-control summernote"><?php echo $terms; ?></textarea> </label> </td>
                         </tr>
                         <tr>
                           <td>{{__('Meta Title')}}</td>
                           <td colspan="3">
                             <input type="text" name="meta_title" id="meta_title" class="form-control" value="<?php echo $meta_title; ?>">
                           </td>
                         </tr>
                         <tr>
                           <td >{{__('Meta Keyword')}}</td>
                           <td colspan="3"><label>
                             <input type="text" name="meta_keyword" id="meta_title" class="form-control" value="<?php echo $meta_key; ?>">
                           </label>
                           </td>
                         </tr>
                         <tr>
                           <td>{{__('Meta Description')}}</td>
                           <td  colspan="3">
                             <textarea name="meta_desc" id="desc" cols="30" rows="10" class="form-control"><?php echo $meta_desc; ?></textarea>
                             <!-- <input type="text" name="meta_title" id="meta_title" class="form-control"> -->
                           </td>
                         </tr>
                         
               <?php if($lang_id==1){//English?>
               
                <tr >
                     
                         
                       <td><strong>  {{__('Image')}}</strong></td>
                       <td width="21%"> <input type="file" name="newpromo_img" id="newpromo_img" onChange="uploadingProgressbar2(1,'addmylistbtn','form_data_1','newpromo_img','newpromo_img','0','newpromo_img','sdsd','load_img_data1')"></td>
                       <td colspan="2">
                          <div id="load_img_data1">
                               <?php if (!empty($image)) { ?>
                         <img src="<?php echo url('/promotions').'/'.$image; ?>" width="300">
                               <?php } ?>
                        </div>                                                   </td>
                   </tr>


                         <tr>
                           <td colspan="3">
                             <h3>{{__('Vehicles Models')}}</h3>
                           </td>
                           <td width="37%">
                             <div align="right"><a href="javascript:;" class="btn btn-success" onClick="Open_model('basicModal','modalbody','{{route('OpenModal')}}','<?php echo "admin.cms.promotion.AddModels,$promo_id,0";?>','Add New Vehicles Models','exampleModalLabel','larg')">{{__('Add Models')}}</a></div>
                           </td>
                      </tr>
                         <tr>
                           <td colspan="4" id="load_model_data">&nbsp;</td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Expiry Date')}}</strong></td>
                           <td colspan="3"><label>
                               <input name="expiry_date" type="text" value="<?php echo $expiry_date; ?>" class="form-control date_picker_new">
                             </label> </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Status')}}</strong></td>
                           <td colspan="3">

                             <label>
                               <select name="status" class="form-control">
                                 <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Enable</option>
                                 <option value="2" <?php if ($status == 2) echo 'selected'; ?>>Disable</option>
                               </select>
                             </label> </td>
                         </tr>

				<?php }//lang?>

                         <tr>
                           <td>&nbsp;</td>
                           <td colspan="3">&nbsp;</td>
                         </tr>
                         <tr>
                           <td colspan="4" id="load_errrors"> </td>
                         </tr>
                         <tr>
                           <td colspan="4">
                            <button class="add-to-cart btn btn-success" type="button" onclick="SavingData(1,'form_data_1','addmylistbtn','{{route('promo_save')}}','no_modal','{{route('promo.page_listing_view')}}','load_errrors','Added Successfull !!','redirect')" id="addmylistbtn">{{__('Save')}}</button> </td>
                         </tr>
                       </table>
                               
                                <input name="promo_id" id="promo_id" type="hidden" value="<?php echo $promo_id+0; ?>">
                                <input name="lang_id" id="lang_id" type="hidden" value="<?php echo $lang_id; ?>">
                                <input id="load_url" type="hidden" value="{{route('loadModeldatas')}}">



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

