<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class MyController extends Controller
{
    public function index(){
        $utilisateurs = User::all();
        return view('dash',compact('utilisateurs'));
    }
    public function indexDage(){
        return view('dashbordDage');
    }

    
    public function edit(User $employe){
        
        return view('modifierUtilisateur',compact('employe'));
    }
    public function delete(User $employe ){
        
        //User::find($utilisateur)->delete();
        $nom_complet = $employe->name." ".$employe->prenom;
        $employe->delete();
        return back()->with("successDelete","Employe $nom_complet supprimé avec succé!");
    }

    public function update(Request $request, User $employe)
    {
        $nom_complet = $employe->name." ".$employe->prenom;
        $request->validate([
            'matricule'=>['required','integer'],
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            
        ]);

        $employe->update([
            'matricule' => $request->matricule,
            'name' => $request->name,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'role' => $request->role,
        ]);

        return back()->with("successUpdate","Employe $nom_complet modifie avec succé!");
    }
    
}
