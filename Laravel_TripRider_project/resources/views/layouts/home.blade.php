<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/css/all.min.css" rel="stylesheet">

    <link href="/css/grayscale.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav  class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{route('home')}}"><img src="img/logo.png"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  href="{{route('home')}}" >Home</a>
            </li>
			<li class=" nav-item">
              <a class="nav-link js-scroll-trigger"  href="#about" >About</a>
            </li>
			<li class="nav-item">
			<div class="dropdown">
			  <span  class="nav-link js-scroll-trigger dropdown-toggle" style="cursor:pointer" data-toggle="dropdown">
				Sign Up
			  </span>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="{{route('signupRider')}}" >As Rider</a>
				<a class="dropdown-item" href="{{route('signupDriver')}}" >As Driver</a>
			  </div>
			</div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  href="{{route('login')}}" >Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"   href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->

    @yield('content')
    

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div  class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Team</h2>
			<table>
			<tr>
			<td>
			<img width="80%" src="img/user_pic.jpg" class="rounded-circle"><br/><br/><h5 class="text-white mb-4">Rajesh Saha<h5>
			</td><td><img width="80%" src="img/user_pic.jpg" class="rounded-circle"><br/><br/><h5 class="text-white mb-4">Md Rezaul Karim<h5>
			</td><td><img width="80%" src="img/user_pic.jpg" class="rounded-circle"><br/><br/><h5 class="text-white mb-4">Md Mashiul Azam<h5>
			</td><td><img width="80%" src="img/user_pic.jpg" class="rounded-circle"><br/><br/><h5 class="text-white mb-4">Momtaz Begum<h5>
			</td>
			</tr>
			</table>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
	
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/2.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>TripRider</h4>
              <p class="text-black-50 mb-0">Something Something</p>
            </div>
          </div>
        </div>

        
        

      </div>
    </section>
	
    <!-- Signup Section -->
    

    <!-- Contact Section -->
    <section id="contact" class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">AIUB,Kuratoli,Dhaka</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">admin@triprider.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+880 1xxxxxxxxx</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; TripRider 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/grayscale.min.js"></script>

  </body>

</html>
