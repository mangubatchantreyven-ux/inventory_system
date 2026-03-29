@extends('layouts.app')

@section('title', 'Client Portal')

@section('content')
<div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Inventory</h1>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Item ID</th>
                    <th>Product Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>Graphic Card RTX 4090</td>
                    <td><span class="badge bg-success">In Stock</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection