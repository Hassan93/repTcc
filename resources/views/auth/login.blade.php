@extends('layouts.main')

@section('title', '| Log In')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
           {!! Form::open(array('data-parsley-validate'=>'','method'=>'POST'))!!}
             {{Form::label('email', 'Email:')}}
             {{Form::email('email', null, array('class'=>'form-control', 'required'=>''))}}
             {{Form::label('password', 'Password:', array('class'=>'form-spacing-top'))}}
             {{Form::password('password', array('class'=>'form-control', 'required'=>''))}}
             {{Form::checkbox('remember')}}{{Form::label('remember', 'Remember Me', array('class'=>'form-spacing-top'))}}
             {{Form::submit('Login', array('class'=>'btn btn-success btn-block btn-lg form-spacing-top'))}}
           {!! Form::close()!!}
        </div>

    </div>
<div style="margin-top:50px">

</div>
@endsection
