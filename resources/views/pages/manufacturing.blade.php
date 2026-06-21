@extends('layouts.app')

@section('title', 'Third Party Manufacturing - Jade Health Care')

@section('content')

<section class="bg-[#1A1A1A] py-24 text-center">
    <div class="max-w-3xl mx-auto px-6">
        <span class="text-[#EAB308] text-sm font-bold tracking-[0.2em] uppercase mb-4 block">B2B Solutions</span>
        <h1 class="font-serif-premium text-5xl md:text-6xl text-white mb-6">Third Party Manufacturing</h1>
        <p class="text-gray-400 font-light text-lg">
            Partner with us to create premium private label cosmetics and nutraceuticals.
        </p>
    </div>
</section>

<section class="py-24 px-6 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
        <div>
            <div class="w-20 h-1 bg-[#000000] mb-8"></div>
            <h2 class="font-serif-premium text-4xl text-[#1A1A1A] mb-6">Why Partner With Us?</h2>
            <p class="text-gray-600 font-light leading-relaxed mb-6">
                Jade Health Care is equipped with state-of-the-art, GMP-certified manufacturing facilities. We specialize in the high-volume production of skin care serums, lotions, hair oils, and nutritional gummies.
            </p>
            <ul class="space-y-4 text-gray-600 font-light">
                <li class="flex items-center gap-3"><span class="text-[#EAB308]">✦</span> Custom Formulations</li>
                <li class="flex items-center gap-3"><span class="text-[#EAB308]">✦</span> Premium Packaging Solutions</li>
                <li class="flex items-center gap-3"><span class="text-[#EAB308]">✦</span> Strict Quality Control (QA/QC)</li>
                <li class="flex items-center gap-3"><span class="text-[#EAB308]">✦</span> Timely Delivery & Scalability</li>
                <li class="flex items-center gap-3"><span class="text-[#EAB308]">✦</span> Regulatory Compliance Support</li>
            </ul>
        </div>
        <div class="bg-[#F4F1EB] p-12 border border-[#EFE9DB]">
            <h3 class="font-serif-premium text-3xl text-[#000000] mb-6">Manufacturing Categories</h3>
            <div class="space-y-6">
                <div>
                    <h4 class="font-bold text-[#1A1A1A] uppercase tracking-wider text-sm mb-2">Cosmetics</h4>
                    <p class="text-gray-500 font-light text-sm">Face Serums (Vitamin C, Hyaluronic Acid, Niacinamide), Premium Body Lotions, and specialized Hair Oils.</p>
                </div>
                <div class="w-full h-px bg-[#EFE9DB]"></div>
                <div>
                    <h4 class="font-bold text-[#1A1A1A] uppercase tracking-wider text-sm mb-2">Nutraceuticals</h4>
                    <p class="text-gray-500 font-light text-sm">Biotin Gummies, Collagen Gummies, Multivitamin Gummies, and Plant-Based Capsules (DAKE 600).</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#000000] text-white p-12 text-center border-l-4 border-[#EAB308]">
        <h2 class="font-serif-premium text-3xl mb-4">Start Your Brand Journey</h2>
        <p class="font-light text-[#E5EAD7] mb-8">Contact our B2B team today to discuss minimum order quantities and formulation capabilities.</p>
        <a href="/contact" class="inline-block bg-[#EAB308] text-white px-8 py-3 text-sm tracking-widest uppercase hover:bg-[#CA8A04] transition duration-300">
            Contact Manufacturing Team
        </a>
    </div>
</section>

@endsection



