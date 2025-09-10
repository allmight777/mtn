@extends('layouts.app')

@section('content')
    <div class="container-fluid">
     

        <div class="row mb-4 w-100">
            <div class="col-md-4 w-100">
                <div class="card p-3 shadow-sm text-center" style="background-color: rgb(255, 211, 211);">
                    <strong><h5>Statistiques des Sites : Total des sites {{ $totalSites }}</h5></strong>

                </div>
            </div>
        </div>

        <div class="row">
            <!-- Statut -->
            <div class="col-md-4">
                <div class="card p-3 shadow-sm mb-3">
                    <h5>Répartition par statut</h5>
                    <canvas id="statusChart"></canvas>
                </div>
            </div>

            <!-- Type -->
            <div class="col-md-4">
                <div class="card p-3 shadow-sm mb-3">
                    <h5>Répartition par type</h5>
                    <canvas id="typeChart"></canvas>
                </div>

                <div class="card p-3 shadow-sm text-center" style="background-color: blanchedalmond;">
                    <i class="bi bi-bar-chart-fill fs-1 text-primary"></i>
                </div>

            </div>

            <!-- Département -->
            <div class="col-md-4">
                <div class="card p-3 shadow-sm mb-3">
                    <h5>Répartition par département</h5>
                    <canvas id="departmentChart"></canvas>
                </div>


                <div class="card p-3 shadow-sm text-center" style="background-color: rgb(209, 255, 205);">
                    <i class="bi bi-pie-chart-fill fs-1 text-warning"></i>
                </div>

            </div>
        </div>

    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card p-3 shadow-sm mb-3">
                <h5>Top 10 Sites par puissance & stockage</h5>
                <canvas id="topSitesChart"></canvas>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // ==== Statut ====
        const statusLabels = {!! json_encode(array_keys($statusStats)) !!};
        const statusData = {!! json_encode(array_values($statusStats)) !!};

        new Chart(document.getElementById('statusChart'), {
            type: 'doughnut',
            data: {
                labels: statusLabels,
                datasets: [{
                    data: statusData,
                    backgroundColor: statusLabels.map((label, i) => ['#FF6384', '#36A2EB', '#FFCE56',
                        '#8A2BE2', '#00FF7F'
                    ][i % 5])
                }]
            },
            options: {
                responsive: true
            }
        });

        // ==== Type ====
        const typeLabels = {!! json_encode(array_keys($typeStats)) !!};
        const typeData = {!! json_encode(array_values($typeStats)) !!};

        new Chart(document.getElementById('typeChart'), {
            type: 'bar',
            data: {
                labels: typeLabels,
                datasets: [{
                    label: 'Nombre de sites',
                    data: typeData,
                    backgroundColor: typeLabels.map((label, i) => ['#4BC0C0', '#FF9F40', '#FF6384',
                        '#36A2EB', '#9966FF'
                    ][i % 5])
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0
                    }
                }
            }
        });

        // ==== Département ====
        const deptLabels = {!! json_encode(array_keys($departmentStats)) !!};
        const deptData = {!! json_encode(array_values($departmentStats)) !!};

        new Chart(document.getElementById('departmentChart'), {
            type: 'bar',
            data: {
                labels: deptLabels,
                datasets: [{
                    label: 'Nombre de sites',
                    data: deptData,
                    backgroundColor: deptLabels.map((label, i) => ['#FF9F40', '#36A2EB', '#FF6384',
                        '#4BC0C0', '#9966FF'
                    ][i % 5])
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0
                    }
                }
            }
        });

        // ==== Top Sites par puissance & stockage ====
        const topSitesLabels = {!! json_encode($topSites->pluck('name')) !!};
        const powerData = {!! json_encode($topSites->pluck('power_capacity')) !!};
        const storageData = {!! json_encode($topSites->pluck('storage_capacity')) !!};

        new Chart(document.getElementById('topSitesChart'), {
            type: 'bar',
            data: {
                labels: topSitesLabels,
                datasets: [{
                        label: 'Puissance (kW)',
                        data: powerData,
                        backgroundColor: '#36A2EB'
                    },
                    {
                        label: 'Stockage (kWh)',
                        data: storageData,
                        backgroundColor: '#FFCE56'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Valeur'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Nom du site'
                        }
                    }
                },
                animation: {
                    duration: 1500,
                    easing: 'easeOutBounce'
                }
            }
        });
    </script>
@endpush
