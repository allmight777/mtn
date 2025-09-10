@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-dark fw-bold">Sites disponibles</h2>

            <div>
                <a href="{{ route('stats.index') }}" class="btn btn-success me-2">Consulter les statistiques</a>
                <a href="{{ route('sites.create') }}" class="btn btn-success">Ajouter un site</a>
            </div>
        </div>


        <!-- Barre de recherche -->
        <form action="{{ route('sites.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control"
                    placeholder="Rechercher par nom, ID ou département..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Rechercher</button>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($sites->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle shadow-sm rounded"
                    style="background-color: #f8f9fa;">
                    <thead class="table-dark">
                        <tr>
                            <th>Photo</th>
                            <th>Site ID</th>
                            <th>Nom</th>
                            <th>Localité</th>
                            <th>Département</th>
                            <th>Puissance (kW)</th>
                            <th>Stockage (kWh)</th>
                            <th>Type</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sites as $site)
                            <tr class="table-row" style="transition: background-color 0.3s;">
                                <td>
                                    @if ($site->image)
                                        <img src="{{ asset('storage/' . $site->image) }}" class="img-thumbnail shadow-sm"
                                            style="width: 60px; height: 60px; cursor: pointer;" data-bs-toggle="modal"
                                            data-bs-target="#imageModal{{ $site->id }}">

                                        <!-- Modal pour agrandir l'image -->
                                        <div class="modal fade" id="imageModal{{ $site->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <img src="{{ asset('storage/' . $site->image) }}"
                                                            class="img-fluid w-100 rounded">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <span class="text-muted">Pas d'image</span>
                                    @endif
                                </td>
                                <td>{{ $site->site_id }}</td>
                                <td>{{ $site->name }}</td>
                                <td>{{ $site->locality }}</td>
                                <td>{{ $site->department }}</td>
                                <td>{{ $site->power_capacity }}</td>
                                <td>{{ $site->storage_capacity }}</td>
                                <td>{{ $site->type }}</td>
                                <td>{{ $site->status }}</td>
                                <td>
                                    <a href="{{ route('sites.edit', $site) }}" class="btn btn-sm btn-primary">Modifier</a>
                                    <form action="{{ route('sites.destroy', $site) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Supprimer ce site ?')"
                                            class="btn btn-sm btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $sites->links() }}
            </div>
        @else
            <div class="alert alert-info text-center">
                Aucun site disponible pour le moment.
            </div>
        @endif

    </div>

    <!-- Style pour animation hover -->
    <style>
        .table-row:hover {
            background-color: #e2f0ff !important;
        }

        .table img:hover {
            transform: scale(1.2);
            transition: transform 0.3s;
        }
    </style>
@endsection
