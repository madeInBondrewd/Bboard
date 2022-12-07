<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Bboard-メイドインボンボルド</title>
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
<a href="https://twitter.com/Kindai_csg"><i class="fab fa-twitter"></i></a>
<a href="https://www.instagram.com/kindai_csg/"><i class="fab fa-instagram"></i></a>
<a href="https://www.youtube.com/@user-zy8pd6hg4y"><i class="fab fa-youtube"></i></a>
<a href="#"><i class="fab fa-facebook-f"></i></a>
</div>
<!--/#header-icon-->

</header>

<main>

<!--スライドショー-->
<aside class="mainimg">
<img src="{{ asset('css/images/1.jpg') }}" alt="" class="slide1">
<img src="{{ asset('css/images/2.jpg') }}" alt="" class="slide2">
<img src="{{ asset('css/images/3.jpg') }}" alt="" class="slide3">
</aside>

<section>

<h2>Bboard(仮)とは</h2>

<p>
    これはアビスの攻略を目指した人間だったものの物語。</br>
    
</p>

</section>


<section>

<h2>News</h2>

<dl id="new">
<dt>2022/08/25<span>その他</span></dt>
<dd>tp_biz58配布開始。</dd>
<dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00</dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
<dt>20XX/00/00<span>その他</span></dt>
<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
</dl>

</section>

<section>

<h2>テンプレートのご利用前に必ずお読み下さい</h2>

<h3>利用規約のご案内</h3>
<p>このテンプレートは、<a href="https://template-party.com/">Template Party</a>にて無料配布している『企業・ビジネスサイト向け 無料ホームページテンプレート tp_biz58』です。必ずダウンロード先のサイトの<a href="https://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
<p><strong class="color-check">HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
わざと見えなく加工する事も禁止です。</p>
<p><strong class="color-check">下部の著作を外したい場合は</strong><br>
<a href="https://template-party.com/">Template-Party</a>の<a href="https://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

<h3>当テンプレートの詳しい使い方は</h3>
<p><a href="company.html">こちらをご覧下さい。</a></p>

</section>

</main>

<div id="menubar">

<!--メインメニュー-->
<nav>
<ul>
<li class="current"><a href="index.html">HOME</a></li>
<li><a href="company.html">ROOM</a></li>
<li><a href="works.html">PRIVATE</a></li>
<li><a href="contact.html">OTHER</a></li>
</ul>
</nav>

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
<script src="{{ asset('js/main.js') }}"></script>

<!--ページの上部へ戻るボタン-->
<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

</body>
</html>
