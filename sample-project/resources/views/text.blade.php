<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="main">
    @foreach($memos AS $memo)
    @if($memo['user_id']===$user['id'])
    <p class=mytext>{{ $memo['content'] }}</p>
    @else
    <p>{{ $memo['content'] }}</p>
    @endif
    @endforeach
  </div>
</body>
</html>

<?php

  //echo $_POST["text"];

?>