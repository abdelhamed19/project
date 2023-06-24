<?php
namespace core;

class Router
{
    public $rout=[
        "get"=>[],
        "post"=>[]
    ];
    public static function load($file)
    {
        $rout=new static();
        require $file;
        return $rout;
    }
    public function get($uri,$controller)
    {
        $this->rout['get'][$uri]=$controller;
    }
    public function post($uri,$controller)
    {
        $this->rout['post'][$uri]=$controller;
    }
    public function direct($uri,$RequestMethod)
    {
        if (array_key_exists($uri,$this->rout[$RequestMethod]))
        {
            //var_dump(...explode("@",$this->rout[$RequestMethod][$uri]));
           return $this->call_action(...explode("@",$this->rout[$RequestMethod][$uri]));

        }

    }
    public function call_action($controller,$action)
    {
        $controller="app\\controllers\\".$controller;
        $controller=new $controller();
        if (!method_exists($controller,$action))
        {
            throw new \Exception("Action Not Found");
        }
        else
        {
            return $controller->$action();
        }
    }
}
