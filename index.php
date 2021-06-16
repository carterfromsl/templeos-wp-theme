<?php get_header(); ?>
	
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="post-wrap">
				
				<h1 class="post-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
						
				<div class="post-meta">
					<span class="post-date"><?php the_time('m/d/Y');  ?></span> <span class="post-author">
						<?php $mykey_values = get_post_custom_values( 'tos_author' );
						foreach ( $mykey_values as $key => $value ) {
							echo "Author: <strong>$value</strong>"; 
						} ?></span> <span class="post-id">//ID: <?php $post_id = get_the_ID(); echo $post_id; ?></span>
					
						<?php if( comments_open() ) : ?>
							<span class="comments-link">
								<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
							</span>
						<?php endif; ?>
					
				</div>
				
				<div class="post">
					
					<?php the_content( 'Continue...' ); ?>
							
					<?php wp_link_pages(); ?>
				</div>
						
			</article>

			<div class="delimiter"></div>

		<?php endwhile; ?>
				
			<div id="pagination" class="clearfix">
				<div class="past-page"><?php previous_posts_link( 'newer' ); ?></div>
				<div class="next-page"><?php next_posts_link( 'older' ); ?></div>
			</div>


		<?php else : ?>
				
			<article class="post error">
				<h1 class="404">404: NULL ADDRESS</h1>
			</article>

		<?php endif; ?>

<?php get_footer(); ?>