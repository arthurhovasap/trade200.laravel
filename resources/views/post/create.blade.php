@extends('app')

@section('content')
{!! Form::open(['route' => 'post.saving'])!!}
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', 'not null', ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Создать', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@endsection