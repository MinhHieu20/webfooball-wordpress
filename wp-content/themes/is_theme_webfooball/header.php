<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Is_theme_webfooball
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bóng đá</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@5.2.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/sass/style.css">
	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="wapper">
        <header class="header">
            <div class="container container-width hght">
                <div class="row justify-content-between align-items-center hght">
                    <div class="header-logo col-xl-2">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory') ?>/img/logo_black.png" alt="">
                        </a>
                    </div>
                    <div class="header-content col-xl-10">
                        <div class="header-content-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                              </svg>
                        </div>
                        <div class="header-content-menu">
                            <ul class="header-content-menu__list">
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        mới nhất
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        chuyển nhượng
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        anh
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        tbn
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        ys
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        đức
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        pháp
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="./champion.html">
                                        champions league
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        việt nam
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        hậu trường
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        photo
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        video
                                    </a>
                                </li>
                                <li class="header-content-menu__list--item">
                                    <a href="">
                                        khác
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-content-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
