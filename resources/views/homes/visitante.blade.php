@extends('layouts.main')

@section('title', '| Visitante')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form class="form-inline" method="Post" action="{{url('/pesquisa')}}">
            {{csrf_field()}}
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" name="autor" placeholder="Autor">
              </div>
              <div class="input-group">
                  <label for="">|</label>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" name="titulo" placeholder="Título">
              </div>
              <div class="input-group">
                  <label for="">|</label>
              </div>
              <div class="input-group">
                <select class="form-control" name="area">
                  <option value = "-1">Escolha a área científica</option>
                  @foreach($areas as $area)
                  <option value="{{$area->id}}">{{$area->designacao}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
          </form>
        </div>
        <div class="col-md-8  col-md-offset-1">
          <hr>
        </div>
        <div class="col-md-8 col-md-offset-1">
          <table class="table table-hover">
            <tr>
              <th>Informacões da Monografia</th>
              <th>Monografia em pdf</th>
            </tr>
            @foreach($monografias as $monografia)
            <tr id="{{$monografia->id}}" onClick="myFunction({{$monografia->id}})">
              <td>
                Autor: {{$monografia->autor}} <br/>
                Supervisor: {{$monografia->supervisor}} <br/>
                Título: {{$monografia->titulo}}
                <div id ="{{'resumo'.$monografia->id}}" hidden>{{$monografia->resumo}}</div>
              </td>
              <td>
                <a href="{{route('download', ['id'=>$monografia->id])}}", class="glyphicon glyphicon-download">Encontre aqui o ficheiro</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <div class="col-md-3" id="resumo">
          <label for="resumo">Resumo</label>
          <div class="well" id="texto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </ul>
          </div>
        </div>
    </div>
    <div class="text-center">
        {!! $monografias->links()!!} <!--Pagination-->
    </div>
@endsection
<script type="text/javascript">
function myFunction(id) {
var resumo = document.getElementById("resumo"+id).innerHTML;
 document.getElementById("texto").innerHTML=resumo;

}
</script>
