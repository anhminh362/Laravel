<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $user=User::all();
        return $user;

    }

}

