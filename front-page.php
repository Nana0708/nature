<?php get_header(); ?>
<main class="main">
<section class="fv">
<div class="fv__main-box">
<div class="fv__img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-2.svg" alt="自然の恵み農園" class="fv__img">
</div>
<h1 class="fv__txt">自然の恵みを感じ、<br class="sp-db"> 豊かな未来を。</h1>
</div>
<div class="fv__news-card js-fade">
    <?php
    $news_posts = get_posts(
        array(
            'post_type'      => 'post',
            'posts_per_page' => 1,
        )
    );
    ?>
    <?php if ($news_posts) : ?>
        <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>" class="fv__news-card-txts">
                <p class="fv__news-card-label">News</p>
                <div class="fv__news-card-date"><?php the_time('Y.m.d'); ?></div>
                <div class="fv__news-card-ttl"><?php the_title(); ?></div>
            </a>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>


<div class="fv__scroll-box scrolldown">
<p class="fv__scroll-txt">SCROLL</p>
<div class="fv__scroll-arrow"></div>
</div>
</section>

<section class="about" id="about">
<div class="about__container section__inner">
<div class="about__logo-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="自然の恵み農園のロゴ" class="about__logo-img">
</div>
<p class="about__txt">自然の恵み農園は、<br> 自然の恵みと動物の尊さが調和する<br class="sp-db">特別な場所です。 <br>新鮮で美味しい農産物を栽培し、<br class="sp-db">心温まる動物たちと触れ合える場所<br class="sp-db">でもあります。</p>
<p class="about__txt">自然の恵みを受け、<br class="sp-db">動物たちとの特別なひとときを<br class="sp-db">楽しんでいただける場所として、<br>私たちは誇りを持って活動をしています。<br> 一緒に自然と動物の美しさを共有しましょう。</p>
<div class="about__images">
<figure class="about__figure about__figure--top-left js-fade1">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/about-image01.png" alt="羊" class="about__figure-img">
</figure>
<figure class="about__figure about__figure--top-right js-fade2">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/about-image02.png" alt="トマト" class="about__figure-img">
</figure>
<figure class="about__figure about__figure--bottom-left js-fade3">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/about-image03.png" alt="人" class="about__figure-img">
</figure>
<figure class="about__figure about__figure--bottom-right js-fade4">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/about-image04.png" alt="牛" class="about__figure-img">
</figure>
</div>
</div>
</section>

<section class="work" id="work">
<div class="work__container">
<h2 class="section__ttl">活動紹介</h2>

<div class="work__tabs">
<button class="work__tab active">農園</button>
<button class="work__tab">牧場</button>
<button class="work__tab">オンライン販売</button>
</div>

<div class="work__panels">

<div class="work__panel">
<p class="work__description">
私たちは、「持続可能な農業」を掲げて、自然の恵みに感謝しながら、農作物を育てています。<br>
無農薬で、体にも環境にも優しく、季節ごとに異なる品種を育て、提供しています。<br>
ぜひ一度、農園にお越し頂き、自分の手で収穫した新鮮な野菜、果物をお召し上がりください。
</p>
<div class="work__slider">
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-nouen01.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-nouen02.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-nouen03.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-nouen04.png" class="work__slider-img">
</div>
</div>
</div>
</div>

<div class="work__panel active">
<p class="work__description">
私たちの牧場は、自然と動物との共存を尊重し、持続可能な農業の原則に基づいて運営されています。<br>
広々とした環境で、動物たちとのふれ合いを通じて、自然の恵みと動物の尊さを感じ、<br>
心温まるひとときを過ごしていただけます。
</p>
<div class="work__slider">
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-bokujo01.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-bokujo02.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-bokujo03.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-bokujo04.png" class="work__slider-img">
</div>
</div>
</div>
</div>

<div class="work__panel">
<p class="work__description">
自然の恵み農園から直接お届けする、新鮮で美味しい農産物と<br>
手作りのジャムやバターなどの加工品を提供しています。<br>
自然の恩恵をご自宅でお楽しみいただけます。
</p>
<div class="work__slider">
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-ec01.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-ec02.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-ec03.png" class="work__slider-img">
</div>
</div>
<div class="work__slider-item">
<div class="work__slider-img-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/src/img/work-ec04.png" class="work__slider-img">
</div>
</div>
</div>
</div>

</div>
</div>
</section>

<section class="faq" id="faq">
    <div class="faq__container section__inner">
        <div class="section__ttl">よくあるご質問</div>

        <div class="faq__content">
            <dl class="faq__list">
                <div class="faq__item">
                    <dt class="faq__question">
                        <button class="faq__toggle" aria-expanded="true">
                            <span class="faq__q-text">農園の野菜や果物は有機栽培ですか？</span>
                            <span class="faq__toggle-icon" aria-hidden="true"></span>
                        </button>
                    </dt>
                    <dd class="faq__answer">
                        <div class="faq__a-content">
                            <p class="faq__a-text">
                                はい、私たちの農園では有機栽培の原則に従って野菜と果物を栽培しています。 <br>化学肥料や農薬を極力使用せず、土壌と作物の健康を第一に考えております。
                            </p>
                        </div>
                    </dd>
                </div>

                <!-- 2つ目 -->
                <div class="faq__item">
                    <dt class="faq__question">
                        <button class="faq__toggle" aria-expanded="false">
                            <span class="faq__q-text">農園での見学や体験ツアーは行っていますか？</span>
                            <span class="faq__toggle-icon" aria-hidden="true"></span>
                        </button>
                    </dt>
                    <dd class="faq__answer">
                        <div class="faq__a-content">
                            <p class="faq__a-text">
                                はい、農園での見学や体験ツアーを随時開催しています。<br>
                                農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。
                            </p>
                        </div>
                    </dd>
                </div>

                <!-- 3つめ -->
                <div class="faq__item">
                    <dt class="faq__question">
                        <button class="faq__toggle" aria-expanded="false">
                            <span class="faq__q-text">オンラインで注文した農産物はどのように配送されますか？</span>
                            <span class="faq__toggle-icon" aria-hidden="true"></span>
                        </button>
                    </dt>
                    <dd class="faq__answer">
                        <div class="faq__a-content">
                            <p class="faq__a-text">
                                オンラインで注文いただいた農産物は、専用の梱包で新鮮さを保ったまま、指定された配送先にお届けします。
                            </p>
                        </div>
                    </dd>
                </div>

                <!-- ４つめ -->
                <div class="faq__item">
                    <dt class="faq__question">
                        <button class="faq__toggle" aria-expanded="false">
                            <span class="faq__q-text">農園で提供される季節ごとの野菜や果物の品種は何ですか？</span>
                            <span class="faq__toggle-icon" aria-hidden="true"></span>
                        </button>
                    </dt>
                    <dd class="faq__answer">
                        <div class="faq__a-content">
                            <p class="faq__a-text">
                                春にはイチゴ、夏にはトマトや茄子、秋にはカボチャやリンゴ、冬にはブロッコリーやみかんなど、季節に応じた野菜、果物を提供、収穫体験することができます。
                            </p>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</section>

<section class="news" id="news">
    <div class="news__container">
        <div class="news__left-content">
            <h2 class="section__ttl news__ttl">お知らせ</h2>
            <p class="news__left-txt">
                季節の農作物のお知らせ、見学ツアーのご案内、 <br>
                オンライン販売セールのお知らせなど、自然の恵み農園の最新情報を
                お届けします。
            </p>
            <div class="news__btn"><a href="<?php echo esc_url( home_url('/archi') ); ?>
" class="news__btn-link">View More</a></div>
            
        </div>

        <div class="news__right-content">
            <div class="article__list">

        <?php
                    $news_query = new WP_Query(
                        array(
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                        )
                    );
                    ?>
                    <?php if ($news_query->have_posts()) : ?>
                        <?php while ($news_query->have_posts()) : ?>
                            <?php $news_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>">
                                <div class="article__item">
                                    <div class="article__header">
                                        <div class="article__date"><?php the_time('Y.m.d'); ?></div>
                                        <div class="">
                                            <?php
                                            $cats =  get_the_category();
                                            foreach ($cats as $cat) {
                                                echo '<span class="article__category">' . $cat->name . '</span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="article__ttl">
                                        <?php the_title() ?>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>

<section class="access" id="access">
    <div class="access__container section__inner">
        <h2 class="section__ttl">アクセス</h2>

        <div class="access__grid-container">

            <!-- 左 -->
            <div class="access__left-container">
                <ul class="access__left-list">
                    <li class="access__left-item">会社名</li>
                    <li class="access__left-item">所在地</li>
                    <li class="access__left-item">電話番号</li>
                    <li class="access__left-item">営業時間</li>
                </ul>
                <p class="access__left-map">Googleマップ</p>
                <div class="access__left-map-txt">
                    <a href="" class="access__left-map-link">拡大地図を表示</a>
                </div>
            </div>

            <!-- 右 -->
            <div class="access__right-container">
                <ul class="access__right-list">
                    <li class="access__right-item">株式会社自然の恵み農園</li>
                    <li class="access__right-item">
                        <address class="access__right-address">
                            〒123-4567<br class="sp-db">
                            千葉県〇〇市××町<br class="sp-db">
                            1丁目23-45
                        </address>
                    </li>
                    <li class="access__right-item">
                        <a href="tel:012-3456-7890" class="access__right-tel">012-3456-7890</a>
                    </li>
                    <li class="access__right-item">
                        10:00〜18:00 <br>（土日祝を除く）
                    </li>
                </ul>
            </div>

            <!-- 下 -->
            <div class="access__map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.4794562441803!2d140.06050867548382!3d35.763597172560836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60227f37354ac1%3A0xf8661a31a10fe201!2z44Ki44Oz44OH44Or44K744Oz5YWs5ZySIOWMl-mnkOi7iuWgtA!5e0!3m2!1sja!2sjp!4v1769174580870!5m2!1sja!2sjp"
                    width="701"
                    height="300"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</section>

<?php get_template_part('template-parts/parts-contact'); ?>
</main>
<?php get_footer(); ?>
