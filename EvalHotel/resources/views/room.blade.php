@extends('layout.layout')

@section('content')

	<div class="container">
		<div class="row card  pb-3 pt-3 mb-5">
			<!-- function that retrieves room data -->
			@foreach($lists as $list)
			<div class="col-12 text-center">Nom: {{ $list->name }}</div>
			<div class="col-12 text-center">Prix: {{ $list->price}}€</div>
			<div class="col-12 text-center">Suite: @if( $list->is_suite == 0) 
			  				Non
						@else
							oui
						@endif
			</div>
			<div class="col-12 text-center">Vue:{{ $list->view}}</div>
			<div class="col-12 text-center">Type de lit: {{ $list->bed_type}}</div>
			<div class="col-12 text-center">Etage: {{ $list->floor}}</div>
			<div class="col-12 text-center">Surface: {{ $list->area}} m2</div>
			<div class="col-12 text-center">Salle de bain: {{ 	$list->bathroom_type}}</div>
			<div class="col-12 text-center">Access handicap: 
				@if( $list->reduced_mobility_access == 0) 
			  		Non
				@else
					oui
				@endif
			</div>
			<a class="col-12 text-center" href="{{ url('/booking')}}/{{$list->name}}" type="button">Réservation</a>
			@endforeach
		</div>
	</div>
	
	
	

@stop