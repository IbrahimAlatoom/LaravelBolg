<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
            <h1 class="text-center">Blog</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">            
            <ul>
                <li class="tm-nav-item {{Request::routeIs('home') ? 'active' : ''}}"><a href="{{route('home')}}" class="tm-nav-link">
                    <i class="fas fa-home"></i>
                    Blog Home
                </a></li>
                <li class="tm-nav-item {{Request::routeIs('post') ? 'active' : ''}}"><a href="{{route('post',['id'])}}" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Single Post
                </a></li>
                <li class="tm-nav-item {{Request::routeIs('about') ? 'active' : ''}}"><a href="{{route('about')}}" class="tm-nav-link">
                    <i class="fas fa-users"></i>
                    About Xtra
                </a></li>
                <li class="tm-nav-item {{Request::routeIs('contact') ? 'active' : ''}}"><a href="{{route('contact')}}" class="tm-nav-link">
                    <i class="far fa-comments"></i>
                    Contact Us
                </a></li>

                @guest
                <li class="tm-nav-item {{Request::routeIs('login') ? 'active' : ''}}"><a href="{{route('login')}}" class="tm-nav-link">
                    <i class="far fa-comments"></i>
                    Login
                </a></li>
                <li class="tm-nav-item {{Request::routeIs('register') ? 'active' : ''}}"><a href="{{route('register')}}" class="tm-nav-link">
                    <i class="far fa-comments"></i>
                    Register
                </a></li>
                @endguest
                @auth 
                <li class="tm-nav-item {{Request::routeIs('dashboard') ? 'active' : ''}}"><a href="{{route('dashboard')}}" class="tm-nav-link">
                    <i class="far fa-comments"></i>
                    dashboard
                </a></li>
                @endauth
            </ul>
        </nav>
        <div class="tm-mb-65">
            <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                <i class="fab fa-facebook tm-social-icon"></i>
            </a>
            <a href="https://twitter.com" class="tm-social-link">
                <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a href="https://instagram.com" class="tm-social-link">
                <i class="fab fa-instagram tm-social-icon"></i>
            </a>
            <a href="https://linkedin.com" class="tm-social-link">
                <i class="fab fa-linkedin tm-social-icon"></i>
            </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
            Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
        </p>
    </div>
</header>