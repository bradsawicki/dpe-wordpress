<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $address = get_field('address', 'options');
    $city = get_field('city', 'options');
    $state = get_field('state', 'options');
    $zip = get_field('zip', 'options');
    $contact_phone = get_field('contact_phone', 'options');
    $contact_email = get_field('contact_email', 'options');
  ?>

  <section class="contact">
    <div class="container">

      <h1 class="contact__title section-title title__h2"><?php the_title(); ?></h1>

      <div class="contact__info">
        <div class="contact__info-col">
          <p><?php echo $address; ?></p>
          <p><?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip; ?></p>
        </div>
        <div class="contact__info-col">
          <p><?php echo $contact_phone; ?></p>
          <p><a href="mailto:<?php echo $contact_email; ?>">Email Us</a></p>
        </div>
      </div>

      <div class="body-content">
        <?php the_content(); ?>
      </div>

    </div>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
