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
        app::get('database')->insert('tarefas', $parameters);

        header('Location: /index');
    }


    public function delete()
    {


        app::get('database')->delete('tarefas', $_POST['id']);
        header('Location: /index');
    }
}
