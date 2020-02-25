<?php
declare(strict_types=1);

namespace Juinsa\controllers;


use Juinsa\DoctrineManager;
use Juinsa\ViewManager;

abstract  class Controller
{

    protected $viewManager;


    public function __construct(ViewManager $viewManager)
    {
        $this->viewManager = $viewManager;
    }

    public function redirectTo(string $page){
        $host = $_SERVER['HTTP_HOST'];
        header("Location : http://$host/$page");
    }

    public abstract function index();


}