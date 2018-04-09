    </main>

    <?php
      $about_title = get_field('about_title', 'options');
      $about_bio = get_field('about_bio', 'options');

      $address = get_field('address', 'options');
      $city = get_field('city', 'options');
      $state = get_field('state', 'options');
      $zip = get_field('zip', 'options');

      $contact_phone = get_field('contact_phone', 'options');
      $contact_email = get_field('contact_email', 'options');

      $facebook = get_field('facebook_url', 'options');
      $twitter = get_field('twitter_url', 'options');
      $linkedin = get_field('linkedin_url', 'options');
    ?>

    <footer class="footer">
      <div class="container">

        <div class="footer-profile">
          <div class="footer-profile__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer-headshot-2x.jpg" />
          </div>
          <div class="footer-profile__info">
            <h3 class="title__h3"><?php echo $about_title; ?></h3>
            <p><?php echo $about_bio; ?></p>
            <p><a href="<?php bloginfo('url'); ?>/about-us/" class="cta-link">View David's Profile</a></p>
          </div>
        </div>

        <div class="footer-copyright">
          <p class="social-links">
            <?php if($facebook): ?>
              <a href="<?php echo $facebook; ?>" target="_blank">Facebook</a>
            <?php endif; ?>
            <?php if($twitter): ?>
              <span class="pipe">|</span>
              <a href="<?php echo $twitter; ?>" target="_blank">Twitter</a>
            <?php endif; ?>
            <?php if($linkedin): ?>
              <span class="pipe">|</span>
              <a href="<?php echo $linkedin; ?>" target="_blank">Linkedin</a>
            <?php endif; ?>
            <span class="pipe">|</span>
            <a href="<?php bloginfo('url'); ?>/contact-us/">Contact</a>
          </p>
          <p><?php echo $address; ?>, <?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip; ?></p>
          <p>&copy;<?php echo date('Y'); ?> Ellermann Commercial Brokerage | <?php echo $contact_phone; ?></p>

          <p><a href="http://bradsawicki.com" target="_blank">Site by: Brad Sawicki</a></p>
        </div>

      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
