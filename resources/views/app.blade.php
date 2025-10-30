<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        (function() {
            const appearance = '{{ $appearance ?? 'system' }}';

            if (appearance === 'system') {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                if (prefersDark) {
                    document.documentElement.classList.add('dark');
                }
            }
        })();
    </script>
    <title inertia>{{ config('app.name') }}</title>

    <link rel="icon" href="/favicon-covet-house.ico" sizes="any">
    <link rel="icon" href="/favicon-covet-house.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/favicon-covet-house.png">

    @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    <style>
        .swiper-button-prev,
        .swiper-button-next {
            color: #ffffff83;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            transition: ease-in-out;
            transition-duration: .5s;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            color: #ffffff;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 16px;
        }
    </style>
    @inertia
</body>

</html>
