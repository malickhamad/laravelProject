@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Package
                        <a href="{{ url('packages') }}" class="btn btn-primary float-end"> Back </a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('packages.update',$package->id ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="mbps">Mbps</label>
                            <input type="text" name="mbps" class="form-control" value="{{ $package->mbps }}" />
                            @error('mbps')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="rs">Rs/Month</label>
                            <input type="text" name="rs" class="form-control" value="{{ $package->rs }}" />
                            @error('rs')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary px-3 py-1">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
