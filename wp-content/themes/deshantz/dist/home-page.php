<?php /* Template Name: Home Page */ get_header(); ?>

<!-- about -->
<section class="home-section">
 <div class="box box-image visible-xs" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-about.jpg') "></div>
 <div class="box box-text">
  <div class="box-content">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <a href="<?php echo get_permalink( get_page_by_path( 'about' ) )?>" class="read-more-link">Read the story</a>
  </div>
</div>
<a href="<?php echo get_permalink( get_page_by_path( 'about' ) )?>" class="overlay-link"><div class="box box-image hidden-xs" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-about.jpg') ">
 <div class="box-image-overlay"><span>Read The Story</span></div></div></a>
</section>
<!-- /about -->   

<!-- latest post -->
<section class="home-section">
  <?php 
  $latest_post = new WP_Query( 'showposts=1' ); 
  while ($latest_post->have_posts()) : $latest_post->the_post();
  $thumb_id = get_post_thumbnail_id($post->ID);
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
  $thumb_url = $thumb_url_array[0];
  ?>

  <a class="overlay-link" href="<?php the_permalink() ?>">
    <div class="box box-image" style="background-image: url('<?php echo $thumb_url ?>') ">
      <div class="box-image-overlay"><span>Read More</span></div>
    </div>
  </a>
  <div class="box box-text">
    <article class="box-content">
      <small class="subtitle">From the blog</small> 
      <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <p class="intro-paragraph"><?php echo substr(strip_tags($post->post_content), 0, 200);?>...</p>
      <footer class="box-author-meta">
        <?php if(get_the_author_meta('email') == 'lelli.tamara@gmail.com'): ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/rick-avatar.png" class="avatar" alt="Rick Deshantz" />
        <?php else: ?>
          <?php echo get_avatar(get_the_author_meta('email'), 50) ?>
        <?php endif; ?>
        <p>By <?php the_author() ?> <br /><?php the_date() ?></p>
      </footer>
      <a href="<?php the_permalink() ?>" class="read-more-link">Read more</a>

    </article>
  </div> 
<?php endwhile;?>
</section>
<!-- /about -->

<!-- social -->
<section class="home-section">
  <div class="box-twitter">
    <div class="twitter-content">
      <div class="twitter-container">
        <a href="http://www.twitter.com/richarddeshantz" target="_blank">
          <small class="subtitle">Twitter</small>
          <h5 class="title"><i class="fa fa-twitter"></i>richarddeshantz</h5>
        </a>
        <?php echo do_shortcode('[tweets max=1 user=richarddeshantz]') ?>
      </div>
    </div>
  </div>
  
  <div class="box-instagram" id="instafeed">
    <div class="box-instagram-title">
      <a href="https://www.instagram.com/richard_deshantz" target="_blank">
        <small class="subtitle">Instagram</small>
        <h5 class="title"><i class="fa fa-instagram"></i> richard_deshantz</h5>
      </a>
    </div>
  </div>

</section>
<!-- /social -->

<!-- restaurants -->
<section class="home-section text-center">
  <header class="section-header-center">
    <small class="subtitle">Restaurants</small>
    <h3 class="title">Here is a nice and inviting headline about Rick’s restaurants and the accolades.</h3>
  </header>
  
  <h6 class="subtitle text-center">As featured on</h6>
  <ul class="logo-list">
    <li><a href="#" class="logo-cooking">Cooking Channel</a></li>
    <li><a href="#" class="logo-esquire">Esquire</a></li>
    <li><a href="#" class="logo-foodwine">Food and Wine</a></li>
    <li><a href="#" class="logo-huffington">Huffington Post</a></li>
    <li><a href="#" class="logo-pittsburghmag">Pittsburgh Mag</a></li>
    <li><a href="#" class="logo-yahoo">Yahoo Travel</a></li>
    <li><a href="#" class="logo-thrillist">Thrillist</a></li>
    <li><a href="#" class="logo-travel">Travel Channel</a></li>
    <li><a href="#" class="logo-trib">Trib Live</a></li>
    <li><a href="#" class="logo-usatoday">USA Today Travel</a></li>
  </ul>


</section>

<!-- /restaurants -->


<?php get_footer(); ?>