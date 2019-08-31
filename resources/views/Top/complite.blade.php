<!doctype html>
<html lang="ja">
<head>
  <title>Index</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <table>
    <tr>
      <td class="kakomi-tape3-td">
        <div class="kakomi-tape3"><span class="title-tape3">登録完了</span>
          <table border="0">
            <tr>
              <td align="right"><b>プログレス名：</b></td>
              <td align="right">{{$progressName}}</td>
            </tr>
            <tr>
              <td align="right"><b>世界：</b></td>
              <td align="right">{{$progressType}}</td>
            </tr>
            <tr>
              <td align="right"><b>好きなもの：</b></td>
              <td align="right">{{$progressFavorite}}</td>
            </tr>
            <tr>
              <td align="right"><b>嫌いなもの：</b></td>
              <td align="right">{{$progressDislike}}</td>
            </tr>
            <tr>
              <td align="right"><b>座右の銘：</b></td>
              <td align="right">{{$progressInscription}}</td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>
<meta http-equiv="refresh" content=" 3; url=./top">
</body>
</html>
