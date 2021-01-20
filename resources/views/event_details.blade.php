<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8e7fb5ae95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/custum.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Favicon -->
	<link rel="icon" href="{{asset('favicon.png')}}" type="image/x-icon">

    <title>Submit an event | Evently</title>
</head>
<body>
    <!-- === === === === === === === === === Navbar Start === === === === === === === === === -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-3">
        <div class="container">
            <a class="navbar-brand font-weight-bold cursive" href="index.html">EVENTLY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active mx-1">
                  <a class="nav-link font-weight-bold" href="{{route('events.welcome')}}">Home <span class="sr-only">(current)</span></a>
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
                    <a href="register.html" class="btn btn-primary">SIGN OUT</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!-- === === === === === === === === === Navbar End === === === === === === === === === -->

    <!-- === === === === === === === === === Breadcrumb Start === === === === === === === === === -->
    <div class="container">
        <nav aria-label="breadcrumb" class="py-2">
            <ol class="breadcrumb" style="background-color: inherit;">
              <li class="breadcrumb-"><h5>Event Details</h5></li>
              <li class="breadcrumb-item ml-auto"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Event</li>
            </ol>
        </nav>
    </div>
    
    <!-- === === === === === === === === === Breadcrumb End === === === === === === === === === -->


    <!-- === === === === === === === === === Page Content Start === === === === === === === === === -->

    <div id="event-details" class="pb-5">
        <div class="container">
            <h3 class="text-primary">{{$event->name}}</h3>
            <div class="d-flex justify-content-between align-items-center pb-3" style="border-bottom: 1px solid #ccc;">
                <div>
                    <span class="mr-4"><i class="far fa-user"></i> Poster By <a href="#">Lizzie</a></span>
                    <span><i class="far fa-thumbs-up"></i> 0</span>
                </div>
                <div>
                    <button class="btn btn-success btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                    <button class="btn btn-primary btn-sm"><i class="far fa-heart"></i> Add to wishlist</button>
                    <button class="btn btn-info btn-sm"><i class="fas fa-share"></i> Share</button>
                </div>
            </div>

            <!-- Details -->

            <div class="main py-4">
                <!-- Event Title -->
                <div class="row pb-3">
                    <div class="col-4">
                        <p class="text-info">Event Title:</p>
                    </div>
                    <div class="col">
                        <p>{{$event->name}}</p>
                    </div>
                </div>
                <!-- Event Type -->
                <div class="row pb-3">
                    <div class="col-4">
                        <p class="text-info">Event Type:</p>
                    </div>
                    <div class="col">
                        <p>{{$event->type}}</p>
                    </div>
                </div>
                <!-- Event Date -->
                <div class="row pb-3">
                    <div class="col-4">
                        <p class="text-info">Event Start Date:</p>
                    </div>
                    <div class="col">
                        <p>{{$event->start_date}}</p>
                    </div>
                </div>
                <!-- Event Duration -->
                <div class="row pb-3">
                    <div class="col-4">
                        <p class="text-info">Event End Date:</p>
                    </div>
                    <div class="col">
                        <p>{{$event->end_date}}</p>
                    </div>
                </div>
                <!-- Event Location -->
                <div class="row pb-1">
                    <div class="col-4">
                        <p class="text-info">Event Location:</p>
                    </div>
                    <div class="col">
                        <p>{{$event->city}}, {{$event->state}}</p>
                    </div>
                </div>
            </div>

            <hr>

            <nav class="mt-5">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                  <a class="nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">More Info</a>
                  <a class="nav-link" id="nav-venue-tab" data-toggle="tab" href="#nav-venue" role="tab" aria-controls="nav-venue" aria-selected="false">Venue</a>
                  <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact/Website</a>
                  <a class="nav-link" id="nav-images-tab" data-toggle="tab" href="#nav-images" role="tab" aria-controls="nav-images" aria-selected="false">Images</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active py-5" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                    
                    <!-- Organizers Name -->
                    <div class="row pb-3">
                        <div class="col-4">
                            <p class="text-info">Organizers Name:</p>
                        </div>
                        <div class="col">
                            <p>{{$event->firstname}} {{$event->lastname}}</p>
                        </div>
                    </div>
                    <hr>
                    <!-- Organization Type -->
                    <div class="row pb-3">
                        <div class="col-4">
                            <p class="text-info">Organization Type:</p>
                        </div>
                        <div class="col">
                            <p>Small Business</p>
                        </div>
                    </div>
                    <hr>
                    <!-- Related Industries -->
                    <div class="row pb-3">
                        <div class="col-4">
                            <p class="text-info">Related Industries:</p>
                        </div>
                        <div class="col">
                            <p>Fashion</p>
                            <p>Cosmetics</p>
                            <p>Beauty</p>
                            <p>Lifestyle</p>
                        </div>
                    </div>
                    <hr>
                    <!-- Featured Speakers -->
                    <div class="row pb-3">
                        <div class="col-4">
                            <p class="text-info">Featured Appearances:</p>
                        </div>
                        <div class="col">
                            <p>Lizzie</p>
                            <p>Mr John</p>
                        </div>
                    </div>
                    <hr>
                    <!-- Sponsors -->
                    <div class="row">
                        <div class="col-4">
                            <p class="text-info">Sponsors</p>
                        </div>
                        <div class="col">
                            <p>Neemah's Clothing PLC</p>
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">

                    <div class="py-5">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, illum molestiae voluptate architecto a inventore eveniet veritatis natus fugiat, tempore consectetur odio cum qui, laudantium quidem ex repudiandae eaque. Esse illum eligendi libero, voluptates officia laudantium distinctio nulla, impedit suscipit velit exercitationem perspiciatis iste, at ratione alias facere odit minima totam accusantium magni? Sunt, laudantium aliquid? Corrupti excepturi voluptatibus modi, minus quasi aliquam rem sint vero aspernatur eaque! Beatae accusamus quasi ullam corrupti fugit explicabo, nam aspernatur in error sapiente eligendi ipsam atque laudantium illo optio ut quidem praesentium libero quod iste ratione saepe! Id atque laborum corrupti tempora eum!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum recusandae facilis sint omnis. Vero accusamus odio dolore sunt tempora aperiam maxime est quia provident modi explicabo eaque, quibusdam, at dolorem adipisci in eveniet ullam nisi totam deserunt itaque quos aut, qui officiis. Dolorem consectetur repellendus voluptate neque dignissimos. Enim, expedita ex aperiam perferendis aut nisi unde, deserunt qui optio, quae suscipit excepturi accusamus modi quasi adipisci magnam dignissimos? Quia, facilis.</p>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-venue" role="tabpanel" aria-labelledby="nav-venue-tab">

                    <div class="py-5">
                        <!-- Venue Name -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">Venue Name:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->venue}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Organization Type -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">City:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->city}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Related Industries -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">State:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->state}}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                    <div class="py-5">
                        <!-- Organizers Name -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">Organizers Name:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->firstname}} {{$event->lastname}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Email -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">Email:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Website -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">Website:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->website}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Phone -->
                        <div class="row pb-3">
                            <div class="col-4">
                                <p class="text-info">Phone:</p>
                            </div>
                            <div class="col">
                                <p>{{$event->phone}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Social Media -->
                        <div class="row">
                            <div class="col-4">
                                <p class="text-info">Social</p>
                            </div>
                            <div class="col">
                                <p><i class="fab fa-facebook-square"></i> {{$event->facebook}}</p>
                                <p><i class="fab fa-twitter-square"></i> {{$event->twitter}}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">

                    <div class="py-5">
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('img/event.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/showcase.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="{{asset('img/event.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
              </div>

        </div>
    </div>

    <!-- === === === === === === === === === Page Content End === === === === === === === === === -->
    
    
    




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
    



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>