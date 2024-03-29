<?php
function enqueue_custom_styles_scripts() {
    // Stylesheets
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
    wp_enqueue_style( 'custom-style', get_theme_file_uri( '/assets/css/style.css' ), array(), '1.0' );

    // JavaScript
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '8', true );
    wp_enqueue_script( 'inview-js', get_theme_file_uri( '/assets/js/jquery.inview.min.js' ), array('jquery'), '1.0', true );
    wp_enqueue_script( 'easing-js', get_theme_file_uri( '/assets/js/jquery.easing.min.js' ), array('jquery'), '1.0', true );
    wp_enqueue_script( 'custom-script', get_theme_file_uri( '/assets/js/script.js' ), array('jquery'), '1.0', true );

    // Google Fonts
    wp_enqueue_style( 'google-fonts-gotu-noto', 'https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@400;500;700&display=swap' );
    wp_enqueue_style( 'google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles_scripts' );

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

// Contact Form 7 セレクトボックスの選択肢をタクソノミーのターム一覧から自動生成
add_filter('do_shortcode_tag', function ($output, $tag, $attr) {
  if ('contact-form-7' === $tag || 'contact-form' === $tag) {

      $id   = 'de1dbad';                // コンタクトフォームの ID
      $name = 'menu-925';     // セレクトボックスの名前
      $tax  = 'campaign_category'; // タクソノミーのスラッグ

      if ($id == $attr['id']) {
          $terms = get_terms($tax, array('hide_empty' => false));
          if (!empty($terms) && !is_wp_error($terms)) {
              $options = '<option value="">キャンペーンを選択</option>';
              foreach ($terms as $term) {
                  $options .= '<option value="' . esc_attr($term->name) . '">' . esc_html($term->name) . '</option>';
              }
              $output = preg_replace('/(<select .*?name="' . $name . '".*?>)(.*?)(<\/select>)/i', '${1}' . $options . '${3}', $output);
          }
      }
  }
  return $output;
}, 10, 3);


