
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2>Lista de Compras</h2>

<a href="{{url('/lists/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a>

<table class="table table-white">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Data</th>
    </tr>
    @forelse ($lists as $list)
        <tr>
            <td> {{$list->id}} </td>
            <td> {{$list->titulo}} </td>
            <td> {{$list->descricao}} </td>
            <td> R$ {{$list->preco}} </td>
            <td> {{$list->data}} </td>
            <td>
                <a class="btn btn-outline-dark" href="{{url('/lists/editar/' . $list->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-danger" href="{{url('/lists/excluir/' . $list->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td class="text-center" colspan="5">Sem dados cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
