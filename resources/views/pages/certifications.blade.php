@extends('layouts.app')

@section('title', 'Certifications - Jade Health Care')

@section('content')

<section class="bg-[#1A1A1A] py-24 text-center">
    <div class="max-w-3xl mx-auto px-6">
        <span class="text-[#EAB308] text-sm font-bold tracking-[0.2em] uppercase mb-4 block">Our Commitment</span>
        <h1 class="font-serif-premium text-5xl md:text-6xl text-white mb-6">Quality & Certifications</h1>
        <p class="text-gray-400 font-light text-lg">
            Certified excellence in every product we manufacture.
        </p>
    </div>
</section>

<section class="py-24 px-6 max-w-5xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="font-serif-premium text-4xl text-[#1A1A1A] mb-6">Standards You Can Trust</h2>
        <p class="text-gray-600 font-light leading-relaxed max-w-2xl mx-auto">
            At Jade Health Care, quality is not just a promise; it's certified. Our manufacturing processes and facilities strictly adhere to international quality and safety standards.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white border border-[#EFE9DB] p-10 hover:shadow-xl transition duration-500">
            <div class="w-16 h-16 bg-[#F4F1EB] rounded-full flex items-center justify-center text-[#EAB308] mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="font-serif-premium text-2xl text-[#000000] mb-3">GMP Certified</h3>
            <p class="text-gray-500 font-light">
                Good Manufacturing Practice certification ensures that products are consistently produced and controlled according to quality standards.
            </p>
        </div>

        <div class="bg-white border border-[#EFE9DB] p-10 hover:shadow-xl transition duration-500">
            <div class="w-16 h-16 bg-[#F4F1EB] rounded-full flex items-center justify-center text-[#EAB308] mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
            </div>
            <h3 class="font-serif-premium text-2xl text-[#000000] mb-3">Dermatologically Tested</h3>
            <p class="text-gray-500 font-light">
                Our skin care and cosmetic formulations undergo rigorous testing to ensure they are safe, effective, and suitable for various skin types.
            </p>
        </div>
        
        <div class="bg-white border border-[#EFE9DB] p-10 hover:shadow-xl transition duration-500">
            <div class="w-16 h-16 bg-[#F4F1EB] rounded-full flex items-center justify-center text-[#EAB308] mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h3 class="font-serif-premium text-2xl text-[#000000] mb-3">Premium Ingredients</h3>
            <p class="text-gray-500 font-light">
                We guarantee the purity of our ingredients. Our products are formulated without harsh chemicals, utilizing natural extracts and scientifically proven compounds.
            </p>
        </div>

        <div class="bg-white border border-[#EFE9DB] p-10 hover:shadow-xl transition duration-500">
            <div class="w-16 h-16 bg-[#F4F1EB] rounded-full flex items-center justify-center text-[#EAB308] mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="font-serif-premium text-2xl text-[#000000] mb-3">Global Standards</h3>
            <p class="text-gray-500 font-light">
                Our manufacturing processes align with global benchmarks, making our products suitable for international markets and export.
            </p>
        </div>
    </div>
</section>

@endsection



