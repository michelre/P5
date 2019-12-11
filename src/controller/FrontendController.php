<?php

namespace App\Controller;

use App\Dao\FormDao;
use App\Dao\UserDao;
use App\Dao\CustomerDao;

class FrontendController
{
    private $formDao;
    private $userDao;
    private $customerDao;

    public function __construct()
    {
        $this->formDao = new FormDao();
        $this->userDao = new UserDao();
        $this->customerDao = new CustomerDao();
    }

    public function home()
    {
        $budgets = $this->formDao->findbudget();
        $niveaux = $this->formDao->findniveau();
        $saisons = $this->formDao->findsaison();


        include_once __DIR__ . '/../view/home.php';
    }

    public function createCustomerAction($prenom, $nom, $email)
    {
        $this->customerDao->createcustomer($prenom, $nom, $email);
        header('Location:/');
    }
    
    public function login()
    {
        include_once __DIR__ . '/../view/login.php';
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
