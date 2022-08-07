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

  <title>View of projects</title>

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
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>


 @if(session('AuthAdmin'))
 <section class="about_section layout_padding">
      
      <div class="card">
  <h7 class="card-header"><a href="/Project"><button class="btn btn-warning" style="float: right;">Back</button></a></h7>
  <div class="card-body">
    <table class="table table-hover" id="sdt">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Project</th>
      <th scope="col">Client</th>
      <th scope="col">Lead By</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <b style="display:none">{{$count=0}}</b>
  <tbody>
    @foreach($projects as $pro)
    <tr>
      <td>{{$count+=1}}</td>
      <td>{{$pro->Project_title}}</td>
      <td>{{$pro->Client_Email}}</td>
      <td>{{$pro->Projetc_lead_by}}</td>
      <td><a href="/ShowProject/{{$pro->Project_title}}"><button class="btn btn-outline-success">Full View</button></a></td>
    </tr>
   @endforeach
   
  </tbody>
</table>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#sdt').DataTable();
</script>
  </div>
</div>
      
    </section>
    @if(Session::has('message'))
   <script>
    swal('Done',"Project Update succesfully!",'success');
   </script> 
  @endif

    @else
       <script>
        window.location.href="/UnAuthorize";
       </script> 
     @endif

    
                
      

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