@extends('layouts.app')


@section('content')





<div class="container" {{ $rtl }}>
	<div class="row">

		<div class="col">

			<button class="btn btn-light border mb-2 mt-5 pt-0 pb-0 float-right" onclick="window.location.assign('{{ url('trade/create') }}')">{{ __('trade.newtrade') }}</button>

			<table class="table table-striped table-hover table-responsive w-100 d-block d-md-table" id="trades">
			  <thead>
			    <tr>
				  <th scope="col">{{ __('trade.createdAt') }}</th>
				  <th scope="col">{{ __('trade.id') }}</th>
			      <th scope="col">{{ __('trade.from') }}</th>
			      <th scope="col">{{ __('trade.to') }}</th>

			    </tr>
			  </thead>

		  	  <tbody>
				@foreach ($trades as $trade)
				
				    <tr>
				      <td>{{ $trade->created_at }}</td>
				      <th scope="row">{{ $trade->id }}</th>
				      <td class="text-danger">- {{ $trade->sold.' '.$trade->from }}</td>
				      <td class="text-success font-weight-bold">+ {{ $trade->bought.' '.$trade->to }}</td>
				    </tr>	
				

			    @endforeach

		  	  </tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready( function () {
    $('#trades').DataTable({
    	"order": [[ 0, "desc" ]],
    	"searching": false,
    	"bLengthChange": false,
    });
} );


</script>

@endsection