<?php

namespace App\Http\View\Composers;

use App\Models\ServeiEducatiu;

use Illuminate\View\View;

class LayoutComposer
{
    public function compose(View $view)
    {
        $serveisEducatius = ServeiEducatiu::where('actiu','=',1)->get();

        $view->with('serveisEducatius', $serveisEducatius);
    }
}