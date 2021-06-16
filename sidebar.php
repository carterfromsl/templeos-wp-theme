<?php ?>
<aside class="sidebar">
		<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
			<div id="%1$s" class="widget %2$s">
				<h2 class="side-title"><?php _e( 'Archives' ); ?></h2>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</div>

			<div id="%1$s" class="widget %2$s">
				<h2 class="side-title"><?php _e( 'Meta' ); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</div>

		<?php endif; ?>
</aside>