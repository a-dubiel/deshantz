<?php /* Template Name: Home Page */ get_header(); ?>

<main role="main">

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
<a href="<?php echo site_url() ?>/about" class="overlay-link"><div class="box box-image hidden-xs" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-about.jpg') ">
 <div class="box-image-overlay"><span>Read The Story</span></div></div></a>
</section>
<!-- /about -->   

<!-- latest post -->
<section class="home-section">
  <?php 
  $latest_post = new WP_Query( array('showposts' => 1, 'ignore_sticky_posts' => true) ); 
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
        <p>By <?php the_author() ?> <br /><time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_date() ?></time></p>
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

<!-- accolades -->
<section class="home-section home-section-padding text-center">
  <header class="section-header text-center">
    <small class="subtitle">Restaurants</small>
    <h3 class="title">Here is a nice and inviting headline about Rick’s restaurants and the accolades.</h3>
  </header>
  
  <h6 class="subtitle text-center">As featured on</h6>
  <ul class="logo-list">
    <li><a href="http://www.cookingchanneltv.com/shows/chucks-eat-the-street/300/episode-313.html" target="_blank" class="logo-cooking">Cooking Channel</a></li>
    <li><a href="http://www.esquire.com/style/mens-fashion/advertorial/a29285/style-across-america-pittsburgh-2014/" target="_blank" class="logo-esquire">Esquire</a></li>
    <li><a href="http://www.foodandwine.com/slideshows/best-gastropubs-in-the-us/25" target="_blank" class="logo-foodwine">Food and Wine</a></li>
    <li><a href="http://www.huffingtonpost.com/malerie-yolencohen/top-ten-movie-locations-t_b_6354924.html" target="_blank" class="logo-huffington">Huffington Post</a></li>
    <li><a href="http://www.pittsburghmagazine.com/Best-of-the-Burgh-Blogs/The-412/December-2014/Foodie-Alert-James-Beard-Celebrity-Chef-Tour-Coming-to-Pittsburgh/" target="_blank" class="logo-pittsburghmag">Pittsburgh Mag</a></li>
    <li><a href="https://www.yahoo.com/travel/bp/best-bars-u-mix-drinks-bowling-disco-more-205643806.html" target="_blank" class="logo-yahoo">Yahoo Travel</a></li>
    <li><a href="http://www.thrillist.com/eat/pittsburgh/best-restaurants-in-pittsburgh" target="_blank" class="logo-thrillist">Thrillist</a></li>
    <li><a href="http://www.travelchannel.com/shows/food-paradise/video/meat-and-potatoes" target="_blank" class="logo-travel">Travel Channel</a></li>
    <li><a href="http://www.triblive.com/aande/diningout/7333602-74/chef-severino-restaurant#axzz3TQvrFrSs" target="_blank" class="logo-trib">Trib Live</a></li>
    <li><a href="http://www.experience.usatoday.com/food-and-wine/story/best-of-food-and-wine/2014/03/11/small-cities-big-food-scenes/6187081/" target="_blank" class="logo-usatoday">USA Today Travel</a></li>
  </ul>
</section>
<!-- /accolades -->

<!-- restaurants -->
<section class="home-section">
  

    <div class="box-restaurant" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/butcher-and-rye.jpg')">
      <div class="box-restaurant-container">
        <div class="box-restaurant-content">
          <h4 class="title">Butcher and Rye</h4>
          <p class="subtitle">Pittsburgh, PA</p>
          <a class="read-more-link" href="<?php echo site_url() ?>/restaurants#butcher-and-rye">More Info</a>
        </div>
      </div>
    </div>
  

    <div class="box-restaurant" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/meat-and-potatoes.jpg')">
      <div class="box-restaurant-container">
        <div class="box-restaurant-content">
          <h4 class="title">Meat and Potatoes</h4>
          <p class="subtitle">Pittsburgh, PA</p>
          <a class="read-more-link" href="<?php echo site_url() ?>/restaurants#meat-and-potatoes">More Info</a>
        </div>
      </div>
    </div>



    <div class="box-restaurant" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/tako.jpg')">
      <div class="box-restaurant-container">
        <div class="box-restaurant-content">
          <h4 class="title">Täko</h4>
          <p class="subtitle">Pittsburgh, PA</p>
          <a class="read-more-link" href="<?php echo site_url() ?>/restaurants#tako">More Info</a>
        </div>
      </div>
    </div>
  </a>

</section>
<!-- /restaurants -->

</main>

<?php get_footer(); ?>