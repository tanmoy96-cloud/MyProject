<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function addUser(Request $req)
    {
        echo $req->userName;
        echo $req->userEmail;
    }
}
