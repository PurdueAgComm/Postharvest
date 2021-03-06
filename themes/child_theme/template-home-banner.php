<?php
/**
 *
 * Template Name: Home Banner Page
 *
**/

get_header(); ?>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/child_theme/modernizr.custom.72111.js"></script>


<div class="introContainer rowContainer" id="introRow">
  <div class="shader"></div>
  <div class="container intro">
    <div class="icon">

    </div>
    <div class="rw-wrapper" style="margin-top: 30px;">
      <h1 class="rw-sentence">
        <span>Food is </span>
        <div class="rw-words rw-words-1">
          <span>precious.</span>
          <span>life.</span>
          <span>our focus.</span>
          <span>precious.</span>
          <span>life.</span>
          <span>our focus.</span>
        </div>
      </h1>
    </div>
    <div class="content pull-left">
      <!--       <p class="content-text"><a href="#">Support our initiative today</a></p> -->
    </div>
  </div>
</div>

<div class="linksContainer rowContainer" id="linksRow">
  <div class="container">
    <div class="links row num-col-4">
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-bullhorn"></i>
            </div>
            <h3>We lead</h3>
            <div class="divider"></div>
            <p>We successfully work with groups in developed and developing countries.</p>
            <br>
            <a href="we-lead">Learn More</a>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <h3>We're experienced</h3>
            <div class="divider"></div>
            <p>Our experts successfully push boundaries of research and on-the-ground implementation.</p>
            <br>
            <a href="were-experienced">Learn More</a></p>
          </div>
        </div>


      </div>

      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <h3>We collaborate</h3>
            <div class="divider"></div>
            <p>We partner with the public or private groups who can get the job done.</p>
            <br>
            <a href="we-collaborate">Learn More</a>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-globe"></i>
            </div>
            <h3>We impact the world</h3>
            <div class="divider"></div>
            <p>Together we change systems and processes to secure food.</p>
            <br>
            <a href="we-impact-the-world">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="featureMapContainer rowContainer">
  <div class="container text-center">
    <h1>Our Impact Is Across the Globe</h1>
    <div class="subtitle">We have projects in more than 30 countries <a class="cta" style="color: #FFD100" href="projects">see our global impact.</a></a> </div>
  </div>
</div>

<!-- <div class="linksContainer rowContainer" id="linksRow">
  <div class="container">
    <div class="links row num-col-4">
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/child_theme/usda.png" alt="USDA Logo">
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/child_theme/usda.png" alt="USDA Logo">
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/child_theme/usda.png" alt="USDA Logo">
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/child_theme/usda.png" alt="USDA Logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->



<div class="featureNewsContainer rowContainer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">Join Our Efforts</h1>
          <p style="padding: 10px;">We welcome opportunities for further work in the area of postharvest lost reduction and value chain enhancement.  Please contact us about such opportunities, collaborations, and support for projects. If you have questions about the efforts of specific members of our team, you are welcome to contact them individually.</p>
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">Contact Us</h1>
              <script type="text/javascript" src="https://purdueagcommunication.formstack.com/forms/js.php/postharvest_contact"></script><noscript><a href="https://purdueagcommunication.formstack.com/forms/postharvest_contact" title="Online Form">Online Form - Postharvest Contact</a></noscript>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
//get_sidebar();
get_footer();


