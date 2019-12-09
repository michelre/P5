<?php

require_once 'dao/FormDao.php';
require_once 'dao/UserDao.php';

class FrontendController
{
    private $formDao;
    private $userDao;


    public function __construct()
    {
        $this->formDao = new FormDao();
        $this->userDao = new UserDao();
    }

    public function home()
    {
        $budgets = $this->formDao->findbudget();
        $niveaux = $this->formDao->findniveau();
        $saisons = $this->formDao->findsaison();
        
        include_once 'view/home.php';
    }

    public function login()
    {
        
        include_once 'view/login.php';
    }

    public function loginAction($login, $password)
    {
        $user = $this->userDao->findByLogin($login);
        $userId = $user->getId();
        if (!isset($userId)) {
            header('Location: ?action=login&err=login_error');
            die();
        }
        if (!password_verify($password, $user->getPassword())) {
            header('Location: ?action=login&err=password_error');
            die();
        }

        setcookie('p5_authentification', 'p5_authentification', time() + 3600);
        header('Location: ?action=admin');
        die();
    }
}  