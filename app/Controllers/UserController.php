<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
  public function index(){
    echo "index";
  }
  public function edit(){

    $user = new User();

    print_r($user->getAll());

    return view("user/edit");

  }
}

