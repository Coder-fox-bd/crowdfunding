<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BD IT Firm') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    </head>
    <body>
        <style>
            [x-cloak] { display: none; }
            .dropdown:focus-within .dropdown-menu {
              opacity:1;
              transform: translate(0) scale(1);
              visibility: visible;
            }

            /* .flickity-viewport {
              height: 500px !important;
            } */

            .flickity-button {
                background: #373593;
                color: white;
            }

            .flickity-button:hover {
                background: #2e2d7e;
            }
        </style>
        <x-header />
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <x-footer />
    </body>

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        function carousel() {
            return {
                active: 0,
                init() {
                var flkty = new Flickity(this.$refs.carousel, {
                    freeScroll: true,
                    wrapAround: true,
                    pageDots: false
                });
                flkty.on('change', i => this.active = i);
                }
            }
        }

        function carouselFilter() {
            return {
                active: 0,
                changeActive(i) {
                this.active = i;
                
                this.$nextTick(() => {
                    let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
                    flkty.resize();
                });
                }
            }
        }
    </script>
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/main.js') }}"></script>
</html>