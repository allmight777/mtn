@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card p-4 shadow">
            <h2 class="mb-4"
                style="font-weight: 700; font-size: 1.8rem; color: #29aa49; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">

                <span class="badge bg-danger" style="font-size: 1rem;"> {{ $site->site_id }} : {{ $site->name }} </span>
            </h2>



            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('sites.update', $site->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Site ID</label>
                        <input type="text" name="site_id" class="form-control input-red"
                            value="{{ old('site_id', $site->site_id) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Nom</label>
                        <input type="text" name="name" class="form-control input-red"
                            value="{{ old('name', $site->name) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label>Localité</label>
                        <input type="text" name="locality" class="form-control input-red"
                            value="{{ old('locality', $site->locality) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Département</label>
                        <input type="text" name="department" class="form-control input-red"
                            value="{{ old('department', $site->department) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label>Puissance (kW)</label>
                        <input type="number" step="0.1" name="power_capacity" class="form-control input-red"
                            value="{{ old('power_capacity', $site->power_capacity) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Capacité stockage (kWh)</label>
                        <input type="number" step="0.1" name="storage_capacity" class="form-control input-red"
                            value="{{ old('storage_capacity', $site->storage_capacity) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control input-red"
                            value="{{ old('type', $site->type) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Statut</label>
                        <input type="text" name="status" class="form-control input-red"
                            value="{{ old('status', $site->status) }}" required>
                    </div>

                    <div class="col-12">
                        <label>Actions en cours</label>
                        <textarea name="actions" class="form-control input-red">{{ old('actions', $site->actions) }}</textarea>
                    </div>

                    <div class="col-12">
                        <label>Photo du site</label>
                        <input type="file" name="image" class="form-control input-red">
                        @if ($site->image)
                            <img src="{{ asset('storage/' . $site->image) }}" alt="Photo site" class="img-thumbnail mt-2"
                                style="max-width: 200px;">
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('sites.index') }}" class="btn btn-secondary rounded-pill px-4 py-2 ">Retour</a>
                    <button type="submit" class="btn btn-success rounded-pill px-4 py-2">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .input-red {
            border: 0.5px solid rgb(230, 201, 201);
            box-shadow: 0 0 8px rgb(255, 211, 211);
            border-radius: 6px;
            height: 45px;
        }

        textarea.input-red {
            height: 80px;
            box-shadow: 0 0 8px rgb(247, 217, 217);
        }
    </style>
@endsection
