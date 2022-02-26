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

    <!-- Item SP Navi -->
    <div id="item_spnav_wrap" class="sp_block">
        <div><a href="#item_soap"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_nav_01.jpg" alt="Soap"></a></div>
        <div><a href="#item_oil"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_nav_02.jpg" alt="Skin Oil"></a></div>
        <div><a href="#item_herb"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_nav_03.jpg" alt="Olive & Fresh Herb"></a></div>
        <div><a href="#item_aroma"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_nav_04.png" alt="Aroma Oil"></a></div>
    </div>
    <!-- Item Soap -->
    <div id="item_soap">
        <div id="item_soap_title"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_title.svg" alt="Soap"></div>
        <div id="item_soap_copy" class="fade">
            九州の豊かな自然環境の<br class="sp_inline">恵みがギュッと詰まった<br>
            エキストラバージンオイルによる<br>
            植物の生命力を最大限いかした<br class="sp_inline">Olvieプロダクト。
        </div>
        <div id="item_soap_ph" class="fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_ph-1.jpg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_soap_ph-1.jpg" alt="" class="sp_inline">
        </div>
        <div id="item_soap_caption_wrap">
            <div id="item_soap_caption_ph" class="fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_ph-2.jpg" alt=""></div>
            <div id="item_soap_caption_inner">
                <div id="item_soap_caption_txt" class="fade">
                    九州の自社農園で育てたオリーブの葉で、試行錯誤を繰り返し、独自製法によって泡立ちよく上質でフレッシュなソープを仕上げることができました。お手元に届くまでクオリティの高いソープの心地よい使用感をお楽しみいただけます。
                </div>
                <div id="item_soap_caption_btn-1" class="fade">
                    <a href="https://olvie.shop/" target="_blank" rel="noopener noreferrer">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_btn-1.png" alt="ご購入はこちら">
                    </a>
                </div>
                <!--
                <div id="item_soap_caption_btn-2" class="fade">
                    <a href="https://shop.olvie.jp/ua11100a/" target="_blank" rel="noopener noreferrer">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_btn-2.png" alt="Olvie Soap Special site">
                    </a>
                </div>
            -->
            </div> 
        </div>
    </div>
    <!-- Item Oil -->
    <div id="item_oil">
        <div id="item_oil_title">
            <div id="item_oil_title_leaf" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_leaf.jpg" alt="">
            </div>
            <div id="item_oil_title_txt">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_title.svg" alt="Skin Oil">
            </div>
            <div id="item_oil_title_copy" class="fade">
                13種類のオイルと香り高い精油を<br class="sp_inline">ブレンドしたフィト（植物）オイル。<br>
                植物の持つ生命力と<br class="sp_inline">フレッシュな癒しの<br class="sp_inline">エネルギーをお届けします。
            </div>
        </div>
        <div id="item_oil_ph" class="fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_ph-1.jpg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_oil_ph-1.jpg" alt="" class="sp_inline">
        </div>
        <div id="item_oil_caption">
            <div id="item_oil_caption_txt" class="fade">
                香り、テクスチャーともに20年以上の経験を持つOlvieセラピストが開発に携わり完成したこだわりのスキンオイルです。フレッシュな九州産エキストラバージンオイルを使用しフランキンセンスをベースとした潤いと癒しのフィト（植物）オイル。揺らぎやすい大人のお肌に安心してお使い頂けます。
                <div id="item_oil_caption_btn" class="fade">
                    <a href="https://olvie.shop/items/5e8c4a9c2a9a4225e0fa12dd" target="_blank" rel="noopener noreferrer">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_btn-1.png" alt="ご購入はこちら">
                    </a>
                </div>
            </div>
            <div id="item_oil_caption_ph">
                <div id="item_oil_caption_ph-front" class="fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_ph-2.jpg" alt="" class="pc_inline">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_oil_ph-2.jpg" alt="" class="sp_inline">
                </div>
                <div id="item_oil_caption_ph-back">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_ph-3.jpg" alt="" class="pc_inline">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_oil_ph-3.jpg" alt="" class="sp_inline">
                </div>
            </div>
        </div>
    </div>
    <!-- Item Herb -->
    <div id="item_herb">
        <div id="item_herb_title">
            <div id="item_herb_title_leaf" class="sp_block">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_leaf.jpg" alt="">
            </div>
            <div id="item_herb_title_txt">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_herb_title.svg" alt="Oil & Fresh Herb" class="pc_inline">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_herb_title.svg" alt="Oil & Fresh Herb" class="sp_inline">
            </div>
            <div id="item_herb_title_copy" class="fade">
                美しい水と爽やかな大気が溢れる<br class="sp_inline">南阿蘇で育ったフレッシュハーブ。<br>
                朝摘みした新鮮なハーブを<br class="sp_inline">お届けしています。
            </div>
        </div>
        <div id="item_herb_ph" class="fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_herb_ph-1.jpg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_herb_ph-1.jpg" alt="" class="sp_inline">
        </div>
        <div id="item_herb_caption">
            <div id="item_herb_caption_ph" class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_herb_ph-2.jpg" alt="" class="pc_inline">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_herb_ph-2.jpg" alt="" class="sp_inline">
            </div>
            <div id="item_herb_caption_txt">
                <div id="item_herb_caption_txt-top" class="fade">
                    南阿蘇から季節に合わせた旬のハーブをOlvie店頭にてお届けしています。何年もかけてつくりあげた豊かな土壌で育ったハーブは香りが素晴らしく栄養たっぷりです。生命力溢れる美しいハーブをご自宅でお楽しみください。
                </div>
                <div id="item_herb_caption_txt-mid" class="fade">
                    フレッシュハーブは店頭にて<br>
                    ご覧ください。
                </div>
                <div id="item_herb_caption_txt-btm" class="fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_herb_ph-3.jpg" alt="" class="pc_inline">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_herb_ph-3.jpg" alt="" class="sp_inline">
                </div>
            </div>
        </div>
    </div>
    <!-- Item Aroma -->
    <div id="item_aroma">
        <div id="item_aroma_title">
            <div id="item_aroma_title_leaf" class="sp_block">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_oil_leaf.jpg" alt="">
            </div>
            <div id="item_aroma_title_txt">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_aroma_title.svg" alt="Aroma Oil">
            </div>
            <div id="item_aroma_title_copy" class="fade">
                日本で採れたハーブや植物を中心とした<br class="sp_inline">エッセンシャルオイルづくりを<br class="sp_inline">すすめています。<br>
                華やかで濃厚な植物のチカラを<br class="sp_inline">詰め込んだエッセンスを<br class="sp_inline">お楽しみください。
            </div>
        </div>
        <div id="item_aroma_ph">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_aroma_ph-1.jpg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_sp_aroma_ph-1.jpg" alt="" class="sp_inline">
        </div>
        <div id="item_aroma_item_txt">
            <div id="item_aroma_item_name">
                KUROMOJI<br>
                エッセンシャルオイル（精油）
            </div>
            日本の里山に自生している黒文字（クロモジ）の枝と葉から抽出した貴重なエッセンシャルオイル
            <div id="item_aroma_item_btn">
                <a href="https://olvie.shop/items/61f09a95acbcb04b62442cb5" target="_blank" rel="noopener noreferrer">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/item_pc_soap_btn-1.png" alt="ご購入はこちら">
                </a>
            </div>
        </div>
    </div>

<?php while ( have_posts() ) : the_post();//Start the Loop ?>
<?php the_content(); ?>
<?php endwhile;//end of the loop. ?>

<?php get_footer(); ?>