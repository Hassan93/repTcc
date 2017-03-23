<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Area;
use App\Ficheiro;
use App\Monografia;
use Session;

class HomeController extends Controller
{
    public function faculdade($id)
    {
        //echo "string".$id;
        $area = Area::find($id);
        $monografias = Monografia::where('area_id', '=', $area->id)->paginate(5);
        $cursos = Curso::where('area_id', '=', $area->id)->get();
        return view('homes.faculdade')->withMonografias($monografias)->withCursos($cursos)->withArea($area);
    }
    public function editar($faculdade, $monografia)
    {
      $monografia = Monografia::find($monografia);

      if($monografia->estado =="Publicada"){
        Session::flash('error', 'Essa monografia esta publicada! Diga ao administrador para despublicar, so assim podera edita-la');
        return redirect(url('faculdade/'.$faculdade));
      }else{
        $area = Area::find($faculdade);
        $cursos= Curso::where('area_id', '=', $area->id)->get();
        return view('homes.edit')->withArea($area)->withMonografia($monografia)->withCursos($cursos);
      }

    }

    public function edit(Request $request, $faculdade, $monografia)
    {
      $monografia= Monografia::find($monografia);

          $monografia->update(['autor'=>$request->input('autor')]);
          $monografia->update(['supervisor'=>$request->input('supervisor')]);
          $monografia->update(['titulo'=>$request->input('titulo')]);
          $monografia->update(['resumo'=>$request->input('resumo')]);
          $monografia->update(['curso_id'=>$request->input('curso')]);

          Session::flash('success', 'Dados da Monografia actualizados');
        return redirect(url('faculdade/'.$faculdade));
    }

    public function setMonografia(Request $request, $id)
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
                $monografia->area_id=$id;
                $monografia->titulo=$request->input('titulo');
                $monografia->resumo=$request->input('resumo');

                $monografia->save();

                $ficheiro->monografia()->associate($monografia);
                $ficheiro->path =$path;             
          if ($ficheiro->save()) {                      
                $file->move("./imagem",$path);  
                Session::flash('success', 'Sucesso! Monografia carregada com sucesso!');
                return redirect('/faculdade/'.$id);        
          } else {
                // errado
          }
              echo "pdf";

          } else {
              // errado
             echo "não";
          }
            
          
        } else {
            echo 'nao tem';
        }

        //return redirect('faculdade.index');
    }


    public function visitante($value='')
    {
      return view('homes.visitante');
    }
    public function admin()
    {
      return view('homes.admin');
    }
    public function estatisticas($value='')
    {
      return view('estatisticas.index');
    }
    public function usuarios($value='')
    {
      return view('usuarios.index');

    }
}
