<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>room-Bboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="roomです">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

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

<h2>ROOM</h2>

<table class="ta1">

<tr>
<th></th>
<td>
<iframe width="600" height="400" src="http://127.0.0.1:8000/text" ></iframe>
</td>
</tr>

</table>

<form action="text.blade.php" method="POST">
<textarea class="text1" name=”text” rows="3" placeholder="ここのルームは匿名です！"></textarea>
<input type="submit">
</form>


</section>

</main>

<div id="menubar">

<!--メインメニュー-->
<nav>
<ul>
<li><a href="/bboard">HOME</a></li>
<li class="current"><a href="/room">ROOM</a></li>
<li><a href="/private">PRIVATE</a></li>
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
