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

<!-- RECURUIT -->
    <div id="rct_copy">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/rct_copy.svg" alt="RECRUIT 採用情報">
    </div>
    
    <div id="rct_greeting" class="fade">
        はじめまして<br>
        当社にご興味を持って頂きありがとうございます。<br>
        当社は、福岡県八女地区にある直営オリーブ園で栽培したオリーブ、<br>
        南阿蘇の契約ハーブ園で栽培したハーブをもとに<br>
        スキンケアプロダクトやフレッシュハーブをつくっています。<br>
        そのプロダクトを20年来の祖業であるアロマテラピーサロンにてトリートメントに使ったり<br>
        ハーブティに使うことによりお客様の健康と美しさにお役立て頂いております。<br>
        自然の恵みの潤いと癒しを温かく優しい手でお客様にお届けする。<br>
        自然の恵みを美しさに繋いでいく。<br>
        オルヴィエを世界の方々にお届けしたく<br>
        ご一緒にこのブランドを育て成長していただける方を募集しております。<br>
        どうぞお気軽にお問い合わせくださいますようご案内申し上げます。
        <div id="rct_greeting_sign">
            株式会社ランドアンドヒューマン<br>
            <span>代表取締役</span>　安永大志
        </div>
    </div>
    
    
    <div class="rct_flow_title">
        ご応募から採用までの流れ
    </div>
    <div class="rct_under">
        <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/rct_underline.svg" alt="">
    </div>
    <div id="rct_flow">
        <dl class="rct_box">
            <dt class="rct_title fade">①メールまたはお電話にてお問い合わせください。</dt>
            <dd class="rct_txt fade">
                通年採用をしておりますが、定員の関係で募集をしている時期と<br class="pc_inline">
                募集をしていない時期がございます。お気軽にお問い合わせください。
            </dd>
        </dl>
        <dl class="rct_box">
            <dt class="rct_title fade">②店舗見学</dt>
            <dd class="rct_txt fade">
                スタッフが店舗見学のご案内を致します。<br>
                実際に勤務頂く店舗をご覧になりながら募集条件、勤務内容をご説明します。<br>
                ご不安な点もできる限りスタッフがご説明いたします。
            </dd>
        </dl>
        <dl class="rct_box">
            <dt class="rct_title fade">③正式応募</dt>
            <dd class="rct_txt fade">
                店舗見学ののちに正式応募をご希望される方は履歴書をお送りください。<br>
                履歴書の受理をもって正式応募の受付といたします。
            </dd>
        </dl>
        <dl class="rct_box">
            <dt class="rct_title fade">④採用試験について</dt>
            <dd class="rct_txt fade">
                セラピスト職の方は面接、適性試験、技術試験、<br>
                販売職の方は面接、適性試験を実施しております。
            </dd>
        </dl>
        <dl class="rct_box">
            <dt class="rct_title fade">⑤内定と採用</dt>
            <dd class="rct_txt fade">
                内定された方でご希望の方については、技術研修、接客販売研修など安心してスムースに業務を進めて頂くための研修を実施しています。（任意参加）<br>
                ※お問い合わせから採用まで約１ケ月～２ケ月の期間をお考えください。
            </dd>
        </dl>
    </div>


<div class="rct_flow_title">
    採用についての<br class="sp_inline"><br class="sp_inline">お問い合わせ先
</div>
<div class="rct_under">
    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/rct_underline.svg" alt="">
</div>
<div class="rct_tel fade">
    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/rct_tel.svg" alt="TEL 092-733-2108">
</div>
<div class="rct_mail fade">
    <img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/rct_mail.svg" alt="MAIL official@olvie.jp">
</div>
<div class="rct_name fade">
    オルヴィエ福岡パルコ店<span>（担当 齋藤）</span>
</div>

<?php while ( have_posts() ) : the_post();//Start the Loop ?>
<?php the_content(); ?>
<?php endwhile;//end of the loop. ?>

<?php get_footer(); ?>