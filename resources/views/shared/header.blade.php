<?php

$links = [
    [
        'name' => 'Characters',
        'link' => '',
    ],
    [
        'name' => 'Comics',
        'link' => '',
    ],
    [
        'name' => 'Movies',
        'link' => '',
    ],
    [
        'name' => 'Tv',
        'link' => '',
    ],
    [
        'name' => 'Games',
        'link' => '',
    ],
    [
        'name' => 'Collectibles',
        'link' => '',
    ],
    [
        'name' => 'Videos',
        'link' => '',
    ],
    [
        'name' => 'Fans',
        'link' => '',
    ],
    [
        'name' => 'News',
        'link' => '',
    ],
    [
        'name' => 'Shop',
        'link' => '',
    ],
];
?>

<header>
    <div class="container d-flex justify-content-between align-items-center">
        {{-- logo --}}
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </a>

        {{-- nav --}}
        <nav class="h-100">
            <ul class="d-flex">
                @foreach ($links as $link)
                    <li>
                        <a href="{{ route('prodotto') }}" class="d-flex align-items-center">{{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
