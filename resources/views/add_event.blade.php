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
                <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-success">Sign Out</button>
                </form>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!-- === === === === === === === === === Navbar End === === === === === === === === === -->

    <!-- === === === === === === === === === Showcase Start === === === === === === === === === -->

    <header id="submit-event" class="text-white">
        <div class="container">
            <div class="py-5">
                <h1 class="display1 text-center">Submit Your Own Event<h1>
            </div>
        </div>
    </header>
    
    <!-- === === === === === === === === === Showcase End === === === === === === === === === -->



    <!-- === === === === === === === === === Page Content Start === === === === === === === === === -->

    <section class="py-5">
        <div class="container">
            <p class="lead">Share your upcoming event with the world for free. Complete the form below and submit it for us to review. Evently is your number one Event Planning Hub. We are here to help you to spread the word.</p>
            <p class="mt-3 lead">
                <span class="font-weight-bold">To Submit An Event:</span> Complete the form below. Only upload PNG or JPEG images. Put the name of each Event, Speaker, and Sponsor in its related file name. To upload more than one image at a time for Sponsor and Speakers, click the Browse button and select all the images you wish to upload. You must include your contact person’s name, phone number, and their company email address. We will notify them within 48-72 hours to let you know if your event has been approved.  
            </p>
            <form class="my-4 reg-form p-4" method="POST" action="{{route('event.create')}}" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-sec-header">
                            <h3>Event</h3>
                        </div>
                        <div class="form-group">
                            <label for="eventName">Event Name</label>
                            <input type="text" placeholder="Enter event name" name="name" class="form-control" value="{{old('name')}}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="eventName">Event Type</label>
                            <select class="form-control" name="type" id="eventType">
                                <option value="IT" @if (old('type') == "IT") {{ 'selected' }} @endif>Conference</option>
                                <option value="workshop" @if (old('type') == "workshop") {{ 'selected' }} @endif>Workshop</option>
                                <option value="seminar" @if (old('type') == "seminar") {{ 'selected' }} @endif>Seminar</option>
                                <option value="concert" @if (old('type') == "concert") {{ 'selected' }} @endif>Concert</option>
                                <option value="meetup" @if (old('type') == "meetup") {{ 'selected' }} @endif>Meetup</option>
                                <option value="other" @if (old('type') == "other") {{ 'selected' }} @endif>other</option>
                            </select>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Event Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Describe your event">{{old('description')}}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="startDate" >Start Date</label>
                            <input type="date" name="start_date" id="startDate" placeholder="mm/dd/yy" class="form-control"  value="{{old('start_date')}}" >
                            @error('start_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Date">End Date</label>
                            <input type="date" name="end_date" id="EndDate" placeholder="mm/dd/yy" class="form-control"  value="{{old('end_date')}}">
                            @error('end_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Time">Time</label>
                            <input type="time" name="time" id="time" class="form-control"  value="{{old('time')}}">
                            @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Venue Name</label>
                            <input type="text" name="venue" id="venue" placeholder="Name of venue" class="form-control"  value="{{old('venue')}}">
                            @error('venue')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" id="venue" placeholder="City"class="form-control"  value="{{old('city')}}">
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" id="venue" placeholder="State"class="form-control"  value="{{old('state')}}">
                            @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-sec-header">
                            <h3>Event Details</h3>
                        </div>
                        <div class="form-group">
                            <label>Featured Speakers/Artistes</label>
                            <textarea class="form-control" name="featured_speakers" cols="30" rows="5" placeholder="e.g Davido">{{old('featured_speakers')}}</textarea>
                            @error('featured_speakers')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" placeholder="Enter website link" name="website" class="form-control" value="{{old('website')}}">
                            @error('website')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sponsors</label>
                            <textarea cols="30" rows="5" class="form-control" name="sponsors" placeholder="Enter sponsors">{{old('sponsors')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Social Media</label>
                            <input type="url" placeholder="Facebook Link" name="facebook" class="form-control"  value="{{old('facebook')}}">
                            @error('facebook')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="url" placeholder="Twitter Link"  name="twitter"class="form-control mt-2"  value="{{old('twitter')}}">
                            @error('twitter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="url" placeholder="LinkedIn Link" name="linkedin" class="form-control mt-2"  value="{{old('linkedin')}}">
                            @error('linkedin')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="url" placeholder="Instagram Link" name="instagram" class="form-control mt-2"  value="{{old('instagram')}}">
                            @error('instagram')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-sec-header">
                            <h3>Images</h3>
                        </div>
                        <div class="form-group">
                            <labeb>Upload Logo</label>
                            <input type="file" name="event_logo" class="mt-2 font-weight-bold"  value="{{old('event_logo')}}">
                            @error('event_logo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <labeb>Upload Sponsor Images</label>
                            <input type="file" name="sponsor_image" class="mt-2 font-weight-bold" multiple  value="{{old('sponsor_image')}}">
                            @error('sponsor_image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <labeb>Upload Speaker/Performers Images</label>
                            <input type="file" name="speakers_image" class="mt-2 font-weight-bold" multiple  value="{{old('speakers_image')}}">
                            @error('speakers_image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-sec-header mt-5">
                            <h3>Contact Information</h3>
                            <p>Please provide the Information of the person submitting this event.</p>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="First name" name="firstname" class="form-control"  value="{{old('firstname')}}">
                            @error('firstname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last name" name="lastname" class="form-control"  value="{{old('lastname')}}">
                            @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" placeholder="Company name" name="company_name" class="form-control"  value="{{old('company_name')}}">
                            @error('company_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="Email" name="email" class="form-control"  value="{{old('email')}}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" placeholder="Phone number" name="phone" class="form-control"  value="{{old('phone')}}">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Submit Event</button>
                    </div>
                </div>
            </form>
        </div>
    </section>



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
    



    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>
</html>