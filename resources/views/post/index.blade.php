@extends('app')

@section('content')
<ul>
@foreach($models as $model)
<li>{{$model->name}}</li>
@endforeach
</ul>

@endsection