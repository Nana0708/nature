<footer class="footer">
      <div class="footer__container">
        <div class="footer__layout-wrapper">
          <div class="footer__logo-wrapper">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="自然の恵みのロゴ" class="footer__logo">
            </a>
          </div>
          <ul class="footer__info-list">
            <li class="footer__info-item"><address class="footer__info-address">〒123-4567<br> 千葉県〇〇市××町1丁目23-45</address></li>
            <li class="footer__info-item">
              <a href="tel:123-4567-8910" class="footer__info-tel"> TEL:123-4567-8910</a><br>
              <a href="" class="contact__info-fax"> FAX:12-345-6789</a>
            </li>
          </ul>
          <nav class="footer__nav">
            <ul class="footer__nav-list">
                <li class="footer__nav-item">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer__nav-link">ホーム</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#about') );?>" class="footer__nav-link">私たちについて</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#work') );?>" class="footer__nav-link">活動紹介</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#faq') );?>" class="footer__nav-link">よくあるご質問</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#news') );?>" class="footer__nav-link">お知らせ</a>
                </li>
                <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#access') );?>" class="footer__nav-link">アクセス</a>
                </li>
            </ul>
          </nav>
   
        

        </div>
        <div class="footer__sns">
          <a href="" class="footer__sns-link">
            <div class="footer__sns-icon"><img src="<?php echo get_template_directory_uri(); ?>/src/img/x-icon.svg" alt="Xのアイコン" class="footer__sns-icon-img"></div>
          </a>
          <a href="" class="footer__sns-link">
            <div class="footer__sns-icon"><img src="<?php echo get_template_directory_uri(); ?>/src/img/insta-icon.svg" alt="Instagramのアイコン" class="footer__sns-icon-img"></div>
          </a>
          <a href="" class="footer__sns-link">
            <div class="footer__sns-icon"><img src="<?php echo get_template_directory_uri(); ?>/src/img/youtube-icon.svg" alt="YouTubeのアイコン" class="footer__sns-icon-img"></div>
          </a>
        </div>
        
        <p class="footer__copyright">
          <small class="footer__copyright-txt">&copy; shizen-no-megumi-nouen Inc .2023</small>
        </p>
      </div>
    </footer> -

<!-- j Queryの読み込み -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- 自分のjsファイル -->
 <script src="<?php echo get_template_directory_uri(); ?>/src/js/main.js"></script>
 <?php wp_footer(); ?>
</body>
</html>