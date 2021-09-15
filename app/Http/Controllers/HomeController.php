<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB ;
use App\User ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts\app');
    }
    public function profile()
    {
          return view('profile');
    }

     public function control()
    {

        $users = DB::table('users')->get();
   return view('control' , compact('users'));
          
    }

    public function updateRole(Request $request , User $user)
    {
                   $user->update($request->all());
                   
                   return redirect('control');
    }
}
