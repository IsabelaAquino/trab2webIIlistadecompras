@extends('principal')

@section('conteudo-principal')

<h2>Editar Lista de compras</h2>
<hr />

<form method="post" action="{{url('/grouplist/editar')}}">
        
        @csrf

        <input type="hidden" name="id" value="{{$grouplist->id}}">

        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input id="titulo" class="form-control" name="titulo" type="text" value="{{$grouplist->titulo}}"> 
        </div>

        <button class="btn btn-primary" type="submit">Editar</button>

</form>

@endsection
