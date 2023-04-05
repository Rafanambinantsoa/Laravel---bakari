{{-- {{dd($logement)}} --}}
@extends('.Logement.base.base')
@section('body-container')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Listes des maisons en Vente</h3>
        <table class="table my-0 table-hover" id="dataTable">
            <thead>
                <tr>
                    <td><strong>Nom de la maison : </strong></td>
                    <td><strong>lit</strong></td>
                    <td><strong>douche</strong></td>
                    <td><strong>garage</strong></td>
                    <td><strong>description</strong></td>
                    <td><strong>Lieu</strong></td>
                    <td><strong>Prix</strong></td>
                </tr>
            </thead>
            <tbody>
                @isset($logements)
                    @forelse($logements as $logement)
                        <tr>
                            <td>{{ $logement->nom }}</td>
                            <td>{{ $logement->lit }}</td>
                            <td>{{ $logement->douche }}</td>
                            <td>{{ $logement->garage }}</td>
                            <td>{{ $logement->description }}</td>
                            <td>{{ $logement->lieu }}</td>
                            <td>{{ $logement->prix }}</td>
                        </tr>
                    @empty
                        <td></td>
                        <td></td>
                        <td class="text-center">Pas de Donnée pour le moments</td>
                        <td></td>
                    @endforelse
                @endisset
            </tbody>
        </table>
    </div>
@endsection
