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
        
        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-3">
          @include('partials._nav');
        </div>
        <div class="col-md-8 col-md-offset-1">
            <form class="" action="{{url('monografia/'.$monografia->id.'/edit')}}" method="post" data-parsley-validate="">
            {{ csrf_field() }}
            <div class="col-md-9">
              <label for="autor">Autor:</label>
              <input type="text" class="form-control" name="autor" value="{{$monografia->autor}}">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="supervisor">Supervisor:</label>
              <input type="text" class="form-control" name="supervisor" value="{{$monografia->supervisor}}">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="curso">Curso:</label>
              <select class="form-control" name="curso">
                <option value="{{$monografia->curso->id}}">{{$monografia->curso->designacao}}</option>
                @foreach($cursos as $curso)
                  <option value="{{$curso->id}}">{{$curso->designacao}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="area">Área Científica:</label>
              <select class="form-control" name="area">
                <option value="{{$monografia->area->id}}">{{$monografia->curso->designacao}}</option>
                @foreach($areas as $area)
                  <option value="{{$area->id}}">{{$area->designacao}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="titulo">Título:</label>
              <input type="text" class="form-control" name="titulo" value="{{$monografia->titulo}}">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="chave">Palavras-chave:</label>
              <textarea class="form-control" name="resumo" rows="3" cols="70">{{$monografia->resumo}}</textarea>
            </div>
           <div class="col-sm-5" style="margin-top:10px">
             {!! Form::button('Cancelar', array('class' =>'btn btn-danger btn-block' ))!!}
           </div>
           <div class="col-sm-5" style="margin-top:10px">
             {{ Form::submit('Gravar as Alteracoes', array('class'=>'btn btn-success btn-block'))}}
         </div>
        </form>
        </div>
        
    </div>

@endsection

