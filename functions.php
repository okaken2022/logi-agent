<?php 
function my_scripts_method() {
// ------------------------------------------------
// css
// ------------------------------------------------
  wp_enqueue_style('main-style',
  get_template_directory_uri() . '/assets/sass/style.css' 
  );

// ------------------------------------------------
// javascript
// ------------------------------------------------
  wp_enqueue_script('jquery');
  wp_enqueue_script('main-js', get_template_directory_uri(). '/assets/js/main.js',
  array(),
  false,
  true
  );
  wp_enqueue_script('accordion-js', get_template_directory_uri(). '/assets/js/accordion.js',
  array(),
  false,
  true
  );
  wp_enqueue_script('contact-js', get_template_directory_uri(). '/assets/js/contact.js',
  array(),
  false,
  true
  );
  wp_enqueue_script('tab-js', get_template_directory_uri(). '/assets/js/tab.js',
  array(),
  false,
  true
  );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');


// ------------------------------------------------
// titleタグの出力
// ------------------------------------------------
add_theme_support('title-tag');


// ------------------------------------------------
// アイキャッチ画像
// ------------------------------------------------
add_theme_support( 'post-thumbnails' );

// ------------------------------------------------
// ページネーションのHTMLカスタマイズ
// ------------------------------------------------
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="pagenation-btn prev-btn" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="pagenation-btn next-btn" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );


// ------------------------------------------------
// 投稿imgにclass付与
// ------------------------------------------------
add_filter('get_image_tag_class', 'add_image_class');
function add_image_class( $classes ) {
 return $classes . 'news-single__img'; //クラス名「insert-image」を追加する
};


// ------------------------------------------------
// ウィジェット
// ------------------------------------------------
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
 ));
}

function create_custom_sidebar() {
  register_sidebars(1,
  array(
    'name' => 'お仕事カテゴリー',
    'id' => 'sidebar-job',
    'description' => 'お知らせのサイドバーのウィジットエリアです。',
    'before_widget' => '<aside id="%1$s" class="widget widget-sidebar widget-sidebar-standard %2$s">',
    'after_widget' => '</aside>',
    'before_title'  => '<h3 class="widget-sidebar-title widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'create_custom_sidebar');


// ------------------------------------------------
// カテゴリーの横に矢印を追加
// ------------------------------------------------
function theme_list_categories( $output, $args ) {
	$replaced_text = preg_replace('<\/a> ', 'i class="fa-solid fa-angle-right"></i></a', $output);
	if($replaced_text != NULL) {
		return $replaced_text;
	} else {
		return $output;
	}
}
add_filter( 'wp_list_categories', 'theme_list_categories', 10, 2 );


function original_pagenation(){

the_posts_pagination (array(
  'mid_size' => 2, /* 現在のページの左右に表示するページ数 */
  'prev_text' => '<i class="fa-solid fa-angle-left"></i>', /* 「前へ」にあたるページ用テキスト */
  'next_text' => '<i class="fa-solid fa-angle-right"></i>', /* 「次へ」にあたるページ用テキスト */
  'lastPageText' => "最後",
  'lastPagePost' => ">",
  // 'show_all' => 'false',
  'last_number' => 'false',
  'screen_reader_text' => ' ', /* 「投稿ナビゲーション」っていうやつのテキストを変える */)
);

}
