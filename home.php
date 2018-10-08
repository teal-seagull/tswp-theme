<?php
/**
Template Name: Home
 */

get_header(); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ts1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Content Management Systems</h3>
              <p>We offer solutions with WordPress, MediaWiki, Drupal, Joomla, TYPO3, and more customized solutions including but not limited to theme and plugin development.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TS2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Mobile Solutions</h3>
              <p>We can provide your business a great tool to improve its effectiveness or help your app ideas to become a reality.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TS3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Information Systems Consulting.</h3>
              <p>Complete visibility into all the important processes, increase efficiencies and sales.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/wdev140.png" alt="Generic placeholder image">
          <h2>CMS</h2>
          <p>Your content management system is the engine for pushing your message to the world. Find out how we can help ensure your content is be presented in the most consistent and comprehensive way possible.</p>
          <p><a class="btn btn-default" href="?page_id=8#cms" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/droid140.png" alt="Generic placeholder image">
          <h2>Mobile</h2>
          <p>We can help you with your mobile apps needs whether they are for your services or just an app idea that you want to turn into a reality.<br><br></p>
          <p><a class="btn btn-default" href="?page_id=8#mobile" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/sap140.png" alt="Generic placeholder image">
          <h2>ERP & CRM</h2>
          <p>We will work together with you to take your Information Systems to where they need to be to make your project take flight.<br><br></p>
          <p><a class="btn btn-default" href="?page_id=8#ecommerce" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>

<?php get_footer(); ?>
