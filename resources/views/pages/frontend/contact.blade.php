<x-guest-layout>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div>
                <iframe style="border: 0; width: 100%; height: 270px" src="{{ $gmap_link }}" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>{{ $contacta_title }}</h4>
                            <p>{{ $contacta_description }}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>{{ $contacte_title }}</h4>
                            <p>{{ $contacte_description }}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>{{ $contactp_title }}</h4>
                            <p>{{ $contactp_description }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="{{ route('admin.contact.store') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required />
                            </div>
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required />
                            </div>
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required />
                        </div>
                        @error('subject')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        @error('message')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                        <br>
                        <script>
                            var msg = '{{ Session::get('alert') }}';
                            var exist = '{{ Session::has('alert') }}';
                            if (exist) {
                                alert(msg);
                            }
                        </script>
                        <div class="text-center">
                            <button type="submit " class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</x-guest-layout>
