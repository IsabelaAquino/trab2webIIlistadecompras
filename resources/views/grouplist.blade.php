
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<br>
<h2 class="text-center">Lista de Compras</h2>
@forelse ($grouplists as $grouplist)
<input type="hidden" id="gliid" name="gliid" value="{{$grouplist->id}}">
<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" style="transform: translateY(50%);">
                        <a class="alert-link text-dark" href="{{url('/grouplist/' . $grouplist->id)}}"> {{$grouplist->titulo}} </a>
                        
                        <form class="float-right" style="display: inline-block" action="{{ url('/grouplist/excluir/' .  $grouplist->id) }}" method="get">
                            {{ csrf_field() }}

                            <button type="submit" id="delete-item-{{ $grouplist->id }}" class="btn btn-danger">Excluir
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                        <a style="margin-right: 5px" href="{{url('/grouplist/form-editar/' . $grouplist->id)}}" class="btn btn-outline-dark float-right">Editar <i
                                    class="fa fa-edit"></i></a>

                    </div>
                   
                </div>
            </div>
            <br>
</div>
        @empty
        <div class="panel-body">
            <p class="text-center" colspan="5">Sem dados cadastrados.</p>
        </div>
        @endforelse
<br>
<div class="col-md-12">
    <div class="col-md-7">
        <a href="{{url('/grouplist/form-adicionar')}}" class="btn btn-primary float-right">
            ADICIONAR LISTA</a>
    </div> 
</div>

@endsection

