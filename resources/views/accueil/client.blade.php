@extends('.accueil.template.base')

@section('body-content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Client</h5>
                        <form action="{{route('client_handle')}}" method="post">
                            @method('post')
                            {{-- une sortte de securité contre les arttausque hono  --}}
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom')}}" >
                                @error('nom')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="{{old('prenom')}}" >
                                @error('prenom')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse complet</label>
                                <input type="text" class="form-control" id="addresse" name="addresse" value="{{old('addresse')}}">
                                @error('addresse')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Numéro téléphone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                                @error('phone')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror

                                <input type="hidden" name="id_logement" value="{{$id_logement}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Acheter direct de la maison</button>
                        </form>
                        <form action="" method="post">
                            @csrf
                            @method('post') 
                            <input type="hidden" class="form-control" id="nom1" name="nom" >
                            <input type="hidden" class="form-control" id="prenom1" name="prenom">
                            <input type="hidden" class="form-control" id="addresse1" name="addresse">
                            <input type="hidden" class="form-control" id="email1" name="email">
                            <input type="hidden" class="form-control" id="phone1" name="phone">
                            <button type="submit" class="btn btn-info mt-4">Envoyer une demande de visite</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <script>
        var nom = document.getElementById('nom')
        var prenom = document.getElementById('prenom')
        var email = document.getElementById('email')
        var addresse = document.getElementById('addresse')
        var phone = document.getElementById('phone')

        var nom1 = document.getElementById('nom1')
        var prenom1 = document.getElementById('prenom1')
        var email1 = document.getElementById('email1')
        var addresse1 = document.getElementById('addresse1')
        var phone1 = document.getElementById('phone1')

        nom.addEventListener('input' , function (){
            nom1.value = nom.value
        })
        prenom.addEventListener('input' , function (){
            prenom1.value = prenom.value
        })
        email.addEventListener('input' , function (){
            email1.value = email.value
        })
        addresse.addEventListener('input' , function (){
            addresse1.value = addresse.value
        })
        phone.addEventListener('input' , function (){
            phone1.value = phone.value
        })

    </script>

@endsection
