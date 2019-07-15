
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2>Lista de Compras</h2>

<a href="{{url('/')}}" class="btn btn-primary float-right mb-2">
    Voltar ao menu principal</a>

<table class="table table-white">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Data</th>
    </tr>
    @forelse ($lists as $list)
        <tr>
            <td> {{$list->id}} </td>
            <td> {{$list->titulo}} </td>
            <td> {{$list->descricao}} </td>
            <td> {{$list->quantidade}} </td>
            <td> R$ {{$list->preco}} </td>
            <td> {{$list->data}} </td>
            <td>
                <a class="btn btn-outline-dark" href="{{url('/lists/editar/' . $list->id )}}">
                    Editar
                </a>
                <form style="display: inline-block" action="{{url('/lists/excluir')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$list->id}}" />
                    <input type="hidden" name="grouplist_id" value="{{$list->grouplist_id}}" />
                    <button type="submit" class="btn btn-outline-danger">Excluir </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td class="text-center" colspan="5">Sem dados cadastrados.</td>
        </tr>
    @endforelse
</table>
@forelse ($lists as $list)
    <a href="{{url('/lists/form-adicionar/' . $list->grouplist_id)}}" class="btn btn-primary mb-2">Adicionar item</a>
    @break
    @empty
            <div class="row">
                <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <b class="text-danger text-uppercase">Lista não contém dados e é INVÁLIDA! Exclua essa lista e refaça novamente cadastrando os itens. </b>
                    </div>
            </div>
@endforelse
@endsection