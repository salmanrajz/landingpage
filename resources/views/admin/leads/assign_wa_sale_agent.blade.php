@php //echo $request->id;
    $exp  = explode('##',$request->id);
    
    $id = $exp[0];
    $mobile = $exp[2];
    $req_type = $exp[1];
    $fr_vendor_id =  auth()->user()->vendor_id;
@endphp


         
 <div class="table-responsive">
<form action="" method="post" id="assignformsAss">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-boredred">
    <tr>
      <td width="27%" valign="top"><strong>Sale Agent List</strong>:</td>
      <td width="73%">
      <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox"  class="custom-control-input " id="all_C" >
            <label class="custom-control-label" for="all_C">Select All</label>
         </div>   
     <div style="height:100px; overflow:auto">
     <?php 
		   $i = 1;
		 
          $data_12 = \DB::select("select a.vdbe_user_id as emp_id,name,cc.emp_id as emp_id_assign from vdbe_users a
	                   left outer join whatsapp_log_assign cc on cc.emp_id = a.vdbe_user_id and cc.wlog_id = '$id'
	 					where a.vendor_id = '$fr_vendor_id' and a.vdbe_type in(2)");
		   $counts = count($data_12);
		  foreach ($data_12 as $item_cp){
                        
			$emp_id   = $item_cp->emp_id; 
			$name   = $item_cp->name; 
			$emp_id_assign   = $item_cp->emp_id_assign; 
		   //extract($row);
		   ?>
     		
                 <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" name="saleagents[]" class="custom-control-input emps" id="<?php echo $emp_id?>" value="<?php echo $emp_id?>"
            <?php if($emp_id_assign==$emp_id)echo 'checked="checked"';?> >
            <label class="custom-control-label" for="<?php echo $emp_id?>"><?php echo ucwords(strtolower($name));?></label>
            <br>
            </div>
     <?php }?>
     </div>        </td>
    </tr>
    <tr>
      <td valign="top"><strong>Mobile:</strong></td>
      <td><label>
        <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $mobile?>"/>
      </label></td>
    </tr>
</table>
<input name="assignWAToagent" type="hidden" value="yes" />
<input name="id" type="hidden" value="<?php echo $id+0;?>" />

<input name="req_type" type="hidden" value="<?php echo $req_type+0;?>" />



</form>
</div>
<div id="load_errrors_q"></div>
<div class="modal-footer">
         <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
         <?php if($counts>0){?>
  <button type="button" class="btn btn-primary" id="cdw_btn" onclick="SavingData(1,'assignformsAss','cdw_btn','{{route('wa_remarksupdateupdate')}}','basicModal','loadFiltersz','load_errrors_q','Saved Successfull  !!!','func')">Save</button>
  <?php }?>
       
</div>

<script>

$(document).ready(function(){	

	$("#all_C").click(function(){
		 $('.emps').prop('checked', this.checked);  
	});
	
});
</script>