@extends('layouts.main')

@section('title', '| Visitante')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <form class="form-inline">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Autor">
              </div>
              <div class="input-group">
                  <label for="">OR</label>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Título">
              </div>
              <div class="input-group">
                  <label for="">OR</label>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Área Científica">
              </div>
            </div>
            <button type="submit" class="btn btn-primary glyphicon glyphicon-search">Pesquisar</button>
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
            <tr onclick="myFunction()">
              <td>
                Autor: Sérgio Bata <br/>
                Supervisor: Rodrigues Zicai Fazenda <br/>
                Título: Desenvolvimento dum sistema web para gestão de monografias
              </td>
              <td>
                <a href="#", class="glyphicon glyphicon-download">Encontre aqui o ficheiro</a>
              </td>
            </tr>
            <tr>
              <td>
                Autor: Manuel Severino<br/>
                Supervisor: Jorge Sebastião <br/>
                Título: Uso de Telefones celulares em mocambique
              </td>
              <td>
                <a href="#", class="glyphicon glyphicon-download">Encontre o ficheiro aqui</a>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-3" id="resumo">
          <label for="resumo">Resumo</label>
          <div class="well">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </ul>
          </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
function myFunction() {
vdocument.getElementById("resumo").hidden = false;
}
</script>
