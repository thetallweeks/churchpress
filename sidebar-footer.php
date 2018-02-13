<?php if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) && ! is_active_sidebar( 'footer-3' ) && ! restful_site_social_urls() ) return; ?>

<section class="footer-widgets section">
  <div class="container">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="widget-area col col--xs--12 col--md--3">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="widget-area col col--xs--12 col--md--3">
          <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <div class="widget-area col col--xs--12 col--md--3">
          <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
        <div class="widget-area col col--xs--12 col--md--3">
          <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
