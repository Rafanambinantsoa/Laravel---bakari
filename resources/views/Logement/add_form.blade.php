@extends('.Logement.base.base')

@section('body-container')
    
<div class="container-fluid">
    <h3 class="text-dark mb-4">Ajouts d'un Logement </h3>
    <div class="card shadow">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="add_form" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="">Nom de la maison</label>
                    <input type="text" name="nom" class="form-control">
                    @error('nom')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Lieu où se situe la maison</label>
                    <input type="text" name="lieu" class="form-control">
                    @error('lieu')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="number" name="prix" class="form-control">
                    @error('prix')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Superficie </label>
                    <input type="number" name="superficie" class="form-control">
                    @error('superficie')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Lits</label>
                    <input type="number" name="lit" class="form-control">
                    @error('lit')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Douche</label>
                    <input type="number" name="douche" class="form-control">
                    @error('douche')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Garages</label>
                    <input type="number" name="garage" class="form-control">
                    @error('garage')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Descriptions</label>
                    <input type="text" name="description" class="form-control">
                    @error('description')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Image  1</label>
                    <input type="file" name="image1" class="form-control">
                    @error('image1')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image  2</label>
                    <input type="file" name="image2" class="form-control">
                    @error('image2')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image  3</label>
                    <input type="file" name="image3" class="form-control">
                    <input type="hidden" value="{{Auth::user()->id}}" name="id_agent">
                    @error('image3')
                    <span class="text-danger" >{{$message}}</span>
                    @enderror
                </div>
                <input type="submit" class="btn btn-dark mt-2" value="Enregistrer">
            </form>

        </div>
    </div>
</div>
</div>
@endsection

