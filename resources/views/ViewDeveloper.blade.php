
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

  <title>View Developer details</title>

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

  



     <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3 class=" ">
        View Profile 
      </h3>
    </div>
    <div class="container layout_padding2-top">
  
    <div class="card">
  <div class="card-header">

    <button class="btn btn-danger btn-sm float-right" onclick="RemoveDev()">Remove</button>
  </div>
  <script>
    function RemoveDev()
    {
        swal({
             title: "Are you sure?",
             text: "Remove Developer",
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
       .then((willDelete) => {
          if (willDelete)
           {
            window.location.href = "/Developer/Remove/{{$Dev_Profile->id}}";
          } 
          else
         {
           swal("Your Developer is safe!");
         }
      });
    }
    </script>
  <div class="card-body">

  <form method="post" action="/EditDeveloper">
    @csrf
  <div class="img-box">
                      <div>
                        <img src="{{asset('storage/dev.jpg')}}" alt="" class="" style='width:90%;' border="0" alt="Null" />
                      </div>
   </div>
  <div class="row">
    <div class="col">
      <label>Email</label>
      <input type="hidden" value="{{$Dev_Profile->id}}" name="upid">
      <input type="text" class="form-control" placeholder="Developer Email"  name="updt_email" value="{{$Dev_Profile->Developer_Email}}">
    </div>
    <div class="col">
    <label>Contact</label>
      <input type="text" class="form-control" placeholder="Developer Contact" name="updt_contact" value="{{$Dev_Profile->Developer_Contact}}">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label>Role</label>
      <input type="text" class="form-control" placeholder="Developer Rule" name="updt_role" value="{{$Dev_Profile->Developer_Rule}}">
    </div>
    <div class="col">
    <label>Join date</label>
      <input type="date" class="form-control" placeholder="Joining Date" name="updt_date" value="{{$Dev_Profile->Joining_date}}">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label>Salary</label>
      <input type="text" class="form-control" placeholder="Developer Salary" name="updt_salary" value="{{$Dev_Profile->Developer_salary}}">
    </div>
    <div class="col">
    <label>Upi</label>
      <input type="text" class="form-control" placeholder="Developer Upi id" name="updt_upi" value="{{$Dev_Profile->Developer_upi_id}}">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label>Skills</label>
      <input type="text" class="form-control" placeholder="Developer Skills" name="updt_skills" value="{{$Dev_Profile->Developer_skills}}">
    </div>
    <div class="col">
        <label>Activity</label>
      <input type="text" class="form-control" placeholder="Developer Present Activity" name="updt_activity" value="{{$Dev_Profile->Developer_present_activity}}">
    </div>
  </div>

  <button class="btn btn-primary btn-sm">Update</button>
</form>
    
 </div>
    </div>
  </section>
         @if(Session::has('message'))
            <script>
            swal('Done',"{{Session::get('message')}}",'success');
            </script>
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