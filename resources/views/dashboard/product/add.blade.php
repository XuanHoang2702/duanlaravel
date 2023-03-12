@extends('dashboard.layout.master')
@section('title', 'Thêm sản phẩm')
@section('content-title', 'Thêm sản phẩm')
@section('content')
    <div class="container" class="border ">
        <div class="cart">
            <div class="cart-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            {{ $data['errorMessage'] }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="">Nhập tên sản phẩm</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    placeholder="Nhập tên sản phẩm">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Thuộc danh mục </label>
                                <select class="form-control" name="product_category_id" id="">
                                    <option selected value="">Ấn vào để chọn</option>
                                    @foreach ($categories as $category)
                                        @if ($category->name == 'Men')
                                            <option value="1">{{ $category->name }}</option>
                                        @elseif ($category->name == 'Women')
                                            <option value="2">{{ $category->name }}</option>
                                        @elseif ($category->name == 'Kid')
                                            <option value="3">{{ $category->name }}</option>
                                        @else
                                            <option value="">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('product_category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Thương hiệu</label>
                                <select class="form-control" name="brand_id" id="">
                                    <option selected value="">Ấn vào để chọn</option>
                                    @foreach ($brands as $brand)
                                        @if ($brand->name == 'Calvin Klein')
                                            <option value="1">{{ $brand->name }}</option>
                                        @elseif ($brand->name == 'Diesel')
                                            <option value="2">{{ $brand->name }}</option>
                                        @elseif ($brand->name == 'Polo')
                                            <option value="3">{{ $brand->name }}</option>
                                        @elseif ($brand->name == 'Tommy Hilfiger')
                                            <option value="4">{{ $brand->name }}</option>
                                        @else
                                            <option value="">{{ $brand->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tag </label>
                                <select class="form-control" name="tag" id="">
                                    <option selected value="">Ấn vào để chọn</option>
                                    <option selected value="Clothing">Clothing</option>
                                    <option value="HandBag">HandBag</option>
                                    <option value="Accessorie">Accessorie</option>
                                </select>
                                @error('tag')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Featured</label>
                                <select class="form-control" name="featured" id="">
                                    <option selected value="1">Thường</option>
                                    <option value="0">Nổi bật</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" min="0" name="price" value="{{ old('price') }}"
                                    class="form-control" placeholder="Nhập giá sản phẩm">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Discount</label>
                                <input type="number" min="0" name="discount" value="{{ old('discount') }}"
                                    class="form-control" placeholder="Nhập giá sale">
                                @error('discount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input type="number" min="0" name="qty" value="{{ old('qty') }}"
                                    class="form-control" placeholder="Số lượng">
                                @error('qty')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Description </label>
                                <textarea name="description" class="form-control" placeholder="Mô tả sản phẩm" id="" cols="30"
                                    rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
