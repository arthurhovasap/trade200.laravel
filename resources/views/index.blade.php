@extends('app')

@section('content')

@if(DB::connection()->getDatabaseName())
    <p>Connected successfully to database {{ config('database.prefix') . 'users' . DB::connection()->getDatabaseName() }}</p>
@endif

@endsection