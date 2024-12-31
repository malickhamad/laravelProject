<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (if needed) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Inline CSS for color scheme -->
    <style>
        /* Body background and text color */
        body {
            background-color: #f4f6f9; /* Light greyish blue background */
            color: #333333; /* Dark text for readability */
        }

        /* Card and table header styles */
        .card-header {
            background-color: #007bff; /* Bootstrap primary color for header */
            color: #ffffff; /* White text for contrast */
            padding: 15px; /* Adjusted padding for spacing */
        }

        /* Table header and alternating row colors */
        .table thead th {
            background-color: #343a40; /* Dark table header */
            color: #ffffff; /* White text for contrast */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e9ecef; /* Light grey for odd rows */
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff; /* White for even rows */
        }

        /* Button color scheme */
        .btn-success {
            background-color: #28a745; /* Green for success actions */
            border-color: #28a745;
        }

        .btn-warning {
            background-color: #ffc107; /* Yellow for warning actions */
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545; /* Red for danger actions */
            border-color: #dc3545;
        }

        /* Badge color customization */
        .badge-secondary {
            background-color: #6c757d; /* Dark grey for "waiting" status */
        }

        .badge-success {
            background-color: #28a745; /* Green for "approved" status */
        }

        .badge-warning {
            background-color: #ffc107; /* Yellow for "rejected" status */
        }

        /* Table and button font size for better readability */
        table, th, td {
            font-size: 0.95rem; /* Slightly smaller text for a modern look */
        }

        .btn {
            font-size: 0.85rem; /* Smaller button text */
            padding: 5px 10px; /* Adjust button padding */
        }

        /* Adjust spacing for mobile responsiveness */
        @media (max-width: 768px) {
            .card-header h5 {
                font-size: 1.25rem; /* Reduce header font size on smaller screens */
            }
            table, th, td {
                font-size: 0.85rem; /* Reduce table text size on smaller screens */
            }
            .btn {
                font-size: 0.75rem; /* Smaller buttons on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Users List</h1>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Details</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Mbps</th>
                            <th>Price</th>
                            <th>Gmail</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->mbps }} Mbps</td>
                                <td>RS-{{ $client->price }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->address }}</td>
                                <td>{{ $client->location }}</td>
                                <td>
                                    @if($client->status === 'waiting')
                                        <span class="badge badge-secondary">waiting</span>
                                    @elseif($client->status === 'approved')
                                        <span class="badge badge-success">Approved</span>
                                    @else
                                        <span class="badge badge-warning">Rejected</span>
                                    @endif
                                </td>
                                <td>{{ $client->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('clients.approve', $client->id) }}" class="btn btn-success" title="Approve">Approve</a>
                                    <a href="{{ route('clients.rejected', $client->id) }}" class="btn btn-warning" title="Reject">Reject</a>
                                    <form action="{{ route('clients.delete', $client->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this request?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
