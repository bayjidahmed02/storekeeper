@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Add Product')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="card-title mb-0 align-self-center">Add Product</h2>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-primary px-3 py-2">Back</a>
                </div>
                <div class="card-body">
                    <div class="col-6">
                        <form action="{{ route('admin.products.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control form-control-sm"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger" style="font-size: 14px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name">Product Price</label>
                                <input type="text" name="price" class="form-control form-control-sm"
                                    value="{{ old('price') }}">
                                @error('price')
                                    <p class="text-danger" style="font-size: 14px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name">Product Quantity</label>
                                <input type="text" name="stock" class="form-control form-control-sm"
                                    value="{{ old('stock') }}">
                                @error('stock')
                                    <p class="text-danger" style="font-size: 14px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary px-3 py-1 mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
