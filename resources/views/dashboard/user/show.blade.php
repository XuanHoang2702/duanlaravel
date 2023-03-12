@extends('dashboard.layout.master')
@section('title', 'quản lí khách hàng')
@section('content-title', 'Quản lí khách hàng')
@section('content')
    <div class="div ">
        @if (Session::has('thongbao'))
            <div class="alert alert-success ">
                {{ Session::get('thongbao') }}
            </div>
        @endif
        <div class="" style="display: flex; justify-content: center;">
            <table class="table table-bordered w-75 text-center">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Level</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><img width="100px" src="/front/img/avatar/{{ $user->avatar }}" alt=""></td>
                            <td>{{ $user->level }}</td>
                            <td>
                                <form action="{{ route('user.destroy', $user) }}" method="POST">
                                    @csrf
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info ">Sửa</a>
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="page d-flex justify-content-center">

        {{ $users->appends('trang', 'list_user')->links() }}
    </div>
@endsection
