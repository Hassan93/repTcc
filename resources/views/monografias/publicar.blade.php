@extends('layouts.main')

@section('title', '| Faculdade')

@section('content')
    <div class="row">
         <div class="col-md-4 col-md-offset-4">
            <h1 class="modal-title" id="myModalLabel">Publicar monografias</h1>
            <hr>
            <div>
              <form class="" action="{{url('/monografia/'.$monografia->id.'/publicar')}}" method="post" data-parsley-validate="">
                  {{ csrf_field() }}
                  <div class="col-sm-6" style="margin-top:20px">
                    <div class="radio">
                      <label>
                        <input type="radio" name="publicar" id="optionsRadios1" value="1">
                         Publicar
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-top:20px">
                    <div class="radio">
                      <label>
                        <input type="radio" name="publicar" id="optionsRadios1" value="0">
                         Não publicar
                      </label>
                    </div>
                  </div>
              <div class="col-sm-6" style="margin-top:20px">
                {!! Form::button('Cancel', array('class' =>'btn btn-danger btn-block' ))!!}
              </div>
              <div class="col-sm-6" style="margin-top:20px">
                 {{ Form::submit('Sim', array('class'=>'btn btn-success btn-block'))}}
              </div>
            </form>
      </div>  
         </div>

     
     
        
   
    </div>

@endsection


