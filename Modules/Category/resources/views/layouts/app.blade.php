<html>
<head>
    <!-- ... -->
    @livewireStyles
    @vite(['resources/js/app.js'])
</head>
<body>
{{ $slot }}

@livewireScriptConfig
</body>
</html>
