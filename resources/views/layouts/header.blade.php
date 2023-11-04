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
                        <a href="https://www.facebook.com/groups/664919947349983"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
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
                            <a class="dropdown-item" href="#">Who we are</a>
                            <a class="dropdown-item" href="#">Corporate Governance</a>
                            <a class="dropdown-item" href="#">Our Breeders</a>
                            <a class="dropdown-item" href="#">Our Partners</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Membership</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">The Boerboel</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">What is a Boerboel</a>
                            <a class="dropdown-item" href="#">Protecting the Boerboel Breed</a>
                            <a class="dropdown-item" href="#">Breeding for the Future</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">The Boerboel Breed Standard</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Learning Resources
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Buying a Boerboel</a>
                            <a class="dropdown-item" href="#">Owning a Boerboel</a>
                            <a class="dropdown-item" href="#">Breeding Boerboels</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Articles</a>
                            <a class="dropdown-item" href="#">Videos</a>

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