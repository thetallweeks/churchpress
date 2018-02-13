<?php

// Template Name: Full Width

get_header();

?>

<section class="masthead section">
  <div class="container">
    <?php the_title( '<h1 class="masthead__title col col--xs--12 col--md--9"><div class="row">', '</div></h1>' ); ?>
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
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'entry entry--page' ); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="entry__thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
        <?php endif; ?>

        <div class="entry__body rich-text">
          <?php the_content(); ?>
        </div>
      </article>

      <?php comments_template(); ?>
    <?php endwhile; else: ?>
      <?php _e( 'Nothing found.', 'restful' ); ?>
    <?php endif; ?>
  </div>
</section>

<?php

get_footer();
