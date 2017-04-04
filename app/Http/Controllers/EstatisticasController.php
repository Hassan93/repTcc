<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Monografia;
use App\Curso;
use Session;
class EstatisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $areas = Area::all();
      $cursos = Curso::all();
      return view('estatisticas.index')->withAreas($areas)->withCursos($cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $supervisor = $request->input('supervisor');
          if ($request->input('area')!='') {
              $area = Area::find($request->input('area'));
              $cursos= Curso::where('area_id', '=', $area->id)->get();
          }else($supervisor!='') {
            // $monografias= Monografia::where('supervisor', 'like', '%'.$supervisor.'%')->get();
            // $cursos = arrayCursos($monografias);
          }

      // echo "Area".$request->input('area');

           $monografias = $area->monografias;
           $areas = Area::all();

           Session::flash('success', 'Escatisticas carregadas com sucesso!');

        return view('estatisticas.index')->withCursos($cursos)->withAreas($areas);


    }

    public function arrayCursos($array)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //
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
    public function estatisticas(Request $request)
    {
    //   $area = Area::find($request->input('area'));
    //   $cursos= Curso::where('area_id', '=', $area->id);
    //  // $monografias = $area->monografias;
    //   $areas = Area::all();

    // return view('estatisticas.estatistica')->withCursos($cursos)->withAreas($areas);
    }
}
