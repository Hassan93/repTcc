@extends('layouts.main')

@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
           {!! Form::open(array('data-parsley-validate'=>''))!!}

             {{Form::label('email', 'Email:', array('class'=>'form-spacing-top'))}}
             {{Form::email('email', null, array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('first_name', 'Nome:')}}
             {{Form::text('first_name', null, array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('last_name', 'Apelido:')}}
             {{Form::text('last_name', null, array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('password', 'Senha:', array('class'=>'form-spacing-top'))}}
             {{Form::password('password', array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('password_confirmation', 'Confirma Senha:', array('class'=>'form-spacing-top'))}}
             {{Form::password('password_confirmation', array('class'=>'form-control', 'required'=>''))}}
             {{Form::submit('Registe-se', array('class'=>'btn btn-success btn-block btn-lg form-spacing-top'))}}
           {!! Form::close()!!}
        </div>

    </div>

@endsection
