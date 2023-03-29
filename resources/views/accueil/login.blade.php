@extends('.accueil.template.base')

@section('body-content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Se Connecter</h5>
                        <form action="" method="post">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="nom" class="form-label">Votre Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Mot de passe </label>
                                <input type="password" class="form-control" id="motdepasse" name="password" value="{{old('password')}}">
                                @error('password')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

@endsection
