@extends('admin.layout')

@section('content_title', 'Danh sách tour')

@section('content')
<a href="{{ route('tours.create') }}" class="btn btn-primary mb-3">+ Thêm tour</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên tour</th>
            <th>Danh mục</th>
            <th>Giá</th>
            <th>Thời gian</th>
            <th width="160">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tours as $tour)
        <tr>
            <td>{{ $tour->id }}</td>
            <td>{{ $tour->title }}</td>
            <td>{{ $tour->category->name ?? '-' }}</td>
            <td>{{ number_format($tour->price) }} đ</td>
            <td>{{ $tour->duration }}</td>
            <td>
                <a href="{{ route('tours.edit', $tour) }}" class="btn btn-sm btn-warning">Sửa</a>
                <form action="{{ route('tours.destroy', $tour) }}" method="POST" class="d-inline">
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
