@extends('layouts.client')

@section('title', 'Đặt Tour - TravelGo')

@section('content') {{-- Đã sửa từ 'nội dung' thành 'content' để khớp với layout --}}
<section class="bg-slate-50 py-16">
    <div class="max-w-5xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-slate-800 mb-8">Thông tin đặt tour</h1>
        
        <form action="{{ route('booking.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @csrf
            {{-- Thêm input ẩn để gửi ID tour về server --}}
            <input type="hidden" name="tour_id" value="{{ $selectedTour['id'] ?? '' }}">

            <div class="lg:col-span-2 space-y-6">
                {{-- Form thông tin liên lạc --}}
                <div class="bg-white p-8 rounded-3xl shadow-sm border">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <i class="fas fa-user-circle text-blue-600"></i> Thông tin liên lạc
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold">Họ và tên *</label>
                            <input type="text" name="customer_name" required class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold">Số điện thoại *</label>
                            <input type="text" name="customer_phone" required class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="text-sm font-semibold">Email *</label>
                            <input type="email" name="customer_email" required class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="text-sm font-semibold">Ghi chú thêm</label>
                            <textarea name="note" rows="3" class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                        </div>
                    </div>
                </div>

                {{-- Số lượng hành khách --}}
                <div class="bg-white p-8 rounded-3xl shadow-sm border">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <i class="fas fa-users text-blue-600"></i> Số lượng hành khách
                    </h2>
                    <div class="flex items-center gap-8">
                        <div class="flex-1 space-y-2">
                            <label class="text-sm font-semibold">Người lớn</label>
                            <input type="number" name="adults" value="1" min="1" class="w-full px-4 py-3 rounded-xl border outline-none">
                        </div>
                        <div class="flex-1 space-y-2">
                            <label class="text-sm font-semibold">Trẻ em (Dưới 12 tuổi)</label>
                            <input type="number" name="children" value="0" min="0" class="w-full px-4 py-3 rounded-xl border outline-none">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tóm tắt chuyến đi (PHẦN QUAN TRỌNG ĐÃ SỬA) --}}
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-3xl shadow-lg border sticky top-24">
                    <h3 class="text-lg font-bold mb-4">Tóm tắt chuyến đi</h3>
                    
                    {{-- Ảnh động --}}
                    <img src="{{ $selectedTour['image'] }}" class="rounded-2xl mb-4 w-full h-40 object-cover">
                    
                    {{-- Tên tour động --}}
                    <p class="font-bold text-slate-800 mb-2">{{ $selectedTour['name'] }}</p>
                    
                    <div class="flex justify-between text-sm mb-2 text-slate-500">
                        <span>Khởi hành:</span>
                        <span>{{ date('d/m/Y', strtotime('+3 days')) }}</span> {{-- Giả định khởi hành sau 3 ngày --}}
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="flex justify-between items-center mb-6">
                        <span class="font-bold">Tổng cộng:</span>
                        {{-- Giá động --}}
                        <span class="text-2xl font-bold text-blue-600">
                            {{ number_format($selectedTour['price'], 0, ',', '.') }}đ
                        </span>
                    </div>
                    
                    <button type="submit" class="w-full py-4 bg-orange-500 hover:bg-orange-600 text-white font-bold rounded-2xl shadow-lg transition">
                        XÁC NHẬN ĐẶT TOUR
                    </button>
                    <p class="text-[10px] text-center mt-4 text-slate-400 italic">Bằng cách nhấn nút này, bạn đồng ý với các điều khoản của TravelGo</p>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection