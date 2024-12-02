<?php

namespace App\Http\Controllers;

use App\Models\Projecte;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProjectesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectes = Projecte::all();

        return view('backend.projectes.index')
            ->with('projectes', $projectes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projectes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titol_cat' => 'required',
            'titol_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_esp' => 'required',
            'ordre' => 'nullable',
            'actiu' => 'required',
            'kw' => 'required',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge2' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge3' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge4' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge5' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge6' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge7' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge8' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge9' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge10' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg'
        ]);/* Max foto 10 MB */

        $ruta_imatge1 = $request['imatge1']->store('backend/projectes', 'public');

        $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();

        if($request['imatge2']) {
            $ruta_imatge2 = $request['imatge2']->store('backend/projectes', 'public');

            $imatge2 = Image::make( storage_path("app/public/{$ruta_imatge2}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge2->save();
        }

        if($request['imatge3']) {
            $ruta_imatge3 = $request['imatge3']->store('backend/projectes', 'public');

            $imatge3 = Image::make( storage_path("app/public/{$ruta_imatge3}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge3->save();
        }

        if($request['imatge4']) {
            $ruta_imatge4 = $request['imatge4']->store('backend/projectes', 'public');

            $imatge4 = Image::make( storage_path("app/public/{$ruta_imatge4}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge4->save();
        }

        if($request['imatge5']) {
            $ruta_imatge5 = $request['imatge5']->store('backend/projectes', 'public');

            $imatge5 = Image::make( storage_path("app/public/{$ruta_imatge5}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge5->save();
        }

        if($request['imatge6']) {
            $ruta_imatge6 = $request['imatge5']->store('backend/projectes', 'public');

            $imatge6 = Image::make( storage_path("app/public/{$ruta_imatge6}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge6->save();
        }

        if($request['imatge7']) {
            $ruta_imatge5 = $request['imatge7']->store('backend/projectes', 'public');

            $imatge7 = Image::make( storage_path("app/public/{$ruta_imatge7}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge7->save();
        }

        if($request['imatge8']) {
            $ruta_imatge5 = $request['imatge8']->store('backend/projectes', 'public');

            $imatge8 = Image::make( storage_path("app/public/{$ruta_imatge8}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge8->save();
        }

        if($request['imatge9']) {
            $ruta_imatge9 = $request['imatge9']->store('backend/projectes', 'public');

            $imatge9 = Image::make( storage_path("app/public/{$ruta_imatge9}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge9->save();
        }

        if($request['imatge10']) {
            $ruta_imatge10 = $request['imatge10']->store('backend/projectes', 'public');

            $imatge10 = Image::make( storage_path("app/public/{$ruta_imatge10}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $imatge10->save();
        }

        $projecte = new Projecte($data);
        $projecte->slug = Str::of($request['titol_esp'])->slug("-");
        $projecte->imatge1 = $ruta_imatge1;

        if($request['imatge2']) {
            $projecte->imatge2 = $ruta_imatge2;
        }
        if($request['imatge3']) {
            $projecte->imatge3 = $ruta_imatge3;
        }
        if($request['imatge4']) {
            $projecte->imatge4 = $ruta_imatge4;
        }
        if($request['imatge5']) {
            $projecte->imatge5 = $ruta_imatge5;
        }
        if($request['imatge6']) {
            $projecte->imatge6 = $ruta_imatge6;
        }
        if($request['imatge7']) {
            $projecte->imatge7 = $ruta_imatge7;
        }
        if($request['imatge8']) {
            $projecte->imatge8 = $ruta_imatge8;
        }
        if($request['imatge9']) {
            $projecte->imatge9 = $ruta_imatge9;
        }
        if($request['imatge10']) {
            $projecte->imatge10 = $ruta_imatge10;
        }

        if($request->filled('ordre')){
            $projecte->ordre = $data['ordre'];
        } else {
            $projecte->ordre = 10;
        }

        $projecte->save();

        // Redireccionar
        return redirect()->action('ProjectesController@index')->with('estat', 'Projecte creat correctament');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projecte $projecte
     * @return \Illuminate\Http\Response
     */
    public function edit(Projecte $projecte)
    {
        return view('backend.projectes.edit', compact('projecte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projecte $projecte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projecte $projecte)
    {
        // Validació
        $data = $request->validate([
            'titol_cat' => 'required',
            'titol_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_esp' => 'required',
            'ordre' => 'nullable',
            'actiu' => 'required',
            'kw' => 'required'
        ]);

        // Si canviem el nom actualitzem slug
        if($projecte->titol_esp !== $data['titol_esp']) {
            $projecte->slug = Str::of($request['titol_esp'])->slug("-");
        }

        $projecte->titol_cat = $data['titol_cat'];
        $projecte->titol_esp = $data['titol_esp'];
        $projecte->descripcio_cat = $data['descripcio_cat'];
        $projecte->descripcio_esp = $data['descripcio_esp'];
        $projecte->ordre = $data['ordre'];
        $projecte->actiu = $data['actiu'];
        $projecte->kw = $data['kw'];

        if($request['del_img2'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge2"));
            $projecte->imatge2 = "";
        }
        if($request['del_img3'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge3"));
            $projecte->imatge3 = "";
        }
        if($request['del_img4'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge4"));
            $projecte->imatge4 = "";
        }
        if($request['del_img5'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge5"));
            $projecte->imatge5 = "";
        }
        if($request['del_img6'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge6"));
            $projecte->imatge6 = "";
        }
        if($request['del_img7'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge7"));
            $projecte->imatge7 = "";
        }
        if($request['del_img8'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge8"));
            $projecte->imatge8 = "";
        }
        if($request['del_img9'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge9"));
            $projecte->imatge9 = "";
        }
        if($request['del_img10'] == "1"){
            File::delete(storage_path("app/public/$projecte->imatge10"));
            $projecte->imatge10 = "";
        }

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {
            $ruta_imatge1 = $request['imatge1']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge1"))) {
                File::delete(storage_path("app/public/$projecte->imatge1"));
                // Asignar al objeto
                $projecte->imatge1 = $ruta_imatge1;
            }  
        }

        if($request['imatge2']) {
            $ruta_imatge2 = $request['imatge2']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge2}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge2"))) {
                File::delete(storage_path("app/public/$projecte->imatge2"));
                // Asignar al objeto
                $projecte->imatge2 = $ruta_imatge2;
            }  
        }

        if($request['imatge3']) {
            $ruta_imatge3 = $request['imatge3']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge3}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge3"))) {
                File::delete(storage_path("app/public/$projecte->imatge3"));
                // Asignar al objeto
                $projecte->imatge3 = $ruta_imatge3;
            }  
        }

        if($request['imatge4']) {
            $ruta_imatge4 = $request['imatge4']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge4}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge4"))) {
                File::delete(storage_path("app/public/$projecte->imatge4"));
                // Asignar al objeto
                $projecte->imatge4 = $ruta_imatge4;
            }  
        }

        if($request['imatge5']) {
            $ruta_imatge5 = $request['imatge5']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge5}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge5"))) {
                File::delete(storage_path("app/public/$projecte->imatge5"));
                // Asignar al objeto
                $projecte->imatge5 = $ruta_imatge5;
            }  
        }

        if($request['imatge6']) {
            $ruta_imatge6 = $request['imatge6']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge6}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge6"))) {
                File::delete(storage_path("app/public/$projecte->imatge6"));
                // Asignar al objeto
                $projecte->imatge6 = $ruta_imatge6;
            }  
        }

        if($request['imatge7']) {
            $ruta_imatge7 = $request['imatge7']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge7}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge7"))) {
                File::delete(storage_path("app/public/$projecte->imatge7"));
                // Asignar al objeto
                $projecte->imatge7 = $ruta_imatge7;
            }  
        }

        if($request['imatge8']) {
            $ruta_imatge8 = $request['imatge8']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge8}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge8"))) {
                File::delete(storage_path("app/public/$projecte->imatge8"));
                // Asignar al objeto
                $projecte->imatge8 = $ruta_imatge8;
            }  
        }

        if($request['imatge9']) {
            $ruta_imatge9 = $request['imatge9']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge9}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge9"))) {
                File::delete(storage_path("app/public/$projecte->imatge9"));
                // Asignar al objeto
                $projecte->imatge9 = $ruta_imatge9;
            }  
        }

        if($request['imatge10']) {
            $ruta_imatge10 = $request['imatge10']->store('backend/projectes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge10}") )->fit(1632, 1224, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$projecte->imatge10"))) {
                File::delete(storage_path("app/public/$projecte->imatge10"));
                // Asignar al objeto
                $projecte->imatge10 = $ruta_imatge10;
            }  
        }

        if($request->filled('ordre')){
            $projecte->ordre = $data['ordre'];
        } else {
            $projecte->ordre = 10;
        }

        $projecte->save();

        // Redireccionar
        return redirect()->action('ProjectesController@index')->with('estat', 'Projecte modificat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projecte $projecte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projecte $projecte)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$projecte->imatge1"))) {
            File::delete(storage_path("app/public/$projecte->imatge1"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge2"))) {
            File::delete(storage_path("app/public/$projecte->imatge2"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge3"))) {
            File::delete(storage_path("app/public/$projecte->imatge3"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge4"))) {
            File::delete(storage_path("app/public/$projecte->imatge4"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge5"))) {
            File::delete(storage_path("app/public/$projecte->imatge5"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge6"))) {
            File::delete(storage_path("app/public/$projecte->imatge6"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge7"))) {
            File::delete(storage_path("app/public/$projecte->imatge7"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge8"))) {
            File::delete(storage_path("app/public/$projecte->imatge8"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge9"))) {
            File::delete(storage_path("app/public/$projecte->imatge9"));
        }

        if (File::exists(storage_path("app/public/$projecte->imatge10"))) {
            File::delete(storage_path("app/public/$projecte->imatge10"));
        }

        $projecte->delete();
        
        return redirect()->action('ProjectesController@index')->with('estat', 'Projecte esborrat correctament');
    }
}
