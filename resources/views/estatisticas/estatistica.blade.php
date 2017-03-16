@extends('layouts.main')

@section('title', '| Faculdade')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
          <form class="form-inline" method="post" action="{{route('estatisticas')}}">
            <div class="form-group">
              <div class="input-group">
                <label for="ano">Ano</label>
                <input type="text" class="form-control" name="ano" placeholder="Ano">
              </div>
              <div class="input-group">
                <label for="area">Área Científica</label>
                <select class="form-control" name="area">
                  <option>Escolha a área científica</option>
                  @foreach($areas as $area)
                  <option value="{{$area->id}}">{{$area->designacao}}</option>
                  @endforeach
                </select>
              </div>
              <div class="input-group">
                <label for="supervisor">Supervisor</label>
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Área Científica">
              </div>
            </div>
            <button type="submit" class="btn btn-primary glyphicon">Gerar</button>
          </form>
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
              <th>Curso</th>
              <th>Ano</th>
              <th>Qtd de Monografias</th>
            </tr>
            @foreach($monografias as $monografia)
            <td>{{$monografia->curso->designacao}}</td>
            <td>{{date('Y',$monografia->created_at)}}</td>
            <td>{{count($monografia->curso->monografias)}}</td>
            @endforeach
          </table>
        </div>
        <div class="col-md-2 col-md-offset-7">
          <a href="#" class="btn btn-primary btn-lg btn-block btn-h1-spacing">Baixar em pdf</a>
        </div>
    </div>

@endsection
