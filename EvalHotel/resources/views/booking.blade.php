@extends('layout.layout')

@section('content')
<!-- function to display the name of the chamber choise -->
@foreach($bookings as $booking) 
	<div class="container">
		<div class="row">
			<h2 class="col-12 mb-4 text-center">{{ $booking->name }}</h2>
		</div>
	</div>	
@endforeach

<form method="post" class="container">
	<div class="form-group row justify-content-around" >

		<label for="date-arrival">Arriver: </label>
		<input type="date" class="form-control col-4" id="date-arrival" name="arrival">

		<label for="date-go"> Départ:</label>
		<input type="date" class="form-control col-4" id="date-go" name="go">

		<div class="w-100"></div>

	    <label for="Selectcustomer" class="mt-3"> Select:</label>
	    <select class="form-control col-4 mt-3" id="Selectcustomer">
	    	<!-- function to display the name of the customer -->
	    	@foreach($customers as $customer)
	      		<option>{{$customer->last_name}}</option>
	      	@endforeach
	    </select>

	    <label for="Selectstatus" class="mt-3"> Select:</label>
	    <select class="form-control col-4 mt-3" id="Selectstatus">
	    	<!-- function to display the name of the status -->
	      @foreach($bookingstatuses as $booking_statuse)
	      	<option>{{$booking_statuse->booking_status}}</option>
	      @endforeach
	    </select>

	    <div class="w-100"></div>

		<button class="btn btn-primary col-2 mt-5">Ok</button>

	</div>
</form>


@stop