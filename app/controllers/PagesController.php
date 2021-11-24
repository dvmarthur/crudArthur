<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function index()
    {
        $tarefas = App::get('database')->selectAll('tarefas');
    
        $tables = [
            'tarefas' => $tarefas,
        ];

        return view('index', $tables);
    }

    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome']
        ];

        App::get('database')->insert('tarefas', $_POST['nome']);

        header('Location: /inicio');
    }

    public function delete ()
    {
        
        App::get('database')->delete('tarefas', $_POST['id']);

        header('Location: /inicio');
    }
}
