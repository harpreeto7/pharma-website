@extends('layouts.app')

@section('title', 'Jade Health Care - Premium Health & Beauty')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-[#F9F6F0] overflow-hidden pt-0 pb-20">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[40rem] h-[40rem] rounded-full bg-[#EFE9DB] opacity-50 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[30rem] h-[30rem] rounded-full bg-[#E5EAD7] opacity-40 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center mt-8 lg:mt-0">
            
            {{-- Ultra Premium Hero Text (Left 5 columns) --}}
            <div class="lg:col-span-5 relative z-30 pt-0">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-[2px] bg-[#EAB308]"></div>
                    <span class="text-[#EAB308] text-[10px] font-bold tracking-[0.3em] uppercase">Jade Health Care</span>
                </div>
                
                <h1 class="font-serif-premium text-5xl md:text-[5rem] text-[#1A1A1A] leading-[1.05] mb-6 font-light tracking-tight">
                    Discover Your <br>
                    <span class="italic text-[#000000] font-normal">Natural</span> Radiance.
                </h1>
                
                <p class="text-gray-500 text-base md:text-lg leading-relaxed mb-10 font-light max-w-md">
                    Elevate your daily routine with our dermatologist-formulated, premium cosmetic serums, nourishing body care, and advanced nutraceuticals.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 items-start">
                    <a href="/products/cosmetics" class="group relative px-8 py-4 bg-[#000000] text-white overflow-hidden text-[10px] font-bold tracking-[0.2em] uppercase text-center w-full sm:w-auto shadow-xl">
                        <span class="absolute inset-0 w-full h-full bg-[#EAB308] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out"></span>
                        <span class="relative z-10 transition-colors duration-500 group-hover:text-[#1A1A1A]">Shop Skin Care</span>
                    </a>
                    <a href="/products/nutraceuticals" class="group flex items-center justify-center gap-3 text-[10px] font-bold tracking-[0.2em] uppercase text-[#000000] hover:text-[#EAB308] transition duration-300 w-full sm:w-auto py-4">
                        Explore Wellness
                        <div class="w-8 h-[2px] bg-[#000000] group-hover:bg-[#EAB308] transition duration-300 group-hover:w-12"></div>
                    </a>
                </div>
            </div>

            {{-- Ultra Premium Hero Images (Right 7 columns) --}}
            <div class="lg:col-span-7 relative h-[450px] lg:h-[650px] w-full mt-10 lg:-mt-16">
                
                {{-- Decorative Arch Background --}}
                <div class="absolute right-0 bottom-0 w-[80%] h-[90%] bg-[#EFE9DB] rounded-t-full opacity-60"></div>

                {{-- Main Feature Image (Glutathione) --}}
                <div class="absolute left-0 bottom-[5%] w-[55%] h-[75%] rounded-t-full rounded-b-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-[10px] border-white z-20 group">
                    <div class="absolute inset-0 bg-[#000000]/5 opacity-0 group-hover:opacity-100 transition duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('images/products/glutathione-body-lotion.jpeg') }}" alt="Glutathione Body Lotion" class="w-full h-full object-contain bg-white group-hover:scale-110 transition duration-1000 ease-out">
                </div>

                {{-- Secondary Floating Image (Hyaluronic Acid - Top Right) --}}
                <div class="absolute right-[5%] top-[10%] w-[45%] aspect-square rounded-full overflow-hidden shadow-2xl border-[8px] border-white z-30 group">
                    <div class="absolute inset-0 bg-[#000000]/5 opacity-0 group-hover:opacity-100 transition duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('images/products/hyaluronic-acid-b5-serum.jpeg') }}" alt="Hyaluronic Acid Serum" class="w-full h-full object-contain bg-white group-hover:scale-110 transition duration-1000 ease-out">
                </div>

                {{-- Tertiary Accent Image (Gummies - Bottom Right) --}}
                <div class="absolute right-[15%] bottom-[15%] w-[35%] aspect-[4/5] rounded-3xl overflow-hidden shadow-xl border-[6px] border-white z-10 group hidden md:block">
                    <div class="absolute inset-0 bg-[#000000]/5 opacity-0 group-hover:opacity-100 transition duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('images/products/collagen-gummies.jpeg') }}" alt="Collagen Gummies" class="w-full h-full object-contain bg-white group-hover:scale-110 transition duration-1000 ease-out">
                </div>

            </div>

        </div>
    </div>
</section>

{{-- Features / Philosophy --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16 max-w-2xl mx-auto">
            <h2 class="font-serif-premium text-4xl text-[#1A1A1A] mb-4">The Jade Philosophy</h2>
            <p class="text-gray-500 font-light leading-relaxed">We blend the finest natural botanicals with cutting-edge science to deliver exceptional results for your skin, hair, and overall health.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-12">
            @foreach([
                ['01', 'Pure Ingredients', 'Sourced from nature, free from harsh chemicals, sulfates, and parabens to ensure the highest quality care.'],
                ['02', 'Clinical Efficacy', 'Dermatologist formulated and rigorously tested for maximum absorption and visible results.'],
                ['03', 'GMP Certified', 'Manufactured in state-of-the-art facilities adhering to Good Manufacturing Practices.']
            ] as $feature)
            <div class="group">
                <span class="text-[#EAB308] font-serif-premium text-3xl mb-4 block">{{ $feature[0] }}</span>
                <h3 class="text-xl font-semibold text-[#000000] mb-3 tracking-wide">{{ $feature[1] }}</h3>
                <p class="text-gray-500 font-light leading-relaxed">{{ $feature[2] }}</p>
                <div class="w-12 h-px bg-[#EFE9DB] mt-6 group-hover:w-24 group-hover:bg-[#EAB308] transition-all duration-500"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Curated Collection --}}
<section class="bg-[#F4F1EB] py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-[#EAB308] text-sm font-bold tracking-[0.2em] uppercase block mb-2">Our Bestsellers</span>
                <h2 class="font-serif-premium text-4xl text-[#1A1A1A]">Curated Collection</h2>
            </div>
            <a href="/products/cosmetics" class="hidden md:inline-block text-[#000000] text-sm tracking-widest uppercase hover:text-[#EAB308] transition border-b border-[#000000] hover:border-[#EAB308] pb-1">
                View All Products
            </a>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            @foreach([
                ['products/vitamin-c-serum.jpeg', 'Vitamin C 20% Serum', 'Skin Brightening & Anti-Aging', 'cosmetics', 'vitamin-c-serum'],
                ['products/body-lotion-pure.jpeg', 'Pure Body Lotion', 'Deep Hydration & Nourishment', 'cosmetics', 'body-lotion-pure'],
                ['products/jadibuti-hair-oil.jpeg', 'Jadibuti Hair Oil', 'Natural Hair Growth Formula', 'cosmetics', 'jadibuti-hair-oil'],
                ['products/biotin-gummies.jpeg', 'Biotin Hair Gummies', 'Advanced Hair Nutrition', 'nutraceuticals', 'biotin-gummies']
            ] as $p)
            <a href="/products/{{ $p[3] }}/{{ $p[4] }}" class="group block">
                <div class="bg-white aspect-[3/4] mb-4 overflow-hidden relative border border-gray-100">
                    <div class="absolute inset-0 bg-[#000000]/5 opacity-0 group-hover:opacity-100 transition duration-500 z-10"></div>
                    <img src="{{ asset('images/'.$p[0]) }}" alt="{{ $p[1] }}" class="w-full h-full object-contain bg-white transform group-hover:scale-110 transition duration-500 object-center group-hover:scale-105 transition duration-700">
                </div>
                <h3 class="font-serif-premium text-xl text-[#1A1A1A] group-hover:text-[#EAB308] transition">{{ $p[1] }}</h3>
                <p class="text-gray-500 text-sm font-light mt-1">{{ $p[2] }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact CTA --}}
<section class="bg-[#000000] text-white py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="font-serif-premium text-4xl md:text-5xl mb-6 text-[#F9F6F0]">Elevate Your Brand With Us</h2>
        <p class="text-[#E5EAD7] font-light text-lg mb-10 max-w-2xl mx-auto">
            Jade Health Care is a trusted partner for third-party manufacturing. We offer premium formulations, elegant packaging, and uncompromising quality for your business.
        </p>
        <div class="flex justify-center gap-6 flex-wrap">
            <a href="/contact" class="bg-[#EAB308] text-white px-10 py-4 text-sm tracking-widest uppercase hover:bg-[#CA8A04] transition duration-300">
                Inquire Now
            </a>
            <a href="https://wa.me/917404176961" target="_blank" class="border border-white/30 text-white px-10 py-4 text-sm tracking-widest uppercase hover:bg-white/10 hover:border-white transition duration-300 flex items-center gap-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.11 1.532 5.832L0 24l6.336-1.51A11.955 11.955 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.806 9.806 0 01-5.001-1.37l-.36-.214-3.724.888.913-3.63-.235-.374A9.817 9.817 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
                WhatsApp Us
            </a>
        </div>
    </div>
</section>

@endsection



