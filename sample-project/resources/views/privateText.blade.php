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
  <div class="main-p">
    @foreach($memos AS $memo)
    @if($memo['user_id']===$user['id']&&$memo['status']===2)
    <p class="mytext">{{ $memo['content'] }}　\{{ $memo['name'] }}</p>
    @elseif($memo['user_id']===$user['id']&&$memo['status']===4)
    <img class="myimg" src="{{ asset($memo['content']) }}">
    @elseif($memo['status']===2)
    <p>{{ $memo['name'] }}\　{{ $memo['content'] }}</p>
    @elseif($memo['status']===4)
    <img src="{{ asset($memo['content']) }}">
    @endif
    @endforeach
  </div>
</body>
</html>

<?php

  //echo $_POST["text"];

?>