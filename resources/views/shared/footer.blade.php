<?php
$icons = [
    [
        'name' => 'Digital Comics',
        'src' => Vite::asset('resources/img/buy-comics-digital-comics.png'),
        'alt' => 'digital',
    ],
    [
        'name' => 'Dc Merchandise',
        'src' => Vite::asset('resources/img/buy-comics-merchandise.png'),
        'alt' => 'merchandise',
    ],
    [
        'name' => 'Subscription',
        'src' => Vite::asset('resources/img/buy-comics-subscriptions.png'),
        'alt' => 'subscription',
    ],
    [
        'name' => 'Comic Shop Locator',
        'src' => Vite::asset('resources/img/buy-comics-shop-locator.png'),
        'alt' => 'shop locator',
    ],
    [
        'name' => 'Dc Power Visa',
        'src' => Vite::asset('resources/img/buy-dc-power-visa.svg'),
        'alt' => 'power visa',
    ],
];
?>

<footer>
    <section class="icons-section">
        <div class="container">
            <ul class="d-flex justify-content-between">
                @foreach ($icons as $icon)
                    <li class="d-flex align-items-center">
                        <div class="img-container">
                            <img src="{{ $icon['src'] }}" alt="{{ $icon['alt'] }}">
                        </div>
                        <a href=""> {{ $icon['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="link-section">
        <div class="container d-flex">
            <div>
                <ul>
                    <li>
                        <h3 class="text-uppercase text-dark">Dc Comics</h3>
                    </li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Comics</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">TV</a></li>
                    <li><a href="">Games</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">News</a></li>
                </ul>
                <ul>
                    <li>
                        <h3 class="text-uppercase text-dark">Shop</h3>
                    </li>
                    <li><a href="">Shop DC</a></li>
                    <li><a href="">Shop DC Collectibles</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <h3 class="text-uppercase text-dark">Dc</h3>
                    </li>
                    <li><a href="">Terms of Use</a></li>
                    <li><a href="">Privacy policy (New)</a></li>
                    <li><a href="">Ad Choices</a></li>
                    <li><a href="">Advertisement</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Subscriptions</a></li>
                    <li><a href="">Talent Workshop</a></li>
                    <li><a href="">CPSC Certificates</a></li>
                    <li><a href="">Ratings</a></li>
                    <li><a href="">Shop Help</a></li>
                    <li><a href="">Contact Us </a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <h3 class="text-uppercase text-dark">Sites</h3>
                    </li>
                    <li><a href="">DC</a></li>
                    <li><a href="">MAD Magazine</a></li>
                    <li><a href="">DC Kids</a></li>
                    <li><a href="">DC Universe</a></li>
                    <li><a href="">DC Power Visa</a></li>
                </ul>
            </div>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Big Logo">
        </div>
    </section>

    <section class="socials-section">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="btns btn-footer text-uppercase">Sign-up Now!</button>
            <div class="d-flex align-items-center">
                <div class="text-uppercase"><a href="">Follow Us</a></div>
                <ul class="d-flex">
                    <li>
                        <a href="/"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                                alt="facebook" /></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                                alt="periscope" /></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                                alt="pinterest" /></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}"
                                alt="twitter" /></a>
                    </li>
                    <li>
                        <a href="/"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}"
                                alt="youtube" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>
