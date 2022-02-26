<?php
/**
 * Blank functions and definitions
 *
 * @package olvie
 */
 
 
add_action( 'get_header', 'my_get_header');

function my_get_header() {
  $limitTime = 0;
  setcookie('opening' , 1 , $limitTime, "/");
}
 
/**
 * set meta description
 * description og:description twitter:description
 */
function set_meta_description() {
	global $post;
	$description = get_bloginfo('description');

	if ( is_category() ) {
		// アーカイブページでは、カテゴリーの説明文を取得
		$description = category_description();
	}
	elseif ( is_single() ) {
		if ( $post->post_excerpt ) {
			// 投稿記事、カスタム投稿では、記事本文から抜粋を取得
			$description = strip_tags($post->post_excerpt);
		} else {
			// 抜粋がない時は、記事の冒頭60文字を抜粋して取得
			$description = strip_tags($post->post_content);
			$description = str_replace("\n", "", $description);
			$description = str_replace("\r", "", $description);
			$description = mb_substr($description, 0, 60) . "...";
		}
	}
	echo esc_html($description);
}


/**
 * set meta url
 * og:url twitter:url
 */
function set_meta_ogurl() {
	if ( is_home() || is_front_page() ) {
		echo esc_url(home_url());
	} else {
		echo esc_url(home_url()) . htmlspecialchars($_SERVER["REQUEST_URI"], ENT_QUOTES, 'UTF-8');
	}
}


/**
 * set meta image
 * og:image twitter:image
 */
function set_meta_image() {
	$meta_image = get_stylesheet_directory_uri()."/common/images/ogp.png";
	if (is_single()||is_page()) {
		if (has_post_thumbnail()) {
			$image_id = get_post_thumbnail_id();
			$image = wp_get_attachment_image_src( $image_id, 'full');
			$meta_image = $image[0];
		}
	}
	echo esc_url($meta_image);
}


/**
 * 投稿画面のカテゴリー選択部分「新規カテゴリーを追加」と「よく使うもの」を非表示
 */
function hide_category_tabs_adder() {
  global $pagenow;
  global $post_type;
  if ( is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php') ) {
    echo '<style type="text/css">
    #category-tabs, #category-adder {display:none;}
    #menu_ctg-tabs, #menu_ctg-adder {display:none;}

    .categorydiv .tabs-panel {padding: 0 !important; background: none; border: none !important;}
    </style>';
  }
}
add_action( 'admin_head', 'hide_category_tabs_adder' );


/**
 * RSS配信設定
 */
function custom_post_rss_set($query) {
    if(is_feed()) {
		$query->set('post_type',Array('news'));
        return $query;
    }
}
add_filter('pre_get_posts', 'custom_post_rss_set');


/**
 * 記事内の最初の画像を抽出
 */
/*
function catch_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    
    $first_img = str_replace('-300x200', '', $first_img);
    $first_img = str_replace('-768x512', '', $first_img);
    $first_img = str_replace('-1024x683', '', $first_img);
    
    $info = new SplFileInfo($first_img);
    $ext = $info->getExtension();
    $replace = str_replace('.'.$ext, '-83x54.'.$ext, $first_img);
    return $replace;
}
*/


/**
 * 新規登録ボタンを消す
 */
/*
function hide_category_add() {
   global $pagenow;
   global $post_type;
   
   if ($post_type=="ippin" || $post_type=="toponlineurl" || $post_type=="openbar" || $post_type=="foreign_gem"){
       echo '<style>.page-title-action {display: none;}</style>';
   }
}
add_action('admin_head', 'hide_category_add');
*/


/**
 * カテゴリチェック時に並び順が変わらないようにする
 */
add_filter('wp_terms_checklist_args', 'ps_wp_terms_checklist_args' , 10, 2);
function ps_wp_terms_checklist_args( $args, $post_id ){
	if ( $args['checked_ontop'] !== false ){
		$args['checked_ontop'] = false;
	}
	return $args;
}


/**
 * ＜p＞の自動挿入は行われつつ、HTMLソースもほとんど壊されない
 */
add_action('init', function() {
    remove_filter('the_title', 'wptexturize');
    remove_filter('the_content', 'wptexturize');
    remove_filter('the_excerpt', 'wptexturize');
    remove_filter('the_title', 'wpautop');
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_editor_content', 'wp_richedit_pre');
});
add_filter('tiny_mce_before_init', function($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = ture;
    return $init;
});


/**
 * アイキャッチ画像表示
 */
add_theme_support('post-thumbnails');


/**
 * メディアアップロード時の画像作成追加
 */
//add_image_size('works_thum', 320, 200, true);


/**
 * 許可するタグ
 */
$allowed_html = array(
	'a' => array(
		'href' => array (),
		'target' => array()
	),
	'br' => array(),
	'strong' => array(), 
);


/**
 * テーマディレクトリショートコード[tp]
 */
add_shortcode( 'tp', 'shortcode_tp' );
function shortcode_tp( $atts, $content = '' ) {
	return get_template_directory_uri().$content;
}


/**
 * home url ショートコード[tp]
 */
add_shortcode( 'home', 'shortcode_home' );
function shortcode_home() {
	return home_url();
}

/**
 * DNS プリフェッチ削除
 */
add_filter( 'emoji_svg_url', '__return_false' );


/**
 * 管理画面の投稿数
 */
function my_posts_per_page($posts_per_page) {
   return 200;
}
add_filter('edit_posts_per_page', 'my_posts_per_page');


/**
 * wp_get_archivesのURL書き換え
 */
add_filter( 'get_archives_link', function( $html )  {
  $html = str_replace( home_url().'/', home_url().'/date/', $html );
  return $html;
});

/*【管理画面】投稿メニューを非表示 */
function remove_menus () {
  global $menu;
  remove_menu_page( 'edit.php' ); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');

/*画像を挿入した際の「height」を消す */
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width と heifht を削除
  return $html;
}

?>
