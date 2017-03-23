@extends('layouts.main')

@section('title', '| Faculdade')

@section('content')
    <div class="row">
        <div class="col-md-3">
          <form class="form-inline">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Pesquisar">
              </div>
            </div>
            <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
          </form>
        </div>
        <div class='col-md-3 col-md-offset-6'>
         <a href="#" data-toggle="modal" data-target="#myModal" class=" btn btn-primary btn-lg btn-block btn-h1-spacing">Cadastrar Monografia</a>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-3">
          @include('partials._nav');
        </div>
        <div class="col-md-9">
          <table class="table table-bordered">
            <tr>
              <th>Autor</th>
              <th>Área Científica</th>
              <th>Título</th>
              <th>Estado</th>
              <th>Accão</th>
            </tr>
            @foreach($monografias as $monografia)
            <tr>
              <td>{{$monografia->autor}}</td>
              <td>{{$monografia->area->designacao}}</td>
              <td>{{$monografia->titulo}}</td>
              <td>{{$monografia->estado}}</td>
              <td>
                <a href="{{url('monografias/'.$monografia->id.'/edit')}}", class="btn btn-primary glyphicon glyphicon-pencil"></a>
                <form action="{{route('monografias.destroy', ['id'=>$monografia->id])}} " method="delete">
                  <button type="submit" class="btn btn-danger glyphicon glyphicon-remove"></button> 
                </form>
                <a href="{{url('/monografia/'.$monografia->id.'/publicar')}}" class="btn btn-primary glyphicon glyphicon-zoom-in"></a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>

    </div>
    <div class="text-center">
       {!! $monografias->links()!!} <!--Pagination-->
    </div>
@endsection

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Carregar Monografia</h1>
      </div>
      <div class="modal-body">
        <form class="" action="{{route('monografias.store')}}" method="post" data-parsley-validate="" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-9">
              <label for="autor">Autor:</label>
              <input type="text" class="form-control" name="autor" value="">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="supervisor">Supervisor:</label>
              <input type="text" class="form-control" name="supervisor" value="">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="curso">Curso:</label>
              <select class="form-control" name="curso">
                <option value="">Escolha o curso</option>
                @foreach($cursos as $curso)
                  <option value="{{$curso->id}}">{{$curso->designacao}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="area">Área Científica:</label>
              <select class="form-control" name="area">
                <option value="">Escolha a área</option>
                @foreach($areas as $area)
                  <option value="{{$area->id}}">{{$area->designacao}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="titulo">Título:</label>
              <input type="text" class="form-control" name="titulo" value="">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="data_encontro">Data da Defesa:</label>
              <input type="date" class="form-control" name="data_encontro" value="">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="chave">Palavras-chave:</label>
              <textarea class="form-control" name="resumo" rows="3" cols="70"></textarea>
            </div>
            <div class="form-group col-md-9 form-spacing-top">
             <label for="file">Carregue a monografia</label>
             <input type="file" name="file" class="glyphicon glyphicon-upload">
           </div>

           <div class="col-sm-6" style="margin-top:10px">
             {!! Form::button('Cancel', array('class' =>'btn btn-danger btn-block' ))!!}
           </div>
           <div class="col-sm-6" style="margin-top:10px">
             {{ Form::submit('Carregar', array('class'=>'btn btn-success btn-block'))}}
         </div>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<!--Validar-->

