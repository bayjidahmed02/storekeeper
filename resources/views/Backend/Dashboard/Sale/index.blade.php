@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Sales Report')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="card-title mb-0 align-self-center">Sales Report</h2>
                    <div class="d-flex gap-3">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-success px-3 py-2">Back</a>

                        <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary px-3 py-2">Add
                            Product</a>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Total Sale</th>
                                <th>Subtotal Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->price }}
                                    </td>
                                    <td>
                                        {{ $product->saleReports->sum('product_qty', $product->id) }}
                                    </td>
                                    <td>
                                        {{ $product->price * $product->saleReports->sum('product_qty', $product->id) }}
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>

                        {{-- <tbody>
                            <tr>
                                <th>Product ID</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Price</th>
                                <td>{{ $product->price }}</td>
                            </tr>
                            <tr>
                                <th>Product Stock</th>
                                <td>{{ $product->qty }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $product->updated_at != $product->created_at ? 'Updated' : 'Not  Updated' }}</td>
                            </tr>
                        </tbody> --}}

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
