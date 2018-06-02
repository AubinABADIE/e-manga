<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>E-Manga - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="E-Manga, Bootstrap Web, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		<!--bootstrap-->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
		<!--coustom css-->
		<link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <!--script-->
    <!--shop-kart-js-->
    <script src="/js/simpleCart.min.js"></script>
		<!--default-js-->
		<script src="/js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
		<script src="/js/bootstrap.min.js"></script>
    <!-- FlexSlider -->
    <script src="/js/imagezoom.js"></script>
    <script defer src="/js/jquery.flexslider.js"></script>
    <script>
      // Can also be used with $(document).ready()
      $(window).load(function() {
          $('.flexslider').flexslider({
          animation: "slide",
          controlNav: "thumbnails"
          });
      });
    </script>
    <!-- //FlexSlider-->
		<!--script-->
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="/">E-Manga</a>
                </div>
                <div class="login-bars">
                  @component('components.user')
                  @endcomponent
                    <div class="cart box_1">
                        <a href="/cart">
                          <h3>
                            <div class="total">
                              <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)
                            </div>
                          </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!---menu-----bar---->
            <div class="header-botom">
                <div class="content white">
                <nav class="navbar navbar-default nav-menu" role="navigation">
                    <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-font">
                            <li><a href="/mangas">Mangas</a></li>
                            <li><a href="/volumes">Volumes</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--/.navbar-collapse-->
                    <div class="clearfix"></div>
                </nav>
                <!--/.navbar-->
                    <div class="clearfix"></div>
                </div>
                <!--/.content---->
            </div>
                <!--header-bottom-->
        </div>
    </div>
    @section('body')
    @show
    <div class="footer-grid">
        <div class="container">
            <div class="col-md-2 re-ft-grd">
                <h3>Shop</h3>
                <ul class="categories">
                    <li><a href="/mangas">Mangas</a></li>
                    <li><a href="/volumes">Volumes</a></li>
                    <li><a href="/cart">Cart</a></li>
                </ul>
            </div>
            <div class="col-md-2 re-ft-grd">
                <h3>Short links</h3>
                <ul class="shot-links">
                    <li><a href="/contact">Contact us</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Terms & conditions</a></li>
                    <li><a href="/contact">Sitemap</a></li>
                </ul>
            </div>
            <div class="col-md-6 re-ft-grd">
                <h3>Social</h3>
                <ul class="social">
                    <li><a href="#" class="fb">facebook</a></li>
                    <li><a href="#" class="twt">twitter</a></li>
                    <li><a href="#" class="gpls">google+</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="col-md-2 re-ft-grd">
                <a href="/" class="ft-log">
                  <img src="/images/logo.png" alt="/" class="img-responsive">
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copy-rt">
            <div class="container">
                <p>&copy;   2018 E-Manga All Rights Reserved. Design by <a href="http://www.w3layouts.com">w3layouts</a></p>
            </div>
        </div>
    </div>
</body>
</html>
