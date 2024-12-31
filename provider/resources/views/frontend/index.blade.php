@extends('frontend.layouts.main')
@section('main-container')


<!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Secure <br>
                      Internet Connection
                    </h1>
                    <p>
                      Connect Communications delivers the best, fastest and most reliable internet service at all time
                      and you can choose from wide range of available speeds.
                    </p>
                    <div class="btn-box">
                      <a href="about" class="btn-1">
                        Read More
                      </a>
                      <a href="contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src=" {{asset('public/frontend/images/slider1.png') }} " alt="">

                 </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" >
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      MOST RELIABLE <br>
                      INFRASTRUCTURE
                    </h1>
                    <p>

                      We have develop our infrastructure with state of the art hardware and equipments that results in
                      highly efficient and reliable flow of our services. </p>
                    <div class="btn-box">
                      <a href="about" class="btn-1">
                        Read More
                      </a>
                      <a href="contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src=" {{asset('public/frontend/images/slider2.png') }} " alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" >
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      NEXT GENERATION <br>
                      TECHNOLOGY
                    </h1>
                    <p>
                      We utilize the latest technology and tools to gain more superiority and effectiveness. Our
                      approach to technology allows us to provide you with complete and reliable solutions.</p>
                    <div class="btn-box">
                      <a href="about" class="btn-1">
                        Read More
                      </a>
                      <a href="contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src=" {{asset('public/frontend/images/slider3.png') }} " alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

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

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p style="text-align: justify;">
              At ConnectWiseNet, we are dedicated to delivering exceptional connectivity services that cater to both
              individual and business needs. Our mission is to empower our customers with reliable, fast, and secure
              internet access, ensuring seamless online experiences at all times. </p>
            <a href="about">
              More Detail
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('public/frontend/images/about-img.png') }}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- server section -->

  <section class="server_section">

    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box " style="z-index: 0.99;">
            <video autoplay loop muted src=" {{asset('public/frontend/images/video1.mp4') }}     " width="100%" height="100%" "></video>
          </div>
        </div>
        <div class=" col-md-6" style="z-index: 500;">
              <div class="detail-box">
                <div class="heading_container">
                  <h2>
                    Connect Yourself with the World
                  </h2>
                  <p style="text-align: justify;">
                    Embrace limitless possibilities and connect yourself with the world through seamless, high-speed
                    internet solutions. At ConnectWiseNet, we empower you to explore, learn, create, and communicate
                    with
                    ease. Whether you’re at home, in the office, or on the go, our reliable connectivity keeps you in
                    touch
                    with what matters most.

                    Discover the power of connectivity with ConnectWiseNet. Stay connected, stay informed, and stay
                    inspired
                    as you navigate the digital landscape and unlock new horizons. </p>
                </div>
                <a href="">
                  Read More
                </a>
              </div>
          </div>

        </div>
      </div>
  </section>

  <!-- end server section -->

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Pricing
        </h2>
      </div>


      <div class="carousel-inner mx-4">
        @foreach ($packages->chunk(3) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <section class="price_section layout_padding pt-0">
                    <div class="container">
                        <div class="row price_container">
                            @foreach ($chunk as $package)
                                <div class="col-md-4">
                                    <div class="box">
                                        <div class="detail-box pricehover">
                                            <h4>Packages</h4>
                                            <h2>{{ $package->mbps }} Mbps</h2>
                                            <ul class="price_features">
                                                <li class="pb-1">
                                                    <span style="border-bottom: 1px solid;">
                                                        Bandwidth : <b style="color: #03a7d3;">{{ $package->mbps }} Mbps</b>
                                                    </span>
                                                </li>
                                                <li class="pb-1">
                                                    <span style="border-bottom: 1px solid;">
                                                        Downloads : <b style="color: #03a7d3;">Unlimited</b>
                                                    </span>
                                                </li>
                                                <li class="pb-1">
                                                    <span style="border-bottom: 1px solid;">
                                                        Price : <b style="color: #03a7d3;">RS-{{ $package->rs }}/month</b>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span style="color: #03a7d3;">24/7/365 Tech Support</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a href="client/create">
                                                Select Package
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        @endforeach
    </div>


      <div class="heading_container heading_center mt-5">
        <button type="button" class="btn btn-outline-dark text-center "> <a href="price" class="checkpackage">
            Check More Packges</a> </button>

      </div>
    </div>
  </section>

  <!-- price section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Enabling Modern Connectivity
        </h2>
        <p>
          "An efficient internet provider is the invisible backbone of the digital age, connecting dreams, ideas, and
          people." </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src=" {{ asset('public/frontend/images/client1.jpg') }} " alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Hasan Raza
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p style="text-align: justify;">
                        "Outstanding service! The internet connection is incredibly fast and reliable, allowing me to
                        work from home without any interruptions. The customer support team is responsive and helpful,
                        ensuring any issues are resolved quickly. Highly recommend this provider to anyone looking for a
                        dependable internet service!" - Hasan Raza
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{ asset('public/frontend/images/client3.avif') }}" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Hamad Malik
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p style="text-align: justify;">
                        "Great internet service for home use! The connection is reliable and fast, perfect for streaming
                        movies, video calls, and browsing without any slowdowns. Customer service has been helpful
                        whenever needed, ensuring smooth operation at all times. Highly recommend this provider for
                        anyone looking for a dependable home internet solution." - Hamad </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->


@endsection
