@extends('layouts.app')


@section('content')





<div class="container" {{ $rtl }}>
	<div class="row">

		<div class="col">
			
			<table class="table mt-4 table-striped table-hover table-responsive w-100 d-block d-md-table" id="payments">
			  <thead>
			    <tr>
			      <th>{{ __('server.paymentId') }}</th>
				  <th>{{ __('server.serviceId') }}</th>
				  <th>{{ __('server.userId') }}</th>
				  <th>{{ __('server.quantity') }}</th>
				  <th>{{ __('server.servicePaymentMethod') }}</th>
				  <th>{{ __('server.price') }}</th>
				  <th>{{ __('server.serviceStatus') }}</th>
				  <th>{{ __('server.actions') }}</th>
			    </tr>
			  </thead>

		  	  <tbody>
				@foreach ($payments as $payment)

					@if($payment->the_status == "open")
						@php ($badge_type = "primary")

					@elseif($payment->the_status == "accepted")
						@php ($badge_type = "success")

					@elseif($payment->the_status == "refused")
						@php ($badge_type = "danger")

					@elseif($payment->the_status == "canceled")
						@php ($badge_type = "warning")
					@else
						@php ($badge_type = "warning")
					@endif
				 
				 
				    <tr>
				     <td>{{ $payment->id }}</td>
				     <td>{{ $payment->service_id }}</td>
				     <td>{{ $payment->user_id }}</td>
				     <td>{{ $payment->quantity }}</td>
				     <td>{{ $payment->payment_method }}</td>
				     <td>{{ $payment->price.' '.$payment->currency }}</td>
				     <td>{{ $payment->the_status }}</td>


				     <td>

					      	<a class="btn btn-success" onclick="window.location.assign('{{ url('server/conversation/'.$payment->conversation_id.'') }}')">{{ __('server.view') }}</a>
				      </td>
				    </tr>	
				

			    @endforeach

		  	  </tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready( function () {
    $('#payments').DataTable({
    	"order": [[ 0, "desc" ]],
    	"searching": false,
    	"bLengthChange": false,
    });
} );
</script>

@endsection