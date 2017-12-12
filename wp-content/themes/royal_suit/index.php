<?php
get_header();
global $post;
?>

<script>
    jQuery(document).ready(function() {
        //setTimeout(function(){
        //jQuery('.scroll-down.scroll-slow').insertAfter('.ls-bottom-nav-wrapper');
        //}, 800);
    });
</script>
<style type="text/css">

</style>
<!--======================================================================Carousel Slider=====================================================================================-->
<div class="container fill-top">
    <?php //layerslider(1); ?> 
    <!--<div class="slide_al_ww">-->
    <div class="slide_sss">
        <?php echo do_shortcode('[layerslider id="4"]'); ?>

        <!--        <div class="scroll-down scroll-slow">
                    <a href="#featured-products">scroll<i class="fa fa-angle-down"></i></a>
                </div>-->

    </div>
    <!--</div>-->
</div>
<div class="container" >
    <div>         
        <div class="scroll-down scroll-slow">
            <a href="#featured-products">
                <!--                scroll down -->
                <i class="fa fa-angle-down"></i>
            </a>
        </div>       
    </div>  
    <!--<div class="overlay_sld1"></div>-->
</div>


<!--=============================================================Featured Products==================================================================================================-->
<!--<div class="test">test</div>-->
<div class="featured-products hm_fea" id="featured-products">
    <div class="container">
        <div class="row">
            <div class="header-wrapper">
                <?php $hm_id = cedo_get_option('cedo_home_id'); ?>
                <?php $featured_product_title = get_field('featured_products_title', $hm_id); ?>
                <h2><?php echo $featured_product_title; ?></h2>
            </div>
        </div>
        <div class="row gallery">
           
            <?php
            $argsproducts = array(
                'posts_per_page' => -1,
                'offset' => 0,
                'orderby' => 'post_date',
                'category' => '',
                'post_type' => 'products',
                'post_status' => 'publish',
                'order' => 'DESC',
            );
            $looppro = get_posts($argsproducts);
            $featured_count = 0;
            
            foreach ($looppro as $loop_product) {
                $product_image = wp_get_attachment_image_src(get_post_thumbnail_id($loop_product->ID), 'full');
                $product_title = $loop_product->post_title;
                $product_desc = $loop_product->post_content;
                $v_id = $loop_product->ID;
                $length_you_want = '300';
                 
            $hh = get_field('featured_product', $v_id);
            //var_dump($hh);
            if (isset($hh) && !empty($hh)) {
                $featured_count++;
//                echo 'product set';
//                echo $featured_count;
                if($hh='yes' && $featured_count<4){
                ?>
                <a href="<?php echo get_permalink($loop_product->ID); ?>" >
                    <span class="col-sm-4 nopadding f-product-items">
                        <span>
                            <?php
                            echo "<img class='img-responsive' src='" . get_template_directory_uri() . "/timthumb.php?src=" . $product_image[0] . "&a=t&w=500&h=300&zc=1' alt=''>";
                            ?> 
                        </span>
                        <span class="feature_desc_wrpper">
                            <h4><?php echo $product_title; ?></h4>
                            <?php
//                        $pr_thou = get_field('price_thousands', $v_id)? get_field('price_thousands', $v_id) : "";
//                        $pr_hund = get_field('price_hundreds', $v_id)? get_field('price_hundreds', $v_id) : "";
//                        $sz_ft = get_field('size_feet', $v_id)? get_field('size_feet', $v_id) : "";
//                        $sz_inch = get_field('size_inches', $v_id)? get_field('size_inches', $v_id) : "";
//                        $occ = get_field('occupants', $v_id)? get_field('occupants', $v_id) : "";
//                        $tare = get_field('tare', $v_id)? get_field('tare', $v_id) : "";
//                        $ball_weight = get_field('ball_weight', $v_id)? get_field('ball_weight', $v_id) : "";
//                        $other_details = get_field('other_details', $v_id)? get_field('other_details', $v_id) : "";
                            ?>
        <!--                        <span class="des">
                            <?php // if($pr_thou != '' || $pr_hund !='') { ?><span class="price_wr">$&nbsp;<?php // echo $pr_thou; ?>,<?php // echo $pr_hund; ?></span><?php // } ?>
                            <?php // if($sz_ft != '' || $sz_inch !='') { ?><span class="size_wr"><span class="size_img"></span><?php // echo $sz_ft; ?>'<?php // echo $sz_inch; ?>"</span><?php // } ?>
                                    <span class="occu_wr"> <?php // if($occ != '') {     ?><span class="occu_img"></span><?php // }     ?><?php // echo $occ;     ?></span>
                                    <span class="other_wr"><?php // echo $other_details;     ?></span>
                                    <span class="tare_wr">Tare (approx):<?php // echo $tare;     ?></span>
                                    <span class="b_wght_wr">Ball Weight (approx):<?php // echo $ball_weight;     ?></span>
                                </span>  -->
                            <span class="des EqHeightDiv2">
                                <?php // echo $product_desc; ?>
                                <?php echo substr($product_desc, 0, $length_you_want); ?>
                            </span>
                        </span>
                        <!--<span><span class="view-more">View More</span></span>-->
                        <!--<p><a class="view-more " href="<?php // echo get_permalink($loop_product->ID);     ?>" role="button">View More</a></p>-->

                    </span>
                </a>
            <?php }
            
            }
            else{
                //echo 'product not set';
            }
            
                
             } ?>
        </div>
    </div> 
</div>


<!--========================================================================Latest News===============================================================================-->

<div class="latest-news-home" >
    <div class="container-fluid">
        <div class="row">
            <?php $news_title = get_field('home_page_news_section_title', $hm_id); ?>
            <div class="header-wrapper">
                <h2><?php echo $news_title; ?></h2>
            </div>
        </div>
        <div class="row gallery">

            <?php
//            news
            $news_heading = get_field('news_heading', $hm_id);
            $news_one = get_field('news_one', $hm_id);
            $news_two = get_field('news_two', $hm_id);
            $news_three = get_field('news_three', $hm_id);

//            upcoming shows
            $upcoming_show_heading = get_field('upcoming_show_heading', $hm_id);
            $upcoming_show_one = get_field('upcoming_show_one', $hm_id);
            $upcoming_show_two = get_field('upcoming_show_two', $hm_id);
            $upcoming_show_three = get_field('upcoming_show_three', $hm_id);

//            media
            $media_heading = get_field('media_heading', $hm_id);
            $media_news_one = get_field('media_news_one', $hm_id);
            $media_news_two = get_field('media_news_two', $hm_id);
            $media_news_three = get_field('media_news_three', $hm_id);
            ?>
            <div class="col-md-4 nopadding news-items">
                <a href="<?php echo get_permalink(cedo_get_option('cedo_nw_id')); ?>">
                <!--<h4><span class="col_3_hd_sc"><span class="icons-news ico-news-feed"></span><span class="tx_hd_wrp"><?php // echo $news_heading;     ?></span></span></h4>-->
                    <span class="icon_aa"><?php echo $news_heading; ?></span>
                    <ul class="hm_col_3_ul">
                        <?php 
                        if(isset($news_one) && !empty($news_one)){
                            echo '<li>'.$news_one.'</li>';
                        }
                        if(isset($news_two) && !empty($news_two)){
                            echo '<li>'.$news_two.'</li>';
                        }
                        if(isset($news_three) && !empty($news_three)){
                            echo '<li>'.$news_three.'</li>';
                        }
                        ?>
                       
                    </ul>
                </a>
            </div>
            <div class="col-md-4 nopadding news-items">
                <a href="<?php echo get_permalink(cedo_get_option('cedo_us_id')); ?>">
               <!--<h4><span class="col_3_hd_sc"><span class="icons-news ico-upcoming-shows"></span><span class="tx_hd_wrp"><?php // echo $upcoming_show_heading;     ?></span></span></h4>-->
                    <span class="icon_bb"><?php echo $upcoming_show_heading; ?></span>
                    <ul class="hm_col_3_ul">
                           <?php 
                        if(isset($upcoming_show_one) && !empty($upcoming_show_one)){
                            echo '<li>'.$upcoming_show_one.'</li>';
                        }
                        if(isset($upcoming_show_two) && !empty($upcoming_show_two)){
                            echo '<li>'.$upcoming_show_two.'</li>';
                        }
                        if(isset($upcoming_show_three) && !empty($upcoming_show_three)){
                            echo '<li>'.$upcoming_show_three.'</li>';
                        }
                        ?>                       
                    </ul>
                </a>
            </div>
            <div class="col-md-4 nopadding news-items">
                <a href="<?php echo get_permalink(cedo_get_option('cedo_md_id')); ?>">
               <!--<h4><span class="col_3_hd_sc"><span class="icons-news ico-media"></span><span class="tx_hd_wrp"><?php // echo $media_heading;     ?></span></span></h4>-->                    
                    <span class="icon_cc"><?php echo $media_heading; ?></span>
                    <ul class="hm_col_3_ul">
                           <?php 
                        if(isset($media_news_one) && !empty($media_news_one)){
                            echo '<li>'.$media_news_one.'</li>';
                        }
                        if(isset($media_news_two) && !empty($media_news_two)){
                            echo '<li>'.$media_news_two.'</li>';
                        }
                        if(isset($media_news_three) && !empty($media_news_three)){
                            echo '<li>'.$media_news_three.'</li>';
                        }
                        ?>
                    </ul>
                </a>
            </div>
        </div>
    </div> 
</div>


<!--======================================================================Find a Dealer and Contact Us===========================================================================================-->

<div class="calltoaction-home" >
    <div class="container ">
        <div class="row">
            <?php $find_dealer_btn = get_field('home_page_find_a_dealer_button_title', $hm_id) ?>
            <?php $find_dealer_btn_link = get_field('home_page_find_a_dealer_link_id', $hm_id) ?>
            <?php $contact_us_btn = get_field('home_page_contact_us_button_title', $hm_id) ?>
            <?php $contact_us_btn_link = get_field('home_page_contact_us_link_id', $hm_id) ?>
            <a class="btn btn-primary btn-lg" role="button" href="<?php echo get_permalink($find_dealer_btn_link); ?>"><?php echo $find_dealer_btn; ?></a>
            <a class="btn btn-primary btn-lg" role="button" href="<?php echo get_permalink($contact_us_btn_link); ?>"><?php echo $contact_us_btn; ?></a>
        </div>
    </div> 
</div>

<!--===========================================================================Logos======================================================================================================-->

<div class="logos-home" >
    <div class="container">
        <div class="row">
            <div class="logo-wrapper">
<!--                <img src="<?php //echo get_template_directory_uri() ?>/img/4_icons.png"/>-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 four_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/ausi_made.png"/>
                    <p class="four_txt"><?php echo cedo_get_option('cedo_icn_one') ?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 four_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/quality.png"/>
                    <p class="four_txt"><?php echo cedo_get_option('cedo_icn_two') ?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 four_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/money.png"/>
                    <p class="four_txt"><?php echo cedo_get_option('cedo_icn_three') ?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 four_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/nation.png"/>
                    <p class="four_txt"><?php echo cedo_get_option('cedo_icn_four') ?></p>
                </div>
            </div>
        </div>
    </div> 
</div>

<!--===========================================================================text======================================================================================================-->

<!--<div class="logos-text">
    <div class="container-fluid">
        <div class="textb-wrapper">
            <p><?php //echo cedo_get_option('cedo_hme_txt') ?></p>
        </div>
    </div>
</div>-->

<?php get_footer(); ?>