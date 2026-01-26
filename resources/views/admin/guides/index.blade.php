@extends('admin.layout')

@section('content_title', 'Danh sách hướng dẫn viên')

@section('content')
<a href="{{ route('guides.create') }}" class="btn btn-primary mb-3">+ Thêm hướng dẫn viên</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Kinh nghiệm</th>
            <th width="150">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guides as $guide)
        <tr>
            <td>{{ $guide->id }}</td>
            <td>{{ $guide->name }}</td>
            <td>{{ $guide->phone }}</td>
            <td>{{ $guide->email }}</td>
            <td>{{ $guide->experience }}</td>
            <td>
                <a href="{{ route('guides.edit', $guide) }}" class="btn btn-sm btn-warning">Sửa</a>
                <form action="{{ route('guides.destroy', $guide) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Xóa?')" class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
