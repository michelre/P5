<?php

require_once 'dao/FormDao.php';


class FrontendController
{
    private $formDao;


    public function __construct()
    {
        $this->formDao = new FormDao();
        
    }

    public function home()
    {
        $budgets = $this->formDao->findbudget();
        $niveaux = $this->formDao->findniveau();
        $saisons = $this->formDao->findsaison();
        
        include_once 'view/home.php';
    }
}