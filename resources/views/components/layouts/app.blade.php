<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Carousel</title>

    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js" defer></script>

    <style>
        /*Chrome, Safari and Opera*/
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="text-black font-sans antialiased overflow-y-scroll">
    <main class="w-[640px] m-auto pt-16 px-8">
        {{ $slot }}
    </main>
</body>
</html>
