<?php

namespace App\Dao;

use PDO;

class BaseDao {

	protected $bd;

	 public function __construct()
	    {
			try
			{
			    $this->bd = new PDO('mysql:host=localhost;dbname=p5fabien;charset=utf8', 'root', 'root');
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}
		}

}

