<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Adriver;
use App\Progress;

class TopController extends Controller
{
  // ログインしていないと閲覧できません。
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(){
    $datas = Adriver::all();
    return view('top.index',[
      'datas'=>$datas,
    ]);
  }
}
