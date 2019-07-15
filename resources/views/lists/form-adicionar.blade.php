@extends('principal')

@section('conteudo-principal')

<h2>Adicione itens na lista</h2>

<form method="post" action="{{url('/lists/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Produto</label>
        <input id="titulo" class="form-control" name="titulo" type="text">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea id="descricao" class="form-control" rows="3" name="descricao">
        </textarea>
    </div>

    <div class="form-group">
        <label for="">Quantidade</label>
        <input id="quantidade" class="form-control col-md-2" name="quantidade" type="number">
    </div>

    <div class="form-group">
        <label for="">Preço</label>
        <input min="0.00" step="0.01" id="preco" placeholder="R$" class="form-control col-md-2" name="preco" type="number">
    </div>

    <div class="form-group">
        <label for="">Data</label>
        <input class="form-control" name="data" type="date" id="date">
    </div>
    <div class="form-group">
        <input class="form-control" name="grouplist_id" type="hidden" id="grouplist_id"  value="{{$indice}}">
    </div>
    <button class="btn btn-primary" type="submit">Inserir</button>

</form>

@endsection
