@extends('plantilla')
@section('contenido')
<h1>La multiplicacion es {{ $multiplica }}</h1>

{!! Form::open(['url' => 'foo/bar']) !!}
{{ Form::label('La multiplicacion es:', null, ['class' => 'control-label']) }}
{{ Form::text('Holame', $multiplica, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}
{!! Form::close() !!}
@endsection