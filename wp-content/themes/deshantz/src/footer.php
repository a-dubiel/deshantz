			<!-- footer -->
			<footer class="footer" role="contentinfo">

					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
  				</div>
					<nav class="nav-footer">
  					<?php nav_footer() ?>
  					<ul class="nav-footer-social">
							<li><a href="http://www.twitter.com/richarddeshantz" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/richard_deshantz" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
  					</ul>
  				</nav>
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

	</body>
</html>
