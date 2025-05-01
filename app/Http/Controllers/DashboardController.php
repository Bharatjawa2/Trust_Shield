<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mock data for demonstration
        $stats = [
            'total_scans' => 1500,
            'authentic_products' => 1200,
            'counterfeit_products' => 300,
            'recent_scans' => [
                ['code' => 'ABC123', 'status' => 'Authentic', 'time' => '2 minutes ago'],
                ['code' => 'XYZ789', 'status' => 'Counterfeit', 'time' => '5 minutes ago'],
                ['code' => 'DEF456', 'status' => 'Authentic', 'time' => '10 minutes ago'],
            ]
        ];

        return view('dashboard.index', compact('stats'));
    }
} 