<?php

require_once 'model/Customer.php';

class BackendController
{
    private $customerDao;

    public function __construct()
    {
        $this->customerDao = new CustomerDao();
    }

    public function adminHome()
    {
        $customers = $this->customerDao->findcustomer();
        include_once 'view/admin/home.php';
    }

    public function logout()
    {
        setcookie('p5_authentification', 'p5_authentification', time() - 3600);
        header('Location: ?action=login');
    }


}
