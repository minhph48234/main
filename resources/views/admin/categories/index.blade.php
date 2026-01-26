@extends('admin.layout')

@section('content_title', 'Quản lý Danh mục Tour')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0">Danh sách danh mục</h5>
    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm rounded-pill px-3">
        <i class="fas fa-plus me-1"></i> Thêm mới
    </a>
</div>

<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Slug</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-end">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                <td>#{{ $item->id }}</td>
                <td class="fw-bold">{{ $item->name }}</td>
                <td><span class="badge bg-light text-dark">/{{ $item->slug }}</span></td>
                <td class="text-center">
                    <span class="badge rounded-pill {{ $item->status ? 'bg-success' : 'bg-danger' }}">
                        {{ $item->status ? 'Hiển thị' : 'Đang ẩn' }}
                    </span>
                </td>
                <td class="text-end">
                    <a href="{{ route('categories.edit', $item) }}" class="text-warning me-2"><i class="fas fa-edit"></i></a>
                    <button class="text-danger border-0 bg-transparent"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection