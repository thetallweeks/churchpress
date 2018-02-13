<?php

get_header();

$has_sidebar    = is_active_sidebar( 'main' );
$args = array(
  'taxonomy'     => 'ctc_sermon_topic',
  'orderby'      => 'name',
  'show_count'   => false,
  'pad_counts'   => false,
  'hierarchical' => true,
  'title_li'      => ''
);

?>

<section class="masthead <?php if ( ! $has_sidebar ) echo 'masthead--centered' ?> section">
  <div class="container">
    <h1 class="masthead__title col col--xs--12 col--md--9">
      <div class="row">Topics</div>
    </h1>
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
    <div class="row">
      <div class="col col--xs--12 <?php echo ( $has_sidebar ? 'col--md--7' : 'col--sm--10 col--sm--offset--1 col--md--8 col--md--offset--2' ); ?>">
        <ul class="categories">
          <?php wp_list_categories($args); ?>
        </ul>
      </div>

      <?php if ( $has_sidebar ) get_sidebar(); ?>
    </div>
  </div>
</section>

<?php

get_footer();
