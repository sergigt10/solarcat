<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
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
            'historia-escola-30-pasos',
            'serveis-educatius/acollida-de-mati-i-tardes',
            'serveis-educatius/espai-migdia',
            'serveis-educatius/extraescolars',
            'serveis-educatius/casal-destiu-2024',
            'consell-escolar',
            'documents-centre',
            'contacte',
            'projecte-educatiu-del-centre',
            'menu-migdia',
            'calendari-escola-30-pasos',
            'noticies-escola-30-pasos',
            'projectes-actius-escola-30-pasos',
            'instalacions-escola-30-pasos'
        ];
        return response()->view('frontend.sitemap.statics', [
            'statics' => $statics,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }

    public function noticies()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');

        $noticies = Noticia::all();
        return response()->view('frontend.sitemap.noticies', [
            'noticies' => $noticies,
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
