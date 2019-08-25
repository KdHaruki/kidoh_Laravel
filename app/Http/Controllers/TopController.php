<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(){
      $data = [
        'msg'=>'this is sample',
      ];
      return view('top.index',$data);
    }
}
