<div class="form-group">
    <label for="localminutes" class="control-label col-md-12 col-sm-12 col-xs-12">
        Package Name:
    </label>
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
        <select name="package" id="package" class="form-control" onchange="PackageChange('{{route('Package.Details')}}',$(this).val())">
            <option value="">Select Package</option>
            @php
            @endphp
            @foreach ($caryaati_package as $item)
                <option value="{{$item->id}}">{{$item->package_name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">

    <label for="localminutes" class="control-label col-md-12 col-sm-12 col-xs-12">
        No Of Cars:
    </label>
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
            <input class="form-control has-feedback-left"  name="no_of_cars"
                placeholder="Type Agent Name Here" id="no_of_cars" autocomplete="off" autocomplete="off" readonly>
    </div>
</div>

<label for="localminutes" class="control-label col-md-12 col-sm-12 col-xs-12">
    Contract Period
</label>
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
            <select name="period" id="period" class="period form-control" onchange="PackageCalculate('{{route('Package.calculate')}}',$(this).val())">
                <option value="">Select Contract Period</option>
                @for($i=1;$i<=11;$i++)
                @if($i==1)
                <option value="{{$i}}">{{$i}} Month</option>
                @else
                <option value="{{$i}}">{{$i}} Months</option>
                @endif
                @endfor
            </select>
    </div>

    <label for="localminutes" class="control-label col-md-12 col-sm-12 col-xs-12">
        Total Amount
    </label>
    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
        <input type="text" name="final_price" id="final-price" class="final-price form-control" readonly>
    </div>


</div>

<hr>
{{-- <div class="form-group"> --}}

{{-- </div> --}}
<div class="form-group float-right right modal-footer">
    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
    <button type="button" class="btn btn-primary"
        onclick="FinalStep('{{route('load.final')}}','MyForm3','RedirectMe')">Payment</button>
</div>
<div class="text-center center">
    <div id="loading1" style="display:none;text-align:center;">
        Loading ......
        <img src="https://www.caryaati.com/assets/loading.gif" alt="Loading" style="width:50px;">
    </div>
</div>
<div class="alert alert-danger print-error-msg" style="display:none">
    <ul></ul>
</div>
