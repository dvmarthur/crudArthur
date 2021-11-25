<?php


$router->get('index', 'PagesController@index');

$router->post('tarefas/create', 'PagesController@create');

$router->post('tarefas/delete', 'PagesController@delete');
