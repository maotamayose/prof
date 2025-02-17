<?php
// プロフィールページ (Airbnbスタイル: 動画+テキストブロック)
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- ヒーローセクション -->
<section class="hero">
    <video class="hero-video" autoplay loop muted playsinline>
        <source src="video/hero-video.mp4" type="video/mp4">
    </video>
    <div class="hero-text">
        <h1>ようこそ！</h1>
        <p>玉代勢のプロフィールページへ</p>
    </div>
</section>

<!-- 動画＋テキストのブロック（趣味） -->
<section class="content-block">
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="video/video1.mp4" type="video/mp4">
        </video>
    </div>
    <div class="text-container">
        <h2><span>趣味</span></h2>
        <ul>
            <li>スケートボード</li>
            <li>ゲーム（Valorant）</li>
            <li>漫画（ワンピース, 亜人, 左利きのエレン）</li>
            <li>読書（湊かなえ, お金の向こうに人がいる）</li>
            <li>音楽鑑賞（PEOPLE1 PUNPEE）</li>
        </ul>
    </div>
</section>

<!-- 動画＋テキストのブロック（性格） -->
<section class="content-block">
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="video/video2.mp4" type="video/mp4">
        </video>
    </div>
    <div class="text-container">
        <h2><span>性格</span></h2>
        <p class = "personality-1">出来るまで、<br>試行錯誤を重ねて、<br>前向きに取り組むこと。<br>僕のモットーです。</p>
        <p class = "personality-2">初メイクはへたくそでしたが、、<br>努力してトップの動画のように！！</p>
    </div>
</section>
</body>
</html>
