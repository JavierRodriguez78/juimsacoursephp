<?php


namespace Juinsa\controllers\auth;


use DI\Annotation\Inject;
use Juinsa\controllers\Controller;
use Juinsa\db\entities\User;
use Juinsa\services\UserService;
use Kint\Kint;

class RegisterController extends Controller
{

    /**
     * @Inject
     * @var UserService
     */
    private $useService;



    public function index()
    {
        $this->viewManager->renderTemplate('register.twig.html');

    }


    public function register(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user= new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = sha1($password);
        $this->useService->createUser($user);
    }
}