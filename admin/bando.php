
<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include "navbar.php"; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                
            	<?php include "slider.php"; ?>
			</nav>

            <!-- Navbar End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Bản đồ</h6>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                            <select name="thelist" class="form-select" onChange="GetMap(this, 'theinput')">
                                <option>All</option>
                                <option>Cửa hàng tiện lợi</option>
                                <option>Siêu thị tiện lợi</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
						<div id="map"></div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
			<?php include "footer.php"; ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
       
		<?php include "javascript.php"; ?>
		<script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
	  <script>
	  function GetMap(thelist)
			{
                var content = "All";
				var map = new Microsoft.Maps.Map('#map', {
					credentials: 'Aq57_I2YLhdHHLMVsa7FQzG2_6RrIHr9MopSdBQv0JvLfMidXvEaMmDJY-Uhyini',
					center: new Microsoft.Maps.Location(10.373529, 105.432962),
					mapTypeId: Microsoft.Maps.MapTypeId.Road,
					zoom: 15
				});
				db.collection("hotel").get().then((querySnapshot) => {
				querySnapshot.forEach((doc) => {
					var marker_icon = '';
						if(content=="Cửa hàng tiện lợi"){
                            if (doc.data().Loai == 1){
								marker_icon = '../images/mart.png';
                                loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);

                                pin = new Microsoft.Maps.Pushpin(loc, {
							        title: doc.data().TenDiaDiem,
							        subTitle: doc.data().DiaChi,
							        icon : marker_icon,
	
						        });
                            }
                            else 
                            {
                               marker_icon = '../images/1.psd';
                               						loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);

                               pin = new Microsoft.Maps.Pushpin(loc, {							
						         icon : marker_icon,	
						       });
                            }
                            						map.entities.push(pin);
                        }
							else if(content=="Siêu thị tiện lợi")
                            {
								if (doc.data().Loai == 1)
                                {
                                     marker_icon = '../images/1.psd';
                                     						loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);

                                     pin = new Microsoft.Maps.Pushpin(loc, {						
						                icon : marker_icon,	
						            });
                                }
                                else 
                                {
                                    marker_icon = '../images/shopping.png';
						            loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);

                                    pin = new Microsoft.Maps.Pushpin(loc, {
							            title: doc.data().TenDiaDiem,
							            subTitle: doc.data().DiaChi,
							            icon : marker_icon,
	
						            });
                                }
                                	map.entities.push(pin);
							}
                            else if (content=="All"){
                                  if (doc.data().Loai == 2)
                                    {
                                                marker_icon = '../images/shopping.png';
						                        loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);
                                               pin = new Microsoft.Maps.Pushpin(loc, {
							                    title: doc.data().TenDiaDiem,
							                    subTitle: doc.data().DiaChi,
							                    icon : marker_icon,
	
						                    });
                                    }
                                    else if (doc.data().Loai == 1){
                                        marker_icon = '../images/mart.png';
						                loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);

                                        pin = new Microsoft.Maps.Pushpin(loc, {
							                title: doc.data().TenDiaDiem,
							                subTitle: doc.data().DiaChi,
							                icon : marker_icon,
	
						                });
                                        

                                    }
                                    map.entities.push(pin);
                            }
						

					});
				});
                  var idx = thelist.selectedIndex;

                  var content = thelist.options[idx].innerHTML;

			}
     
    </script>
</body>

</html>