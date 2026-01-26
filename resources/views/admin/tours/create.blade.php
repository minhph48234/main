@extends('admin.layout')

@section('content_title', 'Thêm tour')

@section('content')
<form action="{{ route('tours.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Tên tour</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Danh mục</label>
        <select name="category_id" class="form-control" required>
            <option value="">-- Chọn danh mục --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Thời gian</label>
        <input type="text" name="duration" class="form-control" placeholder="VD: 3 ngày 2 đêm" required>
    </div>

    <div class="mb-3">
        <label>Mô tả</label>
        <textarea name="description" class="form-control" rows="4"></textarea>
    </div>

    <button class="btn btn-success">Lưu</button>
    <a href="{{ route('tours.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
