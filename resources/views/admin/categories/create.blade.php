@extends('admin.layout')

@section('content_title', 'Thêm danh mục')

@section('content')
<form method="POST" action="{{ route('categories.store') }}">
    @csrf

    <div class="mb-3">
        <label>Tên danh mục</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Trạng thái</label>
        <select name="status" class="form-select">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>

    <button class="btn btn-primary">Lưu</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
