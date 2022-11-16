@extends('layouts.master')
@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Ajout d'un nouvel employe</h3>
        <div class=" mt-2">
        @if (session()->has('success'))
            <div class="alert alert-success">
                <h3>{{session()->get('success')}}</h3>
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
        <form style="width:65%;" method="post" action="{{ route('ajout') }}" >
        @csrf
        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule de l'employe</label>
            <input type="number" class="form-control" id="matricule" name="matricule">
            </div>
            <div class="mb-3">
            <label for="nom" class="form-label">Nom de l'employe</label>
            <input type="text" class="form-control" id="nom" name="name">
            </div>
            <div class="mb-3">
            <label for="nom" class="form-label">Prenom de l'employe</label>
            <input type="text" class="form-control" id="nom" name="prenom">
            </div>
           
            <div class="mb-3">
            <label for="nom" class="form-label">Adresse de l'employe</label>
            <input type="text" class="form-control" id="nom" name="adresse">
            </div> 
            <div class="row" style="border: 1px solid #f2f2f2; border-radius:10px;">
                <div class="mb-3 col">
                <label for="nom" class="form-label">Adresse mail l'employe</label>
                <input type="mail" class="form-control" id="nom" name="email" placeholder="abc@example.org">
                </div> 
                <div class="mb-3 col">
                <label for="nom" class="form-label">Mot de passe de l'employe</label>
                <input type="password" class="form-control" id="nom" name="password" placeholder="***********">
                </div> 
                <div class="mb-3 col">
                <label for="nom" class="form-label"> Confirmer Mot de passe de l'employe</label>
                <input type="password" class="form-control" id="nom" name="password_confirmation" placeholder="***********">
                </div>
            </div>
          
            <div class="mb-3">
            <label for="class" class="form-label">Role de l'employe</label>
           <select name="role" class="form-control" id="class">
                <option value=""></option>
                <option value="admin">admin</option>
                <option value="RH">RH</option>
                <option value="DAGE">DAGE</option>
                <option value="Employe">Employe</option>
           </select>
            </div>                 
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{route('dash')}}" class="btn btn-danger">Annuler</a>
        </form>
        </div> 
    </div> 
@endsection


