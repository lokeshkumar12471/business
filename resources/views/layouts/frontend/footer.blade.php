<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Gp<span>.</span></h3>
                        <p>
                            A108 Adam Street <br />
                            NY 535022, USA<br /><br />
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> info@example.com<br />
                        </p>
                        <div class="social-links mt-3">
                            <a href="{{ asset('https://twitter.com/privategpgroup') }}" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="{{ asset('https://www.facebook.com/GPCompanyGlass/') }}" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="{{ asset('https://www.instagram.com/thegpgroup/?hl=en') }}" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="{{ asset('https://www.linkedin.com/company/georgia-pacific-llc/') }}"
                                class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a
                                href="{{ asset('https://www.citizensinformation.ie/en/health/health_services/gp_and_hospital_services/') }}">Home</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a
                                href="{{ asset('https://www.citizensinformation.ie/en/about_citizens_information.html') }}">About
                                us</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a
                                href="{{ asset('https://www.citizensinformation.ie/en/accessibility.html') }}">Services</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{ asset('https://www.citizensinformation.ie/en/disclaimer.html') }}">Terms of
                                service</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{ asset('https://www.citizensinformation.ie/en/privacy.html') }}">Privacy
                                policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a
                                href="{{ asset('https://www.interaction-design.org/literature/topics/web-design') }}">Web
                                Design</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href={{ asset('https://www.techopedia.com/definition/23889/web-development') }}>Web
                                Development</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a
                                href={{ asset('https://theproductmanager.com/topics/best-product-management-blogs/') }}>Product
                                Management</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href={{ asset('https://contentsnare.com/best-graphic-design-websites/') }}>Graphic
                                Design</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>
                        Tamen quem nulla quae legam multos aute sint culpa legam noster
                        magna
                    </p>
                    <form action="{{ route('admin.newsletter.store') }}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="please enter your email" autocomplete="off" />
                        <input type="submit" value="Subscribe" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
<script>
    var msg = '{{ Session::get('alert') }}';
    var exist = '{{ Session::has('alert') }}';
    if (exist) {
        alert(msg);
    }
</script>
<!-- End Footer -->
