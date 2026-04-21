<?php get_header(); ?>
<main class="main">
    <div class="p-contact">
        <div class="p-contact__container">
        <nav class="p-single__breadcrumb">
    <?php breadcrumb(); ?>
</nav>

        <h2 class="section__ttl">お問い合わせ</h2>
        <p class="p-contact__txt">お仕事のご相談、農園体験、牧場の見学、<br class="sp-db">の他ご質問など、お気軽にお問い合わせください。</p>

        <div class="p-contact__form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="b65b783" title="お問い合わせ"]'); ?>
        </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
