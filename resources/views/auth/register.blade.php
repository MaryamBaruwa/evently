<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8e7fb5ae95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custum.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Favicon -->
	<link rel="icon" href="./favicon.png" type="image/x-icon">

    <title>Sign Up | Evently</title>
</head>
<body>
    <!-- === === === === === === === === === Navbar Start === === === === === === === === === -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand font-weight-bold cursive" href="index.html">EVENTLY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                <li class="nav-item active mx-1">
                    <a class="nav-link font-weight-bold" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Conference</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Workshop</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Seminar</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Webinar</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Music</a>
                    </div>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                </ul>

                <ul class="navbar-nav">
                <li class="nav-item mx-1">
                    <a href="register.html" class="btn btn-primary">SIGNUP</a>
                </li>
                <li class="nav-item mx-1">
                    <a href="login.html" class="btn btn-success">SIGNIN</a>
                </li>
                </ul>
            </div>
        </div>
        </nav>

    <!-- === === === === === === === === === Navbar End === === === === === === === === === -->

    <!-- === === === === === === === === === Register Section Start === === === === === === === === === -->

    <section id="register" class="my-2">
        <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="d-flex flex-column py-4 justify-content-center align-items-center">
                <form class="reg-form p-md-5 p-3" method="POST" action="{{ route('register') }}">
                @csrf
                    <h1 class="heading">Create An Account</h1>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" placeholder="Enter first name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" placeholder="Enter last name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <div class="form-check my-3">
                        <input type="checkbox" name="checkbox" id="checkbox" required>
                        <label for="checkbox">I agree to the <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a></label>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    <p class="mt-2 text-center">Already have an account? <a href="login.html">Login</a></p>
                </form>
            </div>
        </div>
    </section>



    <!-- === === === === === === === === === Register Section End === === === === === === === === === -->


    <!-- === === === === === === === === === Footer Start === === === === === === === === === -->

    <footer id="footer" class="p-5 text-white">
        <div class="container">
            <div class="row text-center text-md-left">
            <div class="identity col-md-3">
                <h1 class="display3 text-info font-weight-bold cursive">EVENTLY</h1>
            </div>
        
            <ul class="col-md-2">
                <li><a href="#about">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
    
            <ul class="col-md-2">
                <li><a href="#">Careers</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
    
            <div id="request" class="col-md-5 text-md-right">
                <a href="#" class="btn btn-primary rounded-pill">Get Started</a>
                <p class="mt-4">©2020 Evently. All Rights Reserved</p>
            </div>
        </footer>
        
    <!-- === === === === === === === === === Footer End === === === === === === === === === -->

</body>
</html>
