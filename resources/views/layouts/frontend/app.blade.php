<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zoroko</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend_asset/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend_asset/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend_asset/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend_asset/css/media.css') }}">
  </head>
<body>
<!-- header -->
<header>
    <div class="header sticky">
        <div class="container sml-container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand non-sticky-logo" href="#"><img src="{{ asset('public/frontend_asset/image/logo.png') }}" alt="logo"></a>
                        <a class="navbar-brand sticky-logo" href="#"><img src="{{ asset('public/frontend_asset/image/sticky-logo.png') }}" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('frontend.features')}}">Features</a>
                            </li>

                             <li class="nav-item">
                              <a class="nav-link" href="{{route('frontend.for-personal')}}">Digital Business Cards</a>
                            </li>

                             
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('frontend.for-business')}}">For Business</a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="{{route('frontend.for-personal')}}">For Personal</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.help')}}">Help</a>
                            </li>
                            
                            <li class="nav-item sml-phone-show">
                                <!-- contact us modal triger button -->
                                <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#contact_Us_modal">Contact Us</a>
                                <!-- contact us modal triger button end -->
                            </li>
                            <!-- login & registration start -->
                                 <!--    @if (Route::has('login'))
                                <div class="top-right links">
                                 @auth
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                 @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                @endif
                                @endauth
                                </div>
                                @endif -->
                            <!-- login & registration end -->
                        </ul>
                    </div>
                        <!-- contact us modal triger button -->
                        <a href="javascript:void(0)" class="blu-round-btn ipad-show" data-toggle="modal" data-target="#contact_Us_modal">Contact Us</a>
                        <!-- contact us modal triger button end -->
                    </nav>
                    <!-- navbar end -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
@yield('content')
<footer>
    <div class="footer">
        <div class="container ftr-container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="ftr-lft">
                        <h2>App is available for free<br>on Google Play & App Store</h2>
                        <div class="ftr-store-btns">
                            <a href="#"><img src="{{ asset('public/frontend_asset/image/white-play-store.png') }}" alt="playstore"></a>
                            <a href="#"><img src="{{ asset('public/frontend_asset/image/white-app-store.png') }}" alt="appstore') }}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <div class="ftr-options">
                        <h5>Help</h5>
                        <ul>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <div class="ftr-options">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="privacy">
                        <p>© 2019 Zoroko. All Rights Reserved </p>
                        <p>Powered by:- <a href="https://www.braintechnosys.com/" target="_blank">Brain technosys</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<script src="{{ asset('public/frontend_asset/js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/frontend_asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend_asset/js/vanilla-tilt.js') }}"></script>
<script src="{{ asset('public/frontend_asset/js/wow.js') }}"></script>
<script>
new WOW().init();
/* sticky header */
$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
/* sticky header end */

/************* equalize height of know and fresh sections  ****************/
$( document ).ready(function() {
    var know_height = $(".feature-box").height();
    $('.know-img-box').height(know_height);
});


$(window).scroll(function(){
    var know_height = $(".feature-box").height();
    $('.know-img-box').height(know_height);
});

function set_height(){
    var know_height = $(".feature-box").height();
    $('.know-img-box').height(know_height);
}
window.onresize = set_height;
/************* equalize height of know and fresh sections rnd  ****************/

/**************************** tilt card effect  *******************************/
VanillaTilt.init(document.querySelector(".tilt-card"), {
        max: 25,
        speed: 400
    });
VanillaTilt.init(document.querySelectorAll(".tilt-card"));
/**************************** tilt card effect  *******************************/

/**************************** banner card parallax effect  *******************************/
function Parallax(options){
  options = options || {};
  this.nameSpaces = {
      wrapper: options.wrapper || '.parallax',
      layers: options.layers || '.parallax-layer',
      deep: options.deep || 'data-parallax-deep'
  };
  this.init = function() {
      var self = this,
          parallaxWrappers = document.querySelectorAll(this.nameSpaces.wrapper);
      for(var i = 0; i < parallaxWrappers.length; i++){
    (function(i){
      parallaxWrappers[i].addEventListener('mousemove', function(e){
        var x = e.clientX,
          y = e.clientY,
          layers = parallaxWrappers[i].querySelectorAll(self.nameSpaces.layers);
        for(var j = 0; j < layers.length; j++){
          (function(j){
            var deep = layers[j].getAttribute(self.nameSpaces.deep),
                disallow = layers[j].getAttribute('data-parallax-disallow'),
                itemX = (disallow && disallow === 'x') ? 0 : x / deep,
                itemY = (disallow && disallow === 'y') ? 0 : y / deep;
                if(disallow && disallow === 'both') return;
                layers[j].style.transform = 'translateX(' + itemX + '%) translateY(' + itemY * 5 + 'px)';
          })(j);  
        }
      })
    })(i);
      }
  };
  this.init();
  return this;
}

window.addEventListener('load', function(){
  new Parallax();
});
/**************************** banner card parallax effect end  *******************************/
</script>
</body>
</html>