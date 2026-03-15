<?php get_header(); ?>
<main class="main">
    <div class="p-contact">
        <div class="p-contact__container">
        <nav class="p-single__breadcrumb">
    <?php breadcrumb(); ?>
</nav>
        <h2 class="section__ttl">お問い合わせ</h2>


        <div class="p-contact__form-wrapper">
        <h3 class="p-contact-thanks__heding">お問い合わせありがとうございました。</h3>
            
            <p class="p-contact-thanks__txt">担当者より5営業日以内に返信いたします。<br> お急ぎの場合は、お電話にてお問い合わせください。</p>
            <div class="p-contact-thanks__info">
                <p class="p-contact-thanks__info-item--first">
                    問い合わせ電話：
                    <a href="tel:123-4567-8910" class="p-contact-thanks__info-tel">123-4567-8910</a>
                </p>
                <p class="p-contact-thanks__info-item">
                    【受付時間】<br class="sp-db">
                    10:00 ~ 18:00（土日祝を除く）
                </p>
            </div>
            <div class="p-contact-thanks__btn-wrapper">
                <a href="" class="p-contact-thanks__btn-link">TOPに戻る</a>
            </div>
        </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>