@extends('layouts.client')

@section('title', 'Liên hệ với TravelGo')

@section('content')
<div class="bg-slate-50 min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Liên hệ với chúng tôi</h1>
            <p class="text-slate-500 max-w-2xl mx-auto italic">
                Bạn có câu hỏi hay cần tư vấn về hành trình sắp tới? Đừng ngần ngại liên hệ với đội ngũ TravelGo.
            </p>
            <div class="w-20 h-1.5 bg-blue-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white rounded-3xl shadow-sm p-8 md:p-10 border border-slate-100">
                <h2 class="text-2xl font-bold text-slate-800 mb-6">Gửi tin nhắn cho chúng tôi</h2>
                <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700">Họ và tên</label>
                        <input type="text" placeholder="Nguyễn Văn A" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700">Email</label>
                        <input type="email" placeholder="example@gmail.com" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-sm font-bold text-slate-700">Chủ đề</label>
                        <input type="text" placeholder="Tư vấn tour Phú Quốc" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-sm font-bold text-slate-700">Lời nhắn</label>
                        <textarea rows="5" placeholder="Hãy cho chúng tôi biết yêu cầu của bạn..." 
                                  class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-xl transition duration-300 shadow-lg shadow-blue-200 w-full md:w-auto">
                            Gửi yêu cầu ngay <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-3xl shadow-sm p-8 border border-slate-100">
                    <h3 class="text-xl font-bold text-slate-800 mb-6">Thông tin chi tiết</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">Địa chỉ</p>
                                <p class="text-slate-500 text-sm">Số 1 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center shrink-0">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">Điện thoại</p>
                                <p class="text-slate-500 text-sm">0123 456 789</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center shrink-0">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">Email</p>
                                <p class="text-slate-500 text-sm">contact@travelgo.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm overflow-hidden h-64 border border-slate-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8639311820666!2d105.74459841540243!3d21.038129792833243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x536c053530f28a30!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNowaW5oIFZp4buFbiB0aMO0bmcgKFAp!5e0!3m2!1svi!2s!4v1640000000000!5m2!1svi!2s" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection