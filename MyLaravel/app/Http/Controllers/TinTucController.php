<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
class TinTucController extends Controller
{
    //
    public function getDanhsach(){
        $tintuc=TinTuc::all();
        return view('admin/tintuc/danhsach',['tintuc'=>$tintuc]);
    }

    public function getThem(){
        
    }

    public function getSua(){
        
    }
}
