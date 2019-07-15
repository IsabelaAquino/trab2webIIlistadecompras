<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

use App\grouplist;
//importar o modelo post
use App\ListCompra;

class ListController extends Controller
{
    //

    /**
     * Retorna todos os posts cadastrados
     */
    public function lists(ListCompra $a)
    {
        try {
            $dados = ListCompra::where('grouplist_id', '=', $a)->get();

            return view('lists/lists')->with('lists', $dados);
        } catch (\Throwable $th) {
            return 'Lista não contém dados e é INVÁLIDA! Exclua essa lista e refaça novamente cadastrando os itens.'; 
        }
       
    }

    public function formAdicionar($request){
        $indice =$request;
        return view('lists.form-adicionar')->with('indice', $indice);
    }

    //recebe um grouplist_id filtra os dados no banco e manda pra lists exibir os dados dos itens referentes a gruplist(lista) em questão
    public function groupList($grouplist_id)
    {
        try {
            $indice = $grouplist_id;

            $d = ListCompra::where('grouplist_id', '=', $indice)->get();
            return view('lists/lists')->with('lists', $d);
        } catch (Exception $e) {
            return 'Lista não contém dados e é INVÁLIDA! Exclua essa lista e refaça novamente cadastrando os itens.';
        } 
    
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
        $dados = ListCompra::create($request->input());

        $indice = $dados->grouplist_id;

        $d = ListCompra::where('grouplist_id', '=', $indice)->get();

        return view('lists/lists')->with('lists', $d);

      //  return redirect()->action('ListController@lists', $indice);

    }

    public function excluir(Request $request)
    {
        //Excluir via eloquent quando tem o id
        ListCompra::destroy($request->id);
        $indice = $request->grouplist_id;

        $d = ListCompra::where('grouplist_id', '=', $indice)->get();
        return view('lists/lists')->with('lists', $d);
    }

    public function form_editar($id)
    {
        //$post = Post::where('id', $id)->get();

        //Buscar o post no BD pelo id
        $list = ListCompra::find($id);

        //chamando a view e passando o dado do post
        return view('lists.form-editar')->with('list', $list);

    }

    public function editar(Request $request)
    {

        //VIa atribuicao em massa
        ListCompra::find($request->id)->update($request->input());

        $grouplist_id = ListCompra::select('grouplist_id')->where('id', '=', $request->id)->get();

        $g = preg_replace("/[^0-9]/", "", $grouplist_id);

        $d = ListCompra::where('grouplist_id', '=', $g)->get();
        
        return view('lists/lists')->with('lists', $d);
    }
}
