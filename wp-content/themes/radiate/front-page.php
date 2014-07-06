<?php
/**
 * The template file to show the front page display.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>

	<?php
	$page_array = array( get_theme_mod( 'page-setting-one' ), get_theme_mod( 'page-setting-two' ), get_theme_mod( 'page-setting-three' ) );
	$get_featured_pages = new WP_Query( array(
				'posts_per_page' 			=> 3,
				'post_type'					=> array( 'page' ),
				'post__in'		 			=> $page_array,
				'orderby' 		 			=> 'post__in',
				'ignore_sticky_posts' 	=> 1 					
			));
	?>
	<div id="featured_pages" class="clearfix">
		<?php
		$j = 1;
		while ( $get_featured_pages->have_posts() ) : 
			$get_featured_pages->the_post();
			if( $j % 2 == 1 && $j > 1 ) { $page_class = "tg-one-third tg-one-third-last"; }	
			else { $page_class = "tg-one-third"; }				
			?>
			<div class="<?php echo $page_class; ?>">				
				<div class="page_text_container">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<h1 class="entry-title"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_excerpt(); ?><a class="more-link" title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php _e( 'Read more','radiate' ); ?></a>
				</div>					
			</div>
			<?php $j++;
		endwhile; 
		wp_reset_postdata();
		?>
	</div>

	<!-- Slide show -->
	<?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>

	<div class="recent-posts-container">
		<h2 class="recent-posts-header">
			<span>
				Les petits derniers
			</span>
		</h2>
		<!-- Recent posts -->
		<?php 

		$args = array( 'numberposts' => '3');
		echo "<ul class='recent-posts'>";
	    $recent_posts = wp_get_recent_posts($args);
		foreach( $recent_posts as $recent ){
			// get datas
			$post_id = $recent["ID"];
			$post_link = get_permalink($post_id);
			$post_title = $recent["post_title"];
			$post_date = get_the_time('d F Y', $post_id);
			$post_pic = get_the_post_thumbnail($recent["ID"]);
			$post_cat = get_the_category($recent["ID"]);
			$post_cat = $post_cat[0]->cat_name;
			echo "
				<li>
					<figure class='post-thumb'>
						<a href='$post_link' title='$post_title'>
							$post_pic
						</a>
					</figure>
					<div class='popular-post-info'>
						<p class='recent-post-header'>
							$post_cat
						</p>
						<a class='recent-post-link' href='$post_link' title='$post_title'>
							$post_title
						</a>
					</div>

				</li>";
			
		}
		echo "</ul>";

		?>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php radiate_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
