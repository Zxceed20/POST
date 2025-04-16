@extends('layout')
@section('title', 'History Transaction')
@section('content-title', 'History Transaction')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data History Transaction</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="{{ route('historyTransaction.create') }}" class="btn btn-primary btn-sm mb-4">+ Add History</a>
            <table class="table table-bordered text-dark" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Item Id</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historytransactions as $index => $historytransaction)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $historytransaction->item_id}}</td>
                        <td>{{ $historytransaction->qty}}</td>
                        <td>{{ $historytransaction->subtotal}}</td>
                        <td>
                                <a href="{{ route('historyTransaction.edit', $historytransaction->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                
                                <form action="{{ route('historyTransaction.destroy', $historytransaction->id) }}" method="POST" style="display:inline;">
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