<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Projecte;

use Illuminate\Support\Str as Str;
use Artesaos\SEOTools\Facades\SEOTools;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        SEOTools::setTitle("Solarcat");
        SEOTools::setCanonical('https://www.solarcat.es');

        $projectes = Projecte::orderBy('ordre', 'asc')->where('actiu','=',1)->take(8)->get();

        return view('frontend.home.index')
            ->with('projectes', $projectes);
    }

    public function empresa()
    {
        SEOTools::setTitle("Empresa Solarcat");
        
        return view('frontend.empresa.index');
    }

    public function productos()
    {
        SEOTools::setTitle("Productos Solarcat");
        
        return view('frontend.productos.index');
    }

    public function fotovoltaicaViviendas()
    {
        SEOTools::setTitle("Fotovoltaica para viviendas");
        
        return view('frontend.fotovoltaicaViviendas.index');
    }

    public function fotovoltaicaEmpresas()
    {
        SEOTools::setTitle("Fotovoltaica para empresas");
        
        return view('frontend.fotovoltaicaEmpresas.index');
    }

    public function projectes()
    {
        SEOTools::setTitle("Solarcat projecte");

        $projectes = Projecte::orderBy('ordre', 'asc')->where('actiu','=',1)->paginate(9, ['*'], 'pagina');

        return view('frontend.projectes.index')
            ->with('projectes', $projectes);
    }

    public function showProjecte($slug)
    {
        SEOTools::setTitle("Solarcat projecte");

        $projecte = Projecte::where('slug','=', $slug)->where('actiu','=',1)->firstOrFail();

        return view('frontend.projectes.show')
            ->with('projecte', $projecte);
    }

    public function contacte()
    {
        SEOTools::setTitle("Contacte Solarcat");
        
        return view('frontend.contacte.index');
    }

    public function sendEmail(Request $request){

        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'poblacio' => $request->poblacio,
            'message' => $request->message,
        ];

        $AdminMessage  = "Formulari de contacte WEB\n\n";
        $AdminMessage .= "Nom i cognoms: ".utf8_decode($data['name'])."\n";
        $AdminMessage .= "Email: ".utf8_decode($data['email'])."\n";
        $AdminMessage .= "Pobl.: ".utf8_decode($data['poblacio'])."\n";
        $AdminMessage .= "Missatge: ".utf8_decode($data['message'])."\n";
    
        mail("phxhollow13@hotmail.com", "Formulari de contacte WEB", $AdminMessage);

        // Mail::to('phxhollow13@hotmail.com')->send(new ContactMail($data));

        return back()->with(['message_mail' => 'Missatge enviat correctament! En breu ens posarem en contacte. Moltes gràcies']);
    }

}
