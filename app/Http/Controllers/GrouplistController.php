<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

//importar o modelo post
use App\grouplist;

use App\ListCompra;

class GrouplistController extends Controller
{
     //

    /**
     * Retorna todos os posts cadastrados
     */
    public function grouplists()
    {

        $dados = grouplist::all();

        return view('grouplist')->with('grouplists', $dados);
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
        $dados = grouplist::create($request->input());

        $indice = $dados->id; 
        
        return view('lists.form-adicionar')->with('indice', $indice);
        //return redirect()->action('ListController@formAdicionar')->with($id);

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        grouplist::destroy($id);

        return redirect()->action('GrouplistController@grouplists');
    }

    public function form_editar($id)
    {
        //$post = Post::where('id', $id)->get();

        //Buscar o post no BD pelo id
        $grouplist = grouplist::find($id);

        //chamando a view e passando o dado do post
        return view('form-editar')->with('grouplist', $grouplist);

    }

    public function editar(Request $request)
    {
        grouplist::find($request->id)->update($request->input());

        return redirect()->action('GrouplistController@grouplists');
    }
}
