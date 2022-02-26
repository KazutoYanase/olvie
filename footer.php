<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of <main> and all content after
 *
 * @package olvie
 */
?>
    </main>
    <!-- フッター -->
    <div id="footer">
        <div id="footer_inner">
            <div id="footer_btn_sp" class="sp_block">
                <div><a href="<?= esc_url(home_url('/company/')); ?>">COMPANY</a></div>
                <div><a href="<?= esc_url(home_url('/recruit/')); ?>">RECRUIT</a></div>
            </div>
            <div id="footer_address">Olvie（オルヴィエ）福岡PARCO 本館5F 福岡市中央区天神2丁目11-1</div>
            <div id="footer_copy">Copyright &copy;2021 Olvie All Rights Reserved.</div>
            <div id="footer_btn_pc" class="pc_block">
                <div><a href="<?= esc_url(home_url('/company/')); ?>">COMPANY</a></div>
                <div><a href="<?= esc_url(home_url('/recruit/')); ?>">RECRUIT</a></div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>