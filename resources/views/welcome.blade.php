<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Minimal E-commerce-app</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <livewire:header />
        <livewire:hero-section />
        <livewire:product-section />
    </body>
</html>
