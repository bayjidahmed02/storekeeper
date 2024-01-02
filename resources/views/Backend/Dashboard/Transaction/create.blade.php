@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Sale Generate')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="card-title mb-0 align-self-center">Sale Generate</h2>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-primary px-3 py-2">Back</a>
                </div>
                <div class="card-body">
                    <div class="col-6">
                        <form action="{{ route('admin.transaction.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Select Product Name</label>
                                <select name="product_id" id="name" class="form-select form-select-sm">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"
                                            {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="name">Product Sale Quantity</label>
                                <input type="text" name="product_qty" class="form-control form-control-sm"
                                    value="{{ old('product_qty') }}">
                                @error('product_qty')
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
