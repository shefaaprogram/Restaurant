@extends('layouts.app')
@section('content')

<span><b> {{Auth::user()->name}} this is your Reservation </b></span>

@foreach ($food_users as $food)
  
  <a href="#">
	<div  class="row list-group-item page-title-list">
		<div class="col-xs-8">
			   {{$food->meal}}
		</div>
		<div class="col-xs-4">
			        <div><a href="/menu/{{$food->id}}/deleteFromOrder" class="btn btn-danger pull-right"> DeleteFromOrder</a>
            	

			</div>
		</div>
		
	</div>
</a>
@endforeach
@stop