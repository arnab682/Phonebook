<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $serial = 0 ;
        $profiles = User::all();
        //return 'hi';
        return view( 'welcome' , compact ( 'profiles' , 'serial' ));
    }
}
