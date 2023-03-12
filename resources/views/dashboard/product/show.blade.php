@extends('dashboard.layout.master')
@section('title', 'quản lí product')
@section('content-title', 'Quản lí sản phẩm')
@section('content')
    <h1>Show sản phẩm</h1>
    @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{ Session::get('thongbao') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Product image</th>
                <th>brand</th>
                <th>Category </th>
                <th>Price </th>
                <th>Discount</th>
                <th>Qty</th>
                <th>Tag</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    @if ($product->productImages->count() > 0)
                        <td><img width="100px" height="auto"
                                src="/front/img/products/{{ $product->productImages->first()->path }}" alt=""></td>
                    @else
                        <td>No image available</td>
                    @endif
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->productCategory->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->tag }}</td>
                    <td>
                        <form action="{{ route('product.destroy', $product) }}" method="POST">
                            @csrf
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info ">Sửa</a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="page d-flex justify-content-center">

        {{ $products->appends('trang', 'list_sp')->links() }}
    </div>
@endsection
