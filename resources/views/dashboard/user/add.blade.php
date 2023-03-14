@extends('dashboard.layout.master')
@section('title', 'Thêm khách hàng')
@section('content-title', 'Thêm user')
@section('content')
    <div class="container" class="border ">
        <div class="cart">
            <div class="cart-body  ">
                <form action="{{ route('user.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            {{ $data['errorMessage'] }}
                        </div>
                    @endif
                    <div class="div  justify-content-center">
                        <div class="form-group ">
                            <label for="">Nhập tên user</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control w-50"
                                placeholder="Nhập tên user">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="email">
                            <label for="" class="">Email</label>
                            <input type="email" class="form-control w-50" value="{{ old('email') }}" name="email"
                                placeholder="Eg: johndoe@gmai.com">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="avatar">
                            <label for="" class="">Avata</label>
                            <input type="file" class="form-control w-50" name="avatar">
                            @error('avatar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="password">
                            <label for="" class="">Password</label>
                            <input type="password" class="form-control w-50" value="{{ old('password') }}" name="password"
                                placeholder="Password: ">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="confirm-password">
                            <label for="" class="">Re-enter new password</label>
                            <input type="password" class="form-control w-50" value="{{ old('password_confirmation') }}"
                                name="password_confirmation" placeholder="Re-enter new password: ">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="description">
                            <label for="" class="">description</label>
                            <textarea name="description" class="form-control w-50" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <input type="hidden" value="1" name="level">
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
