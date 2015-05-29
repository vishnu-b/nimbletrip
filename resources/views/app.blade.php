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
            <li><a href="/nimbletrip/" class="active">Home</a></li>
            <li><a href="/nimbletrip/service_providers">About Us</a></li>
            <li><a href="/nimbletrip/contact">Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header><!-- /header -->

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
