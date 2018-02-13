<?php

get_header();

?>

<section class="masthead section">
  <div class="container">
    <h1 class="masthead__title col col--xs--12 col--md--9"><?php _e( 'Not Found' , 'restful' ); ?></h1>
    <?php if ( is_active_sidebar( 'masthead-right' ) ) : ?>
      <div class="masthead__right widget-area col col--xs--12 col--md--3">
        <div class="row">
          <?php dynamic_sidebar( 'masthead-right' ); ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="main section">
  <div class="container">
    <article class="entry">
      <div class="entry__body rich-text">
        <p><?php _e( 'Sorry, the page or file you tried to access was not found.', 'restful' ); ?></p>
      </div>
    </article>
  </div>
</section>

<?php

get_footer();
