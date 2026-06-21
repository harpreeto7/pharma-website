@extends('layouts.app')

@section('title', $product['name'] . ' - Jade Health Care')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-16">
    {{-- Breadcrumb --}}
    <nav class="text-xs font-semibold uppercase tracking-widest text-gray-400 mb-12 flex items-center gap-3">
        <a href="/" class="hover:text-[#000000] transition">Home</a>
        <span>/</span>
        <a href="/products/{{ $category }}" class="hover:text-[#000000] transition">{{ str_replace('-', ' ', $category) }}</a>
        <span>/</span>
        <span class="text-[#1A1A1A]">{{ $product['name'] }}</span>
    </nav>

    <div class="grid md:grid-cols-2 gap-16 lg:gap-24 items-start">
        {{-- Product Image --}}
        <div class="bg-white border border-gray-100 p-4 aspect-[3/4] sticky top-28">
            <img src="{{ asset('images/'.$product['image']) }}"
                 alt="{{ $product['name'] }}"
                 class="w-full h-full object-contain bg-white transform group-hover:scale-110 transition duration-500 object-center shadow-sm">
        </div>

        {{-- Product Details --}}
        <div class="py-4">
            @if(!empty($product['category_label']))
            <span class="text-[#EAB308] text-[11px] font-bold tracking-[0.2em] uppercase mb-4 block">
                {{ $product['category_label'] }}
            </span>
            @endif
            
            <h1 class="font-serif-premium text-4xl lg:text-5xl text-[#1A1A1A] leading-[1.1] mb-6">{{ $product['name'] }}</h1>
            
            <div class="w-12 h-px bg-[#EFE9DB] mb-6"></div>
            
            <p class="text-gray-500 font-light leading-relaxed text-lg mb-8">{{ $product['description'] }}</p>

            {{-- Benefits --}}
            @if(!empty($product['benefits']))
            <div class="mb-10 bg-[#F9F6F0] p-8 border border-[#EFE9DB]">
                <h3 class="font-serif-premium text-xl text-[#000000] mb-4">Key Benefits</h3>
                <ul class="space-y-3">
                    @foreach($product['benefits'] as $benefit)
                    <li class="flex items-start gap-3 text-gray-600 font-light">
                        <span class="text-[#EAB308] mt-1">✦</span> {{ $benefit }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="space-y-4">
                <a href="https://wa.me/917404176961?text=Hi,%20I%20am%20interested%20in%20{{ urlencode($product['name']) }}"
                   target="_blank"
                   class="flex items-center justify-center gap-3 bg-[#000000] text-white px-8 py-4 text-sm tracking-widest uppercase hover:bg-[#222222] transition duration-300 w-full text-center">
                    <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.11 1.532 5.832L0 24l6.336-1.51A11.955 11.955 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.806 9.806 0 01-5.001-1.37l-.36-.214-3.724.888.913-3.63-.235-.374A9.817 9.817 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
                    Inquire via WhatsApp
                </a>
                <a href="/contact"
                   class="flex items-center justify-center gap-2 border border-[#000000] text-[#000000] px-8 py-4 text-sm tracking-widest uppercase hover:bg-[#000000] hover:text-white transition duration-300 w-full text-center">
                    B2B Manufacturing Inquiry
                </a>
            </div>

            <div class="mt-10 border-t border-gray-200 pt-6 grid grid-cols-2 gap-y-4 text-xs tracking-wider uppercase text-gray-400">
                <div><span class="font-semibold text-gray-800">Brand:</span> Jade Health Care</div>
                <div><span class="font-semibold text-gray-800">Availability:</span> <span class="text-[#000000]">In Stock</span></div>
                <div class="col-span-2"><span class="font-semibold text-gray-800">Manufacturing:</span> Available for 3rd Party</div>
            </div>
        </div>
    </div>
</section>

@endsection



