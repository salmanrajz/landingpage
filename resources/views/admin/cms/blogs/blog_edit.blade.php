<?php $tital_tag = __('Blogs | Add/Edit');?>

@extends('layouts.admin_main_body',['title' => 'Caryaati | '.$tital_tag])

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
                                @if($blog_id>0)
                                {{__('Blog List Edit')}}
                                @else
                                {{__('Blog List Add')}}
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
                                    
                                    
                           <form action="" method="post" id="form_data_1">
                              

                                           <?php
											
                                            $fr_vendor_id =  auth()->user()->vendor_id;
											//echo $blog_id;
                                            if ($blog_id > 0) {
                                                  $data = \DB::select("select a.* from fr_blogs a 
												 
												  where vendor_id = '$fr_vendor_id' and blog_id = '$blog_id'");
												foreach ($data as $item){
                        
												
												$link_title   		= $item->link_title; 
												$title   			= $item->title; 
												$short_desc   		= $item->short_desc;
												
												$long_desc   			= $item->long_desc;
												
												$meta_title   		= $item->meta_title;
												$meta_desc   		= $item->meta_desc;
												$meta_key   		= $item->meta_key;
												
												$status   			= $item->status;
												$img   				= $item->img;
												$lang_id   			= $item->lang_id;
												
                    							
												}
                                                // $rslt = "select * from faq where vendor_id = '$vendor_rowid' and blog_id = '$blog_id' ";
                                               //$expiry_date = date('d-m-Y',strtotime($expiry_date));
                                            }
											else{
												
												$title   		= ''; 
												$short_desc   		= '';
												$link_title   		= ''; 
												$p_desc   			= '';
												$long_desc   		= '';
												
												$img   				= '';
												$meta_title   		= '';
												$meta_desc   		= '';
												$meta_key   		= '';
												$status   			= '';
												
												$lang_id   			= '1';
											}

											if($lang_id!=1) $link_title = 'Test';

                                            ?>

  


                       <table width="75%" border="0" cellspacing="0" cellpadding="0" class="table">
                         <tr <?php if($lang_id!=1) echo 'style="display:none"';?> >
                           <td><strong> {{__('Link Title')}} </strong></td>
                           <td colspan="3">
                           
                           <input type="text" name="link_title" id="link_title" class="form-control" value="{{$link_title}}">
                          
                           </td>
                         </tr>
                         <tr>
                           <td width="29%"><strong>{{__('Title')}} </strong></td>
                           <td colspan="3">
                          
                             <input type="text" name="title" id="title" class="form-control" value="{{$title}}"> 
                            </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Short Description')}} </strong></td>
                           <td colspan="3">
                          
                             <textarea name="short_desc" cols="5" rows="10" id="short_desc" placeholder="Short Description" class="form-control"><?php echo $short_desc; ?></textarea>
                             
                              </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Long Description')}} </strong></td>
                           <td colspan="3">
                          
                           <textarea name="long_desc" cols="5" rows="10" id="long_desc" placeholder="Long Description" class="form-control summernote"><?php echo $long_desc; ?></textarea>
                            </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Meta Title')}} </strong></td>
                           <td colspan="3">
                          
                             <textarea name="meta_title" cols="5" rows="10" id="meta_title" placeholder="Meta Title" class="form-control"><?php echo $meta_title; ?></textarea> 
                             </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Meta Keyword')}} </strong></td>
                           <td colspan="3">
                           
                             <textarea name="meta_key" cols="5" rows="10" id="meta_keyword" placeholder="Meta Keyword" class="form-control"><?php echo $meta_key; ?></textarea>
                             
                              </td>
                         </tr>
                         <tr>
                           <td><strong>{{__('Meta Description')}} </strong></td>
                           <td colspan="3">
                          
                           <textarea name="meta_desc" cols="5" rows="10" id="meta_desc" placeholder="Meta Description" class="form-control"><?php echo $meta_desc; ?></textarea>
                            </td>
                         </tr>
                         <tr <?php if($lang_id!=1) echo 'style="display:none"';?>>
                           <td><strong>{{__('Image')}}</strong></td>
                           <td width="25%"><input type="file" name="newblog_img" id="newblog_img" onChange="uploadingProgressbar2(1,'addmylistbtn','form_data_1','newblog_img','newblog_img','0','newblog_img','sdsd','load_img_data1')"></td>
                           <td colspan="2">
                            <div id="load_img_data1">
                               <?php if (!empty($img)) { ?>
                         <img src="<?php echo url('/blogs').'/'.$img; ?>" width="300">
                               <?php } ?>
                        </div>     
                           </td>
                         </tr>




                         <tr <?php if($lang_id!=1) echo 'style="display:none"';?>>
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
                             <button class="add-to-cart btn btn-success" type="button" onclick="SavingData(1,'form_data_1','addmylistbtn2323','{{route('blog_save')}}','no_modal','{{route('blog.page_listing_view')}}','load_errrors','Added Successfull !!','redirect')" id="addmylistbtn2323">{{__('Save')}}</button> </td>
                         </tr>
                       </table>
                               
                                <input name="blog_id" id="blog_id" type="hidden" value="<?php echo $blog_id+0; ?>">
                                <input name="lang_id" id="lang_id" type="hidden" value="<?php echo $lang_id; ?>">
                                



                           </form>
                                    
                              
									
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

