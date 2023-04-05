<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kim - logement</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Hero-Carousel-images.css')}}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
    <div class="container">
        <img src="{{ asset('/img/vonage-spinner.877683e4.gif') }}" height="40px" >
        <a class="navbar-brand fs-4 fw-bold" href="#" style="margin-right: 497px;">kim logement</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <a class="navbar-brand" href="#" style="margin-right: 12px;">Nos Agents</a>
            <a class="navbar-brand" href="#">Nos immobilier</a>
            <a class="navbar-brand" href="#">nous contacter</a>
            <div class="dropdown">
                <button style="background: transparent;border: none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>Connexions</strong>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Agent registration</a></li>
                    <li><a class="dropdown-item"  href="#" data-bs-toggle="modal" data-bs-target="#agentcon">Agent connexion</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Modal registration agent -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agent registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('register')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('post')
                    <div class="form-group" >
                        <input type="text" name="name" placeholder="Votre nom" class="form-control" required>
                    </div>
                    <div class="form-group mt-3" >
                        <input type="email" name="email" placeholder="Votre email" class="form-control" required>
                    </div>
                    <div class="form-group mt-3" >
                        <input type="number" name="mobile" placeholder="Mobile" class="form-control" required>
                    </div>
                    <div class="form-group mt-3" >
                        <input type="text" name="skype" placeholder="skype" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="text" name="description" placeholder="description" class="form-control">
                    </div>
                    <div class="form-group mt-3" >
                        <input type="password" placeholder="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group mt-3" >
                        <input type="password" placeholder="confirm-password" id="confirm-password" class="form-control">
                        <div id="password-error" class="text-danger" style="display: none" >Les mot de passe ne correspondent pas</div>
                    </div>

                    <div class="form-group mt-3" >
                        <input type="file" class="form-control" placeholder="Votre photos de profil" name="pdp" required>
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
                <form action="{{route('loginhandle')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group mt-3" >
                        <input type="text" name="email" placeholder="Votre email" class="form-control" required>
                    </div>
                    <div class="form-group mt-3" >
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
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


@yield("body-content")

<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('maison/js/Simple-Slider-swiper-bundle.min.js')}}"></script>
<script src="{{asset('maison/js/Simple-Slider.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
</body>
