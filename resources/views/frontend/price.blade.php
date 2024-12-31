@extends('frontend.layouts.main')
@section('main-container')

<div style="background-color: #FFFFFF">

  <!-- background starts -->
  <div class="container-fluid position-relative" style="background-color: #2e2d2d; background-image: url('{{ asset('public/frontend/images/prices/pricesbackimg.jpg') }}'); background-blend-mode: overlay; background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="container pt-5 pb-2">
      <!-- first introduction -->
      <p class="container pt-5" style="font-size: 80px; color: #FFFFFF; font-weight: 500; box-sizing: border-box; font-family: serif; line-height: 80px;">
        Packages
      </p>
      <div class="mb-5 pb-5 ps-4">
        <p style="font-size: 30px; color: #FFFFFF; font-weight: lighter; font-family: serif;">"Transparent pricing, exceptional service."</p>
      </div>
    </div>
  </div>
  <!-- background ends -->

  <!-- starts about services section -->
  <section class="about_section layout_padding-bottom pt-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Key Benefits</h2>
            </div>
            <ul>
              <li>Assurance of reliable connectivity with minimal downtime.</li>
              <li>Clear and straightforward pricing with no hidden fees.</li>
              <li>Flexible payment plans to fit your budget.</li>
              <li>Supports smart home devices and multiple users with ease.</li>
              <li>Multiple payment methods accepted for convenience.</li>
              <li>Special pricing offers for residents in specific neighborhoods or communities.</li>
            </ul>
            <a href="">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('public/frontend/images/prices/priceimg1.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about services section -->

  <!-- price section -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="background-color: #2e2d2d;">
    <h1 class="text-white text-center pt-5">Our Prices</h1>
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
                            <span style="border-bottom: 1px solid;">Bandwidth : <b style="color: #03a7d3;">{{ $package->mbps }} Mbps</b></span>
                          </li>
                          <li class="pb-1">
                            <span style="border-bottom: 1px solid;">Downloads : <b style="color: #03a7d3;">Unlimited</b></span>
                          </li>
                          <li class="pb-1">
                            <span style="border-bottom: 1px solid;">Price : <b style="color: #03a7d3;">RS-{{ $package->rs }}/month</b></span>
                          </li>
                          <li>
                            <span style="color: #03a7d3;">24/7/365 Tech Support</span>
                          </li>
                        </ul>
                      </div>
                      <div class="btn-box">
                        <a href="#" class="select-package-btn" data-package-id="{{ $package->id }}" data-package-mbps="{{ $package->mbps }}" data-package-price="{{ $package->rs }}" data-bs-toggle="modal" data-bs-target="#packageFormModal">
                          Got It
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

 <!-- Modal -->
 <div class="modal fade" id="packageFormModal" tabindex="-1" aria-labelledby="packageFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="packageFormModalLabel">Package Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">



          <!-- Display Package Details Here -->
          <div id="packageDetails" class="d-flex bg-dark text-white pt-3 pb-2">
            <p class="col-6"><strong class="fs-5">Mbps:</strong> <span id="modalPackageMbps">--</span> Mbps</p>
            <p class="col-6"><strong class="fs-5">Price:</strong> RS-<span id="modalPackagePrice">--</span>/month</p>
          </div>
          <!-- Form to be filled out -->
          <div class="container my-5" style="background-color: rgb(137, 135, 143);">
            <form action="{{ route('client.store') }}" method="POST" class="container py-5" style="background-image: url('{{ asset('images/contact/formbackimg.jpeg') }}');">
              @csrf
              <div class="container text-center my-5 text-white">
                <h1>User Registration</h1>
                <p>Thank you for choosing us.</p>
              </div>
              <div class="row d-flex px-5">
                <input type="hidden" name="package_id" id="packageId">
                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputName" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your name">
                  @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputNumber" class="form-label">Phone Number</label>
                  <input type="number" name="phone" class="form-control" id="exampleInputNumber" placeholder="Enter valid number">
                  @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-md-6 col-12">
                  <label for="exampleInputEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Your email address">
                  @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                </div>


                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputPassword1" class="form-label loginlabel">Password</label>
                  <div class="input-group">
                      <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                          placeholder="Enter Password" required>
                      <span class="input-group-text" id="togglePassword">
                          <i class="bi bi-eye-slash" id="eyeIcon"></i>
                      </span>
                  </div>
                  @error('password')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>


                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputMbps" class="form-label">Mbps</label>
                  <input type="text" name="mbps" class="form-control" id="exampleInputMbps" placeholder="Mbps" readonly>
                  @error('mbps') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputPrice" class="form-label">Price</label>
                  <input type="text" name="price" class="form-control" id="exampleInputPrice" placeholder="Price" readonly>
                  @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-md-6 col-12">
                  <label for="exampleInputRole" class="form-label">Role</label>
                  <select name="role" class="form-select @error('role') is-invalid @enderror" id="exampleInputRole">
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    <!-- Add more options as needed -->
                  </select>
                  @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputAddress" class="form-label">Address</label>
                  <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Address">
                  @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                  <label for="exampleInputLocation" class="form-label">Location</label>
                  <input type="text" name="location" class="form-control" id="exampleInputLocation" placeholder="Location">
                  @error('location') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3 col-12 border-0">
                  <button type="submit" class="btn btn-secondary px-4">Sign Up</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Form -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->

</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const selectPackageButtons = document.querySelectorAll('.select-package-btn');

      selectPackageButtons.forEach(button => {
        button.addEventListener('click', (event) => {
          const packageId = event.target.getAttribute('data-package-id');
          const packageMbps = event.target.getAttribute('data-package-mbps');
          const packagePrice = event.target.getAttribute('data-package-price');

          // Update form hidden input
          document.getElementById('packageId').value = packageId;

          // Update modal with selected package details
          document.getElementById('modalPackageMbps').textContent = packageMbps;
          document.getElementById('modalPackagePrice').textContent = packagePrice;

          // Update form fields to read-only
          document.getElementById('exampleInputMbps').value = packageMbps;
          document.getElementById('exampleInputPrice').value = packagePrice;
        });
      });

      // Check if success message is set
      @if(session('success'))
        const successMessage = "{{ session('success') }}";
        alert(successMessage); // Show alert with the success message
      @endif
    });


    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('exampleInputPassword1');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {
            // Toggle the type attribute
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Toggle the eye icon
            if (type === 'password') {
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            } else {
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            }
        });
    });
  </script>

  @endsection
