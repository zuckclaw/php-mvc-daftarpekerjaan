<?php

class PekerjaanController extends PekerjaanModel 
{
    public function getPekerjaan()
    {
        return $this->findAll();
    }

    public function getPekerjaanBy()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            return $this->findOne($id);
        }
    }
}

?>