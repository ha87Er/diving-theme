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

    // Gotuフォントの読み込み
    wp_enqueue_style( 'google-fonts-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap' );

    // Noto Sans JPフォントの読み込み
    wp_enqueue_style( 'google-fonts-noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap' );

    // Noto Serif JPフォントの読み込み
    wp_enqueue_style( 'google-fonts-noto-serif-jp', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap' );

      // Latoの読み込み
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


//抜粋文の表示
// ↓ 抜粋の文字数を変更する
function change_excerpt_length($length)
{
    return 80;  //変更する文字数
}
add_filter('excerpt_length', 'change_excerpt_length', 999);

// ↓ 抜粋文の最後の文字列[…]を変更する
function change_excerpt_more($more)
{
    return '……';  //変更後の文字列
}
add_filter('excerpt_more', 'change_excerpt_more');

// 抜粋機能の有効化
add_post_type_support('page', 'excerpt');

//TOPスライダー設定
/**
 * @param string $page_title ページのtitle属性値 (必須)
 * @param string $menu_title 管理画面のメニューに表示するタイトル (必須)
 * @param string $capability メニューを操作できる権限 (必須)
 * @param string $menu_slug オプションページのスラッグ (必須)
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'TOPスライダー', 'TOPスライダー', 'edit_posts', 'top_slider' , 'dashicons-admin-generic' , 11);

/**
 * カスタムフィールドを定義
 * 
 * @param array  $settings  MW_WP_Form_Setting オブジェクトの配列
 * @param string $type      投稿タイプ or ロール
 * @param int    $id        投稿ID or ユーザーID
 * @param string $meta_type post | user
 * @return array
 * 
 */
function my_add_meta_box($settings, $type, $id, $meta_type)
{
  if ('top_slider' == $type) {
    $setting = SCF::add_setting('id-top_slider', 'TOPスライダー設定');
    $items = array(
      array(
        'type'        => 'image', //*タイプ
        'name'        => 'top_slider_img_pc', //*名前
        'label'       => '【PC】スライダー画像', //ラベル
        'size'        => 'medium' // プレビューサイズ
      ),
      array(
        'type'        => 'image', //*タイプ
        'name'        => 'top_slider_img_sp', //*名前
        'label'       => '【SP】スライダー画像', //ラベル
        'size'        => 'medium' // プレビューサイズ
      ),
      array(
        'type'        => 'textarea',                      // タイプ
        'name'        => 'top_slider_text',                   // 名前
        'label'       => 'スライダーテキスト設定',        // ラベル
        'rows'        => 3,                               // 行数
      ),
      array(
        'type'        => 'text', //*タイプ
        'name'        => 'top_slider_link', //*名前
        'label'       => 'リンク設定', //ラベル
      ),
    );
    $setting->add_group('top_slider_group', true, $items);
    $settings[] = $setting;
  }
  return $settings;
}
add_filter('smart-cf-register-fields', 'my_add_meta_box', 10, 4);


// ページごとに表示件数を変える
function change_posts_per_page( $query ) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( $query->is_post_type_archive( 'campaign' ) ) {
      $query->set( 'posts_per_page', 4 );
  }

  if ( $query->is_post_type_archive( 'voice' ) ) {
      $query->set( 'posts_per_page', 6 );
  }

  // campaign_category タクソノミーに属するすべてのタームに適用
  if ( $query->is_tax( 'campaign_category' ) ) {
      $query->set( 'posts_per_page', 4 );
  }

  // voice_category タクソノミーに属するすべてのタームに適用
  if ( $query->is_tax( 'voice_category' ) ) {
      $query->set( 'posts_per_page', 6 );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


add_filter( 'get_the_archive_title', function ($title) {
  if(is_category()){
      $title = single_cat_title('',false); //カテゴリー：を消す
  }elseif(is_tag()){
      $title = single_tag_title('',false);  //タグ：を消す
  }elseif(is_date()){
      if (is_year()) {
          $title = get_the_time('Y年');  // 年のページの場合は年のみ表示
      } else {
          $title = get_the_time('Y年n月');  // 月のページの場合は年月表示
      }
  }
  return $title;
});


