@extends('.accueil.template.base')
@section('body-content')
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Section payement </h2>
            <span>Une fois le paiement fais , vous allez recevoir un email avec tous les information de vente <br> et la
                maison serais à vous </span>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card p-3">
                    <form action="{{route('client_handle')}}" method="post">
                        @method('post')
                        {{-- une sortte de securité contre les arttausque hono  --}}
                        @csrf

                        <h6 class="text-uppercase">Details du payement</h6>
                        <div class="inputbox mt-3"> <input type="text" name="nom" class="form-control"
                                required="required"> <span>Name on card</span> </div>
                                @error('nom')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                        <div class="inputbox mt-3"> <input type="text" name="email" class="form-control"
                                required="required"> <span>Email</span> </div>
                                @error('email')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"> <input type="text" name="cart_number"
                                        class="form-control" required="required"> <i class="fa fa-credit-card"></i>
                                    <span>Card Number</span>
                                </div>
                                @error('cart_number')
                                <p class="text-danger" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-row">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="expiration"
                                            class="form-control" required="required"> <span>Expiry</span> </div>
                                            @error('expiration')
                                            <p class="text-danger" role="alert">{{ $message }}</p>
                                            @enderror
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="cvv"
                                            class="form-control" required="required"> <span>CVV</span> </div>
                                            @error('cvv')
                                            <p class="text-danger" role="alert">{{ $message }}</p>
                                            @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <h6 class="text-uppercase">Adresse du client</h6>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="adresse"
                                            class="form-control" required="required"> <span>Address complet</span> </div>
                                            @error('adresse')
                                            <p class="text-danger" role="alert">{{ $message }}</p>
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="phone"
                                            class="form-control" required="required"> <span>Mobile</span> </div>
                                            @error('phone')
                                            <p class="text-danger" role="alert">{{ $message }}</p>
                                            @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="inputbox mt-3 mr-2"> <input type="text" name="province"
                                            class="form-control" required="required"> <span>Province</span> </div>
                                            @error('province')
                                            <p class="text-danger" role="alert">{{ $message }}</p>
                                            @enderror
                                </div>
                            </div>
                        </div>
                </div>
                {{-- Recuperation de l'id de l'agent --}}
                <input type="hidden" name="id_logement" value="{{$id_logement}}">
                <input type="submit" class="btn btn-success" value=" Payer maintenant">
                </form>
                <div class="mt-4 mb-4 d-flex justify-content-between">
                    <h4>Votre compte vas être déduit de 120000 $ , <br>
                        <button class="btn btn-success">Payer</button>
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
