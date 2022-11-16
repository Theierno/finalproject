@extends('layouts.master')
@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Edition de l'employe</h3>
        <div class=" mt-2">
        @if (session()->has('successUpdate'))
            <div class="alert alert-success">
                <h3>{{session()->get('successUpdate')}}</h3>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul> 

            </div>
            
            @endif
        <form style="width:65%;" method="post" action="{{ route('update',['employe'=>$employe->id]) }}" >
        @csrf
        <input type="hidden" name="_method" value="put">
        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule de l'employe</label>
            <input type="number" class="form-control" id="matricule" name="matricule" value="{{$employe->matricule}}">
            </div>
            <div class="mb-3">
            <label for="nom" class="form-label">Nom de l'employe</label>
            <input type="text" class="form-control" id="nom" name="name" value="{{$employe->name}}">
            </div>
            <div class="mb-3">
            <label for="nom" class="form-label">Prenom de l'employe</label>
            <input type="text" class="form-control" id="nom" name="prenom" value="{{$employe->prenom}}">
            </div>
           
            <div class="mb-3">
            <label for="nom" class="form-label">Adresse de l'employe</label>
            <input type="text" class="form-control" id="nom" name="adresse" value="{{$employe->adresse}}">
            </div> 
           
            <div class="mb-3">
            <label for="class" class="form-label">Role de l'employe</label>
           <select name="role" class="form-control" id="class">
                <option value="{{$employe->role}}">{{$employe->role}}</option>
                <option value="RH">RH</option>
                <option value="DAGE">DAGE</option>
                <option value="Employe">Employe</option>
           </select>
            </div>                 
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="#" class="btn btn-danger">Annuler</a>
            <button type="submit" class="btn btn-info">Retour</button>
        </form>
        </div> 
    </div> 
@endsection


