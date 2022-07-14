<x-guest-layout>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
            </div>
            <div class="row">
                @foreach ($data as $item)
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
