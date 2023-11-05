
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Hyip Pro,  A Modern Hyip Investmet Platform" name="description"/>
<meta content="investment, HYIP, HYIP investment, hyip website, invest, investment, Investment Management system, investment script, Bug Finder, bug-finder, bugfinder.net, bugfinder" name="keywords"/>
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('darkpurple/uploads/logo/favicon.png') }}">
<link href="{{asset('darkpurple/uploads/logo/logo.png')}}" rel="apple-touch-icon"/>
<title>Hyipprs | Home</title>
<link href="{{asset('uploads/logo/favicon.png')}}" rel="icon" sizes="16x16" type="image/png"/>
<!-- <meta property="og:url" content="https://script.bugfinder.net/hyippro/purple"> -->
<meta content="summary_large_image" name="twitter:card"/>
<!-- <link rel="stylesheet" type="text/css" href="/themes/darkpurple/css/bootstrap.min.css"> -->
<link href="{{asset('darkpurple/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('darkpurple/css/animate.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('darkpurple/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('darkpurple/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('darkpurple/css/aos.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('darkpurple/css/style.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/style_dashboard.css') }}"/>
<script src="{{asset('darkpurple/js/fontawesomepro.js')}}"></script>
<script src="{{asset('darkpurple/js/modernizr.custom.js')}}"></script>

<style>
    .how-it-work::before {
        background-image: url("{{ asset('uploads/content/6059d2c2654921616499394.jpg') }}");
    }
</style>
<!-- <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
</head>

<body>
    <header id="header-section">
        <div class="overlay">
        <!-- TOPBAR -->
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
            <a class="navbar-brand" href="https://script.bugfinder.net/hyippro/purple"> <img alt="Hyippro" src="{{asset('uploads/logo/logo.png')}}"/></a>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler p-0" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <i aria-hidden="true" class="far fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active"  href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('plan')}}">Plan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://script.bugfinder.net/hyippro/purple/blog">Portal Académico</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://script.bugfinder.net/hyippro/purple/faq">FAQ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('login')}}">Login</a>
            </li>
            </ul>
            </div>
            </div>
        </nav>
        <!-- /TOPBAR -->
        </div>
        </header><style>
            .banner-section {
                background-image: url("{{asset('uploads/logo/partials_darkpurple_banner.png')}}") !important;
            }
        </style>
    @yield('content')
    
    <!-- Common scripts -->
    <script src="{{asset('darkpurple/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('darkpurple/js/jquery-3.6.0.min.js')}}">
    </script><script src="{{asset('darkpurple/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('darkpurple/js/aos.js')}}"></script>
    <script src="{{asset('darkpurple/js/socialSharing.js')}}"></script>
    <script src="{{asset('global/js/notiflix-aio-2.7.0.min.js')}}"></script>
    <script src="{{asset('global/js/pusher.min.js')}}"></script>
    <script src="{{asset('global/js/vue.min.js')}}"></script>
    <script src="{{asset('global/js/axios.min.js')}}"></script>
    <script src="{{asset('darkpurple/js/script.js')}}"></script>
    <script>
            "use strict";
            (function ($) {
                $(document).on('click', '.investNow', function () {
                    var planModal = new bootstrap.Modal(document.getElementById('investNowModal'))
                    planModal.show()
                    let data = $(this).data('resource');
                    let price = $(this).data('price');
                    let symbol = "$";
                    let currency = "USD";
                    $('.price-range').text(`Invest: ${price}`);

                    if (data.fixed_amount == '0') {
                        $('.invest-amount').val('');
                        $('#amount').attr('readonly', false);
                    } else {
                        $('.invest-amount').val(data.fixed_amount);
                        $('#amount').attr('readonly', true);
                    }

                    $('.profit-details').html(`Interest: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}`);
                    $('.profit-validity').html(`Per ${data.schedule} hours ,  ${(data.is_lifetime == '0') ? `${data.repeatable} times` : `Lifetime`}`);
                    $('.plan-name').text(data.name);
                    $('.plan-id').val(data.id);
                    $('.show-currency').text("USD");
                });

            })(jQuery);

        </script>
</body>
</html>
