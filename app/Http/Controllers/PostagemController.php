<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;

class PostagemController extends Controller
{

    public function MostrarPostagem($id){

        //$postagens = Postagem::where('categoria_id', $id)->orderBy('titulo', 'ASC')->get();
        $postagem = Postagem::find($id);
        //dd($postagens);
        return view('MostrarPostagem', ['postagem' => $postagem]); //, 'postagens' => $postagens

    }

    public function MostrarPostagens($id){

        $postagens = Postagem::where('categoria_id', $id)->orderBy('titulo', 'ASC')->get();
        $postagem = Postagem::where('categoria_id', $id)->orderBy('titulo', 'ASC')->get();
        return view('MostrarPostagens', ['postagem' => $postagem, 'postagens' => $postagens]);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->get();
        return view('postagem.index', ['postagens' => $postagens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dd($request->conteudo);

        $user_id = auth()->user()->id;

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'conteudo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
        ], $messages);

        $foto = $request->file('foto');

        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->foto = base64_encode (file_get_contents ($foto));
        $postagem->conteudo = $request->conteudo;
        $postagem->user_id = $user_id;
        $postagem->categoria_id = $request->categoria_id;
        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem salva com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.show', ['postagem' => $postagem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.edit', ['postagem' => $postagem, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($id);
        //dd($request->all());

        $user_id = auth()->user()->id;

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'conteudo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
        ], $messages);

        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->user_id = $user_id;
        $postagem->categoria_id = $request->categoria_id;
        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem atualizada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect('postagem')->with('status', 'Postagem excluida com sucesso!');
    }
}
