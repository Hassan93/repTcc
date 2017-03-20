@extends('layouts.main')

@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                   
            


            <form action="" method="post" data-parsley-validate>
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
</div>

@endsection
