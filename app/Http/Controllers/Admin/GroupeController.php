<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class GroupeController extends Controller
{
    // page principale avec deux div

    public function gestionUser()
    {
        // Nombre total d'utilisateurs et de groupes
        $totalUsers = User::count();
        $totalGroupes = Groupe::count();

        // Graphique : nombre d'utilisateurs par groupe
        $usersByGroup = Groupe::withCount('users')->get();

        // Graphique : répartition admin / non admin
        $adminCount = User::where('is_admin', 1)->count();
        $nonAdminCount = User::where('is_admin', 0)->count();

        // Les derniers utilisateurs
        $recentUsers = User::latest()->take(5)->get();

        return view('admin.groupes.gestionUsers', compact(
            'totalUsers', 'totalGroupes', 'usersByGroup', 'adminCount', 'nonAdminCount', 'recentUsers'
        ));
    }

    // Gestion des groupes
    public function index()
    {
        $groupes = Groupe::all();

        return view('admin.groupes.index', compact('groupes'));
    }

    public function create()
    {
        return view('admin.groupes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|unique:groupes,nom',
            'libelle' => 'required|string',
        ]);

        Groupe::create($request->only('nom', 'libelle'));

        return redirect()->route('groupes.index')->with('success', 'Groupe créé avec succès !');
    }

    public function edit(Groupe $groupe)
    {
        return view('admin.groupes.edit', compact('groupe'));
    }

    public function update(Request $request, Groupe $groupe)
    {
        $request->validate([
            'nom' => 'required|string|unique:groupes,nom,'.$groupe->id,
            'libelle' => 'required|string',
        ]);

        $groupe->update($request->only('nom', 'libelle'));

        return redirect()->route('groupes.index')->with('success', 'Groupe mis à jour !');
    }

    public function destroy(Groupe $groupe)
    {
        $groupe->delete();

        return redirect()->route('groupes.index')->with('success', 'Groupe supprimé !');
    }

    // Liste des utilisateurs avec filtre et recherche
    public function indexUsers(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nom', 'like', "%$search%")
                    ->orWhere('prenom', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('matricule', 'like', "%$search%");
            });
        }




        if ($request->filled('is_admin')) {
            $query->where('is_admin', $request->is_admin);
        }

        $users = $query->with('groupe')->latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    // Formulaire création utilisateur
    public function createUser()
    {
        $groupes = Groupe::all();

        return view('admin.users.create', compact('groupes'));
    }

    // Enregistrer un utilisateur
    public function storeUser(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'matricule' => 'required|string|unique:users,matricule',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'groupe_id' => 'required|exists:groupes,id',
            'is_admin' => 'required|boolean',
            'is_actif' => 'required|boolean',
        ]);

        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'matricule' => $request->matricule,
            'contact' => $request->contact,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin,
            'is_actif' => $request->is_actif, // ✅ prend la valeur du formulaire
            'groupe_id' => $request->groupe_id,
        ]);

        return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succès !');
    }

    // Formulaire édition utilisateur
    public function editUser(User $user)
    {
        $groupes = Groupe::all();

        return view('admin.users.edit', compact('user', 'groupes'));
    }

    // Mettre à jour utilisateur
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'matricule' => 'required|string|unique:users,matricule,'.$user->id,
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|confirmed|min:6',
            'groupe_id' => 'required|exists:groupes,id',
            'is_admin' => 'required|boolean',
            'is_actif' => 'required|boolean',
        ]);

        $data = $request->only([
            'nom',
            'prenom',
            'matricule',
            'contact',
            'email',
            'is_admin',
            'is_actif',
            'groupe_id',
        ]);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès !');
    }

    // Supprimer utilisateur
    public function destroyUser(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès !');
    }
}
