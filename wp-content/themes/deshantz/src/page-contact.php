<?php /* Template Name: Contact Page */ get_header(); ?>
<main role="main">
  <section>
    <article class="page-contact">
      <div class="container">
        <div class="row">
          <div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 add-bottom"> 
            <small class="subtitle">Follow Chef Deshantz</small>
            <h3 class="title">Get Connected</h3>
            <div class="main-contact add-bottom">
              <ul>
                <li><a href="http://www.twitter.com/butcherntherye" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="http://www.butcherandtherye.com/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></li>
                <li><a href="https://www.facebook.com/butcherandtherye" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
            <small class="subtitle">Inquries</small>
            <h3 class="title">Media &amp; Press</h3>  

            <div class="main-contact">
              <ul>
                <li class="contact-person"><a href="mailto:press@richarddeshantz.com" target="_blank"><i class="fa fa-twitter"></i> Tamara Lelli<small>press@richarddeshantz.com</small></a></li>
              </ul>
            </div>       
            
          </div>
          <div class="col-xs-8 col-md-4 col-sm-5">
            <small class="subtitle">Let's Talk</small>
            <h3 class="title">Send a Message</h3>
            <?php echo do_shortcode('[contact-form-7 id="1780" title="Contact Form"]') ?>
          </div>
        </div>
      </article>
    </section>
  </main>
  <?php get_footer(); ?> 