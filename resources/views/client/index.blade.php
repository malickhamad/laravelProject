@extends('frontend.layouts.main')
@section('main-container')



     <div class="container mt-5 mb-5">
         <div class="row">
         <div class="col-md-12">
          @session('status')
        <div class="alert alert-success">
       {{ session('status') }}
    </div>

@endsession

            <div class="card">
                <div class="card-header">
                   <h4>Clients List
                    <a href="{{ url('client/create') }}" class="btn btn-primary float-end"> Add client</a>
                </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Operations</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($clients as $client )

                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->address }}</td>
                                <td>{{ $client->location }}</td>

                                <td style="display: flex; align-items: center;">
                                    <a href="{{ route('client.edit', $client->id) }}" class="btn btn-success me-2">Edit</a>
                                    <a href="{{ route('client.show', $client->id) }}" class="btn btn-info me-2">Show</a>

                                    <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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

<!-- registratio ends -->
@endsection

