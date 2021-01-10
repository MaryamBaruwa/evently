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

    <title>Evently</title>
</head>
<body>
    <!-- === === === === === === === === === Navbar Start === === === === === === === === === -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-3">
        <div class="container">
            <a class="navbar-brand font-weight-bold cursive" href="#">EVENTLY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active mx-1">
                  <a class="nav-link font-weight-bold" href="#">Home <span class="sr-only">(current)</span></a>
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
                  <a class="nav-link" id="abt" href="#about">About</a>
                </li>
                <li class="nav-item mx-1">
                  <a class="nav-link" href="#">Blog</a>
                </li>
              </ul>

              <ul class="navbar-nav">
                <li class="nav-item mx-1">
                    <a href="{{route('register')}}" class="btn btn-primary">SIGNUP</a>
                </li>
                <li class="nav-item mx-1">
                    <a href="{{route('login')}}" class="btn btn-success">SIGNIN</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!-- === === === === === === === === === Navbar End === === === === === === === === === -->

    <!-- === === === === === === === === === Showcase Start === === === === === === === === === -->

    <header id="showcase" class="text-white">
        <div class="container">
            <div class="showcase-content">
                <h1 class="display1 text-center">Find Upcoming Events Around You</h1>
                <p class="lead text-center my-4">Conference, Wedding, Seminar or Music Fest. This is the place for you!</p>
                <form class="form-inline">
                    <div class="form-group my-3">
                        <input style="width: 300px;" class="form-control" type="text" placeholder="Search Events">
                        <button type="submit" class="btn btn-primary mx-md-2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    
    <!-- === === === === === === === === === Showcase End === === === === === === === === === -->


    <!-- === === === === === === === === === Events Section Start === === === === === === === === === -->

    <section id="events" class="my-4">
        <div class="container">
            <div class="events-content m-auto">
                <h3 class="text-center mb-5"> <span class="text-info font-weight-bold cursive">Upcoming</span> Events Around You Today</h3>
                <div class="row">
                    <div class="col-md-4 col-xs-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#" class="text-primary">ASUU & FG MEETING</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/12/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">22</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">Davido Concert</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/22/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">JAN</div>
                            <div class="day bg-light p-1 text-info text-center">4</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">Leaders Seminar 2021</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Jan/04/2021</p>
                        </div>
                    </div>
                    <div class="col-md-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">ASUU & FG MEETING</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/20/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">Google Meetup</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/20/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">ASUU & FG MEETING</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/20/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">ASUU & FG MEETING</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/20/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1  text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">ASUU & FG MEETING</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/20/2020</p>
                        </div>
                    </div>
                    <div class="col-md-4 event my-4">
                        <div class="calendar text-white font-weight-bold mx-1">
                            <div class="month bg-info p-1 text-center">DEC</div>
                            <div class="day bg-light p-1 text-info text-center">12</div>
                        </div>
                        <div class="details py-1 mx-1">
                            <a href="#">ASUU & FG MEETING</a>
                            <p class="icons mt-1"><i class="fas fa-search-location"></i>Lagos, NGR.  <i class="far fa-calendar-alt"></i> Dec/20/2020</p>
                        </div>
                    </div>
                    <a href="{{route('event.add')}} class="mx-auto mt-3 btn btn-lg btn-primary">Submit an event</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- === === === === === === === === === Events Section End === === === === === === === === === -->


    <!-- === === === === === === === === === About Section Start === === === === === === === === === -->

    <section id="about" class="py-4">
        <div class="container">
            <h3 class="text-center mb-4">About <span class="text-primary font-weight-bold cursive">Evently</span></h3>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 ev-img">
                    <img src="./img/event.jpg" alt="event" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <p class="lead p-2 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus excepturi, aperiam quibusdam et adipisci, cupiditate ab officiis, doloribus odit consectetur recusandae cumque nemo dicta velit voluptas ut omnis vitae. Culpa ea excepturi error dignissimos sed eligendi nostrum, cupiditate ipsa. Neque iure, odio aliquam mollitia aspernatur saepe perspiciatis nam alias ipsum nemo dicta nihil magnam nostrum blanditiis eos consectetur? Culpa, ipsa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- === === === === === === === === === About Section End === === === === === === === === === -->


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
    



    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>
</html>