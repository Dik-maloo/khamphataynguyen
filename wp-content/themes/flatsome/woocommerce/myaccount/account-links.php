<?php if ( has_nav_menu( 'wp-admin' ) ) { ?>

  <?php
    echo wp_nav_menu(array(
      'theme_location' => 'wp-admin',
      'container' => false,
      'items_wrap' => '%3$s',
      'depth' => 0,
      'walker' => new FlatsomeNavSidebar
    ));
  ?>
<?php } else if(!get_theme_mod('wc_account_links', 1)) { ?>
    <li>Define your My Account dropdown menu in <b>Appearance > Menus</b> or enable default WooCommerce Account Endpoints.</li>
<?php } ?>

<?php if(function_exists('wc_get_account_menu_items') && get_theme_mod('wc_account_links', 1)){ ?>
  <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
    <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
    <?php if($endpoint == 'dashboard'){ ?>
      <a href="<?php echo get_site_url(null,'wp-admin')?>"><?php echo esc_html( $label ); ?></a>
      <!-- empty -->
    <?php } else { ?>
     
    <?php } ?>
    </li>
  <?php endforeach; ?>
  <?php do_action('flatsome_account_links'); ?>
  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
    <a href="<?php echo get_site_url(null,'wp-login.php?action=logout') ?>"><?php _e('Logout','woocommerce'); ?></a>
  </li>
<?php } ?>
