@extends('frontend.layouts.main')

@section('main-container')
<div style="background-color: #FFFFFF">

    <!-- Background ends -->

    <!-- Registration starts -->


    <div class="container my-5" style="background-color:  rgb(137, 135, 143);">
        <h4 class="py-3 text-white ">Show Client Details
            <a href="{{ url('client') }}" class="btn btn-primary float-end"> Back</a>
        </h4>

        <div class="row d-flex px-5">
            <div class="mb-1 col-md-6 col-12 border-0">
                <label for="exampleInputName" class="form-label">Name</label>
                <p>
                    {{ $client->name }}
                </p>
            </div>
            <div class="mb-1 col-md-6 col-12 border-0">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <p>
                    {{ $client->phone }}
                </p>
            </div>

            <div class="mb-1 col-md-6 col-12">
                <label for="exampleInputEmail" class="form-label">Address</label>
                <p>
                    {{ $client->address }}
                </p>
            </div>
            {{-- <div class="mb-3 col-md-6 col-12">
                <label for="exampleInputCity" class="form-label">City</label>
                <p>
                    {{ $client->City }}
                </p>
            </div> --}}
            {{-- <div class="mb-3 col-md-6 col-12">
                <label for="exampleInputPackages" class="form-label">Packages</label>
                <p>
                    {{ $client->Packages }}
                </p>
            </div> --}}
            <div class="mb-1 col-md-6 col-12 border-0">
                <label for="exampleInputAddress" class="form-label">Location</label>
                <p>
                    {{ $client->location }}
                </p>
            </div>
        </div>

        <!-- Form ends -->
    </div>

    <!-- Registration ends -->
@endsection
</div>
