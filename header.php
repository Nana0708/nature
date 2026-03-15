<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる</title>
    <meta name="description" content="自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />
    <meta name="format-detection" content="telephone=no" />

    <!-- favicon/web-clip-icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/img/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/src/img/apple-touch-icon.png" />

    <!-- ogp -->
    <meta property="og:site_name" content="自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる " />
    <meta property="og:url" content="サイトのURL（絶対パス） サイト公開後" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる " />
    <meta property="og:description" content="自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />
    <meta property="og:image" content="OGP画像のURL（絶対ぱす）推奨サイズは1200*630　サイト公開後" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="AppID">

    <!-- twitter専用の出力 -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@twitter_id" />
    <meta name="twitter:description" content="ページの説明" />
    <meta name="twitter:image:src" content="URL　シェアする時の画像　公開後" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- css -->
    <!-- <link rel="stylesheet" href="css/reset.css" /> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__container">
            <div class="header__logo-wrapper">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="自然の恵みのロゴ" class="header__logo">
                </a>
            </div>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__nav-link">トップ</a>
                        <span class="header__nav-deco">TOP</span>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url('/#about') );?>" class="header__nav-link">私たちについて</a>
                        <span class="header__nav-deco">ABOUT</span>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url('/#work') );?>" class="header__nav-link">活動紹介</a>
                        <span class="header__nav-deco">WORK</span>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url('/#faq') );?>" class="header__nav-link">よくあるご質問</a>
                        <span class="header__nav-deco">FAQ</span>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url('archive') ); ?>" class="header__nav-link">お知らせ</a>
                        <span class="header__nav-deco">NEWS</span>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url(home_url('/#access') );?>" class="header__nav-link">アクセス</a>
                        <span class="header__nav-deco">ACCESS</span>
                    </li>
                    <li class="header__nav-item header__contact-btn btn">
                        <a href="<?php echo esc_url(home_url('/contact') );?>" class="header__nav-link" class="header__btn-link">お問い合わせ</a>
                    </li>
                    <li class="header__nav-item header__info">
                        <p class="header__info-txt">問い合わせ電話</p>
                        <a href="TEL:123-4567-8910" class="header__info-tel">123-4567-8910</a>
                        <p class="header__info-txt">【受付時間】</p>
                        <p class="header__info-time">10:00 ~ 18:00（土日祝を除く）</p>
                    </li>
                </ul>
            </nav>

            <button class="header__hamburger">
                <span class="header__hamburger-bar"></span>
                <span class="header__hamburger-bar"></span>
                <span class="header__hamburger-txt">MENU</span>
            </button>
        </div>
    </header>
