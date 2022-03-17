@inject('functions', 'App\Http\Controllers\HomeController')

@php 
$vatvalue = $functions::getvaluefromConfigSetups(49,214);

$totals_grands_leads = count($data_1);
$emp_id_login_id = auth()->user()->vdbe_user_id;
$emp_type = auth()->user()->vdbe_type;
@endphp



        
        <div align="center">
        <button type="button" class="btn btn-success" onclick="loadFilterszLeads('all');" id="classall">Overall</button>
        <button type="button" class="btn btn-success" onclick="loadFilterszLeads('-1');" id="class-1">Yesterday</button>
         <button type="button" class="btn btn-success" onclick="loadFilterszLeads('0');" id="class0">Today</button>
          <button type="button" class="btn btn-success" onclick="loadFilterszLeads('1');" id="class1">Next Day</button>
           <button type="button" class="btn btn-success" onclick="loadFilterszLeads('-7');"  id="class-7">7 Days</button>
           <button type="button" class="btn btn-success" onclick="loadFilterszLeads('-30');" id="class-30">1 Months</button>
            <button type="button" class="btn btn-success" onclick="loadFilterszLeads('-90');" id="class-90">3 Months</button>
             <button type="button" class="btn btn-success" onclick="loadFilterszLeads('-180');" id="class-180">6 Months</button>
             <button type="button" class="btn btn-success" onclick="loadFilterszLeads('-360');" id="class-360">12 Months</button>
        </div>
        
        
         <div align="left" style="margin-top:10px">
          <button type="button" class="btn btn-danger" id="attd_statusall" onclick="loadFilterszLeads('<?php echo $btn_class?>','all');">All</button>
         <?php //$sql2_attd_sql = query("select a.status_name,a.id from leads_status aleft outer join order by a.id") ;
			//confirm($sql2);
			$datas = array();
			
			foreach ($data_1_1 as $item){
			 $totalss = $item->totals;
			 $totalss = $totalss+0;
			?>
		
       	   <button type="button" class="btn btn-danger" id="attd_status<?php echo $item->id;?>" onclick="loadFilterszLeads('<?php echo $btn_class?>','<?php echo $item->id;?>');"><?php echo $item->status_name. " ($totalss)"; ?></button>
			<?php 
				$datas[] = $item->id.','. $item->status_name;				
			}
			
			
			$_SESSION['lead_attds'] = $datas;	?>
        
         
        </div>
        
        
<script>
		$(document).ready(function() {
		
			
			$('#class<?php echo $btn_class;?>').removeClass('btn-success');
			$('#class<?php echo $btn_class;?>').addClass('btn-danger');
			
			$('#attd_status<?php echo $status_filterx;?>').removeClass('btn-danger');
			$('#attd_status<?php echo $status_filterx;?>').addClass('btn-success');
			 
		
			 
		});


</script>
        
        <div class="row">
        <div class="col-md-6" align="left" style="margin-top:10px">
          <?php //}
		 
		 //if($from=='1970-01-01')$from = $too;?>
          <strong>Date: <?php echo date('d-M-Y',strtotime($from));?> TO: <?php echo date('d-M-Y',strtotime($too));?>,    Leads Found: <?php echo $totals_grands_leads;?></strong>  
          
          </div>
          
          
       
         </div>
         <!-- <table id="highlightRowColumn" class="table table-bordered">-->
         
   <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-bordered table-responsive" id="data_1">
               <thead>
                    <tr>
                      <td width="1%"><strong>S.No</strong></td>
                      <td width="5%"><strong>DateTime</strong></td>
                      <td width="5%"><strong>Customer</strong></td>
                      <td width="5%"><strong>Email</strong></td>
                      <td width="9%"><strong>Mobile</strong></td>
                      <td width="9%"><strong>From-To</strong></td>
                      <td width="15%"><strong>Vehicle</strong></td>
                      <td width="15%"><strong>Message</strong></td>
                      <td width="8%"><strong>Attend By</strong></td>
                      <td width="6%"><strong>Channel</strong></td>
                      <td width="10%"><strong>Source</strong></td>
                      <td width="13%"><strong>Remarks</strong></td>
                      <td width="14%"><strong>Actions</strong></td>
                 </tr>
                    </thead>
                    <tbody>
            <?php        
		   //$count = row_count($sql2);
		   $i = 1;
		   foreach ($data_1 as $item){
		   
		  // extract($item); 
		   
		   //$created_bynew = $created_bynew+0;
		   //if($created_bynew ==0){
		   //$createdby = 'Customer';
		   //}
		   $emp_id = 0;
		   $date_time = $item->date_time;
		   $id = $item->id;
		   $req_type = $item->req_type;
		   $dropoff_date = $item->dropoff_date;
		   $pickup_date = $item->pickup_date;
		   $page_name = $item->page_name;
		   $name = $item->name;
		   $email = $item->email;
		   $mobile4 = $item->mobile4;
		   $mobile3 = $item->mobile3;
		   $mobile2 = $item->mobile3;
		   
		   $car_name = $item->car_name;
		   $message = $item->message;
		   $attended_by_name = $item->attended_by_name;
		   $remarks = $item->remarks;
		   $attend_by = $item->attend_by;
		   $attd_status = $item->attd_status;
		   $username = $item->name;
		   $totals = $item->totals;     
		   
		   
		    $date_time = date('d-M-Y g:i A',strtotime($date_time));
			
			$emp_id = $emp_id+0;
			$req_label = '';
			
			
			if($req_type==1){
				$req_label = '<span class="badge bg-success">Call</span>';
			}
			else if($req_type==2){
				$req_label = '<span class="badge bg-danger">Email</span>';
			}else
			if($req_type==33){
				$req_label = '<span class="badge bg-primary">WhatsApps</span>';
			}
			else
			if($req_type==3){
				$req_label = '<span class="badge badge-pill badge-warning">Adv.Reserve</span>';
			}
				
				
				$dropoff_date2 = date('d-M-Y',strtotime($dropoff_date));
				$pickup_date2 = date('d-M-Y',strtotime($pickup_date));
				
				if($dropoff_date2=='30-Nov--0001') $dropoff_date2 = '';
				if($pickup_date2=='30-Nov--0001') $pickup_date2 = '';
				
				
				$fromTo_Date = '';
				$dayss = '';
				if(!empty($dropoff_date) && !empty($pickup_date)){
					
					$dayss = \App\Helpers\AppHelper::instance()->dateDiff($pickup_date, $dropoff_date);
									
					$fromTo_Date = "$pickup_date2 - $dropoff_date2  Days:$dayss";
				}
				
				if($page_name=='caryaati.com'){
					$createdby = 'online caryaati';
				}
					?>
              
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $date_time;?></td>
                      <td><?php echo $name;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $mobile4.' '.$mobile3;?></td>
                      <td><?php echo $fromTo_Date;?></td>
                      <td><?php echo $car_name;?></td>
                      <td><?php echo $message;?></td>
                      <td><?php echo $attended_by_name;?></td>
                      <td><?php echo $req_label;?></td>
                      <td><?php echo $page_name;?></td>
                      <td><?php echo $remarks;?></td>
                      <td>
                      <?php if($emp_id==0 or $emp_id_login_id==$emp_id ){
					  			if($req_type==2 or $req_type==1){
					  				?>
                       <i class="fa fa-comment" onClick="Open_model('basicModal','modalbody','{{route('callremarks')}}','<?php echo $id;?>','Remarks: <?php echo $name;?>','exampleModalLabel','normal')" data-toggle="tooltip" data-placement="top" title="Remarks"></i>
                       <?php } }?>  
                       
                       
                        <?php if($emp_type==2 && $attend_by==0  or $is_main_admin=='yes' && $attend_by==0 ){ // teamLead
						
						
						if(!in_array($attd_status,array(4,3))){
						
							 
						?>
                      <i class="fa fa-link" onClick="Open_model('basicModal','modalbody','{{route('assign_wa_sale_agent')}}','<?php echo $id.'##'.$req_type.'##'.$mobile2;?>','Assign To Sale Agent: <?php echo $username;?>','exampleModalLabel','normal')" data-toggle="tooltip" data-placement="top" title="Assign To Sale Agent"></i> &nbsp;
                      
                      <?php if($totals>0)echo "($totals)";?>
                      
                    <?php  		
							}
					
					
					}
					
					if($attend_by==0 && $req_type==33 ){?>
					    <i class="fa fa-comment" onClick="Open_model('basicModal','modalbody','{{route('wa_remarks')}}','<?php echo $id;?>','Remarks: <?php echo $username;?>','exampleModalLabel','normal')" data-toggle="tooltip" data-placement="top" title="Remarks"></i>
                        <?php }
						
					   ?>
                       
                       
                       
                     <?php 
					 if($is_main_admin!='yes' && $attd_status==4 or $is_main_admin!='yes' && $attd_status==5){?>  
                     
                      <label>
            			<?php echo $status_name2 = 'ffff';?>            </label>
            
            
            <?php }else{?>
            
            
                       <label><select class="form-control" name="leads_status_<?php echo $id;?>" id="leads_status_<?php echo $id;?>" onchange="LeadsStatusChange('<?php echo $req_type;?>','<?php echo $id;?>','{{route('updateStatusattd')}}');">
                       <?php for($a=0; $a<count($datas); $a++){
					   $expp = explode(',',$datas[$a]);
					   $leads_id = $expp[0];
					   $leads_status = $expp[1];
					   ?>
                       <option value="<?php echo $leads_id;?>"  <?php if($leads_id==$attd_status)echo 'selected="selected"';?>><?php echo $leads_status;?></option>
                       
                       
                       <?php }?>
                     <?php }?>  
                         </select>
                       </label>                   </td>
                    </tr>
             <?php $i++;}
			 
			/* $vendor_id = $_SESSION['partner_id'];
		     $vendor_rowid = $_SESSION['partner_rowid'];
			 
			
			if($is_main_admin=='yes'){
			
			
					//Call//
					 $emp_id = $_SESSION['admin_user'];
					 $rang = "and emp_id = '$emp_id'";
					
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,emp_id)
													 SELECT id,'$vendor_rowid','$cdate','2','$emp_id' FROM call_request a
					where a.vendor_id = '$vendor_rowid'  and req_type = 1 and a.emp_id is NULL  and
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 2 $rang)
		
					") ;
					//confirm($sql);
					
					// email
					
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,emp_id)
													 SELECT id,'$vendor_rowid','$cdate','3','$emp_id' FROM call_request a
					where a.vendor_id = '$vendor_rowid'  and req_type = 2 and a.emp_id is NULL  and
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 3 $rang)
		
					") ;
					//confirm($sql);
					
					// Adv.Reser
					
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,emp_id)
													 SELECT id,'$vendor_rowid','$cdate','4','$emp_id' FROM call_request a
					where a.vendor_id = '$vendor_rowid'  and req_type = 3 and a.emp_id is NULL  and
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 4 $rang)
		
					") ;
					//confirm($sql);
					
					
					
					//WA
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,emp_id)
													 SELECT id,'$vendor_rowid','$cdate','1','$emp_id' FROM whatsapp_log a
					where a.vendor_id = '$vendor_id'  and a.attend_by is NULL  and
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 1 $rang) 
		
					") ;
					//confirm($sql);	
					
					
					
				}else{ 
				
					//call
					$rang = "and admin_id = '$vendor_rowid'";
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,admin_id)
													 SELECT id,'$vendor_rowid','$cdate','2','$vendor_rowid' FROM call_request a
					where a.vendor_id = '$vendor_rowid' and req_type = 1  and a.emp_id is NULL
					and 
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 2 $rang)") ;
						
					//confirm($sql);	
					
					
					//email
					
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,admin_id)
													 SELECT id,'$vendor_rowid','$cdate','3','$vendor_rowid' FROM call_request a
					where a.vendor_id = '$vendor_rowid' and req_type = 2  and a.emp_id is NULL
					and 
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 3 $rang)") ;
						
					//confirm($sql);	
					
					// Adv.Reser
					
					$sql = query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,admin_id)
													 SELECT id,'$vendor_rowid','$cdate','4','$vendor_rowid' FROM call_request a
					where a.vendor_id = '$vendor_rowid' and req_type = 3  and a.emp_id is NULL
					and 
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 4 $rang)") ;
						
					//confirm($sql);		
					
					
					//WA
					$sql =  query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type,admin_id)
					 SELECT id,'$vendor_rowid','$cdate','1','$vendor_rowid' FROM whatsapp_log a
					where a.vendor_id = '$vendor_id'   and 
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 1 $rang)  
						and a.attend_by is NULL 
		 
					") ;
				//confirm($sql);	
						
				}*/
			
			
			
			/* query("INSERT INTO whatsapp_log_mark(wlog_id,vendor_id,create_date,wlog_type)
					 SELECT id,'$vendor_rowid','$cdate','2' FROM call_request a
					where a.vendor_id = '$vendor_rowid'  and 
					a.id not 
						in(select wlog_id from whatsapp_log_mark where vendor_id = '$vendor_rowid' and wlog_type = 2)
		
		");*/
			 ?>      
                   </tbody> 
                  </table>
        <br>
<br>

<?php //if($emp_type==1.003 or $is_main_admin=='yes'){// teamLead?>
<div class="row">
 <div class="col-lg-12 col-xs-12 col-sm-12" >
                            <!-- BEGIN PORTLET-->
                           
                           <div class="portlet light bordered" style="  height: 437px;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Leads Status Graphs</span>
                                        <!-- <span class="caption-helper">monthly stats...</span> -->
                                    </div>
                                    <div class="actions ">
                                        <div class="btn-group">
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" >
                                    
                                    
                                     	<div class="col-md-8" style="float:left">
					<?php 
					//echo $filterz_status_rang;
					 //"$from --  $too";
					 
					 //if(!empty($filterz_status_rang)) $filterz_status_rang2 = str_replace('and','where',$filterz_status_rang)
					 
  		
				
			
		   $i = 1;
		   $graph_one_label = '';
		   $details_datas = '';
		   $totals_leads = 0;
		   $status_datas = array();
		   
		   $countss = count($data_g_1);
		  foreach ($data_g_1 as $item_g){
		  
		   		$totals_leads+= $countss = $item_g->ids;
				$status_name = $item_g->status_name;
				
				$status_datas [] = "$status_name,$countss";
		   		
					if($i==1){
						//$graph_one_label .= "{ label: '$status_name ($countss)', data: $countss }"; 
						
					}else{
						//$graph_one_label .= ",{ label: '$status_name ($countss)', data: $countss }"; 
						
						
						 
						
						//$details_datas .= "<tr><td>$status_name</td><td>$countss</td></tr>";
					}
					
					$graph_one_label .= "{ country: '$status_name', litres: $countss   },";
					
		  $i++; }
		  
		 
		  if($totals_leads>0){
		   	for($a=0; $a<count($status_datas); $a++){
					   $expp = explode(',',$status_datas[$a]);
					   $status_name2 = $expp[0];
					   $counts_2 = $expp[1];
					   $percentage = 0;
					   $percentage = round( ($counts_2*100/$totals_leads),2);
					   $details_datas .= "<tr><td>$status_name2</td><td>$counts_2 ($percentage%)</td></tr>";
					   
				}	   
					?>
                    
					
            	
                <div id="chartdiv" class="chart-height"></div>
                </div>
                
                
                <div class="col-md-4" style="float:left">
										
									
									
											<table  class="table m-0 table-responsive" style="line-height: 0.3;">
												<thead class="thead-light">
											  <th style="font-size: 12px;">Total Leads </th>
													<th><?php echo $totals_leads;?></th>
												</thead>
												<tbody>
													<?php echo $details_datas; ?>
												</tbody>
											</table>
		</div>
                                    
        <?php }//$totals_leads?>                            
                                    
                                    
                                </div>
                                <!-- END PORTLET-->
    </div>
                            
   
                           
  </div>

</div>


<div class="row">
			
            
            
            
            
            <div class="col-lg-12 col-xs-12 col-sm-12" style="margin-top:50px">
                            <!-- BEGIN PORTLET-->
                           
                           <div class="portlet light bordered" style="  height: 437px;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Agent wise leads allocation</span>
                                        <!-- <span class="caption-helper">monthly stats...</span> -->
                                    </div>
                                    <div class="actions ">
                                        <div class="btn-group">
                                         
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" >
                                    
                                    
                                     	<div class="col-md-8">  
                
                <?php 
				
		   $i = 1;
		   $graph_one_label2 = '';
		   $details_datas = '';
		   $totals_leads = 0;
		   $status_datas = array();
		    $countss = count($data_g_2);
		   foreach ($data_g_2 as $item_g){
		   
		   		 $totals_leads+=$countss = $item_g->idsss;
				 $status_name = $item_g->name;
				
				$status_datas [] = "$status_name,$countss";
		   		
					if($i==1){
						//$graph_one_label2 .= "{ label: '$status_name ($countss)', data: $countss }"; 
						
					}else{
						//$graph_one_label2 .= ",{ label: '$status_name ($countss)', data: $countss }"; 
						//$details_datas .= "<tr><td>$status_name</td><td>$countss</td></tr>";
					}
					$graph_one_label2 .= "{ country: '$status_name', litres: $countss   },";
					
		  $i++; }
		  
		   if($totals_leads>0){
		   	for($a=0; $a<count($status_datas); $a++){
					   $expp = explode(',',$status_datas[$a]);
					   $status_name2 = $expp[0];
					   $counts_2 = $expp[1];
					   $percentage = 0;
					   $percentage = round( ($counts_2*100/$totals_leads),2);
					   $details_datas .= "<tr><td>$status_name2</td><td>$counts_2 ($percentage%)</td></tr>";
					   
				}	   
					?>
                   
                
                
                
           		 <div id="chartdiv2" class="chart-height"></div>
                 
                 </div>
                 
                 
                 <div class="col-md-4 ">
										
									
											<table  class="table m-0 table-responsive" style="line-height: 0.3;">
												<thead class="thead-light">
											  <th style="font-size: 10px;">Agents Leads</th>
													<th><?php echo $totals_leads;?></th>
												</thead>
												<tbody>
													<?php echo $details_datas;?>
												</tbody>
											</table>
								  </div>
                 
                                    
          <?php } // if($totals_leads>0){?>                          
                                    
                                </div>
                                <!-- END PORTLET-->
              </div>
                            
   
                           
  </div>
            
            
            


</div>

        
<script>
$(document).ready(function() {
    //$('#data_1').DataTable( );
	 $('#view_btn').prop('disabled', false);	
	//BellBagesAllinone();
	var table = $('#data_1').DataTable( {
	//orderCellsTop: true,
	"pageLength": 100,
	"order": [],
	//searching: false, 
	//paging: false, 
	//info: false,
	//"bAutoWidth": true, 
	"bSort": false, 
	dom: 'Bfrtip',
        buttons: [   { extend: 'excel', text: '<i class="far fa-file-excel" aria-hidden="true"></i> Export to Excel'}, 
					 { extend: 'pdf' ,text: '<i class="far fa-file-pdf" aria-hidden="true"></i> Save as PDF', orientation: 'landscape',pageSize: 'LEGAL'},
           
           
        ],
		
    
		
    } );
	
	 

	 
});

		
		am4core.ready(function() {
		
		// Themes begin
		am4core.useTheme(am4themes_kelly);
		am4core.useTheme(am4themes_animated);
		// Themes end
		
		var chart = am4core.create("chartdiv", am4charts.PieChart3D);
		chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
		
		chart.legend = new am4charts.Legend();
		
		chart.data = [ <?php echo $graph_one_label ?>
		  
		];
		
		chart.innerRadius = 100;
		
		var series = chart.series.push(new am4charts.PieSeries3D());
		series.dataFields.value = "litres";
		series.dataFields.category = "country";
		
		}); // end am4core.ready()
		
		
		
		
				
		am4core.ready(function() {
		
		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end
		
		var chart = am4core.create("chartdiv2", am4charts.PieChart3D);
		chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
		
		chart.legend = new am4charts.Legend();
		
		chart.data = [ <?php echo $graph_one_label2;?>
		  
		];
		
		chart.innerRadius = 100;
		
		var series = chart.series.push(new am4charts.PieSeries3D());
		series.dataFields.value = "litres";
		series.dataFields.category = "country";
		
		}); // end am4core.ready()
		

		

</script>

       
		
		

<?php //}//if($emp_type==1.003 or $is_main_admin=='yes'){// teamLead?>

<style>
			.buttons-excel{
    color: #fff !important;
    background-color: #36c6d3 !important;
    border-color: #2bb8c4 !important;
	    
}

.buttons-pdf){
    color: #fff !important;
    background-color: #ed6b75 !important;
    border-color: #ea5460 !important;
}
button.dt-button, div.dt-button, a.dt-button
{background-image:none;}

.table-bordered thead td {
     background-color: #FFFFFF !important;
}
			</style>

<script>




$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<style>
#data_1 td,th{ font-size:11px}

.chart-height{ height:450px}

table tbody{
    word-wrap: break-word !important;         /* All browsers since IE 5.5+ */
    overflow-wrap: break-word !important; 
	word-break:break-all !important;
	white-space:normal !important;    /* Renamed property in CSS3 draft spec */
}

</style>
                        
                        
     

