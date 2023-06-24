<?php
namespace app\controllers;
class pagecontroller
{
    public $articles=[
        [
            "Title"=>"One",
            "Description"=>"The One"
        ],
        [
            "Title"=>"two",
            "Description"=>"The Two"
        ]
        ];
    public function home()
    {
        return view('home');
    }
    public function about()
    {
       //return view('about',compact('articles'));
        return require "app/view/about-view.php";
    }
    public function contact()
    {
        return view('contact');
    }
}
