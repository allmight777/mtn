@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">Gestion des groupes</h2>
        <a href="{{ route('groupes.create') }}" class="btn btn-success mb-3">Ajouter un groupe</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card p-3 shadow-sm">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>Nom</th>
                            <th>Libellé</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groupes as $groupe)
                            <tr>
                                <td>{{ $groupe->nom }}</td>
                                <td>{{ $groupe->libelle }}</td>
                                <td>
                                    <a href="{{ route('groupes.edit', $groupe) }}"
                                        class="btn btn-primary btn-sm">Modifier</a>
                                    <form action="{{ route('groupes.destroy', $groupe) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Voulez-vous vraiment supprimer ce groupe ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
