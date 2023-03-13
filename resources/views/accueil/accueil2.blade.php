@extends('.accueil.template.base')
@section('body-content')
<header class="text-center text-white masthead" style="background: url('assets/img/bg-masthead.jpg')no-repeat center center;background-size: cover;">
    <div data-bss-hover-animate="bounce" class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto position-relative">
                <h1 class="mb-5">Trouvez votre maison de rêve dès maintenant avec nos offres immobilières exclusives.</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative"><a class="btn btn-info" href="#" style="padding-right: 68px;padding-left: 64px;">Commencer maintenant</a></div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative"><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
        </div>
    </div>
</header>
<section class="text-center bg-light features-icons">
    <h1>Qualités de services</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                    <h3>Achat omniprésente</h3>
                    <p class="lead mb-0">Où que vous soyez  , il suffit juste de quelque clique</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-layers m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                    <h3>Economie de temps</h3>
                    <p class="lead mb-0">Rapidité dans le procédure de vente</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                    <h3>Facile à manipuler</h3>
                    <p class="lead mb-0">Laisser vous porter par notre imagination de choix de maison</p>
                </div>
            </div>
        </div>
    </div>
    <h1 style="margin-bottom: 0px;">Nos immobiliers</h1>
</section>
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false" id="carousel-1" style="height: 600px;">
            <div class="carousel-inner h-100">
                @forelse($logements as $logement)

                <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="{{asset('/images/'.$logement->image1)}}" alt="Slide Image" style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 offset-md-2">
                                <div style="max-width: 350px;">
                                    <h1 class="text-uppercase fw-bold">{{$logement->nom}}<br>{{$logement->lieu}}</h1>
                                    <p class="my-3">{{$logement->description}} <br> <strong>$ {{$logement->prix}}</strong> </p><a class="btn btn-primary btn-lg me-2" role="button" href="{{route('show' ,$logement->id)}}">Acheter cette maison</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                    <p>vide</p>
                @endforelse
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>

        </div>
    </div>
</section>
<section class="text-center bg-light testimonials">
    <div class="container">
        <h2 class="mb-5">Nos Agents</h2>
        <div class="row">
            @forelse($users as $user)
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="{{asset('/images/'.$user->photo)}}">
                        <h5>{{$user->name}}</h5>
                        <p class="font-weight-light mb-0">"{{$user->description}} "<br>
                        <strong>Phone :  +261 </strong>{{$user->mobile}} <br>
                            <strong>Email : </strong>{{$user->email}}
                        </p>
                    </div>
                </div>
            @empty
                <p>no user for the moments</p>
            @endforelse

        </div>
    </div>
</section>
<section class="text-center text-white call-to-action" style="background: url(&quot;assets/img/bg-masthead.jpg&quot;) no-repeat center center;background-size: cover;">
    <div class="container">
        <section class="py-4 py-xl-5">
            <div class="container">
                <div class="row d-flex justify-content-center" style="margin-left: -356px;margin-right: -327px;">
                    <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card mb-5">
                            <div class="card-body p-sm-5" style="padding-left: 179px;">
                                <h2 class="text-center text-dark mb-4">Nous contacter</h2>
                                <form method="post">
                                    <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Name"></div>
                                    <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                                    <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Message"></textarea></div>
                                    <div><button class="btn btn-primary d-block w-100" type="submit">Send </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
<!-- Modal registration agent -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agent registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group" >
                        <input type="text" name="name" placeholder="Votre nom" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="text" name="email" placeholder="Votre email" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="text" name="mobile" placeholder="Mobile" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="text" name="skype" placeholder="skype" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="text" name="description" placeholder="description" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="password" placeholder="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="password" placeholder="confirm-password" id="confirm-password" class="form-control">
                        <div id="password-error" class="text-danger" style="display: none" >Les mot de passe ne correspondent pas</div>
                    </div>

                    <div class="form-group mt-3" >
                        <input type="file" class="form-control" placeholder="Votre photos de profil" name="pdp">
                        <div id="password-error" class="text-danger" style="display: none" >Les mot de passe ne correspondent pas</div>
                    </div>

                    <div class="form-group mt-3" >
                        <input type="submit" class="btn btn-dark" id="submit-btn" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    var passwordInput = document.getElementById('password');
    var confirmPasswordInput = document.getElementById('confirm-password');
    var passwordError = document.getElementById('password-error');
    var submitBtn = document.getElementById('submit-btn');

    confirmPasswordInput.addEventListener('keyup', function() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            passwordError.style.display = 'block';
            submitBtn.disabled = true;
        }
        else if(confirmPasswordInput.value ==""){
            passwordError.style.display = 'none';
        }
        else {
            passwordError.style.display = 'none';
            submitBtn.disabled = false;
        }
    });

</script>

<!-- Modal agent connexion -->
<div class="modal fade" id="agentcon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agent registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group mt-3" >
                        <input type="text" name="email" placeholder="Votre email" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="submit" class="btn btn-dark" id="submit-btn" value="Se connecter">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
</html>
