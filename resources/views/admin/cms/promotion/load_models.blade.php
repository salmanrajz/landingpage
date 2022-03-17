
<div class="table-responsive">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped table-hover">
  <tr>
    <th width="3%" scope="row"> S.no.</th>
    <th width="26%" scope="row"> <div align="left">Vehicle Model</div></th>
    <th width="15%" scope="row"> Daily Rate</th>
    <th width="13%" scope="row">Weekly Rate</th>
    <th width="14%" scope="row">Monthly Rate</th>
    <td width="13%"><div align="center"><strong> Status</strong></div></td>
    <td width="16%"><div align="center"><strong>Action</strong></div></td>
  </tr>
  
   <?php
	$date = date('Y-m-d');	
					
	  $ii=1;
	  //echo $promo_id;
	 if($promo_id>=0){
	  
	 foreach ($data as $items){
	  	$promo_dtl_id 	=  $items->promo_dtl_id;
		$mname 			=  $items->mname;
		$daily_rate 	=  $items->daily_rate;
		$weekly_rate 	=  $items->weekly_rate;
		$monthly_rate 	=  $items->monthly_rate;
		$p_status 		=  $items->p_status;
	  $p_status_n = ''; 
	   if ($p_status == 1) {
            $p_status_n = "<span class=' badge bg-success'>Active</span>";
        }
        else if ($p_status == 2) {
		  $p_status_n = "<span class=' badge bg-danger'>Deactive</span>";
		}
	   ?>
   <tr id="list_<?php echo $promo_dtl_id;?>">
    <td><div align="center"><?php echo $ii;?></div></td>
    <td><div align="left"><?php echo $mname;?></div></td>
    <td><div align="right"><?php echo $daily_rate;?></div></td>
    <td><div align="right"><?php echo $weekly_rate;?></div></td>
    <td><div align="right"><?php echo $monthly_rate;?></div></td>
    <td><div align="center"><?php echo $p_status_n;?></div> </td>
   <td><div align="center">
   <i class="fa fa-edit" onClick="Open_model('basicModal','modalbody','{{route('OpenModal')}}','<?php echo "admin.cms.promotion.AddModels,$promo_id,$promo_dtl_id";?>','Edit:<?php echo $mname?>','exampleModalLabel','larg')" style="cursor:pointer"></i> 
   &nbsp;
   
    <i class="fa fa-trash-o" onClick="deleteBox('<?php echo $promo_dtl_id;?>','be_promos_dtl','promo_dtl_id'); " style="cursor:pointer"></i> 
     </div>
   
   
   
       </td>
  </tr>
  
  <?php 
  	
  $ii++;
  } 
  
  }//promo>0?>
</table>

</div>