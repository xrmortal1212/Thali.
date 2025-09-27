@extends('layout.mhf', ['title' => 'About Us'])

@section('main-content')
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/app.css">


  <div>
    <style>
    body {
      /* overflow-x: hidden; */
    }
    </style>

    <!-- ============================
       Hero Section (Intro Banner)
      ============================= -->
    <!-- Fade down the hero container, fade-up the headline and paragraph -->
    <div class="container-fluid position-relative " data-aos="fade-down" data-aos-duration="1200">
    <div class="svg-wave-bg" data-aos="fade" data-aos-duration="1000" data-aos-delay="100">
      <svg viewBox="0 0 800 400" preserveAspectRatio="none">
      <path id="wavePath" fill="#1b1b1b" d="M0,160 C200,220 600,100 800,160 L800,400 L0,400 Z"></path>
      </svg>
    </div>

    <div class="row about pt-4">

      <!-- Left circle (bottom-left) -->
      <img src="assets/images/left-circle.png" class="circle-left d-none d-md-flex d-lg-flex img-fluid" alt=""
      data-aos="fade-right" data-aos-delay="150">

      <div class="col-12 text-center text-light">
      <h1 data-aos="fade-up" data-aos-delay="200">
        <span id="about-h1">Make work life simpler,</span><br>
        more pleasant and more <br> productive.
      </h1>
      <p data-aos="fade-up" data-aos-delay="350">
        Thali is your All-In-One platform to build stunning websites — with <br>
        ready-made, fully customizable templates. You're building a portfolio, <br>
        a business site, Thali gives you the tools to design, and launch your dream <br>
        website — your way. Perfect for creators, just pure creativity.
      </p>
      </div>

      <!-- Right circle (top-right) -->
      <img src="assets/images/right-circle.png" class="circle-right d-none d-md-flex d-lg-flex img-fluid" alt=""
      data-aos="fade-left" data-aos-delay="150">

    </div>
    </div>

    <!-- ============================
       our vision 
      ============================= -->
    <div class="container-fluid justify-content-center align-item-center text-center d-flex story vision mt-4"
    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="row container justify-content-center align-item-center text-center  p-3 p-lg-5">
      <div class="col-12 col-md-6 col-lg-6 p-1 p-lg-3" data-aos="fade-right" data-aos-delay="300">
      <h4>Thali Story</h4>
      <h1>Our Vision & Mission</h1>
      <p>
        "Design is intelligence made visible" To make website creation<span
        class="d-none d-md-inline d-lg-inline ">effortless and accessible for
        everyone — empowering individuals and</span>businesses to build stunning online identities with complete
        creative freedom.
        <br><br>
        "The secret of getting ahead is getting started."
        We provide ready-to-use, fully customizable templates<span class="d-none d-md-inline d-lg-inline ">in one
        smart platform — simplifying the web-building journey </span> for creators, brands, and businesses alike.

      </p>
      </div>
      <div class="col-12 col-md-6 col-lg-6 p-3" data-aos="zoom-in" data-aos-delay="400">
      <!-- Meri Aur Rimsha Ki Image. -->
      <img src="assets/images/vision.png" class="img-fluid" style="border-radius: 20%;" alt="">
      </div>
    </div>
    </div>

    <div class="container">
    <div id="string" style="margin: 0px 0px !important;" data-aos="fade-up" data-aos-delay="200">
      <svg width="100%" height="200">
      <path d="M 10 100 Q 500 100 1500 100" stroke="white" fill="transparent" />
      </svg>
    </div>
    </div>

    <!-- ============================
       who we are 
      ============================= -->
    <div class="container text-light">
    <div class="row story p-1">
      <div class="col-12 col-md-6 col-lg-6 mt-5  order-2 order-md-1" data-aos="zoom-in" data-aos-delay="300">
      <img src="assets/images/who.png" class="img-fluid" style=" border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;" alt="">
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-0 mt-lg-5 p-3 order-1 order-md-2" data-aos="fade-left"
      data-aos-delay="250">
      <h1>Who we are and how to join us</h1>
      <p>We live by our mission: to make creativity simple, accessible, and powerful. At Thali, we’re not just
        building templates — we’re creating a platform that helps people express their ideas with freedom and flair.
        <br><br>
        We're not just building websites — we're building freedom to create. If you’re someone who wants to make a
        difference through your work, grow with purpose, and be part of something exciting — we’d love to meet you.
      </p>
      <a href="/m-contact" class="cta-button text-light">
                                <div class="text"><span>Join </span><span> Us</span></div>
                                <div class="clone"><span>Join </span><span> Us</span></div>
                                <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" width="20px">
                                    <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round">
                                    </path>
                                </svg>
                            </a>

      </div>

    </div>
    </div>

    <!-- ============================
       Slider 
      ============================= -->
    <div class="container text-center text-light mt-5">
    <h1 style=" font-family: 'Machina';" data-aos="fade-up">Top Featured Templates</h1>
    </div>
    <div class="main-slider-about">

    <div class="carousel">
      <div class="card" id="c1">
      <div class="txt">
        <h1 style="color: white !important;">ARMAR-G</h1>
        <p style="color: white !important;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
        ratione labore saepe, nostrum quibusdam architecto neque, obcaecati officiis reiciendis impedit
        perspiciatis.</p>
      </div>
      </div>
      <div class="card" id="c2" >
      <div class="txt">
        <h1 style="color: white !important;">ALTER 3</h1>
        <p style="color: white !important;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
        ratione labore saepe, nostrum quibusdam architecto neque, obcaecati officiis reiciendis impedit
        perspiciatis.</p>
      </div>
      </div>
      <div class="card" id="c3" >
      <div class="txt">
        <h1 style="color: white !important;">AMECA</h1>
        <p style="color: white !important;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
        ratione labore saepe, nostrum quibusdam architecto neque, obcaecati officiis reiciendis impedit
        perspiciatis.</p>
      </div>
      </div>
      <div class="card" id="c4" >
      <div class="txt">
        <h1 style="color: white !important;">APOLLO</h1>
        <p style="color: white !important;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
        ratione labore saepe, nostrum quibusdam architecto neque, obcaecati officiis reiciendis impedit
        perspiciatis.</p>
      </div>
      </div>
      <div class="card" id="c5" >
      <div class="txt">
        <h1 style="color: white !important;">ATLAS</h1>
        <p style="color: white !important;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
        ratione labore saepe, nostrum quibusdam architecto neque, obcaecati officiis reiciendis impedit
        perspiciatis.</p>
      </div>
      </div>
    </div>

    </div>

    <!-- ============================
       our expert 
      ============================= -->

    <div class="container-fluid m-4">
    <div class="heading text-center text-light">
      <h5 style="color: #d2b553;" data-aos="fade-up">OUR TEAM</h5>
      <h1 style="font-family: 'Machina';" data-aos="fade-up" data-aos-delay="150">Meet Expert <span
        style="color: #d2b553;">Team</span>.</h1>
      <div class="hr" style="margin-top:10px;display: flex;justify-content: center;align-items: center;">
      <div style="width:80px; border:1px solid  #d2b553" data-aos="zoom-in" data-aos-delay="250"></div>
      </div>
      <p class="p-3" data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Fugiat odio, repudiandae sed ullam modi
      quia unde libero, saepe molestiae <br>
      veritatis distinctio odit, porro a dolor sit enim? Minus, ducimus ab?</p>
    </div>
    <div class="container-fluid  p-3">
      <div class="row justify-content-center">

      <!-- Card 1 -->
      <div style="border-radius: 20px;"
        class="col-12 col-md-6 col-lg-5 ms-0 ms-d-2 ms-lg-2 m-2 text-light d-flex  cards " data-aos="fade-up"
        data-aos-delay="200">
        <div class="img">
        <img style="height:150px;width:150px;object-fit:cover;" src="assets/images/raman.png"
          class="img-fluid rounded" alt="Raman Mukesh">
        </div>
        <div class="card-text mt-2 p-2">
        <h4>Raman Mukesh</h4>
        <h6 style="color: #d2b553;">Full Stack Developer</h6>
        <p>Tech enthusiast crafting seamless and scalable digital solutions.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div style="border-radius: 20px;" class="col-12 col-md-6 col-lg-5 m-2 text-light d-flex cards"
        data-aos="fade-up" data-aos-delay="300">
        <div class="img">
        <img style="height:150px;width:150px;object-fit:cover;" src="assets/images/rimsha.png"
          class="img-fluid rounded" alt="Rimsha Sajid">
        </div>
        <div class="card-text mt-2 p-2">
        <h4>Rimsha Sajid</h4>
        <h6 style="color: #d2b553;">Full Stack Developer</h6>
        <p>Tech enthusiast turning ideas into smart, user-friendly web solutions.</p>
        </div>
      </div>

      </div>
    </div>


    </div>

    <!-- ============================
       Try Thali 
      ============================= -->
    <div class="container-fluid try text-center text-light mt-5 mb-5 p-5" data-aos="fade-up" data-aos-delay="200">
    <h1 style="font-family: 'Machina';font-weight: 900;" class="mt-1 mt-lg-5 try-h1" data-aos="zoom-in"
      data-aos-delay="250">Try Thali With Your Team For Free..
    </h1>
    <!-- From Uiverse.io by gharsh11032000 -->
<button class="btn-started"> Get Started
</button>
    </div>

  </div>
 <script>
  // run after DOM and libraries are ready
  document.addEventListener('DOMContentLoaded', function () {
    // initialize AOS
    if (window.AOS) {
      AOS.init({ duration: 800, once: true });
    }

    // ensure GSAP ScrollTrigger is available before registering
    if (window.gsap && window.ScrollTrigger) {
      gsap.registerPlugin(ScrollTrigger);
    }

    // Hero heading animation
    gsap.from("#about-h1", {
      y: 80,
      opacity: 0,
      duration: 1.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: "#about-h1",
        start: "top 85%",
      }
    });



    // Circles (left + right floating animation)
    gsap.to(".circle-left", {
      y: -20,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      duration: 3
    });

    gsap.to(".circle-right", {
      y: 20,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      duration: 3
    });

    // Vision image zoom-in
    gsap.from(".vision img", {
      scale: 0.8,
      opacity: 0,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".vision img",
        start: "top 85%"
      }
    });

    // Who we are section
    gsap.from(".story h1, .story p", {
      x: 80,
      opacity: 0,
      duration: 1,
      stagger: 0.3,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".story",
        start: "top 90%"
      }
    });

    // Team cards
    gsap.from(".cards", {
      y: 50,
      opacity: 0,
      duration: 1,
      stagger: 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".cards",
        start: "top 85%"
      }
    });

    // CTA Section (Try Thali)
    gsap.from(".try-h1", {
      scale: 0.9,
      opacity: 0,
      duration: 1.2,
      ease: "elastic.out(1, 0.8)",
      scrollTrigger: {
        trigger: ".try-h1",
        start: "top 80%"
      }
    });

    gsap.from(".btn-started", {
      y: 60,
      opacity: 0,
      duration: 1,
      delay: 0.4,
      ease: "back.out(1.7)",
      scrollTrigger: {
        trigger: ".btn-started",
        start: "top 90%"
      }
    });

    // Wave Animation (ensure element exists)
    const wave = document.getElementById("wavePath");
    if (wave) {
      gsap.to(wave, {
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        attr: {
          d: "M0,180 C300,100 500,280 800,140 L800,400 L0,400 Z"
        }
      });
    }
  });
  </script>

@endsection