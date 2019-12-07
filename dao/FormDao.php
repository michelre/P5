<?php
require_once 'dao/BaseDao.php';
require_once 'model/Budget.php';
require_once 'model/Niveau.php';
require_once 'model/Saison.php';
require_once 'model/Spot.php';

class FormDao extends BaseDao
{

    public function findbudget()
    {
        $req = $this->bd->query('SELECT * FROM budgets');
        $budgets = [];
        while ($donnees = $req->fetch()) {
            $budget = new Budget();
            $budget->setId($donnees['id']);
            $budget->setValeur($donnees['valeur']);           
            $budgets[] = $budget;
        }
        return $budgets;
    }
