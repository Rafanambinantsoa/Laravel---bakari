@extends('.Logement.base.base')
@section('body-container')
<div class="container-fluid">
    <div class="row">
       <div class="col-2">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1">maisons en total</div>
                        <div class="text-dark fw-bold h5 mb-0"><span>{{$total}}</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-house fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
       </div>
       <div class="col-2">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Maison en vente </span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>{{$vente}}</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-house-laptop fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
       </div>
       <div class="col-2">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Maison vendus </span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>{{$vendus}}</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-house-circle-check fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
       </div>
       <div class="col-2">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Agents active </span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>{{$active}}</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-user-check fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
       </div>
       <div class="col-2">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Agents inactive</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>{{$inactive}}</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-user-large-slash fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
       </div>
       <div class="col-2">Passe ton chemon mon trés cher amis</div>
    </div>
</div>

@endsection