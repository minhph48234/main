


@extends('layouts.client')

@section('title', 'Dịch vụ của TravelGo')

@section('content') {{-- Đã đổi từ 'nội dung' thành 'content' để khớp với layout --}}
<div class="bg-slate-50 min-h-screen"> {{-- Sửa 'phút-h-màn hình' thành 'min-h-screen' --}}
    <section class="relative py-20 bg-gradient-to-r from-blue-700 to-blue-500 text-white text-center">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 uppercase tracking-tight">Dịch vụ của chúng tôi</h1>
            <p class="text-blue-100 max-w-2xl mx-auto text-lg opacity-90">
                TravelGo không chỉ cung cấp các tour du lịch, chúng tôi mang đến giải pháp toàn diện cho mọi hành trình của bạn.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
            <svg class="relative block w-full h-[50px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C58.47,105.15,133.42,118,202.86,110.19,257.25,104.08,284.58,78.25,321.39,56.44Z" class="fill-slate-50"></path>
            </svg>
        </div>
    </section> {{-- Sửa lỗi thẻ đóng 'phần' thành 'section' --}}

    <section class="max-w-7xl mx-auto px-4 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Giữ nguyên các box dịch vụ của bạn ở đây --}}
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Tour trọn gói</h3>
                <p class="text-slate-600 leading-relaxed">
                    Từ vé máy bay, khách sạn đến ăn uống và hướng dẫn viên. Bạn chỉ cần xách vali lên và đi, mọi thứ đã có chúng tôi lo.
                </p>
            </div>
            
             <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <i class="fas fa-plane-departure"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Vé máy bay giá rẻ</h3>
                <p class="text-slate-600 leading-relaxed">
                    Hệ thống săn vé thông minh giúp bạn tìm được chuyến bay tối ưu nhất về thời gian và chi phí từ hơn 200 hãng hàng không.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors">
                    <i class="fas fa-hotel"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Khách sạn cao cấp</h3>
                <p class="text-slate-600 leading-relaxed">
                    Đối tác chiến lược với hàng ngàn Resort và khách sạn từ 3-5 sao, đảm bảo giá phòng luôn tốt hơn so với đặt trực tiếp.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <i class="fas fa-car"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Cho thuê xe du lịch</h3>
                <p class="text-slate-600 leading-relaxed">
                    Đa dạng các dòng xe từ 4 đến 45 chỗ đời mới, đầy đủ tiện nghi, hỗ trợ cả thuê xe tự lái hoặc có tài xế riêng.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-16 h-16 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-red-600 group-hover:text-white transition-colors">
                    <i class="fas fa-passport"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Dịch vụ Visa nhanh</h3>
                <p class="text-slate-600 leading-relaxed">
                    Hỗ trợ thủ tục làm hộ chiếu và visa các nước khó như Mỹ, Châu Âu, Nhật Bản với tỷ lệ đậu lên đến 99%.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-16 h-16 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-teal-600 group-hover:text-white transition-colors">
                    <i class="fas fa-user-edit"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Tour theo yêu cầu</h3>
                <p class="text-slate-600 leading-relaxed">
                    Bạn có ý tưởng riêng? Chúng tôi sẽ hiện thực hóa nó thành một hành trình cá nhân hóa, phù hợp với sở thích của bạn.
                </p>
            </div>

            
        </div>
    </section>
</div>
@endsection