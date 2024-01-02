@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'All Products')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="card-title mb-0 align-self-center">All Products</h2>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary px-3 py-2">Add Product</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Available Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td class="d-flex gap-2 align-items-center">
                                        <a href="{{ route('admin.products.show', $product->id) }}">
                                            <i class="bi bi-eye py-1 bg-primary text-white px-2 rounded-1"></i>
                                        </a>
                                        <a href="{{ route('admin.products.edit', $product->id) }}">
                                            <i class="bi bi-pencil-square py-1 bg-success text-white px-2 rounded-1"></i>
                                        </a>
                                        <a href="">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bi bi-trash py-1 bg-warning text-white px-2 rounded-1 btn"></button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
