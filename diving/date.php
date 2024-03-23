<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
    <picture class="sub-mv__image">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog_pc.jpg" media="(min-width: 768px)" type="image/png">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog_sp.jpg" alt="魚の群れ">
    </picture>
    <h1 class="sub-mv__title">Blog</h1>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="two-column layout-two-column">
    <div class="two-column__inner lower-inner inner">
        <div class="two-column__wrap">
            <div class="two-column__main">
                <div class="two-column__cards blog-items blog-items--lower-blog">
                    <?php
                    // クエリパラメータから月と年を取得
                    $monthnum = get_query_var('monthnum');
                    $year = get_query_var('year');

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'paged' => $paged, // ページ番号を指定
                    );

                    // 月と年の指定があればクエリに追加
                    if ($monthnum && $year) {
                        $args['monthnum'] = $monthnum;
                        $args['year'] = $year;
                    }

                    $blog_query = new WP_Query($args);

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>" class="lower-blog__card blog-item">
                                <div class="blog-item__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img1.jpg" alt="赤色の珊瑚礁">
                                    <?php endif; ?>
                                </div>
                                <div class="blog-item__body">
                                    <time class="blog-item__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <h3 class="blog-item__text-title"><?php the_title(); ?></h3>
                                    <p class="blog-item__text">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>
                                </div>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '該当する投稿はありません。';
                    endif;
                    ?>
                </div>
                <!-- ページネーション -->
                <div class="layout-pagenavi">
                    <?php wp_pagenavi(array('query' => $blog_query)); ?>
                </div>
            </div>
            <!-- サイドバー -->
            <?php get_template_part('./parts/sidebar') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
