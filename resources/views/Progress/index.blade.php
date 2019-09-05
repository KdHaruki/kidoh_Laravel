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

  <table border="1" style="margin-top:10px;margin-left:10px;">
    <tr><th>プログレス名</th><th>世界</th><th>好きなもの</th><th>嫌いなもの</th><th>座右の銘</th></tr>
    @foreach($progress as $progress_data)
    <tr>
      <td>{{ $progress_data->progress_name }}</td>
      <td>{{ $progress_data->progress_type }}</td>
      <td>{{ $progress_data->favorite }}</td>
      <td>{{ $progress_data->dislike }}</td>
      <td>{{ $progress_data->inscription }}</td>
    </tr>
    @endforeach
  </table>
  
<script>

</script>


</body>
</html>
