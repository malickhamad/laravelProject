@extends('frontend.layouts.main')

@section('main-container')
<div class="container mt-5">

    <!-- Modal for Success and Error Messages -->
    @if (session('success') || $errors->any())
        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">{{ session('success') ? 'Success' : 'Error' }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Your Existing Content -->
    <div class="card shadow-lg border-0">
        <div class="card-header bg-dark text-white text-center py-4">
            <h2 class="text-capitalize mb-0">Welcome {{ $client->name }}</h2>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <!-- Existing details here -->
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Name:</strong>
                        <p class="mb-0">{{ $client->name }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Email:</strong>
                        <p class="mb-0">{{ $client->email }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Phone:</strong>
                        <p class="mb-0">{{ $client->phone }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Mbps:</strong>
                        <p class="mb-0">{{ $client->mbps }} Mbps</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Price:</strong>
                        <p class="mb-0">Rs{{ $client->price }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Status:</strong>
                        <p class="mb-0"><span class="badge bg-success">{{ $client->status }}</span></p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Address:</strong>
                        <p class="mb-0">{{ $client->address }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-light p-3 rounded shadow-sm">
                        <strong>Location:</strong>
                        <p class="mb-0">{{ $client->location }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" style="background-color: rgb(137, 135, 143);">

        <form action="{{ route('client.update', $client->id) }}" method="POST" class="container px-5 py-5" style="background-image: url('images/contact/formbackimg.jpeg');">
            @csrf
            @method('PUT')

            <div class="container text-center my-5 text-white">
                <h1>Update Account Information</h1>
                <p>Update your details below.</p>
            </div>

            <div class="row d-flex px-5">
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name', $client->name) }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter valid number" value="{{ old('phone', $client->phone) }}">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email address" value="{{ old('email', $client->email) }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ old('address', $client->address) }}">
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" id="location" placeholder="Location" value="{{ old('location', $client->location) }}">
                    @error('location')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- New fields -->
                <div class="mb-3 col-md-6 col-12 border-0">
                    <label for="mbps" class="form-label">Mbps</label>
                    <input type="text" name="mbps" class="form-control" id="mbps" placeholder="Mbps" value="{{ old('mbps', $client->mbps) }}">
                    @error('mbps')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-12 border-0">
                    <button type="submit" class="btn btn-secondary px-4">Update</button>
                </div>
            </div>
            <h4 class="pt-3 text-center my-5 text-white">
                To change your package, please update your information and contact the admin at +92 303 6868367 for verification.
            </h4>
        </form>
    </div>

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}" class="mt-4 text-center">
        @csrf
        <button type="submit" class="btn btn-danger btn-lg">Logout</button>
    </form>
</div>

<!-- Bootstrap JavaScript for triggering the modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if ({{ session('success') ? 'true' : 'false' }} || {{ $errors->any() ? 'true' : 'false' }}) {
            var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
            messageModal.show();
        }
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
