<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">

    <link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="/css/animate.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Affomato | {{ $title }} </title>
</head>

<body>
    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/css/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/nivo-lightbox.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
<br>
<footer>
    <div class="footer-content">
        <h3>Affomato</h3>
        <p>A Delectable Distinguished Affomato Like No Other. Exclusive & Unorthodox. A Feast for the Palette. A Break
            From the Hustle, Residing On A Rooftop Evoking Moments To Remember,Whisper to us about your feelings and we
            will prepare what you need now.</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
        </ul>
    </div>
    <div class="div footer-bottom">
        <p>copyright &copy; 2022 Affomato. design by. <a href="/about">Team Exypnos</a></p>
    </div>
</footer>


</html>
