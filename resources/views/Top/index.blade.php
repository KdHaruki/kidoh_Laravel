<!doctype html>
<html lang="ja">
<head>
  <title>Index</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <td><a href="progress">プログレス一覧</a></td>
          <td><a href="progressinsert">プログレス登録</a></td>
        </div>
    </div>
  </header>
  <table>
    <tr>
      <td class="kakomi-tape3-td">
        <div class="kakomi-tape3"><span class="title-tape3">Ange Vierge</span>
          <div>テキスト</div>
          <div>テキスト</div>
          <div>テキスト</div>
          <div>テキスト</div>
        </div>
      </td>
      <td class="kakomi-tape3-td">
        <div class="kakomi-tape3"><span class="title-tape3">Information Technology</span>
          <div>テキスト</div>
          <div>テキスト</div>
          <div>テキスト</div>
          <div>テキスト</div>
        </div>
      </td>
    </tr>
    <tr>
      <td class="kakomi-tape3-td">
        <div class="kakomi-tape3"><span class="title-tape3">得点調整</span>
          <table border="0">
            <tr>
              <td align="right"><b>Sランク降格：</b></td>
              <td align="right">Sランク31位</td>
            </tr>
            <tr>
              <td align="right"><b>Aランク昇格：</b></td>
              <td align="right">Aランク20位</td>
            </tr>
            <tr>
              <td align="right"><b>Aランク降格：</b></td>
              <td align="right">Aランク71位</td>
            </tr>
            <tr>
              <td align="right"><b>Bランク昇格：</b></td>
              <td align="right">Bランク30位</td>
            </tr>

            <tr>
              <td align="right"><b>敵軍：</b></td>
              <td><input class="enemyCirclePoint" type="text" placeholder="1234567890" size="10">pt</td>
            </tr>
            <tr>
              <td align="right"><b>自軍：</b></td>
              <td><input class="allyCirclePoint" type="text" placeholder="1234567890" size="10">pt</td>
            </tr>
            <tr>
              <td></td>
              <td><a href="#" class="circlePointDifference">計算</a></td>
            </tr>
            <tr>
              <td align="right"><b>勝利時：</b></td>
              <td><input class="differenceWinPoint" type="text" name="name" size="10" maxlength="20" placeholder="結果" disabled="disabled">pt</td>
            </tr>
            <tr>
              <td align="right"><b>敗北時：</b></td>
              <td><input class="differenceLosePoint" type="text" name="name" size="10" maxlength="20" placeholder="結果" disabled="disabled">pt</td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>
<script>

/*****************************************************************
サークルポイント差分の計算ボタンが押されたら、その結果を表示
*****************************************************************/
$(function(){
  $('.circlePointDifference').click(function () {
    var enemyCirclePoint = $(".enemyCirclePoint").val();
    var allyCirclePoint = $(".allyCirclePoint").val();
    var differencePoint = enemyCirclePoint - allyCirclePoint;
    if(differencePoint < 0){
      alert('入力値が正しくありません：' + differencePoint);
    }else{
      var differenceWinPoint = Math.floor(differencePoint / 1.5);
      $('.differenceWinPoint').val(differenceWinPoint);
      $('.differenceLosePoint').val(differencePoint);
    }
  });
});
</script>


</body>
</html>
