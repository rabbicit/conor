<section class="intro full-width jIntro" id="anchor00">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-intro">
                    <div id="slides">
                        <div class="overlay"></div>
                        <div class="slides-container">
                            <img src="{{ asset('images/intro-slide1.jpg') }}" alt="slide1">
                            <img src="{{ asset('images/intro-slide2.jpg') }}" alt="slide2">
                            <img src="{{ asset('images/intro-slide3.jpg') }}" alt="slide3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vcenter text-center text-overlay">
            <div class="logo-intro"><img src="{{ asset('images/logo-intro.png') }}" alt=""></div>
            <div id="owl-main-text" class="owl-carousel">
                <div class="item">
                    <h1 class="primary-title">DISTRIBUTE YOUR MUSIC</h1>
                </div>
                <div class="item">
                    <h1 class="primary-title">YOUR WAY</h1>
                </div>
            </div>
            <h2 class="subtitle-text">Release your music for the world to hear</h2>
            <h2 class="subtitle-text">Keep 100% ownership of your music.</h2>
            <div class="voffset50"></div>
            <a href="#" class="btn btn-invert">Sign Up</a>
        </div>

    </div>
</section>
<!-- TOUR DATES -->
<section class="section full-width tourdates" id="anchor05">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset90"></div>
                <p class="pretitle">See our steps, its easy to work.</p>
                <div class="voffset20"></div>
                <h2 class="title">How it works</h2>
                <div class="voffset60"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="image-tour"></div>
            </div>
            <div class="col-sm-6">
                <div class="tour-info">
                    <ul class="carousel-dates jcarouselDates">
                        <li class="gallery-cell" id="tour1">
                            <div class="vcenter">
                                <p class="name-tour">Register<br>With Us</p>
                                <p class="separator">Now</p>
                                <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon">Register Now</a>
                                </p>
                            </div>
                        </li>
                        <li class="gallery-cell" id="tour2">
                            <div class="vcenter">
                                <p class="name-tour">Add your Music</p>
                                <p class="separator">Now</p>
                                <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon">Add Music</a>
                                </p>
                            </div>
                        </li>
                        <li class="gallery-cell" id="tour3">
                            <div class="vcenter">
                                <p class="name-tour">Releasing</p>
                                <p class="separator">IT</p>
                                <p class="subtitle-tour">Top Wave releasing it to the stores</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon">Add Now</a>
                                </p>
                            </div>
                        </li>
                        <li class="gallery-cell" id="tour3">
                            <div class="vcenter">
                                <p class="name-tour">Get Profit</p>
                                <p class="separator">Now</p>
                                <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon">See Profit</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="dates-tour button-group">
                        <li class="button active">
                            Step
                            <span>01</span>
                        </li>
                        <li class="button">
                            Step
                            <span>02</span>
                        </li>
                        <li class="button">
                            Step
                            <span>03</span>
                        </li>
                        <li class="button">
                            Step
                            <span>04</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="choose-deals">
    <div class="container">
        <div class="choose-area">
            <h2>Choose Your Deal</h2>
            <p>We believe artists should have options. Stick with our 90/10 royalty deal for no upfront fee or choose Top Wave Music Select and keep 100% of the money you make.</p>
            <div class="pricing-packages">

                @foreach($plans as $plan)
                <div class="another-row">
                    <div class="single-pricing">
                        <input id="p1" type="radio" name="package" wire:model="package" value="{{ route('plans.show', $plan->slug) }}">
                        <label for="p1"></label>
                        <div class="pricing-box">
                            <h4>{{ $plan->name }}</h4>
                            <p>{{ $plan->description }}</p>
                            <h1>{{ number_format($plan->cost, 2) }}</h1>
                            <h6>USD/year</h6>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
<!-- BIOGRAPHY -->
<section class="section biography inverse-color" id="anchor03">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="voffset30"></div>
                <p class="pretitle">About Us</p>
                <div class="voffset20"></div>
                <h2 class="title">TOPWAVEMUSIC</h2>
                <div class="voffset110"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('images/biography.jpg') }}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="voffset50"></div>
                <div class="quote">
                    <p>"If I can play one note and make you cry, then that's better than thouse fancy dancers playing twenty notes."</p>
                    <p class="author">Robbie Robertson</p>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iure blanditiis velit, suscipit quidem fuga, magni repudiandae atque placeat sint corporis commodi praesentium dolore necessitatibus minima nemo ipsam, perspiciatis
                        libero, quos. Obcaecati consectetur vel nostrum praesentiu.</p>
                    <p>Obcaecati consectetur vel nostrum praesentium dolore necessitatibus minima nemo ipsam, perspiciatis libero, quos, odio quaerat asperiores repudiandae atque placeat sint corporis commodi onsectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="voffset150"></div>
    </div>
</section>
<section class="two-boxes">
    <div class="container">
        
    </div>
</section>
<section class="signupnewslatter">
    <div class="container">
        <div class="signup-newslatteer">
            <h2>Signup with Newsletter</h2>
            <p>Give us your e-mail so we can give you 25% off next time you visit us</p>
            <form class="Signup__form" id="newsletter">
                <input required id="email" name="email" type="email" placeholder="Your e-mail">
                <button form="newsletter" type="submit" class="Signup__button">Get offers</button>
              </form>
        </div>
    </div>
</section>
