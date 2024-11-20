<html>
<head>
    <!-- ... -->
    @livewireStyles

    @vite(['resources/js/app.js'])
</head>
<body>
{{ $slot }}
@livewireScripts
@livewireScriptConfig
</body>
</html>
