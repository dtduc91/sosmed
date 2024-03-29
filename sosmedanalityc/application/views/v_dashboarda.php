<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>SOCMED | aaaaaaa</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link rel="stylesheet" href="<?=base_url()?>css/style.css"> 
  
  <!-- Color Skins -->
  <link rel="stylesheet" href="<?=base_url()?>css/skins/blue.css" title="blue"> 
  <link rel="alternate stylesheet" href="<?=base_url()?>css/skins/orange.css" title="orange">
  <link rel="alternate stylesheet" href="<?=base_url()?>css/skins/green.css" title="green">
  <link rel="alternate stylesheet" href="<?=base_url()?>css/skins/red.css" title="red">
  <link rel="alternate stylesheet" href="<?=base_url()?>css/skins/purple.css" title="purple"> 
  
  <!-- Small Icons -->
  <link rel="stylesheet" href="<?=base_url()?>css/icons.css"> 
  
  <!-- Start JavaScript -->
  
    <script src="<?=base_url()?>js/jquery-1.7.2.min.js"></script> <!-- jQuery library --> 
    <script src="<?=base_url()?>js/jquery.easing.1.3.min.js"></script> <!-- jQuery Easing --> 
    <script src="<?=base_url()?>js/jquery-ui.min.js"></script> <!-- jQuery Ui --> 
    <script src="<?=base_url()?>js/ddsmoothmenu.js"></script> <!-- Nav Menu ddsmoothmenu -->
    <script src="<?=base_url()?>js/jquery.flexslider.js"></script> <!-- Flex Slider  -->
    <script src="<?=base_url()?>js/jquery.eislideshow.js"></script> <!-- Elastic Slider  -->
    <script src="<?=base_url()?>js/jquery.iconmenu.js"></script> <!-- Sliding Text and Icon Menu Style  -->
    <script src="<?=base_url()?>js/colortip.js"></script> <!-- Colortip Tooltip Plugin  -->
    <script src="<?=base_url()?>js/tytabs.js"></script> <!-- jQuery Plugin tytabs  -->
    <script src="<?=base_url()?>js/carousel.js"></script> <!-- jQuery Carousel  -->
    <script src="<?=base_url()?>js/jquery.prettyPhoto.js"></script> <!-- jQuery Prettyphoto  -->
    <script src="<?=base_url()?>js/jquery.isotope.min.js"></script> <!-- Isotope Filtering  -->
    <script src="<?=base_url()?>js/selectnav.js"></script> <!-- Responsive Navigation Menu by SelectNav -->
    <script src="<?=base_url()?>js/jquery.ui.totop.js"></script> <!-- UItoTop plugin  -->
    <script src="<?=base_url()?>js/custom.js"></script> <!-- Custom Js file for javascript in html -->
    <script src="<?=base_url()?>js/jquery.tweet.js"></script> <!-- jQuery Tweets -->
    <script src="<?=base_url()?>js/jflickrfeed.min.js"></script> <!-- jQuery Flickr -->
    <script src="<?=base_url()?>js/twitter-flickr-options.js"></script> <!-- jQuery Tweets Options -->
    <script src="<?=base_url()?>js/styleswitch.js"></script> <!-- Style Colors Switcher -->
  
  <!-- End JavaScript -->

  <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
  <![endif]-->

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?=base_url()?>images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="<?=base_url()?>images/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>images/favicon/apple-touch-icon-114x114.png">

</head>
<body>

  <div class="switcher-box">
    <a rel="blue" class="styleswitch blue"></a>
    <a rel="orange" class="styleswitch orange"></a>
    <a rel="green" class="styleswitch green"></a>
    <a rel="red" class="styleswitch red"></a>
    <a rel="purple" class="styleswitch purple"></a>
   </div><!-- End switcher-box -->

  <header>
    <div class="container clearfix">
    
      <div class="one-third column">
        <div class="logo">
        <a href="index.html">
          <img src="<?=base_url()?>images/logo.png" alt="Crevision - Creative Template" />
        </a>
        </div>
      </div><!-- End Logo -->
      
      <div class="two-thirds column">
        <nav id="menu">
          <ul id="nav" class="navigation">
            <li><a href="index.html" class="active">Home</a></li>
            <?php if($package_type!=1){?>
            <li><a href="#1">Reports and Stats</a>
              <ul>
                <li><a href="about.html">Reach</a></li>
                <li><a href="services.html">Engangement</a></li>
                <li><a href="team.html">Market Share</a></li>
                <li><a href="process.html">Unique Users</a></li>
                <li><a href="sidebar_right.html">Total Mention</a></li>
                <li><a href="sidebar_left.html">ReTweet</a></li>
                <li><a href="FAQ.html">Time Based</a></li>
                <li><a href="sitemap.html">Trend Follower</a></li>
                <li><a href="full_width.html">By Location</a></li>
				<li><a href="full_width.html">Demography</a></li>			
              </ul>
            </li>
            <?php }?>
            <?php if($package_type==3){?>
            <li><a href="#2">Analytics Method</a>
              <ul>
                <li><a href="shortcodes.html">Back Analysis</a></li>
                <li><a href="#3">Forward Analysis</a>
                  <ul>
    		        <li><a href="#3-1">Follower Trend</a></li>
		          </ul>
                </li>
              </ul>
            </li>
            <?php }?>
            <li><a href="portfolio_4.html#4">Create Project Campaign</a>
              <ul>
                <li><a href="portfolio_2.html">Create Project</a></li>
                <li><a href="portfolio_3.html">Create Job</a>
				 <ul>
    		        <li><a href="#3-1">Job Type</a>
						<ul>
							<li><a href="#3-1">Market Share</a></li>
							<li><a href="#3-1">Trend Follower</a></li>
							<li><a href="#3-1">General/Custom/Free</a></li>
							<li><a href="#3-1"><to be added></a></li>
						</ul>
					</li>
		          </ul>
				</li>
				 <li><a href="portfolio_4.html">a. Insert Keywords</a>
					<ul>
						<li><a href="#3-1">Included words</a></li>
						<li><a href="#3-1">Not Included words</a></li>
					</ul>
				 </li>
                <li><a href="portfolio_4.html">b. Define Phrase Sentiment</a></li>
              </ul>
            </li>
            <li><a href="c_connect_twitter">Add Twitter Account</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div><!-- End Menu -->
      
	            <div class="four columns alpha"><a href="c_dashboard/do_signout" class="link">Logout</a></div>
	  
      <div class="sixteen columns"><hr /></div>
      
    </div><!-- End Container -->
  </header><!-- <<< End Header >>> -->
  
  <div id="slider">
    <div class="container clearfix">
      <div class="sixteen columns">
      <div class="flex-container">
	  <div class="flexslider">
		<ul class="slides">
          <li>
			<a href="#"><img src="<?=base_url()?>images/img/sliders/slider-1-1.jpg" alt="You Can Add"></a>
			<p class="flex-caption"> <span>Crevision Theme</span> as many slides as you want with and without captions. Win! </p>
		  </li>
		  <li>
			<a href="#"><img src="<?=base_url()?>images/img/sliders/slider-1-2.jpg" alt="Crevision Theme"></a>
            <p class="flex-caption"> <span>Crevision Theme</span> as many slides as you want with and without captions. Win! </p>
		  </li>
          <li>
			<a href="#"><img src="<?=base_url()?>images/img/sliders/slider-1-3.jpg" alt="You Can Add"></a>
			<p class="flex-caption"> <span>Crevision Theme</span> as many slides as you want with and without captions. Win! </p>
		  </li>
          <li>
			<a href="#"><img src="<?=base_url()?>images/img/sliders/slider-1-4.jpg" alt="You Can Add"></a>
			<p class="flex-caption"> <span>Crevision Theme</span> as many slides as you want with and without captions. Win! </p>
		  </li>
          <li>
			<a href="#"><img src="<?=base_url()?>images/img/sliders/slider-1-5.jpg" alt="You Can Add"></a>
			<p class="flex-caption"> <span>Crevision Theme</span> as many slides as you want with and without captions. Win! </p>
		  </li>
        </ul>
	  </div>
      
      </div>
      
      </div>
      
    </div><!-- End Container -->
  </div><!-- End Slider -->
  
  <div class="container clearfix">
  
    <div id="welcome">
      <div class="sixteen columns">
        <div class="qoute">
          <div class="eleven columns omega">
            <h2>Social media management for exceptional companies.</h2>
            <p>All of your social messages in one, easy-to-manage Inbox </p>
          </div>

        </div>
      </div>
    </div><!-- End Welcome -->
    
    <div class="recent-work gallery clearfix">
    
      <div class="slidewrap" >
    
      <div class="sixteen columns"> <h2 class="title">FEATURES<span class="line"></span></h2> </div>
      
      <ul class="slidecontrols">
      <li><a href="#sliderName" class="next">Next</a></li><li><a href="#sliderName" class="prev">Prev</a></li>
	  </ul>	
      
      <ul class="slider" id="sliderName">
      
      <li class="slide">	
      
      <!-- item 1 -->
      <div class="one-third column item">
          <div class="caption">
          <a href="single_project_1.html"><img src="<?=base_url()?>images/img/thumbs/thumb-1.jpg" alt="" class="pic" />
          <span class="hover-effect link"></span></a>
          </div><!-- hover effect -->
          <h4><a href="single_project_1.html">MonsterUp</a></h4>
          <p>design ,graphic ,illustration</p>
      </div>
      <!-- End -->
      
      <!-- item 2 -->
      <div class="one-third column item">
          <div class="caption">
          <a href="images/img/thumbs/thumb-2.jpg" rel="prettyPhoto[gallery1]">
          <img src="<?=base_url()?>images/img/thumbs/thumb-2.jpg" alt="" class="pic" />
          <span class="hover-effect zoom"></span></a>
          </div><!-- hover effect -->
          <h4><a href="single_project_1.html">MonsterUp</a></h4>
          <p>design ,graphic ,illustration</p>
      </div>
      <!-- End -->
      
      <!-- item 3 -->
      <div class="one-third column item">
          <div class="caption">
          <a href="single_project_1.html"><img src="<?=base_url()?>images/img/thumbs/thumb-3.jpg" alt="" class="pic" />
          <span class="hover-effect link"></span></a>
          </div><!-- hover effect -->
          <h4><a href="single_project_1.html">MonsterUp</a></h4>
          <p>design ,graphic ,illustration</p>
      </div>
      <!-- End -->
      
      </li><!-- End slide -->
      
      <li class="slide">	
      
      <!-- item 4 -->
      <div class="one-third column item">
          <div class="caption">
          <a href="single_project_1.html"><img src="<?=base_url()?>images/img/thumbs/thumb-1.jpg" alt="" class="pic" />
          <span class="hover-effect link"></span></a>
          </div><!-- hover effect -->
          <h4><a href="single_project_1.html">MonsterUp</a></h4>
          <p>design ,graphic ,illustration</p>
      </div>
      <!-- End -->
      
      <!-- item 5 -->
      <div class="one-third column item">
          <div class="caption">
          <a href="images/img/thumbs/thumb-2.jpg" rel="prettyPhoto[gallery2]">
          <img src="<?=base_url()?>images/img/thumbs/thumb-2.jpg" alt="" class="pic" />
          <span class="hover-effect zoom"></span></a>
          </div><!-- hover effect -->
          <h4><a href="single_project_1.html">MonsterUp</a></h4>
          <p>design ,graphic ,illustration</p>
      </div>
      <!-- End -->
      
      <!-- item 6-->
      <div class="one-third column item">
          <div class="caption">
          <a href="single_project_1.html"><img src="<?=base_url()?>images/img/thumbs/thumb-3.jpg" alt="" class="pic" />
          <span class="hover-effect link"></span></a>
          </div><!-- hover effect -->
          <h4><a href="single_project_1.html">MonsterUp</a></h4>
          <p>design ,graphic ,illustration</p>
      </div>
      <!-- End -->
      
      </li><!-- End slide -->
      
      </ul>
      
      </div><!-- End slidewrap -->
    
    </div><!-- End recent-work -->
    
    <div class="one-third column">
    
      <h2 class="title">Our Services<span class="line"></span></h2>
      
      <div id="accordion">
        <h3><a href="#">Web Design</a></h3>
        <div><p>Ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Nam quis cursus massa. Dapibus, turpis quis.</p></div>
        
        <h3><a href="#">Branding</a></h3>
        <div><p>Ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Nam quis cursus massa. Dapibus, turpis quis.</p></div>
        
        <h3><a href="#">wordpress</a></h3>
        <div><p>Ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Nam quis cursus massa. Dapibus, turpis quis.</p></div>
                
      </div><!-- End accordion -->
    
    </div><!-- End our services -->
    
    <div class="one-third column">
    
      <h2 class="title">Why Choose Us ?<span class="line"></span></h2>
      
      <ul class="whyus">
        <li>
          <a href="about.html"><img src="<?=base_url()?>images/img/whyus.jpg" alt="" class="border" /></a>
          <p>Ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Nam quis cursus </p>
          <span class="more2"><a href="about.html">more about us</a></span>
        </li>
      </ul>
    
    </div><!-- End choose us -->
    
    <div class="one-third column">
    
      
      
      <div class="slidewrap2">
      
       <h2 class="title">Recent Blog<span class="line"></span></h2>
       
       <div class="recent-blog">
        <div  class="recent-blog2">
        
       <ul class="slider" id="sliderName2">
      
       <li class="slide">	
      
        <div class=" blog-item vertical">
          <div class="date3"><span class="day">25</span><span class="month">AUG</span></div>
          <h3><a href="single_post.html">Start jozoor website</a></h3>
          <p>Start jozoor website by jozor we love design and more u can talk we about. </p>
          <span class="more"><a href="single_post.html">Read more</a></span>
        </div>
        <div class=" blog-item vertical">
          <div class="date3"><span class="day">25</span><span class="month">AUG</span></div>
          <h3><a href="single_post.html">Start jozoor website</a></h3>
          <p>Start jozoor website by jozor we love design and more u can talk we about. </p>
          <span class="more"><a href="single_post.html">Read more</a></span>
        </div>
        
         </li><!-- End slide --> 
         
         <li class="slide">	
      
        <div class=" blog-item vertical">
          <div class="date3"><span class="day">25</span><span class="month">AUG</span></div>
          <h3><a href="single_post.html">Start jozoor website</a></h3>
          <p>Start jozoor website by jozor we love design and more u can talk we about. </p>
          <span class="more"><a href="single_post.html">Read more</a></span>
        </div>
        <div class=" blog-item vertical">
          <div class="date3"><span class="day">25</span><span class="month">AUG</span></div>
          <h3><a href="single_post.html">Start jozoor website</a></h3>
          <p>Start jozoor website by jozor we love design and more u can talk we about. </p>
          <span class="more"><a href="single_post.html">Read more</a></span>
        </div>
        
         </li><!-- End slide --> 
          
        </ul>
        
      </div>
      </div>
      
      </div><!-- End slidewrap -->
    
    </div><!-- End recent blog -->
    
    
    
    <div class="clients clearfix">
    
      <div class="sixteen columns"> 
      
      <h2 class="title">Our Clients <span class="line"></span></h2> 
      <ul class="items">
        <li><a href="#"><img src="<?=base_url()?>images/img/clients/client-1.jpg" alt="" /></a></li>
        <li><a href="#"><img src="<?=base_url()?>images/img/clients/client-2.jpg" alt="" /></a></li>
        <li><a href="#"><img src="<?=base_url()?>images/img/clients/client-3.jpg" alt="" /></a></li>
        <li><a href="#"><img src="<?=base_url()?>images/img/clients/client-4.jpg" alt="" /></a></li>
        <li><a href="#"><img src="<?=base_url()?>images/img/clients/client-5.jpg" alt="" /></a></li>
      </ul><!-- End items -->
      
      </div>
      
      
    </div><!-- End clients -->
    
     
  </div><!-- <<< End Container >>> -->
  
  <footer>
    <div class="container">
    
      <div class="four columns">
        <div class="about">
          <h3 class="title">About Us<span class="line"></span></h3>
          <p>
          Consectetur adipiscing elit aeneane lorem lipsum, condimentum ultrices consequat eu, vehicula mauris lipsum adipiscing 
          lipsum aenean orci lorem Asequat. <br /> lorem ipsum dolor lorem sit amet, consectetur adipiscing dolor .
          </p>
        </div>
      </div><!-- End about -->
      
      <div class="four columns">
        <div class="tweets">
          <h3 class="title">Latest tweets<span class="line"></span></h3>
            <div class='tweet query footer'></div><!-- Tweets Code -->
        </div>
      </div><!-- End tweets -->
      
      <div class="four columns">
        <div class="flickr">
          <h3 class="title">Flickr<span class="line"></span></h3>
          <ul id="footer" class="thumbs"></ul> <!-- Flickr Code -->
        </div>
      </div><!-- End flickr -->
      
      <div class="four columns">
        <div class="subscribe">
          <h3 class="title">Subcribe<span class="line"></span></h3>
          <p>Subscribe to our e-mail newsletter to receive updates.</p>
          <form action="#">
            <input type="text" class="mail" value="Enter your Email" onBlur="if(this.value == '') { this.value = 'Enter your Email'; }" 
            onfocus="if(this.value == 'Enter your Email') { this.value = ''; }"/>
            <input type="submit" value="Submit" class="submit" />
          </form>
        </div>
      </div><!-- End subscribe -->
      
      <div class="sixteen columns"><hr class="bottom" /></div>
      
      <div class="eight columns"><span class="copyright">
      © Copyright 2012 <a href="index.html">Crevision</a>. All Rights Reserved. by 
      <a href="http://jozoor.com/" target="_blank" data="Jozoor%20Team.html">jozoor</a></span></div>
      
      <div class="eight columns">
        <div class="social">
          <a href="#"><img src="<?=base_url()?>images/icons/twitter.png" alt="" /></a>
          <a href="#"><img src="<?=base_url()?>images/icons/facebook.png" alt="" /></a>
          <a href="#"><img src="<?=base_url()?>images/icons/skype.png" alt="" /></a>
          <a href="#"><img src="<?=base_url()?>images/icons/digg.png" alt="" /></a>
          <a href="#"><img src="<?=base_url()?>images/icons/linkedin.png" alt="" /></a>
          <a href="#"><img src="<?=base_url()?>images/icons/vimeo.png" alt="" /></a>
        </div>
      </div>
    
    </div><!-- End container -->
  </footer><!-- <<< End Footer >>> -->
    
</body>
</html>