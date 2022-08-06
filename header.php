<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/sass/style.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


  <?php
    wp_enqueue_scripts();
    wp_head()
  ;?>
</head>
<body <?php body_class();?>>
  <?php wp_body_open();?>
<!-- // ------------------------------------------------
// header
// ------------------------------------------------   -->
  <header class="header">
    <div class="wrapper-w1290 wrapper-w1290__header">
      <div class="header__logo">
        <a href="<?php echo home_url();?>">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/index/logo.png" alt="ロジエージェント株式会社">
        </a>
      </div>
      <div class="header__inner">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item"><a href="#">お仕事情報</a></li>
            <li class="header__item"><a href="#">事業内容</a></li>
            <li class="header__item"><a href="#">採用情報</a></li>
            <li class="header__item"><a href="#">会社案内</a></li>
            <li class="header__item"><a href="#">お知らせ</a></li>
          </ul>
        </nav>
        <div class="header-contact__button"><a href="#">お問い合わせ<span><img src="<?php echo get_template_directory_uri();?>/assets/images/index/arrow-right.png" alt=""></span></a></div>
      </div>
    </div>
    <nav class="header__nav--sp">
      <ul class="header__list">
        <li class="header__item--sp"><a href="#">お仕事情報</a></li>
        <li class="header__item--sp"><a href="#">事業内容</a></li>
        <li class="header__item--sp"><a href="#">採用情報</a></li>
        <li class="header__item--sp"><a href="#">会社案内</a></li>
        <li class="header__item--sp"><a href="#">お知らせ</a></li>
      </ul>
    </nav>
  </header>