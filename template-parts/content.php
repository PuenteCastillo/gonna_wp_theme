<article class="flex max-w-xl flex-col items-start justify-between  id=" post-<?php the_ID(); ?>">
	<div class="flex items-center gap-x-4 text-xs">
		<time datetime="<?php echo get_the_date('c'); ?>" class="text-gray-500"><?php echo get_the_date(); ?></time>
		<?php the_category(' '); ?>
	</div>
	<div class="group relative">
		<h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
			<a href="<?php the_permalink(); ?>">
				<span class="absolute inset-0"></span>
				<?php the_title(); ?>
			</a>
		</h3>
		<p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?php the_excerpt(); ?></p>
	</div>
	<div class="relative mt-8 flex items-center gap-x-4">
		<?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', array('class' => 'h-10 w-10 rounded-full bg-gray-50')); ?>
		<div class="text-sm leading-6">
			<p class="font-semibold text-gray-900">
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<span class="absolute inset-0"></span>
					<?php the_author(); ?>
				</a>
			</p>
			<p class="text-gray-600"><?php the_author_meta('description'); ?></p>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->