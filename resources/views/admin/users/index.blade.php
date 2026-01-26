@extends('admin.layout')

@section('page_title', 'Quản lý người dùng')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Thêm người dùng</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th width="150">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Sửa</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}
@endsection
