<?php

class PekerjaanView extends PekerjaanController
{
    private $pekerjaans;
    private $pekerjaan;

    public function find()
    {
        $this->pekerjaans = $this->getPekerjaan();
        $this->pekerjaan = $this->getPekerjaanBy();
    }
}

?>