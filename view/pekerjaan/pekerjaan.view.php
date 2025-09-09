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

    public function show()
    {
        if (isset($this->pekerjaan)) {
            foreach ($this->pekerjaan as $item) {
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['lowongan'] . "</td>";
                echo "<td>" . $item['deskripsi'] . "</td>";
                echo "<td>" . $item['perusahaan'] . "</td>";
                echo "</tr>";
            }
        } else {
            foreach ($this->pekerjaans as $item) {
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['lowongan'] . "</td>";
                echo "<td>" . $item['deskripsi'] . "</td>";
                echo "<td>" . $item['perusahaan'] . "</td>";
                echo "</tr>";
            }
        }
    }
}

?>