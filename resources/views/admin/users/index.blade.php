@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">Liste des utilisateurs</h2>

        <form method="GET" class="row mb-3 ">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Rechercher..."
                    value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="is_admin" class="form-select">
                    <option value="">Tous</option>
                    <option value="1" {{ request('is_admin') === '1' ? 'selected' : '' }}>Admin</option>
                    <option value="0" {{ request('is_admin') === '0' ? 'selected' : '' }}>Utilisateur</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Filtrer</button>
            </div>
                <a href="{{ route('users.create') }}" class="btn btn-success mt-3">Ajouter un utilisateur</a>
        </form>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-success">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Matricule</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Groupe</th>
                        <th>Admin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->nom }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>{{ $user->matricule }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>{{ $user->groupe->nom ?? '-' }}</td>
                            <td>{{ $user->is_admin ? 'Oui' : 'Non' }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Editer</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }}
        </div>


    </div>
@endsection
