@extends('admin.layout')

@section('content_title', 'Cập nhật hướng dẫn viên')

@section('content')
<form action="{{ route('guides.update', $guide) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" value="{{ old('name', $guide->name) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Điện thoại</label>
        <input type="text" name="phone" value="{{ old('phone', $guide->phone) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $guide->email) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Kinh nghiệm (năm)</label>
        <input type="number" name="experience" value="{{ old('experience', $guide->experience) }}" class="form-control" min="0" required>
    </div>

    <button class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('guides.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
