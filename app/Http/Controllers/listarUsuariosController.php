<?php

namespace App\Http\Controllers;

use App\Providers\DateFormatterServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class listarUsuariosController extends Controller
{
    //


public function listar()
{
    $usuarios = User::all();

    foreach ($usuarios as $usuario) {
       $usuario->formattedDate = DateFormatterServiceProvider::formattedDate($usuario->created_at);
    }

    return view('listar', ['usuarios' => $usuarios]);
}

public function excluir($id)
    {
        // Verifica se o usuário logado é o mesmo que está sendo excluído
        if (Auth::user()->id == $id) {
            return redirect()->route('listar')->with('error', 'Você não pode excluir o usuário logado.');
        }

        $usuario = User::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->route('listar')->with('success', 'Usuário excluído com sucesso.');
        } else {
            return redirect()->route('listar')->with('error', 'Usuário não encontrado.');
        }
    }
}
