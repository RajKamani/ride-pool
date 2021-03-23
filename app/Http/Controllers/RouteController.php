<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RouteController extends Controller
{
  function display_add_form(User $user)
  {
      $cars=$user->vehicles()->get();

      return view('Driver.add-route',compact('cars'));
  }
}
