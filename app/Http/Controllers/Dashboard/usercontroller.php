<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usercontroller extends Controller
{
  public function index()
  {
  $users=  User::all();
    return view('Dashboard.User.index',compact('users'));
  }
}
