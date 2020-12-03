@extends('layouts.app')



@section('content')

<div class="container">


		<div class="col-lg-5 mx-auto mt-3">
			<form action="{{ url('trade') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-row">

					<div class="form-group col-6">
						<label for="from">{{ __('trade.give') }}</label>
						<select class="form-control dynamic" id="from" name="from" data-dependent="to" required>
							@PHP($passed = [])
								<option value="1">{{ __('trade.select') }} {{ __('trade.paymentMethod') }}</option>
							@foreach( $exchanges as $payment_method)
								@if(!in_array($payment_method->first_pm, $passed))
								<option value="{{ $payment_method->first_pm}}">{{ $payment_method->first_pm }}</option>
								@PHP(array_push($passed, $payment_method->first_pm))
								@endif
								@if(!in_array($payment_method->second_pm, $passed))
								<option value="{{ $payment_method->second_pm}}">{{ $payment_method->second_pm }}</option>
								@PHP(array_push($passed, $payment_method->second_pm))
								@endif
							
							@endforeach
						</select>
					</div>

					<div class="form-group col-6">
						<label for="to">{{ __('trade.get') }}</label>
						<select class="form-control dynamic" id="to" name="to" required >
								@PHP($passed = [])
								<option value="1">{{ __('trade.select') }} {{ __('trade.paymentMethod') }}</option>
							@foreach( $exchanges as $payment_method)
								@if(!in_array($payment_method->second_pm, $passed))
								<option value="{{ $payment_method->second_pm}}">{{ $payment_method->second_pm }}</option>
								@PHP(array_push($passed, $payment_method->second_pm))
								@endif
								@if(!in_array($payment_method->first_pm, $passed))
								<option value="{{ $payment_method->first_pm}}">{{ $payment_method->first_pm }}</option>
								@PHP(array_push($passed, $payment_method->first_pm))
								@endif
							
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-6">
						<input type="number" class="form-control" id="sell" name="sell" placeholder="0" disabled="" step=".01">
					</div>

					<div class="form-group col-6">
						<input type="number" class="form-control" id="buy" name="buy" placeholder="0" disabled="" step=".01">
					</div>
				</div>

				<button class="btn btn-dark float-right">{{ __('trade.exchange') }} </button>
			</form>
		</div>


	
</div>


<script>
$(document).ready(function(){

	// Don't allow to use same payment_method in both selects
	$('#from, #to').change(function(){
		
		// reset
		$("#buy").val("0");
		$("#sell").val("0");

		// disable writing amounts before choosing payment methods
		if($('#from').val() != 1 && $('#to').val() != 1){
			$("#buy").prop('disabled', false);
			$("#sell").prop('disabled', false);
		}

		// Don't allow
		if($('#from').val() == $('#to').val()){
			$('#to').val('1');
			$('#from').val('1');
		}
	})

	// On focus reset 0 other input to avoid conflict
	$('#sell').on('input',function(e){
		$('#buy').val("");
		$("#buy").prop('disabled', true);
	})
	$('#buy').on('input',function(e){
		$('#sell').val("");
		$("#sell").prop('disabled', true);
	})



			


//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 700;  //time in ms, 5 second for example
var $input = $('#buy, #sell');

//on keyup, start the countdown
$input.on('input', function () {
	

	

  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});


function doneTyping(){ 
	var from = $('#from').val();
	var to = $('#to').val();
	var sell_amount = $('#sell').val();
	var buy_amount = $('#buy').val();
	var _token = $('input[name="_token"]').val();

	$.ajax({
		url:"{{ route('trade.fetch') }}",
		method:"POST",
		data:{from:from, to:to, sell_amount:sell_amount, buy_amount:buy_amount , _token:_token},
	success:function(result)
	{
		if($('#sell').val() != 0){
		$('#buy').val(result);
		$("#buy").prop('disabled', false);
		$('#buy').focus();
	}else{
		$('#sell').val(result);
		$("#sell").prop('disabled', false);
		$('#sell').focus();
	}
	}
	})
	}
		

}
)
</script>

@endsection