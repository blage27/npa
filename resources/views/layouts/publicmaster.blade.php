<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title> NPA @yield('page-title') </title>
    <meta content="xenia - responsive and retina ready template" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <link href="/assets/images/favicon.ico" rel="shortcut icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/apple-touch-icon-144x144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="/assets/images/apple-touch-icon-precomposed.png" />
    <!-- font awesome files -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- JS FILES -->
    <script type="text/javascript" src="/assets/js/jquery-1.20.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/assets/js/modernizr.custom.js"></script>
    <!-- CSS FILES -->
    <link href="/assets/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/cubeportfolio.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/assets/css/testimonialrotator.css" media="screen" rel="stylesheet" type="text/css"> 
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div class="top_line">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-left">
                <ul class="contact-top">
                  <li><i class=""></i></li>
                  <li><i class="icon-mobile"></i> 080-043-567-89</li>
                  <li><i class="icon-mail"></i> support@npa.com</li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-5 pull-right hidden-phone">
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    
                    <li id="search-btn"><a href="#"><i class="icon-search"></i></a></li>
                  </ul>
                <div class="search-input" id="search-input" style="display: none;">
                  <input id="s-input" type="text" placeholder="Search...">
                </div>
              </div> 
            </div>
          </div>
        </div>
      </header>
      <div class="page_head">
        <div class="nav-container" style="height: auto;">
          <nav>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 pull-left"><div class="logo"><a href="/"><img src="/assets/images/npa-log.png" alt=""></a></div></div>
                <div class="col-lg-9 pull-right">
                  <div class="menu">
                    <div id="dl-menu" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                      <ul class="dl-menu">
                        <li class="current"><a href="/about">About NPA</a>
        
                        </li>
                        <li><a href="/publications">Publications</a>
                         
                        </li>
                        <li><a href="/psychology_help_center">Pschology Help Center</a>
                          
                        </li>
                        <li><a href="/news">News & Events</a>
                         
                        </li>
                        <li><a href="/membership">Membership</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                      </ul>
                    </div> 
                  </div>        
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
      @if(isset($page_title))
      <div class="tp-banner-container" style="height:500px;">
        <div class="tp-banner" >
          <ul style="display:none;">
            <li data-transition="fade" data-slotamount="7" data-masterspeed="700" >
              <img src="assets/images/ban_4.png"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="tp-caption largeblackbg sfb"
                data-x="center"
                data-y="95"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 4">Psychology of Social Media
              </div>
              <div class="tp-caption largeborder skewfromrightshort"
                data-x="center"
                data-y="200"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1100"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">
              </div>
              <div class="tp-caption largetext sft"
                data-x="center"
                data-y="250"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">Pellentesque luctus ac lorem aenean sagittis magna purus vehicsula. Tristique nunc a felis<br>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec ipsum
              </div>
              <div class="tp-caption largebutton lfb"
                data-x="center"
                data-y="360"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><a href="http://themeforest.net/item/xenia-refined-html-5-css-3-corporate-template/6863456">Learn More</a>
              </div>
            </li>
            <li data-transition="random" data-slotamount="7" data-masterspeed="700" >
              <img src="assets/images/ban_2.png"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="tp-caption largeblackbg sfb"
                data-x="30"
                data-y="80"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 4">How the mind works & Why
              </div>
              <div class="tp-caption largetext sft"
                data-x="30"
                data-y="170"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1100"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9;text-align:left;">Pellentesque luctus ac lorem aenean sagittis magna purus vehicsula.<br> Tristique nunc a felis ultricies, ultrices eratSuspendisse velit ticol sodales
              </div>
              <div class="tp-caption largebutton lft"
                data-x="30"
                data-y="270"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><a href="http://themeforest.net/item/xenia-refined-html-5-css-3-corporate-template/6863456">Learn More</a>
              </div>
              <div class="tp-caption lfb"
                data-x="730"
                data-y="40"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1650"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="assets/images/npa_banner1.png" alt="">
              </div>
              <div class="tp-caption lfb"
                data-x="760"
                data-y="405"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1850"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="" alt="">
              </div>
              <div class="tp-caption lfb"
                data-x="1020"
                data-y="405"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2000"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="" alt="">
              </div>
            </li>
            <li data-transition="random" data-slotamount="7" data-masterspeed="700" >
              <img src="assets/images/ban-1.png"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="tp-caption lfb"
                data-x="30"
                data-y="40"
                data-speed="500"
                data-start="800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="" alt="">
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="550"
                data-y="75"
                data-speed="500"
                data-start="1400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">
              </div>
              <div class="tp-caption largetext sft"
                data-x="550"
                data-y="160"
                data-speed="500"
                data-start="1600"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9;text-align:left;">
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="540"
                data-y="250"
                data-speed="500"
                data-start="1800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><i class=""></i>
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="625"
                data-y="245"
                data-speed="500"
                data-start="2000"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><i class=""></i>
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="682"
                data-y="250"
                data-speed="500"
                data-start="2200"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="" alt="">
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="765"
                data-y="250"
                data-speed="500"
                data-start="2400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="815"
                data-y="250"
                data-speed="500"
                data-start="2600"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><i class=""></i>
              </div>
              <div class="tp-caption largebutton lft"
                data-x="550"
                data-y="350"
                data-speed="500"
                data-start="2800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><a href="http://themeforest.net/item/xenia-refined-html-5-css-3-corporate-template/6863456">Register now</a>
              </div>
            </div>
          </li>
        </ul>

      </div>
      <script type="text/javascript">
        var revapi;
        jQuery(document).ready(function() {
             revapi = jQuery('.tp-banner').revolution({
              delay:9000,
              startwidth:1170,
              startheight:500,
              hideThumbs:10,
              forceFullWidth:"off",
            });
        }); //ready
      </script>
       @endif
     
@yield('content')

      <div class="footer" style="margin-top:0px;">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="promo-text-footer">Get in Touch</div>
              <ul class="contact-footer">
                <li><i class="icon-location"></i> 112, Better Living Complex,10 Algiers Street Zone 5, Wuse, Abuja</li>
                <li><i class="icon-mobile"></i> 080-043-567-89</li>
                <li><i class="icon-mail"></i> support@npa.com</li>
                <li><i class="icon-key"></i>  9 am to 6 pm</li>
              </ul> 
               <ul class="soc-footer">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>       
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="promo-text-footer">Popular Tags</div>
                <ul class="tags-footer">
                  <li><a href="#">sapien</a></li>
                  <li><a href="#">posuere</a></li>
                  <li><a href="#">interdum</a></li>
                  <li><a href="#">lectus</a></li>
                  <li><a href="#">velit</a></li>
                  <li><a href="#">eros</a></li>
                  <li><a href="#">quis</a></li>
                  <li><a href="#">fermen</a></li>
                  <li><a href="#">lorem</a></li>
                  <li><a href="#">sapien</a></li>
                  <li><a href="#">posuere</a></li>
                  <li><a href="#">interdum</a></li>
                  <li><a href="#">lectus</a></li>
                  <li><a href="#">velit</a></li>
                  <li><a href="#">eros</a></li>
                  <li><a href="#">quis</a></li>
                  <li><a href="#">fermen</a></li>
                  <li><a href="#">lorem</a></li>
                  <li><a href="#">sapien</a></li>
                  <li><a href="#">posuere</a></li>
                  <li><a href="#">interdum</a></li>
                  <li><a href="#">quis</a></li>
                </ul>
              </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="promo-text-footer">Instagram Photos</div>
                <div class="flickr_widget_wrapper"><script src="http://www.flickr.com/badge_code_v2.gne?count=8&display=random&size=s&layout=x&source=user&user=46591745@N03"></script></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-bottom">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-left">
                <div class="copyright">Copyright © 2016 <a href="#">Nigerian Psychological Association</a>. Design by <a href="http://dervalconsulting.com" target="_blank">Derval</a></div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-right">
                <div class="foot_menu">
                  <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About NPA</a></li>
                    <li><a href="/membership">Membership</a></li>
                    <li><a href="/news">News and Events</a></li>
                    <li><a href="/publications">Publications</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <script type="text/javascript" src="/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="/assets/js/sticky.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/assets/js/retina.js"></script>
    <script type="text/javascript" src="/assets/js/testimonialrotator.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="/assets/js/portfolio-main.js"></script>
    <script type="text/javascript" src="/assets/js/jcarousel.responsive.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.dlmenu.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
  </body>
</html>