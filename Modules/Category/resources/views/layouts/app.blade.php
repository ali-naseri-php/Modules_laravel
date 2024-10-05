<html>
<head>
    <!-- استایل‌های Livewire -->
    @livewireStyles
    {{-- @vite(['resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ mix('Modules/Category/resources/assets/sass/tailwindCss.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    @vite('Modules/Category/resources/assets/sass/tailwindCss.css')
</head>
<body>

<!-- محتوای صفحه که توسط Livewire مدیریت می‌شود -->
{{ $slot }}



<!-- اسکریپت‌های Livewire -->
@livewireScripts
</body>
</html>

