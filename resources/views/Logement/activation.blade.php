@extends('.Logement.base.base')
@section('body-container')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Listes des nouveaux Comptes Inactifs des Agents</h3>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                    <tr>
                        <td><strong>Nom de l'agent</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Description</strong></td>
                        <td><strong>Skype</strong></td>
                        <td><strong>Mobile</strong></td>
                        <td><strong>Status</strong></td>
                        <td  class="text-center"><strong>Operations</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($activations as $activation)
                                <tr>
                                    <td>{{$activation->name}}</td>
                                    <td>{{$activation->email}}</td>
                                    <td>{{$activation->description}}</td>
                                    <td>{{$activation->skype}}</td>
                                    <td>{{$activation->mobile}}</td>
                                    <td>{{$activation->status}}</td>
                                    <td>
                                        <form action="{{route('activation' , $activation->id)}}" method="post">
                                            @csrf
                                            @method('put')
                                            <input type="submit" value="Activer" class="btn btn-warning">
                                        </form></td>
                                </tr>
                                <!-- Mettez ici le code HTML que vous souhaitez afficher si au moins un des attributs n'est pas vide -->
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
          