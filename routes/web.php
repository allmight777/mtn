<?php

use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\ProfileController;
use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route pour afficher la page principale
Route::get('/', function () {
    return view('welcome');
});

Route::get('/healthz', function () {
    return response()->json(['status' => 'ok']);
});

// Route pour le dashboard admin

Route::get('/dashboard', function () {
    $totalSites = Site::count();

    // 10 derniers utilisateurs actifs
    $recentUsers = User::where('is_actif', 1)
        ->orderByDesc('created_at')
        ->take(10)
        ->get(['nom', 'prenom', 'matricule', 'email', 'contact']);

    // Nombre d'inscriptions par mois pour les actifs
    $activeByMonth = User::selectRaw("DATE_FORMAT(created_at, '%b %Y') as month, COUNT(*) as count")
        ->where('is_actif', 1)
        ->groupBy('month')
        ->orderByRaw('MIN(created_at)')
        ->pluck('count', 'month');

    // Nombre d'inscriptions par mois pour les en attente
    $pendingByMonth = User::selectRaw("DATE_FORMAT(created_at, '%b %Y') as month, COUNT(*) as count")
        ->where('is_actif', 0)
        ->groupBy('month')
        ->orderByRaw('MIN(created_at)')
        ->pluck('count', 'month');

    // Récupérer tous les mois pour l'axe X
    $months = $activeByMonth->keys()->merge($pendingByMonth->keys())->unique();

    return view('dashboard', compact(
        'totalSites', 'recentUsers', 'months', 'activeByMonth', 'pendingByMonth'
    ));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route pour les fonctionnalite de l'admin
Route::middleware(['auth'])->group(function () {

    // Route pour gérer les sites
    Route::resource('sites', SiteController::class);

    // Routes pour les statistiques des sites
    Route::get('/stats', [StatsController::class, 'index'])->name('stats.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
