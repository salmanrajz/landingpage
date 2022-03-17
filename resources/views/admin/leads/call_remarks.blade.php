@php
$id = $request->id;
@endphp
<div class="table-responsive">
<form action="" method="post" id="assignforms">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-boredred">
    <tr>
      <td width="26%" valign="top"><strong>Remarks</strong></td>
      <td width="74%">
       <label>
        <textarea name="remarksn" id="remarksn" cols="45" rows="5" class="form-control"></textarea>
      </label></td>
    </tr>
   
   
    
   
</table>
<input name="CallgivenRemarks" type="hidden" value="yes" />
<input name="id" type="hidden" value="<?php echo $id+0;?>" />



</form>
</div>
<div id="load_error2"></div>
<div class="modal-footer">
       <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
       <button class="btn ripple btn-primary" type="button"  onclick="SavingData(1,'assignforms','addmylistbtn34','{{route('callremarksupdate')}}','basicModal','loadFilterszLeads','load_error2','Saved Successfull !!','fun')" id="addmylistbtn34">Save</button>
       
</div>

<script>

$(document).ready(function(){	

	$("#all_C").click(function(){
		 $('.emps').prop('checked', this.checked);  
	});
	
});
</script>