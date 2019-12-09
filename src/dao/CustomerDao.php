<?php

namespace App\Dao;

use App\Model\Customer;

class CustomerDao extends BaseDao
{

    public function findcustomer()
    {
        $req = $this->bd->query('SELECT * FROM customers');
        $customers = [];
        while ($donnees = $req->fetch()) {
            $customer = new Customer();
            $customer->setId($donnees['id']);
            $customer->setPrenom($donnees['prenom']);
            $customer->setNom($donnees['nom']);
            $customer->setEmail($donnees['email']);
            $customers[] = $customer;
        }
        return $customers;
    }

}
