
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<?php include "header.php"; ?>

    <body data-spy="scroll" data-target=".navbar-collapse">


            <?php include "navbar.php"; ?>

			<section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">Bản đồ khách sạn, nhà nghỉ</h1>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-30">
                                    <img src="fun/assets/images/map.png" alt="" width="10000px" />
                                </div>
                            </div>

                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--screen short section-->

            <section id="screen_area" class="screen_area">
                <div class="container">
						<div class="card mt-5 mb-5">
							<div id="map"></div>
						</div>
                </div><!--End off container-->
            </section><!--End off Screen01 Area Section -->

            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->
                  
            <?php include "footer.php"; ?>


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

		<?php include "javascript.php"; ?>
		<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AuMwXqmzLyhAzBgfWKlKeURmmmDg3KGquxbk2dIhCBSgRv0JMkTYKALBMdtb32Og' async defer></script>
        <script>
        function GetMap()
                {
                    var map = new Microsoft.Maps.Map('#map', {
                        credentials: 'Aq57_I2YLhdHHLMVsa7FQzG2_6RrIHr9MopSdBQv0JvLfMidXvEaMmDJY-Uhyini',
                        center: new Microsoft.Maps.Location(10.373529, 105.432962),
                        mapTypeId: Microsoft.Maps.MapTypeId.Road,
                        zoom: 15
                    });
                    db.collection("hotel").get().then((querySnapshot) => {
                    querySnapshot.forEach((doc) => {
                        var marker_icon = '';
                            if(doc.data().Loai == 1)
                                    marker_icon = 'images/hotel.png';
                                else if(doc.data().Loai == 2)
                                    marker_icon = 'images/motel3.png';
                                
                            loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);
                            pin = new Microsoft.Maps.Pushpin(loc, {
                                title: doc.data().TenDiaDiem,
                                subTitle: doc.data().DiaChi,
                                icon : marker_icon,
        
                            });
                            map.entities.push(pin);
                        });
                    });
                }
        
        </script>

    </body>
</html>
