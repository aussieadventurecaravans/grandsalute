 <?php
/*
  Template Name: Product
 */
get_header();
global $post;
?> 

   <!-- Second Navigation
    ================================================== -->
    <nav class="navbar navbar-inverse navbar-top second-navbar hidden-xs" role="navigation">
      <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse navbar-second">
          <ul class="nav navbar-nav navbar-right">
            <li  class="active"><a href="#">Overview</a></li>
            <li><a href="#">Layout</a></li>
            <li><a href="#">Specifications</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Brochure</a></li>
            <li><a href="#">Where To Buy</a></li>
            <li><a href="#">Other Models</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Product Hero Image
    ================================================== -->
    <div class="container fill-top-product">
        <div class="hero-unit product-img">         
            <div class="scroll-down"><a href="#featured-products">scroll down <i class="fa fa-angle-down"></i></a></div>
            <div class="product-img-inner">
                <div class="fill" style="background-image:url('img/home-slider-1.jpg');">
                <div class="container">
                    <div class="product-img-caption">
                      <h1>Inferno</h1>
                      <p>off-road</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Download Brochure</a></p>
                    </div>
                </div>
              </div>    
            </div>
        </div>
    </div>
    
    <!-- Product Intro Text
    ================================================== -->
    <div class="product-introtext" >
        <div class="container ">
            <div class="row">
                <p>Australian made Dreamseeker Caravans are made to make your dreams happen. </p>
            </div>
        </div> 
    </div>
    <!-- Product Video
    ================================================== -->
    <div class="product-video" >
        <div class="container ">
            <div class="row">
                <div class="col-md-7"><img src="img/product-video.jpg"/></div>
                <div class="col-md-5 extra-padding">
                    <h2>experience the thrill</h2>
                    <p>The Dreamseeker Inferno is a caravan without limits. Everything you need making the Inferno ready to take on anything.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button"><i class="fa  fa-play"></i> watch video</a></p>
                </div>
            </div>
        </div> 
    </div>

    <!-- Product Layout
    ================================================== -->
    <div class="product-layout" >
        <div class="container ">
            <div class="row">
                <div class="col-md-12"><img src="img/product-layout1.png"/></div>
                <div class="col-md-12">
                    <p><a class="btn btn-lg btn-primary" href="#" role="button" data-toggle="modal" data-target="#myModal">  Tech Spaecs</a><a class="btn btn-lg btn-primary" href="#" role="button">  Virtual Tour</a></p>
                </div>
            </div>
        </div> 
    </div>

    <!-- Product Specifications
    ================================================== -->
    <div class="products-specs" id="featured-products">
        <div class="container ">
            <div class="row"><div class="header-wrapper"><h2>Specifications</h2></div></div>
            <div class="row">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">internal</a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                              <h3>Cafe Dinette</h3>
                              <h3>Queen Island Bed</h3>
                          </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Appliances</a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                             <ul>
                                <li>Fridge / Freezer(select 1 option)</li> 
                                <li>Thetford 184ltr</li>
                                <li>NovaKool 185Ltr</li>
                                <li>Dometic 12v 185Ltr</li>
                            </ul>
                          </div>
                        </div>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Electrical</a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                          </div>
                        </div>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">External</a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                          </div>
                        </div>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Protection</a>
                          </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Product Gallery
    ================================================== -->
    <div class="products-gallery" id="featured-products">
        <div class="container ">
            <div class="row"><div class="header-wrapper"><h2>Gallery</h2></div></div>
            <div class="row">
                <div class="product-slider">
                    <div class="slide"><img src="img/product-img-1.png"></div>
                    <div class="slide"><img src="img/product-img-2.png"></div>
                    <div class="slide"><img src="img/product-img-3.png"></div>
                    <div class="slide"><img src="img/product-img-4.png"></div>
                    <div class="slide"><img src="img/product-img-.png"></div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Product Download Brouchre
    ================================================== -->
    <div class="product-brouchre" >
        <div class="container ">
            <div class="row">
                <div class="">
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Download Brouchre</a></p>
                </div>
            </div>
        </div> 
    </div>

    <!-- Product Where to buy
    ================================================== -->
    <div class="product-wheretobuy" >
        <div class="container ">
            <div class="row"><div class="header-wrapper"><h2>Where to buy</h2></div></div>
            <div class="row">
                <div class="col-sm-5 company-info">
                    <img src="img/wheretobuy-logo.png" class="img-responsive" alt="Responsive image" align=left>
                    <h5>Brisbane water caravans</h5>
                    <p>176-180 Bellarine Highway</br>
                        Newcomb, Geelong.</br>
                        T: 0466 186 386</br>
                        E: bwcaravans@hotmail.com</br>
                        W: <a href="www.brisbanewaterrvs.com.au" target="_blank">www.brisbanewaterrvs.com.au</a>
                    </p>
                </div>
                <div class="col-sm-7 ">
                    <p><img src="img/product-location.png" class="img-responsive" alt="Responsive image"></p>
                </div>
            </div>
        </div> 
    </div>

    <!-- Product Specifications Modal
    ================================================== -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title uppercase" id="myModalLabel">tech specs</h4>
              </div>
                <div class="modal-body">
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>Body Length (mm)</td>
                          <td>6760</td>
                        </tr>
                        <tr>
                          <td>Interior Length (mm)</td>
                          <td>6034</td>
                        </tr>
                        <tr>
                          <td>Travel Length (mm)</td>
                          <td>8039 / 8039</td>
                        </tr>
                          <tr>
                          <td>Travel Height (mm)</td>
                          <td>3000 / 3055</td>
                        </tr>
                          <tr>
                          <td>Travel Length (mm)</td>
                          <td>8039 / 8039</td>
                        </tr>
                          <tr>
                          <td>Interior Height (mm)</td>
                          <td>1978</td>
                        </tr>
                          <tr>
                          <td>Width Including Awning (mm)	</td>
                          <td>2470</td>
                        </tr>
                          <tr>
                          <td>Tow Ball (kg)</td>
                          <td>260 / 250</td>
                        </tr>
                      </tbody>
                    </table>
              </div>
                <div class="modal-footer">
                    <p>The tow ball and tare weights are only a guide and will change depending on accessories that are fitted to your van. it is advisable to discuss this with your Dreamseeker dealer. Dreamseeker allow an amount of additional weight (carrying load) for each individual unit manufactured above the initial manufactured tare weight of the unit. This �carrying load� is for the customers individual weight requirements and can be made up of �any� additional weight they propose to load the unit up of. ie water, food, clothes etc. The standard unit carrying loads Dreamseeker apply are; single axle, internal shower units 375kg. Tandem Axle, internal shower units 475kg.</p>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>