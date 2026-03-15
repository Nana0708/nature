<?php
/**
 * archive.php
 * お知らせ一覧（カテゴリー別）
 */
/*
Template Name: archive
*/

get_header(); ?>

<main class="l-main">

  <section class="p-news">
    <div class="p-news__container">

      <!-- パンくずリスト -->
      <nav class="p-single__breadcrumb">
        <?php breadcrumb(); ?>
      </nav>

      <h2 class="section__ttl">お知らせ一覧</h2>

      <?php
        $archive_url = home_url('/archive/');
        $current_slug = isset($_GET['cat_slug']) ? sanitize_text_field($_GET['cat_slug']) : '';
      ?>

      <!-- カテゴリーフィルター -->
      <div class="p-news__filter">
        <?php $all_active = empty($current_slug); ?>
        <a href="<?php echo esc_url($archive_url); ?>"
           class="p-news__filter-btn<?php echo $all_active ? ' is-active' : ''; ?>">
          すべて
        </a>

        <?php
          $categories = get_categories();
          if ( !empty($categories) ) :
            foreach ( $categories as $cat ) :
              $is_active = ( $current_slug === $cat->slug );
        ?>
        <a href="<?php echo esc_url(add_query_arg('cat_slug', $cat->slug, $archive_url)); ?>"
           class="p-news__filter-btn<?php echo $is_active ? ' is-active' : ''; ?>">
          <?php echo esc_html($cat->name); ?>
        </a>
        <?php endforeach; endif; ?>
      </div><!-- /.p-news__filter -->

      <!-- 記事一覧 -->
      <div class="p-news__list">
        <?php
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

          $query_args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
            'paged'          => $paged,
          );

          if ( !empty($current_slug) ) {
            $cat_obj = get_category_by_slug($current_slug);
            if ( $cat_obj ) {
              $query_args['cat'] = $cat_obj->term_id;
            }
          }

          $archive_query = new WP_Query($query_args);
        ?>

        <?php if ( $archive_query->have_posts() ) : while ( $archive_query->have_posts() ) : $archive_query->the_post();
          $cats = get_the_category();
          $first_cat = !empty($cats) ? $cats[0] : null;
        ?>

        <article class="p-news__item">
          <a href="<?php the_permalink(); ?>" class="p-news__link">

            <div class="p-news__thumb">
              <?php if ( has_post_thumbnail() ) :
                the_post_thumbnail('medium_large', ['class' => 'p-news__img', 'alt' => get_the_title()]);
              else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/img/no-image.png'); ?>"
                     alt="No Image" class="p-news__img p-news__img--noimg">
              <?php endif; ?>

              <?php if ( $first_cat ) : ?>
                <span class="p-news__cat p-news__cat--thumb">
                  <?php echo esc_html($first_cat->name); ?>
                </span>
              <?php endif; ?>
            </div><!-- /.p-news__thumb -->

            <div class="p-news__body">
              <div class="p-news__meta">
                <time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y.m.d'); ?>
                </time>
                <?php if ( $first_cat ) : ?>
                  <span class="p-news__cat p-news__cat--body"><?php echo esc_html($first_cat->name); ?></span>
                <?php endif; ?>
              </div><!-- /.p-news__meta -->

              <h3 class="p-news__title"><?php the_title(); ?></h3>

              <div class="p-news__excerpt"><?php the_excerpt(); ?></div>
            </div><!-- /.p-news__body -->

          </a><!-- /.p-news__link -->
        </article><!-- /.p-news__item -->

        <?php endwhile;
        else : ?>
          <p class="p-news__empty">記事がありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div><!-- /.p-news__list -->

      <!-- ページネーション -->
      <?php
        $max_pages = $archive_query->max_num_pages;

        if ( $max_pages > 1 ) :
          $big = 999999999;
          $pagination = paginate_links([
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, $paged),
            'total'     => $max_pages,
            'prev_text' => '&#8249;',
            'next_text' => '&#8250;',
            'type'      => 'array',
          ]);

          if ( $pagination ) :
      ?>
      <nav class="p-news__pager">
        <?php foreach ( $pagination as $page_link ) : ?>
          <div class="p-news__pager-item"><?php echo $page_link; ?></div>
        <?php endforeach; ?>
      </nav>
      <?php endif; endif; ?>

    </div><!-- /.p-news__container -->
  </section><!-- /.p-news -->

  <?php get_template_part('template-parts/parts-contact'); ?>
</main>

<?php get_footer(); ?>