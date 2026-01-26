@extends('admin.layout')

@section('content_title', 'Cập nhật tour')

@section('content')
<form action="{{ route('tours.update', $tour) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Tên tour</label>
        <input type="text" name="title" value="{{ old('title', $tour->title) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Danh mục</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category_id', $tour->category_id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" value="{{ old('price', $tour->price) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Thời gian</label>
        <input type="text" name="duration" value="{{ old('duration', $tour->duration) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Mô tả</label>
        <textarea name="description" class="form-control" rows="4">{{ old('description', $tour->description) }}</textarea>
    </div>

    <button class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('tours.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
