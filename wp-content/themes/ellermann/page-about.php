<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="about">
    <div class="container">

      <h1 class="about__title section-title title__h2"><?php the_title(); ?></h1>

      <?php if( have_rows('team') ): ?>
        <div class="team-list">
          <?php while ( have_rows('team') ) : the_row(); ?>
            <?php
              $name = get_sub_field('name');
              $bio = get_sub_field('bio');
              $phone = get_sub_field('phone');
              $email = get_sub_field('email');

              $thumb_id = get_sub_field('pic');
              $thumb_src = wp_get_attachment_image_src($thumb_id, 'team-thumb');
              $thumb_src_2x = wp_get_attachment_image_src($thumb_id, 'team-thumb-2x');
            ?>

            <div class="team-list__item">
              <div class="team-list__image">
                <img src="<?php echo $thumb_src[0]; ?>" srcset="<?php echo $thumb_src_2x[0]; ?> 556w" sizes="(min-width: 600px) 278px, 100vw" alt="<?php echo $name; ?>"
                />
              </div>
              <div class="team-list__content">
                <h2 class="team-list__title title__h3"><?php echo $name; ?></h2>
                <div class="team-list__bio body-content">
                  <?php echo $bio; ?>
                </div>
                <p class="team-list__phone"><?php echo $phone; ?></p>
                <p class="team-list__email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
