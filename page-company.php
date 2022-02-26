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

<!-- COMPANY -->
    <div id="comp_copy">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/comp_copy.svg" alt="COMPANY PROFILE 会社案内">
    </div>
    <div id="comp_wrap">
        <dl class="comp_box">
            <dt class="comp_title">会社名</dt>
            <dd class="comp_txt">株式会社ランドアンドヒューマン</dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">本社</dt>
            <dd class="comp_txt">
                〒810-0001 <br class="sp_inline">福岡県福岡市中央区天神2丁目3番36号　<br class="sp_inline">ibb fukuoka5F<br>
                TEL092-762-2033 FAX092-762-5779
            </dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">事業所</dt>
            <dd class="comp_txt">
                ・オルヴィエ　福岡パルコ店<br>
                  〒810-0001 <br class="sp_inline">福岡県福岡市中央区天神2丁目11ー1　<br class="sp_inline">福岡PARCO本館5F<br>
                  TEL＆FAX 092-733-2108<br>
                ・グランデスパOTOZURE<br>
                   〒759-4103 <br class="sp_inline">山口県長門市深川湯本2208　大谷山荘別邸音信内<br>
                ・オルヴィエ直営オリーブ農園<br>
                  〒833-0007 福岡県筑後市鶴田254-1
            </dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">事業内容</dt>
            <dd class="comp_txt">
                アロマトリートメントサロン及びスパの運営<br>
                オリーブ・ハーブ製品の製造販売<br>
                ホテル・旅館業務用アメニティの卸販売
            </dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">役員</dt>
            <dd class="comp_txt">
                代表取締役　安永大志<br>
                取締役　村田真理子<br>
                取締役　山戸隆由<br>
                監査役　中野武志<br>
                監査役　岡部隆司
            </dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">資本金</dt>
            <dd class="comp_txt">3500万円</dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">設立</dt>
            <dd class="comp_txt">平成9年3月24日</dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">取引銀行</dt>
            <dd class="comp_txt">福岡銀行博多駅前支店　<br class="sp_inline">西日本シティ銀行平尾支店　<br class="sp_inline">商工中金福岡支店</dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">所属団体</dt>
            <dd class="comp_txt">公益社団法人日本アロマ環境協会　<br class="sp_inline">NPO法人日本スパ振興協会</dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">主な社歴</dt>
            <dd class="comp_txt">
                平成11年7月　<br class="sp_inline">ナチュラルリフレックス　イムズ店開業<br>
                平成12年6月　<br class="sp_inline">ナチュラルリフレックス　博多店開業<br>
                平成18年12月　 <br class="sp_inline">グランデスパOTOZURE（大谷山荘別邸音信内）開業<br>
                平成30年3月　<br class="sp_inline">オルヴィエ直営オリーブ農園開設<br>
                令和3年9月　<br class="sp_inline">オルヴィエ　福岡パルコ店開業
            </dd>
        </dl>
        <dl class="comp_box">
            <dt class="comp_title">主な受賞歴</dt>
            <dd class="comp_txt">
                全日本DM大賞受賞（2000年）<br class="sp_inline">ナチュラルリフレックスDMシリーズ<br>
                日本タイプグラフィー賞受賞（2020年）<br class="sp_inline">オルヴィエ　ロゴタイプ
            </dd>
        </dl>
    </div>

<?php while ( have_posts() ) : the_post();//Start the Loop ?>
<?php the_content(); ?>
<?php endwhile;//end of the loop. ?>

<?php get_footer(); ?>