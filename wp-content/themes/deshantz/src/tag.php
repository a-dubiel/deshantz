<?php get_header(); ?>

	<main role="main">
    <!-- blog navigation -->
    <div class="blog-bar hidden-xs">
      <div class="container">
        <nav class="blog-nav">
          <ul>
            <li class="<?php echo is_home() ? 'current-cat' : '' ?>"><a href="<?php echo site_url() ?>/blog">Latest Posts</a></li>
            <?php wp_list_categories(array('title_li' => false, 'depth' => 1, 'current_category' => null, 'number' => 4, 'exclude' => 1 )); ?>
          </ul>
        </nav> 
        <div class="search-form">
            <form class="search" method="get" action="<?php echo site_url() ?>" role="search">
              <input class="search-input" type="search" name="s" placeholder="Search">
              <i class="fa fa-search"></i>
              <button class="search-submit" type="submit" role="button">Search</button>
            </form>
        </div>  
      </div>
    </div>
    <!-- /blog navigation -->
		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
