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
      <p class="container  pt-5 "
      style="font-size: 80px;color: #FFFFFF; font-weight: 500;
       box-sizing: border-box; font-family: serif; line-height: 80px;">
       Lets Begin
    </P>
      <div class="mb-5 pb-5 ps-4">
        <p style="font-size: 30px; color: #FFFFFF; font-weight: lighter; font-family:  serif;"> "Reliability You Can
          Trust"
        </p>

      </div>
    </div>
  </div>
  <!-- background ends -->


  <!-- sign in form starts  -->
  <div class="container my-5 py-4" style="background-color: white;">
    <h1 class="text-center text-capitalize py-2"> Login To Your Account </h1>
    <p class="text-center fs-6 "> Please login to access self-troubleshooting.</p>

    <div class="container">
        <div class="px-5 py-3" style="background-color: #acacb7;">
          <form class="px-5 py-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-1 mt-3">
              <label for="exampleInputEmail1" class="form-label loginlabel">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                placeholder="Enter Email" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label loginlabel">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                        placeholder="Enter Password" required>
                    <span class="input-group-text" id="togglePassword">
                        <i class="bi bi-eye-slash" id="eyeIcon"></i>
                    </span>
                </div>
            </div>


            <div class="mb-1">
              <label for="roleSelect" class="form-label loginlabel">Select Role</label>
              <select class="form-select" id="roleSelect" name="role" required>
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
              </select>
            </div>

            <button type="submit" class="btn btn-secondary mt-4 px-4" name="Sign">Log In</button>
          </form>
        </div>
      </div>



    <div class="container tex" >

      <div class="py-3 px-3" style="background-color: rgb(238, 234, 229);">
        <span class="fs-4 fw-bold">Not a member Yet ?</span> <br>
        <span>Why not create an account yet</span> <br>
        <ul>
          <li>A single account allows you to access our services</li>
          <li>You can pay bills online</li>
          <li>Get package according to your desire</li>
          <li>Go to price page select package and clinck on got it for regestration</li>

        </ul>
        <a href="client/create">
        <!-- <button type="button" class="btn btn-outline-secondary py-1">   Create an account  </button> -->
     </a>

      </div>
    </div>
</div>

<!-- Display Error Messages -->
@if(session('error'))
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            alert("{{ session('error') }}");
        });
    </script>
@endif


   <script>
             document.getElementById('togglePassword').addEventListener('click', function (e) {
    // Toggle the type attribute
    const passwordInput = document.getElementById('exampleInputPassword1');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    // Toggle the icon
    const eyeIcon = document.getElementById('eyeIcon');
    eyeIcon.classList.toggle('bi-eye');
    eyeIcon.classList.toggle('bi-eye-slash');
});

   </script>
@endsection
</div>
