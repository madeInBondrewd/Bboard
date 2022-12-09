<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>private-Bboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
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

<h2>Private一覧</h2>

<p>検索機能も欲しいよね</p>

<div class="list-container">

<div class="list">
<figure><img src="{{ asset('css/images/sample1.jpg') }}" alt=""></figure>
<h4>おや</h4>
<p>おやおやおや</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>ナナチ</h4>
<p>ナナチは今日もかわいいですね</p>
</div>

<div class="list">
<figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
<h4><a href="#">Sample Title</a></h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>

<div class="list">
<figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
<h4><a href="#">Sample Title</a></h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>

<div class="list">
<figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
<h4><a href="#">Sample Title</a></h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>

<div class="list">
<figure><a href="#"><img src="images/sample1.jpg" alt=""></a></figure>
<h4><a href="#">Sample Title</a></h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>

</div>
<!--/.list-container-->

<h3>上のボックスを使う場合は</h3>
<p>ボックス全体を、<br>
<span class="look">&lt;div class=&quot;list-container&quot;&gt;</span><br>
<span class="look">&lt;div&gt;</span><br>
で囲んで下さい。このスタイルがないとレイアウトが崩れます。</p>

<h3>画面幅1200px以上で４列に、それ以下で２列レイアウトになります</h3>
<p>編集したい場合は、cssフォルダのstyle.css内の.listをチェックして下さい。</p>

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
