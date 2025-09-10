@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">


            <h2 class="mb-4"
                style="font-weight: 700; font-size: 1.8rem; color: #aa2929; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">

                <span class="badge bg-danger" style="font-size: 1.3rem;">Modifier un site </span>
            </h2>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ str_replace(
                                ['The email has already been taken.', 'The matricule has already been taken.'],
                                [
                                    '⚠️ Cet email existe déjà, veuillez en saisir un autre.',
                                    '⚠️ Ce matricule existe déjà, veuillez en saisir un autre.',
                                ],
                                $error,
                            ) }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" name="nom" class="form-control form-control-lg"
                            value="{{ old('nom', $user->nom) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Prénom</label>
                        <input type="text" name="prenom" class="form-control form-control-lg"
                            value="{{ old('prenom', $user->prenom) }}" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Matricule</label>
                        <input type="text" name="matricule" class="form-control form-control-lg"
                            value="{{ old('matricule', $user->matricule) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Contact</label>
                        <input type="text" name="contact" class="form-control form-control-lg"
                            value="{{ old('contact', $user->contact) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg"
                            value="{{ old('email', $user->email) }}" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Mot de passe (laisser vide si inchangé)</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Confirmer le mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg">
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Groupe</label>
                        <select name="groupe_id" class="form-select form-select-lg" required>
                            @foreach ($groupes as $groupe)
                                <option value="{{ $groupe->id }}" {{ $user->groupe_id == $groupe->id ? 'selected' : '' }}>
                                    {{ $groupe->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Admin ?</label>
                        <select name="is_admin" class="form-select form-select-lg" required>
                            <option value="0" {{ !$user->is_admin ? 'selected' : '' }}>Non</option>
                            <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Oui</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Actif ?</label>
                        <select name="is_actif" class="form-select form-select-lg" required>
                            <option value="1" {{ $user->is_actif ? 'selected' : '' }}>Oui</option>
                            <option value="0" {{ !$user->is_actif ? 'selected' : '' }}>Non</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-lg w-25">Annuler</a>
                    <button type="submit" class="btn btn-primary btn-lg w-25">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
@endsection
