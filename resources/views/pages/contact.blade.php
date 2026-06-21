@extends('layouts.app')

@section('title', 'Contact Us - Jade Health Care')

@section('content')

<section class="bg-[#F4F1EB] py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">
        <div>
            <span class="text-[#EAB308] text-sm font-bold tracking-[0.2em] uppercase mb-4 block">Get In Touch</span>
            <h1 class="font-serif-premium text-5xl text-[#1A1A1A] mb-6">We'd Love To Hear From You</h1>
            <p class="text-gray-500 font-light leading-relaxed mb-10 max-w-md">
                Whether you have a question about our products, need assistance with your order, or want to discuss third-party manufacturing, our team is ready to help.
            </p>

            <div class="space-y-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#000000] shadow-sm shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-serif-premium text-xl text-[#000000] mb-1">Corporate Office</h3>
                        <p class="text-gray-500 font-light text-sm">Collage Colony, Kirmich road,<br>Kurukshetra, Haryana (136118)</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#000000] shadow-sm shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-serif-premium text-xl text-[#000000] mb-1">Email Address</h3>
                        <p class="text-gray-500 font-light text-sm">info.jadehealthcare@gmail.com</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#000000] shadow-sm shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-serif-premium text-xl text-[#000000] mb-1">Phone Numbers</h3>
                        <p class="text-gray-500 font-light text-sm">+91 74041 76961</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-10 border border-[#EFE9DB] shadow-lg">
            <h3 class="font-serif-premium text-3xl text-[#000000] mb-6">Send a Message</h3>
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">First Name</label>
                        <input type="text" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-[#EAB308] transition bg-transparent" required>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Last Name</label>
                        <input type="text" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-[#EAB308] transition bg-transparent" required>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Email Address</label>
                    <input type="email" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-[#EAB308] transition bg-transparent" required>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Message</label>
                    <textarea rows="4" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-[#EAB308] transition bg-transparent resize-none" required></textarea>
                </div>
                <button type="submit" class="w-full bg-[#000000] text-white px-8 py-4 text-sm tracking-widest uppercase hover:bg-[#222222] transition duration-300">
                    Submit Message
                </button>
            </form>
        </div>
    </div>
</section>

@endsection



