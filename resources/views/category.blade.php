@extends('layout')
@section('title', 'Category')
@section('content-title', 'Category')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Category</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm mb-4">+ Add Category</a>
            <table class="table table-bordered text-dark" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure want to delete this category?')">
                                        Delete
                                    </button>
                                </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection