@extends('admin.layout')

@section('page_title','Cập nhật danh mục')

<form method="POST" action="{{ route('categories.update',$category) }}">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Tên danh mục</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Trạng thái</label>
        <select name="status" class="form-select">
            <option value="1" @selected($category->status==1)>Hiển thị</option>
            <option value="0" @selected($category->status==0)>Ẩn</option>
        </select>
    </div>

    <button class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
