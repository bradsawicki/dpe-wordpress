<?php /* Template Name: Properties */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="about">
    <div class="container">

      <h1 class="about__title section-title title__h2"><?php the_title(); ?></h1>

      <div id="buildout"></div>
      <script type="text/javascript" src="//buildout.com/api.js?v8"></script>
      <script type="text/javascript">
      	BuildOut.embed({
      		token:     "b4b32aa7216aa70cc08e5607b101559271ebdbf4",
      		plugin:    "inventory",
      		target:    "buildout"
      	});
      </script>

    </div>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
