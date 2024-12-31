@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Show Package Details
                        <a href="{{ url('packages') }}" class="btn btn-primary float-end"> Back </a>
                    </h4>
                </div>
                <div class="card-body">


                        <div class="mb-3">
                            <label for="mbps">Mbps</label>
                            <p>
                                {{ $package->mbps }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label for="rs">Rs/Month</label>
                            <p>
                                {{ $package->rs }}
                            </p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
