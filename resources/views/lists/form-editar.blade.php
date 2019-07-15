@extends('principal')

@section('conteudo-principal')

<h2>Editar Lista de compras</h2>
<hr />

<form method="post" action="{{url('/lists/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$list->id}}">

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text"
        value="{{$list->titulo}}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea id="descricao" class="form-control" rows="3"
        name="descricao">{{$list->descricao}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Quantidade</label>
        <input id="quantidade" placeholder="{{$list->quantidade}}" class="form-control col-md-2" name="quantidade" type="number">
    </div>

    <div class="form-group">
        <label for="">Preço</label>
        <input min="0.00" step="0.01" id="preco" placeholder="R$ {{$list->preco}}" class="form-control col-md-2" name="preco" type="number">
    </div>

    <div class="form-group">
        <label for="">Data</label>
        <input type="date" id="data" class="form-control col-md-3" name="data">
    </div>

    <div class="form-group">
        <input class="form-control" name="grouplist_id" type="hidden" id="grouplist_id"  value="{{$list->grouplist_id}}">
    </div>

    <button class="btn btn-primary" type="submit">Editar</button>

</form>

@endsection
