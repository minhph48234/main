






@extends('layouts.client')

@section('title', 'Điểm đến du lịch - TravelGo')

@section('content')
<div class="bg-slate-50 min-h-screen">
    <section class="py-16 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Khám phá thế giới</span>
            <h1 class="text-4xl font-extrabold text-slate-900 mt-2 mb-4">Các điểm đến phổ biến</h1>
            <p class="text-slate-500 max-w-2xl mx-auto">Từ những bãi biển đầy nắng đến những vùng núi mờ sương, hãy chọn cho mình một hành trình tuyệt vời nhất.</p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <a href="{{ route('booking.form', ['id' => 1]) }}" class="group relative overflow-hidden rounded-3xl bg-slate-200 h-[400px] shadow-lg cursor-pointer block">
                <img src="https://static-images.vnncdn.net/files/publish/2022/7/27/ha-long-bay-1-852.jpg" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Hạ Long">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white">
                    <p class="text-orange-400 text-sm font-bold mb-1">15 Tours</p>
                    <h3 class="text-2xl font-bold">Vịnh Hạ Long</h3>
                    <p class="text-white/80 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Nhấn để đặt tour ngay...</p>
                </div>
            </a>

            <a href="{{ route('booking.form', ['id' => 2]) }}" class="group relative overflow-hidden rounded-3xl bg-slate-200 h-[400px] shadow-lg cursor-pointer block">
                <img src="https://i.pinimg.com/originals/53/a9/8d/53a98d0f6fd928c5f37bc7ef789787ac.jpg" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Đà Lạt">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white">
                    <p class="text-orange-400 text-sm font-bold mb-1">12 Tours</p>
                    <h3 class="text-2xl font-bold">Đà Lạt</h3>
                    <p class="text-white/80 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Nhấn để đặt tour ngay...</p>
                </div>
            </a>

            <a href="{{ route('booking.form', ['id' => 3]) }}" class="group relative overflow-hidden rounded-3xl bg-slate-200 h-[400px] shadow-lg cursor-pointer block">
    <img src="https://images.unsplash.com/photo-1583212292454-1fe6229603b7?q=80&w=800" 
         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Phú Quốc">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
    <div class="absolute bottom-6 left-6 text-white">
        <p class="text-orange-400 text-sm font-bold mb-1">20 Tours</p>
        <h3 class="text-2xl font-bold">Đảo Phú Quốc</h3>
        <p class="text-white/80 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">Nhấn để đặt tour ngay!</p>
    </div>
</a>

<a href="{{ route('booking.form', ['id' => 4]) }}" class="group relative overflow-hidden rounded-3xl bg-slate-200 h-[400px] shadow-lg cursor-pointer block mt-6 lg:mt-0">
    <img src="https://images.unsplash.com/photo-1504457047772-27faf1c00561?q=80&w=800" 
         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Sapa">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
    <div class="absolute bottom-6 left-6 text-white">
        <p class="text-orange-400 text-sm font-bold mb-1">10 Tours</p>
        <h3 class="text-2xl font-bold">Sapa</h3>
        <p class="text-white/80 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">Nhấn để đặt tour ngay!</p>
    </div>
</a>

            </div>

        <div class="text-center mt-12">
            <button class="px-8 py-3 bg-white border-2 border-blue-600 text-blue-600 font-bold rounded-full hover:bg-blue-600 hover:text-white transition duration-300 shadow-sm">
                Tải thêm địa điểm
            </button>
        </div>
    </section>
</div>
@endsection