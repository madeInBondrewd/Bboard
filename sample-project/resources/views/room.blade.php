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

<h2>会社概要</h2>

<table class="ta1">
<caption>大見出しが必要ならここを使います</caption>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>所在地</th>
<td>Google Mapで地図を埋め込みたい場合は<a href="https://template-party.com/file/pickup_googlemap.html">マニュアル</a>をご覧下さい。<br>
<img src="images/dummy_map_main.jpg" alt="">
</td>
</tr>
</table>

</section>

<section class="deco">

<h2>2021年10月「以前」にテンプレートを利用した事のあるお客様へ</h2>
<p>2021年11月以降からの配布テンプレートについて、かなり仕様が変更されましたので、メインとなる内容のみピックアップさせて頂きます。<br>
今後しばらく新作テンプレートの手直しが入るかもしれません。</p>
<ul>
<li><span class="color-check">モバイルファースト</span>のcssに変更しました。小さな端末からの設定になるのでご注意下さい。</li>
<li>floatでのレイアウトから、主にflexボックスを使ったレイアウトへ変更されました。</li>
<li>2022年6月でMicrosoftのIEサポートが終了したのに伴い、弊社テンプレートも<span class="color-check">IE対応(バグ対応など)を終了</span>しました。</li>
</ul>

</section>

<section>

<h2>当テンプレートの使い方</h2>

<h3>初心者向けマニュアル公開中</h3>
<p>画像加工やテンプレートの編集方法、無料サーバーを使ってサイトを公開するなど動画をまじえてわかりやすく解説しています。<br>
<a href="https://template-party.com/file/" target="_blank">初心者向けマニュアルはこちら。</a></p>

<h3>titleタグ、copyright、metaタグ、他の設定</h3>
<p><strong class="color-theme">titleタグの設定はとても重要です。念入りにワードを選んで適切に入力しましょう。</strong><br>
まず、htmlソースが見れる状態にして、<br>
<span class="look">&lt;title&gt;企業・ビジネスサイト向け 無料ホームページテンプレート tp_biz58&lt;/title&gt;</span><br>
を編集しましょう。<br>
あなたのホームページ名が「SAMPLE COMPANY」だとすれば、<br>
<span class="look">&lt;title&gt;SAMPLE COMPANY&lt;/title&gt;</span><br>
とすればＯＫです。SEO対策もするなら冒頭に重要なワードを入れておきましょう。</p>
<p><strong class="color-theme">copyrightを変更しましょう。</strong><br>
続いてhtmlの下の方にある、<br>
<span class="look">Copyright&copy; SAMPLE COMPANY All Rights Reserved.</span><br>
の部分もあなたのサイト名に変更します。</p>
<p><strong class="color-theme">metaタグを変更しましょう。</strong><br>
htmlソースが見える状態にしてmetaタグを変更しましょう。</p>
<p>ソースの上の方に、<br>
<span class="look">content=&quot;ここにサイト説明を入れます&quot;</span><br>
という部分がありますので、テキストをサイトの説明文に入れ替えます。検索結果の文面に使われる場合もありますので、見た人が来訪したくなるような説明文を簡潔に書きましょう。</p>
<p><strong class="color-theme">h1ロゴのaltタグも変更しましょう。</strong><br>
html側に、<br>
<span class="look">alt=&quot;SAMPLE COMPANY&quot;</span><br>
となっている箇所があるので、この部分もあなたのサイト名に変更しましょう。</p>

<h3>アイコン画像について（Font Awesomeの解説）</h3>
<p>imagesフォルダに入っていない画像（アイコン）は全てFont Awesomeの素材です。<br>
<a href="https://fontawesome.com/" target="_blank">Font Awesome 公式サイト</a><br>
<a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2">Font Awesome アイコン一覧</a></p>
<p>iタグを使ってhtmlに直接アイコンを読み込む場合と、cssの擬似要素を使って読み込む場合があります。<br>
それぞれ他のアイコンに置き換えたい場合は、当サイトの<a href="https://template-party.com/tips/tips20211126_font_awesome.html">マニュアル</a>をお読み下さい。</p>
<p>Font Awesomeを使う為に必要なタグ、ファイル類。<br>
cssフォルダのstyle.css冒頭で読み込んでいる「Font Awesomeの読み込み」のブロック。</p>
<p>何年も経過した場合、動作に問題が出てくる可能性があります。<br>
テンプレートを編集していないのに突然動きがおかしくなった場合は、style.cssの冒頭でCDNから読み込んでいるFont Awesome関連のファイルのバージョンを変更して動作するか確認してみて下さい。</p>

<h3>メインメニューについて</h3>
<p>900px以上で左側への固定表示に、900px未満で開閉ブロックになります。</p>

<h3>現在ページ表示中のメニューについて</h3>
<p>現在表示中のページのメニューには色がつきますが、その説明です。</p>
<p>通常は、<br>
<span class="look">&lt;li&gt;&lt;a href=&quot;&quot;&gt;メニュー名&lt;/a&gt;&lt;/li&gt;</span><br>
のようになっていますがこれを、<br>
<span class="look">&lt;li <span class="color-check">class=&quot;current&quot;</span>&gt;&lt;a href=&quot;&quot;&gt;メニュー名&lt;/a&gt;&lt;/li&gt;</span><br>
とする事で色がつきます。<br>
自動で色がつくわけではないのでご注意下さい。</p>

<h3>トップページのスライドショー</h3>
<p>スライドショー写真は、弊社の<a href="https://photo-chips.com/?act=list&kind=1&info1=abstract&html=list_abstract.html" target="_blank">フリー写真サイト</a>で無料ダウンロードできます。</p>

<p><strong>画像を入れ替えたい場合</strong><br>
「1.jpg」「2.jpg」「3.jpg」の3枚の画像を用意してimagesフォルダに上書きして下さい。大きさはある程度大きければバラバラでも構いませんが、必ず「縦横比」を合わせて下さい。<br>
また、拡張子が「jpeg」や「JPG」と少し違った場合にうまく表示できない可能性があるので梱包画像の拡張子と合わせて下さい。拡張子を変更したい場合はhtml側を直接変更しても構いません。<br>
画像は容量が軽くなるようにできるだけ圧縮して下さい。容量が大きいと初動がガタつきます。</p>
<p><strong>ループを一回で終了したい場合</strong><br>
cssフォルダのslide.cssの、<br>
@keyframes slide3 {<br>
の、	<br>
<span class="look">90% {opacity: 1;}<br>
100% {opacity: 0;}</span><br>
を、以下に変更。<br>
<span class="look">90% {opacity: 1;}<br>
100% {opacity: <span class="color-check">1</span>;}</span></p>
<p>続いて、<br>
  .slide1,.slide2,.slide3 {<br>
の、<br>
<span class="look">animation-iteration-count:infinite;</span><br>
を以下に変更。<br>
<span class="look">animation-iteration-count:<span class="color-check">1</span>;</span></p>
<p><strong>固定画像にしたい場合</strong><br>
cssフォルダのslide.cssを開き、冒頭の<br>
「/*スライドショーのキーフレーム設定」<br>
のブロックを削除。<br>
次に、index.htmlから使う画像だけを残してあとは削除。<br>
残した画像タグからclass指定（class=&quot;slide1&quot;などの）を外して下さい。<br>
画像を囲っているasideタグなどはレイアウト設定が入っているので削除しないよう注意して下さい。</p>
<p><strong>速度や枚数などの調整</strong><br>
cssフォルダのslide.cssで行って下さい。解説も入っています。<br>
<a href="https://template-party.com/tips/slide_css.html">スライドショーに関する詳しい使い方はこちら。</a></p>

<h3>トップページの「News」ブロックのアイコンについて</h3>
<p>「その他」「サービス」など、テキスト部分はhtml側で直接入力されていますので必要に応じて編集して下さい。<br>
アイコン用の文字数が増えすぎるとレイアウトが崩れます。ご注意下さい。</p>
<p>背景色は、cssフォルダのstyle.cssの、<br>
<span class="look">#new dt span</span><br>
や、<br>
<span class="look">#new dt span.icon-bg1</span><br>
のbackgroundでそれぞれ変更できます。</p>
<p>新しいアイコンを追加したい場合、上記の「#new dt span.icon-bg1」ブロックをコピペし、<span class="color-check">.icon-bg1</span>部分を<span class="color-check">.icon-bg2</span>などに変更し、backgroundに好きな色を設定します。<br>
後はhtml側で、<br>
<span class="look">&lt;span class=&quot;<span class="color-check">icon-bg2</span>&quot;&gt;〜〜〜&lt;/span&gt;</span><br>
などとすればOKです。</p>

<h3>フォントサイズ（px,rem,em）について</h3>
<p>cssフォルダのstyle.cssで、基準となるフォントサイズを２箇所、pxで記載しています。<br>
全体的にフォントサイズを大きくまたは小さくしたいなら、この基準サイズだけを変更すればOK。</p>
<p>１つ目はstyle.cssの冒頭に記載されている以下で、小さな端末向けです。<br>
<span class="look">font-size: 13px;</span><br>
２つ目は下の方にある、画面幅900px以上の端末向けで、以下。<br>
<span class="look">font-size: 14px;</span></p>
<p>「rem」の単位がついたフォントは、上の２箇所あるpxのサイズに対して「相対的」に出しているサイズになります。<br>
例えば、900px未満の画面幅の時の基準サイズは「13px」なので、他の要素などで26pxで表示させたい場合は、<br>
26px ÷ 13px = 2rem<br>
となります。（cssの指定は、font-size: 2rem;　となる。）</p>
<p>10pxにしたい場合も同様です。この場合、<br>
10px ÷ 13 = 0.769...<br>
と小数点が続いてしまいますが、厳密に出す必要はないので、適当に切って、<br>
font-size: 0.75rem;<br>
あたりにしておけばOKです。</p>
<p>または計算などせず、「見た目」でremの数値を決めてしまってもいいでしょう。<br>
実際このテンプレートのremは、厳密に割り出したわけじゃなく、雰囲気(何となく適当)で指定しています。</p>
<p>ちなみに、emも数カ所使っていますが、これは親の文字サイズを基準とした文字サイズ指定になります。</p>

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
