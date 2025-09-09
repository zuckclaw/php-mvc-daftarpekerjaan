<?php
include "connection.php";
include "model/pekerjaan.model.php";
include "controller/pekerjaan.controller.php";
include "view/pekerjaan/pekerjaan.view.php";

$pekerjaan = new PekerjaanView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekerjaan</title>
</head>
<body>
    <?php include "view/utils/pekerjaan.utils.php"; ?>
    <?php $pekerjaan->find(); ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Lowongan</th>
            <th>Deskripsi</th>
            <th>Perushaan</th>
        </tr>
        <?php
        $pekerjaan->show();
        ?>
    </table>
</body>
</html>