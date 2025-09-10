@extends('layouts.app')

@section('content')
<div class="container-fluid mt-2">

    <h2 class="mb-5 text-center fw-bold">Gestion Utilisateurs et Groupes</h2>
    <!-- Cards colorées -->
    <div class="row g-4 justify-content-center mb-5">
        <div class="col-md-5">
            <a href="{{ route('groupes.index') }}" class="text-decoration-none">
                <div class="card text-white shadow-lg hover-zoom"
                     style="height: 200px; background-color: #4e73df; border-radius: 20px; display:flex; align-items:center; justify-content:center;">
                    <div class="text-center">
                        <h3 class="fw-bold">Groupes</h3>
                        <p class="fs-5">{{ $totalGroupes }} groupes</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5">
            <a href="{{ route('users.index') }}" class="text-decoration-none">
                <div class="card text-white shadow-lg hover-zoom"
                     style="height: 200px; background-color: #1cc88a; border-radius: 20px; display:flex; align-items:center; justify-content:center;">
                    <div class="text-center">
                        <h3 class="fw-bold">Utilisateurs</h3>
                        <p class="fs-5">{{ $totalUsers }} inscrits</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

<!-- Graphiques -->
<div class="d-flex mb-5 justify-content-between">
    <!-- Graphique à gauche -->
    <div style="width: 65%;">
        <div class="card p-3 shadow-sm" style="height: 450px;">
            <h5 class="mb-3">Utilisateurs par groupe</h5>
            <canvas id="barChart" style="height: 320px;"></canvas>
        </div>
    </div>

    <!-- Graphique à droite -->
    <div style="width: 30%;">
        <div class="card p-3 shadow-sm" style="height: 450px;">

       <center>   <canvas id="doughnutChart" style="height: 200px;"></canvas></center>
        </div>
    </div>
</div>



    <!-- Tableau des derniers utilisateurs -->
    <div class="card p-3 shadow-sm">
        <h5 class="mb-3">Derniers utilisateurs inscrits</h5>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Groupe</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentUsers as $user)
                    <tr>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->groupe->nom ?? '-' }}</td>
                        <td>{{ $user->is_admin ? 'Oui' : 'Non' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Bar chart : utilisateurs par groupe
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: @json($usersByGroup->pluck('nom')),
            datasets: [{
                label: 'Nombre d\'utilisateurs',
                data: @json($usersByGroup->pluck('users_count')),
                backgroundColor: '#4e73df'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, stepSize: 1 } }
        }
    });

    // Doughnut chart : admin vs non-admin
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    new Chart(doughnutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Admin', 'Utilisateur'],
            datasets: [{
                data: [{{ $adminCount }}, {{ $nonAdminCount }}],
                backgroundColor: ['#f6c23e', '#1cc88a'],
                hoverOffset: 10
            }]
        },
        options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
    });
});
</script>
@endpush
