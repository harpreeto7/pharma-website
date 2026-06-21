<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jade Health Care - Premium cosmetics, skin care serums, hair care and nutraceuticals crafted with natural ingredients.">
    <title>@yield('title', 'Jade Health Care')</title>
    
    {{-- Favicon --}}
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo/jade-logo.jpeg') }}">
    
    {{-- Premium Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-serif-premium { font-family: 'Cormorant Garamond', serif; }
        .font-sans-premium { font-family: 'Montserrat', sans-serif; }
        body { font-family: 'Montserrat', sans-serif; }
        
        /* Global Reveal Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-[#FCFAF8] text-gray-800 font-sans-premium antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Target all major sections and any specific elements with 'reveal-target'
            const reveals = document.querySelectorAll('section, .reveal-target');
            
            // Add the initial hide state class
            reveals.forEach(el => el.classList.add('reveal'));
            
            // Set up the intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optional: unobserve if you only want it to animate once
                        // observer.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.1, // Trigger when 10% of element is visible
                rootMargin: "0px 0px -50px 0px" // Trigger slightly before it comes into view
            });
            
            reveals.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>



