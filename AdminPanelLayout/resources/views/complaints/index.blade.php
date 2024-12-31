@extends('layouts.frontend')

@section('content')
<style>
    body {
        background-color: #f4f7f9; /* Light gray background for the whole page */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .page-container {
        background-color: #ffffff; /* White background for the content area */
        padding: 30px;
        border-radius: 10px; /* Rounded corners for the container */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        margin: 20px auto;
        max-width: 1200px;
    }

    .page-title {
        color: #333; /* Dark gray color for the title */
        font-size: 2.5rem; /* Larger font size for title */
        font-weight: 600; /* Slightly bold for emphasis */
        border-bottom: 2px solid #007bff; /* Blue underline for the title */
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .alert-info {
        background-color: #e3f2fd; /* Light blue background for alert */
        border-color: #bbdefb; /* Slightly darker border color */
        color: #0d47a1; /* Dark blue text color */
        border-radius: 5px; /* Rounded corners for alert */
        padding: 15px;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: separate;
        border-spacing: 0;
    }

    thead {
        background-color: #007bff; /* Blue background for the table header */
        color: #ffffff; /* White text color for table header */
    }

    th {
        padding: 12px;
        text-align: left;
        border-bottom: 2px solid #0056b3; /* Darker blue border at the bottom of headers */
    }

    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #dee2e6; /* Light border color for table rows */
        word-wrap: break-word; /* Allows long words to break and wrap onto the next line */
        overflow-wrap: break-word; /* Provides better support for various browsers */
    }

    tbody tr {
        background-color: #ffffff; /* White background for table rows */
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9; /* Slightly different background color for alternating rows */
    }

    tbody tr:hover {
        background-color: #e9ecef; /* Highlight row on hover */
    }

    .btn-primary {
        background-color: #007bff; /* Primary button color */
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }

    .btn-secondary {
        background-color: #6c757d; /* Secondary button color */
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }

    .btn-secondary:hover {
        background-color: #5a6268; /* Darker shade on hover */
    }

    .btn-delete {
        background-color: #dc3545; /* Red color for delete button */
        border: none;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 0.875rem;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }

    .btn-delete:hover {
        background-color: #c82333; /* Darker red on hover */
    }
</style>

<div class="page-container">
    <h1 class="text-center page-title">Complaints List</h1>
    
    @if($complaints->isEmpty())
        <div class="alert alert-info">
            No complaints found.
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Complaint Message</th>
                    <th>Created At</th>
                    <th>Actions</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                @foreach($complaints as $complaint)
                    <tr>
                        <td>{{ $complaint->id }}</td>
                        <td>{{ $complaint->name }}</td>
                        <td>{{ $complaint->phone }}</td>
                        <td>{{ $complaint->email }}</td>
                        <td>{{ $complaint->address }}</td>
                        <td>{{ $complaint->location }}</td>
                        <td>{{ $complaint->message }}</td>
                        <td>{{ $complaint->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <form action="{{ route('complaints.destroy', $complaint->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this complaint?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
