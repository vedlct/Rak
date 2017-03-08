<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    
<!--    --><?php //include ('head.php') ?>
    <?php $this->load->view('head') ?>
    <title>RAK - Quality Delivery or Take Away Food</title>

</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
<!--    --><?php //include ('menu.php') ?>
    <?php $this->load->view('menu') ?>
	<!-- End Header =============================================== -->
    
    <!-- SubHeader =============================================== -->
    <section class="header-video">
    <div id="hero_video">
        <div id="sub_content">
            <?php
            foreach($head as $big ){?>
            <h1>
                <?php echo $big['big']; ?></h1>
            <p>

                   <?php echo $big['small']; ?>
            </p>
            <?php } ?>
            <form method="post" action="list_page.php">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class=" search-query" placeholder="Your Address or postal code">
                        <span class="input-group-btn">
                        <input type="submit" class="btn_search" value="submit">
                        </span>
                    </div>
                </div>
            </form>
        </div><!-- End sub_content -->
    </div>
    <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="Vimeo" data-video-width="1920" data-video-height="960">
    <div id="count" class="hidden-xs">
        <ul>
            <?php
            foreach($head_res_ad_more as $res_ad_more ){?>
            <li> <?php echo $res_ad_more['resturant']; ?></li>
            <li>
                    <?php echo $res_ad_more['people_served']; ?> </li>
            <li>
                   <?php echo $res_ad_more['registered_user']; ?></li>
            <?php } ?>
        </ul>

    </div>
    <video autoplay loop muted id="teaser-video" class="teaser-video"><source src="video/intro.mp4" type="video/mp4"><source src="video/intro.ogv" type="video/ogg"></video>
    <iframe id="video" src="video/intro.mp4" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
    </section><!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    
   <!-- Content ================================================== -->
         <div class="container margin_60">
             <?php
             foreach($head_how_itworks as $hiw ){?>
        
         <div class="main_title">

            <h2 class="nomargin_top" style="padding-top:0"><?php echo $hiw['big']; ?></h2>
            <p>
                <?php echo $hiw['small']; ?>
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box_home" id="one">
                    <span>1</span>
                    <h3><?php echo $hiw['one_big']; ?></h3>
                    <p>
                        <?php echo $hiw['one_small']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="two">
                    <span>2</span>
                    <h3><?php echo $hiw['two_big']; ?></h3>
                    <p>
                        <?php echo $hiw['two_small']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="three">
                    <span>3</span>
                    <h3><?php echo $hiw['three_big']; ?></h3>
                    <p>
                        <?php echo $hiw['three_small']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="four">
                    <span>4</span>
                    <h3><?php echo $hiw['four_big']; ?></h3>
                    <p>
                        <?php echo $hiw['three_small']; ?>
                    </p>
                </div>
            </div>
        </div><!-- End row -->
        

             <?php } ?>
        </div><!-- End container -->
            
    <div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
            <h2 class="nomargin_top">Choose from Most Popular</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo base_url()?>Details" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant.jpg" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Taco Mexican</h3>
                        <div class="type">
                            Mexican / American
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
               <a href="<?php echo base_url()?>Details" class="strip_list">
               <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant_2.jpg" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Naples Pizza</h3>
                        <div class="type">
                            Italian / Pizza
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <a href="detail_page.php" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant_3.jpg" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Japan Food</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
            </div><!-- End col-md-6-->
            <div class="col-md-6">
                <a href="detail_page.php" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant_4.jpg" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Sushi Gold</h3>
                        <div class="type">
                            Sushi / Japanese
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_close_alt2 no"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <a href="detail_page.php" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant_5.jpg" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>Dragon Tower</h3>
                        <div class="type">
                            Chinese / Thai
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
                <a href="detail_page.php" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant_6.jpg" alt="">
                        </div>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <h3>China Food</h3>
                        <div class="type">
                            Chinese / Vietnam
                        </div>
                        <div class="location">
                            135 Newtownards Road, Belfast, BT4. <span class="opening">Opens at 17:00</span>
                        </div>
                        <ul>
                            <li>Take away<i class="icon_check_alt2 ok"></i></li>
                            <li>Delivery<i class="icon_check_alt2 ok"></i></li>
                        </ul>
                    </div><!-- End desc-->
                </a><!-- End strip_list-->
            </div>
        </div><!-- End row -->   
        
        </div><!-- End container -->
        </div><!-- End white_bg -->
        
       <div class="high_light">
      	<div class="container">

            <?php
            foreach($head_section_4 as $h_s_4 ){?>

      		<h3><?php echo $h_s_4['big']; ?></h3>
            <p><?php echo $h_s_4['small']; ?></p>
            <a href="<?php echo base_url()?>Restaurants">View all Restaurants</a>
            <?php }?>
        </div><!-- End container -->
      </div><!-- End hight_light -->
                  
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/bg_office.jpg" data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <?php
            foreach($head_section_5 as $h_s_5 ){?>
            <h3><?php echo $h_s_5['big']; ?></h3>
            <p>
                <?php echo $h_s_5['small']; ?>
            </p>
            <?php }?>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End Content =============================================== -->
    
    <div class="container margin_60">
        <?php
        foreach($head_section_6 as $h_s_6 ){?>

      <div class="main_title margin_mobile">
            <h2 class="nomargin_top"><?php echo $h_s_6['big']; ?></h2>
            <p>
                <?php echo $h_s_6['small']; ?>
            </p>
        </div>
      	<div class="row">
            <div class="col-md-4 col-md-offset-2">
            	<a class="box_work" href="submit_restaurant.php">
                <img src="img/submit_restaurant.jpg" width="848" height="480" alt="" class="img-responsive">
                <h3><?php echo $h_s_6['submit_big']; ?><span><?php echo $h_s_6['submit_small']; ?></span></h3>
                <p><?php echo $h_s_6['submit_details']; ?>
                    <div class="btn_1">Read more</div>
                </a>
            </div>
            <div class="col-md-4">
            	<a class="box_work" href="submit_driver.php">
                <img src="img/delivery.jpg" width="848" height="480" alt="" class="img-responsive">
				<h3>We are looking for a Driver<span>Start to earn money</span></h3>
                <p>Lorem ipsum dolor sit amet, ut virtute fabellas vix, no pri falli eloquentiam adversarium. Ea legere labore eam. Et eum sumo ocurreret, eos ei saepe oratio omittantur, legere eligendi partiendo pro te.</p>
                <div class="btn_1">Read more</div>
                </a>
            </div>
      </div><!-- End row -->
        <?php }?>
      </div><!-- End container -->
    
    <!-- Footer ================================================== -->
    <?php include ('footer.php') ?>
    <!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="<?php echo base_url()?>Home/login" class="popup-form" id="myLogin" method="post">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Username" name="username">
					<input type="password" class="form-control form-white" placeholder="Password" name="password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/video_header.js"></script>
<script>
$(document).ready(function() {
	'use strict';
   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });    

});
</script>

</body>
</html>