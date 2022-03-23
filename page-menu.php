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

<!-- Salon Menu -->
<div id="salonmenu_top">
    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_top.jpg" alt="" class="pc_inline">
    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_top.jpg" alt="" class="sp_inline">
    <div id="salonmenu_top_txt" class="pc_block">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_top_txt.svg" alt="Original Menu">
    </div>
</div>

<div id="salonmenu_wrap">
    <div id="salonmenu_inner">
        <div id="salonmenu_menubtn">
            <div>
                <a href="#salonmenu_body">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_01.png" class="pc_inline" alt="BODY TREATMENT">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_01.png" class="sp_inline" alt="BODY TREATMENT">
                </a>
            </div>
            <div>
                <a href="#salonmenu_relax">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_02.png" class="pc_inline" alt="RELAXING BODY">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_02.png" class="sp_inline" alt="RELAXING BODY">
                </a>
            </div>
            <div>
                <a href="#salonmenu_reflex">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_03.png" class="pc_inline" alt="REFLEXOLOGY">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_03.png" class="sp_inline" alt="REFLEXOLOGY">
                </a>
            </div>
            <div>
                <a href="#salonmenu_season">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_04.png" class="pc_inline" alt="SEASONAL BREATHING">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_04.png" class="sp_inline" alt="SEASONAL BREATHING">
                </a>
            </div>
            <div>
                <a href="#salonmenu_personal">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_05.png" class="pc_inline" alt="PERSONAL ORDER">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_05.png" class="sp_inline" alt="PERSONAL ORDER">
                </a>
            </div>
            <div>
                <a href="#salonmenu_matanity">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_06.png" class="pc_inline" alt="MATANITY">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_06.png" class="sp_inline" alt="MATANITY">
                </a>
            </div>
            <div>
                <a href="#salonmenu_howto">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_07.png" class="pc_inline" alt="ご予約方法">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_07.png" class="sp_inline" alt="ご予約方法">
                </a>
            </div>
            <div>
                <a href="#salonmenu_caution">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_08.png" class="pc_inline" alt="ご予約時のご注意">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_menubtn_08.png" class="sp_inline" alt="ご予約時のご注意">
                </a>
            </div>
            <div class="pc_block">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_menubtn_09.png" alt="">
            </div>
        </div>

        <div class="salonmenu_herb_dot">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_herb_dot.jpg" alt="">
        </div>

        <div id="salonmenu_body">
            <div id="salonmenu_body_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_body_title.svg" alt="BODY TREATMENT">
            </div>
            <div class="salonmenu_title_copy fade">
                Olvieオリジナルエッセンシャルオイルを使った伝統ある技法を取り入れた独自の手技によって深いリラクセーションと心身のバランスを取り戻すことができるボディトリートメント。仏教用語からインスピレーションをうけた心身のバランスを整えるコースをご用意しました。
            </div>
        </div>
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">GENSE （げんせ）60min</div>
            <div class="salonmenu_price">12,000<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_gense.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_gense.svg" alt="" class="sp_inline">
        </div>
        <div class="salonmenu_caption fade">
            地球のもつ自然のパワーからエネルギーをチャージしていくGENSE （げんせ）
        </div>
        <div class="salonmenu_txt fade">
            健やかな心身を手に入れることができる清涼感をOlvieセラピストによる独自の手技と経験に基づいて正しくサポート、自然がもたらす生命力と様々な植物がつくり出したパワーをブレンドオイルにのせてポジティブでリズム感のある和やかな時間を提供いたします。
        </div>
        <!-- 1 Menu End -->
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">GONJIZE （ごんじぜ）90min</div>
            <div class="salonmenu_price">18,000<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_gonjize.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_gonjize.svg" alt="" class="sp_inline">
        </div>
        <div class="salonmenu_caption fade">
            身体だけでなく心の状態まで軽やかにリリースしていくGONJIZE （ごんじぜ）
        </div>
        <div class="salonmenu_txt fade">
            心身の緊張や不安からくる不調や身体のこわばりをお一人お一人にあわせたOlvieセラピストのアプローチで身体の芯から緩ませ柔軟性のある心の状態に導きます。手から伝わる優しく安心感のあるトリートメントは内側にある意識までもそっと解き放してくれることでしょう。日頃の疲れからくる背中や肩周りを改善する心やすらぐくつろぎのある時間を提供いたします。
        </div>
        <!-- 1 Menu End -->

        <div class="salonmenu_herb_dot">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_herb_dot.jpg" alt="">
        </div>
        <div id="salonmenu_relax">
            <div id="salonmenu_relax_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_relax_title.svg" alt="RELAXING BODY">
            </div>
            <div class="salonmenu_title_copy fade">
                身体の緊張を解き心身のバランスを整えるリラクシングボデイ。Olvieセラピストの優しいタッチと揺らぎを感じる独自の手技で本来の自然で調和のとれた身体に戻っていく軽い感覚を感じられることでしょう。
            </div>
        </div>
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">SHINSE （しんせ）50min</div>
            <div class="salonmenu_price">30min　4,200<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_secondprice">50min　6,800<span>円（税込）</span></div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_shinse.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_shinse.svg" alt="" class="sp_inline">
        </div>
        <div class="salonmenu_caption fade">
            日常の喧騒から離れ、心身のバランスを整えるボディトリートメントSHINSE （しんせ）
        </div>
        <div class="salonmenu_txt fade">
            Olvie（オルヴィエ ）のコンセプトである nature mind （自然の恵みを心から愉しむ）を念頭に深いリラクゼーションを中心としたリラクシングボディ。まるで森林浴をしているような自然の恵みをお客様お一人おひとりにあわせたOlvieセラピストのアプローチで、より良い心身の健康への改善を提供いたします。
        </div>
        <!-- 1 Menu End -->

        <div class="salonmenu_herb_dot">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_herb_dot.jpg" alt="">
        </div>
        <div id="salonmenu_reflex">
            <div id="salonmenu_reflex_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_reflex_title.svg" alt="REFLEXOLOGY">
            </div>
            <div class="salonmenu_title_copy fade">
                20年来ご愛顧いただいた独自の手技を用い、心地よい刺激と深いリラックスをご体験いただけます。24種類の精油からお客様のご体調やお好みにあわせてOlvieセラピストがブレンド。身体の代謝を高めより健康的で美しい心身に導きます。
            </div>
        </div>
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">IBUKI （息吹）</div>
            <div class="salonmenu_price">30min　4,200<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_secondprice">50min　6,800<span>円（税込）</span></div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_ibuki.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_ibuki.svg" alt="" class="sp_inline">
        </div>
        <div class="salonmenu_caption fade">
            日本のこころに満たされる伝統技法とゆったりとしたリズムで<br>
            念入りに足裏をときほぐしていくIBUKI （息吹）
        </div>
        <div class="salonmenu_txt fade">
            足裏から膝下まわりを優しく力強いトリートメントによる刺激が心地のいいリズムとなり心身の緊張や日頃の疲れを解きほぐします。忙しい毎日の中で日常から離れ、優しくあたたかな空間で過ごす時間は目や肌に触れる全てのものが心と身体が安らぐ “時” へ導いてくれます。
        </div>
        <!-- 1 Menu End -->
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">SHIKI （四季）70min</div>
            <div class="salonmenu_price">8,800<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_shiki.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_shiki.svg" alt="" class="sp_inline">
        </div>
        <div class="salonmenu_caption fade">
            Olvieエッセンシャルオイルと季節の植物を取り入れたリフレクソロジーSHIKI（四季）
        </div>
        <div class="salonmenu_txt fade">
            日本古来の技法を取り入れた手技をOlvieセラピストによる長年の経験に基づいた感情を細やかにしてくれる心地よさとタッチングで深いリラクセーションに導きます。優しく温かな気分にさせてくれるチェアに身をゆだねて季節の移ろいに合わせたブレンドオイルが身体と精神、ライフスタイルをより良い方向へ改善していくことが感じられるでしょう。
        </div>
        <!-- 1 Menu End -->
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">KISHIKI （気色）90min</div>
            <div class="salonmenu_price">10,800<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_kishiki.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_kishiki.svg" alt="" class="sp_inline">
        </div>
        <div class="salonmenu_caption fade">
            地球のもつ自然のパワーと季節の植物のエネルギーをチャージするKISIKI （気色）
        </div>
        <div class="salonmenu_txt fade">
            美しく健やかな身体づくりをお一人おひとりに合わせたブレンドエッセンシャルオイルとOlvieセラピスト独自のアプローチにより、大地のエネルギーを感じて頂くことのできるリフレクソロジーです。独自の100％ブレンドオイルは地球にも私達にもポジティブでリズム感のある和やかな時間を提供いたします。Olvieセラピストによるライフスタイル提案や自然の恵みを生かしたセルフケアの方法を提供いたします。
        </div>
        <!-- 1 Menu End -->

        <div class="salonmenu_herb_dot">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_herb_dot.jpg" alt="">
        </div>
        <div id="salonmenu_season">
            <div id="salonmenu_season_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_season_title.svg" alt="SEASON BREATHING">
            </div>
            <div class="salonmenu_title_copy fade">
                Olvieではより良く健康的なライフスタイルを送るために、春、夏、秋、冬の季節の移り変わりに 合わせて様々なメニューのトリートメントプログラムをお客様に提供いたします。九州の豊かな生態系がつくりだした旬の植物ならではの生命力を感じるライフスタイルの体験をお楽しみください。<br>
                <span>（SEASONAL BREATHING は季節により特別メニューをご準備いたします。ご予約メニューにてご確認いただけます。）</span>
            </div>
        </div>

        <div class="salonmenu_herb_dot">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_herb_dot.jpg" alt="">
        </div>
        <div id="salonmenu_personal">
            <div id="salonmenu_personal_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_personal_title.svg" alt="PERSONAL ORDER">
            </div>
            <div class="salonmenu_title_copy salonmenu_txt-mgnbtm30 fade">
                Olvieセラピストがお客様の体調やリクエストに応じてカウンセリング。24種類の精油やオイルで伝統ある手技を組み合わせてアレンジし、お客様だけの特別なパーソナルオーダーでOlvieセラピストが心を添えたトリートメントをお届けします。<br>
                <span>（事前に施術お時間のご指定を頂き、当日にお客様のご要望をお伝えください。 ）</span>
            </div>
        </div>
        <!-- 1 Menu Start -->
        <div class="salonmenu_txt salonmenu_txt-mgnbtm10 fade">
            カウンセリングにてご要望をお伺いし、分数に合わせてセラピストがオリジナルのアレンジをご提供いたします。
        </div>
        <div class="salonmenu_course">
            <div class="salonmenu_name">10min</div>
            <div class="salonmenu_price">1,400<span>円（税込）</span></div>
            <div class="salonmenu_price_subtxt sp_block">30分コースからお受けいただけます。</div>
        </div>
        <div class="salonmenu_spec salonmenu_txt-mgnbtm50 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_personal-1.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_personal-1.svg" alt="" class="sp_inline">
        </div>
        <!-- 1 Menu End -->
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">ボディー （オイル）トリートメントメニュー 10min</div>
            <div class="salonmenu_price">2,000<span>円（税込）</span></div>
            <div class="salonmenu_price_subtxt sp_block">60分コースからお受けいただけます。</div>
        </div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_personal-2.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_personal-2.svg" alt="" class="sp_inline">
        </div>
        <!-- 1 Menu End -->

        <div class="salonmenu_herb_dot">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_herb_dot.jpg" alt="">
        </div>
        <div id="salonmenu_matanity">
            <div id="salonmenu_matanity_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_matanity_title.svg" alt="MATANITY">
            </div>
            <div class="salonmenu_title_copy salonmenu_txt-mgnbtm30 fade">
                妊娠5ケ月の安定期を迎えられたお客様のためのリフレクソロジーメニュー。ご妊娠中に影響のある反射区の刺激を避けマタニティ特有の不調にアプローチします。
            </div>
        </div>
        <!-- 1 Menu Start -->
        <div class="salonmenu_course">
            <div class="salonmenu_name">MATANITY （マタニティー）50min</div>
            <div class="salonmenu_price">6,800<span>円（税込）</span></div>
        </div>
        <div class="salonmenu_spec fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_pc_spec_matanity.svg" alt="" class="pc_inline">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_sp_spec_matanity.svg" alt="" class="sp_inline">
        </div>
        <!-- 1 Menu End -->


        <div id="salonmenu_howto">
            <div id="salonmenu_howto_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_howto_title.svg" alt="ご予約方法">
            </div>
            <div class="salonmenu_howto_txt">
                <span>&#9711;ご予約は、web予約またはお電話で受付けております。</span>
            </div>
            <div class="salonmenu_howto_btn_wrap">
                <div class="salonmenu_howto_btn">
                    <a href="tel:0927332108" class="tel_link">
                        tel:092-733-2108
                    </a>
                </div>
                <div class="salonmenu_howto_btn">
                    <a href="https://randand.pos-s.net/reserve/?shop_cd=1" target="_blank" rel="noopener noreferrer">
                        web予約はこちら
                    </a>
                </div>
            </div>
            <div class="salonmenu_howto_txt">
                <span>&#9711;ご予約受付時間：10時〜19時（営業時間：10時〜20時30分）</span><br>
                <span>&#9711;予約優先（当日のご予約も承ります。当日のご予約はお電話にてお問い合わせください。）</span><br>
                <span>&#9711;ご指名料について</span><br>
                Olvieセラピストのご指名は予約ページよりご予約いただくことができます。 ご指名料金として600円（税込）をいただいております。<br>
                <span>&#9711;ご指名なしでもご予約いただけます。</span>
            </div>
        </div>


        <div id="salonmenu_caution">
            <div id="salonmenu_caution_title">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/salonmenu_caution_title.svg" alt="トリートメントご予約時のご注意">
            </div>
            <div class="salonmenu_caution_txt">
                <span>&#9711;施術をお受け頂けないお客様</span><br>
                お客様のお身体を守るために以下に該当するお客様はトリートメントをお受けいただくことができませんのでご了承ください。<br>
                ・妊娠16週目未満<br>
                ・発熱、頭痛、吐き気、下痢 ・痛みや腫れのあるお怪我(捻挫、骨折、脱臼、やけど、切傷)<br>
                ・経過観察中の病気や怪我、傷<br>
                ・病気を原因とするむくみ、リンパ浮腫<br>
                ・歯科治療中で痛みや腫れのある状態
            </div>
            <div class="salonmenu_caution_txt">
                <span>&#9711;施術時間と所要時間</span><br>
                メニュー表記載の時間は施術時間となります。お客様のお着替え、アフターティーのお時間として10分程プラスした所要時間をお考えください。
            </div>
            <div class="salonmenu_caution_txt">
                <span>&#9711;価格表示</span><br>
                ・表示しております価格は全て消費税10％を含んだ金額です。
            </div>
            <div class="salonmenu_caution_txt">
                <span>○お客様のお着替え</span><br>
                ・リフレクソロジーとボディトリートメント（着衣）メニューではお客様のお着替え用のシャツとパンツをご用意しております。<br>
                ・クリーニング代として１着100円（税込）をいただいております。お気になられる方はお着替え用Tシャツなどをご持参いただくこともできます。
            </div>
            <div class="salonmenu_caution_txt">
                <span>&#9711;ご指名料</span><br>
                Olvieセラピストのご指名は予約ページよりご予約いただくことができます。<br>
                ご指名料金として600円（税込）をいただいております。
            </div>
        </div>
    </div>
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