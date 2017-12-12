<?php
/*
  Template Name: Contact us
 */
get_header();
global $post;
$p_id = $post->ID;
?> 

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    //            google.maps.event.addDomListener(window, 'load', init);
    //        
    //            function init() {
    //                // Basic options for a simple Google Map
    //                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    //                var mapOptions = {
    //                    // How zoomed in you want the map to start at (always required)
    //                    zoom: 15,
    //                    center: new google.maps.LatLng(-37.616134, 144.942562), // sydney
    //
    //                    // How you would like to style the map. 
    //                    // This is where you would paste any style found on Snazzy Maps.
    //                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    //                };
    //
    //                // Get the HTML DOM element that will contain your map 
    //                // We are using a div with id="map" seen below in the <body>
    //                var mapElement = document.getElementById('map');
    //
    //                // Create the Google Map using our element and options defined above
    //                var map = new google.maps.Map(mapElement, mapOptions);
    //                var iconBase = $('.path_link').val();
    //                // Let's also add a marker while we're at it
    //                var marker = new google.maps.Marker({
    //                    position: new google.maps.LatLng(-37.616134, 144.942562),
    //                    map: map,
    //                    title: 'Snazzy!',
    //                    icon: iconBase + '/img/marker.png'
    //                });
    //            }
</script> 

<!-- Second Navigation
   ================================================== -->


<nav class="navbar navbar-inverse navbar-top second-navbar hidden-xs navbar-fixed-top cntct_bhags" role="navigation">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse navbar-second">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'sub-menu-dream',
                'menu_class' => 'nav navbar-nav navbar-right'
            ));
            ?>
        </div>
    </div>
</nav>


<!-- Contact Us  Hero Image
================================================== -->
<!--    <div class="range-heroimg" style="background-image:url('<?php echo get_template_directory_uri() ?>/img/range-heroimg.jpg');">-->
<div class="range-heroimg cntct_header" style="background-color:#6C6E6B;">
    <div class="container ">
        <div class="row">
            <h1>Contact Us</h1>
        </div>
    </div> 
</div>

<div class="contact-us">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-8 contact-left">
                <input class="path_link" type="hidden" value="<?php echo bloginfo('template_url'); ?>"/>
                <div class="col-md-12">
                    <h2>Enquiry</h2>
                </div>
                <form class="cont_frm">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control input_val f_name input_bhags" id="f_name" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control input_val l_name input_bhags" id="l_name" placeholder="Last Name">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control input_val email1 input_bhags" id="email1" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="phone" class="form-control input_val phone input_bhags" id="phone" placeholder="Phone">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control input_val p_code input_bhags" id="p_code" placeholder="Postcode">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control input_val chasy_no input_bhags" id="chasy_no" placeholder="Chassis Number">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control input_val dealer input_bhags" id="dealer" placeholder="Dealer">
                    </div>
                    <div class="form-group col-md-6">
                        <select name="test1" class="form-control hereus1 input_bhags" id="hereus">
                            <?php
                            if (get_field('how_did_you_hear_about_us_options', $p_id) != '') {
                                $hhr = get_field('how_did_you_hear_about_us_options', $p_id);
                                if ($hhr) {
                                    $i = 1;
                                    foreach ($hhr as $hhrs) {
                                        ?>
                                        <option value="<?php echo $hhrs['option_b']; ?>"><?php echo $hhrs['option_b']; ?></option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select name="test2" class="form-control hereus2 input_bhags" id="hereus2" >
                            <?php
                            if (get_field('general_options', $p_id) != '') {
                                $gen = get_field('general_options', $p_id);
                                if ($gen) {
                                    $i = 1;
                                    foreach ($gen as $gens) {
                                        ?>
                                        <option value="<?php echo $gens['option_a']; ?>"><?php echo $gens['option_a']; ?></option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-default send_mail">Submit</button>
                    </div>
                    <div class="col-md-6 load_cont_btn">
                        <div class="loading_btn"></div>
                        <div class="loaded_btn"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 contact-right">
                <h2>CONTACT US</h2>
                <?php
                $rows = get_field('contact_us_section');
                ?>
                <div class="contact-itm">                        
                    <h5><?php echo $rows[0]['section_title']; ?></h5>
                    <?php echo $rows[0]['section_content']; ?>
                </div>
                <div class="contact-itm">
                    <h5><?php echo $rows[1]['section_title']; ?></h5>
                    <?php echo $rows[1]['section_content']; ?>
                </div>
                <div class="contact-itm">
                    <h5><?php echo $rows[2]['section_title']; ?></h5>
                    <?php echo $rows[2]['section_content']; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Locate us on Map
================================================== -->
<!--    <div class="range-viewmore" >
        <div class="container ">
            <div class="row scroll viewmore_main_row">
                <a href="#" class="uppercase">LOCATE US ON MAP &nbsp; 
                    <i class="fa fa-angle-down fa-2x"></i>
                </a>
                <span class="view_more_wrp"> <i class="dropdownicon_viewmore"></i></span>
            </div>
        </div> 
    </div>-->

<!-- Location Map
================================================== -->
<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>-->
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlPCmqfGX5ftf7YX0UXrh-sY2ARCfyJMwAccreditations&callback=goma"></script>-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrjmQ-IA5gda1QUk9_cMYYIc0VWPrBUE0&callback=goma"></script>
<?php
$address1 = "24 Grasslands Ave Craigieburn VIC 3064 Australia";
$lat = "-37.616311";
$lng = "144.942540";
$key = "";
$c_nm = "Dreamseeker Caravans";
$telephone_d = "0401 486 638";
$email_d = "";
$webiste_d = "";
$query_[] = array($address1, $lat, $lng, $key, $c_nm, $telephone_d, $email_d, $webiste_d);
?>
<script type="text/javascript">     
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        //        console.log('saasas');
        var locations = JSON.parse('<?php echo json_encode($query_); ?>');
        var mapOptions = {
            zoom: 4,
            center: new google.maps.LatLng(-25.368268, 135.357241), // australia
            scrollwheel: false,
            styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]}, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]}, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}, {"lightness": 17}]}, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]}, {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 18}]}, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 16}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]}, {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#dedede"}, {"lightness": 21}]}, {"elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]}, {"elementType": "labels.text.fill", "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]}, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]}, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#fefefe"}, {"lightness": 20}]}, {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]}]
                
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);

        //        var infowindow = new google.maps.InfoWindow();
        var bounds = new google.maps.LatLngBounds();
        var marker, i;
        var iconBase = $('.path_link').val();
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: iconBase + '/img/marker_new_small.png'
                
            });

            bounds.extend(marker.position);
            //            google.maps.event.addListener(marker, 'click', (function(marker, i) {
            //                return function() {
            //                    infowindow.setContent('<div class="info_wrap"><div class="header"><div class="arrow-up"></div><h4 class="uppercase">DEALERSHIP DETAILS</h4></div><div class="details"><h4 class="uppercase">' + locations[i][4] + '</h4><div>T: ' + locations[i][5] + '</div><div>E: ' + locations[i][6] + '</div><div>W: ' + locations[i][7] + '</div><button type="submit" class="btn btn-default direct_bb">DIRECTIONS</button></div></div>');
            //                    infowindow.open(map, marker);
            //                }                   
            //            })(marker, i));
            //now fit the map to the newly inclusive bounds
            map.fitBounds(bounds);

            //(optional) restore the zoom level after the map is done scaling
            var listener = google.maps.event.addListener(map, "idle", function () {
                map.setZoom(11);
                google.maps.event.removeListener(listener);
            });
        }
        
    }
</script>
<style>
    .sing_map #map{
        /*height:145px;*/
    }
</style>

<div class="map_pare_div">
    <div class="location-map">
        <div id="map"></div>
    </div>
</div>
<?php
get_footer();
?>