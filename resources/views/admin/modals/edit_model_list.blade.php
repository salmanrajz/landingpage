@inject('functions', 'App\Http\Controllers\HomeController')

@php 
$vatvalue = $functions::getvaluefromConfigSetups(49,214);

$exp = explode('-',$requests);
$fr_list_id = $exp[0];
$daily_rate = $exp[1];
$weekly_rate = $exp[2];
$monthly_rate = $exp[3];

$daily_rate_old = $exp[4];
$weekly_rate_old = $exp[5];
$monthly_rate_old = $exp[6];

@endphp

<form action="" id="form_edit_car_model">
					<div class="form-group">
                        <label for="exampleInputEmail1">Daily Rate:</label><br>
                       <label> <input type="text" class="form-control" id="daily_rate" name="daily_rate" placeholder="Daily Rate" onkeyup="CaluratesAmount('daily_rate','daily_rate_html','{{$vatvalue}}')" value="{{$daily_rate}}"></label>
                       
                       <label>VAT@5% <span id="daily_rate_html">0.00</span></label>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Weekly Rate:</label><br>
                        <label><input type="text" class="form-control" id="weekly_rate" name="weekly_rate" placeholder="Weekly Rate" onkeyup="CaluratesAmount('weekly_rate','weekly_rate_html','{{$vatvalue}}')" value="{{$weekly_rate}}"></label>
                        <label>VAT@5% <span id="weekly_rate_html">0.00</span></label>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Monthly Rate:</label><br>
                        <label><input type="text" class="form-control" id="monthly_rate" name="monthly_rate" placeholder="Monthly Rate" onkeyup="CaluratesAmount('monthly_rate','montly_rate_html','{{$vatvalue}}')" value="{{$monthly_rate}}"> </label>
                        <label>VAT@5% <span id="montly_rate_html">0.00</span></label>
                    </div>
                    
                    
  <input type="hidden" name="fr_list_id" value="{{$fr_list_id}}">
  
  <input type="hidden" name="daily_rate_old" value="{{$daily_rate_old}}">
  <input type="hidden" name="weekly_rate_old" value="{{$weekly_rate_old}}">
  <input type="hidden" name="monthly_rate_old" value="{{$monthly_rate_old}}">                   
                    
</form>

  <div class="form-group" id="load_error"> </div>  


<div class="modal-footer">
    <button class="btn ripple btn-primary" type="button"  onclick="SavingData(1,'form_edit_car_model','addmylistbtn','{{route('addtomylist')}}','basicModal','load_MyList','load_error','Addedd Successfull !!','fun')" id="addmylistbtn">Save</button>
    
    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
</div>

<script>
function CaluratesAmount(get_value,show_vat_colume,vat){
		var bill_amount = $('#'+get_value).val();
		
		if(bill_amount=='')bill_amount = 0;
		
		var vat_amount = (parseFloat(bill_amount)*parseFloat(vat)/100).toFixed(2);
		var total_payable = (parseFloat(bill_amount)+parseFloat(vat_amount)).toFixed(2);
		//alert(vat_amount);
		$('#'+show_vat_colume).html(total_payable);

}


  
			$(document).ready(function(){
			$("#daily_rate").trigger('keyup');
			$("#monthly_rate").trigger('keyup');
			$("#weekly_rate").trigger('keyup');
			
		
		
			});
	
	
</script>