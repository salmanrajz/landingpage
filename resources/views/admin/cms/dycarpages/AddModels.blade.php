@php
		 //$exp_data = explode(',',$id);
		 $page_id = $exp_data[1];
@endphp
<div class="table-responsive">
<form action="" method="post" id="assignforms">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-boredred">
    <tr>
      <td width="26%" valign="top"><strong>Vehicle Models:</strong></td>
      <td width="74%">
       <select class="form-control" name="model_ids[]" id="model_ids" multiple="multiple">
        @php
        $fr_vendor_id =  auth()->user()->vendor_id;
        
                    $cp = \DB::select("SELECT  e.model_id,CONCAT(make_name,' ',type_name,' ',brand_name,' ',model_name)mname,cc.model_id AS model_id_pp FROM fr_my_list e 
    INNER JOIN be_model a ON a.model_id = e.model_id
    LEFT OUTER JOIN be_brand b ON a.brand_id = b.brand_id
    LEFT OUTER JOIN be_type c ON c.type_id = b.type_id
    LEFT OUTER JOIN be_make d ON d.make_id = b.make_id_new
    LEFT OUTER JOIN fr_car_pges fr ON fr.vendor_id = e.fr_vendor_id AND fr.page_id = '$page_id'
    LEFT OUTER JOIN fr_car_pges_dtl cc ON cc.page_id = fr.`page_id` AND cc.`model_id` = e.`model_id`
    WHERE e.fr_vendor_id = '$fr_vendor_id'  ORDER BY  make_name,type_name ,brand_name,model_name");
                    
                    // $count = count($cp);
                   
                    
                     echo '<option value="">-- Select Car Model --</option>'; 
                        foreach ($cp as $item_cp){
                        
                            $model_id   = $item_cp->model_id; 
                            $mname   = $item_cp->mname; 
                            $model_id_pp   = $item_cp->model_id_pp; 
                            
                            $selected = '';   
                            if($model_id_pp>0) $selected = 'selected'; 
                           
                            echo '<option value="'.$model_id.'" '.$selected.'>'.$mname.'</option>';     
    
                                
                       
                        } //forach  
                        
                        
                         
                   @endphp      
       </select></td>
    </tr>
   
   
    
   
</table>
<input name="AddPagesmodels" type="hidden" value="yes" />
<input name="page_id" type="hidden" value="<?php echo $page_id;?>" />



</form>
</div>
<div id="load_error2"></div>
<div class="modal-footer">
       <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
       <button class="btn ripple btn-primary" type="button"  onclick="SavingData(1,'assignforms','addmylistbtn34','{{route('carmodelsave')}}','basicModal','','load_error2','Saved Successfull !!','fun6')" id="addmylistbtn34">Save</button>
       
</div>

<script>

$(document).ready(function(){	

	$("#all_C").click(function(){
		 $('.emps').prop('checked', this.checked);  
	});
	
	$('#model_ids').select2();
	
});
</script>

<style>
.select2-container {
   
    z-index: 999999 !important;
	
	}
	
 
.select2-container--default .select2-selection--multiple .select2-selection__choice{

padding-left:20px !important;
}
</style>