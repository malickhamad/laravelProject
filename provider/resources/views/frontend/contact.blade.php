@extends('frontend.layouts.main')

@section('main-container')
<div style="background-color: #FFFFFF">

  <!-- background starts -->
  <div class="container-fluid position-relative" style="background-color: #2e2d2d; background-image: url('{{ asset('public/frontend/images/contact/contactbackimg.jpg') }}'); background-blend-mode: overlay; background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="container pt-5 pb-2">
      <!-- first introduction -->
      <p class="container pt-5" style="font-size: 80px; color: #FFFFFF; font-weight: 500; box-sizing: border-box; font-family: serif; line-height: 80px;">
        Contact us
      </p>
      <div class="mb-5 pb-5 ps-4">
        <p style="font-size: 30px; color: #FFFFFF; font-weight: lighter; font-family: serif;">
          "Feel free to contact us."
        </p>
      </div>
    </div>
  </div>
  <!-- background ends -->

  <!-- Contact Information -->
  <div class="container my-5">
    <h1 class="text-center text-capitalize py-2">For More Information</h1>
    <p class="text-center fs-5 mb-4">If any issue occurs, inform us</p>
    <div class="row mb-5">
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <div class="p-4 bg-dark text-white border rounded shadow-sm">
                <h5 class="text-info mb-3">Head Office</h5>
                <p><i class="fas fa-map-marker-alt me-2"></i>23 Main Street, People Colony, FSD</p>
                <p><i class="fas fa-clock me-2"></i>Mon - Fri, 9am - 5pm</p>
            </div>
        </div>
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <div class="p-4 bg-dark text-white border rounded shadow-sm">
                <h5 class="text-primary mb-3 text-info">Customer Service</h5>
                <p><i class="fas fa-phone me-2"></i>+92 300 7070470</p>
                <p><i class="fas fa-envelope me-2"></i>24/7 Available</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="p-4 bg-dark text-white border rounded shadow-sm">
                <h5 class="text-info mb-3">Bill Payment</h5>
                <p class="mb-2">
                    <i class="fas fa-phone me-2"></i>
                    Jazzcash +92 311 7719555
                </p>
                <p>
                    <i class="fas fa-envelope me-2"></i>
                    Issues Resolved Soon
                </p>
            </div>
        </div>
    </div>
</div>


  <!-- Bill Upload Form Starts -->
  <div class="container my-5 col-8">
    <h2 class="text-center">Upload Your Paid Bill Screenshot</h2>

    <form action="{{ route('bills.store') }}" method="POST" class="my-5 col-12 col-md-8 col-lg-6 mx-auto" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="name" class="fs-5 fw-bold text-secondary">Your Name</label>
        <input type="text" name="name" class="form-control form-control-md border-primary shadow-sm" id="name" placeholder="Enter Your Name" required>
    </div>

    <div class="mb-4">
        <label for="email" class="fs-5 fw-bold text-secondary">Your Email</label>
        <input type="email" name="email" class="form-control form-control-md border-primary shadow-sm" id="email" placeholder="Enter Your Email" required>
    </div>

    <div class="mb-4">
        <label for="screenshot" class="fs-5 fw-bold text-secondary">Upload Screenshot</label>
        <input type="file" name="screenshot" class="form-control form-control-md border-primary shadow-sm" id="screenshot" required>
    </div>

    <button type="submit" class="btn btn-outline-secondary btn-md">Submit</button>
</form>


  </div>

  <!-- Success Message Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ session('success') }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Location -->
  <div class="container my-5">
    <h1 class="text-center my-3" id="Location">Our Location</h1>
    <div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27321240.504117094!2d-95.75094849159092!3d33.28972319642342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2553c33b9aebf%3A0x3a9e1c144a2f6a2a!2sBloomfield%20High%20School!5e0!3m2!1sen!2s!4v1715283392985!5m2!1sen!2s"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Show the success modal if there's a success message
    @if(session('success'))
      var successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();
    @endif
  });
</script>

@endsection
