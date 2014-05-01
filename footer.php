<?php
/**
 * The template for displaying the footer
 *
 */
?>  
<!-- FOOTER -->
<div class="footer-carousel">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-sm-offset-8">
        <h5>Contact Us</h5>
        <div>
          hello@tealseagull.com
        </div>
      </div>
      <div class="col-sm-2">
        <h5>Social Media</h5>
        <a href="https://www.facebook.com/tealseagull" target="_blank" ><div id="facebook"></div></a>
        <div id="twitter"></div>
        <a href="https://www.linkedin.com/company/teal-seagull-it-services" target="_blank" ><div id="linkedin"></div></a>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/docs.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>