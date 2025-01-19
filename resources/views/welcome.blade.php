<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banstech</title>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
   <link href="{{asset('welcome.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>

<header class="navbar navbar-expand-lg position-absolute w-100 py-1">
  <div class="container-fluid d-flex mt-1 align-items-center mb-1 justify-content-between">
    <!-- Logo Section -->
    <a href="{{url('/')}}" class="d-flex align-items-center text-decoration-none">
      <img src="{{asset('pictures/logo.png')}}" alt="Banstech Logo" class="logoimage me-2">
    </a>

      <!-- Navigation Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-light" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#about">About Us</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="{{route('login')}}">Login</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="{{route('register')}}">Register</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#post-project">Post Project</a></li>
      </ul>
    </div>
    
  </div>
</header>


<main>
<!-- Section 2: Video -->
<section class="hero-section">
    <div class="video-container" style="background-color: black; display: flex; justify-content: center; align-items: center; height: 100vh;">
        <video id="video" class="background-video" autoplay muted loop style="width: 100%; height: auto;max-width: 100%;">"

       <source src="{{asset('pictures/hero_video.mp4')}}">
       <!-- "https://videos.pexels.com/video-files/3125396/3125396-uhd_2560_1440_25fps.mp4"> -->
                 Your browser does not support this video
            <img src="https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Video fallback image" style="width: 100%; height: auto;">
        </video>
    </div>

    <div class="content">
    <h1>Hire the Best Freelancers <br> for Any Job, Online</h1>
    <ul>
    <li>Join the world’s leading freelance platform</li>
    <li>Any project, big or small, we have a freelancer for it</li>
    <li>Get instant quotes and save on your projects</li>
    <li>Pay only when the work is approved</li>
</ul>

    
    <div class="button-container">
        <a href="#" class="btn btn-primary">Hire a Freelancer</a>
        <a href="#" class="btn btn-secondary">Earn Money Freelancing</a>
    </div>
</div>
</section>

 <!-- Section 3:-->

     <section id="section-3" class="py-5 px-5 companies">
  <div class="container-fluid px-5">

    <!-- Companies Section -->
    <h3 class="mt-5 text-white mb">Companies</h3>
<div class="row align-items-center text-center">
  <!-- Stage 1 -->
  <div class="col-md-2 d-flex flex-column align-items-center text-center">
    <div class="icon-wrapper bg-primary text-white rounded-circle d-flex justify-content-center align-items-center shadow" style="width: 80px; height: 80px;">
      <i class="bi bi-phone fs-2"></i>
    </div>
    <h5 class="mt-3 text-white text-uppercase">Contact Us</h5>
    <p class="text-light mt-2">
      Initiate the process by contacting our team. Book an appointment:<br>
      <strong>Call:</strong> <br> (+27) 106 3415 58 <br>
      <strong>Email:</strong> support@banstech.co.za
         </p>
  </div>
<!-- Arrow 1 -->
<div class="col-2 col-md-1 d-flex justify-content-center text-center">
  <i class="bi bi-arrow-right-circle-fill text-primary responsive-arrow arrow-icon"></i>
</div>

 <!-- Stage 2 -->
 <div class="col-md-2 d-flex flex-column align-items-center text-center">
    <div class="icon-wrapper bg-success text-white rounded-circle d-flex justify-content-center align-items-center shadow" style="width: 80px; height: 80px;">
      <i class="bi bi-people fs-2"></i>
    </div>
    <h5 class="mt-3 text-white text-uppercase">Meeting</h5>
    <p class="text-light">
      Conduct a meeting to thoroughly understand your needs and tailor a solution that best suits your requirements.
    </p>
  </div>

  <!-- Arrow 2 -->
  <div class="col-2 col-md-1 d-flex justify-content-center text-center">
  <i class="bi bi-arrow-right-circle-fill text-primary responsive-arrow arrow-icon"></i>
</div> 

   <!-- Stage 3 -->
   <div class="col-md-2 d-flex flex-column align-items-center text-center">
    <div class="icon-wrapper bg-warning text-white rounded-circle d-flex justify-content-center align-items-center shadow" style="width: 80px; height: 80px;">
      <i class="bi bi-gear fs-2"></i>
    </div>
    <h5 class="mt-3 text-white text-uppercase">Plan & Execute</h5>
    <p class="text-light">
      Finalize the appointment and proceed with a structured plan, ensuring implementation within the designated timeframe.
    </p>
  </div>

  <!-- Arrow 3 -->
  <div class="col-2 col-md-1 d-flex justify-content-center text-center">
  <i class="bi bi-arrow-right-circle-fill text-primary responsive-arrow arrow-icon"></i>
</div> 

  <!-- Stage 4 -->
  <div class="col-md-2 d-flex flex-column align-items-center text-center">
    <div class="icon-wrapper bg-info text-white rounded-circle d-flex justify-content-center align-items-center shadow" style="width: 80px; height: 80px;">
      <i class="bi bi-check2-circle fs-2"></i>
    </div>
    <h5 class="mt-3 text-white text-uppercase">Delivery</h5>
    <p class="text-white">
      Delivering the finalized solution, complete with quality checks to ensure it meets your expectations and requirements.
    </p>
  </div>
</div>
</div>

 <!-- Section 2 Row 2 -->
    <!-- Client to Expert Section -->

    <h3 class="mt-5 text-white"> &nbsp;&nbsp;Client to Expert</h3>
     <!-- <div class="row row-cols-1 row-cols-md-6 g-4"> -->
     <div class="row align-items-center text-center">
   
<!-- Stage 1 -->
<div class="col">
  <div class="feature-box bg-primary text-center text-white p-2 rounded d-flex flex-column align-items-center">
    <div class="icon-wrapper d-flex justify-content-center align-items-center mb-2" style="width: 60px; height: 60px;">
      <i class="bi bi-file-earmark-post fs-3"></i>
    </div>
    <h6 class="fw-bold">Post a Project</h6>
    <p><i>Post a project for experts to view and bid.</i></p>
  </div>
</div>

<!-- Stage 2 -->
<div class="col">
  <div class="feature-box bg-success text-white p-2 rounded d-flex flex-column align-items-center">
    <div class="icon-wrapper d-flex justify-content-center align-items-center mb-3" style="width: 60px; height: 60px;">
      <i class="bi bi-people fs-3"></i>
    </div>
    <h6 class="fw-bold">Award the Project</h6>
    <p><i>Find and award the project to an expert.</i></p>
  </div>
</div>

<!-- Stage 3 -->
<div class="col">
  <div class="feature-box bg-warning text-white p-2 rounded d-flex flex-column align-items-center">
    <div class="icon-wrapper d-flex justify-content-center align-items-center mb-2" style="width: 60px; height: 60px;">
      <i class="bi bi-person-circle fs-3"></i>
    </div>
    <h6 class="fw-bold">Choose a Project Manager</h6>
    <p><i>(Optional): Choose a project manager to oversee the project.</i></p>
  </div>
</div>

<!-- Stage 4 -->
<div class="col">
  <div class="feature-box bg-info text-white p-2 rounded d-flex flex-column align-items-center">
    <div class="icon-wrapper d-flex justify-content-center align-items-center mb-2" style="width: 60px; height: 60px;">
      <i class="bi bi-gear fs-3"></i>
    </div>
    <h6 class="fw-bold">Create Milestones</h6>
    <p><i>Create payment milestones for the project.</i></p>
  </div>
</div><!-- End Stage 4 -->

<!-- Stage 5 -->
<div class="col">
  <div class="feature-box bg-danger text-white p-2 rounded d-flex flex-column align-items-center">
    <div class="icon-wrapper d-flex justify-content-center align-items-center mb-2" style="width: 60px; height: 60px;">
      <i class="bi bi-currency-dollar fs-3"></i>
    </div>
    <h6 class="fw-bold">Release Payments</h6>
    <p><i>Release payment upon the completion of each milestone.</i></p>
  </div>
</div>

<!-- Stage 6 -->
<div class="col">
  <div class="feature-box bg-secondary text-white p-2 rounded d-flex flex-column align-items-center">
    <div class="icon-wrapper d-flex justify-content-center align-items-center mb-2" style="width: 60px; height: 60px;">
      <i class="bi bi-check-circle fs-3"></i>
    </div>
    <h6 class="fw-bold ">Validation</h6>
    <p><i>Validate the completed project before finalizing payment.</i></p>
  </div>
</div>
</div>

<!-- Section 2 Row 3 -->

  <!-- Subscriptions Section -->
<h3 class="mt-5 text-white">Subscriptions</h3>

<div class="row gy-4">
  <!-- Stage 1 -->
  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="service-item">
      <div class="icon bg-success">
        <i class="bi bi-person-check"></i>
      </div>
      <div>
        <h4 class="title text-uppercase">Find a Subscription Service</h4>
        <p class="description">Find the one that suits you best.</p>
      </div>
    </div>
  </div>

  <!-- Stage 2 -->
   <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200"> 
    <div class="service-item">
      <div class="icon bg-danger">
        <i class="bi bi-credit-card"></i>
      </div>
      <div>
        <h4 class="title text-uppercase">Subscribe to It</h4>
        <p class="description"> Simply subscribe to gain full access.</p>
      </div>
   </div>
  </div>

  <!-- Stage 3 -->
  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="service-item">
      <div class="icon bg-secondary">
        <i class="bi bi-chat-dots"></i>
      </div>
      <div>
        <h4 class="title text-uppercase">Engage with Clients</h4>
        <p class="description">Start engaging with clients to offer your services and receive feedback.</p>
      </div>
    </div>
  </div>

  <!-- Stage 4 -->
  <div class="col-lg-3 col-md-6" >
    <div class="service-item">
      <div class="icon bg-warning">
        <i class="bi bi-briefcase"></i>
      </div>
      <div>
        <h4 class="title text-uppercase">Earn Jobs</h4>
        <p class="description">Complete tasks and earn jobs through your subscription service platform.</p>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Section 4: List of our Services -->
<section class="service">
              <!-- Title -->
     <h1 class="text-uppercase fs-1 text-center">Get Work Done</h1>
    <p class="mb-5 text-center">
        <i>Explore a wide range of services and find expert solutions tailored to your needs, 
        from digital to physical services.</i></p>
       
        <div class="container d-flex justify-content-center align-items-center gx-4 gy-4">
        <div class="row ">
            
<div class="col-lg-12 col-md-6">
    <div class="row gx-4 gy-4">
        <!-- Connect Clients to Experts (Virtual Services) -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="work-card">
                <div class="card-header text-center firstheading ">
                    <h5 class="card-title fw-bold mb-4 text-end px-1">Virtual Services</h5>
                </div>
                <div class="card-body px-2">
                    <ul class="list-unstyled">
                        <li><a href=" javascript:void(0)" class="links">Web Design</a></li>
                        <li><a href=" javascript:void(0)" class="links">Application Development</a></li>
                        <li><a href=" javascript:void(0)" class="links">Logo Design</a></li>
                        <li><a href=" javascript:void(0)" class="links">Video/Picture Editing</li>
                        <li><a href=" javascript:void(0)" class="links">Writing Assignments</a></li>
                        <li><a href=" javascript:void(0)" class="links">Tutoring</a></li>
                        <li><a href=" javascript:void(0)" class="links">Virtual Assistant</a></li>
                        <li><a href=" javascript:void(0)" class="links">Copywriter</a></li>
                        <li><a href=" javascript:void(0)" class="links">Blogger</a></li>
                        <li><a href=" javascript:void(0)" class="links">Social Media Manager</a></li>
                        <li><a href=" javascript:void(0)" class="links">Payroll Manager</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Continuation of Virtual Services -->
        <div class="col-lg-3 col-md-4 ">
            <div class="work-card">
                <div class="card-body">
                    <ul class="list-unstyled "> <br><br>
        
                        <li><a href=" javascript:void(0)" class="links">Technical Writer</a></li>
                        <li><a href=" javascript:void(0)" class="links">Content Editor</a></li>
                        <li><a href=" javascript:void(0)" class="links">Data Analysis</a></li>
                        <li><a href=" javascript:void(0)" class="links">Data Entry</a></li>
                        <li><a href=" javascript:void(0)" class="links">Digital Marketing</a></li>
                        <li><a href=" javascript:void(0)" class="links">SEO Specialist</a></li>
                        <li><a href=" javascript:void(0)" class="links">Affiliate Marketing</a></li>
                        <li><a href=" javascript:void(0)" class="links">Sales Representative</a></li>
                        <li><a href=" javascript:void(0)" class="links">Lead Generation Expert</a></li>
                        <li><a href=" javascript:void(0)" class="links">Accountant</a></li>
                        <li><a href=" javascript:void(0)" class="links">Bookkeeper</a></li>
                        <li><a href=" javascript:void(0)" class="links">Financial Analyst</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
  
                    <!-- Physical Services -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class=" ">
                            <div class="card-header">
                                <h5 class="card-title fw-bold mb-4 px-2">Physical Services</h5>
                            </div>
                            <div class="card-body px-2">
                                <ul class="list-unstyled">
                                    <li><a href=" javascript:void(0)" class="links">Builders</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Plumbers</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Electricians</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Tilers</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Carpenters</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Painters</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Plasters</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Mechanics</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Pavers</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Architects</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Security Installation</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Gardeners</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Cleaners</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Care Givers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Start-Up Companies & IT Services -->
                    <div class="col-lg-3 col-md-6 mb-4 ">
                        <div class=" ">
                            <div class="card-header ">
                                <h5 class="card-title fw-bold mb-4 px-5">Start-Up <br> Companies</h5>
                            </div>
                            <div class="card-body px-5 ">
                                <ul class="list-unstyled">
                                    <li><a href=" javascript:void(0)" class="links">Infrastructure Support</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Support Existing Infrastructure</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Software Support</a></li>
                                </ul>
                            </div>
                            
                    <!-- Subscription Services -->
                    <div class="col-lg-3 col-md-6 mb-4"> 
                        <div class=" ">
                            <div class="card-header ">
                                <h5 class="card-title fw-bold mb-4 px-5">Subscription Services</h5>
                            </div>
                            <div class="card-body px-5">
                                <ul class="list-unstyled">
                                    <li><a href=" javascript:void(0)" class="links">Beauty Services</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Car Wash</a></li>
                                    <li><a href=" javascript:void(0)" class="links">Xcelerate LMS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
        </section>

        <!-- Section 5 -->
<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2 class="fw-bold">What Our Clients Say</h2>
    <i>Discover how our platform has positively impacted our clients' lives and careers.</i></p>
  </div>

  <div class="container " data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>
      <div class="swiper-wrapper">
      
        <!-- Testimonial 1 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Highly recommend! The features are innovative, and it has helped me grow my business exponentially.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('pictures/pontso.jpg')}}" class="testimonial-img" alt="Pontso">
              <h3>Pontso Brown</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Absolutely love it! The attention to detail and seamless functionality is everything I could ask for, this is what I really needed.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('pictures/Zinhle.jpg')}}" class="testimonial-img" alt="Zinhle Mjwara">
              <h3>Zinhle Mjwara</h3>
              <h4>Sales Manager</h4>
            </div>
          </div>
        </div>

          <!-- Testimonial 3 -->
          <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
            </div>
            <p>
              This platform has completely transformed the way I work. The user-friendly interface and amazing support team are unmatched! 
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('pictures/pamela.jpg')}}" class="testimonial-img" alt="Pamela Masanabo">
              <h3>Pamela Masanabo</h3>
              <h4>Software Engineer</h4>
            </div>
          </div>
        </div>

        <!-- Testimonial 4 -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Top-notch service! The team goes above and beyond to ensure satisfaction. I'll definitely keep coming back.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('pictures/Eneto.jpg')}}" class="testimonial-img" alt="Eneto Motau">
              <h3>Eneto Motau</h3>
              <h4>Freelancer</h4>
            </div>
          </div>
        </div>

       
        <!-- Testimonial 5 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star "></i></i><i class="bi bi-star"></i>
            </div>
            <p>
              This is hands-down the best experience I've had with any service. They truly care about their clients' success!
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('pictures/hilton.jpg')}}" class="testimonial-img" alt="Hilton Taka">
              <h3>Hilton Taka</h3>
              <h4>Creative Director</h4>
            </div>
          </div>
        </div>

         <!-- Testimonial 6 -->
         <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill "></i></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
            The service provided has been amazing! I feel valued as a subscriber and the support has been outstanding.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('pictures/ntokozo.jpg')}}" class="testimonial-img" alt="Nontokozo">
              <h3>Nontokozo Backer</h3>
              <h4>Subscriber</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
      </section>

<div class=" subscribe">
  
</div>

    <!-- Section 6: Newsletter Subscription -->
    <section id="newsletter" class="text-center">
        <div class="container">
            <h2>Subscribe to Our Newsletters</h2>
            <form>
                <input type="email" placeholder="Enter your email" class="form-control d-inline-block w-50">
                <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
            </form>
        </div>
    </section>
</main>

    <!-- Section 7: Footer -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Contact</h4>
                <p>
                    <a href="mailto:support@banstech.co.za">
                        <i class="bi bi-envelope-fill text-white"></i>
                        Email: support@banstech.co.za
                    </a>
                    <br>
                    <a href="tel:(+27) 106 3415 58">
                        <i class="bi bi-telephone text-white"></i>
                        Contact: (+27) 106 3415 58
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <h4>Address</h4>
                <p>
                    <a href="https://maps.app.goo.gl/pz7gDRvJobwDVxcq5" target="_blank">
                        <i class="bi bi-geo-alt-fill text-white"></i>
                        51 Harrison St, Johannesburg, 2001
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Categories of Our Services</h4>
                <ul class="list-unstyled">
                    <li>IT Services</li>
                    <li>Virtual Assistance</li>
                    <li>Physical Services</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p>© 2025 Banstech |  <a href=" javascript:void(0)" class="text-white">Policies</a>&nbsp and <a href=" javascript:void(0)" class="text-white">Related Information</a></p>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
  document.addEventListener("DOMContentLoaded", () => {
    const configElements = document.querySelectorAll(".swiper-config");
    configElements.forEach((configEl) => {
      const config = JSON.parse(configEl.textContent);
      new Swiper(configEl.closest(".init-swiper"), config);
    });
  });
</script>

  </body>
</html>