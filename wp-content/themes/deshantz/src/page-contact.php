<?php /* Template Name: Contact Page */ get_header(); ?>
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
</main>
<?php get_footer(); ?> 