@extends('layouts.master')

@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Liste des employes inscrits</h3>
        <div class=" mt-2">
            <div class="d-flex justify-content-end">
            <a href="{{ route('ajout')}}" class="btn btn-primary mb-4 ">Ajouter nouvel employe</a>
            </div>
            @if (session()->has('successDelete'))
            <div class="alert alert-success">
                <h3>{{session()->get('successDelete')}}</h3>
            </div>
            @endif

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Matricule de solde</th>
                <th scope="col">Nom </th>
                <th scope="col">Prenom </th>
                <th scope="col">email</th>
                <th scope="col">Adresse</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
        @foreach( $utilisateurs as $utilisateur )
        <tr>
            <th scope="row">{{$utilisateur->matricule}}</th>
            <td>{{$utilisateur->name}}</td>
            <td>{{$utilisateur->prenom}}</td>
            <td>{{$utilisateur->email}}</td>
            <td>{{$utilisateur->adresse}}</td>
            <td>{{$utilisateur->role}}</td>
            <td>
                <a href="#" class="btn btn-secondary">view</a>
                <a href="{{route('modifierUser' ,['employe'=>$utilisateur->id])}}" class="btn btn-info">Editer</a>
                <a href="#" class="btn btn-danger" onclick=" if(confirm('Voulez vous vraiment supprimé cet employé ?')){
                    document.getElementById('form-{{$utilisateur->id}}').submit() }">Supprimer</a>
                <form id="form-{{$utilisateur->id}}" action="{{ route('supression',['employe'=>$utilisateur->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div> 
@endsection


