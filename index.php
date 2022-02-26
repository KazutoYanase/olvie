<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package olvie
 */

get_header(); ?>

    <!-- スライダー -->
    <div id="top_slider_wrap">
        <div class="slick_01">
            <div class="top_slider_panel">
                <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_2.jpg" alt=""></div>
                <div class="top_slider_txt pc_block">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_2-txt.svg" alt="">
                </div>
                <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_top_002.jpg" alt=""></div>
            </div>
            <div class="top_slider_panel">
                <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_3.jpg" alt=""></div>
                <div class="top_slider_txt pc_block">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_3-txt.svg" alt="">
                </div>
                <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_top_003.jpg" alt=""></div>
            </div>
            <div class="top_slider_panel">
                <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_4.jpg" alt=""></div>
                <div class="top_slider_txt pc_block">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_4-txt.svg" alt="">
                </div>
                <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_top_004.jpg" alt=""></div>
            </div>
            <div class="top_slider_panel">
                <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_1.jpg" alt=""></div>
                <div class="top_slider_logo pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_top_1_logo.svg" alt=""></div>
                <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_top_001.jpg" alt=""></div>
            </div>
        </div>


        <div class="slick_02">
            <div class="top_slider_panel">
                <a href="<?= esc_url(home_url('/item/')); ?>#item_soap">
                    <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_1.jpg" alt=""></div>
                    <div class="top_slider_title pc_block">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_olvieitem.svg" alt="Olvie Item">
                    </div>
                    <div class="top_slider_text white pc_block">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_soap.svg" alt="Soap">
                    </div>
                    <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_mid_001.jpg" alt=""></div>
                </a>
            </div>
            <div class="top_slider_panel">
                <a href="<?= esc_url(home_url('/item/')); ?>#item_oil">
                    <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_2.jpg" alt=""></div>
                    <div class="top_slider_title pc_block">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_olvieitem.svg" alt="Olvie Item">
                    </div>
                    <div class="top_slider_text white pc_block">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_oil.svg" alt="Skin Oil">
                    </div>
                    <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_mid_002.jpg" alt=""></div>
                </a>
            </div>
            <div class="top_slider_panel">
                <a href="<?= esc_url(home_url('/item/')); ?>#item_herb">
                    <div class="top_slider_ph pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_3.jpg" alt=""></div>
                    <div class="top_slider_title pc_block">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_olvieitem.svg" alt="Olvie Item">
                    </div>
                    <div class="top_slider_text white pc_block">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_herb.svg" alt="Fresh Herb">
                    </div>
                    <div class="top_slider_sp sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_mid_003.jpg" alt=""></div>
                </a>
            </div>
        </div>


        <div class="slick_03">
            <a href="<?= esc_url(home_url('/salon/')); ?>">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_btm_1.jpg" alt="" class="pc_inline">
                <div class="top_slider_title pc_block">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_pc_mid_txt_olviesalon.svg" alt="Olvie Salon">
                </div>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/top_slider_sp_btm_001.jpg" alt="" class="sp_inline">
            </a>
        </div>
    </div>


<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/common/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_01').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2500, //オートプレイの切り替わり時間
            speed: 1000,
            accessibility: false,
            arrows: false,
            draggable: false,
            pauseOnHover: false,
            dots: true,
            fade: true,
            cssEase: 'ease-in-out',
        });
    });
    $(function() {
        $('.slick_02').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 4000, //オートプレイの切り替わり時間
            speed: 1000,
            accessibility: false,
            arrows: true,
            draggable: false,
            pauseOnHover: false,
            dots: false,
            cssEase: 'ease-in-out',
            prevArrow: '<img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/arrow_mae.png" class="arrow-mae">',
            nextArrow: '<img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/arrow_tsugi.png" class="arrow-tsugi">'
        });
    });
</script>

<?php get_footer(); ?>