<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Adriver;
use App\Progress;

class ProgressInsertController extends Controller
{
  // ログインしていないと閲覧できません。
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(){

    return view('progressinsert.index');
  }

  // プログレス登録完了画面
  public function complite(Request $request){
    if($request->isMethod('post')){
      $progress = new Progress;

      // 同名プログレスを登録しないようチェック
      $progress_name = Progress::select('progress_name')
           ->where('progress_name', '=', $request->progressName)
           ->get();
      if(!empty($progress_name[0]["progress_name"])){
        return view('progressinsert.complite',[
          'progressName'=>'既に登録されています',
          'progressType'=>'',
          'progressFavorite'=>'',
          'progressDislike'=>'',
          'progressInscription'=>'',
        ]);
      }else{
        // プログレス一覧の最後のIDを取得して登録する際に＋１IDに保存
        $progress_last_id_string = Progress::select('progress_id')
             ->orderBy('progress_id', 'desc')
             ->take(1)
             ->get();
        $progress_last_id_int = (int)$progress_last_id_string[0]['progress_id'];
        $progress_last_id = $progress_last_id_int + 1;
        $progress->progress_id = $progress_last_id;
        $progress->progress_name = $request->progressName;
        $progress->progress_type = $request->progressType;
        $progress->favorite = $request->progressFavorite;
        $progress->dislike = $request->progressDislike;
        $progress->inscription = $request->progressInscription;
        $progress->updated_at = 0;
        $progress->created_at = 0;
        $progress->save();
      }
      return view('progressinsert.complite',[
        'progressName'=>$request->progressName,
        'progressType'=>$request->progressType,
        'progressFavorite'=>$request->progressFavorite,
        'progressDislike'=>$request->progressDislike,
        'progressInscription'=>$request->progressInscription,
      ]);
    }
  }
}
