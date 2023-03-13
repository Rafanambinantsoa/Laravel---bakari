@extends('.accueil.template.base')

@section('body-content')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{asset('maison/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="{{asset('maison/css/swiper-icons.css')}}">
    <link rel="stylesheet" href="{{"maison/fonts/font-awesome.min.css"}}">
    <link rel="stylesheet" href="{{asset('maison/css/Simple-Slider-swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('maison/css/Simple-Slider.css')}}">
<body>
<section class="text-center bg-light features-icons">
    <div class="container">
        <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(&quot;{{asset('/images/'.$logements->image1)}}&quot;) center center / cover no-repeat;"></div>
                    <div class="swiper-slide" style="background: url(&quot;{{asset('/images/'.$logements->image2)}}&quot;) center center / cover no-repeat;"></div>
                    <div class="swiper-slide" style="background: url(&quot;{{asset('/images/'.$logements->image3)}}&quot;) center center / cover no-repeat;"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 my-auto order-lg-1 showcase-text" style="padding-top: 0px;margin-bottom: 0px;padding-bottom: 49px;">
                <h2>Descriptions :&nbsp;</h2>
                <p class="lead mb-0">{{$logements->description}}</p>
            </div>
            <div class="col-lg-6 col-xl-4 my-auto order-lg-1 showcase-text" style="margin-bottom: 12px;"><a class="btn btn-info" href="#" style="margin-right: -45px;">Acheter cette maison</a></div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                <h2></h2>
            </div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text" style="padding-top: 15px;">
                <h2 style="margin-left: -134px;padding-left: 42px;">Infos principale de la maison&nbsp;&nbsp;</h2>
                <p class="lead mb-0" style="margin-left: -66px;"><u> <strong>Prix : </strong> </u> {{$logements->description}}
                    <br> <u> <strong>superficie : </strong> </u> {{$logements->superficie}} mettre carré <br>
                    <u><strong>Nombre de Lit : </strong> </u> {{$logements->lit}} <br>
                    <u><strong>Nombre de douche : </strong></u> {{$logements->douche}} <br>
                    <u><strong>Nombre de garage : </strong></u> {{$logements->garage}}
                </p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background-image: url(&quot;assets/img/bg-showcase-3.jpg&quot;);"><span></span></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                <h2 style="margin-left: -79px;margin-bottom: 156px;padding-top: 0px;margin-top: -242px;">Agent :&nbsp;</h2>
                <p class="lead mb-0" style="margin-top: -130px;margin-right: -51px;margin-left: -59px;">Listes qlSJQKLsjKLQSJKLQjklQJSKLQKLsjkljqSLJQKLsjklqSJKLJQskljqSLKJKLQJklqJSLsjKLQJSKLQJklqSJKLQJsklJSLKJklsklJSKLQJsklQJSKLQSklqJSKLJKLjskl descriptions agents</p>
            </div>
        </div>
    </div>
</section>
<footer class="bg-light footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Terms of &nbsp;Use</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">© Tsukasa 2023. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 text-center text-lg-end my-auto h-100">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('maison/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('maison/js/Simple-Slider-swiper-bundle.min.js')}}"></script>
<script src="{{asset('maison/js/Simple-Slider.js')}}"></script>
</body>
@endsection
