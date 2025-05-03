@extends('layout.main')
@section('content')
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Dinara's <br>
                      Website
                    </h1>
                    <p>
                        This website showcases information about me,
                        my interests, and a portfolio of several projects I've worked on.
                    </p>
                    <div class="btn-box">
                      <a href="{{ url('/portofolio') }}" class="btn1">
                        View Portofolio
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="dashboard/images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->

    <!-- about section -->
    @include('about')
    <!-- end about section -->

    <!-- Portofolio section -->
    @include('portofolio')
    <!-- end Portofolio section -->

    <!-- Interest section -->
    @include('interest')
    <!-- end interest section -->

    <!-- Contact section -->
    @include('contact')
    <!-- end contact section -->
@endsection
