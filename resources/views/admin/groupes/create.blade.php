@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <br><br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 p-4 animate__animated animate__fadeInDown">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-success">
                            {{ isset($groupe) ? 'Modifier le Groupe' : 'Ajouter un Groupe' }}
                        </h2>
                        <p class="text-muted">Remplissez le formulaire pour {{ isset($groupe) ? 'mettre à jour' : 'créer' }}
                            un groupe.</p>
                    </div>

                    <form action="{{ isset($groupe) ? route('groupes.update', $groupe) : route('groupes.store') }}"
                        method="POST" class="needs-validation" novalidate>
                        @csrf
                        @if (isset($groupe))
                            @method('PUT')
                        @endif

                        <div class="mb-3 form-floating">
                            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"
                                value="{{ $groupe->nom ?? old('nom') }}" id="nom" placeholder="Nom du groupe"
                                required>
                            <label for="nom">Nom du Groupe</label>
                            @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror"
                                value="{{ $groupe->libelle ?? old('libelle') }}" id="libelle" placeholder="Libellé"
                                required>
                            <label for="libelle">Libellé</label>
                            @error('libelle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-start gap-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary btn-lg fw-bold animate__animated animate__pulse animate__infinite w-50">
                                {{ isset($groupe) ? 'Mettre à jour' : 'Créer' }}
                            </button>
                            <a href="{{ route('groupes.index') }}" class="btn btn-secondary btn-lg w-50">
                                Annuler
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajouter Animate.css -->
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @endpush

    <!-- Validation Bootstrap -->
    @push('scripts')
        <script>
            (function() {
                'use strict'
                var forms = document.querySelectorAll('.needs-validation')
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
    @endpush
@endsection
