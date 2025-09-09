<?php

class PekerjaanController extends PekerjaanModel 
{
    public function getPekerjaan()
    {
        return $this->findAll();
    }
}

?>