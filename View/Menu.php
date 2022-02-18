<?php
/**
 * メニュー画面のView
 *
 * @copyright (c)Kawakami_Taiga
 * @license 
 * @author 川上虎己 <kawakami.t@daikodenshi.co.jp>
 * @link 
 */

?>

<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/Menu.css">
    <link rel="icon" href="../public/img/favicon.ico">
    <title>Menu</title>
</head>

<body>

    <!-- ヘッダー呼び出し -->
    <?php include('../Component/Header.php'); ?>

    <main>
        <div class="container">
          <h1>WORKS</h1>

        <section class="animate">
            <img src="../public/img/work1.png" alt="勇者ゲームの画像">
            <h2>勇者ゲーム</h2>
            <p>すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。</p>
        </section>

        <section class="animate">
        <img src="../public/img/work2.png" alt="宝探しゲームの画像">
            <h2>宝探しゲーム</h2>
            <p>すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。</p>
        </section>
      
        <section class="animate">
        <img src="../public/img/work3.png" alt="神経衰弱の画像">
            <h2>神経衰弱</h2>
            <p>すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。すごいゲームです。</p>
        </section>

        </div>
    </main>


    <!-- フッター呼び出し -->
    <?php include('../Component/Footer.php'); ?>
    <script src="../public/JS/Menu.js"></script>
</body>