<div class="header-area">
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="main-responsive-nav">
            <div class="container">
                <div class="mobile-nav">
                    <a href="/" class="logo"><img src="{{asset('assets/web/images/small-logo.png')}}" alt="logo"></a>
                    <ul class="menu-sidebar menu-small-device">
                        <li><a class="default-button" href="/contact-us">Request a CALLBACK</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/about-us" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/feather" class="nav-link {{ Request::is('feather') ? 'active' : '' }}">
                                    Feather
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fibre" class="nav-link {{ Request::is('fibre') ? 'active' : '' }}">
                                    Fibre
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/foam" class="nav-link {{ Request::is('foam') ? 'active' : '' }}">
                                    Foam
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/combination-filling"
                                   class="nav-link {{ Request::is('combination-filling') ? 'active' : '' }}">
                                    Combination Filling
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cad-cutting"
                                   class="nav-link {{ Request::is('cad-cutting') ? 'active' : '' }}">
                                    CAD/Cutting
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/sewing" class="nav-link {{ Request::is('sewing') ? 'active' : '' }}">
                                    Sewing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/transport" class="nav-link {{ Request::is('transport') ? 'active' : '' }}">
                                    Transport
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact-us" class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
