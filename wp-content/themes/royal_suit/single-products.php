<?php
get_header();
global $post;
$v_id = $post->ID;
?> 
<!--<script type="text/javascript" src="http://www.youtube.com/player_api"></script>-->
<script type="text/javascript">
    jQuery(document).ready(function(){
        //   jQuery('.fancybox').attr('rel', 'media-gallery').fancybox({
        //    helpers:  {
        //        thumbs : {
        //            width: 145,
        //            height: 90
        //        }
        //    }
        //    });
        var $img = jQuery('.fe_img');
        if($img.length > 0){
            var $lef_im = jQuery('.wrp_lf');
            var $dv_hg = jQuery('.fe_img').parent().height();
            var h = $dv_hg - $img.height();
            var h2 = $dv_hg - $lef_im.height();
            var k = h/2;
            var k2 = h2/2;
            $img.css('margin-top', k + "px");
            //$lef_im.css('margin-top', k2 + "px"); 
        }var prod_gal = jQuery('.prod_nm').val()+' '+'Gallery';
        jQuery(".fancybox").fancybox({
            'width':900,
            'autoSize' : false,
            'prevEffect': 'none',
            'nextEffect': 'none',
            'openEffect':   'fade' ,  
            'title' :prod_gal,
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
    
        //    jQuery('#fancybox-thumbs').insertAfter('.fancybox-skin');
    
        jQuery( ".news_video_image" ).on( "click", function() {
            jQuery( ".watch_video_class" ).trigger( "click" );
        });
        //    jQuery('.video_share_single').click(function(){
        //     jQuery('.share_icons_wrapper_video ').slideToggle();  
        //    });

        var he_tab = jQuery('.spec_cont_tab-tab-menu .list-group').height();
        jQuery('.spec_cont_tab-tab').css('min-height', he_tab);
    });
    

    
    //
 
    
    
</script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<!-- Second Navigation
 ================================================== -->
<nav class="navbar navbar-inverse navbar-top navbar-fixed-top second-navbar hidden-xs single_nav single_bhags" role="navigation">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse navbar-second nav_bhags">
            <?php
            $p_id = $post->ID;
            $in_ttl = get_field('related_product_list', $p_id);
            $title = $post->post_title;
             //var_dump($in_ttl);exit;
            ?>
            <?php
            if ($in_ttl == '') {
                ?>
                <ul class="nav navbar-nav navbar-right scroll-slow rangesin-menu range_bhags no_other_bhags five_bhags">
                    <?php if (get_field('extra_title', $p_id) != '' || get_field('extra_content', $p_id) != '') { ?>
                        <li  class="Twoli_bhags"><a href="#overview">Overview</a></li>
                    <?php } ?>
                    <?php if (get_field('product_layout_image2', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#layout">Layout</a></li>
                    <?php } ?>
                    <?php if (get_field('specifications', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#specifications">Specifications</a></li>
                    <?php } ?>
                    <?php if (get_field('single_gallery', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#gallery">Gallery</a></li>
                    <?php } ?>
                    <?php if (get_field('download_link', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#brochure">Brochure</a></li>
                    <?php } ?>
                    <?php if (get_field('dealers_list', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#wheretobuy">Where To Buy</a></li>
                    <?php } ?>
                    <?php if ($in_ttl != '') { ?> 
                        <li class="dropdown Twoli_bhags"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Models<span class="caret"></span></a>
                            <ul class="dropdown-menu drpdwn_leftAlgn">
                                <?php
                                foreach ($in_ttl as $in_ttl2) {
                                    $rel_ids = $in_ttl2->ID;
                                    $rel_ttls = $in_ttl2->post_title;
                                    ?>         
                                    <li><a href="<?php echo get_permalink($rel_ids); ?>"><?php echo $rel_ttls; ?></a></li>
                                <?php } ?>               
                            </ul>
                        </li>
                    <?php } ?>  
                </ul>
                <?php
            } else {
                ?>
                <ul class="nav navbar-nav navbar-right scroll-slow rangesin-menu range_bhags no_other_bhags five_bhags">
                    <?php if (get_field('extra_title', $p_id) != '' || get_field('extra_content', $p_id) != '') { ?>
                        <li  class="Twoli_bhags"><a href="#overview">Overview</a></li>
                    <?php } ?>
                    <?php if (get_field('product_layout_image2', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#layout">Layout</a></li>
                    <?php } ?>
                    <?php if (get_field('specifications', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#specifications">Specifications</a></li>
                    <?php } ?>
                    <?php if (get_field('single_gallery', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#gallery">Gallery</a></li>
                    <?php } ?>
                    <?php if (get_field('download_link', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#brochure">Brochure</a></li>
                    <?php } ?>
                    <?php if (get_field('dealers_list', $p_id) != '') { ?>
                        <li class="Twoli_bhags"><a href="#wheretobuy">Where To Buy</a></li>
                    <?php } ?>
                    <?php if ($in_ttl != '') { ?> 
                        <li class="dropdown Twoli_bhags"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Models<span class="caret"></span></a>
                            <ul class="dropdown-menu drpdwn_leftAlgn">
                                <?php
                                foreach ($in_ttl as $in_ttl2) {
                                    $rel_ids = $in_ttl2->ID;
                                    $rel_ttls = $in_ttl2->post_title;
                                    ?>         
                                    <li><a href="<?php echo get_permalink($rel_ids); ?>"><?php echo $rel_ttls; ?></a></li>
                                <?php } ?>               
                            </ul>
                        </li>
                    <?php } ?>  
                </ul>
                <?php
            }
            ?>

        </div>
    </div>
</nav>
<!--<nav class="navbar navbar-inverse navbar-top navbar-fixed-top second-navbar hidden-xs single_nav" role="navigation">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse navbar-second">
          <ul class="nav navbar-nav navbar-right scroll-slow">
            <li><a href="#overview">Overview</a></li>
            <li><a href="#layout">Layout</a></li>
            <li><a href="#specifications">Specifications</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#brouchure">Brochure</a></li>
            <li><a href="#wheretobuy">Where To Buy</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Models<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="product-range.html">inferno 2</a></li>
                    <li><a href="product-range.html">inferno 2</a></li>
                </ul>  
            </li>
          </ul>
        </div>
      </div>
    </nav>-->

<!-- Product Hero Image
================================================== -->
<div class="container fill-top-product" >
    <div class="hero-unit product-img">         
        <div class="scroll-down scroll-slow"><a href="#overview"><i class="fa fa-angle-down"></i></a></div>       
        <!--                    <div class="price_wrp">
        <?php
//                        $p_thu = get_field('price_thousands',$p_id);
//                        $p_hnd = get_field('price_hundreds',$p_id);
//                        if($p_thu != '' || $p_hnd!=''){
//                        echo '<p>$'.$p_thu.','.$p_hnd.'</p>';
//                        }
        ?>
                            </div>-->
        <div class="product-img-inner">
            <?php
            $slider_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            ?>
            <div class="fill" style="background-image:url('<?php echo get_template_directory_uri() . "/timthumb.php?src=" . $slider_image[0] . "&a=t&w=1500&h=700&zc=0"; ?>');">

                <div class="container dd_al">
                    <div class="product-img-caption">
                        <h1><?php echo $post->post_title ?></h1>
                        <p><?php echo $post->post_content ?></p>
                        <p><a target="_blank" class="btn btn-lg btn-primary" href="<?php echo get_field('download_link'); ?>" role="button">Download Brochure</a></p>                        
                    </div>
                    <div class="all_dtl">
                        <?php
                        $pr_thou = get_field('price_thousands', $v_id) ? get_field('price_thousands', $v_id) : "";
                        $pr_hund = get_field('price_hundreds', $v_id) ? get_field('price_hundreds', $v_id) : "";
                        $sz_ft = get_field('size_feet', $v_id) ? get_field('size_feet', $v_id) : "";
                        $sz_inch = get_field('size_inches', $v_id) ? get_field('size_inches', $v_id) : "";
                        $occ = get_field('occupants', $v_id) ? get_field('occupants', $v_id) : "";
                        ?>
                        <?php if ($pr_thou != '' || $pr_hund != '') { ?><span class="price_wr">$&nbsp;<?php echo $pr_thou; ?>,<?php echo $pr_hund; ?></span><?php } ?>
                        <?php if ($sz_ft != '' || $sz_inch != '') { ?>
<span class="size_wr"><span class="size_img"></span>
    <?php echo $sz_ft; ?>'<?php echo $sz_inch; ?>"</span> <?php } ?>
                        <span class="occu_wr"> <?php if ($occ != '') { ?><span class="occu_img"></span><?php } ?><?php echo $occ; ?></span>
                    </div>
                </div>
            </div>    
        </div>
    </div>  
    <div class="overlay_sld"></div>
</div>
<!-- Product Intro Text
================================================== -->
<?php if ((get_field('extra_title', $p_id) != '') || (get_field('extra_content', $p_id) != '') || (get_field('extra_title', $p_id) != NULL) || (get_field('extra_content', $p_id) != NULL)) { ?>
    <?php
    $in_ttl = get_field('extra_title', $p_id);
    $in_txt = get_field('extra_content', $p_id);
//            $bg_col= get_field('feature_background_color',$p_id);
//            $f_img= get_field('feature_image',$p_id);           
    ?>
    <div class="product-introtext sin-prd" id="" style="">
    <!--<div class="product-introtext sin-prd" id="overview" style="background:<?php // echo $bg_col; ?>">-->
        <div class="container ">
            <div id="overview" style=""></div>
            <div class="row">     
                <div class="col-md-12">                         
                    <div class="al_txt">
                        <h2 style="text-align:center;"><?php echo $in_ttl; ?></h2>
    <?php echo $in_txt; ?>
                    </div>                
                </div>
                <!--            <div class="col-md-3">
    <?php // if($f_img != '') { ?>
                            <img src="<?php // echo $f_img['url'];  ?>"/>
                <?php // } ?>
                        </div>-->
            </div>
        </div> 
    </div>
<?php } ?>

<!-- Product Video
================================================== -->
<?php
$product_video_empty = get_field('product_video_url', $p_id);
$video_poster_image = get_field('video_poster_image', $p_id);
$video_poster_image1 = $video_poster_image['url'];
// $video_poster_image1 =  isset($video_poster_image['url']);
if ($product_video_empty != '' && $video_poster_image1 != '') {
// if($product_video_empty != '' && $video_poster_image1 !=''){
    ?>
    <div class="product-video" >
        <div class="container ">
            <div class="row">
    <?php
    ?>
                <div class="col-md-7 news_video_image">
                <?php
                echo "<img class='img-responsive' src='" . get_template_directory_uri() . "/timthumb.php?src=" . $video_poster_image1 . "&a=t&w=824&h=542&zc=1' alt=''>";
                ?>
                    <div class="vdo_play_btn"></div>
                </div>
                <div class="col-md-5 extra-padding">
                    <h2><?php echo get_field('product_video_title', $p_id); ?></h2>
                    <p><?php echo get_field('video_content', $p_id); ?></p>
                    <p><a class="btn btn-lg btn-primary watch_video_class" href="#" role="button" data-toggle="modal" data-target="#video_modl" role="button"><i class="fa  fa-play"></i> watch video</a></p>
                    <!--<p><a class="youtube btn btn-lg btn-primary" href="<?php // echo get_field('product_video_url' );  ?>" role="button"><i class="fa  fa-play"></i> watch video</a></p>-->
                </div>
            </div>
        </div> 
    </div>

    <!--video model-->
    <div class="modal fade bs-example-modal-lg layoutmodal video_modal_class" id="video_modl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg dreamseeker-gallery" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <h4 class="modal-title uppercase" id="myModalLabel"><?php echo($post->post_title); ?> Video</h4>
                </div>
                <div class="modal-body" id="yt-player">
                    <iframe id="sin_p_frm" src="<?php echo get_field('product_video_url', $p_id); ?>?rel=0&enablejsapi=1" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--end video model-->

<?php } ?>
<!--<a class="fancybox" data-thumbnail="<?php // echo get_template_directory_uri();  ?>/img/fb-feed-img.jpg" href="<?php // echo get_template_directory_uri();  ?>/img/fb-feed-img.jpg">
<img src="<?php // echo get_template_directory_uri();  ?>/img/fb-feed-img.jpg">
</a>
<a class="fancybox" data-thumbnail="<?php // echo get_template_directory_uri();  ?>/img/featured-products-1.jpg" href="<?php // echo get_template_directory_uri();  ?>/img/featured-products-1.jpg">
    <img src="<?php // echo get_template_directory_uri();  ?>/img/fb-feed-img.jpg">
</a>-->
<!-- Product Layout
================================================== -->
<?php if (get_field('product_layout_image2', $p_id) != '') { ?>
    <div class="product-layout" id="layout" style="">
        <div class="container ">
            <div class="row">
                <div class="header-wrapper">
                    <h2>Layout</h2>
                </div>
            </div>
            <div class="row">
                  
                <div class="col-md-12">
    <?php
    $product_layout_image = get_field('product_layout_image2', $p_id);
    $product_layout_image1 = $product_layout_image['url'];
    ?>
                    <a href="#" role="button" data-toggle="modal" data-target="#layout_m">  
                    <?php if ($product_layout_image1 != '') { ?>
                            <img src="<?php echo $product_layout_image1; ?>"/>
                        <?php } else { ?>
                        <?php } ?>
                    </a></div>

                <div class="col-md-12">
                    <p> <a class="btn btn-lg btn-primary tech_btn_bhags" href="#" role="button" data-toggle="modal" data-target="#myModal">Tech Specs</a>
                        <a class="btn btn-lg btn-primary tech_btn_bhags" target="_blank" href="<?php echo get_field('virtual_tour_link'); ?>" role="button">Virtual Tour</a></p>
                </div>
            </div>
        </div> 
    </div>
<?php } ?>
<!-- Product Layout  Modal
    ================================================== -->
<div class="modal fade bs-example-modal-lg layoutmodal" id="layout_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg dreamseeker-gallery sin_p_gg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
<!--                <a type="button" class="share" id="news_share2"><span aria-hidden="true"></span></a>
                <div class="share_icons_wrapper_two">
                <div class="addthis_sharing_toolbox" style="display:none;"></div>
                </div>-->
                <!--<a id="news_share" class="article-links  black-link uppercase share"></a>-->
                <!--                 <div class="share_icons_wrapper">
                                <div class="addthis_sharing_toolbox art" style="display:none;"></div>
                                </div>-->
                <h4 class="modal-title uppercase" id="myModalLabel"><?php echo $title; ?> layout</h4>
            </div>
<?php
$product_layout_image_new = get_field('product_layout_image2', $p_id);
$product_layout_image_new1 = $product_layout_image_new['url'];
?>
            <div class="modal-body">
                <img src="<?php echo $product_layout_image_new1; ?>" class="img-responsive"  />
            </div>
        </div>
    </div>
</div>

<?php
$im_tt_pnl = get_field('image_text_panel', $p_id);
if ($im_tt_pnl) {
    $i = 1;
    foreach ($im_tt_pnl as $im_tt_pnls) {

        $in_ttl = $im_tt_pnls['feature_heading'];
        $in_txt = $im_tt_pnls['feature_text'];
        $bg_col = $im_tt_pnls['feature_background_color'];
        $f_img = $im_tt_pnls['feature_image'];
        $t_col = $im_tt_pnls['text_color'];
        $im_pp = $im_tt_pnls['image_position'];
        ?>
        <div class="product-introtext sin-prd overview" id="overview_<?php echo $i; ?>" style="background:<?php echo $bg_col; ?>">
            <div class="container ">       
                <div class="row">   
                    <div class="col-md-6 col-sm-6" style="float:<?php echo $im_pp ?>">
        <?php
        if ($f_img != '') {
            $p_gallery_new = $f_img['url'];
            ?>               
                            <?php echo "<img class='fe_img' src='" . get_template_directory_uri() . "/timthumb.php?src=" . $p_gallery_new . "&a=t&w=470&h=353&zc=1' alt=''>"; ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-6 col-sm-6" style="float:left;">
                        <div class="wrp_lf">          
                            <h2 class="fe_tltl"  style="text-align:left;color:<?php echo $t_col; ?>"><?php echo $in_ttl; ?></h2>
                            <div class="al_txt" style="font-family: 'Open Sans', sans-serif!important;color:<?php echo $t_col; ?>"><?php echo $in_txt; ?></div>
                        </div>
                    </div>            
                </div>
            </div> 
        </div>
        <?php $i++;
    }
} ?>

<!-- Product Specifications
================================================== -->
<?php if (get_field('specifications', $p_id) != '') { ?>
    <div class="products-specs" id="specifications" style="">
        <div class="container ">
            <div class="row"><div class="header-wrapper"><h2>Specifications</h2></div></div>
            <div class="row">
                <div class="panel-group spec_panel" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php
                    $specs = get_field('specifications', $p_id);
                    if ($specs) {
                        $i = 1;
                        foreach ($specs as $spec) {
//                                var_dump($spec);
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                                    <h4 class="panel-title">
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" 
                                        <?php if ($i == 1) { ?>
                                                class="accordion-toggle" aria-expanded="true"
                                            <?php } else { ?>
                                                class="accordion-toggle collapsed" aria-expanded="false"
                                            <?php } ?>              

                                            aria-controls="collapse<?php echo $i; ?>"><?php echo $spec["group_heading"]; ?></a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $i; ?>" 
                                <?php if ($i == 1) { ?>
                                         class="panel-collapse collapse in"
                                     <?php } else { ?>
                                         class="panel-collapse collapse"
                                     <?php } ?>                        
                                     role="tabpane<?php echo $i; ?>" aria-labelledby="heading<?php echo $i; ?>">
                                    <div class="panel-body">
                                        <?php $spec_it = $spec['specification_item'];
                                        foreach ($spec_it as $spec_its) {
                                            ?>
                                            <div class="left_conto" style="<?php if ($spec_its['spec_options'] != '') { ?>width:50%;float:left;<?php } else { ?>width:100%;float:left;<?php } ?>">
                                                <p> <?php echo ($spec_its['heading']); ?></p>
                                                <div class="spec_ds">
                <?php echo ($spec_its['spec_description']); ?>
                                                </div>
                                            </div>
                <?php if ($spec_its['spec_options'] != '') { ?>
                                                <div class="spec_opt" style="width:50%;float:right;">
                                                    <h4 style="font-weight:bold;">Options</h4>
                                                <?php echo ($spec_its['spec_options']) ?>
                                                </div>   
                                            <?php } ?>
            <?php }// echo $spec['specification_content'];  ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>

                </div>
            </div>
            <input type="hidden" class="prod_nm" value="<?php echo $title; ?>"/>
        </div> 
    </div>


<?php } ?>

<!-- Product Gallery
================================================== -->
<?php
$product_gallery_image = get_field('single_gallery', $p_id);
//                    if(count($product_gallery_image) > 0){
if ($product_gallery_image != '') {
    ?>
<div class="products-gallery" id="gallery">
        <div class="container ">
            <div class="row"><div class="header-wrapper"><h2>Gallery</h2></div></div>
            <div class="row">
                <div class="product-slider">
                    <?php
                    foreach ($product_gallery_image as $pro_gallery) {
                        $pro_gallery_new = $pro_gallery['url'];
                        ?>
                        <div class="slide">
                            <!--                        <a href="#" class="wrop" role="button" data-toggle="modal" data-target="#layout_gal">
                                                    </a>-->
                            <a class="fancybox gallery_links" data-fancybox-group="gallery" data-fancybox-type ="image" data-thumbnail="<?php echo $pro_gallery_new; ?>" href="<?php echo $pro_gallery_new; ?>">
                            <!--<a class="fancybox gallery_links" data-fancybox-group="gallery" data-fancybox-type ="image" data-thumbnail="<?php // echo $pro_gallery_new ; ?>" href="<?php // echo get_template_directory_uri() . "/timthumb.php?src=" . $pro_gallery_new. "&a=t&w=980&h=540&zc=1&a=c"  ?>">-->
                                <?php
                                echo "<img class='img-responsive' src='" . get_template_directory_uri() . "/timthumb.php?src=" . $pro_gallery_new . "&a=t&w=550&h=350&zc=1&a=c' alt=''>";
                                ?>
                            </a>                       
                        </div>                    
                    <?php } ?>                    
                </div>
            </div>
        </div> 
    </div>
<?php } else {
    
} ?>

<!--============================================================Product gallery modal======================================================================================================-->

<div class="modal fade bs-example-modal-lg gallerymodal" id="layout_gal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg dreamseeker-gallery" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
<!--                <a href="#" type="button" class="share" id="news_share"><span aria-hidden="true"></span></a>
                <div class="share_icons_wrapper_two">
                <div class="addthis_sharing_toolbox" style="display:none;"></div>
                </div>-->
                <h4 class="modal-title uppercase" id="myModalLabel"><?php echo $title; ?>Gallery</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
    
</div>






<!-- Product Download Brouchre
================================================== -->

<?php if (get_field('download_link', $p_id) != '') { ?>
    <div class="product-brochure" id="brochure">
        <div class="container ">
            <div class="row">
                <div class="">
                    <p><a target="_blank" class="btn btn-lg btn-primary" href="<?php echo get_field('download_link', $p_id); ?>" role="button">Download Brochure</a></p>
                </div>
            </div>
        </div> 
    </div>
<?php } ?>
<!-- Product Where to buy
================================================== -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBrjmQ-IA5gda1QUk9_cMYYIc0VWPrBUE0&sensor=false&libraries=places"></script>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlPCmqfGX5ftf7YX0UXrh-sY2ARCfyJMwAccreditations"></script>-->
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrjmQ-IA5gda1QUk9_cMYYIc0VWPrBUE0&callback=goma"></script>-->
<input class="path_link" type="hidden" value="<?php echo bloginfo('template_url'); ?>"/>
<div class="product-wheretobuy" id="wheretobuy">
    <div class="container ">
        <div class="row">
            <div class="header-wrapper"><h2>Where to buy</h2>
            </div>
        </div>
        <div class="row">
            <div class="find-a-dealer-btn">
                <p><a target="_blank" class="btn btn-lg btn-primary" href="/find-a-dealer" role="button">Find A Dealer</a></p>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                <h4 class="modal-title uppercase" id="myModalLabel">tech specs</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <tbody>
                        <?php
                        $spec_pops = get_field('tech_spec_popup', $p_id);
                        if ($spec_pops) {
                            foreach ($spec_pops as $spec_pop) {
                                ?>    
                                <tr>
                                    <td><?php echo $spec_pop['spec_title1']; ?></td>
                                    <td><?php echo $spec_pop['spec_value'] ?></td>
                                </tr>		
                            <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
<?php echo get_field('tech_spec_popup_footer', $p_id); ?>
            </div>
        </div>
    </div>
</div>




<?php
get_footer();
?>