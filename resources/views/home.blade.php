@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reservation</div>

                <div class="panel-body">
                   
                Welcome to our  restaurant choose your prefer food please !!
<form>
                <label for="Meals">Choose your Meals:</label>

                <br>

              <input type ="checkbox"> Pizza

               <br>  <input type ="checkbox"> Vegetabels
           
              <br>     <input type ="checkbox"> Meat
               <br> <input type ="reset">

               <input type ="submit" value="AddTo Reserv">
</form>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection
