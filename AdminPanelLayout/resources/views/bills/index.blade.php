@extends('layouts.frontend')

@section('content')
<div class="container my-5 col-8">

    <!-- Title and Success Message -->
    <h3 class="my-4 text-center">Uploaded Bills</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table to display uploaded bills -->
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Screenshot</th>
                <th>Uploaded At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bills as $bill)
                <tr>
                    <td>{{ $bill->name }}</td>
                    <td>{{ $bill->email }}</td>
                    <td>
                        <a target="_blank">
                            <img src="http://localhost/provider/storage/app/public/{{ $bill->screenshot }}" alt="Screenshot" style="width: 100px; height: auto;" class="img-thumbnail">
                        </a>
                    </td>
                    <td>{{ $bill->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>
@endsection
