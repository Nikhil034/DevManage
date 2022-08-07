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

  <title>Show Project</title>

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
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>



 <section class="about_section layout_padding">
      
      <div class="card">
  <h7 class="card-header"><a href="/Project"><button class="btn btn-warning" style="float: right;">Back</button></a></h7>
  <div class="card-body">
  <form method="post" action="/UpdateProject">
    @csrf
  <div class="row">
    <div class="col">
        <label class="float-left">Title</label>
      <input type="text" class="form-control" placeholder="First name" name="project_name" value="{{$Client_Project->Project_title}}" readonly="">
    </div>
    <div class="col">
    <label class="float-left">Details</label>
      <input type="text" class="form-control" placeholder="Last name" value="{{$Client_Project->Project_details}}" readonly="">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
    <label class="float-left">Budget</label>
       <input type="hidden" name="prjct_id" value="{{$Client_Project->id}}">
      <input type="text" class="form-control" placeholder="First name"  value="{{$Client_Project->Project_budget}}" readonly="">
    </div>
    <div class="col">
    <label class="float-left">Duration</label>
      <input type="text" class="form-control" placeholder="Last name" readonly="" value="{{$Client_Project->Project_duration}}-months">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
    <label class="float-left">Lead Contact</label>
      <input type="text" class="form-control" placeholder="First name"  value="{{$Client_Project->Lead_contact}}" readonly="">
    </div>
    <div class="col">
    <label class="float-left">Technolgy</label>
      <input type="text" class="form-control" placeholder="Last name" readonly="" value="{{$Client_Project->Technology_use}}-months">
    </div>
  </div>
  <br>
  <button class="btn btn-success">Complete Project</button>
</form>
  </div>
</div>
      
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