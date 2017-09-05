<?php get_header(); ?>

	<section class="box-content">
		<div class="container">

			<?php
				while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content-seguimentos' ); ?>

				<?php endwhile;
			?>

		</div>
	</section>

<?php get_footer(); ?>