<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#333333">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>
    <script src="//use.typekit.net/hzs1jfd.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
	</head>
	<body <?php body_class(); ?>>

      <!-- loader -->
        <div class="loader">
           <div class="loader-content"> 
              <svg width="280" height="65" viewBox="0 0 280 54" xmlns="http://www.w3.org/2000/svg"><title>logo</title><g fill="none" fill-rule="evenodd"><path d="M134.954.905c-6 9.916-.86 18.018-.86 18.018h1.623c0 5.425-2.255 12.663-2.255 12.663.45.904 1.903.904 2.49.904.588 0 1.117-.442 1.117-.904V.905c0-.356-.547-.768-.973-.887-.422-.12-.87.434-1.143.887z" id="logo-knife" fill="#ECA80C"/><path d="M123.994.45l.45 13.07s-.245.908-1.597.908c-1.353 0-1.56-.908-1.56-.908L121.74.45l-.903.452-1.352 11.272v.47c0 1.122.538 2.033 1.352 2.686 2.685 3.03.45 11.89.45 12.625.003.812 0 3.12 0 3.12 0 .794.794 1.413 1.56 1.415.766 0 1.597-.653 1.597-1.416-.003-.027 0-2.175 0-3.12-.002-.85-2.137-9.908.45-12.55.644-.613 1.29-1.835 1.354-2.76.004-.067 0-.47 0-.47L124.895.902l-.9-.45z" id="logo-fork" fill="#ECA80C"/><path d="M5.234 17.013l4.784 6.585H7.166l-4.414-6.325h-.42v6.325H0V8.145h2.732c2.042 0 3.516.384 4.424 1.15 1 .855 1.5 1.983 1.5 3.384 0 1.093-.312 2.034-.94 2.82-.627.79-1.454 1.293-2.482 1.513zM2.332 15.24h.74c2.21 0 3.313-.843 3.313-2.53 0-1.582-1.074-2.373-3.222-2.373h-.83v4.904zM18.694 8.145v15.453h-2.33V8.145h2.33zM37.85 8.976v2.762c-1.348-1.127-2.743-1.69-4.184-1.69-1.588 0-2.926.57-4.013 1.71-1.095 1.135-1.642 2.522-1.642 4.164 0 1.62.548 2.99 1.643 4.103 1.094 1.114 2.435 1.672 4.023 1.672.82 0 1.518-.134 2.092-.4.32-.134.652-.314.995-.54.344-.228.706-.502 1.086-.822v2.812c-1.335.754-2.736 1.13-4.204 1.13-2.21 0-4.094-.77-5.655-2.31-1.553-1.555-2.33-3.43-2.33-5.625 0-1.968.65-3.723 1.95-5.264 1.602-1.89 3.674-2.833 6.216-2.833 1.388 0 2.73.377 4.023 1.13zM47.576 14.19h6.666V8.145h2.332v15.453h-2.332v-7.216h-6.666v7.216h-2.332V8.145h2.332v6.045zM73.377 19.845H66.76l-1.72 3.753h-2.512l7.646-16.423 7.376 16.423h-2.552l-1.62-3.753zm-.95-2.192L70.133 12.4l-2.402 5.253h4.694zM88.738 17.013l4.784 6.585H90.67l-4.414-6.325h-.42v6.325h-2.332V8.145h2.732c2.042 0 3.517.384 4.424 1.15 1 .855 1.5 1.983 1.5 3.384 0 1.093-.312 2.034-.94 2.82-.627.79-1.454 1.293-2.482 1.513zm-2.902-1.772h.74c2.21 0 3.313-.843 3.313-2.53 0-1.582-1.075-2.373-3.223-2.373h-.83v4.904zM99.867 23.598V8.145h3.242c1.554 0 2.782.154 3.682.46.968.3 1.845.81 2.632 1.532 1.595 1.455 2.392 3.366 2.392 5.735 0 2.375-.83 4.297-2.492 5.765-.834.733-1.708 1.244-2.622 1.53-.854.288-2.065.43-3.633.43h-3.203zm2.332-2.192h1.05c1.047 0 1.918-.11 2.612-.33.693-.233 1.32-.604 1.88-1.11 1.15-1.048 1.723-2.413 1.723-4.094 0-1.695-.568-3.07-1.702-4.124-1.02-.94-2.525-1.41-4.514-1.41h-1.05v11.068zM145.756 23.598V8.145H149c1.553 0 2.78.154 3.682.46.967.3 1.845.81 2.632 1.532 1.595 1.455 2.392 3.366 2.392 5.735 0 2.375-.83 4.297-2.492 5.765-.834.733-1.708 1.244-2.622 1.53-.854.288-2.065.43-3.633.43h-3.204zm2.332-2.192h1.05c1.048 0 1.92-.11 2.613-.33.695-.233 1.322-.604 1.883-1.11 1.147-1.048 1.72-2.413 1.72-4.094 0-1.695-.566-3.07-1.7-4.124-1.02-.94-2.526-1.41-4.514-1.41h-1.052v11.068zM173.188 10.337h-6.195v3.713h6.015v2.192h-6.015v5.164h6.195v2.192h-8.527V8.145h8.528v2.192zM189.01 10.447l-1.892 1.12c-.353-.613-.69-1.013-1.01-1.2-.334-.213-.765-.32-1.292-.32-.647 0-1.184.183-1.61.55-.428.36-.642.814-.642 1.362 0 .753.56 1.36 1.682 1.82l1.54.63c1.255.508 2.173 1.127 2.753 1.857.58.73.87 1.626.87 2.687 0 1.422-.474 2.596-1.42 3.523-.955.934-2.14 1.4-3.554 1.4-1.34 0-2.45-.396-3.323-1.19-.86-.794-1.398-1.91-1.61-3.352l2.36-.52c.108.907.294 1.534.56 1.88.482.668 1.182 1.002 2.103 1.002.727 0 1.33-.244 1.812-.73.48-.488.72-1.105.72-1.853 0-.3-.042-.575-.125-.825-.083-.25-.213-.482-.39-.692-.177-.21-.406-.407-.686-.59-.28-.184-.614-.36-1-.526l-1.492-.62c-2.115-.894-3.172-2.202-3.172-3.923 0-1.162.443-2.133 1.33-2.914.888-.787 1.992-1.18 3.313-1.18 1.782 0 3.173.867 4.174 2.6zM198.577 14.19h6.665V8.145h2.332v15.453h-2.332v-7.216h-6.665v7.216h-2.332V8.145h2.332v6.045zM224.377 19.845h-6.615l-1.722 3.753h-2.512l7.646-16.423 7.376 16.423h-2.552l-1.62-3.753zm-.95-2.192l-2.293-5.254-2.402 5.253h4.694zM234.504 23.598V7.095l11.27 11.79V8.144h2.332V24.54l-11.27-11.76v10.818h-2.332zM260.095 10.337v13.26h-2.332v-13.26h-3.553V8.145h9.427v2.192h-3.542zM272.414 21.406h7.416v2.192h-11.25l7.587-13.26h-6.345V8.144H280l-7.586 13.26zM58.254 43.73h-4.68v9.024h4.68v-.947h-3.68v-3.504h3.572v-.946h-3.57v-2.68h3.678v-.946zM68.08 44.99c-.204-.393-.515-.758-.88-1.002-.447-.297-.893-.405-1.448-.405-1.46 0-2.53.933-2.53 2.326 0 .676.23 1.095.623 1.474.406.392.852.58 1.204.744l.81.378c.474.217.826.38 1.083.623.324.296.446.648.446 1.054 0 .906-.583 1.785-1.813 1.785-.46 0-.907-.11-1.3-.5-.256-.272-.472-.678-.54-1.15l-.974.27c.122.54.392 1.163.84 1.596.62.608 1.365.73 1.96.73 1.623 0 2.854-1.11 2.854-2.773 0-.65-.19-1.177-.65-1.637-.378-.378-.865-.622-1.392-.852l-.866-.38c-.34-.147-.677-.296-.948-.567-.243-.23-.338-.433-.338-.784 0-.84.622-1.394 1.515-1.394.513 0 .838.175 1.013.31.203.163.406.433.528.677l.8-.528zM77.254 44.678v-.947H71.87v.948h2.192v8.076h1v-8.076h2.192zM87.187 52.754h1.11L84.252 43.3 80.1 52.753h1.11l1.08-2.543h3.842l1.055 2.544zm-4.504-3.49l1.542-3.612 1.515 3.612h-3.057zM93.725 43.73h-1v5.804c0 .758.08 1.488.567 2.165.542.743 1.488 1.216 2.638 1.216s2.097-.473 2.638-1.217c.487-.678.568-1.408.568-2.166V43.73h-1v5.534c0 .757 0 1.582-.718 2.19-.365.312-.987.515-1.488.515-.5 0-1.123-.204-1.488-.515-.717-.61-.717-1.434-.717-2.19V43.73zM104.62 43.73v9.024h1v-3.95h.257l2.746 3.95h1.217l-2.868-4.03c1.367-.096 2.273-1.11 2.273-2.49 0-.96-.46-1.65-.988-2.002-.676-.46-1.582-.5-2.19-.5h-1.448zm1 .948h.608c.433 0 .893.027 1.3.257.567.325.716.825.716 1.326 0 1.056-.744 1.65-1.99 1.65h-.634V44.68z" id="Path" fill="#FFF"/><path d="M43.74 43.73v9.024h1v-3.95H45l2.746 3.95h1.217l-2.867-4.03c1.367-.096 2.273-1.11 2.273-2.49 0-.96-.46-1.65-.988-2.002-.676-.46-1.582-.5-2.19-.5H43.74zm1 .948h.61c.432 0 .892.027 1.298.257.568.325.717.825.717 1.326 0 1.056-.744 1.65-1.99 1.65h-.634V44.68z" fill="#FFF"/><path d="M120.598 52.754h1.11l-4.045-9.455-4.153 9.454h1.11l1.082-2.543h3.84l1.056 2.544zm-4.504-3.49l1.542-3.612 1.515 3.612h-3.056zM127.136 52.754v-6.967l7.034 7.372v-9.43h-1v6.995l-7.035-7.372v9.4h1zM144.062 44.678v-.947h-5.383v.948h2.19v8.076h1v-8.076h2.192zM159.532 49.17h2.678c-.027.567-.203 1-.365 1.284-.514.906-1.555 1.515-2.76 1.515-1.704 0-3.665-1.245-3.665-3.707 0-2.097 1.515-3.734 3.693-3.734 1.082 0 1.758.405 2.19.757.3.243.596.568.853.933l.744-.676c-.257-.352-.636-.758-1.04-1.07-.88-.675-1.895-.89-2.76-.89-2.693 0-4.708 2.04-4.708 4.665 0 2.623 2.002 4.666 4.68 4.666 2.07 0 3.084-1.258 3.355-1.623.568-.77.865-1.853.865-2.854v-.218h-3.76v.947zM168.288 43.73v9.024h1v-3.95h.258l2.746 3.95h1.218l-2.868-4.03c1.366-.096 2.272-1.11 2.272-2.49 0-.96-.46-1.65-.987-2.002-.676-.46-1.583-.5-2.19-.5h-1.45zm1 .948h.61c.433 0 .893.027 1.3.257.567.325.715.825.715 1.326 0 1.056-.744 1.65-1.988 1.65h-.636V44.68zM182.442 52.916c2.61 0 4.693-1.988 4.693-4.667 0-2.693-2.096-4.667-4.693-4.667-2.598 0-4.694 1.974-4.694 4.666 0 2.678 2.083 4.666 4.694 4.666zm0-8.387c2.03 0 3.665 1.65 3.665 3.72 0 2.07-1.636 3.72-3.665 3.72-2.03 0-3.666-1.65-3.666-3.72 0-2.07 1.637-3.72 3.666-3.72zM193.132 43.73h-1v5.804c0 .758.08 1.488.567 2.165.54.743 1.487 1.216 2.637 1.216s2.097-.473 2.638-1.217c.487-.678.568-1.408.568-2.166V43.73h-1v5.534c0 .757 0 1.582-.718 2.19-.365.312-.988.515-1.488.515s-1.123-.204-1.488-.515c-.718-.61-.718-1.434-.718-2.19V43.73z" id="Path" fill="#FFF"/><path d="M204.025 43.73v9.024h1V48.83h.88c2.057 0 2.855-1.257 2.855-2.53 0-.567-.163-1.365-.825-1.933-.61-.527-1.367-.636-2.273-.636h-1.637zm1 .948h.745c.65 0 1.99.136 1.99 1.57 0 1.04-.718 1.636-1.908 1.636h-.826v-3.206z" fill="#FFF"/></g></svg>
           </div>
        </div>
      <!-- /loader -->
  
			<!-- header -->
			<header class="header" role="banner" style="background-image: url('<?php echo hero_image(); ?>')">
          
          <div class="container container-top">
           
  					<!-- logo -->
  					<div class="logo">
  						<a href="<?php echo home_url(); ?>">
  							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
  							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Richard Deshantz Restaurant Group" class="logo-img">
  						</a>
  					</div>
  					<!-- /logo -->

            <!-- nav -->
            <nav class="nav-main" role="navigation">
              <?php nav_main(); ?>
            </nav>
            <!-- /nav -->	

          </div>

          <header class="intro">
            <div class="intro-content">
            <!-- intro -->
            <?php if(is_front_page()): ?>
                <h1 class="home-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Richard Deshantz Restaurant Group"></h1>
            <?php elseif(is_page()): ?>
                  <?php 
                    $title = get_post_meta( get_the_ID(), '_hero_title', true ); 
                    $subtitle = get_post_meta( get_the_ID(), '_hero_subtitle', true );
                  ?>

                  <?php if($title): ?>
                      <h1><?php echo $title ?></h1>
                      <p><?php echo $subtitle ?></p>
                  <?php else: ?>
                      <h1><?php the_title(); ?></h1>
                  <?php endif; ?>

            <?php elseif(is_home()): ?>
                <?php
                  $latest_post = new WP_Query( array('showposts' => 1, 'ignore_sticky_posts' => true) ); 
                  while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
                   
                   <h1>From The Blog</h1>
                   <div class="post-data">
                     <time class="subtitle" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_date() ?></time>
                     <p><?php the_title(); ?></p>
                     <a href="<?php the_permalink() ?>" class="read-more-link">Read more</a>
                   </div>

                 <?php endwhile; wp_reset_postdata(); ?>
            <?php elseif(is_archive()): ?>
               <h1><?php single_cat_title();?><?php single_month_title();?></h1>
               <p>Posts from category</p>
            <?php elseif(is_single()): ?>
                <h3 class="h1">From The Blog</h3>
                  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                   <div class="post-data">
                     <time class="subtitle" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_date() ?></time>
                     <h1 class="post-data-title" title="<?php the_title_attribute(); ?>"><?php the_title() ?></h1>
                   </div>
                    <?php endwhile; endif; ?>
            <?php elseif(is_404()): ?>
                <h1>Ooops!</h1>
                <div class="post-data">
                  <p>Looks like this page does not exist.</p>
                  <a href="<?php echo site_url() ?>" class="read-more-link">Go back home</a>
                </div>
            <?php elseif(is_search()): ?>
                <h1>Search Results</h1>
                <p><?php echo sprintf( __( 'We got %s results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></p>
            <?php else: ?>
                pusto
            <?php endif; ?>
            <!-- /intro -->
            </div>
          </header>
          
          <?php if(is_front_page()): ?>
            <span class="go-down"><img src="<?php echo get_template_directory_uri(); ?>/img/angle-down.svg" alt=""></span>
          <?php endif; ?>
			</header>
			<!-- /header -->
