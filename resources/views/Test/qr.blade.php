<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code"> --}}
    @foreach($maisonAvecQRCode as $maisonsAvecQRCode)
    <div>
        {{-- {{dd($maisonAvecQRCode)}} --}}
        <h2>Maison : {{ $maisonAvecQRCode['maison']->nom }}</h2>
        <p>Lieu : {{ $maisonAvecQRCode['maison']->lieu }}</p>
        <p>Superficie : {{ $maisonAvecQRCode['maison']->superficie }} m²</p>
        <p>Nombre de lits : {{ $maisonAvecQRCode['maison']->lit }}</p>
        <p>Douche : {{ $maisonAvecQRCode['maison']->douche }}</p>
        <p>Garage : {{ $maisonAvecQRCode['maison']->garage }}</p>
        <p>Prix : {{ $maisonAvecQRCode['maison']->prix }} $</p>
        <p>Agent : {{ $maisonAvecQRCode['maison']->name }}</p>
        <p>Email : {{ $maisonAvecQRCode['maison']->email }}</p>
        <p>Mobile : {{ $maisonAvecQRCode['maison']->mobile }}</p>
        <img src="data:image/png;,{{ $maisonAvecQRCode['qrCode'] }}" alt="QR Code">
    </div>
@endforeach

</body>
</html>