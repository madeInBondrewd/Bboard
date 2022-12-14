<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="main-t">
    @foreach($memos AS $memo)
    @if($memo['user_id']===$user['id']&&$memo['status']===1)
    <p class="mytext">{{ $memo['content'] }}</p>
    @elseif($memo['user_id']===$user['id']&&$memo['status']===3)
    <img class="myimg" src="{{ asset($memo['content']) }}">
    @elseif($memo['status']===1)
    <p>{{ $memo['content'] }}</p>
    @elseif($memo['status']===3)
    <img src="{{ asset($memo['content']) }}">
    @endif
    @endforeach
  </div>
</body>
</html>

<?php

  //echo $_POST["text"];

?>