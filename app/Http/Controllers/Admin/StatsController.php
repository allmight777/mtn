<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;

class StatsController extends Controller
{
    public function index()
    {
        // Total sites
        $totalSites = Site::count();

        // Statut (uniquement ce qui existe dans la DB)
        $statusStats = Site::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        // Type (uniquement ce qui existe dans la DB)
        $typeStats = Site::selectRaw('type, COUNT(*) as count')
            ->groupBy('type')
            ->pluck('count', 'type')
            ->toArray();

        // Département (uniquement ce qui existe dans la DB)
        $departmentStats = Site::selectRaw('department, COUNT(*) as count')
            ->groupBy('department')
            ->pluck('count', 'department')
            ->toArray();

        // Top 10 sites par puissance et stockage
        $topSites = Site::orderByDesc('power_capacity')
                        ->orderByDesc('storage_capacity')
                        ->take(10)
                        ->get(['name','power_capacity','storage_capacity']);

        return view('admin.gestionSite.stats', compact(
            'totalSites', 'statusStats', 'typeStats', 'departmentStats', 'topSites'
        ));
    }
}
