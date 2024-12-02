<?php

namespace App\Http\Controllers;

use App\Models\Projecte;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('frontend.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function statics()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');
        $statics = [
            '',
            'equip-docent',
            'proyectos-solarcat',
            'contacte'
        ];
        return response()->view('frontend.sitemap.statics', [
            'statics' => $statics,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }

    public function projectes()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');

        $projectes = Projecte::all();
        return response()->view('frontend.sitemap.projectes', [
            'projectes' => $projectes,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }
    
}
