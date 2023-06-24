<?php
use core\database\connection;
use core\database\QueryBuilder;
$app['config']= require "config.php";
$app['database']= new QueryBuilder(connection::make($app['config']['database']));



$app['database']->insert('articles',
    [
        'name'=>'first'
        ,'body'=>'The First Body Of article'
    ]
);



//var_dump($app['database']->selectall('articles'));

function view($file)
{
    return require "app/view/$file-view.php";
}
