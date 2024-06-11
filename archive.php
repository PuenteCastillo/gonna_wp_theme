<?php
get_header();
?>

<div class="flex flex-wrap container m-auto p-10">

	<main id="primary" class="site-main w-full md:w-3/4 p-4 min-h-screen">
		<div class="bg-white py-24 sm:py-32">
			<div class="mx-auto max-w-7xl px-6 lg:px-8">
				<div class="mx-auto max-w-2xl lg:mx-0">
					<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
					<p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
				</div>
				<div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

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

				</div>
			</div>
		</div>

	</main><!-- #main -->

	<aside id="secondary" class="w-full md:w-1/4 p-4">
		<?php
		get_sidebar();
		?>
	</aside>
</div>

<?php
get_footer();
