@extends('layouts.client')

@section('title', 'Giới thiệu về TravelGo')

@section('content')
<div class="bg-white">
    <section class="relative py-20 bg-blue-900">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Chúng tôi là TravelGo</h1>
            <p class="text-blue-100 max-w-2xl mx-auto text-lg">
                Sứ mệnh của chúng tôi là mang đến những trải nghiệm du lịch khác biệt, kết nối con người với những vẻ đẹp tiềm ẩn của thế giới.
            </p>
        </div>
    </section>

    <section class="py-16 max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?q=80&w=800" 
                     class="rounded-3xl shadow-2xl w-full h-[450px] object-cover" alt="Travel Story">
                <div class="absolute -bottom-6 -right-6 bg-orange-500 p-8 rounded-2xl hidden md:block">
                    <p class="text-white font-bold text-4xl">10+</p>
                    <p class="text-white text-sm">Năm kinh nghiệm</p>
                </div>
            </div>
            <div class="space-y-6">
                <span class="text-blue-600 font-bold uppercase tracking-wider">Về chúng tôi</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 leading-tight">
                    Khởi nguồn từ niềm đam mê xê dịch mãnh liệt
                </h2>
                <p class="text-slate-600 leading-relaxed text-lg">
                    TravelGo được thành lập từ năm 2014 bởi một nhóm những người trẻ yêu khám phá. Chúng tôi tin rằng du lịch không chỉ là việc đi từ điểm A đến điểm B, mà là hành trình tìm thấy chính bản thân mình qua những vùng đất mới.
                </p>
                <div class="grid grid-cols-2 gap-6 pt-4">
                    <div class="flex items-start gap-3">
                        <div class="bg-blue-100 p-2 rounded-lg text-blue-600"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h4 class="font-bold">An toàn tuyệt đối</h4>
                            <p class="text-sm text-slate-500">Bảo hiểm du lịch đầy đủ cho mỗi chuyến đi.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="bg-orange-100 p-2 rounded-lg text-orange-600"><i class="fas fa-headset"></i></div>
                        <div>
                            <h4 class="font-bold">Hỗ trợ 24/7</h4>
                            <p class="text-sm text-slate-500">Luôn lắng nghe và giải quyết vấn đề của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-16">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="text-4xl font-extrabold text-blue-600 mb-2">500+</p>
                <p class="text-slate-500 font-medium">Điểm đến</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-blue-600 mb-2">15k+</p>
                <p class="text-slate-500 font-medium">Khách hàng hài lòng</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-blue-600 mb-2">120+</p>
                <p class="text-slate-500 font-medium">Đối tác khách sạn</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-blue-600 mb-2">4.9/5</p>
                <p class="text-slate-500 font-medium">Đánh giá trung bình</p>
            </div>
        </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-800 uppercase">Đội ngũ chuyên gia</h2>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="text-center group">
                <div class="relative overflow-hidden rounded-full w-48 h-48 mx-auto mb-6 border-4 border-white shadow-lg">
                    <img src="https://i.pravatar.cc/300?img=12" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-bold">Trần Minh Anh</h3>
                <p class="text-blue-600">Founder & CEO</p>
            </div>
            <div class="text-center group">
                <div class="relative overflow-hidden rounded-full w-48 h-48 mx-auto mb-6 border-4 border-white shadow-lg">
                    <img src="https://i.pravatar.cc/300?img=15" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-bold">Lê Hồng Nam</h3>
                <p class="text-blue-600">Giám đốc lữ hành</p>
            </div>
            <div class="text-center group">
                <div class="relative overflow-hidden rounded-full w-48 h-48 mx-auto mb-6 border-4 border-white shadow-lg">
                    <img src="https://i.pravatar.cc/300?img=20" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-bold">Nguyễn Thu Thủy</h3>
                <p class="text-blue-600">Trưởng phòng CSKH</p>
            </div>
        </div>
    </section>
</div>
@endsection