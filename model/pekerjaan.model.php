<?php

class PekerjaanModel extends Connection {
    protected function findAll(){
        $sql = "SELECT * FROM pekerjaan";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $pekerjaan[] = $data;
            }
        }
        return $pekerjaan;
    }

    protected function findById($id){
        $sql = "SELECT * FROM pekerjaan WHERE id= " . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $pekerjaan = $data;
            }
        }
        return $pekerjaan;
    }
}

?>