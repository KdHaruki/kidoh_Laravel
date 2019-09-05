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
        </div>
    </div>
  </header>
  <table>
    <tr>
      <td class="kakomi-tape3-td">
        <div class="kakomi-tape3"><span class="title-tape3">プログレス新規登録</span>
          <form id="fm1" action="/progressinsert" method="post">
            @csrf
            <table border="0">
              <tr>
                <td align="right"><b>名前：</b></td>
                <td align="right"><input type="text" name="progressName" value=""></td>
              </tr>
              <tr>
                <td align="right"><b>世界：</b></td>
                <td align="right"><input type="text" name="progressType" value=""></td>
              </tr>
              <tr>
                <td align="right"><b>好き：</b></td>
                <td align="right"><input type="text" name="progressFavorite" value=""></td>
              </tr>
              <tr>
                <td align="right"><b>嫌い：</b></td>
                <td align="right"><input type="text" name="progressDislike" value=""></td>
              </tr>
              <tr>
                <td align="right"><b>座右：</b></td>
                <td align="right"><input type="text" name="progressInscription" value=""></td>
              </tr>
              <tr>
            </table><input type="submit" class="require">
          </form>
        </div>
      </td>
    </tr>
  </table>
<script>
$(function(){
  $('#fm1').submit(function(e){
    var pN = $('input[name="progressName"]').val();
    var pT = $('input[name="progressType"]').val();
    var pF = $('input[name="progressFavorite"]').val();
    var pD = $('input[name="progressDislike"]').val();
    var pI = $('input[name="progressInscription"]').val();
    if((pN == "") || (pT == "") || (pF == "") || (pD == "") || (pI == "")){
      alert("未入力の項目があります");
      return false;
    }
  });
});
</script>


</body>
</html>
