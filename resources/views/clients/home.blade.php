@extends('layouts.client')

@section('title', 'Trang chủ - TravelGo')

@section('banner')
    @include('clients.blocks.banner')
@endsection

@section('content')
<section class="max-w-7xl mx-auto px-4 py-16">
    {{-- Tiêu đề phần Tour nổi bật --}}
    <div class="flex justify-between items-end mb-10">
        <div>
            <h2 class="text-3xl font-bold text-slate-800 uppercase tracking-wider">Tour nổi bật nhất</h2>
            <div class="h-1 w-20 bg-orange-500 mt-2"></div>
        </div>
        <a href="{{ route('destination') }}" class="text-blue-600 font-semibold hover:underline transition">Xem tất cả →</a>
    </div>

    {{-- Lưới hiển thị Tour --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-300">
    <div class="relative overflow-hidden">
        <img src="https://static-images.vnncdn.net/files/publish/2022/7/27/ha-long-bay-1-852.jpg" 
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-500" alt="Vịnh Hạ Long">
        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-lg text-sm font-bold shadow-md">BÁN CHẠY</div>
    </div>
    <div class="p-6">
        <div class="flex items-center gap-2 text-slate-400 text-sm mb-2">
            <i class="fas fa-clock"></i> 2 Ngày 1 Đêm
        </div>
        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition min-h-[56px]">
            <a href="{{ route('booking.form', ['id' => 1]) }}">Khám phá kỳ quan thiên nhiên thế giới Vịnh Hạ Long</a>
        </h3>
        
        <div class="flex justify-between items-center border-t pt-4">
            <div>
                <span class="text-slate-400 line-through text-sm">3.500.000đ</span>
                <p class="text-xl font-bold text-blue-600">2.650.000đ</p>
            </div>
            <a href="{{ route('booking.form', ['id' => 1]) }}" class="bg-slate-900 text-white p-3 rounded-xl hover:bg-blue-600 transition shadow-lg">
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

        <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-300">
    <div class="relative overflow-hidden">
        <img src="https://th.bing.com/th/id/R.219433dfb9a8b5ddc3148b7de02ebf52?rik=SL8OyFvMVLsAag&riu=http%3a%2f%2f6.img.izshop.vn%2ftv42%2fimages%2ftour%2f2018%2f11%2forigin%2fdfab49fef1b6713fff1c15f83a303f89.jpg&ehk=LNDwv%2fvVhsAnrHCMrBdQHtfMkqa1kviT7Sy2nHC53ro%3d&risl=&pid=ImgRaw&r=0" 
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-lg text-sm font-bold shadow-md">BÁN CHẠY</div>
    </div>
    <div class="p-6">
        <div class="flex items-center gap-2 text-slate-400 text-sm mb-2">
            <i class="fas fa-clock"></i> 3 Ngày 2 Đêm
        </div>
        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition min-h-[56px]">Khám phá Đảo Ngọc Phú Quốc - Lặn ngắm san hô</h3>
        <div class="flex justify-between items-center border-t pt-4">
            <div>
                <span class="text-slate-400 line-through text-sm">5.200.000đ</span>
                <p class="text-xl font-bold text-blue-600">4.150.000đ</p>
            </div>
            <a href="{{ route('booking.form', ['id' => 3]) }}" class="bg-slate-900 text-white p-3 rounded-xl hover:bg-blue-600 transition shadow-lg">
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-300">
    <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1504457047772-27faf1c00561?q=80&w=800" 
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
        <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-lg text-sm font-bold shadow-md">NEW</div>
    </div>
    <div class="p-6">
        <div class="flex items-center gap-2 text-slate-400 text-sm mb-2">
            <i class="fas fa-clock"></i> 2 Ngày 1 Đêm
        </div>
        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition min-h-[56px]">Sapa mờ sương: Chinh phục đỉnh Fansipan hùng vĩ</h3>
        <div class="flex justify-between items-center border-t pt-4">
            <div>
                <span class="text-slate-400 line-through text-sm">2.800.000đ</span>
                <p class="text-xl font-bold text-blue-600">2.250.000đ</p>
            </div>
            <a href="{{ route('booking.form', ['id' => 4]) }}" class="bg-slate-900 text-white p-3 rounded-xl hover:bg-blue-600 transition shadow-lg">
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

    </div>
</section>
@endsection