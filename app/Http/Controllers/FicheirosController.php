<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monografia;

class FicheirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monografia=Monografia::find($id);
        if (isset($monografia)) {
                $ficheiro= $monografia->ficheiro()->first();
               // dd($ficheiro);
            if (isset($ficheiro)) {
                ob_end_clean();
            return response()->download("./imagem/".$ficheiro->path, sprintf("%s.%s", $ficheiro->path, $ficheiro->extensao), ['Content-Type' => $ficheiro->mime]);
            }else{
              Session::flash('error','Ficheiro não encontrado');
         }
        }else{
          Session::flash('error','Monografia não existente ');
        }


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
}
