<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-mail text-primary"></span> info@boerboelacademy.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-sm text-center text-primary"><strong>BABS</strong>&trade;</div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm " id="myNav1">
        <div class="container">
            <a class="navbar-brand text-primary" href="{{route('home.index')}}"><img src="{{asset('assets/img/Concept 2.svg')}}" style="height:30px;">Boerboel<span class="text-secondary"> Academy</span> Breed Society</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('content.show','who-we-are')}}">Who we are</a>
                            <a class="dropdown-item" href="{{route('content.show','corporate-governance')}}">Corporate Governance</a>
                            <a class="dropdown-item" href="{{route('content.show','our-breeders')}}">Our Breeders</a>
                            <a class="dropdown-item" href="{{route('content.show','our-partners')}}">Our Partners</a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">The Boerboel</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('content.show','what-is-boerboel')}}">What is a Boerboel</a>
                            <a class="dropdown-item" href="{{route('content.show','protecting-boerboel-breed')}}">Protecting the Boerboel Breed</a>
                            <a class="dropdown-item" href="{{route('content.show','breed-for-future')}}">Breeding for the Future</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('content.show','boerboel-breed-standard')}}">The Boerboel Breed Standard</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Learning Resources
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('content.show','buying-a-boerboel')}}">Buying a Boerboel</a>
                            <a class="dropdown-item" href="{{route('content.show','owning-a-boerboel')}}">Owning a Boerboel</a>
                            <a class="dropdown-item" href="{{route('content.show','breeding-boerboels')}}">Breeding Boerboels</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('content.show','articles')}}">Articles</a>
                            <a class="dropdown-item" href="{{route('content.show','videos')}}">Videos</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" target="_blank" href="https://dev.regan.dogclubonline.com.au/auth/login?id=1">Members Portal</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>