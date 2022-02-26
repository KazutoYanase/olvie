<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package Olvie
 */
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="<?php set_meta_description(); ?>">
    <meta name="keywords" content="オルヴィエ,Olivie,アロマトリートメントサロン,石けん,オリーブ">
    
    <?php if ( is_home() || is_front_page() ) : ?>
    <meta property="og:type" content="website">
    <?php else: ?>
    <meta property="og:type" content="article"/>
    <?php endif; ?>

    <meta property="og:url" content="<?php set_meta_ogurl(); ?>">
    <meta property="og:image" content="<?php set_meta_image(); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>">
    <meta property="og:description" content="<?php set_meta_description(); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php set_meta_description(); ?>">
    <meta name="twitter:image" content="<?php set_meta_image(); ?>">
    <meta name="twitter:url" content="<?php set_meta_ogurl(); ?>">

    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="<?= esc_url(get_template_directory_uri()); ?>/common/css/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/common/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/common/css/pc.css?<?= time() ?>" media="screen and (min-width:800px)">
    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/common/css/sp.css?<?= time() ?>" media="screen and (max-width:799px)">

    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/common/css/slick.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/common/css/slick-theme.css" media="screen">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">

    <script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/common/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/common/js/common.js"></script>
    <script>
        $(function() {
            $('.menu').on('click', function() {
                $(this).toggleClass('active');
                $("#humnav").toggleClass('active');
            })
        })
        $(function() {
            $('#humnav a').on('click', function() {
                $('#humnav').toggleClass('active');
                $(".menu").toggleClass('active');
            })
        });
    </script>


</head>

<body>
    <!-- メニュー -->
    <div id="pc_nav" class="pc_block">
        <ul>
            <li id="pcnav_01"><a href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/logo.svg" alt="Olvie"></a></li>
            <li id="pcnav_02"><a href="<?= esc_url(home_url('/is/')); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_is.png" alt="Olvie is..."></a></li>
            <li id="pcnav_03"><a href="<?= esc_url(home_url('/item/')); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_item.png" alt="Olvie Item"></a></li>
            <li id="pcnav_04"><a href="<?= esc_url(home_url('/salon/')); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_salon.png" alt="Olvie Salon"></a>
                <ul id="pcnav_sub">
                    <li><a href="<?= esc_url(home_url('/salon/')); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_sub_01.png" alt="Salon"></li>
                    <li><a href="<?= esc_url(home_url('/menu/')); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_sub_02.png" alt="Menu"></li>
                    <li><a href="<?= esc_url(home_url('/news/')); ?>"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_sub_03.png" alt="News"></li>
                    <li><a href="https://randand.pos-s.net/reserve/?shop_cd=1" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_sub_04.png" alt="Reservation"></li>
                </ul>
            </li>
            <li id="pcnav_05"><a href="https://www.instagram.com/olvie_jp/?hl=ja" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_insta.svg" alt="Instagram"></a></li>
            <li id="pcnav_06"><a href="https://www.facebook.com/olvie.jp/" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_fb.svg" alt="Facebook"></a></li>
        </ul>
    </div>

    <div id="sp_menu" class="sp_block">
        <div id="sp_menu_logo">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/logo.svg" alt="Olvie">
        </div>
        <div class="fullscreenmenu">
            <div id="humnav">
                <div class="spmenubtn_0"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/sp_menu_logo.svg" alt="Olvie"></div>
                <div class="spmenubtn_1"><a href="<?= esc_url(home_url()); ?>">TOP</a></div>
                <div class="spmenubtn_1"><a href="<?= esc_url(home_url('/is/')); ?>">Olvie is...</a></div>
                <div class="spmenubtn_1"><a href="<?= esc_url(home_url('/item/')); ?>">Olvie Item</a></div>
                <div class="spmenubtn_1"><a href="<?= esc_url(home_url('/salon/')); ?>">Olvie Salon</a></div>
                <div class="spmenubtn_2"><a href="<?= esc_url(home_url('/salon/')); ?>">Salon</a></div>
                <div class="spmenubtn_2"><a href="<?= esc_url(home_url('/menu/')); ?>">Menu</a></div>
                <div class="spmenubtn_2"><a href="<?= esc_url(home_url('/news/')); ?>">News</a></div>
                <div class="spmenubtn_2"><a href="https://randand.pos-s.net/reserve/?shop_cd=1" target="_blank" rel="noopener noreferrer">Reservation</a></div>
                <div class="spmenubtn_3"><a href="<?= esc_url(home_url('/company/')); ?>">COMPANY</a></div>
                <div class="spmenubtn_4"><a href="<?= esc_url(home_url('/recruit/')); ?>">RECRUIT</a></div>
                <div class="spmenubtn_5"><a href="https://www.instagram.com/olvie_jp/?hl=ja" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_insta.svg" alt="Instagram"></a></div>
                <div class="spmenubtn_6"><a href="https://www.facebook.com/olvie.jp/" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/menu_fb.svg" alt="Facebook"></a></div>
                <div class="spmenubtn_foot">Olvie（オルヴィエ）福岡PARCO 本館5F 福岡市中央区天神2丁目11-1</div>
            </div>
        </div>
        <div class="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <main>
    <!-- ヘッダー終わり -->