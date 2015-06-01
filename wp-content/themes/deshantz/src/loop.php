<div class="container">
	<div class="posts-container">
		<div class="grid-sizer"></div>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php if(is_home()) { query_posts('offset=1&paged=' . $paged); } ?> 
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php 
			$thumb_id = get_post_thumbnail_id($post->ID);
			if(strlen($thumb_id) !== 0) {
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'post-thumbnail', true);
				$thumb_url = $thumb_url_array[0];
			}

			$category = get_the_category($post->ID); 
			?>

			<!-- article -->
			<div class="post-container">
				<?php  ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt'); ?>>
					<h6 class="subtitle post-category"><?php echo $category[0]->cat_name; ?></h6> 
					<?php if(has_post_thumbnail() && isset($thumb_url)): ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink() ?>">
								<img src="<?php echo $thumb_url ?>" />
							</a>
						</div>
					<?php endif; ?>
					<div class="post-content <?php echo (has_post_thumbnail() && isset($thumb_url)) ? '' : 'no-thumbnail'; ?>">
						<h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
						<time class="subtitle" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_date() ?></time>
						<p><?php echo substr(strip_tags($post->post_content), 0, 200);?>...</p>
						<a class="read-more-link" href="<?php the_permalink() ?>">Read more</a>
					</div>
				</article>
			</div>
			<!-- /article -->

		<?php endwhile; ?>
	</div>
</div>

<?php else: ?>

	<!-- article -->
	<article class="container">
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
<script>
  $('.posts-container').isotope({
    // options
    itemSelector: '.post-container',
    percentPosition: true,
    masonry: {
      columnWidth: '.grid-sizer'
    }
  });
</script>
