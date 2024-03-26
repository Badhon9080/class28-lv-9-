<?php

namespace App\Http\Controllers\Bacend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   function dashboard(){
      return view('bend.dashboard');
   }
}
