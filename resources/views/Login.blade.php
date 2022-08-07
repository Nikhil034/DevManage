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

  <title>Login to DevManage</title>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head> 

  

<body>
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
                  <a class="nav-link" href="/ViewTask"> Task </a>
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


    @if(session('AuthAdmin'))

    <section class="contact_section layout_padding">
    <div class="card text-center">
  <div class="card-header">
  <a href="/Logout" class="btn btn-warning float-right">Logout</a>
  </div>
  <div class="card-body">
    <img src="{{asset('storage/login.jpg')}}" style="width:50%;height:100%;">
  </div>
  <div class="card-footer text-muted">
    You are already login!
  </div>
</div>
    
  </section>
  @else
     <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3 class=" ">
        Be Login First get access!
      </h3>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="/AuthCheck" method="post">
             @csrf
            <div>
              <input type="email" placeholder="Enter Your Email" name="author_email">
            </div>
            <div>
              <input type="password" placeholder="Enter Your Password" name="author_password">
            </div>
            <div class="d-flex justify-content-center ">
              <button>
                Login
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

        @if(Session::has('invalid'))
            <script>
            swal('Error',"{{Session::get('invalid')}}",'error');
            </script>
         @endif   

         @if(Session::has('logout'))
            <script>
            swal('Done',"{{Session::get('logout')}}",'success');
            </script>
         @endif     
        
 @endif
      

      
    </section>

  <section class="container-fluid footer_section" style="background-color:#000000;">
      <p style="color: white;">
        Copyright &copy; 2022 All Rights Reserved By
        <a href="/" style="color:#ff4f5a">DevManage</a>
      </p>
    </section>

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</div>

</body>
</html>    