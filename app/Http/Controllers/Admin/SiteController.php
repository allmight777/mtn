<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Affichage de la liste des sites
    public function index()
    {
        $sites = Site::orderBy('department')->paginate(10);
        return view('admin.gestionSite.index', compact('sites'));
    }

    // Affichage du formulaire de création
    public function create()
    {
        return view('admin.gestionSite.create');
    }

    // Stockage d'un nouveau site
    public function store(Request $request)
    {
        $request->validate([
            'site_id' => 'required|unique:sites,site_id',
            'name' => 'required|string',
            'locality' => 'required|string',
            'department' => 'required|string',
            'power_capacity' => 'required|numeric',
            'storage_capacity' => 'required|numeric',
            'type' => 'required|string',
            'status' => 'required|string',
            'actions' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // max 2Mo
        ], [
            'site_id.unique' => 'Ce Site ID est déjà pris !', // message personnalisé
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sites', 'public');
        }

        Site::create($data);

        return redirect()->route('sites.index')->with('success', 'Site ajouté avec succès !');
    }

    // Formulaire d'édition
    public function edit(Site $site)
    {
        return view('admin.gestionSite.edit', compact('site'));
    }

    // Mise à jour d'un site
    public function update(Request $request, Site $site)
    {
        $request->validate([
            'site_id' => 'required|unique:sites,site_id,'.$site->id,
            'name' => 'required|string',
            'locality' => 'required|string',
            'department' => 'required|string',
            'power_capacity' => 'required|numeric',
            'storage_capacity' => 'required|numeric',
            'type' => 'required|string',
            'status' => 'required|string',
            'actions' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ], [
            'site_id.unique' => 'Ce Site ID est déjà pris !',
        ]);

        $data = $request->all();

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sites', 'public');
        }

        $site->update($data);

        return redirect()->route('sites.index')->with('success', 'Site mis à jour avec succès !');
    }

    // Suppression d'un site
    public function destroy(Site $site)
    {
        $site->delete();
        return redirect()->route('sites.index')->with('success', 'Site supprimé avec succès !');
    }
}
