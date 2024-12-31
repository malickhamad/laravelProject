 <!-- info section -->

 <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6 ps-5 ps-sm-0 ps-sm-0">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <a href="contact.html#Location">
                  <span> <i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  Location </a>
              </a>
              <a href="">
                <a href="contact.html#Customer">
                  <span> <i class="fa fa-phone" aria-hidden="true"></i></span>
                  Call +01 1234567890 </a>
              </a>

              <a href="">
                <a href="https://mail.google.com/mail/u/0/#sent?compose=new" target="_blank">
                  <span> <i class="fa fa-envelope" aria-hidden="true"></i></span>
                  demo@gmail.com
                </a>
              </a>
            </div>
          </div>
          <div class="info_social ">
            <a href="https://www.facebook.com" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.google.com/search?q=twitter.logos&sca_esv=de28fabd33e10b5e&sca_upv=1&sxsrf=ADLYWIIqwqDbvMCg6jAd9ZF_RFbN7cjbpA%3A1719301911763&ei=F3d6ZteOLryF9u8Pt9-EoAY&ved=0ahUKEwiX9tjdovaGAxW8gv0HHbcvAWQQ4dUDCBA&uact=5&oq=twitter.logos&gs_lp=Egxnd3Mtd2l6LXNlcnAiDXR3aXR0ZXIubG9nb3MyBxAAGIAEGAoyBRAAGIAEMgQQABgeMgQQABgeMgQQABgeMgQQABgeMgQQABgeMgQQABgeMgQQABgeMgQQABgeSN4PUJUGWLAOcAJ4AJABAJgBhwOgAf8IqgEFMi0zLjG4AQPIAQD4AQGYAgagAsIJwgIJEAAYsAMYBxgewgIOEAAYgAQYsAMYsQMYgwHCAggQABiABBiwA8ICCBAAGIAEGMsBmAMAiAYBkAYKkgcHMi4wLjMuMaAHqhc&sclient=gws-wiz-serp"
              target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/feed/" target="_blank">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 ps-5 ps-sm-0 ps-sm-0">
          <div class="info_link_box row d-flex justify-content-start">
            <h4>
              Links
            </h4>
            <div class="info_links row d-flex justify-content-start">
              <a class="active" href="/">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="service">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="price">
                <img src="images/nav-bullet.png" alt="">
                Pricing
              </a>
              <a class="" href="contact">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 ps-5 ps-sm-0  ps-sm-0" >
          <div class="info_detail row d-flex justify-content-start" >
            <h4 class="py-0 my-1">
              Facilities
            </h4>
            <p>
            <p class="my-1 facility">High-Speed Connectivity</p>
            <p class="my-1 facility"> Reliable and Consistent Service </p>
            <p class="my-1 facility"> Wide Coverage Area </p>
            <p class="my-1 facility"> Customer Support</p>
            <p class="my-1 facility"> Flexible Plans and Pricing</p>
            <p class="my-1 facility"> Modern Equipment</p>
            </p>
          </div>
        </div>
        <div class="col-md-3 col-am-6 ps-5 ps-sm-0  ps-sm-0" >
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p style="text-align: justify;">
              Our internet provider is offering high-speed and reliable connectivity, ensuring our best online experiences
              for the both home and business users.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section ">
    <div class="container">
      <p>
        &copy; Take our connection and be free from tension.
      </p>
    </div>
  </footer>
  <!-- footer section -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('public/frontend/js/bootstrap.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('public/frontend/js/custom.js') }}"></script>
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
  $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true, // Stop autoplay on mouse hover

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });
  });
</script>

</body>
</html>
