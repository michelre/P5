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
        $posts = $this->formDao->findbudget();
        
        include_once 'view/home.php';
    }
