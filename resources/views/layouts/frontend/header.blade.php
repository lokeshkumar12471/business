<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0">
            <a href="{{ asset('https://www.premjee.com/') }}">Gp<span>.</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul id="nav">
                <li><a class="nav-link scrollto" id="home" href="{{ route('#home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('#about') }}">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('#services') }}">Services</a></li>
                <li><a class="nav-link scrollto" href="{{ route('#portfolio') }}">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="{{ route('#team') }}">Team</a></li>
                <li><a class="nav-link scrollto" href="{{ route('#contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        <a href="{{ asset('https://spin.atomicobject.com/2020/06/28/learn-indie-game-dev/') }}"
            class="get-started-btn scrollto">Get Started</a>
    </div>
</header>
<!-- End Header -->
<br><br><br>
<script>
    $(function() {
        var current = location.pathname;
        if (current == '/') {
            $('#home').addClass('active');
        } else {


            $('#nav li a').each(function() {
                var $this = $(this);
                // if the current path is like this link, make it active
                if ($this.attr('href').indexOf(current) !== -1) {
                    $this.addClass('active');
                }

            })
        }
    })
</script>
