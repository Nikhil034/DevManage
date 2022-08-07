<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  
  <title>@yield('title')</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span>
              DevManage
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Developers">Developers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Project">Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/TaskView"> Task </a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/Login">Login</a>
                </li>
              </ul>
            </div>
          </div>
         
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="{{asset('storage/dev1.jpg')}}" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Dev <br>
                          Management <br>
                          <span>
                            Service
                          </span>
                        </h1>
                        <p>
                          Care for Developer!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="{{asset('storage/dev2.jpg')}}" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Made <br>
                          For <br>
                          <span>
                            Companies
                          </span>
                        </h1>
                        <p>
                          Simplay way manage attendance and profile of your devs. 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>

      </div>
      <div class="container">
        <div class="slider_nav-box">
          <div class="btn-box">
           
            <hr>
          </div>
          
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <div class="bg">

    <!-- about section -->
    <section class="about_section layout_padding">
      
      
    </section>


    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding-bottom">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
            Your Work
          </h3>
        </div>
        <p class="">
          Make things simple for you
        </p>
        <div class="service_container ">
          <div class="row">
            <div class="col-md-3">
              <div class="box b-1">
                <div class="img-box">
                  <img src="{{asset('storage/user1.jpg')}}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Add Developer details
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-2">
                <div class="img-box">
                  <img src="{{asset('storage/user2.jpg')}}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                   Manage Salary
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-3">
                <div class="img-box">
                  <img src="{{asset('storage/user3.jpg')}}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Update things!
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-4">
                <div class="img-box">
                  <img src="{{asset('storage/user4.jpg')}}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Project details
                  </h6> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  
    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info-logo">
              <h2>
               DevManage
              </h2>
              <p>
               Platform where company manage them developer profile and all kind of thiings in hand!
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-nav">
              <h4>
                Navigation
              </h4>
              <ul>
                <li>
                  <a href="/">
                    Home
                  </a>
                </li>
                <li>
                  <a href="/Developer">
                    Developer
                  </a>
                </li>
                <li>
                  <a href="/Salary">
                    Salary
                  </a>
                </li>
                <li>
                  <a href="/Login">
                    Login
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-contact">
              <h4>
                Contact Info
              </h4>
              <div class="location">
                <h6>
                  Corporate Office Address:
                </h6>
                <a href="">
                  <img src="images/location.png" alt="">
                  <span>
                    Loram ipusm New York, NY 36524
                  </span>
                </a>
              </div>
              <div class="call">
                <h6>
                  Customer Service:
                </h6>
                <a href="">
                  <img src="images/telephone.png" alt="">
                  <span>
                    ( +01 1234567890 )
                  </span>
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>



    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright &copy; 2022 All Rights Reserved By
        <a href="/">DevManage</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>