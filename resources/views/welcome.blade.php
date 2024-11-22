<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('welcome.name', 'CordiSimple') }}</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            position: relative;
            min-height: 100vh;
        }

        /* Fondo punteado */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle, rgb(255, 255, 255) 0.01px, transparent 2px);
            background-size: 50px 50px;
            background-position: center center;
            pointer-events: none;
            z-index: -1;
        }

        /* Optional: Add a subtle fade at the edges */
        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 1%, rgba(0, 0, 0, 0.1) 90%);
            pointer-events: none;
            z-index: -1;
        }
    </style>
</head>

<body class="antialiased bg-cWhite dark:bg-cBlack">

    <!-- Header -->
    @include('layouts.navigation')
    
    <!-- Main Content -->
    <main class="w-full">
        <section id="welcome" class="h-screen flex flex-col justify-center items-center">
            <h2 class="text-cBlack dark:text-cWhite text-8xl max-w-6xl text-center mb-8 font-bold">
                Welcome to <span
                    class="bg-gradient-to-r from-cRed to-cBlack dark:to-cWhite bg-clip-text text-transparent">CordiSimple</span>
                the best plataform for managing <span
                    class="bg-gradient-to-l from-cRed to-cBlack dark:to-cWhite bg-clip-text text-transparent">events</span>
                and reservations
            </h2>
            <div className="flex justify-center">
                <a href="{{ route('register') }}"
                    class="inline-flex h-12 animate-shimmer items-center justify-center rounded-md border border-slate-800 bg-[linear-gradient(110deg,#F2471D,45%,#E0E0E0,55%,#F2471D)] bg-[length:200%_100%] px-6 font-medium text-cWhite transition-colors focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50">
                    Get Started
                </a>
            </div>
        </section>
        <section id="aboutUs" class="flex justify-center items-center mt-10 w-full h-screen">
            <div class="bg-cBlack w-1/2 h-full flex flex-col justify-center items-center">
                <h2 class="text-cRed text-6xl mb-4 font-bold">About Us</h2>
                <p class="text-cWhite max-w-xl text-lg tracking-wide text-center">Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Possimus ducimus explicabo non, delectus cum, vero qui odit voluptas,
                    modi voluptate praesentium quisquam dicta. Deserunt impedit quos voluptatum perspiciatis temporibus
                    harum.
                    Ea ad dolore aliquid, aliquam a debitis ut provident asperiores accusantium dolorum fugiat impedit
                    voluptas quos minima non suscipit soluta recusandae sapiente tenetur facilis, repellat itaque
                    quidem. Perferendis, consectetur? Temporibus.
                    <br>
                    Ratione maxime dolor qui fugit ipsum reiciendis perferendis totam veritatis! Mollitia, eveniet
                    doloremque maiores nisi eaque ea molestiae dicta eligendi ipsam neque, atque blanditiis consequuntur
                    debitis. Temporibus dicta maxime eaque.
                    Libero exercitationem fugit molestiae dolorem. Quisquam labore facilis architecto, molestias totam
                    recusandae tenetur, culpa repellendus consequatur quos libero necessitatibus earum ipsum alias
                    repudiandae quidem omnis sequi autem enim tempora expedita!
                    Pariatur commodi minus sequi sed qui quis explicabo quia. Error, nihil incidunt in eius quisquam
                    nostrum fugit, ipsa itaque dicta quidem animi fuga labore, corporis eos quos ut? Cum, perferendis.
                </p>
            </div>
            <div class="w-1/2 h-full flex justify-center items-center bg-cWhite">
                <img src="{{ asset('build/assets/logo.png') }}" alt="Logo" class="w-96 h-96 fill-current" />
            </div>
        </section>

        <!-- Horizontal Scroll Carousel Section -->
        <section id="carrousel" class="mt-10 w-full h-screen flex justify-center items-center">
            <div id="horizontal-scroll" class="h-full w-full whitespace-nowrap flex items-center overflow-hidden">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/2608517/pexels-photo-2608517.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/716276/pexels-photo-716276.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/301987/pexels-photo-301987.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/433452/pexels-photo-433452.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/2608512/pexels-photo-2608512.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/169198/pexels-photo-169198.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/1983046/pexels-photo-1983046.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/431722/pexels-photo-431722.jpeg?auto=compress&cs=tinysrgb&w=3600"
                    alt="">
            </div>
        </section>

        <section class="flex flex-col justify-center items-center mt-10">
            <h2 class="text-cBlack dark:text-cWhite text-8xl max-w-6xl text-center mb-8 font-bold">
                <span
                    class="bg-gradient-to-r from-cRed to-cBlack dark:to-cWhite bg-clip-text text-transparent">Happiness</span>
                is meant to be shared, and every event is an opportunity to <span
                    class="bg-gradient-to-l from-cRed to-cBlack dark:to-cWhite bg-clip-text text-transparent">celebrate.</span>
            </h2>
            <div className="flex justify-center">
                <a href="{{ route('register') }}"
                    class="inline-flex h-12 animate-shimmer items-center justify-center rounded-md border border-slate-800 bg-[linear-gradient(110deg,#F2471D,45%,#E0E0E0,55%,#F2471D)] bg-[length:200%_100%] px-6 font-medium text-cWhite transition-colors focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50">
                    Get Started
                </a>
            </div>
            <footer class="flex justify-around items-center h-20 mt-8 w-full bg-cWhite dark:bg-cBlack border-t-2 border-cGray dark:border-cWhite">
                <div class="flex items-center text-cBlack dark:text-cWhite text-2xl">
                    CordiSimple
                </div>
                <div class="flex items-center gap-4">
                    <a href="https://github.com/Jhon-Develop/CordiSimple" class="text-cBlack dark:text-cWhite text-lg"> Github </a>
                    <a href="" class="text-cBlack dark:text-cWhite text-lg"> Gmail </a>

                </div>
            </footer>
        </section>
    </main>

    <!-- Horizontal Scroll JavaScript -->
    <script>
        
        document.addEventListener("DOMContentLoaded", function() {
            const horizontalScroll = document.getElementById("horizontal-scroll");
            let startX, scrollLeft;
            let isHovered = false;

            // Detect when mouse enters and leaves the carousel section
            horizontalScroll.addEventListener("mouseenter", () => isHovered = true);
            horizontalScroll.addEventListener("mouseleave", () => isHovered = false);

            // Wheel scroll for horizontal scrolling
            const handleWheel = (e) => {
                if (isHovered) {
                    const maxScrollLeft = horizontalScroll.scrollWidth - horizontalScroll.clientWidth;

                    // Permitir scroll vertical si está al límite izquierdo o derecho
                    if ((horizontalScroll.scrollLeft === 0 && e.deltaY < 0) ||
                        (horizontalScroll.scrollLeft >= maxScrollLeft && e.deltaY > 0)) {
                        return; // Permite el desplazamiento vertical cuando está en los límites
                    }

                    e.preventDefault(); // Evita el desplazamiento vertical
                    horizontalScroll.scrollLeft += e.deltaY;
                }
            };

            // Touch scroll for horizontal scrolling
            const handleTouchStart = (e) => {
                startX = e.touches[0].pageX;
                scrollLeft = horizontalScroll.scrollLeft;
            };

            const handleTouchMove = (e) => {
                if (isHovered) {
                    const x = e.touches[0].pageX;
                    const walk = (startX - x) * 1.5; // Scroll speed factor

                    const maxScrollLeft = horizontalScroll.scrollWidth - horizontalScroll.clientWidth;

                    // Permitir scroll vertical si está al límite izquierdo o derecho
                    if ((horizontalScroll.scrollLeft === 0 && walk < 0) ||
                        (horizontalScroll.scrollLeft >= maxScrollLeft && walk > 0)) {
                        return; // Permite el desplazamiento vertical cuando está en los límites
                    }

                    horizontalScroll.scrollLeft = scrollLeft + walk;
                    e.preventDefault();
                }
            };

            window.addEventListener("wheel", handleWheel, {
                passive: false
            });
            horizontalScroll.addEventListener("touchstart", handleTouchStart, {
                passive: true
            });
            horizontalScroll.addEventListener("touchmove", handleTouchMove, {
                passive: false
            });
        });
    </script>
</body>

</html>
