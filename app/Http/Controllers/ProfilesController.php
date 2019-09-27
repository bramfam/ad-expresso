<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
   function show_profile()
   {
   	return view('profiles.user');
   }
}
