<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Equip;
use App\Models\Instalacio;
use App\Models\ProjecteCentre;
use App\Models\Historia;
use App\Models\EscolaFamilia;
use App\Models\Slide;
use App\Models\Noticia;
use App\Models\Projecte;
use App\Models\Calendari;
use App\Models\ConsellEscolar;
use App\Models\ServeiEducatiu;
use App\Models\DocumentCentre;
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
        SEOTools::setTitle("Institut Escola Els 30 Passos");
        SEOTools::setCanonical('https://www.solarcat.cat');

        $ordreSlide = Slide::orderBy('id')->get();
        $slider1 = $ordreSlide->get(0);
        $slider2 = $ordreSlide->get(1);
        $slider3 = $ordreSlide->get(2);

        $noticies = Noticia::orderBy('data', 'desc')->where('actiu','=',1)->take(3)->get();
        $latestYear = Noticia::max('any');

        return view('frontend.home.index')
            ->with('slider1', $slider1)
            ->with('slider2', $slider2)
            ->with('slider3', $slider3)
            ->with('noticies', $noticies)
            ->with('latestYear', $latestYear);
    }

    // public function portada()
    // {
    //     SEOTools::setTitle("Escola els 30 passos");

    //     return view('frontend.portada.index');
    // }

    public function equip()
    {
        SEOTools::setTitle("Equip docent Institut Escola Els 30 Passos");

        $equipAdministracio = Equip::where('categoria','LIKE',"%Personal d'administració i serveis%")->orderBy('ordre')->get();
        $equipInfantil = Equip::where('categoria','LIKE',"%Equip docent d'infantil%")->orderBy('ordre')->get();
        $equipPrimaria = Equip::where('categoria','LIKE','%Equip docent de primària%')->orderBy('ordre')->get();
        $equipEspecial = Equip::where('categoria','LIKE','%Mestres especialistes%')->orderBy('ordre')->get();

        return view('frontend.equip.index')
            ->with('equipAdministracio', $equipAdministracio)
            ->with('equipInfantil', $equipInfantil)
            ->with('equipPrimaria', $equipPrimaria)
            ->with('equipEspecial', $equipEspecial);
    }

    public function instalacions()
    {
        SEOTools::setTitle("Instal·lacions Institut Escola Els 30 Passos");

        $instalacions = Instalacio::first();

        return view('frontend.instalacions.index')
            ->with('instalacions', $instalacions);
    }

    public function projecteEducatiu()
    {
        SEOTools::setTitle("Projecte educatiu del centre Institut Escola Els 30 Passos");

        $projectes = ProjecteCentre::first();

        return view('frontend.projecteEducatiu.index')
            ->with('projectes', $projectes);
    }

    public function historia()
    {
        SEOTools::setTitle("Història Institut Escola Els 30 Passos");

        $histories = Historia::first();

        return view('frontend.histories.index')
            ->with('histories', $histories);
    }

    public function escolaFamilia()
    {
        SEOTools::setTitle("Escola Familia Institut Escola Els 30 Passos");

        $escolaFamilia = EscolaFamilia::first();

        return view('frontend.escolaFamilies.index')
            ->with('escolaFamilia', $escolaFamilia);
    }

    public function menus()
    {
        SEOTools::setTitle("Menú migdia Institut Escola Els 30 Passos");

        $menus = Menu::orderBy('ordre')->get();

        return view('frontend.menus.index')
            ->with('menus', $menus);
    }

    public function calendari()
    {
        SEOTools::setTitle("Calendari Institut Escola Els 30 Passos");

        $calendari = Calendari::first();

        return view('frontend.calendari.index')
            ->with('calendari', $calendari);
    }

    public function noticies($year=null)
    {
        SEOTools::setTitle('Notícies Institut Escola Els 30 Passos');

        if(!$year) $year = date("Y");

        $noticies = Noticia::where('any','=',$year)->where('actiu','=',1)->orderBy('data', 'desc')->paginate(16, ['*'], 'pagina');
        $years = Noticia::select('any')->groupBy('any')->orderBy('any', 'desc')->get();
        
        return view('frontend.noticies.index')
            ->with('noticies', $noticies)
            ->with('years', $years)
            ->with('any', $year);
    }

    public function showNoticia($slug)
    {
        $noticia = Noticia::where('slug','=', $slug)->where('actiu','=',1)->firstOrFail();

        SEOTools::setTitle(ucfirst($noticia->titol).' - Institut Escola Els 30 Passos');
        SEOTools::setDescription(Str::limit(strip_tags($noticia->descripcio)), 155, ' (...)');

        return view('frontend.noticies.show', compact('noticia'));
    }

    public function projectes()
    {
        SEOTools::setTitle('Projectes actius Institut Escola Els 30 Passos');

        $projectes = Projecte::orderBy('ordre', 'desc')->paginate(16, ['*'], 'pagina');
        
        return view('frontend.projectes.index')
            ->with('projectes', $projectes);
    }

    public function showProjecte($slug)
    {
        $projecte = Projecte::where('slug','=', $slug)->firstOrFail();

        SEOTools::setTitle(ucfirst($projecte->titol).' - Institut Escola Els 30 Passos');
        SEOTools::setDescription(Str::limit(strip_tags($projecte->descripcio)), 155, ' (...)');

        return view('frontend.projectes.show', compact('projecte'));
    }

    public function consellEscolar()
    {
        SEOTools::setTitle("Consell escolar - Institut Escola Els 30 Passos");

        $consellEscolar = ConsellEscolar::orderBy('id')->get();
        $consellEscolarInformacio = $consellEscolar->get(0);
        $consellEscolarCampText = $consellEscolar->get(1);

        return view('frontend.consellEscolar.index')
            ->with('consellEscolarInformacio', $consellEscolarInformacio)
            ->with('consellEscolarCampText', $consellEscolarCampText);
    }

    public function serveisEducatius($slug)
    {
        SEOTools::setTitle("Serveis educatius Institut Escola Els 30 Passos");

        $serveisEducatius = ServeiEducatiu::where('slug','=',$slug)->firstOrFail();

        return view('frontend.serveisEducatius.index')
            ->with('serveisEducatius', $serveisEducatius);
    }

    public function documentsCentre()
    {
        SEOTools::setTitle("Documents centre Institut Escola Els 30 Passos");

        $texteDocumentsCentre = DocumentCentre::where('id','=',7)->firstOrFail();
        $documentsCentre = DocumentCentre::where('id','!=',7)->get();

        return view('frontend.documentsCentre.index')
            ->with('texteDocumentsCentre', $texteDocumentsCentre)
            ->with('documentsCentre', $documentsCentre);
    }

    public function contacte()
    {
        SEOTools::setTitle("Contacte Institut Escola Els 30 Passos");
        
        return view('frontend.contacte.index');
    }

    public function sendEmail(Request $request){

        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        $AdminMessage  = "Formulari de contacte WEB\n\n";
        $AdminMessage .= "Nom i cognoms: ".utf8_decode($data['name'])."\n";
        $AdminMessage .= "Email: ".utf8_decode($data['email'])."\n";
        $AdminMessage .= "Missatge: ".utf8_decode($data['message'])."\n";
    
        mail("a8074641@xtec.cat", "Formulari de contacte WEB", $AdminMessage);

        // Mail::to('phxhollow13@hotmail.com')->send(new ContactMail($data));

        return back()->with(['message_mail' => 'Missatge enviat correctament! En breu ens posarem en contacte. Moltes gràcies']);
    }

    public function cookies()
    {
        SEOTools::setTitle("Política de cookies Institut Escola Els 30 Passos");
        
        return view('frontend.legal.politica-cookies.index');
    }

}
