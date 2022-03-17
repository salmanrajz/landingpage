@php
		 //$exp_data = explode(',',$id);
		  $testi_id = $exp_data[1];
          $lang_id = $exp_data[2];
         
         if($lang_id==0 or $lang_id=='')$lang_id==1;
        $name       = ''; 
        $message    = '';
        $company    = '';
        $status   	= '';
        $fr_vendor_id =  auth()->user()->vendor_id;
        
        	if($testi_id>0){
        	$promo_data = \DB::select("select * from fr_testimonial where t_id = '$testi_id' and vendor_id = '$fr_vendor_id' ");
                    
                    
                        foreach ($promo_data as $items){
                        
                            $name     = $items->name; 
                            $message    = $items->message; 
                            $company   = $items->company; 
                            $status   	= $items->status; 
                            
         					
         				}
         }
         
@endphp
<div class="table-responsive">
<form action="" method="post" id="assignforms">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-boredred">
  <tr>
    <td width="26%"><strong>Name</strong></td>
    <td width="74%"><label>
      <input type="text" name="name" id="name" class="form-control"  value="<?php echo $name; ?>" />
      </label>       </td>
    </tr>
  <tr <?php if($lang_id!=1)echo 'style="display:none"';?> >
    <td><strong>Company:</strong></td>
    <td><label>
      <input type="text" name="company" id="company" class="form-control"  value="<?php echo $company; ?>" />
      </label>        </td>
    </tr>
  <tr>
    <td><strong>Message:</strong></td>
    <td> <textarea name="message" cols="30" rows="5" class="form-control">{{$message}}</textarea>       </td>
    </tr>
  <tr <?php if($lang_id!=1)echo 'style="display:none"';?>>
    <td><strong>Status:</strong></td>
    <td><label>
      <select name="status" class="form-control">
        <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Enable</option>
        <option value="2" <?php if ($status == 2) echo 'selected'; ?>>Disable</option>
      </select>
      </label>    </td>
    </tr>
</table>
<input name="testi_id" type="hidden" value="<?php echo $testi_id+0;?>" />
<input name="lang_id" type="hidden" value="<?php echo $lang_id;?>" />




</form>
</div>
<div id="load_error2"></div>
<div class="modal-footer">
       <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
       <button class="btn ripple btn-primary" type="button"  onclick="SavingData(1,'assignforms','addmylistbtn34','{{route('testi__save')}}','basicModal','{{route('testimonials.page_listing_view')}}','load_error2','Saved Successfull !!','redirect')" id="addmylistbtn34">Save</button>
       
</div>

<script>

$(document).ready(function(){	

	
	
});

  function load_rates() {

    var model_id = $("#model_ids").val();
	
	var rates_url = $("#rates_url").val();
	//alert(rates_url);
	
    $.ajax({
      type: "POST",
      url: rates_url,
      data: {
        dealS_rates: 'yes',
        model_id: model_id
      }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)

      success: function(result) {
        //alert(result);
        result = result.trim();
        var parts = result.split('##');
        $("#old_daily").html(parts[0] + ' AED/Day');
        $("#old_weekly").html(parts[1] + ' AED/Day');
        $("#old_monthly").html(parts[2] + ' AED/Day');
        $("#masterimg").html('<img src="' + parts[3] + '" width = "200px">');

      }

    });


  }
</script>

<style>
.select2-container {
   
    z-index: 999999 !important;
	
	}
	
 
.select2-container--default .select2-selection--multiple .select2-selection__choice{

padding-left:20px !important;
}
</style>