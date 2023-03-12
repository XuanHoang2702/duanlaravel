@extends('dashboard.layout.master')
@section('title', 'Thêm danh mục')
@section('content-title', 'Sửa danh mục')
@section('content')
    <div class="container" class="border ">
        <div class="cart">
            <div class="cart-body">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            {{ $data['errorMessage'] }}
                        </div>
                    @endif
                    <div class="form-group ">
                        <label for="">Nhập tên danh mục</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control w-50"
                            placeholder="Nhập tên danh mục">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
