<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Olvie
 */

get_header(); ?>

    <!-- Olvie is... -->
    <div id="is_mind_wrap">
        <div id="is_mind_inner">
            <div id="is_mind_title">
                nature mind<br>
                自然の恵みを美しさに繋いでいく。
            </div>
            <div id="is_mind_txt" class="fade">
                Olvie（オルヴィエ）は、<br>
                九州の豊かな自然のある福岡県八女地方で<br>
                除草剤、化学肥料不使用の自社栽培による<br class="sp_inline">オリーブ園で生まれました。<br>
                自然環境を考え、自然本来のおいしさを<br class="sp_inline">生かした水とミネラル豊富な土壌による<br>
                「恵み」のなかで質の高い<br class="sp_inline">オリーブの樹を育てています。<br>
                自然環境を守ることは、<br>
                私たちが未来も美しく豊かな環境で<br class="sp_inline">暮らすことにつながります。<br>
                Olvie（オルヴィエ）は<br class="sp_inline">「自然の恵みを美しさに繋いでいく。」<br>
                ことをビジョンとし、本来の自然の姿を<br>
                大切に残しながら持続可能な<br class="sp_inline">社会に貢献します。<br>
                自然からもたらされる生命力やエネルギーを<br>
                美しさにつないでいきます。
                <div id="is_mind_logo">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_mind_logo.svg" alt="OLvie（オルヴィエ）ロゴ">
                </div>
                オリーブの実をモチーフしたマークです。<br>
                上から下へ落ちているような、<br class="sp_inline">下から上へ吸いあげているような<br class="sp_inline">イメージです。<br>
                人と自然から生まれたオリーブの恵が<br class="sp_inline">美しさを循環させます。
            </div>
        </div>
    </div>

    <div id="is_olive_headline">
        <div id="is_olive_headline_inner" class="fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_olive_title.jpg" alt="OLIVE">
        </div>
    </div>

    <div id="is_olive_wrap">
        <div id="is_olive_inner">
            <div id="is_olive_title">
                豊かな自然の中で除草剤、<br class="sp_inline">化学肥料不使用の<br>
                自社栽培によるオリーブ園
            </div>
            <div id="is_olive_ph" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_olive_ph1.jpg" alt="">
            </div>
            <div id="is_olive_txt">
                <div id="is_olive_txt_1" class="fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_olive_ph2.jpg" alt=""></div>
                <div id="is_olive_txt_2" class="fade">
                    <span>オルヴィエ直営オリーブ園</span>
                    除草剤を使わず、<br class="pc_inline">毎週のように手仕事で<br>
                    草刈りをして土壌を守っています。<br>
                    栽培には化学肥料を<br class="pc_inline">使わず生命力溢れる<br>
                    オリーブを育てています。
                </div>
            </div>
        </div>
    </div>


    <div id="is_herb_headline">
        <div id="is_herb_headline_inner" class="fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_herb_title.jpg" alt="HERB">
        </div>
    </div>

    <div id="is_herb_wrap">
        <div id="is_herb_inner">
            <div id="is_herb_title">
                熊本県南阿蘇<br>
                美しい水と綺麗な大気が<br class="sp_inline">育くむハーブ
            </div>
            <div id="is_herb_ph" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_herb_ph1.jpg" alt="">
            </div>
            <div id="is_herb_txt">
                <div id="is_herb_txt_1" class="fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/is_pc_herb_ph2.jpg" alt=""></div>
                <div id="is_herb_txt_2" class="fade">
                    <span>南阿蘇にある契約ハーブ園</span>
                    世界遺産「阿蘇」の<br>
                    珍しい中硬度（硬度111）の湧き水<br>
                    農薬飛散、排気ガスの影響のない<br>
                    綺麗な大気腐葉土を中心とした有機栽培<br>
                    豊かな自然の恵みの中で、<br>
                    濃厚な香りと色の野性味溢れる<br>
                    ハーブを育てています。
                </div>
            </div>
        </div>
    </div>

<?php while ( have_posts() ) : the_post();//Start the Loop ?>
<?php the_content(); ?>
<?php endwhile;//end of the loop. ?>

<?php get_footer(); ?>