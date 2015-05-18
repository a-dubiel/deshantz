<?php /* Template Name: Page with Content */ get_header(); ?>
<main role="main">
  <article class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </article>
    <aside class="section-gray section-padding latest-post">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <header class="section-header text-center">
              <h5 class="subtitle">Latest Posts</h5>
            </header>
            <div class="row">
             <?php 
             $latest_post = new WP_Query( array('showposts' => 2, 'ignore_sticky_posts' => true)); 
             while ($latest_post->have_posts()) : $latest_post->the_post();
               $thumb_id = get_post_thumbnail_id($post->ID);
               $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'post-thumbnail', true);
               $thumb_url = $thumb_url_array[0];
               $category = get_the_category($post->ID); 
              
             ?>
             <div class="col-xs-12 col-sm-6 post-container">

              <article class="post-excerpt">
                <h6 class="subtitle post-category"><?php echo $category[0]->cat_name; ?></h6> 
                <div class="post-thumbnail">
                  <a href="<?php the_permalink() ?>">
                    <img src="<?php echo $thumb_url ?>" />
                  </a>
                </div>
                <div class="post-content">
                  <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                  <time class="subtitle" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_date() ?></time>
                  <p><?php echo substr(strip_tags($post->post_content), 0, 200);?>...</p>
                  <a class="read-more-link" href="<?php the_permalink() ?>">Read more</a>
                </div>
                
              </article>
            </div>
          <?php endwhile;?>

        </div>
      </div>
    </div>
  </div>
</aside>
</main>
<?php get_footer(); ?> 