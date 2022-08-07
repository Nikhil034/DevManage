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

  <title>Project details</title>

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
 <section class="about_section layout_padding">


    <div class="card text-center">
  <div class="card-header">
    <b style="float: left;">Add New Project details</b>
    <a href="/Project/ViewProject"><button class="btn btn-primary float-right">View Projects</button></a>
  </div>
  <div class="card-body">

    <form method="post" action="/SaveProject">
      @csrf

      <input class="form-control" type="text" placeholder="Client Name" name="client_name">
      <br>
      <input class="form-control" type="email" placeholder="Client Email" name="client_email">
      <br>
      <input class="form-control" type="text" placeholder="Project Title" name="project_title">
      <br>
      <textarea class="form-control" id="" rows="2" placeholder="Project Details" name="project_details"></textarea>
      <br>
      <input class="form-control" type="number" placeholder="Project Budget" name="project_budget">
      <br>
      <input class="form-control" type="number" placeholder="Project Duration(in months)" name="project_months">
      <br>
      <input class="form-control" type="text" placeholder="Project Lead by" name="project_lead">
      <br>
      <input class="form-control" type="text" placeholder="Project Lead Contact" name="project_lead_contact">
      <br>
      <input class="form-control" type="text" placeholder="Technology use" name="use_technology">
      <br>


  
   
  <div class="card-footer text-muted">
    <button type="submit" class="btn btn-warning">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>

 </form>  
</div>
         @if(Session::has('message'))
            <script>
            swal('Done',"{{Session::get('message')}}",'success');
            </script>
         @endif


      
    </section>
    @else
       <script>
        window.location.href="/UnAuthorize";
       </script> 
     @endif

  <section class="container-fluid footer_section" style="background-color:#000000;">
      <p style="color: white;">
        Copyright &copy; 2022 All Rights Reserved By
        <a href="index.html" style="color:#ff4f5a">DevManage</a>
      </p>
    </section>

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</div>

</body>
</html>    