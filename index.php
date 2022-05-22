
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<?php include "header.php"; ?>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <?php include "navbar.php"; ?>

            <!--Home Sections-->

            <section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">Website bản đồ siêu thị và cửa hàng tiện lợi</h1>
                                </div>

                                
                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-50">
                                    <div class="attr_deg">9&deg;</div>
                                    <div class="attr_rio text-uppercase">Rio</div>
                                    <div class="attr_sun text-uppercase text-white">Sunny</div>
                                    <div class="attr_lon text-uppercase text-white">London</div>
                                    <img src="fun/assets/images/phone01.png" alt="" />
                                </div>
                            </div>

                        </div>
                        <div class="scrooldown">
                            <a href="#features"><i class="fa fa-chevron-down"></i></a>
                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features p-top-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="head_title text-center">
                                    <h2>Tính năng</h2>
                                    <h5>Những tính năng mà bản đồ đem lại</h5>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-diamond6"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h4>Khám phá các trải nghiệm mới ở khắp nơi trên thế giới hoặc ở gần chỗ bạn</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-layers2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h4>Đảm bảo mọi chuyện sẽ theo đúng kế hoạch bằng cách kết nối với những địa điểm</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->



            <section>
                <div class="container">
                    <div class="row">
                        <div class="main_drag roomy-50">
                            <div class="col-md-12">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="background-image:url(fun/assets/images/phone_map.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(fun/assets/images/phone_map1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(fun/assets/images/phone_map2.png)"></div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--screen short section-->

            <!--App Download Section-->
            <section id="download" class="download m-top-100">
                <div class="download_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_download ">
                            <div class="col-md-6">
                                <div class="download_item roomy-100">
                                    <h2 class="text-white">How Download the app?</h2>
                                    <h5 class="text-white m-top-20">Just download the app from the store.
                                        Simple, nice and user-friendly application of theweather.
                                        Only relevant and useful information.</h5>

                                    <div class="download_app m-top-30">
                                        <a href=""><img src="fun/assets/images/appstor.png" alt="" /></a>
                                        <a href=""><img src="fun/assets/images/googleplay.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="download_item m-top-70">
                                    <img class="app_right" src="fun/assets/images/appdownload1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->
                  
            <?php include "footer.php"; ?>
			
        </div>

        <!-- JS includes -->

        <script src="fun/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="fun/assets/js/vendor/bootstrap.min.js"></script>

        <script src="fun/assets/js/jquery.magnific-popup.js"></script>
        <script src="fun/assets/js/jquery.easing.1.3.js"></script>
        <script src="fun/assets/js/swiper.min.js"></script>
        <script src="fun/assets/js/jquery.collapse.js"></script>
        <script src="fun/assets/js/bootsnav.js"></script>



        <script src="fun/assets/js/plugins.js"></script>
        <script src="fun/assets/js/main.js"></script>

    </body>
</html>
