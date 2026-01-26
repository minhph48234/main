@extends('layouts.admin')

@section('title', 'Bảng điều khiển')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Tổng Tours</p>
                <h3 class="text-3xl font-bold mt-2">24</h3>
            </div>
            <div class="p-3 bg-blue-100 text-blue-600 rounded-lg"><i class="fas fa-map"></i></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Đơn đặt mới</p>
                <h3 class="text-3xl font-bold mt-2">156</h3>
            </div>
            <div class="p-3 bg-green-100 text-green-600 rounded-lg"><i class="fas fa-shopping-basket"></i></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-orange-500">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Doanh thu</p>
                <h3 class="text-3xl font-bold mt-2">1.2 tỷ</h3>
            </div>
            <div class="p-3 bg-orange-100 text-orange-600 rounded-lg"><i class="fas fa-dollar-sign"></i></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-purple-500">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Người dùng</p>
                <h3 class="text-3xl font-bold mt-2">850</h3>
            </div>
            <div class="p-3 bg-purple-100 text-purple-600 rounded-lg"><i class="fas fa-users"></i></div>
        </div>
    </div>
</div>

<div class="mt-10 bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="p-6 border-b flex justify-between items-center">
        <h3 class="font-bold text-gray-800">Tours mới cập nhật</h3>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">Thêm tour mới</button>
    </div>
    <table class="w-full text-left">
        <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
            <tr>
                <th class="px-6 py-4">Tên Tour</th>
                <th class="px-6 py-4">Giá</th>
                <th class="px-6 py-4">Trạng thái</th>
                <th class="px-6 py-4 text-right">Hành động</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <tr>
                <td class="px-6 py-4 font-medium">Phú Quốc 3 ngày 2 đêm</td>
                <td class="px-6 py-4 font-bold text-blue-600">3,500,000đ</td>
                <td class="px-6 py-4"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs">Đang chạy</span></td>
                <td class="px-6 py-4 text-right">
                    <button class="text-blue-500 hover:underline">Sửa</button>
                    <button class="text-red-500 hover:underline ml-3">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection