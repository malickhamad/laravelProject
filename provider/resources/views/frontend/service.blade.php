@extends('frontend.layouts.main')
@section('main-container')
<div style="background-color: #FFFFFF">

  <!-- background starts -->
  <div class="container-fluid position-relative " style="background-color: #2e2d2d;
     background-image: url('{{ asset('public/frontend/images/services/background.jpeg')}}');
     background-blend-mode: overlay;
     background-size: cover;
     background-position: center;">
    <!-- <video autoplay loop muted plays-inline class="back-videoclip">
       <source src="home/backgroundvideo1.mp4" type="video/mp4">
     </video> -->

    <div class="overlay"></div>



    <div class="container  pt-5 pb-2">
      <!-- first introduction -->
      <p class="container  pt-5 " style="font-size: 80px;color: #FFFFFF; font-weight: 500;
       box-sizing: border-box; font-family: serif; line-height: 80px;">
        Services
      </P>
      <div class="mb-5 pb-5 ps-4">
        <p style="font-size: 30px; color: #FFFFFF; font-weight: lighter; font-family:  serif;"> "Reliability You Can
          Trust"
        </p>

      </div>
    </div>

  </div>
  <!-- background ends -->

  <!-- starts about services section -->

  <section class="about_section layout_padding-bottom">
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Reliable Connectivity
              </h2>
            </div>
            <p style="text-align: justify;">
              At ConnectWiseNet we pride ourselves on providing reliable connectivity that you can
              depend on. Our advanced network infrastructure ensures that you stay connected without interruptions,
              allowing you to work, learn, and play with confidence. </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src= "{{asset('public/frontend/images/services/servicesimg.webp')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about services section -->

  <!-- services  quotation start -->
  <div class="container pt-4 pb-5" style="background-color: #acacb7;">
    <h1 class="text-center  py-4 ">Features
    </h1>
    <!-- first flex -->
    <div class="row d-flex container">
      <!-- feature 1 -->
      <div class=" pb-3 col-md-6 col-12">
        <h4 class="text-dark fw-bold">Always Available</h4>
        <span style="color: rgb(85, 82, 82);"> Our team is committed to understanding and meeting the needs of our
          customers. We prioritize customer
          satisfaction and go above and beyond to exceed expectations.</span>
      </div>
      <!-- feature 2 -->
      <div class=" pb-3 col-md-6 col-12">
        <h4 class="text-dark fw-bold">Customer Satisfaction:</h4>
        <span style="color: rgb(85, 82, 82);">We are committed to providing exceptional service and ensuring your
          satisfaction.Our goal is to build lasting
          relationships based on trust, reliability, and outstanding service.
        </span>
      </div>
    </div>
    <!-- Second flex -->
    <div class="row d-flex container">
      <!-- feature 1 -->
      <div class=" pb-3 col-md-6 col-12">
        <h4 class="text-dark fw-bold">Fast Downloads</h4>
        <span style="color: rgb(85, 82, 82);">
          Download movies, games, and large files in seconds with our high-speed data plans.
          It will increase efficiency.</span>
      </div>
      <!-- feature 2 -->
      <div class=" pb-3 col-md-6 col-12">
        <h4 class="text-dark fw-bold">Security Measures:</h4>
        <span style="color: rgb(85, 82, 82);">
          Secure internet connections with features like encryption, firewall protection, and optional parental
          controls.
        </span>
      </div>
    </div>
    <!-- Third flex -->
    <div class="row d-flex container">
      <!-- feature 1 -->
      <div class=" pb-3 col-md-6 col-12">
        <h4 class="text-dark fw-bold">Contract Options</h4>
        <span style="color: rgb(85, 82, 82);">
          Flexible contract terms including month-to-month plans or longer-term agreements with potential
          savings.</span>
      </div>
      <!-- feature 2 -->
      <div class=" pb-3 col-md-6 col-12">
        <h4 class="text-dark fw-bold">24/7 Monitoring:</h4>
        <span style="color: rgb(85, 82, 82);">Our team continuously monitors the network to swiftly address any issues
          that arise.If any problem occurs it will be solved.
        </span>
      </div>
    </div>
  </div>
  <!-- services quotation end -->

  <!-- service section -->


  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src=" {{asset('public/frontend/images/s1.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                High Speed
              </h4>
              <p>
                Choose the best high-speed internet plans designed to fit your needs and budget. </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
                <img src=" {{asset('public/frontend/images/s2.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Speed Optimization
              </h4>
              <p>
                We analyze your connection and makesure you're getting the best performance. </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
                <img src=" {{asset('public/frontend/images/s3.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Technical Support
              </h4>
              <p>
                 We offer technical support to clients with troubleshooting
                connectivity issues </p>
                <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
                <img src=" {{asset('public/frontend/images/s4.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Helping Customers
              </h4>
              <p>
                We will help customers while they are facing any kind of problem. </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
                <img src=" {{asset('public/frontend/images/s5.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Building Networks
              </h4>
              <p>
                We maintain the physical infrastructure
                to connect places to the internet. </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
                <img src=" {{asset('public/frontend/images/s6.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                24/7 Connection
              </h4>
              <p>
                Stay connected around the clock with our reliable 24/7 internet service. </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- decond last services part start -->
  <div class="container" style="background-color: #acacb7;">

    <p class="text-center py-4 fst-italic">
      Choose our connection for reliable, high-speed internet that keeps you connected. Explore our plans today and
      experience seamless online living. Ready to upgrade your internet experience? Contact our friendly team today to
      learn more about our services and find the perfect plan for you.
    </p>

  </div>

  <!-- decond last services part end -->
  @endsection
</div>
