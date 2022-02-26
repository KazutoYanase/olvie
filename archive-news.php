<?php
/**
 * The template for displaying archive pages.
 *
 * @package Olvie
 */

get_header(); ?>

<div class="news">


	

	
	


<!-- NEWS -->
	<div id="news_top">
		<div id="news_top_bg" class="pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/news_pc_top.jpg" alt=""></div>
		<div id="news_top_txt" class="pc_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/news_pc_topover.svg" alt="Olvie News"></div>
		<div id="News_sp_top" class="sp_block"><img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/news_sp_top.jpg" alt="Olvie News"></div>
	</div>


	
	
<div id="news_wrap">
	<div id="news_inner">
		<h1 id="news_title">
			<img src="<?= esc_url(get_template_directory_uri()); ?>/common/images/news_pc_title.png" alt="オルヴィエ サロン ニュース">
		</h1>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();//Start the Loop ?>
				<section class="news_txt_wrap" id="news__01">
					<div class="news_txt_date"><?php echo get_post_time("Y/n/j"); ?></div>
					<h2 class="news_txt_title"><?php the_title(); ?></h2>
					<div class="news_txt_text">
						<?php the_content(); ?>
					</div>
				</section>
			<?php endwhile; ?>

		<?php else: ?>
			<div class="msg">お知らせはありません。</div>
		<?php endif; ?>	
		
		<div class="pager">
			<?php if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
		</div>
		
		<?php
		global $wp_query;
		$args = array_merge( 
			$wp_query->query, 
			array( 
				'paged' => $paged, 
			) 
		);
		query_posts( $args );
		?>
		
	</div>
</div>
	
	
	
	
	
	
	
	
</div>

<?php get_footer(); ?>