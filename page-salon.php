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

    <!-- Salon -->
    <div id="Salon_top">
        <div id="Salon_top_bg">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_img_pc.jpg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_img_sp.jpg" alt="" class="sp_inline">
        </div>
        <div id="Salon_top_txt" class="pc_block">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_txt_pc.svg" alt="Original Menu">
        </div>
    </div>

    <div id="Salon_sp__menu" class="sp_block">
        <div>
            <a href="#Salon_concept">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_btn_sp_01.png" alt="Concept">
            </a>
        </div>
        <div>
            <a href="#Salon_originalmenu">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_btn_sp_02.png" alt="Original Menu">
            </a>
        </div>
        <div>
            <a href="#Salon_originalmenu_btn">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_btn_sp_03.png" alt="ご予約">
            </a>
        </div>
        <div>
            <a href="#Salon_news">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_top_btn_sp_04.png" alt="News">
            </a>
        </div>
    </div>

    <div id="Salon_concept">
        <div id="Salon_concept_box01">
            <div id="Salon_concept_box01_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_title.svg" alt="Concept">
            </div>
            <div id="Salon_concept_box01_txt" class="fade">
                オルヴィエの直営サロン、<br class="sp-inline">ナチュラルリフレックス。<br>
                自然に還るという意味を持ちます。<br>
                ナチュラルリフレックスは九州福岡で<br class="sp-inline">1999年7月に誕生しました。<br>
                オリーブとアロマとフレッシュハーブの<br class="sp-inline">自然の恵みの潤いと癒しを<br>
                あたたかく優しいセラピストの<br class="sp-inline">タッチでお届けしています。
            </div>
        </div>
        <div id="Salon_concept_box02">
            <div id="Salon_concept_box02-top" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_ph-1.jpg" alt="">
            </div>
            <div id="Salon_concept_box02-mid" class="fade">
                オリーブの木や、オリーブ色、木目素材を使用したゆっくり<br class="pc_inline">リラックスできる空間でお寛ぎください。
            </div>
            <div id="Salon_concept_box02-btm" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_ph-2.jpg" alt="">
            </div>
        </div>
        <div id="Salon_concept_box03">
            <div id="Salon_concept_box03-pc01" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_ph-3_pc.jpg" alt="">
            </div>
            <div id="Salon_concept_box03-pc02" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_ph-4_pc.jpg" alt="">
            </div>
        </div>
        <div id="Salon_concept_box04" class="fade">
            都会にいながら<br>
            季節の移り変わりを感じられる<br>
            トリートメントコースや<br>
            20年以上ご愛顧いただいた伝統的な独自の<br>
            手技を組み込んだOlvieセラピストの<br>
            施術で心身ともにリラックスできる潤いと<br>
            癒しのひとときをお過ごしください。
        </div>
        <div id="Salon_concept_box05">
            <div id="Salon_concept_box05-top" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_ph-6.jpg" alt="">
            </div>
            <div id="Salon_concept_box05-mid" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_concept_ph-5.jpg" alt="">
                <div id="Salon_concept_box05-btm" class="fade">
                    豊かな自然の中で除草剤、化学肥料不使用のオルヴィエ直営オリーブ園でつくられたオルヴィエ フェイシャルソープや、美容オイルなどの商品も取り揃えております。
                </div>
            </div>
        </div>
    </div>

    <div id="Salon_originalmenu">
        <div id="Salon_originalmenu_title">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_originalmenu_title.svg" alt="Original Menu">
        </div>
        <div id="Salon_originalmenu_txt" class="fade">
            Oliveセラピストによる<br class="sp_inline">トリートメントは、<br>
            １年を通して季節ごとの<br class="sp_inline">お客様に合わせたトリートメントコース。<br>
            自然からの生命力によってもたらされる<br class="sp_inline">健康的なライフスタイルを<br class="sp_inline">お届けしています。
        </div>
        <div id="Salon_originalmenu_btn">
            <div class="Salon__btn">
                <a href="<?= esc_url(home_url('/menu/')); ?>">
                    メニューを見る
                </a>
            </div>
            <div class="Salon__btn">
                <a href="https://randand.pos-s.net/reserve/?shop_cd=1" target="_blank" rel="noopener noreferrer">
                    ご予約はこちら
                </a>
            </div>
        </div>
    </div>

    <div id="Salon_news">
        <div id="Salon_news_copy">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salon_news_title.svg" alt="News">
        </div>
        
        
        <?php
         $args = array(
          'posts_per_page' => 5, //出力する記事数
          'post_status' => 'publish', //公開の記事だけ
          'post_type' => 'news', //カスタム投稿slag
          'orderby' => 'date', //日付を出力する基準
          'order' => 'DESC' //表示する順番（逆はASC）
                                
         );
                                
         $the_query = new WP_Query( $args );
         if ( $the_query->have_posts() ) :
         ?>
                        
         <?php global $previousday; //この表記と$previousday = '';で同じ日付の投稿でも表示される
           while ( $the_query->have_posts() ) : $the_query->the_post();
           $previousday = '';
         //-------- ここから繰り返し---------- 
         ?>
        
        
        
        <div class="Salon_news_date">
            <?php echo get_post_time("Y/n/j"); ?>
        </div>
        <div class="Salon_news_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        
        
        <?php //-------- 繰り返しここまで-----------
         endwhile; ?>
                        
         <?php //-------- WP_query終了-----------
                     wp_reset_postdata();      
         endif; ?>
        
        
        
        
    </div>

    <div id="salonmenu_rsvbtn">
        <a href="https://randand.pos-s.net/reserve/?shop_cd=1" target="_blank" rel="noopener noreferrer">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_reservation_btn.png" alt="ご予約はこちら">
        </a>
    </div>

<?php while ( have_posts() ) : the_post();//Start the Loop ?>
<?php the_content(); ?>
<?php endwhile;//end of the loop. ?>

<?php get_footer(); ?>