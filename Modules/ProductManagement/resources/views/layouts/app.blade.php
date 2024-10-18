<html>
<head>
    <!-- استایل‌های Livewire -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    @livewireStyles
    <title>a</title>{{-- @vite(['resources/js/app.js']) --}}



</head>
<body>

<!-- محتوای صفحه که توسط Livewire مدیریت می‌شود -->
{{ $slot }}



<!-- اسکریپت‌های Livewire -->
@livewireScripts
</body>
</html>

