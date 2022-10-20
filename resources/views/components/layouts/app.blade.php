<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myApp - {{ $title ?? '' }}</title>
    <meta name="description" content="@yield('mete-description', 'default meta description')">
</head>

<body>
    <x-layouts.nav />
    {{ $slot }}
</body>
