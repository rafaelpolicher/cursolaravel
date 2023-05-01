@extends('site.layout')
@section('title', 'Home')
@section('conteudo')

<h5>Categoria: {{$categoria->nome}}</h5>

<div class="row container">
@foreach ($produtos as $produto)
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
                <img src="{{$produto->imagem}}"><!--imagem é o nome do campo no bd-->
                <a href="{{route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">{{$produto->nome}}</span>
                <p style="text-overflow: ellipsis;">{{ Str::limit($produto->descricao, 20) }}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
<div class="row center">
    {{$produtos->links('custom.pagination')}}

</div>

@endsection