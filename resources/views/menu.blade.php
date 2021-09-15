@extends('layouts.app')
@section('content')



<span><b> OurMenu </b></span>

@foreach($foods as $food)
<a href="#">
	<div  class="row list-group-item page-title-list">
		<div class="col-xs-8">
			   {{$food->meal}}
		</div>
		<div class="col-xs-4">
			 @if(Auth::user()->role == 2)
    		        <div><a href="/menu/{{$food->id}}/delete" class="btn btn-danger pull-right"> Delete</a>
             @endif
				 @if(Auth::user()->role == 3)

    		        <div><a href="/menu/{{Auth::user()->id}}/{{$food->id}}/AddOrder" class="btn btn-danger pull-right">AddToMyOrder </a>
             @endif
				

			</div>
		</div>
		
	</div>
</a>


@endforeach
	 @if(Auth::user()->role== 2)

<div class="row list-group-item">
	<form method="Post" action="addTomenu">
		{{csrf_field()}}
		<div class="input-group">
			<input type="text" name="meal" class="form-control" placeholder="AddFood...">
			<span class="input-group-btn">
			 

				<button class="btn btn-default" type="submit"> Add</button>
			</span>
			
		</div>
		
	</form>
</div>
		  @endif


		
	 @if(Auth::user()->role == 3)

    		        <div><a href="/menu/{{Auth::user()->role}}/ShowReservation" class="btn btn-danger pull-right">ShowMyReservation </a>
             @endif
				
@stop