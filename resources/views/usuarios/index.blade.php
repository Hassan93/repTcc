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
         <a href="#" data-toggle="modal" data-target="#myModal" class=" btn btn-primary btn-lg btn-block btn-h1-spacing glyphicon-plus"></a>
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
              <th>Designacão</th>
              <th>Funcão</th>
              <th>Último login</th>
              <th>Accão</th>
            </tr>
            <tr>
              <td>ECA</td>
              <td>Escola</td>
              <td>06/01/2017, 15:51</td>
              <td>
                <a href="#", class="btn btn-primary glyphicon glyphicon-pencil"></a>
                <a href="#", class="btn btn-danger glyphicon glyphicon-remove"></a>
              </td>
            </tr>
            <tr>
              <td>FE</td>
              <td>Faculdade</td>
              <td>06/01/2017, 15:51</td>
              <td>
                <a href="#", class="btn btn-primary glyphicon glyphicon-pencil"></a>
                <a href="#", class="btn btn-danger glyphicon glyphicon-remove"></a>
              </td>
            </tr>
            <tr>
              <td>João Mendes</td>
              <td>Funcionário</td>
              <td>06/01/2017, 15:51</td>
              <td>
                <a href="#", class="btn btn-primary glyphicon glyphicon-pencil"></a>
                <a href="#", class="btn btn-danger glyphicon glyphicon-remove"></a>
              </td>
            </tr>

          </table>
        </div>
    </div>

@endsection

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Cadastrar Usuários</h1>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="" data-parsley-validate="">
            {{ csrf_field() }}
            <div class="col-md-9">
              <label for="autor">Nome:</label>
              <input type="text" class="form-control" name="autor" value="">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="supervisor">Apelido:</label>
              <input type="text" class="form-control" name="supervisor" value="">
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="curso">Funcão:</label>
              <select class="form-control" name="curso">
                <option value="">Escolha a funcão(Role)</option>
              </select>
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="titulo">E-mail:</label>
              <input type="text" class="form-control" name="titulo" value="">
            </div>
           <div class="col-sm-6" style="margin-top:10px">
             {!! Form::button('Cancel', array('class' =>'btn btn-danger btn-block' ))!!}
           </div>
           <div class="col-sm-6" style="margin-top:10px">
             {{ Form::submit('Cadastrar', array('class'=>'btn btn-success btn-block'))}}
         </div>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
