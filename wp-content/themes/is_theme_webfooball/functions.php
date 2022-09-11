<?php
/**
 * Is_theme_webfooball functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Is_theme_webfooball
 */
/**
 * nhung file /core/init.php
 */
require_once (get_template_directory() . "/core/init.php");


if ( ! defined( 'Is_theme_webfooball_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'Is_theme_webfooball_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function is_theme_webfooball_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Is_theme_webfooball, use a find and replace
		* to change 'is_theme_webfooball' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'is_theme_webfooball', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'is_theme_webfooball' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'is_theme_webfooball_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'is_theme_webfooball_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function is_theme_webfooball_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'is_theme_webfooball_content_width', 640 );
}
add_action( 'after_setup_theme', 'is_theme_webfooball_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function is_theme_webfooball_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'is_theme_webfooball' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'is_theme_webfooball' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'is_theme_webfooball_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function is_theme_webfooball_scripts() {
	wp_enqueue_style( 'is_theme_webfooball-style', get_stylesheet_uri(), array(), Is_theme_webfooball_S_VERSION );
	wp_style_add_data( 'is_theme_webfooball-style', 'rtl', 'replace' );

	wp_enqueue_script( 'is_theme_webfooball-navigation', get_template_directory_uri() . '/js/navigation.js', array(), Is_theme_webfooball_S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'is_theme_webfooball_scripts' );

//mới nhất
function willgroup_init_moinhat() {
    register_post_type('moinhat',
        array(
            'labels' => array(
                'name'            => __('Mới nhất') ,
                'singular_name'   => __('Mới nhất') ,
                'menu_name'       => __('Mới nhất') ,
                'name_admin_bar'  => __('Mới nhất') ,
                'all_items'       => __('Tất cả Mới nhất') ,
                'add_new'         => __('Thêm Mới nhất') ,
                'add_new_item'    => __('Thêm Mới nhất') ,
                'edit_item'       => __('Sửa Mới nhất') ,
            ),
            'description'     => __('Mới nhất') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'moi_nhat',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'moi_nhat'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('moinhat_cat', array('moinhat') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Mới nhất League') ,
                'singular_name'     => __('Phân Loại Mới nhất League') ,
                'search_items'      => __('Tìm kiếm loại Mới nhất League') ,
                'all_items'         => __('Tất cả loại Mới nhất League') ,
                'parent_item'       => __('Danh mục Mới nhất League cha') ,
                'parent_item_colon' => __('Danh mục Mới nhất League cha:') ,
                'edit_item'         => __('Sửa danh mục Mới nhất League') ,
                'update_item'       => __('Cập nhật danh mục Mới nhất League') ,
                'add_new_item'      => __('Thêm danh mục Mới nhất League') ,
                'new_item_name'     => __('Tên danh mục Mới nhất League') ,
                'menu_name'         => __('Danh mục Mới nhất League') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-moi-nhat'
            ),
        )
	);
}
add_action('init', 'willgroup_init_moinhat');

//chuyển nhượng
function willgroup_init_chuyennhuong() {
    register_post_type('chuyennhuong',
        array(
            'labels' => array(
                'name'            => __('Chuyển nhượng') ,
                'singular_name'   => __('Chuyển nhượng') ,
                'menu_name'       => __('Chuyển nhượng') ,
                'name_admin_bar'  => __('Chuyển nhượng') ,
                'all_items'       => __('Tất cả Chuyển nhượng') ,
                'add_new'         => __('Thêm Chuyển nhượng') ,
                'add_new_item'    => __('Thêm Chuyển nhượng') ,
                'edit_item'       => __('Sửa Chuyển nhượng') ,
            ),
            'description'     => __('Chuyển nhượng') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'chuyen_nhuong',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'chuyen_nhuong'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('chuyennhuong_cat', array('chuyennhuong') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Chuyển nhượng') ,
                'singular_name'     => __('Phân Loại Chuyển nhượng') ,
                'search_items'      => __('Tìm kiếm loại Chuyển nhượng') ,
                'all_items'         => __('Tất cả loại Chuyển nhượng') ,
                'parent_item'       => __('Danh mục Chuyển nhượng cha') ,
                'parent_item_colon' => __('Danh mục Chuyển nhượng cha:') ,
                'edit_item'         => __('Sửa danh mục Chuyển nhượng') ,
                'update_item'       => __('Cập nhật danh mục Chuyển nhượng') ,
                'add_new_item'      => __('Thêm danh mục Chuyển nhượng') ,
                'new_item_name'     => __('Tên danh mục Chuyển nhượng') ,
                'menu_name'         => __('Danh mục Chuyển nhượng') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-chuyen-nhuong'
            ),
        )
	);
}
add_action('init', 'willgroup_init_chuyennhuong');

//anh
function willgroup_init_anh() {
    register_post_type('anh',
        array(
            'labels' => array(
                'name'            => __('Anh') ,
                'singular_name'   => __('Anh') ,
                'menu_name'       => __('Anh') ,
                'name_admin_bar'  => __('Anh') ,
                'all_items'       => __('Tất cả Anh') ,
                'add_new'         => __('Thêm Anh') ,
                'add_new_item'    => __('Thêm Anh') ,
                'edit_item'       => __('Sửa Anh') ,
            ),
            'description'     => __('Anh') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'anh',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'anh'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('anh_cat', array('anh') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Anh') ,
                'singular_name'     => __('Phân Loại Anh') ,
                'search_items'      => __('Tìm kiếm loại Anh') ,
                'all_items'         => __('Tất cả loại Anh') ,
                'parent_item'       => __('Danh mục Anh cha') ,
                'parent_item_colon' => __('Danh mục Anh cha:') ,
                'edit_item'         => __('Sửa danh mục Anh') ,
                'update_item'       => __('Cập nhật danh mục Anh') ,
                'add_new_item'      => __('Thêm danh mục Anh') ,
                'new_item_name'     => __('Tên danh mục Anh') ,
                'menu_name'         => __('Danh mục Anh') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-anh'
            ),
        )
	);
}
add_action('init', 'willgroup_init_anh');

//TBN
function willgroup_init_tbn() {
    register_post_type('tbn',
        array(
            'labels' => array(
                'name'            => __('TBN') ,
                'singular_name'   => __('TBN') ,
                'menu_name'       => __('TBN') ,
                'name_admin_bar'  => __('TBN') ,
                'all_items'       => __('Tất cả TBN') ,
                'add_new'         => __('Thêm TBN') ,
                'add_new_item'    => __('Thêm TBN') ,
                'edit_item'       => __('Sửa TBN') ,
            ),
            'description'     => __('TBN') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'tbn',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'tbn'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('tbn_cat', array('tbn') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại TBN') ,
                'singular_name'     => __('Phân Loại TBN') ,
                'search_items'      => __('Tìm kiếm loại TBN') ,
                'all_items'         => __('Tất cả loại TBN') ,
                'parent_item'       => __('Danh mục TBN cha') ,
                'parent_item_colon' => __('Danh mục Tbn cha:') ,
                'edit_item'         => __('Sửa danh mục TBN') ,
                'update_item'       => __('Cập nhật danh mục TBN') ,
                'add_new_item'      => __('Thêm danh mục TBN') ,
                'new_item_name'     => __('Tên danh mục TBN') ,
                'menu_name'         => __('Danh mục TBN') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-tbn'
            ),
        )
	);
}
add_action('init', 'willgroup_init_tbn');

//ý
function willgroup_init_y() {
    register_post_type('y',
        array(
            'labels' => array(
                'name'            => __('Ý') ,
                'singular_name'   => __('Ý') ,
                'menu_name'       => __('Ý') ,
                'name_admin_bar'  => __('Ý') ,
                'all_items'       => __('Tất cả Ý') ,
                'add_new'         => __('Thêm Ý') ,
                'add_new_item'    => __('Thêm Ý') ,
                'edit_item'       => __('Sửa Ý') ,
            ),
            'description'     => __('Ý') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'y',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'y'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('y_cat', array('y') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Ý') ,
                'singular_name'     => __('Phân Loại Ý') ,
                'search_items'      => __('Tìm kiếm loại Ý') ,
                'all_items'         => __('Tất cả loại Ý') ,
                'parent_item'       => __('Danh mục Ý cha') ,
                'parent_item_colon' => __('Danh mục Ý cha:') ,
                'edit_item'         => __('Sửa danh mục Ý') ,
                'update_item'       => __('Cập nhật danh mục Ý') ,
                'add_new_item'      => __('Thêm danh mục Ý') ,
                'new_item_name'     => __('Tên danh mục Ý') ,
                'menu_name'         => __('Danh mục Ý') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-y'
            ),
        )
	);
}
add_action('init', 'willgroup_init_y');

//Đức
function willgroup_init_duc() {
    register_post_type('duc',
        array(
            'labels' => array(
                'name'            => __('Đức') ,
                'singular_name'   => __('Đức') ,
                'menu_name'       => __('Đức') ,
                'name_admin_bar'  => __('Đức') ,
                'all_items'       => __('Tất cả Đức') ,
                'add_new'         => __('Thêm Đức') ,
                'add_new_item'    => __('Thêm Đức') ,
                'edit_item'       => __('Sửa Đức') ,
            ),
            'description'     => __('Đức') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'duc',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'duc'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('duc_cat', array('duc') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Đức') ,
                'singular_name'     => __('Phân Loại Đức') ,
                'search_items'      => __('Tìm kiếm loại Đức') ,
                'all_items'         => __('Tất cả loại Đức') ,
                'parent_item'       => __('Danh mục Đức cha') ,
                'parent_item_colon' => __('Danh mục Đức cha:') ,
                'edit_item'         => __('Sửa danh mục Đức') ,
                'update_item'       => __('Cập nhật danh mục Đức') ,
                'add_new_item'      => __('Thêm danh mục Đức') ,
                'new_item_name'     => __('Tên danh mục Đức') ,
                'menu_name'         => __('Danh mục Đức') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-duc'
            ),
        )
	);
}
add_action('init', 'willgroup_init_duc');

//Pháp
function willgroup_init_phap() {
    register_post_type('phap',
        array(
            'labels' => array(
                'name'            => __('Pháp') ,
                'singular_name'   => __('Pháp') ,
                'menu_name'       => __('Pháp') ,
                'name_admin_bar'  => __('Pháp') ,
                'all_items'       => __('Tất cả Pháp') ,
                'add_new'         => __('Thêm Pháp') ,
                'add_new_item'    => __('Thêm Pháp') ,
                'edit_item'       => __('Sửa Pháp') ,
            ),
            'description'     => __('Pháp') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'phap',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'phap'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('phap_cat', array('phap') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Pháp') ,
                'singular_name'     => __('Phân Loại Pháp') ,
                'search_items'      => __('Tìm kiếm loại Pháp') ,
                'all_items'         => __('Tất cả loại Pháp') ,
                'parent_item'       => __('Danh mục Pháp cha') ,
                'parent_item_colon' => __('Danh mục Pháp cha:') ,
                'edit_item'         => __('Sửa danh mục Pháp') ,
                'update_item'       => __('Cập nhật danh mục Pháp') ,
                'add_new_item'      => __('Thêm danh mục Pháp') ,
                'new_item_name'     => __('Tên danh mục Pháp') ,
                'menu_name'         => __('Danh mục Pháp') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-phap'
            ),
        )
	);
}
add_action('init', 'willgroup_init_phap');

//Champions
function willgroup_init_champions() {
    register_post_type('champions',
        array(
            'labels' => array(
                'name'            => __('Champions League') ,
                'singular_name'   => __('Champions League') ,
                'menu_name'       => __('Champions League') ,
                'name_admin_bar'  => __('Champions League') ,
                'all_items'       => __('Tất cả Champions League') ,
                'add_new'         => __('Thêm Champions League') ,
                'add_new_item'    => __('Thêm Champions League') ,
                'edit_item'       => __('Sửa Champions League') ,
            ),
            'description'     => __('Champions League') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'champions_league',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'champions_league'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('champions_cat', array('champions') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Champions League') ,
                'singular_name'     => __('Phân Loại Champions League') ,
                'search_items'      => __('Tìm kiếm loại Champions League') ,
                'all_items'         => __('Tất cả loại Champions League') ,
                'parent_item'       => __('Danh mục Champions League cha') ,
                'parent_item_colon' => __('Danh mục Champions League cha:') ,
                'edit_item'         => __('Sửa danh mục Champions League') ,
                'update_item'       => __('Cập nhật danh mục Champions League') ,
                'add_new_item'      => __('Thêm danh mục Champions League') ,
                'new_item_name'     => __('Tên danh mục Champions League') ,
                'menu_name'         => __('Danh mục Champions League') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-champions_league'
            ),
        )
	);
}
add_action('init', 'willgroup_init_champions');

//Việt Nam
function willgroup_init_vietnam() {
    register_post_type('vietnam',
        array(
            'labels' => array(
                'name'            => __('Việt Nam') ,
                'singular_name'   => __('Việt Nam') ,
                'menu_name'       => __('Việt Nam') ,
                'name_admin_bar'  => __('Việt Nam') ,
                'all_items'       => __('Tất cả Việt Nam') ,
                'add_new'         => __('Thêm Việt Nam') ,
                'add_new_item'    => __('Thêm Việt Nam') ,
                'edit_item'       => __('Sửa Việt Nam') ,
            ),
            'description'     => __('Việt Nam') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'vietnam',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'vietnam'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('vietnam_cat', array('vietnam') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Việt Nam') ,
                'singular_name'     => __('Phân Loại Việt Nam') ,
                'search_items'      => __('Tìm kiếm loại Việt Nam') ,
                'all_items'         => __('Tất cả loại Việt Nam') ,
                'parent_item'       => __('Danh mục Việt Nam cha') ,
                'parent_item_colon' => __('Danh mục Việt Nam cha:') ,
                'edit_item'         => __('Sửa danh mục Việt Nam') ,
                'update_item'       => __('Cập nhật danh mục Việt Nam') ,
                'add_new_item'      => __('Thêm danh mục Việt Nam') ,
                'new_item_name'     => __('Tên danh mục Việt Nam') ,
                'menu_name'         => __('Danh mục Việt Nam') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-vietnam'
            ),
        )
	);
}
add_action('init', 'willgroup_init_vietnam');

//Hậu trường
function willgroup_init_hautruong() {
    register_post_type('hautruong',
        array(
            'labels' => array(
                'name'            => __('Hậu trường') ,
                'singular_name'   => __('Hậu trường') ,
                'menu_name'       => __('Hậu trường') ,
                'name_admin_bar'  => __('Hậu trường') ,
                'all_items'       => __('Tất cả Hậu trường') ,
                'add_new'         => __('Thêm Hậu trường') ,
                'add_new_item'    => __('Thêm Hậu trường') ,
                'edit_item'       => __('Sửa Hậu trường') ,
            ),
            'description'     => __('Hậu trường') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'hautruong',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'hautruong'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('hautruong_cat', array('hautruong') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Hậu trường') ,
                'singular_name'     => __('Phân Loại Hậu trường') ,
                'search_items'      => __('Tìm kiếm loại Hậu trường') ,
                'all_items'         => __('Tất cả loại Hậu trường') ,
                'parent_item'       => __('Danh mục Hậu trường cha') ,
                'parent_item_colon' => __('Danh mục Hậu trường cha:') ,
                'edit_item'         => __('Sửa danh mục Hậu trường') ,
                'update_item'       => __('Cập nhật danh mục Hậu trường') ,
                'add_new_item'      => __('Thêm danh mục Hậu trường') ,
                'new_item_name'     => __('Tên danh mục Hậu trường') ,
                'menu_name'         => __('Danh mục Hậu trường') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-hautruong'
            ),
        )
	);
}
add_action('init', 'willgroup_init_hautruong');

//Photo
function willgroup_init_photo() {
    register_post_type('photo',
        array(
            'labels' => array(
                'name'            => __('Photo') ,
                'singular_name'   => __('Photo') ,
                'menu_name'       => __('Photo') ,
                'name_admin_bar'  => __('Photo') ,
                'all_items'       => __('Tất cả Photo') ,
                'add_new'         => __('Thêm Photo') ,
                'add_new_item'    => __('Thêm Photo') ,
                'edit_item'       => __('Sửa Photo') ,
            ),
            'description'     => __('Photo') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'photo',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'photo'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('photo_cat', array('photo') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Photo') ,
                'singular_name'     => __('Phân Loại Photo') ,
                'search_items'      => __('Tìm kiếm loại Photo') ,
                'all_items'         => __('Tất cả loại Photo') ,
                'parent_item'       => __('Danh mục Photo cha') ,
                'parent_item_colon' => __('Danh mục Photo cha:') ,
                'edit_item'         => __('Sửa danh mục Photo') ,
                'update_item'       => __('Cập nhật danh mục Photo') ,
                'add_new_item'      => __('Thêm danh mục Photo') ,
                'new_item_name'     => __('Tên danh mục Photo') ,
                'menu_name'         => __('Danh mục Photo') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-photo'
            ),
        )
	);
}
add_action('init', 'willgroup_init_photo');

//video
function willgroup_init_video() {
    register_post_type('video',
        array(
            'labels' => array(
                'name'            => __('Video') ,
                'singular_name'   => __('Video') ,
                'menu_name'       => __('Video') ,
                'name_admin_bar'  => __('Video') ,
                'all_items'       => __('Tất cả Video') ,
                'add_new'         => __('Thêm Video') ,
                'add_new_item'    => __('Thêm Video') ,
                'edit_item'       => __('Sửa Video') ,
            ),
            'description'     => __('Video') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'video',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'video'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('video_cat', array('video') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Video') ,
                'singular_name'     => __('Phân Loại Video') ,
                'search_items'      => __('Tìm kiếm loại Video') ,
                'all_items'         => __('Tất cả loại Video') ,
                'parent_item'       => __('Danh mục Video cha') ,
                'parent_item_colon' => __('Danh mục Video cha:') ,
                'edit_item'         => __('Sửa danh mục Video') ,
                'update_item'       => __('Cập nhật danh mục Video') ,
                'add_new_item'      => __('Thêm danh mục Video') ,
                'new_item_name'     => __('Tên danh mục Video') ,
                'menu_name'         => __('Danh mục Video') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-video'
            ),
        )
	);
}
add_action('init', 'willgroup_init_video');

//khác
function willgroup_init_khac() {
    register_post_type('khac',
        array(
            'labels' => array(
                'name'            => __('Khác') ,
                'singular_name'   => __('Khác') ,
                'menu_name'       => __('Khác') ,
                'name_admin_bar'  => __('Khác') ,
                'all_items'       => __('Tất cả Khác') ,
                'add_new'         => __('Thêm Khác') ,
                'add_new_item'    => __('Thêm Khác') ,
                'edit_item'       => __('Sửa Khác') ,
            ),
            'description'     => __('Khác') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'khac',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'khac'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('khac_cat', array('khac') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Khác') ,
                'singular_name'     => __('Phân Loại Khác') ,
                'search_items'      => __('Tìm kiếm loại Khác') ,
                'all_items'         => __('Tất cả loại Khác') ,
                'parent_item'       => __('Danh mục Khác cha') ,
                'parent_item_colon' => __('Danh mục Khác cha:') ,
                'edit_item'         => __('Sửa danh mục Khác') ,
                'update_item'       => __('Cập nhật danh mục Khác') ,
                'add_new_item'      => __('Thêm danh mục Khác') ,
                'new_item_name'     => __('Tên danh mục Khác') ,
                'menu_name'         => __('Danh mục Khác') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-khac'
            ),
        )
	);
}
add_action('init', 'willgroup_init_khac');

// add class vào file scss ở header
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// function wpcf7_url_login() {
// 	return"http://localhost:8080/webfooball-wordpress/";
// }
// add_filter('login_url', 'wpcf7_url_login');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

