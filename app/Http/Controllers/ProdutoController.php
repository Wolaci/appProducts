<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function visualizarProduto()
    {
        $produtos = \App\Produto::paginate(5);
        return view('produto.visualizar', compact('produtos'));
    }

    public function adicionarProduto()
    {
        return view('produto.adicionar');
    }

    public function salvarProduto(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'descricao'=>'required|string|max:45',
            'data'=>'required',
            'preco'=>'required|alpha_num|min:1',
            'lote'=>'required|numeric|integer|max:3',
            'avaliacao'=>'required|numeric|between:0,5'
        ]);
        \App\Produto::create($request->all());
        return redirect()->route('visualizar.produto');
    }

    public function editarProduto($id)
    {
        $produto = \App\Produto::find($id);
        return view('produto.editar', compact('produto'));
    }

    public function atualizarProduto(Request $request, $id)
    {
        \App\Produto::find($id)->update($request->all());
        return redirect()->route('visualizar.produto');
    }

    public function detalharProduto($id)
    {
        $produto = \App\Produto::find($id);
        return view('produto.detalhar', compact('produto'));
    }

    public function deletarProduto($id)
    {
        $produto = \App\Produto::find($id);
        $produto->delete();
        return redirect()->route('visualizar.produto');
    }

    public function procurarProduto(Request $request)
    {
        $procurar = $request->get('descricao');
        $resultado = Produto::where('descricao', 'LIKE', '%' . $procurar . '%')->paginate(5);
        return view('produto.pesquisar', compact('resultado'));
    }
}