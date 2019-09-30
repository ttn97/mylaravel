<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getDanhsach(){
        $user=User::all();
        return view("admin/user/danhsach",['user'=>$user]);
    }

    public function getThem(){
        
    }

    public function getSua(){
        
    }
}
