@extends('.Logement.base.base')
@section('body-container')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Mes maisons</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$maisons}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-home fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Maisons vendus</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$vendus}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-house-circle-check fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Maison en vente </span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>{{$ventes}}</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-house-circle-exclamation fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection