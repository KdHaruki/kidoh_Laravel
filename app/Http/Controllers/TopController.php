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

  // プログレス登録完了画面
  public function complite(Request $request){
    if($request->isMethod('post')){
      $progress = new Progress;
      $progress->progress_name = $request->progressName;
      $progress->progress_type = $request->progressType;
      $progress->favorite = $request->progressFavorite;
      $progress->dislike = $request->progressDislike;
      $progress->inscription = $request->progressInscription;
      $progress->updated_at = 0;
      $progress->created_at = 0;
      $progress->save();
    }
    return view('top.complite',[
      'progressName'=>$request->progressName,
      'progressType'=>$request->progressType,
      'progressFavorite'=>$request->progressFavorite,
      'progressDislike'=>$request->progressDislike,
      'progressInscription'=>$request->progressInscription,
    ]);
  }
}
