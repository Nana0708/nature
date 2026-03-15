<?php get_header(); ?>
<main>
    <div class="p-single__content u-back-white">

        <!-- パンくずリスト -->
        <nav class="p-single__breadcrumb">
<?php breadcrumb(); ?>
        </nav>

        <!-- 記事タイトル -->
        <h1 class="p-single__heading"><?php the_title(); ?></h1>

        <!-- 投稿日時・カテゴリー -->
        <div class="p-single__meta u-flex">
            <time class="p-single__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y.m.d'); ?>
            </time>
            <?php $categories = get_the_category(); ?>
            <?php if ($categories): ?>
                <span class="p-single__category"><?php echo esc_html($categories[0]->name); ?></span>
            <?php endif; ?>
        </div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
        <div class="p-single__inner">
            <!-- アイキャッチ画像 -->
            <figure class="p-single__featured-image">
                <?php if (has_post_thumbnail()) : ?>
                    <img
                        src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"
                        alt="<?php the_title_attribute(); ?>"
                        loading="lazy"
                        decoding="async">
                <?php else : ?>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>//src/img/no-image.png"
                        alt="画像なし"
                        loading="lazy"
                        decoding="async">
                <?php endif; ?>
            </figure>

            <?php $sections = SCF::get('section_group'); ?>

            <!-- 目次（h2・h3が存在する場合のみ表示） -->
            <?php if ($sections && count($sections) > 0):
                $has_titles = false;
                foreach ($sections as $section) {
                    if (!empty($section['s_title_main']) || !empty($section['s_title_sub']) || !empty($section['s_title_main_2']) || !empty($section['s_title_sub_2'])) {
                        $has_titles = true;
                        break;
                    }
                }
            ?>
                <?php if ($has_titles): ?>
                    <div class="p-single__table">
                        <p class="p-single__mokuzi">目次</p>
                        <div class="p-single__table-content">
                            <?php $num = 1; ?>
                            <?php foreach ($sections as $index => $section): ?>
                                <?php if (!empty($section['s_title_main'])): ?>
                                    <a href="#sec-<?php echo esc_attr($index); ?>">
                                        <div class="p-single__table-title--main">
                                            <span class="p-single__number"><?php echo esc_html($num); ?>.</span>
                                            <?php echo esc_html($section['s_title_main']); ?>
                                        </div>
                                    </a>
                                    <?php $num++; ?>
                                <?php endif; ?>
                                <?php if (!empty($section['s_title_sub'])): ?>
                                    <a href="#sub-<?php echo esc_attr($index); ?>">
                                        <div class="p-single__table-title--sub">
                                            <span class="p-single__dot">・</span>
                                            <?php echo esc_html($section['s_title_sub']); ?>
                                        </div>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($section['s_title_main_2'])): ?>
                                    <a href="#sec2-<?php echo esc_attr($index); ?>">
                                        <div class="p-single__table-title--main">
                                            <span class="p-single__number"><?php echo esc_html($num); ?>.</span>
                                            <?php echo esc_html($section['s_title_main_2']); ?>
                                        </div>
                                    </a>
                                    <?php $num++; ?>
                                <?php endif; ?>
                                <?php if (!empty($section['s_title_sub_2'])): ?>
                                    <a href="#sub2-<?php echo esc_attr($index); ?>">
                                        <div class="p-single__table-title--sub">
                                            <span class="p-single__dot">・</span>
                                            <?php echo esc_html($section['s_title_sub_2']); ?>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- コンテンツ本文 -->
            <div class="p-single__document">
                <?php if ($sections): foreach ($sections as $index => $section): ?>

                    <!-- h2見出し -->
                    <?php if (!empty($section['s_title_main'])): ?>
                        <h2 class="p-single__title--main" id="sec-<?php echo esc_attr($index); ?>">
                            <?php echo esc_html($section['s_title_main']); ?>
                        </h2>
                    <?php endif; ?>

                    <!-- h2後の段落文 -->
                    <?php if (!empty($section['text_main'])): ?>
                        <div class="p-single__text u-weight-medium">
                            <?php echo wp_kses_post($section['text_main']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- h3見出し -->
                    <?php if (!empty($section['s_title_sub'])): ?>
                        <h3 class="p-single__title--sub" id="sub-<?php echo esc_attr($index); ?>">
                            <span class="p-single__box"></span>
                            <?php echo esc_html($section['s_title_sub']); ?>
                        </h3>
                    <?php endif; ?>

                    <!-- リスト項目 (ユーザー指定にはないがh3に関連すると想定して維持) -->
                    <?php if (!empty($section['list_items'])):
                        $items = array_filter(array_map('trim', explode("\n", $section['list_items'])));
                    ?>
                        <?php if (!empty($items)): ?>
                            <ul class="p-single__list">
                                <?php foreach ($items as $item): ?>
                                    <li class="p-single__list-item"><?php echo esc_html($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>

                    <!-- リスト後の段落文 -->
                    <?php if (!empty($section['text_sub'])): ?>
                        <div class="p-single__text u-weight-medium">
                            <?php echo wp_kses_post($section['text_sub']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- h2見出し (追加: 横並びの上) -->
                    <?php if (!empty($section['s_title_main_2'])): ?>
                        <h2 class="p-single__title--main" id="sec2-<?php echo esc_attr($index); ?>">
                            <?php echo esc_html($section['s_title_main_2']); ?>
                        </h2>
                    <?php endif; ?>

                    <!-- テキストと画像の横並び -->
                    <?php if (!empty($section['text_beside']) || !empty($section['img_beside'])): ?>
                        <div class="p-single__beside u-flex">
                            <?php if (!empty($section['text_beside'])): ?>
                                <div class="p-single__beside-text u-weight-medium">
                                    <?php echo wp_kses_post($section['text_beside']); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($section['img_beside'])): 
                                $img_beside_url = wp_get_attachment_image_url($section['img_beside'], 'large');
                                if ($img_beside_url):
                            ?>
                                <div class="p-single__beside-img">
                                    <img src="<?php echo esc_url($img_beside_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- h3見出し (追加) -->
                    <?php if (!empty($section['s_title_sub_2'])): ?>
                        <h3 class="p-single__title--sub" id="sub2-<?php echo esc_attr($index); ?>">
                            <span class="p-single__box"></span>
                            <?php echo esc_html($section['s_title_sub_2']); ?>
                        </h3>
                    <?php endif; ?>

                    <!-- 段落文 (追加) -->
                    <?php if (!empty($section['text_sub_2'])): ?>
                        <div class="p-single__text u-weight-medium">
                            <?php echo wp_kses_post($section['text_sub_2']); ?>
                        </div>
                    <?php endif; ?>

                <?php endforeach; endif; ?>
            </div>

            <!-- 一覧に戻るボタン -->
            <a href="<?php echo esc_url(home_url('/archive/')); ?>" class="p-single__button">
                <p class="p-single__button-text u-text-center">一覧に戻る</p>
            </a>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('template-parts/parts-contact'); ?>
</main>


<?php get_footer(); ?>
