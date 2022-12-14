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

//m???i nh???t
function willgroup_init_moinhat() {
    register_post_type('moinhat',
        array(
            'labels' => array(
                'name'            => __('M???i nh???t') ,
                'singular_name'   => __('M???i nh???t') ,
                'menu_name'       => __('M???i nh???t') ,
                'name_admin_bar'  => __('M???i nh???t') ,
                'all_items'       => __('T???t c??? M???i nh???t') ,
                'add_new'         => __('Th??m M???i nh???t') ,
                'add_new_item'    => __('Th??m M???i nh???t') ,
                'edit_item'       => __('S???a M???i nh???t') ,
            ),
            'description'     => __('M???i nh???t') ,
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
                'name'              => __('Ph??n Lo???i M???i nh???t League') ,
                'singular_name'     => __('Ph??n Lo???i M???i nh???t League') ,
                'search_items'      => __('T??m ki???m lo???i M???i nh???t League') ,
                'all_items'         => __('T???t c??? lo???i M???i nh???t League') ,
                'parent_item'       => __('Danh m???c M???i nh???t League cha') ,
                'parent_item_colon' => __('Danh m???c M???i nh???t League cha:') ,
                'edit_item'         => __('S???a danh m???c M???i nh???t League') ,
                'update_item'       => __('C???p nh???t danh m???c M???i nh???t League') ,
                'add_new_item'      => __('Th??m danh m???c M???i nh???t League') ,
                'new_item_name'     => __('T??n danh m???c M???i nh???t League') ,
                'menu_name'         => __('Danh m???c M???i nh???t League') ,
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

//chuy???n nh?????ng
function willgroup_init_chuyennhuong() {
    register_post_type('chuyennhuong',
        array(
            'labels' => array(
                'name'            => __('Chuy???n nh?????ng') ,
                'singular_name'   => __('Chuy???n nh?????ng') ,
                'menu_name'       => __('Chuy???n nh?????ng') ,
                'name_admin_bar'  => __('Chuy???n nh?????ng') ,
                'all_items'       => __('T???t c??? Chuy???n nh?????ng') ,
                'add_new'         => __('Th??m Chuy???n nh?????ng') ,
                'add_new_item'    => __('Th??m Chuy???n nh?????ng') ,
                'edit_item'       => __('S???a Chuy???n nh?????ng') ,
            ),
            'description'     => __('Chuy???n nh?????ng') ,
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
                'name'              => __('Ph??n Lo???i Chuy???n nh?????ng') ,
                'singular_name'     => __('Ph??n Lo???i Chuy???n nh?????ng') ,
                'search_items'      => __('T??m ki???m lo???i Chuy???n nh?????ng') ,
                'all_items'         => __('T???t c??? lo???i Chuy???n nh?????ng') ,
                'parent_item'       => __('Danh m???c Chuy???n nh?????ng cha') ,
                'parent_item_colon' => __('Danh m???c Chuy???n nh?????ng cha:') ,
                'edit_item'         => __('S???a danh m???c Chuy???n nh?????ng') ,
                'update_item'       => __('C???p nh???t danh m???c Chuy???n nh?????ng') ,
                'add_new_item'      => __('Th??m danh m???c Chuy???n nh?????ng') ,
                'new_item_name'     => __('T??n danh m???c Chuy???n nh?????ng') ,
                'menu_name'         => __('Danh m???c Chuy???n nh?????ng') ,
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
                'all_items'       => __('T???t c??? Anh') ,
                'add_new'         => __('Th??m Anh') ,
                'add_new_item'    => __('Th??m Anh') ,
                'edit_item'       => __('S???a Anh') ,
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
                'name'              => __('Ph??n Lo???i Anh') ,
                'singular_name'     => __('Ph??n Lo???i Anh') ,
                'search_items'      => __('T??m ki???m lo???i Anh') ,
                'all_items'         => __('T???t c??? lo???i Anh') ,
                'parent_item'       => __('Danh m???c Anh cha') ,
                'parent_item_colon' => __('Danh m???c Anh cha:') ,
                'edit_item'         => __('S???a danh m???c Anh') ,
                'update_item'       => __('C???p nh???t danh m???c Anh') ,
                'add_new_item'      => __('Th??m danh m???c Anh') ,
                'new_item_name'     => __('T??n danh m???c Anh') ,
                'menu_name'         => __('Danh m???c Anh') ,
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
                'all_items'       => __('T???t c??? TBN') ,
                'add_new'         => __('Th??m TBN') ,
                'add_new_item'    => __('Th??m TBN') ,
                'edit_item'       => __('S???a TBN') ,
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
                'name'              => __('Ph??n Lo???i TBN') ,
                'singular_name'     => __('Ph??n Lo???i TBN') ,
                'search_items'      => __('T??m ki???m lo???i TBN') ,
                'all_items'         => __('T???t c??? lo???i TBN') ,
                'parent_item'       => __('Danh m???c TBN cha') ,
                'parent_item_colon' => __('Danh m???c Tbn cha:') ,
                'edit_item'         => __('S???a danh m???c TBN') ,
                'update_item'       => __('C???p nh???t danh m???c TBN') ,
                'add_new_item'      => __('Th??m danh m???c TBN') ,
                'new_item_name'     => __('T??n danh m???c TBN') ,
                'menu_name'         => __('Danh m???c TBN') ,
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

//??
function willgroup_init_y() {
    register_post_type('y',
        array(
            'labels' => array(
                'name'            => __('??') ,
                'singular_name'   => __('??') ,
                'menu_name'       => __('??') ,
                'name_admin_bar'  => __('??') ,
                'all_items'       => __('T???t c??? ??') ,
                'add_new'         => __('Th??m ??') ,
                'add_new_item'    => __('Th??m ??') ,
                'edit_item'       => __('S???a ??') ,
            ),
            'description'     => __('??') ,
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
                'name'              => __('Ph??n Lo???i ??') ,
                'singular_name'     => __('Ph??n Lo???i ??') ,
                'search_items'      => __('T??m ki???m lo???i ??') ,
                'all_items'         => __('T???t c??? lo???i ??') ,
                'parent_item'       => __('Danh m???c ?? cha') ,
                'parent_item_colon' => __('Danh m???c ?? cha:') ,
                'edit_item'         => __('S???a danh m???c ??') ,
                'update_item'       => __('C???p nh???t danh m???c ??') ,
                'add_new_item'      => __('Th??m danh m???c ??') ,
                'new_item_name'     => __('T??n danh m???c ??') ,
                'menu_name'         => __('Danh m???c ??') ,
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

//?????c
function willgroup_init_duc() {
    register_post_type('duc',
        array(
            'labels' => array(
                'name'            => __('?????c') ,
                'singular_name'   => __('?????c') ,
                'menu_name'       => __('?????c') ,
                'name_admin_bar'  => __('?????c') ,
                'all_items'       => __('T???t c??? ?????c') ,
                'add_new'         => __('Th??m ?????c') ,
                'add_new_item'    => __('Th??m ?????c') ,
                'edit_item'       => __('S???a ?????c') ,
            ),
            'description'     => __('?????c') ,
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
                'name'              => __('Ph??n Lo???i ?????c') ,
                'singular_name'     => __('Ph??n Lo???i ?????c') ,
                'search_items'      => __('T??m ki???m lo???i ?????c') ,
                'all_items'         => __('T???t c??? lo???i ?????c') ,
                'parent_item'       => __('Danh m???c ?????c cha') ,
                'parent_item_colon' => __('Danh m???c ?????c cha:') ,
                'edit_item'         => __('S???a danh m???c ?????c') ,
                'update_item'       => __('C???p nh???t danh m???c ?????c') ,
                'add_new_item'      => __('Th??m danh m???c ?????c') ,
                'new_item_name'     => __('T??n danh m???c ?????c') ,
                'menu_name'         => __('Danh m???c ?????c') ,
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

//Ph??p
function willgroup_init_phap() {
    register_post_type('phap',
        array(
            'labels' => array(
                'name'            => __('Ph??p') ,
                'singular_name'   => __('Ph??p') ,
                'menu_name'       => __('Ph??p') ,
                'name_admin_bar'  => __('Ph??p') ,
                'all_items'       => __('T???t c??? Ph??p') ,
                'add_new'         => __('Th??m Ph??p') ,
                'add_new_item'    => __('Th??m Ph??p') ,
                'edit_item'       => __('S???a Ph??p') ,
            ),
            'description'     => __('Ph??p') ,
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
                'name'              => __('Ph??n Lo???i Ph??p') ,
                'singular_name'     => __('Ph??n Lo???i Ph??p') ,
                'search_items'      => __('T??m ki???m lo???i Ph??p') ,
                'all_items'         => __('T???t c??? lo???i Ph??p') ,
                'parent_item'       => __('Danh m???c Ph??p cha') ,
                'parent_item_colon' => __('Danh m???c Ph??p cha:') ,
                'edit_item'         => __('S???a danh m???c Ph??p') ,
                'update_item'       => __('C???p nh???t danh m???c Ph??p') ,
                'add_new_item'      => __('Th??m danh m???c Ph??p') ,
                'new_item_name'     => __('T??n danh m???c Ph??p') ,
                'menu_name'         => __('Danh m???c Ph??p') ,
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
                'all_items'       => __('T???t c??? Champions League') ,
                'add_new'         => __('Th??m Champions League') ,
                'add_new_item'    => __('Th??m Champions League') ,
                'edit_item'       => __('S???a Champions League') ,
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
                'name'              => __('Ph??n Lo???i Champions League') ,
                'singular_name'     => __('Ph??n Lo???i Champions League') ,
                'search_items'      => __('T??m ki???m lo???i Champions League') ,
                'all_items'         => __('T???t c??? lo???i Champions League') ,
                'parent_item'       => __('Danh m???c Champions League cha') ,
                'parent_item_colon' => __('Danh m???c Champions League cha:') ,
                'edit_item'         => __('S???a danh m???c Champions League') ,
                'update_item'       => __('C???p nh???t danh m???c Champions League') ,
                'add_new_item'      => __('Th??m danh m???c Champions League') ,
                'new_item_name'     => __('T??n danh m???c Champions League') ,
                'menu_name'         => __('Danh m???c Champions League') ,
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

//Vi???t Nam
function willgroup_init_vietnam() {
    register_post_type('vietnam',
        array(
            'labels' => array(
                'name'            => __('Vi???t Nam') ,
                'singular_name'   => __('Vi???t Nam') ,
                'menu_name'       => __('Vi???t Nam') ,
                'name_admin_bar'  => __('Vi???t Nam') ,
                'all_items'       => __('T???t c??? Vi???t Nam') ,
                'add_new'         => __('Th??m Vi???t Nam') ,
                'add_new_item'    => __('Th??m Vi???t Nam') ,
                'edit_item'       => __('S???a Vi???t Nam') ,
            ),
            'description'     => __('Vi???t Nam') ,
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
                'name'              => __('Ph??n Lo???i Vi???t Nam') ,
                'singular_name'     => __('Ph??n Lo???i Vi???t Nam') ,
                'search_items'      => __('T??m ki???m lo???i Vi???t Nam') ,
                'all_items'         => __('T???t c??? lo???i Vi???t Nam') ,
                'parent_item'       => __('Danh m???c Vi???t Nam cha') ,
                'parent_item_colon' => __('Danh m???c Vi???t Nam cha:') ,
                'edit_item'         => __('S???a danh m???c Vi???t Nam') ,
                'update_item'       => __('C???p nh???t danh m???c Vi???t Nam') ,
                'add_new_item'      => __('Th??m danh m???c Vi???t Nam') ,
                'new_item_name'     => __('T??n danh m???c Vi???t Nam') ,
                'menu_name'         => __('Danh m???c Vi???t Nam') ,
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

//H???u tr?????ng
function willgroup_init_hautruong() {
    register_post_type('hautruong',
        array(
            'labels' => array(
                'name'            => __('H???u tr?????ng') ,
                'singular_name'   => __('H???u tr?????ng') ,
                'menu_name'       => __('H???u tr?????ng') ,
                'name_admin_bar'  => __('H???u tr?????ng') ,
                'all_items'       => __('T???t c??? H???u tr?????ng') ,
                'add_new'         => __('Th??m H???u tr?????ng') ,
                'add_new_item'    => __('Th??m H???u tr?????ng') ,
                'edit_item'       => __('S???a H???u tr?????ng') ,
            ),
            'description'     => __('H???u tr?????ng') ,
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
                'name'              => __('Ph??n Lo???i H???u tr?????ng') ,
                'singular_name'     => __('Ph??n Lo???i H???u tr?????ng') ,
                'search_items'      => __('T??m ki???m lo???i H???u tr?????ng') ,
                'all_items'         => __('T???t c??? lo???i H???u tr?????ng') ,
                'parent_item'       => __('Danh m???c H???u tr?????ng cha') ,
                'parent_item_colon' => __('Danh m???c H???u tr?????ng cha:') ,
                'edit_item'         => __('S???a danh m???c H???u tr?????ng') ,
                'update_item'       => __('C???p nh???t danh m???c H???u tr?????ng') ,
                'add_new_item'      => __('Th??m danh m???c H???u tr?????ng') ,
                'new_item_name'     => __('T??n danh m???c H???u tr?????ng') ,
                'menu_name'         => __('Danh m???c H???u tr?????ng') ,
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
                'all_items'       => __('T???t c??? Photo') ,
                'add_new'         => __('Th??m Photo') ,
                'add_new_item'    => __('Th??m Photo') ,
                'edit_item'       => __('S???a Photo') ,
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
                'name'              => __('Ph??n Lo???i Photo') ,
                'singular_name'     => __('Ph??n Lo???i Photo') ,
                'search_items'      => __('T??m ki???m lo???i Photo') ,
                'all_items'         => __('T???t c??? lo???i Photo') ,
                'parent_item'       => __('Danh m???c Photo cha') ,
                'parent_item_colon' => __('Danh m???c Photo cha:') ,
                'edit_item'         => __('S???a danh m???c Photo') ,
                'update_item'       => __('C???p nh???t danh m???c Photo') ,
                'add_new_item'      => __('Th??m danh m???c Photo') ,
                'new_item_name'     => __('T??n danh m???c Photo') ,
                'menu_name'         => __('Danh m???c Photo') ,
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
                'all_items'       => __('T???t c??? Video') ,
                'add_new'         => __('Th??m Video') ,
                'add_new_item'    => __('Th??m Video') ,
                'edit_item'       => __('S???a Video') ,
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
                'name'              => __('Ph??n Lo???i Video') ,
                'singular_name'     => __('Ph??n Lo???i Video') ,
                'search_items'      => __('T??m ki???m lo???i Video') ,
                'all_items'         => __('T???t c??? lo???i Video') ,
                'parent_item'       => __('Danh m???c Video cha') ,
                'parent_item_colon' => __('Danh m???c Video cha:') ,
                'edit_item'         => __('S???a danh m???c Video') ,
                'update_item'       => __('C???p nh???t danh m???c Video') ,
                'add_new_item'      => __('Th??m danh m???c Video') ,
                'new_item_name'     => __('T??n danh m???c Video') ,
                'menu_name'         => __('Danh m???c Video') ,
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

//kh??c
function willgroup_init_khac() {
    register_post_type('khac',
        array(
            'labels' => array(
                'name'            => __('Kh??c') ,
                'singular_name'   => __('Kh??c') ,
                'menu_name'       => __('Kh??c') ,
                'name_admin_bar'  => __('Kh??c') ,
                'all_items'       => __('T???t c??? Kh??c') ,
                'add_new'         => __('Th??m Kh??c') ,
                'add_new_item'    => __('Th??m Kh??c') ,
                'edit_item'       => __('S???a Kh??c') ,
            ),
            'description'     => __('Kh??c') ,
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
                'name'              => __('Ph??n Lo???i Kh??c') ,
                'singular_name'     => __('Ph??n Lo???i Kh??c') ,
                'search_items'      => __('T??m ki???m lo???i Kh??c') ,
                'all_items'         => __('T???t c??? lo???i Kh??c') ,
                'parent_item'       => __('Danh m???c Kh??c cha') ,
                'parent_item_colon' => __('Danh m???c Kh??c cha:') ,
                'edit_item'         => __('S???a danh m???c Kh??c') ,
                'update_item'       => __('C???p nh???t danh m???c Kh??c') ,
                'add_new_item'      => __('Th??m danh m???c Kh??c') ,
                'new_item_name'     => __('T??n danh m???c Kh??c') ,
                'menu_name'         => __('Danh m???c Kh??c') ,
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

// add class v??o file scss ??? header
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

