<?php
/**
 * archive.php
 * ページが見つかりませんでした
 */
/*
Template Name: archive
*/

get_header(); ?>
<main class="main">
<div class="not-found">
<div class="not-found__container">
<p class="not-found__txt">ページが見つかりませんでした</p>

<div class="not-found__btn-wrapper">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="not-found__btn-link">TOPに戻る</a>
            </div>


</div>
</div>
</main>
<?php get_footer(); ?>