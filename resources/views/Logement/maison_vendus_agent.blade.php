@extends('.Logement.base.base')
@section('body-container')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Listes des agents Active</h3>
        <div class="row">
            @foreach ($agents as $agent)
                <div class="col-sm-4">
                    <div class="card">
                        <a href="{{ route('show_agent', $agent->id) }}">
                            <img class="card-img-top" height="400px" src="{{ asset('/images/' . $agent->photo) }}"
                                alt="Title">
                            <div class="card-body">
                                <h3 class="card-title">{{ $agent->name }}</h3>
                                <p class="card-text">{{ $agent->description }}</p>
                                <p class="card-text">{{ $agent->email }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @isset($info)
        <input type="hidden" id="jones" value="{{ $status }}">

        <div class="modal fade" id="koto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $info->name }}</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <img height="300px" src="{{ asset('/images/' . $info->photo) }}" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <p><i> <u>Email </u>:</i>{{ $info->email }}</p>
                                <p><i> <u>Description </u>:</i>{{ $info->description }}</p>
                                <p><i> <u>Tél </u>:</i>{{ $info->mobile }}</p>
                                <p><i> <u>Skype </u>:</i>{{ $info->skype }}</p>
                                <p><i> <u>Maison vendus </u>:</i>{{ $vendus }}</p>
                                <p><i> <u>Maison en vente </u>:</i>{{ $envente }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset
    <script src="{{ asset('assets1/bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        var elena = document.getElementById("jones").value;
        var modal = new bootstrap.Modal(document.getElementById("koto"));
        if (elena === "tsukasa") {
            modal.show();
        }
    </script>
@endsection
