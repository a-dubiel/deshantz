<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<main role="main">
	  <!-- blog navigation -->
  <div class="blog-bar blog-bar-single">
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                  <div class="pull-right">
                    <span class="comment-link"><b><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Add Comment', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></b> <i class="fa fa-comment"></i></span>
                    <span  class="share-links"><b>Share</b> <a href="#" data-vendor="fb" data-url="<?php the_permalink() ?>"><i class="fa fa-facebook"></i></a> <a href="#" data-vendor="tw" data-url="<?php the_permalink() ?>"><i class="fa fa-twitter"></i></a></span>
                  </div>
                  <div class="pull-left">
                    <span class="author">By <b><?php the_author(); ?></b></span>
                  </div>
          </div>
        </div>
      </div>
  </div>
  <!-- /blog navigation -->
	<!-- section -->
	<section>



		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<div class="row">
        	<div class="col-xs-12 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
        			<?php the_content(); // Dynamic Content ?>

        			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

        			<p class="subtitle"><?php _e( 'Category: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

        			<div class="edit-link">
                <?php edit_post_link('Edit this post'); ?> 
              </div>
					</div>
				</div>
			</div>

			<?php comments_template(); ?>
		
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
