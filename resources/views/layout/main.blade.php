<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, " />
  <title> Web Dinara </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="dashboard/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="dashboard/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="dashboard/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="dashboard/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="dashboard/images/hero-bg.png" alt="">
      </div>
    </div>

    @include('layout.header')
    <!-- content section -->
    @yield('content')
    <!-- content section -->
    @include('layout.footer')
  </div>

  <!-- Scripts -->
  <!-- jQery -->
  <script type="text/javascript" src="dashboard/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="dashboard/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="dashboard/js/custom.js"></script>

</body>
</html>
