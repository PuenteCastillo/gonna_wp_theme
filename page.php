<?php
get_header();
?>

<div class="flex flex-wrap container m-auto p-10">
	<aside id="secondary" class="w-full md:w-1/4 p-4">
		<?php
		get_sidebar();
		?>
	</aside>
	<main id="primary" class="site-main w-full md:w-3/4 p-4 min-h-screen">

		<?php
		if (have_posts()) :

			if (is_home() && !is_front_page()) :
		?>

				<div class="bg-blue-500 p-4">
					<h1 class="text-white text-center text-2xl md:text-4xl"><?php single_post_title(); ?></h1>
				</div>
		<?php
			endif;

			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
				get_template_part('template-parts/content', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->


</div>

<?php
get_footer();
