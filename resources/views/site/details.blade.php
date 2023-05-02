@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container"><br>

    <div class="col s12 m6">
        <img src="{{$produto->imagem}}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h4>{{$produto->nome}}</h4>
        <h4>R$ {{number_format($produto->preco, 2, ',', '.')}}</h4>
        <p>{{$produto->descricao}}</p>
        <p> Postado por: {{$produto->user->firstname}}</p>
        <p> Categoria: {{$produto->categoria->nome}}</p>

        <form action="{{route('site.addcarrinho')}}" method="post" enctype="multipart/form-data">
            @csrf <!--ira gerar um input hidden e um token-->
            <input type="hidden" name="id" value="{{$produto->id}}">
            <input type="hidden" name="name" value="{{$produto->name}}">
            <input type="hidden" name="price" value="{{$produto->price}}">
            <input type="number" name="qnt" value="1">
            <input type="hidden" name="img" value="{{$produto->imagem}}">

            <button class="btn orange btn-large"> Comprar </button>

        </form>
    </div>
</div>

@endsection