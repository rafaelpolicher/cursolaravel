@extends('site.layout')

@section('title', 'Essa é home')

@section('conteudo')

{{--comentario--}}

{{ isset($nome) ? 'assim se faz operador ternario' : 'nao existe' }}<br>

{{$nomeee ?? 'coloca um valor padrao numa variavel inexistente'}}

@endsection