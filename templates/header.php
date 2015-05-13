<?php
  $class = 'no-cover';
  if ( is_front_page() || is_archive() || is_search() || is_home() ) {
    $class = 'cover';
  }
?>

<header class="banner <?php echo $class ?>" role="banner">
  <div class="header-inner">
      <nav class="nav-main" role="navigation">
        <div class="container">
          <div class="no-cover-logo" style="text-align: left;">
            <img src="/wp-content/themes/sudoslash/assets/img/logo_pu.png" />
          </div>
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
        </div>
      </nav>
      <?php if( is_front_page() || is_archive() || is_home() ) : ?>
        <hgroup>
          <div class="container">
            <div class="page-title">
              <img src="/wp-content/themes/sudoslash/assets/img/logo.png" />
            </div>
            <button id="get-started" class="btn btn-default btn-coner"><?php echo dw_timeline_get_theme_option('get_start','Get Start Now') ?></button>
          </div>
        </hgroup>
      <?php elseif( is_search() ) : ?>
        <div class="container">
          <h1 class="page-title">
            <?php echo dw_timeline_title(); ?>
          </h1>
        </div>
      <?php endif; ?>
  </div>
</header>
