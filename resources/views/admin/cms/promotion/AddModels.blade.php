@php
		 //$exp_data = explode(',',$id);
		 $promo_id = $exp_data[1];
         $promo_dtl_id = $exp_data[2];
         
         
         $daily_rate   = 0;
         $weekly_rate   = 0;
         $monthly_rate   = 0;
         $p_status   = '';	
         $model_id = 0;
        	$fr_vendor_id =  auth()->user()->vendor_id;
        	$promo_data = \DB::select("select * from fr_promos_dtl where promo_dtl_id = '$promo_dtl_id' and vendor_id = '$fr_vendor_id' ");
                    
                    
                        foreach ($promo_data as $items){
                        
                            $daily_rate     = $items->daily_rate; 
                            $weekly_rate    = $items->weekly_rate; 
                            $monthly_rate   = $items->monthly_rate; 
                            $p_status   	= $items->p_status; 
                            $model_id   	= $items->model_id; 
         					
         				}
         
         
@endphp
<div class="table-responsive">
<form action="" method="post" id="assignforms">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-boredred">
    <tr>
      <td width="26%" valign="top"><strong>Vehicle Models:</strong></td>
      <td width="74%">
       <select class="form-control" name="model_id" id="model_ids" onchange="load_rates()">
        @php
        $fr_vendor_id =  auth()->user()->vendor_id;
        
                   $cp = \DB::select("SELECT  e.model_id,CONCAT(make_name,' ',type_name,' ',brand_name,' ',model_name)mname
                     FROM fr_my_list e 
    INNER JOIN be_model a ON a.model_id = e.model_id
    LEFT OUTER JOIN be_brand b ON a.brand_id = b.brand_id
    LEFT OUTER JOIN be_type c ON c.type_id = b.type_id
    LEFT OUTER JOIN be_make d ON d.make_id = b.make_id_new
   
    WHERE e.fr_vendor_id = '$fr_vendor_id'  ORDER BY  make_name,type_name ,brand_name,model_name");
                    
                    // $count = count($cp);
                   
                    
                     echo '<option value="">-- Select Car Model --</option>'; 
                        foreach ($cp as $item_cp){
                        
                            $model_id2   = $item_cp->model_id; 
                            $mname   = $item_cp->mname; 
                           // $model_id_pp   = $item_cp->model_id_pp; 
                            
                            $selected = '';   
                            if($model_id2==$model_id) $selected = 'selected'; 
                           
                            echo '<option value="'.$model_id2.'" '.$selected.'>'.$mname.'</option>';     
    
                                
                       
                        } //forach  
                        
                        
                         
                   @endphp      
       </select></td>
    </tr>
   
    <tr>
      <td><strong>New Daily Rate</strong></td>
      <td width="32%"><label>
          <input type="text" name="daily_rate" id="daily_rate" class="form-control" style="width:100px; text-align:right" value="<?php echo $daily_rate + 0; ?>">
        </label>
        <label id="old_daily">0</label>


      </td>
      <td width="43%" colspan="2" rowspan="3" id="masterimg">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>New Weekly Rate:</strong></td>
      <td><label>
          <input type="text" name="weekly_rate" id="weekly_rate" class="form-control" style="width:100px; text-align:right" value="<?php echo $weekly_rate + 0; ?>">
        </label>
        <label id="old_weekly">0</label>

        <label> &nbsp;</label></td>
    </tr>
    <tr>
      <td><strong>New Monthly Rate:</strong></td>
      <td><label>
          <input type="text" name="monthly_rate" id="monthly_rate" class="form-control" style="width:100px; text-align:right" value="<?php echo $monthly_rate + 0; ?>">
        </label>
        <label id="old_monthly">0</label>

        <label> &nbsp;</label></td>
    </tr>
    <tr>
      <td><strong>Status:</strong></td>
      <td colspan="3">

        <label>
          <select name="p_status" class="form-control">
            <option value="1" <?php if ($p_status == 1) echo 'selected'; ?>>Enable</option>
            <option value="2" <?php if ($p_status == 2) echo 'selected'; ?>>Disable</option>
          </select>
        </label> </td>
    </tr>
   
</table>

<input name="promo_id" type="hidden" value="<?php echo $promo_id;?>" />
<input name="promo_dtl_id" type="hidden" value="<?php echo $promo_dtl_id;?>" />
<input name="old_model_id" type="hidden" value="<?php echo $model_id; ?>" />
<input id="rates_url" type="hidden" value="{{route('getmodelrates')}}" />


</form>
</div>
<div id="load_error2"></div>
<div class="modal-footer">
       <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
       <button class="btn ripple btn-primary" type="button"  onclick="SavingData(1,'assignforms','addmylistbtn34','{{route('promo_save_model')}}','basicModal','load_modelsdats','load_error2','Saved Successfull !!','fun')" id="addmylistbtn34">Save</button>
       
</div>

<script>

$(document).ready(function(){	

	$("#all_C").click(function(){
		 $('.emps').prop('checked', this.checked);  
	});
	
	$('#model_ids').select2();
	//alert('<?php echo $promo_dtl_id;?>');
	<?php if($promo_dtl_id>0){?>
	
	load_rates();
	<?php }?>
	
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