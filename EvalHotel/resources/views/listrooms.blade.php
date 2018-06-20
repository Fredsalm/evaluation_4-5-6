@extends('layout.layout')

@section('content')

<div class="container">
	<div class="row justify-content-around">
		<!-- function that retrieves room data -->
			@foreach($lists as $list)
		<div class="col-3">
				<div class="container">
					<div class="row card mb-3">
						<div class="col-12 mt-1">Nom:{{ $list->name }}</div>
						<div class="col-12 ">Prix:{{ $list->price}}€</div>
						<div class="col-12 ">Suite: @if( $list->is_suite == 0) 
						  				Non
									@else
										oui
									@endif
						</div>
						<div class="col-12 ">Type de lit: {{ $list->bed_type}}</div>
						<div class="col-12 ">Access handicap: 
							@if( $list->reduced_mobility_access == 0) 
						  		Non
							@else
								oui
							@endif
						</div>

						
						<a class="col-12 mb-1" href="{{ url('/room')}}/{{$list->name}}" type="button">Voir</a>
					</div>
				</div>
		</div>
			@endforeach
	</div>
</div>
@stop