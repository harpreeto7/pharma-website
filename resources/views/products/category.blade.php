@extends('layouts.app')

@section('title', ucfirst($category) . ' - Jade Health Care')

@section('content')

<section class="bg-[#F9F6F0] py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="font-serif-premium text-4xl md:text-5xl text-[#1A1A1A] capitalize mb-4">{{ str_replace('-', ' ', $category) }}</h1>
        <p class="text-gray-500 font-light text-lg">Explore our premium selection of {{ str_replace('-', ' ', $category) }} crafted with care.</p>
    </div>
</section>

<section class="py-16 px-6 max-w-7xl mx-auto min-h-screen">
    @if(empty($products))
        <div class="text-center py-20">
            <h2 class="text-2xl font-serif-premium text-gray-400">No products found in this category.</h2>
        </div>
    @else
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-12">
            @foreach($products as $product)
            <a href="/products/{{ $category }}/{{ $product['slug'] }}" class="group block">
                <div class="bg-white aspect-[3/4] mb-5 overflow-hidden relative border border-gray-100">
                    <div class="absolute inset-0 bg-[#000000]/5 opacity-0 group-hover:opacity-100 transition duration-500 z-10"></div>
                    <img src="{{ asset('images/'.$product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain bg-white transform group-hover:scale-110 transition duration-500 object-center group-hover:scale-105 transition duration-700">
                </div>
                
                @if(!empty($product['category_label']))
                <span class="text-[#EAB308] text-[10px] font-bold tracking-[0.2em] uppercase mb-2 block">
                    {{ $product['category_label'] }}
                </span>
                @endif
                
                <h3 class="font-serif-premium text-xl text-[#1A1A1A] group-hover:text-[#000000] transition leading-tight mb-2">{{ $product['name'] }}</h3>
                
                <p class="text-gray-400 text-sm font-light line-clamp-2">{{ $product['description'] }}</p>
                
                <div class="mt-4 flex items-center text-[#EAB308] text-sm tracking-widest uppercase font-medium group-hover:text-[#000000] transition">
                    <span>Discover</span>
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </div>
            </a>
            @endforeach
        </div>
    @endif
</section>

@endsection



