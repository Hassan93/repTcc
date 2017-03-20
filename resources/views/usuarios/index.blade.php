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
              <th>Nome</th>
              <th>Último login</th>
              <th>Accão</th>
            </tr>
            @foreach($usuarios as $usuario)
              <tr>
                <td>{{$usuario->first_name." ".$usuario->last_name}}</td>
                <td>{{$usuario->last_login}}</td>
                <td>
                  <a href="#", class="btn btn-primary glyphicon glyphicon-pencil"></a>
                  <a href="#", class="btn btn-danger glyphicon glyphicon-remove"></a>
                </td>
              </tr>
            @endforeach
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
       <form action="/register" method="post" data-parsley-validate>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="faculdade_id">Faculdade:</label>
                    <select class="form-control" name="faculdade_id" required>
                        <option value ="0">A faculdade que pertence</option>
                        @foreach($faculdades as $faculdade)
                            <option value ="{{$faculdade->id}}">{{'Fac. '.$faculdade->designacao}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="first_name">Nome:</label>
                    <input type="text" class="form-control" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Apelido:</label>
                    <input type="text" class="form-control" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                     <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmar Senha:</label>
                     <input type="password" class="form-control" name="password_confirmation" required>
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
