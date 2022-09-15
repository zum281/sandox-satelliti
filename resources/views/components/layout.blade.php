<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Siti Satellite</title>

    <link href="{{ asset('css/vanilla-calendar.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <x-header />
    <main>{{ $slot }}</main>


    <x-modal.modal id="menu__modal">Modale menù</x-modal.modal>
    <x-modal.filters />
    <x-modal.calendar></x-modal.calendar>


    <script type="text/javascript" src="{{ asset('js/vanilla-calendar.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/range.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/foundationInit.js') }}"></script>
</body>

</html>
