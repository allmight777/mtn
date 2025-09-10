@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4" style="border-radius: 12px; border: 1px solid #d1d5db;">


           <h2 class="mb-4"
                style="font-weight: 700; font-size: 1.8rem; color: #29aa49; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">

                <span class="badge bg-success" style="font-size: 1.3rem;">Ajouter un site </span>
            </h2>

        @if ($errors->any())
            <div class="alert alert-danger rounded-3">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sites.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Site ID</label>
                    <input type="text" name="site_id" class="form-control rounded-3 py-2" placeholder="Ex: MTN-001" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Nom</label>
                    <input type="text" name="name" class="form-control rounded-3 py-2" placeholder="Nom du site" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Localité</label>
                    <input type="text" name="locality" class="form-control rounded-3 py-2" placeholder="Ville ou village" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Département</label>
                    <input type="text" name="department" class="form-control rounded-3 py-2" placeholder="Ex: Atlantique" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Puissance (kW)</label>
                    <input type="number" step="0.1" name="power_capacity" class="form-control rounded-3 py-2" placeholder="Ex: 5.5" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Capacité stockage (kWh)</label>
                    <input type="number" step="0.1" name="storage_capacity" class="form-control rounded-3 py-2" placeholder="Ex: 20" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Type</label>
                    <input type="text" name="type" class="form-control rounded-3 py-2" placeholder="Ex: On-grid, Off-grid" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Statut</label>
                    <input type="text" name="status" class="form-control rounded-3 py-2" placeholder="Ex: En cours, ..." required>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Actions en cours</label>
                    <textarea name="actions" class="form-control rounded-3 py-2" rows="2" placeholder="Ex: Pose panneaux, Câblage batteries"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Photo du site</label>
                    <input type="file" name="image" class="form-control rounded-3 py-2">
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('sites.index') }}" class="btn btn-secondary px-4 py-2 rounded-pill shadow-sm">Retour</a>
                <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection
