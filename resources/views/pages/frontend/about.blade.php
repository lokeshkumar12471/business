<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach ($data as $item)
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
</x-guest-layout>
