@extends('website.master')
@section('title')
    Home | Devs Ease ltd
@endsection
@section('main-section')
        <!-- banner-area -->
        <section class="banner">
            <div class="container custom-container">
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="banner__img text-center text-xxl-end">
                            <img src="{{ asset($heroSection->slide_image) }}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content">
                            <h1 class="wow fadeInUp justify-content-around"  data-wow-delay=".2s">{{ $heroSection->title }}</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{ $heroSection->short_title }}</p>
                            <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__down">
                <a href="#aboutSection" class="scroll__link">Scroll down</a>
            </div>
            <div class="banner__video">
                <a href="{{$heroSection->video_url }}" class="popup-video"><i class="fas fa-play"></i></a>

        </section>
        <!-- banner-area-end -->

        <!-- about-area -->
        <section id="aboutSection" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="about__icons__wrap">
                            @foreach($multiImg as $itm)
                            <li>
                                <img class="light" src="{{asset($itm->multi_image)}}" alt="XD">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">01 - About me</span>
                                <h2 class="title">I have transform your ideas into remarkable digital products</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="{{asset('frontend/')}}/assets/img/icons/about_icon.png" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p></p>
                                </div>
                            </div>
                            <p class="desc"></p>
                            <a href="about.html" class="btn">Download my resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services">
            <div class="container">
                <div class="services__title__wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="section__title">
                                <span class="sub-title">02 - my Services</span>
                                <h2 class="title">Creates amazing digital experiences</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-4">
                            <div class="services__arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 services__active">
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{asset('frontend/')}}/assets/img/images/services_img01.jpg" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{asset('frontend/')}}/assets/img/icons/services_light_icon01.png" alt="">
                                    <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/services_icon01.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>Research & Data</li>
                                    <li>Branding & Positioning</li>
                                    <li>Business Consulting</li>
                                    <li>Go To Market</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{asset('frontend/')}}/assets/img/images/services_img02.jpg" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{asset('frontend/')}}/assets/img/icons/services_light_icon02.png" alt="">
                                    <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/services_icon02.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{asset('frontend/')}}/assets/img/images/services_img03.jpg" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{asset('frontend/')}}/assets/img/icons/services_light_icon03.png" alt="">
                                    <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/services_icon03.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{asset('frontend/')}}/assets/img/images/services_img04.jpg" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{asset('frontend/')}}/assets/img/icons/services_light_icon04.png" alt="">
                                    <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/services_icon04.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="{{asset('frontend/')}}/assets/img/images/services_img03.jpg" alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="{{asset('frontend/')}}/assets/img/icons/services_light_icon02.png" alt="">
                                    <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/services_icon02.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- work-process-area -->
        <section class="work__process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">03 - Working Process</span>
                            <h2 class="title">A clear product design process is the basis of success</h2>
                        </div>
                    </div>
                </div>
                <div class="row work__process__wrap">
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 01</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/wp_light_icon01.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/wp_icon01.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Discover</h4>
                                <p>Initial ideas or inspiration & Establishment of user needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 02</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/wp_light_icon02.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/wp_icon02.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Define</h4>
                                <p>Interpretation & Alignment of findings to project objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 03</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/wp_light_icon03.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/wp_icon03.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Develop</h4>
                                <p>Design-Led concept and Proposals hearted & assessed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 04</span>
                            <div class="work__process__icon">
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/wp_light_icon04.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/wp_icon04.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Deliver</h4>
                                <p>Process outcomes finalised & Implemented</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-process-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">04 - Portfolio</span>
                            <h2 class="title">All creative work</h2>
                        </div>
                    </div>
                </div>
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-xl-10 col-lg-12">--}}
{{--                        <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"--}}
{{--                                        role="tab" aria-controls="all" aria-selected="true">All</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"--}}
{{--                                        role="tab" aria-controls="website" aria-selected="false">website</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps" type="button" role="tab" aria-controls="apps" aria-selected="false">mobile apps</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button"--}}
{{--                                        role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing" type="button"--}}
{{--                                        role="tab" aria-controls="landing" aria-selected="false">landing page</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button"--}}
{{--                                        role="tab" aria-controls="branding" aria-selected="false">Branding</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic" type="button"--}}
{{--                                        role="tab" aria-controls="graphic" aria-selected="false">Graphic Design</button>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    @foreach($portfolio as $item)
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img width="1020px" height="519px" src="{{asset($item->portfolio_image)}}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>{{$item->portfolio_title}}</span>
                                            <h4 class="title"><a href="{{ route('portfolio.details',['id'=>$item->id]) }}">{{$item->portfolio_name}}</a></h4>
                                            <a href="{{ route('portfolio.details',['id'=>$item->id]) }}" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- portfolio-area-end -->

        <!-- partner-area -->
        <section class="partner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="partner__logo__wrap">
                            <li>
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/partner_light01.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/partner_01.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/partner_light02.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/partner_02.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/partner_light03.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/partner_03.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/partner_light04.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/partner_04.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/partner_light05.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/partner_05.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="{{asset('frontend/')}}/assets/img/icons/partner_light06.png" alt="">
                                <img class="dark" src="{{asset('frontend/')}}/assets/img/icons/partner_06.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="partner__content">
                            <div class="section__title">
                                <span class="sub-title">05 - partners</span>
                                <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                            </div>
                            <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                            <a href="contact.html" class="btn">Start a conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <ul class="testimonial__avatar__img">
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img01.png" alt=""></li>
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img02.png" alt=""></li>
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img03.png" alt=""></li>
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img04.png" alt=""></li>
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img05.png" alt=""></li>
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img06.png" alt=""></li>
                            <li><img src="{{asset('frontend/')}}/assets/img/images/testi_img07.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial__wrap">
                            <div class="section__title">
                                <span class="sub-title">06 - Client Feedback</span>
                                <h2 class="title">Happy clients feedback</h2>
                            </div>
                            <div class="testimonial__active">
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="{{ route('blog.details') }}"><img width="300px" height="300px" src="{{asset($blog->blog_image)}}" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">{{ $blog['category']['blog_category'] }}</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                <h3 class="title"><a href="blog-details.html">{{ $blog->blog_title }}</a></h3>
                                <a href="{{ route('blog.details') }}" class="read__more">Read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blog__button text-center">
                    <a href="blog.html" class="btn">more blog</a>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- contact-area -->
        <section class="homeContact">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
@endsection
