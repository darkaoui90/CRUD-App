@extends('layouts.app')

@section('content')
<style>
body {
    background-color: #2d3748 !important;
    color: #e2e8f0;
    min-height: 100vh;
}

.notes-table-container {
    background-color: #374151;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #4a5568;
}

.notes-table {
    margin: 0;
    background-color: transparent;
    color: #e2e8f0;
}

.notes-table th {
    background-color: #4a5568;
    color: #e2e8f0;
    border: none;
    padding: 15px;
    font-weight: 600;
    border-bottom: 1px solid #2d3748;
}

.notes-table td {
    background-color: #374151;
    color: #e2e8f0;
    border: none;
    padding: 15px;
    border-bottom: 1px solid #4a5568;
}

.notes-table tbody tr:last-child td {
    border-bottom: none;
}

.btn-primary {
    background-color: #3b82f6;
    border-color: #3b82f6;
}

.btn-warning {
    background-color: #f59e0b;
    border-color: #f59e0b;
}

.btn-danger {
    background-color: #ef4444;
    border-color: #ef4444;
}

.btn-info {
    background-color: #06b6d4;
    border-color: #06b6d4;
}

.text-white {
    color: #ffffff !important;
}

.text-muted {
    color: #9ca3af !important;
}
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-white m-0 mb-1">Notes</h2>
                    <p class="text-muted m-0">Manage all your notes in one place</p>
                </div>
                <a href="{{ route('notes.create') }}" class="btn btn-info">Create New Note</a>
            </div>

            <!-- Notes Table -->
            <div class="notes-table-container">
                <table class="table notes-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notes as $note)


                       

                       
                        <!-- Sample row - replace with your Laravel loop -->
                        <tr>
                            <td scope="row">{{$note->id}}</td>
                            <td>{{$note->title}}</td>
                            <td>{{$note->content}}</td>
                            <td>
                                <a href="{{route('notes.show' ,$note->id)}}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{route('notes.edit' ,$note->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                         @item

                       @endforelse
                    </tbody>
                     
                </table>
            </div>
        </div>
    </div>
</div>
@endsection