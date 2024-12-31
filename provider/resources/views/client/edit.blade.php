@extends('frontend.layouts.main')

@section('main-container')
<div style="background-color: #FFFFFF">

    <!-- Background ends -->

    <!-- Registration starts -->


    <div class="container my-5" style="background-color:  rgb(137, 135, 143);">
        <h4 class="pt-3">Update your Account
            <a href="{{ url('client') }}" class="btn btn-primary float-end"> Back</a>
        </h4>
        <form action="{{ route('client.update', $client->id) }}" method="POST" class="container px-5 py-5" style="background-image: url('images/contact/formbackimg.jpeg');">
            @csrf
            @method('PUT')
            <div class="container text-center my-5 text-white">
                <h1>User Registration</h1>
                <p>Thank you for choosing us.</p>
            </div>
            <div class="row d-flex px-5">
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="Name" class="form-control" id="exampleInputName" placeholder="Enter your name" value="{{ $client->name }}">
                    @error('Name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="exampleInputNumber" class="form-label">Phone Number</label>
                    <input type="number" name="Phone" class="form-control" id="exampleInputNumber" placeholder="Enter valid number" value="{{ $client->phone }}">
                    @error('Phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <label for="exampleInputEmail" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail" placeholder="Your email address" value="{{ $client->email }}">
                    @error('Email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="exampleInputAddress" class="form-label">Password</label>
                    <input type="password" name="Password" class="form-control" id="exampleInputAddress" placeholder="Password" value="{{ $client->address }}">
                    @error('Password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="exampleInputRole" class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" id="exampleInputRole" placeholder="Role">
                    @error('role') {{  $message }}  @enderror
              </div>
              <div class="mb-3 col-md-6 col-12 border-0">
                <label for="exampleInputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Address">
                @error('address') {{  $message }}  @enderror
            </div>
            <div class="mb-3 col-md-6 col-12 border-0">
                <label for="exampleInputLocation" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="exampleInputLocation" placeholder="Location">
                @error('location') {{  $message }}  @enderror
            </div>
                <div class="mb-3  col-12 border-0">
                    <button type="submit" class="btn btn-secondary px-4">Update</button>
                </div>
            </div>
        </form>
        <!-- Form ends -->
    </div>

    <!-- Registration ends -->
@endsection
</div>
