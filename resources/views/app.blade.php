<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>{!! $title !!} - Nimbletrip</title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('nimbletrip/css/main.css') }}">
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/ata/">
            <img class="brand" alt="Brand" src="{{ URL::asset('nimbletrip/images/logo.png') }}">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/nimbletrip/">Home</a></li>
            <li><a href="/nimbletrip/service_providers">About Us</a></li>
            <li><a href="/nimbletrip/contact">Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header><!-- /header -->

   <div id="image-slider" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#image-slider" data-slide-to="0" class="active"></li>
        <li data-target="#image-slider" data-slide-to="1"></li>
        <li data-target="#image-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://bestoflifemag.com/wp-content/uploads/2014/01/Fishuality-365-Collage-wm1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Celebrating 2 Years of Happy Customers</h1>
              <p>More text goes here</p>
              <p><a href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://www.tranquiltrip.com/wp-content/uploads/2014/01/himalayas-web1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Explore the Himalayas</h1>
              <p>Trek to Himalayan Basecamps</p>
              <p><a href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://www.savestrathdearn.com/wp-content/uploads/2014/06/News.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Experience the Grasslands of Meghalaya</h1>
              <p>If green is your thing, come and explore</p>
              <p><a href="#" role="button">learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#image-slider" role="button" data-slide="prev">
        <span aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#image-slider" role="button" data-slide="next">
        <span aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

  @yield('content')
  <div class="container">
    <footer>
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright &copy; Nimbletrip 2015</p>
        </div>
      </div>
    </footer>
  </div>
  <script type="text/javascript" src="{{ URL::asset('nimbletrip/js/app.js') }}"></script>
  @yield('footer')
</body>
</html>
