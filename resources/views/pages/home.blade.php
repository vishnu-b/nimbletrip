@extends('app')

@section('content')

  <div id="image-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#image-slider" data-slide-to="0" class="active"></li>
      <li data-target="#image-slider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="{{ URL::asset('nimbletrip/images/himalayas.jpg') }}" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Explore the Himalayas</h1>
            <p>Trek to Himalayan Basecamps</p>
            <p><a href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="{{ URL::asset('nimbletrip/images/meghalaya.jpg') }}" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Experience the Grasslands of Meghalaya</h1>
            <p>If green is your thing, come and explore</p>
            <p><a href="#" role="button">Learn More</a></p>
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
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Celebrating 2 Years of Happy Customers</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2><i class="fa fa-suitcase popular-packages-icon"></i></h2>
        <h4>Popular Packages</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-4 figure">
        <a href="pic">
          <figure>
            <img src="{{ URL::asset('nimbletrip/images/kerala.jpg') }}" alt="" class="img-responsive">
            <figcaption>
              <div class="row">
                <div class="col-sm-12">
                  <b>Kerala - Backwaters</b>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  Starting from $1,000
                </div>
                <div class="col-sm-6 text-right">
                  3N/ Person
                </div>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 figure">
        <a href="pic">
          <figure>
            <img src="{{ URL::asset('nimbletrip/images/shillong.jpg') }}" alt="" class="img-responsive">
            <figcaption>
              <div class="row">
                <div class="col-sm-12">
                  <b>Shillong</b>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  Starting from $1,000
                </div>
                <div class="col-sm-6 text-right">
                  3N/ Person
                </div>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 figure">
        <a href="pic">
          <figure>
            <img src="{{ URL::asset('nimbletrip/images/hyderabad.jpg') }}" alt="" class="img-responsive">
            <figcaption>
              <div class="row">
                <div class="col-sm-12">
                  <b>Hyderabad</b>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  Starting from $3,000
                </div>
                <div class="col-sm-6 text-right">
                  3N/ Person
                </div>
              </div>
            </figcaption>
          </figure>
        </a>
      </div>
    </div>
  </div>
@stop
