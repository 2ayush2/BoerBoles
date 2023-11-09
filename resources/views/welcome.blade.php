@extends('layouts.app')

@section('title',"Home")

@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/CoverPic1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Welcome to</span>
            <h1 class="display-4"><span class="text-primary-light">Boerboel</span> <span class="text-secondary">Academy</span> <span class="text-primary-light">Breed Society (BABS&trade;)</span></h1>
            <span class="subhead"><i>Protecting the past, breeding for the future</i></span>
        </div>
    </div>
</div>


<div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary  text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                        <p><span>Learn</span> <strong>about</strong> the Boerboel</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>Learn</span> about <strong>protecting</strong> the Boerboel</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <span class="fas fa-random"></span>
                        </div>
                        <p><span>Learn</span> about <strong>breeding for the future</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h2>A quick intro</h1>
                        <p class="text-grey mb-4">
                            <br> We are a Breed Society, registered since 2016 in Namibia under the Livestock Improvement Act of 1977. We are registered with Namibia Stud Breeders Association (NSBA) which is the equivalent of SA Studbook. Our official office is in Kroonstad, South Africa with a fast growing membership spanning the globe including the Netherlands, USA, Fiji, Australia, Namibia and South Africa.
                            <br><br> Namibia is a country that was previously governed by South Africa and is its north west neighbour. Prior to Namibia's independence in 1990 there was no border between South Africa and Namibia. Given this close historical bond with South Africa, the Boerboel shares the same long history in this country.
                            <br><br> Our vision is for the Boerboel breed to stand tall among its fellow breeds, true to its original breed standard, and embodying the vision of its founders.
                            <br><br> To realize this vision, we have deliberately chosen <strong><i>education</i></strong> as our driving force to propel us towards protecting the Boerboel and helping breeders achieve the Breed Standard.
                        <blockquote class="blockquote">
                            <p class=mb-0">Education is the most powerful weapon which you can use to change the world.</p>
                            <footer class="blockquote-footer">Nelson Mandela</footer>
                        </blockquote>
                        </p>
                        <a href="about.html" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1 " style="overflow: visible;">
                        <img src="{{ asset('assets/img/World-Data-Locator-Map-Namibia.webp')}}" alt="" style="z-index:2;position: absolute;">
                        <img src="{{ asset('assets/img/YsterOld.jpg')}}" alt="" style="left: 300px;top:-100px;position: absolute;">
                        <img src="{{ asset('assets/img/Yster.png')}}" alt="" style="left: 250px;position: relative;z-index: 3;">
                    </div>
                    <figcaption class="figure-caption" style="left: 10px;position: absolute;margin-left: 85px;">"Yster" is a Namibian Boerboel featured in The Farmers Weekly article on the Boerboel in 1997</figcaption>

                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

{{--
<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Breeders</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/Kompaan2.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Kompaan Boerboels</p>
                        <span class="text-sm text-grey">Netherlands</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/targaryen-logo2a.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Targaryen Boerboels</p>
                        <span class="text-sm text-grey">Australia (Western Australia)</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/fortitude-logo.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Fortitude Boerboels</p>
                        <span class="text-sm text-grey">Australia (Tasmania)</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/primal-logo.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Primal Boerboels</p>
                        <span class="text-sm text-grey">Australia (New South Wales)</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/kaizenboerboelslogo_noSince_brown2_transparent.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Kaizen Boerboels</p>
                        <span class="text-sm text-grey">Australia (New South Wales)</span>
                    </div>
                </div>
            </div>
        </div>
        <blockquote class="blockquote">
            <p class=mb-0">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” —Malcolm X</p>
            <footer class="blockquote-footer">Malcolm X</footer>
        </blockquote>

    </div>
</div>

<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="#">Covid19</a>
                        </div>
                        <a href="blog-details.html" class="post-thumb">
                            <img src="{{ asset('assets/img/blog/blog_1.jpg')}}" alt="">
</a>
</div>
<div class="body">
    <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
    <div class="site-info">
        <div class="avatar mr-2">
            <div class="avatar-img">
                <img src="{{ asset('assets/img/person/person_1.jpg')}}" alt="">
            </div>
            <span>Roger Adams</span>
        </div>
        <span class="mai-time"></span> 1 week ago
    </div>
</div>
</div>
</div>
<div class="col-lg-4 py-2 wow zoomIn">
    <div class="card-blog">
        <div class="header">
            <div class="post-category">
                <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
                <img src="{{ asset('assets/img/blog/blog_2.jpg')}}" alt="">
            </a>
        </div>
        <div class="body">
            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
            <div class="site-info">
                <div class="avatar mr-2">
                    <div class="avatar-img">
                        <img src="{{ asset('assets/img/person/person_1.jpg')}}" alt="">
                    </div>
                    <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 py-2 wow zoomIn">
    <div class="card-blog">
        <div class="header">
            <div class="post-category">
                <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
                <img src="{{ asset('assets/img/blog/blog_3.jpg')}}" alt="">
            </a>
        </div>
        <div class="body">
            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
            <div class="site-info">
                <div class="avatar mr-2">
                    <div class="avatar-img">
                        <img src="{{ asset('assets/img/person/person_2.jpg')}}" alt="">
                    </div>
                    <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
            </div>
        </div>
    </div>
</div>

<div class="col-12 text-center mt-4 wow zoomIn">
    <a href="blog.html" class="btn btn-primary">Read More</a>
</div>

</div>
</div>
</div> <!-- .page-section -->
--}}

@endsection