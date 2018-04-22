<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
    @yield('css')

    <style>
        .active {
            text-decoration: none;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
{{ request()->url() }}

<?php
    function isActivePage($pageUrl){
        return request()->is($pageUrl)? 'active' : '';
    }
?>

<ul>
    <li>
        <a class="{{ isActivePage('/') }}" href="{{ route('welcome', 'Marco ACR') }}">Welcome</a>
    </li>
    <li>
        <a class="{{ isActivePage('color/blue') }}" href="{{ route('blue') }}">Blue</a>
    </li>
    <li>
        <a class="{{ isActivePage('color/red') }}" href="{{ route('red') }}">Red</a>
    </li>
    <li>
        <a class="{{ isActivePage('color/yellow') }}" href="{{ route('yellow') }}">Yellow</a>
    </li>
    <li>
        <a class="{{ isActivePage('color/green') }}" href="{{ route('green') }}">Green</a>
    </li>
    <li>
        <a class="{{ isActivePage('color/violet') }}" href="{{ route('violet') }}">Violet</a>
    </li>
    <li>
        <a class="{{ isActivePage('blur/*') }}" href="{{ route('blur', 'grey') }}">Blur</a>
    </li>
</ul>

@yield('content')

</body>
</html>