<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>room-Bboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="privateです">
<meta http-equiv="refresh" content="30">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<!-- autoScroll() 呼び出し-->
<body onload = autoScroll()>

<div id="container">

<header>

<h1 id="logo"><img src="{{ asset('css/images/logo.png') }}" alt="SAMPLE COMPANY"></h1>

<div id="menubar_hdr">
<span></span><span></span><span></span>
</div>
<!--/#menubar_hdr-->

<div id="header-icon">
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
<a href="#"><i class="fab fa-facebook-f"></i></a>
</div>
<!--/#header-icon-->

</header>

<main>

<section>

<h2>private</h2>

<table class="ta1">


<script type="text/javascript">
//フォームで自動にスクロールする
function autoScroll(){

//iframeを取得
var element = document.getElementById('list');

//y座標を99999に下げる
element.contentWindow.scrollTo(0, 99999);
}
</script>

<tr>
<td >
<iframe id = list width="600" height="400" src="http://127.0.0.1:8000/privateText"></iframe>
</td>
</tr>

</table>

<form action="/privateStore" method="POST">
    @csrf
    <input type='hidden'  name='user_id' value="{{ $user['id'] }}">
    <input type='hidden'  name='name' value="{{ $user['name'] }}">
    <div class="form-group">
    <textarea class="content" name="content" rows="3" placeholder="{{ $user['name'] }} としてメッセージを送信"></textarea>
<input type="submit">

    </div>

</form>

<form method="POST" action="/upload" enctype="multipart/form-data">
  @csrf
  <input type='hidden'  name='user_id' value="{{ $user['id'] }}">
  <input type="file" name="image">
  <button>アップロード</button>
</form>


</section>

</main>

<div id="menubar">

<!--メインメニュー-->
<nav>
<ul>
<li><a href="/bboard">HOME</a></li>
<li><a href="/room">ROOM</a></li>
<li class="current"><a href="/private">PRIVATE</a></li>
<li><a href="/other">OTHER</a></li>
</ul>
</nav>

<p><img src="{{ asset('css/images/oya.png') }}" alt=""><br>
おやおやおやおや</br>

</div>
<!--/#menubar-->

<footer>
<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</footer>

</div>
<!--/#container-->

<!--jQueryの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--このテンプレート専用のスクリプト-->
<script src="js/main.js"></script>

<!--ページの上部へ戻るボタン-->
 <div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

</body>
</html>
