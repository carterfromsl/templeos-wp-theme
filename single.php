<?php get_header(); ?>

	<div id="post">
		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post-content">
					
						<h1 class="title"><?php the_title(); ?></h1>
						<div class="post-meta">
							<span class="post-date"><?php the_time('m/d/Y');  ?></span> <span class="post-time"><?php the_time('H:i:s');  ?></span> <span class="post-author">
							<?php $mykey_values = get_post_custom_values( 'tos_author' );
							foreach ( $mykey_values as $key => $value ) {
								echo "Author: <strong>$value</strong>"; 
							} ?></span> <span class="post-id">//ID: <?php $post_id = get_the_ID(); echo $post_id; ?></span>
						</div>
						
						<div class="post-body">
							<?php the_content(); ?>
							
							<div class="delimiter"></div>

							<?php wp_link_pages(); ?>
						</div>
			
					</article>
					
			
				<?php endwhile; ?>
				
				<?php if ( comments_open() || '0' != get_comments_number() )
				comments_template( '', true );
				?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">404: NULL ADDRESS</h1>
				</article>

			<?php endif; ?>
			
		</div>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
