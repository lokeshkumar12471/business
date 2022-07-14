<x-guest-layout>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
                    <h2>We are team of talented digital marketers</h2>
                </div>
            </div>
            <div class="row gy-4 mt-5 justify-content-center aos-init aos-animate" data-aos="zoom-in"
                data-aos-delay="250">
                @foreach ($data as $item)
                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            {{ print_r($item->logo) }}
                            <h3><a href="">{{ $item->title }}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($about as $item)
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('Upload/images/about/' . $item->image) }}" class="testimonial-img"
                            alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>
                            {{ $item->title }}
                        </h3>
                        <p class="fst-italic">
                            {{ $item->description }}
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Duis aute irure dolor in
                                reprehenderit in voluptate velit.
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate trideta storacalaperda mastiro
                                dolore eu fugiat nulla pariatur.
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div>
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon">{{ $item->logo }}</i></div>
                            <h4><a href="">{{ $item->title }}</a></h4>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    @foreach ($portfolio as $item)
                        <div class="portfolio-wrap">
                            <img src="{{ asset('Upload/images/portfolio/app/' . $item->app) }}"width="420px"
                                height="200px" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('Upload/images/portfolio/web/' . $item->web) }}"width="420px"
                            height="200px" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('Upload/images/portfolio/card/' . $item->card) }}"width="420px"
                            height="200px" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testimonial as $item)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('Upload/images/testimonial/' . $item->image) }}""
                                class="testimonial-img" alt="">
                            <h3>{{ $item->title }}</h3>
                            <h4>{{ $item->role }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $item->description }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
            </div>
            <div class="row">
                @foreach ($team as $item)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('Upload/images/team/' . $item->image) }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->title }}</h4>
                                <span>{{ $item->role }}</span>
                                <h4>{{ $item->description }}</h4>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Team Section -->
</x-guest-layout>
