@extends('.Logement.base.base')
@section('body-container')
    
<div class="container-fluid">
          <h3 class="text-dark mb-4">Listes de mes maisons</h3>
          @if (session()->has('success'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  {{ session()->get('success') }}
              </div>
          @endif
          <div class="card shadow">
              <div class="card-body">
                  @isset($status)
                      <input type="hidden" id="elena" value="{{$status}}">
                  @endisset
                  <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                      <table class="table my-0" id="dataTable">
                          <thead>
                          <tr>
                              <td><strong>Nom de la maison : </strong></td>
                              <td><strong>Prix</strong></td>
                              <td><strong>lit</strong></td>
                              <td><strong>douche</strong></td>
                              <td><strong>garage</strong></td>
                              <td><strong>description</strong></td>
                              <td colspan="2"  class="text-center"><strong>Operations</strong></td>
                          </tr>
                          </thead>
                          <tbody>
                          @isset($logement)
                          @forelse($logement as $logements)
                              <tr>
                                  <td>{{$logements->nom}}</td>
                                  <td>{{$logements->prix}}</td>
                                  <td>{{$logements->lit}}</td>
                                  <td>{{$logements->douche}}</td>
                                  <td>{{$logements->garage}}</td>
                                  <td>{{$logements->description}}</td>
                                  <td><a href="{{route('editForm' ,$logements->id )}}" class="btn btn-success" >Modifier</a></td>
                                  <td>
                                      <form action="{{route('delete' ,$logements->id )}}" method="post">
                                          @csrf
                                          @method('delete')
                                          <input type="submit" value="Supprimer" class="btn btn-dark"></form>
                              </tr>
                          @empty
                              <td></td>
                              <td></td>
                              <td class="text-center">Pas de Donnée pour le moments</td>
                              <td></td>
                          @endforelse
                          @endisset
                          @isset($log_bd)
                          <td></td>
                          <td></td>
                          <td class="text-center">Modification en Cours</td>
                          <td></td>
                          @endisset
                          </tbody>
                      </table>

              </div>
          </div>
      </div>
</div>
<div class="modal fade" id="tsukasa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modifier ma maison</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span><bold> X </bold></span>
              </button>
          </div>
          <div class="modal-body">
              @isset($log_bd)
              <form action="{{route('edit' , $log_bd->id)}}" method="post">
                  @csrf
                  @method('put')
                  <div class="form-group">
                      <label for="">Nom</label>
                      <input type="text" value="{{$log_bd->nom}}" name="nom" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Lieu</label>
                      <input type="text" value="{{$log_bd->lieu}}" name="lieu" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Prix</label>
                      <input type="text" value="{{$log_bd->prix}}" name="prix" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Superficie</label>
                      <input type="text" value="{{$log_bd->superficie}}" name="superficie" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Lits</label>
                      <input type="text" value="{{$log_bd->lit}}" name="lit" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Douche</label>
                      <input type="text" value="{{$log_bd->douche}}" name="douche" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Garage</label>
                      <input type="text" value="{{$log_bd->garage}}" name="garage" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description"  class="form-control">{{$log_bd->description}}</textarea>
                  </div>
                      <input type="submit" value="Soumettre ma modification" class="btn btn-warning mt-2">
              </form>
              @endisset


          </div>
      </div>
  </div>
</div>
<script src="{{asset('assets1/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
  var elena = document.getElementById("elena").value;
  var modal = new bootstrap.Modal(document.getElementById('tsukasa'));
  if (elena === "ok"){
      modal.show();
  }
</script>
@endsection   
