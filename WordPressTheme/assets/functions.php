<?php function my_script_init(){ 
    // WordPressのjQueryを読み込まない
    wp_deregister_script('jQuery');
    // 標準のjQueryをCDNで読み込み
    wp_enqueue_script( 'jQuery_cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js');
}
add_action('wp_enqueue_scripts', 'my_script_init');
function custom_theme_scripts() {
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );
    
    // Preconnect for performance improvement
    wp_enqueue_style( 'preconnect-google-fonts', 'https://fonts.googleapis.com', array(), null );
    wp_enqueue_style( 'preconnect-google-fonts-gstatic', 'https://fonts.gstatic.com', array(), null, true );
    
    // Swiper CSS
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0' );
    
    // Theme CSS
    wp_enqueue_style( 'theme-style', get_theme_file_uri('/css/style.css'), array(), filemtime(get_theme_file_path('/css/style.css')) );

    // jQuery (WordPress usually includes jQuery by default, but let's make sure it's there)
    // wp_enqueue_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), );

    // Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0', true );
    
    // Custom JS files
    wp_enqueue_script( 'jquery-inview', get_theme_file_uri('/js/jquery.inview.min.js'), array('jquery'), filemtime(get_theme_file_path('/js/jquery.inview.min.js')), true );
    wp_enqueue_script( 'theme-script', get_theme_file_uri('/js/script.js'), array('jquery'), filemtime(get_theme_file_path('/js/script.js')), true );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );


// SCFの設定
// 私たちについて
SCF::add_options_page('', '私たちについて', 'edit_posts', 'aboutus_options', NULL, '5');
// 料金一覧
SCF::add_options_page('', '料金一覧', 'edit_posts', 'price_options', NULL, '5');
// よくある質問
SCF::add_options_page('', 'よくある質問', 'edit_posts', 'faq_options', NULL, '5');


// アイキャッチ画像の設定
function my_setup() {
	add_theme_support( 'post-thumbnails' );
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


// 投稿ページの設定
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
    $submenu['edit.php'][15][0] = $name.'カテゴリー';
    $submenu['edit.php'][16][0] = $name.'タグ';
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  function Change_taxonomieslabel() {
    global $wp_taxonomies;
    $name = 'お知らせ';
    $labels = $wp_taxonomies['category']->labels;
    $labels->name = $name.'カテゴリー';
    $labels->singular_name = $name.'カテゴリー';
    $labels->search_items = $name.'カテゴリーを検索';
    $labels->all_items = $name.'カテゴリー一覧';
    $labels->parent_item = '親の'.$name.'カテゴリー';
    $labels->parent_item_colon = '親の'.$name.'カテゴリー：';
    $labels->edit_item = $name.'カテゴリーの編集';
    $labels->view_item = $name.'カテゴリーの表示';
    $labels->update_item = $name.'カテゴリーの更新';
    $labels->add_new_item = '新規'.$name.'カテゴリーの追加';
    $labels->new_item_name = '新規'.$name;
    $labels->not_found = $name.'カテゴリーが見つかりませんでした';
    $labels->no_terms = $name.'カテゴリーなし';
  
  
    $labels = $wp_taxonomies['post_tag']->labels;
    $name = 'ブログ';
    $labels->name = $name.'タグ';
    $labels->singular_name = $name.'タグ';
    $labels->search_items = $name.'タグを検索';
    $labels->popular_items = '人気の'.$name.'タグ';
    $labels->all_items = 'すべての'.$name.'タグ';
    $labels->edit_item = $name.'タグの編集';
    $labels->view_item = $name.'タグの表示';
    $labels->update_item = $name.'タグの更新';
    $labels->add_new_item = '新規'.$name.'タグの追加';
    $labels->new_item_name = '新規'.$name;
    $labels->separate_items_with_commas = $name.'タグが複数ある場合はコンマで区切ってください';
    $labels->add_or_remove_items = $name.'タグの追加もしくは削除';
    $labels->choose_from_most_used = 'よく使われている'.$name.'タグから選択';
    $labels->not_found = $name.'タグが見つかりませんでした';
    $labels->no_terms = $name.'タグなし';
  }
  add_action( 'admin_menu', 'Change_menulabel' );
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'init', 'Change_taxonomieslabel' );


//サイドバー
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
  } 

// カスタム投稿の表示件数
  function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive('campaign') ) { // campaignのアーカイブページ
        $query->set( 'posts_per_page', '4' ); // campaignの表示件数を4件に指定
    }
    if ( $query->is_post_type_archive('voice') ) { // voiceのアーカイブページ
        $query->set( 'posts_per_page', '6' ); // voiceの表示件数を6件に指定
    }
  }
  add_action( 'pre_get_posts', 'change_posts_per_page' );

  
// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}



// タクソノミーの表示件数
function custom_taxonomy_archive_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
  
    if ( $query->is_tax('campaign_category') ) { // campaignページを
        $query->set('posts_per_page', 4); // 表示件数を4件に指定
    }
  
    if ( $query->is_tax('voice_category') ) { // voiceページを
        $query->set('posts_per_page', 6); // 表示件数を6件に指定
    }
  }
  
  add_action('pre_get_posts', 'custom_taxonomy_archive_posts_per_page');
  function custom_body_class($classes) {
    // この条件で .blog クラスを除外
    if (is_single() || is_archive() || is_page() || is_home()) {
        $key = array_search('blog', $classes);
        if ($key !== false) {
            unset($classes[$key]);
        }
    }
    return $classes;
  }
  
  // フィルターフックにカスタム関数を登録
  add_filter('body_class', 'custom_body_class');