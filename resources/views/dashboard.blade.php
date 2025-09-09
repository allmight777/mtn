@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        {{-- Cards statistiques --}}
        <div class="cards-container mb-4">

            <a href="{{ route('sites.index') }}" class="text-decoration-none">
                <div class="card p-3 shadow-sm hover-shadow border border-success"
                    style="cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; background-color: #d1f8f1;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-muted">Gestion des sites</h5>
                            <h3 class="fw-bold text-dark">{{ $totalSites }}</h3>
                        </div>
                        <i class="bi bi-building fs-1 text-success"></i>
                    </div>
                </div>
            </a>

            <div class="card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Utilisateurs</h5>
                        <h3>{{ $totalUsers ?? 120 }}</h3>
                    </div>
                    <i class="bi bi-people fs-1 text-success"></i>
                </div>
            </div>

            <div class="card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Admins</h5>
                        <h3>{{ $totalAdmins ?? 5 }}</h3>
                    </div>
                    <i class="bi bi-person-badge fs-1 text-primary"></i>
                </div>
            </div>

            <div class="card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Comptes actifs</h5>
                        <h3>{{ $activeAccounts ?? 100 }}</h3>
                    </div>
                    <i class="bi bi-check2-circle fs-1 text-success"></i>
                </div>
            </div>

            <div class="card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Comptes en attente</h5>
                        <h3>{{ $pendingAccounts ?? 20 }}</h3>
                    </div>
                    <i class="bi bi-hourglass-split fs-1 text-warning"></i>
                </div>
            </div>
        </div>

        {{-- Graphiques --}}
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <div class="card p-3 shadow-sm">
                    <h5>Inscription Utilisateurs (Mois)</h5>
                    <div class="chart-wrapper">
                        <canvas id="usersChart"></canvas>
                    </div>
                </div>
            </div>


        </div>



        {{-- Table responsive --}}
        <div class="card p-3 shadow-sm">
            <h5>Liste des utilisateurs</h5>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Matricule</th>
                            <th>Email</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AGOLIGAN</td>
                            <td>Ange</td>
                            <td>001</td>
                            <td>ange@example.com</td>
                            <td>+229 90000000</td>
                        </tr>
                        <tr>
                            <td>DOE</td>
                            <td>John</td>
                            <td>002</td>
                            <td>john@example.com</td>
                            <td>+229 91111111</td>
                        </tr>
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
            // Users Chart
            const ctxUsers = document.getElementById('usersChart').getContext('2d');
            new Chart(ctxUsers, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Utilisateurs inscrits',
                        data: [12, 19, 3, 5, 2, 3],
                        borderColor: '#00b894',
                        backgroundColor: 'rgba(0,184,148,0.2)',
                        tension: 0.4,
                        fill: true,
                        pointRadius: 5,
                        pointHoverRadius: 7
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Accounts Chart
            const ctxAccounts = document.getElementById('accountsChart').getContext('2d');
            new Chart(ctxAccounts, {
                type: 'doughnut',
                data: {
                    labels: ['Actifs', 'Inactifs'],
                    datasets: [{
                        data: [100, 20],
                        backgroundColor: ['#00b894', '#dfe6e9'],
                        hoverOffset: 10
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                    }
                }
            });
        });
    </script>
@endpush
