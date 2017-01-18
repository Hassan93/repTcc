@extends('layouts.main')

@section('title', '| Faculdade')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
          <form class="form-inline">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Pesquisar">
              </div>
            </div>
            <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
          </form>
        </div>
        <div class='col-md-3 col-md-offset-1'>
         <a href="#" data-toggle="modal" data-target="#myModal" class=" btn btn-primary btn-lg btn-block btn-h1-spacing">Carregar Monografia</a>
        </div>
        <div class="col-md-10  col-md-offset-2">
          <hr>
        </div>

        <div class="col-md-offset-2">
          <table class="table table-bordered">
            <tr>
              <th>Ordem</th>
              <th>Autor</th>
              <th>Área Científica</th>
              <th>Título</th>
              <th>Editar</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Sérgio Bata</td>
              <td>C. Tecnológicas</td>
              <td>Tutor Inteligente</td>
              <td>
                <a href="#", class="btn btn-primary glyphicon glyphicon-pencil"></a>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Sérgio Bata</td>
              <td>C. Tecnológicas</td>
              <td>Robô Cozinheiro</td>
              <td>
                <a href="#", class="btn btn-primary glyphicon glyphicon-pencil"></a>
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
        <h1 class="modal-title" id="myModalLabel">Carregar Monografia</h1>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="" data-parsley-validate="">
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
              </select>
            </div>
            <div class="col-md-9" style="margin-top:10px">
              <label for="area">Área Científica:</label>
              <select class="form-control" name="area">
                <option value="">Escolha a área</option>
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
             <input type="file" id="file" name="file" class="glyphicon glyphicon-upload">
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
