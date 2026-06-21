{{-- Top Announcement Bar --}}
<div class="bg-[#1A1A1A] text-[#F9F6F0] py-2 px-4 text-center text-[10px] sm:text-xs tracking-[0.2em] uppercase font-sans-premium flex justify-center items-center gap-4">
    <span class="hidden sm:inline">Premium Dermatologist Formulated Products</span>
    <span class="hidden sm:inline">|</span>
    <a href="https://wa.me/917404176961" target="_blank" class="hover:text-[#EAB308] transition flex items-center gap-1">
        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.11 1.532 5.832L0 24l6.336-1.51A11.955 11.955 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.806 9.806 0 01-5.001-1.37l-.36-.214-3.724.888.913-3.63-.235-.374A9.817 9.817 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
        +91 74041 76961
    </a>
</div>

{{-- Main Navbar --}}
<nav class="bg-white/90 backdrop-blur-lg shadow-[0_4px_30px_rgba(0,0,0,0.03)] sticky top-0 z-50 border-b border-[#EFE9DB]/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-24">
            
            {{-- HD Typographic Logo --}}
            <a href="/" class="flex flex-col items-start justify-center group shrink-0">
                <span class="font-serif-premium text-[2rem] font-bold tracking-[0.18em] text-[#1A1A1A] group-hover:text-[#EAB308] transition duration-500 leading-none">JADE</span>
                <span class="font-sans-premium text-[0.55rem] font-medium tracking-[0.4em] text-[#888888] uppercase mt-1.5 group-hover:text-[#1A1A1A] transition duration-500">Health Care</span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-10 text-[11px] font-semibold text-gray-800 tracking-[0.15em] uppercase h-full">
                <a href="/" class="relative group h-full flex items-center">
                    <span class="group-hover:text-[#EAB308] transition duration-300">Home</span>
                    <span class="absolute bottom-6 left-0 w-0 h-[2px] bg-[#EAB308] transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <a href="/about" class="relative group h-full flex items-center">
                    <span class="group-hover:text-[#EAB308] transition duration-300">Our Story</span>
                    <span class="absolute bottom-6 left-0 w-0 h-[2px] bg-[#EAB308] transition-all duration-300 group-hover:w-full"></span>
                </a>

                {{-- Premium Products Dropdown --}}
                <div class="relative group h-full flex items-center cursor-pointer">
                    <div class="flex items-center gap-1.5 group-hover:text-[#EAB308] transition duration-300">
                        <span>Collections</span>
                        <svg class="w-3 h-3 transform group-hover:-rotate-180 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <span class="absolute bottom-6 left-0 w-0 h-[2px] bg-[#EAB308] transition-all duration-300 group-hover:w-full"></span>
                    
                    {{-- Dropdown Menu --}}
                    <div class="absolute top-full left-1/2 -translate-x-1/2 hidden group-hover:block w-[400px] pt-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <div class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-[#EFE9DB] rounded-xl overflow-hidden p-4 grid grid-cols-1 gap-2 relative before:content-[''] before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:w-4 before:h-4 before:bg-white before:rotate-45 before:border-l before:border-t before:border-[#EFE9DB]">
                            
                            <a href="/products/cosmetics" class="flex items-center gap-4 p-4 hover:bg-[#F9F6F0] rounded-lg transition duration-300 group/item">
                                <div class="w-12 h-12 bg-[#F4F1EB] rounded-full flex items-center justify-center shrink-0 group-hover/item:bg-white group-hover/item:shadow-sm transition">
                                    <span class="text-xl">✨</span>
                                </div>
                                <div>
                                    <h4 class="font-serif-premium text-[#1A1A1A] text-lg mb-0.5 group-hover/item:text-[#EAB308] transition">Cosmetics & Skin Care</h4>
                                    <p class="text-[9px] text-gray-400 font-sans-premium tracking-wider normal-case">Premium serums, lotions & oils</p>
                                </div>
                            </a>
                            
                            <a href="/products/nutraceuticals" class="flex items-center gap-4 p-4 hover:bg-[#F9F6F0] rounded-lg transition duration-300 group/item">
                                <div class="w-12 h-12 bg-[#F4F1EB] rounded-full flex items-center justify-center shrink-0 group-hover/item:bg-white group-hover/item:shadow-sm transition">
                                    <span class="text-xl">🌿</span>
                                </div>
                                <div>
                                    <h4 class="font-serif-premium text-[#1A1A1A] text-lg mb-0.5 group-hover/item:text-[#EAB308] transition">Nutraceuticals</h4>
                                    <p class="text-[9px] text-gray-400 font-sans-premium tracking-wider normal-case">Advanced wellness supplements</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>

                <a href="/manufacturing" class="relative group h-full flex items-center">
                    <span class="group-hover:text-[#EAB308] transition duration-300">Manufacturing</span>
                    <span class="absolute bottom-6 left-0 w-0 h-[2px] bg-[#EAB308] transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <a href="/certifications" class="relative group h-full flex items-center">
                    <span class="group-hover:text-[#EAB308] transition duration-300">Quality</span>
                    <span class="absolute bottom-6 left-0 w-0 h-[2px] bg-[#EAB308] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            {{-- CTA Button --}}
            <div class="hidden lg:block shrink-0">
                <a href="/contact" class="group relative inline-flex items-center justify-center px-8 py-3.5 text-[10px] font-bold tracking-[0.2em] text-white uppercase bg-[#1A1A1A] overflow-hidden transition-all duration-300 hover:shadow-xl hover:bg-[#000000]">
                    <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-[#EAB308] rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="relative flex items-center gap-2">
                        Contact Us
                        <svg class="w-3 h-3 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button id="mobile-menu-btn" class="lg:hidden text-[#1A1A1A] hover:text-[#EAB308] transition p-2">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Mobile menu (Slide down) --}}
        <div id="mobile-menu" class="hidden lg:hidden overflow-hidden transition-all duration-300 max-h-0 opacity-0">
            <div class="pb-8 pt-4 space-y-4 text-xs font-bold text-gray-800 border-t border-[#EFE9DB]/50 tracking-[0.15em] uppercase">
                <a href="/" class="block py-3 hover:text-[#EAB308] transition px-2">Home</a>
                <a href="/about" class="block py-3 hover:text-[#EAB308] transition px-2">Our Story</a>
                
                <div class="py-3 px-2 border-l-2 border-[#EAB308] ml-2 bg-[#F9F6F0]/50 my-2">
                    <span class="block text-[#888888] text-[10px] mb-2">COLLECTIONS</span>
                    <a href="/products/cosmetics" class="block py-2 hover:text-[#EAB308] transition">Cosmetics & Skin Care</a>
                    <a href="/products/nutraceuticals" class="block py-2 hover:text-[#EAB308] transition">Nutraceuticals</a>
                </div>
                
                <a href="/manufacturing" class="block py-3 hover:text-[#EAB308] transition px-2">Manufacturing</a>
                <a href="/certifications" class="block py-3 hover:text-[#EAB308] transition px-2">Quality</a>
                
                <div class="pt-4 mt-4 border-t border-[#EFE9DB]/50">
                    <a href="/contact" class="block w-full text-center bg-[#1A1A1A] text-white py-4 hover:bg-[#EAB308] transition">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            // Small delay to allow display block to apply before animating opacity/height
            setTimeout(() => {
                menu.classList.remove('max-h-0', 'opacity-0');
                menu.classList.add('max-h-[500px]', 'opacity-100');
            }, 10);
        } else {
            menu.classList.add('max-h-0', 'opacity-0');
            menu.classList.remove('max-h-[500px]', 'opacity-100');
            setTimeout(() => {
                menu.classList.add('hidden');
            }, 300);
        }
    });
</script>
