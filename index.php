<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('data/products/dynamic_content.php') ?>
  <?php include('layouts/header-script.php'); ?>
</head>

<body>
  <div class="layout-theme animated-css" data-header="sticky" data-header-top="200">

    <?php include('layouts/top-bar.php'); ?>

    <!-- HEADER -->
    <div class="header">
      <?php include('layouts/menu-bar.php'); ?>

    </div>
    <!-- HEADER END -->

    <div id="iview" class="main-slider">
      <div data-iview:thumbnail="media/slider_main/1.jpg" data-iview:image="media/slider_main/1.jpg" data-iview:transition="block-drop-random">
        <div class="container">
          <div class="iview-caption bg-no-caption" data-x="660" data-y="443" data-transition="expandLeft">
            <div class="custom-caption">
              <p class="slide-title bg-color_second" style="background-color: #00000096;font-weight: 500;">Comprehensive Solutions for Every Laboratory</p>
              <!-- <p class="slide-title_second"> </p> -->
              <!-- <p class="slide-text">Sed posuere nunc libero pellentesque vitae</p>
              <p class="slide-text">Vestibulum tincidunt ante ipsum</p> -->
              <!-- <a href="javascript:void(0);" class="btn bg-color_primary">VIEW SERVICES <span class="btn-plus">+</span></a> -->
            </div>
          </div>
        </div>
      </div>
      <div data-iview:thumbnail="media/slider_main/2.jpg" data-iview:image="media/slider_main/2.jpg" data-iview:transition="block-drop-random">
        <div class="container">
          <div class="iview-caption  bg-no-caption" data-x="260" data-y="443" data-transition="expandLeft">
            <div class="custom-caption">
              <p class="slide-title bg-color_second" style="background-color: #00000096;font-weight: 500;">Quality Made in Germany </p>
              <!-- <p class="slide-title_second"></p > -->
              <!-- <p class="slide-text">Sed posuere nunc libero pellentesque vitae</p>
              <p class="slide-text">Vestibulum tincidunt ante ipsum</p> -->
              <!-- <a href="javascript:void(0);" class="btn bg-color_primary">VIEW SERVICES <span class="btn-plus">+</span></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end iview -->

    <section class="section bg bg_2 bg_transparent text-center" data-wow-delay="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="ui-title-block">Welcome to <strong class="font-weight_600">Zenith</strong></h1>
            <div class="ui-subtitle-block">Our Experts Help you</div>
          </div>
          <section class="advantages__inner col-sm-12">
            <p class="ui-text text-center">Zenith Impex (Pvt) Ltd. was incorporated in 2006 with the primary objective of offering world-class diagnostics solutions to healthcare providers in Sri Lanka.</p>
            <p class="ui-text text-center">Zenith Impex (Pvt) Ltd. is the exclusive distributor for HUMAN Diagnostics, a global player in the in vitro Diagnostics industry with a broad, constantly growing portfolio and Quality Made in Germany. HUMAN's product philosophy calls for the utmost in reliability and quality as well as timely product availability.</p>
            <p class="ui-text text-center">We are proud that over the last 14 years our products and services have gained a recognized reputation for quality within the industry & will continue to enhance the standards in output of clinical diagnostics of our business partners.</p>
          </section>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end advantages -->

    <section class="section bg bg_5 bg_transparent">
      <div class="container">
        <div class="row">
          <div class="col-md-6 color_white wow bounceInleft">
            <h2 class="ui-title-block color_white font-weight_700">HUMAN Decides </h2>
            <div class="subtitle_mod-1">your quality of life</div>
            <!-- <p class="ui-text color_white">
            </p> -->
            <a class="btn btn_transparent" href="javascript:void(0);">WATCH THE VIDEO</a>
          </div>
          <div class="col-md-5 col-md-offset-1"> <a class="link_on-youtube wow bounceInRight" href="https://youtu.be/KoLzqTzrLw8&amp;rel=0" rel="prettyPhoto" title="YouTube"><i class="icon_video-player icon-camcorder bg-color_primary"></i><img src="media/450x270/1.jpg" height="270" width="450" alt="Link on youtube"></a> </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end section -->

    <div class="section-large bg bg_4">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="ui-title-block" style="text-align: center;">Our <strong class="font-weight_600">Product Categories</strong></h1>
            <div class="ui-subtitle-block">A team of qualified Biomedical Engineers & Medical Laboratory Scientists to provide 24/7/365 after sales services.</div>
          </div>
          <?php $count = 0;
          foreach ($categories as $category) {
            $count = $count + 1;
            if ($count % 2 == 0) {
          ?>
              <div class="col-sm-6 col-md-4" data-wow-delay="1s">
                <div class="padd_left_20">
                  <ul class="list-mark list-mark_big">
                    <li><a class="icon icon-login" href="category.php?category=<?php echo $category->title; ?>&page=1"><?php echo $category->title; ?></a></li>

                  </ul>
                </div>
              </div>
            <?php } else { ?>
              <div class="col-sm-6 col-md-4" data-wow-delay="1s">
                <div class="padd_left_20">
                  <ul class="list-mark list-mark_big">
                    <li><a class="icon icon-login" href="category.php?category=<?php echo $category->title; ?>&page=1"><?php echo $category->title; ?></a></li>

                  </ul>
                </div>
              </div>
          <?php }
          } ?>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end section -->
    <?php include('layouts/footer.php'); ?>
  </div>
  <!-- end layout-theme -->

  <span class="scroll-top bg-color_second"> <i class="fa fa-angle-up"> </i></span>
  <!--HOME SLIDER-->
  <script src="plugins/iview/js/iview.js"></script>
  <script src="plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

  <!-- SCRIPTS -->
  <script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="plugins/bxslider/jquery.bxslider.min.js"></script>
  <script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
  <script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="plugins/datetimepicker/jquery.datetimepicker.js"></script>
  <script src="plugins/jelect/jquery.jelect.js"></script>
  <script src="plugins/nouislider/jquery.nouislider.all.min.js"></script>

  <!-- Loader -->
  <script src="plugins/loader/js/classie.js"></script>
  <script src="plugins/loader/js/pathLoader.js"></script>
  <script src="plugins/loader/js/main.js"></script>
  <script src="js/classie.js"></script>
  <!--THEME-->
  <script src="js/cssua.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>