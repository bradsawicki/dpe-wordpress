<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="home-hero hero">
    <div class="container">

      <h1 class="hero__title title__h1"><?php the_field('hero_title'); ?></h1>
      <h2 class="hero__subtitle"><?php the_field('hero_subtitle'); ?></h2>
      <p><a href="#" class="btn btn--white">Learn More</a></p>

    </div>
  </section>

  <section class="featured-properties">
    <div class="container">

      <h2 class="title__h2">Featured Properties</h2>

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
