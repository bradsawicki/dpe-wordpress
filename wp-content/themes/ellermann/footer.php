    </main>

    <footer class="footer">
      <div class="container">

        <div class="footer-profile">
          <div class="footer-profile__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer-headshot-2x.jpg" />
          </div>
          <div class="footer-profile__info">
            <h3 class="title__h3"><?php the_field('about_title', 'options'); ?></h3>
            <p><?php the_field('about_bio', 'options'); ?></p>
            <p><a href="#" class="cta-link">View David's Profile</a></p>
          </div>
        </div>

        <div class="footer-copyright">
          <p class="social-links"><a href="https://www.facebook.com/Ellermann-Commercial-Brokerage-231450920212272/" target="_blank">Facebook</a> <span class="pipe">|</span> <a href="https://www.linkedin.com/in/david-p-ellermann-ccim-461a524" target="_blank">Linkedin</a> <span class="pipe">|</span> <a href="" class="modal-trigger" data-modal="contact-modal">Contact</a></p>
          <p>&copy;2017 Ellermann Commercial Brokerage.</p>
          <p><a href="http://bradsawicki.com" target="_blank">Site by: Brad Sawicki</a></p>
        </div>

      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
