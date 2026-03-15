<?php get_header(); ?>
<main class="main">
    <div class="p-contact">
        <div class="p-contact__container">
        <nav class="p-single__breadcrumb">
    <?php breadcrumb(); ?>
</nav>
        <h2 class="section__ttl">お問い合わせ</h2>


        <div class="p-contact__form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="190e6c6" title="お問い合わせ_確認"]'); ?>
        </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>