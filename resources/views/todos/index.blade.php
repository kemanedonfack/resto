@extends('layouts.app')

@section('content')

    @foreach($data as $donne)

        <h4> Nom : {{ $donne->name}} | Done {{ $donne->done}} </h4>

    @endforeach

@endsection