@extends('frontend.layouts.main')
@section('main-container')

<div style="background-color: #FFFFFF">
  <!-- navbr starts -->
  <div class="container-fluid position-relative " style="background-color: #2e2d2d;
     background-image: url('{{ asset('public/frontend/images/about/aboutback.jpeg')}}');
     background-blend-mode: overlay;
     background-size: cover;
     background-position: center;">
    <!-- <video autoplay loop muted plays-inline class="back-videoclip">
       <source src="home/backgroundvideo1.mp4" type="video/mp4">
     </video> -->

    <div class="overlay"></div>
    <div class="container  pt-5 pb-2">
      <!-- first introduction -->
      <p class="container  pt-5 "
      style="font-size: 80px;color: #FFFFFF; font-weight: 500;
       box-sizing: border-box; font-family: serif; line-height: 80px;">
      About Us
    </P>
      <div class="mb-5 pb-5 ps-4">
        <p style="font-size: 30px; color: #FFFFFF; font-weight: lighter; font-family:  serif;"> "Speed you need,
          reliability you deserve."
        </p>

      </div>
    </div>
  </div>
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">
      <div class="row">

        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('public/frontend/images/about/aboutimg.webp')}}" alt="">
          </div>
        </div>

        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                "Bringing the World to Your Fingertips"
              </h2>
            </div>
            <p style="text-align: justify;">
              At CONNECTWISENET we are dedicated to delivering exceptional internet services that connect you to the
              world. Our mission is to ensure that you have seamless access to information, entertainment, and
              communication, no matter where you are. </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  <!-- title 1 start -->
  <div class="container">
    <h1 class="text-center fst-italic" style="font-family: ';">You may want to know</h1>
  </div>
  <!-- title 1 end -->
  <!-- accordation part start -->

  <div class="container-xl pt-5 mt-3 mb-5">

    <!-- accordation section -->
    <div class="container">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingOne">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
              aria-controls="flush-collapseOne">
              What internet plans do you offer?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">We offer a variety of internet plans tailored to different needs, ranging from
              basic plans for casual browsing to high-speed plans for gaming and streaming. Visit our plans page for
              detailed information.
            </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed "
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
              aria-controls="flush-collapseTwo">
              How do I choose the right internet plan for my needs?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Consider your online activities. For basic browsing and email, a lower-speed
              plan is sufficient. For streaming, gaming, or working from home, a higher-speed plan is recommended. Our
              customer service team can help you choose the best plan. </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingThree">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
              aria-controls="flush-collapseThree">
              What is the installation process like?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              After you choose a plan, we’ll schedule a convenient time for a technician to install your service. The
              process typically takes about 1-2 hours, depending on your setup. Our technician will ensure everything is
              working before they leave. </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
              aria-controls="flush-collapsefour">
              What equipment do I need? </button>
          </h2>
          <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              We provide a modem and a router with your service. If you have your own compatible equipment, you can use
              it instead. Our technicians can help set it up during installation
            </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false"
              aria-controls="flush-collapsefive">
              What should I do if my internet is slow? </button>
          </h2>
          <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Try restarting your modem and router. If the issue persists, check for any outages in your area. You can
              also contact our technical support team for troubleshooting assistance.
            </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false"
              aria-controls="flush-collapsesix">
              Do you offer any discounts or promotions?
            </button>
          </h2>
          <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Yes, we frequently offer discounts and promotions for new and existing customers. Check our website or
              contact customer service for the latest offers. </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false"
              aria-controls="flush-collapseseven">
              How do I pay my bill?
            </button>
          </h2>
          <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              "You can pay your bill online through Jazzcash,Eashypaisa etc, as well as physically in our office."
            </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false"
              aria-controls="flush-collapseeight">
              Can I set up multiple Wi-Fi networks at home?
            </button>
          </h2>
          <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Yes, many modern routers allow you to set up multiple SSIDs (Wi-Fi networks), which can be useful for
              creating separate networks for guests or specific devices. Check your router’s settings or contact support
              for guidance.
            </div>
          </div>
        </div>
        <div class="accordion-item mt-1">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button style="background-color: #31313f;" class="fs-5 text-white border-0 accordion-button collapsed"
              type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false"
              aria-controls="flush-collapsenine">
              Are there any data caps on my plan?
            </button>
          </h2>
          <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Most of our plans come with unlimited data, but some may have a data cap. Please check your specific plan
              details or contact us for more information. </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- accordation part end -->

  <!-- title 2 start -->
  <div class="contaier">
    <h1 class="text-center fst-italic" style="font-family: ';"> Our Talented Team</h1>
  </div>
  <!-- title 2 end -->

  <!-- our hard working team  starts-->

  <div class="container-xl pt-5 mb-5">
    <!--one -->
    <div class="container-sm py-3 mt-3" style="border: 0.005px solid #d7cdcd; border-radius: 10px;">
      <div class="row d-flex">
        <div class="col-2">
          <img src=" {{asset('public/frontend/images/about/image1.jpg')}}" width="80%" class="rounded-circle" alt="">
        </div>
        <div class="col-md-10">
          <h6 class="fw-bold">Hamad Mehmood</h6>
          <p class="pe-4" style="font-size: 14px; line-height: 25px;text-align: justify;">
            Muhammad Hamad, a dedicated and skilled professional who brings innovation, precision, and energy to our team. His ability to solve challenges and inspire others makes him an invaluable asset. With his expertise, we’re driving success and setting new standards for excellence!
          </p>
        </div>
      </div>
    </div>
    <!--two -->
    <div class="container-sm py-3 mt-3" style="border: 0.005px solid #d7cdcd; border-radius: 10px;">
      <div class="row d-flex">
        <div class="col-2">
          <img src=" {{asset('public/frontend/images/about/img2.png')}}  " width="80%" class="rounded-circle" alt="">
        </div>
        <div class="col-md-10">
          <h6 class="fw-bold">Adrash Umair</h6>
          <p class="pe-4" style="font-size: 14px; line-height: 25px;text-align: justify;">
            Jawad Noor Butt serves as our dedicated manager, bringing extensive experience and a proactive approach to
            leadership. With a background in [mention relevant background, if applicable], Jawad has cultivated a
            reputation for fostering team cohesion and driving operational excellence within our organization.
          </p>
        </div>
      </div>
    </div>

  </div>
  <!-- our hard working team ends -->

  <!-- quotation start -->
  <div class="container" style="background-color: #acacb7;">
    <p class="text-center py-4 fst-italic">
      “Our team is committed to understanding and meeting the needs of our customers. We prioritize customer
      satisfaction and go above and beyond to exceed expectations.”
    </div>
  </div>
  <!-- quotation end -->

  @endsection
</div>
