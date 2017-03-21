<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Area;
use App\Ficheiro;
use App\Monografia;
use Session;
class MonografiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monografias = Monografia::orderBy('id', 'desc')->paginate(5);
        $cursos = Curso::all();
        $areas = Area::all();
        return view('monografias.index')->withCursos($cursos)->withAreas($areas)->withMonografias($monografias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "111";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if ($request->hasFile('file')) {
                 $file =$request->file('file');           
                  $path          =str_random(20); 

                 $ficheiro = new Ficheiro();      
                  $ficheiro->extensao = $file->guessExtension();             
                  $ficheiro->tamanho = $file->getMaxFilesize();             
                  $ficheiro->mime = $file->getMimeType();
                  
                 
          if (in_array($ficheiro->mime, ['application/x-pdf', 'application/pdf'])) {
                $monografia = new Monografia;
                $monografia->autor=$request->input('autor');
                $monografia->supervisor=$request->input('supervisor');
                $monografia->curso_id=$request->input('curso');
                $monografia->area_id=$request->input('area');
                $monografia->titulo=$request->input('titulo');
                $monografia->resumo=$request->input('resumo');
                $monografia->estado='Publicada';
                $monografia->save();

                $ficheiro->monografia()->associate($monografia);
                $ficheiro->path =$path;             
          if ($ficheiro->save()) {                      
                $file->move("./imagem",$path);  
                Session::flash('success', 'Monografia cadaastrada com sucesso.');
                return redirect(route('monografias.index'));        
          } else {
                
          }
              echo "pdf";

          } else {
              // errado
             echo "não";
          }
            
          
        } else {
            echo 'nao tem';
        }

       // return redirect('monografias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $monografia= Monografia::find($id);
      if ($request->publicar == 1) {
          $monografia->update(['estado' => 'Publicada']);
          Session::flash('success', 'Sucesso! A Monografia está acessível aos visitantes!');
      }else{
          $monografia->update(['estado' => 'Nao Publicada']);
          Session::flash('success', 'Sucesso! A Monografia foi despublicada.');
      }

    return redirect(route('monografias.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getMonografia($id)
    {
        $monografia= Monografia::find($id);
        return view('monografias.publicar')->withMonografia($monografia);
    }
}
