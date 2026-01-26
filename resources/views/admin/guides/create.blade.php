@extends('admin.layout')

@section('content_title', 'Thêm hướng dẫn viên')

@section('content')
<form action="{{ route('guides.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Điện thoại</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Kinh nghiệm (năm)</label>
        <input type="number" name="experience" class="form-control" min="0" required>
    </div>

    <button class="btn btn-success">Lưu</button>
    <a href="{{ route('guides.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
