<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="home-hero hero">
    <div class="container">

      <h1 class="hero__title title__h1"><?php the_field('hero_title'); ?></h1>
      <h2 class="hero__subtitle"><?php the_field('hero_subtitle'); ?></h2>
      <p><a href="<?php bloginfo('url'); ?>/about-us/" class="btn btn--white">Learn More</a></p>

    </div>
  </section>

  <section class="featured-properties">
    <div class="container">

      <h2 class="featured-properties__title section-title title__h2">Featured Properties</h2>

      <?php if( have_rows('featured_properties') ): ?>
        <div class="properties-grid">
          <?php while ( have_rows('featured_properties') ) : the_row(); ?>
            <?php
              $title = get_sub_field('title');
              $location = get_sub_field('location');
              $type = get_sub_field('type');
              $size = get_sub_field('size');
              $link = get_sub_field('link');

              $thumb_id = get_sub_field('image');
              $thumb_src = wp_get_attachment_image_src($thumb_id, 'property-thumb');
              $thumb_src_2x = wp_get_attachment_image_src($thumb_id, 'property-thumb-2x');
            ?>

            <div class="property">
              <div class="property__thumb">
                <a href="<?php echo $link; ?>"><img src="<?php echo $thumb_src[0]; ?>" srcset="<?php echo $thumb_src_2x[0]; ?> 556w" sizes="(min-width: 600px) 278px, 100vw" alt="<?php echo $title; ?>"></a>
              </div>
              <div class="property__info">
                <h3 class="property__title title__h3"><?php echo $title; ?></h3>
                <p class="property__location"><?php echo $location; ?></p>
                <p class="property__type"><?php echo $type; ?> | <?php echo $size; ?></p>
                <p class="property__link"><a href="<?php echo $link; ?>" class="cta-link">View Property</a></p>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <footer class="featured-properties__footer">
        <p><a href="<?php bloginfo('url'); ?>/properties/" class="btn">All Properties</a></p>
      </footer>

    </div>
  </section>

  <section class="home-about">

    <div class="home-about__image"></div>

    <div class="home-about__content">
      <h3 class="home-about__title title__h3"><?php the_field('about_title'); ?></h3>
      <p><?php the_field('about_content'); ?></p>
    </div>

  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
