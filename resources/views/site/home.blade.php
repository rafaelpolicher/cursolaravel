@extends('site.layout')

@section('title', 'Essa é home')

@section('conteudo')

{{--comentario--}}

{{ isset($nome) ? 'assim se faz operador ternario' : 'nao existe' }}<br>

{{$nomeee ?? 'coloca um valor padrao numa variavel inexistente'}}
<br><br>

{{--estruturas de controle--}}
<h3>estruturas de controle</h3>
@if ($nome == 'Rafael')
    true
@else
    false
@endif
<br><br>


@switch($idade)
    @case(27)
        idade esta ok
        @break
    @case(29)
        idade esta errada
        @break
    @default
        default
@endswitch
<br><br>

@isset($nome)
    existe
@endisset

@empty($nome)
    esta vazia
@endempty
<br><br>

@auth
    existe usuario autenticado
@endauth

@guest
    nao existe usuario autenticado
@endguest
<br><br>

{{--estruturas de repetiçao--}}
<h3>estruturas de repetiçao</h3>


@for ($i=1; $i < 4; $i++)
    valor atual for é {{$i}}<br>
@endfor
<br>

@php
    $y = 1
@endphp
@while ($y < 4)
    valor atual while é {{$y}}<br>
    @php $y++ @endphp
@endwhile
<br>

@foreach ($frutas as $fruta)
    {{$fruta}} foreach<br>
@endforeach
<br><br>

@include('includes/mensagem', [
    'titulo' => 'Menssagem de sucesso'
    ])

@component('components/sidebar')
    @slot('paragrafo')
        texto qualquer dinamico vindo de slot
    @endslot
@endcomponent
@endsection