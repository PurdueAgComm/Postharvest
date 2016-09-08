<?php
/**
 *
 * Template Name: Question Page
 *
**/

get_header(); ?>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/child_theme/modernizr.custom.72111.js"></script>

<br>
<div class="row">
  <div class="col-xs-12">
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_content();
      } // end while
    } // end if
      ?>
  </div>
</div>

<div class="linksContainer rowContainer" id="linksRow">
  <div class="container">
    <div class="row">
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
              <h3>We impact the word</h3>
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
</div></div>
<?php
//get_sidebar();
get_footer();


