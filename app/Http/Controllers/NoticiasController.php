<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('noticia');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar()
    {
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar o formulário
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'author' => 'required',
            'conteudo' => 'required',
            'imagem.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validação para imagens
        ]);
    
        // Armazenar notícia
        $noticia = new Noticia([
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'author' => $request->input('author'),
            'conteudo' => $request->input('conteudo'),
        ]);
    
        $imagens = [];
    
        if ($request->hasFile('imagem')) {
            foreach ($request->file('imagem') as $imagem) {
                $caminhoImagem = $imagem->store('imagens', 'public'); // Diretório 'imagens' dentro do sistema de arquivos local
                $imagens[] = $caminhoImagem;
            }
        }
    
        $noticia->imagens = $imagens; // Salva os nomes das imagens no campo 'imagens'
    
        $noticia->save(); // Salvar a notícia no banco de dados
    
        return redirect()->route('noticias.mostrar')->with('success', 'Notícia cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     * git config --global user.name "Leonardo geja"
*       git config --global user.email "bemmenos@gmail.com"

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
