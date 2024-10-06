@extends('layouts.main')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <section class="grid grid-cols-1 md:grid-cols-2 items-center py-5 px-5 mx-auto max-w-screen-xl">
        <div class="flex flex-col max-w-[600px]">
            <h1 class="text-[30px] md:text-[50px] text-[#663399] font-bold"> Selamat Datang Di Admin</h1>
            <h3 class="text-[20px] md:text-[35px] text-black font-semibold">Toko ATK (Alat Tulis Kantor)</h3>
            <p class="text-sm md:text-lg text-black font-medium">Tempat terbaik untuk mengelola data barang Anda dengan mudah dan efisien. Nikmati kemudahan dalam mengatur stok, mengatur data barang, dan menjaga keakuratan data Anda. Kelola data Anda dengan lebih praktis dan efektif!</p>
        </div>
        <img src="{{ asset('components/elements/landing.png') }}" class="hidden md:block" alt="">
    </section>
    <section class="grid grid-cols-1 md:grid-cols-2 px-5 gap-10  w-full mx-auto max-w-screen-xl">
        <div class="bg-white border rounded-[15px] flex flex-col items-center py-10 shadow-md shadow-[#663399] min-w-[200px]">
            <i class="fa-solid fa-boxes-stacked text-3xl text-[#663399]"></i>
            <span class="text-lg font-medium">Total Barang</span>
            <span class="text-3xl font-bold text-[#663399]">1000</span>
        </div>
        <div class="bg-white border rounded-[15px] flex flex-col items-center py-10 shadow-md shadow-[#663399] min-w-[200px]">
            <i class="fa-solid fa-layer-group text-3xl text-[#663399]"></i>
            <span class="text-lg font-medium">Total kategori</span>
            <span class="text-3xl font-bold text-[#663399]">1234</span>
        </div>
    </section>
@endsection

@section('js')
    <script></script>
@endsection
