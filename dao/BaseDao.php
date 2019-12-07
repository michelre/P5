<?php

class BaseDao {

	protected $bd;

	 public function __construct()
	    {
			try
			{
			    $this->bd = new PDO('mysql:host=localhost;dbname=p5;charset=utf8', 'root', '');
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}
		}

}

