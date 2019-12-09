<?php

namespace App\Model;

class Spot
{

    private $id;
    private $localisation;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * @param mixed $localisation
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    }
}

