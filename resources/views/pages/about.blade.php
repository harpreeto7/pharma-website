@extends('layouts.app')

@section('title', 'About Us - Jade Health Care')

@section('content')

{{-- Page Header --}}
<section class="bg-[#1A1A1A] py-24 text-center">
    <div class="max-w-3xl mx-auto px-6">
        <span class="text-[#EAB308] text-sm font-bold tracking-[0.2em] uppercase mb-4 block">Our Story</span>
        <h1 class="font-serif-premium text-5xl md:text-6xl text-white mb-6">Purity Meets Science</h1>
        <p class="text-gray-400 font-light text-lg">
            Dedicated to redefining beauty and wellness through natural formulations and clinical excellence.
        </p>
    </div>
</section>

{{-- Main Content --}}
<section class="py-24 px-6 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 items-center">
        <div>
            <div class="w-20 h-1 bg-[#EAB308] mb-8"></div>
            <h2 class="font-serif-premium text-4xl text-[#1A1A1A] mb-6">Who We Are</h2>
            <p class="text-gray-600 font-light leading-relaxed mb-6">
                <strong>Jade Health Care</strong> is a premium provider of advanced cosmetics, skin care serums, hair care solutions, and specialized nutraceuticals. Based in Kurukshetra, Haryana, we are committed to enhancing natural beauty and overall wellness.
            </p>
            <p class="text-gray-600 font-light leading-relaxed mb-6">
                Our philosophy is simple: harness the purest botanical ingredients and combine them with cutting-edge dermatological science. This ensures that every drop of our serums and every capsule of our supplements delivers profound, visible results.
            </p>
            <p class="text-gray-600 font-light leading-relaxed">
                Whether you are looking for personal care products or a reliable partner for third-party manufacturing, Jade Health Care stands for uncompromising quality and trust.
            </p>
        </div>
        <div class="relative">
            <div class="absolute inset-0 bg-[#000000] transform translate-x-4 translate-y-4"></div>
            <img src="{{ asset('images/products/dake-600.jpeg') }}" alt="Jade Health Care" class="relative z-10 w-full h-[500px] object-contain bg-white transform group-hover:scale-110 transition duration-500 shadow-xl border border-gray-100">
        </div>
    </div>
</section>

{{-- Core Values --}}
<section class="bg-[#F4F1EB] py-24 px-6">
    <div class="max-w-7xl mx-auto text-center mb-16">
        <h2 class="font-serif-premium text-4xl text-[#1A1A1A]">Our Core Values</h2>
        <p class="text-gray-500 font-light mt-4">The principles that guide everything we create.</p>
    </div>
    
    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-12">
        @foreach([
            ['Quality', 'We adhere to the highest manufacturing standards (GMP) to ensure safety and efficacy.'],
            ['Innovation', 'We continuously research and develop new formulations to address modern skin and health needs.'],
            ['Nature', 'We prioritize plant-based, natural, and cruelty-free ingredients over harsh synthetic chemicals.']
        ] as $value)
        <div class="bg-white p-10 border border-[#EFE9DB] text-center hover:shadow-lg transition duration-500">
            <h3 class="font-serif-premium text-2xl text-[#000000] mb-4">{{ $value[0] }}</h3>
            <p class="text-gray-500 font-light leading-relaxed">{{ $value[1] }}</p>
        </div>
        @endforeach
    </div>
</section>

@endsection



