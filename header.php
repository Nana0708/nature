<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__container">
            <h1 class="header__logo-wrapper">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="自然の恵みのロゴ" class="header__logo" loading="lazy">
                </a>
            </h1>
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
                        <a href="tel:123-4567-8910" class="header__info-tel">123-4567-8910</a>
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
