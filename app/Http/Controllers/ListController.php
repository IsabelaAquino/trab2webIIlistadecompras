<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

//importar o modelo post
use App\ListCompra;

class ListController extends Controller
{
    //

    /**
     * Retorna todos os posts cadastrados
     */
    public function lists()
    {

        $dados = ListCompra::all();

        return view('lists')->with('lists', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        return view('form-adicionar');
    }

    /**
     * Método que vai adicionar um post no BD
     */
    public function adicionar(Request $request)
    {

        //$post = new Post();
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
        //$post->save();

        //Atribuição em massa
        ListCompra::create($request->input());

        return redirect()->action('ListController@lists');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        ListCompra::destroy($id);

        return redirect()->action('ListController@lists');
    }

    public function form_editar($id)
    {
        //$post = Post::where('id', $id)->get();

        //Buscar o post no BD pelo id
        $list = ListCompra::find($id);

        //chamando a view e passando o dado do post
        return view('form-editar')->with('list', $list);

    }

    public function editar(Request $request)
    {
        //$post = Post::find($request->id);
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
        //$post->save();

        //VIa atribuicao em massa
        ListCompra::find($request->id)->update($request->input());

        return redirect()->action('ListController@lists');
    }
}
