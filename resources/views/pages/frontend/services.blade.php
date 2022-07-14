<x-guest-layout>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div>
            <div class="row">
                @foreach ($data as $item)
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
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>{{ $services_title }}</h3>
                <p>
                    {{ $services_description }}
                </p>
                <a class="cta-btn" href="#">{{ $services_button }}</a>
            </div>
        </div>
    </section>
    <!-- End Cta Section -->
</x-guest-layout>
