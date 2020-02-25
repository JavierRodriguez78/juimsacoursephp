<?php

declare(strict_types=1);
namespace Juinsa\controllers;


use DI\Annotation\Inject;
use Juinsa\db\entities\User;
use Juinsa\ViewManager;
use Kint\Kint;

class HomeController extends Controller
{

   

    public function index()
    {

         $this->viewManager->renderTemplate("index.twig.html");
    }
}