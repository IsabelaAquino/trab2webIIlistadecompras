@extends('principal')

@section('conteudo-principal')

<h2>Nome da lista</h2>

<form method="post" action="{{url('/grouplist/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text" placeholder="Ex.: Feira de domingo, compra mensal, churrasco, etc..."> 
    </div>

    <button class="btn btn-primary" type="submit">Cadastrar</button>

</form>

@endsection
