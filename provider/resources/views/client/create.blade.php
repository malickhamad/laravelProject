@extends('frontend.layouts.main')
@section('main-container')
<div style="background-color: #FFFFFF">


  <!-- background ends -->


<!-- registratio starts -->
<!-- Form to be filled out -->
<div class="container my-5" style="background-color: rgb(137, 135, 143);">
    <form action="{{ route('client.store') }}" method="POST" class="container py-5" style="background-image: url('images/contact/formbackimg.jpeg');">
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
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3 col-md-6 col-12 border-0">
                <label for="exampleInputMbps" class="form-label">Mbps</label>
                <input type="text" name="mbps" class="form-control" id="exampleInputMbps" placeholder="Mbps">
                @error('mbps') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3 col-md-6 col-12 border-0">
                <label for="exampleInputPrice" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPrice" placeholder="Price">
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


<!-- registratio ends -->
@endsection
</div>
