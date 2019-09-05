<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Adriver;
use App\Progress;

class ProgressController extends Controller
{
  public function index(){
    $progress = Progress::select()
               ->orderBy('progress_type','asc','progress_id','asc')
               ->get();
    return view('progress.index', ['progress' => $progress]);
  }
}
