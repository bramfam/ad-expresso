<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Profile ; 
class ProfilesController extends Controller
{
   function show_profile()
   {
   	return view('profiles.user');
   }
}
