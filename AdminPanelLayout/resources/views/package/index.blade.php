@extends('layouts.frontend')

@section('content')
<style>
    .page-background {
        background-color: #f4f4f4; /* Light gray background */
        padding: 20px;
        min-height: 100vh;
    }

    .card {
        border-radius: 8px; /* Rounded corners for cards */
    }

    .card-header {
        border-bottom: 2px solid #007bff; /* Blue border for card header */
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .btn-sm {
        font-size: 0.875rem; /* Adjust button font size for consistency */
    }

    .alert-dismissible .btn-close {
        margin-left: 1rem; /* Spacing between alert message and close button */
    }
</style>

<div class="page-background">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="text-center mb-4">Active Packages</h1>

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Packages List
                            <a href="{{ route('packages.create') }}" class="btn btn-light btn-sm float-end">Add Package</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Mbps</th>
                                    <th>Rs/Month</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                        <td>{{ $package->id }}</td>
                                        <td>{{ $package->mbps }}</td>
                                        <td>{{ $package->rs }}</td>
                                        <td>
                                            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('packages.show', $package->id) }}" class="btn btn-primary btn-sm">Show</a>
                                            <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this package?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
