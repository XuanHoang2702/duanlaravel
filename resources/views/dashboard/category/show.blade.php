@extends('dashboard.layout.master')
@section('title', 'quản lí danh mục')
@section('content-title', 'Quản lí danh mục')
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
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="{{ route('category.destroy', $category) }}" method="POST">
                                    @csrf
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info ">Sửa</a>
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

@endsection
