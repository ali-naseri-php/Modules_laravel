<html>
<head>
    <!-- استایل‌های Livewire -->
    @livewireStyles
    {{-- @vite(['resources/js/app.js']) --}}


</head>
<body>

<!-- محتوای صفحه که توسط Livewire مدیریت می‌شود -->
{{ $slot }}



<!-- اسکریپت‌های Livewire -->
@livewireScripts
</body>
</html>

