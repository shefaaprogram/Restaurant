<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Food_user;
use App\User;

use DB;


class foodController extends Controller
{
    //

    public function show()
    {
    	$foods = DB::table('foods')->get();
         return view('menu',compact('foods'));
    }
    public function delete(Food $food){
		$food->delete();
		return back();
	}

    public function addTomenu(Request $request)
    {
    	$food = new Food;
    	$food->meal = $request->meal ;
         $food->save();
    	return back();

    }
    public function AddOrder(User $user ,Food $food)
    {
  $food_user = new Food_user;

 $food_user->food_id =$food->id;

 $food_user->user_id=$user->id;

   $food_user->save();
   return back();
   }
   public function showReservation(User $user)
   {

   $food_users = DB::table('foods')
            ->leftJoin('food_users', 'foods.id', '=', 'food_users.food_id')
        ->where('food_users.user_id','=',$user->id)
            ->get();   
      //  echo  $food_users;
              return view('reservation',compact('food_users'));
    }
     public function deleteFromOrder(Food_user $food_user)
    {
    echo  $food_user->id;
    DB::table('food_users')->where('food_users.id', '=', $food_user->id)->delete();
      //$food_user->delete();
      return back();
   
  }

    
  
}
