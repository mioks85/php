<?php

 include("header.php")

?>

<div class="container">
      <h1>Admini leht</h1><br>






    <?php
if (isset($_GET['ok'])) {
    echo '<div class="alert alert-success" roles="alert">
    Salvestamine õnnestus!
    </div>
    ';
}

?>



<form action="" method="post" enctype="multipart/form-data">

    <label for="pealkiri1">Esimene:</label>
    <input type="text" name="pealkiri1" required><br>


    <label for="pealkiri2">Teine:</label>
    <input type="text" name="pealkiri2" required><br>


    <label for="alapealkiri">Kolmas:</label>
    <input type="text" name="alapealkiri" required><br>


    <label for="tekst">Tekst:</label>
    <textarea name="tekst" required></textarea><br>


    <label for="pilt">Lisa uus pilt</label>
    <input type="file" name="pilt" required>


    <input class="btn btn-success" type="submit" value="Salvesta">
</form>



<?php
     //if (isset($_POST['submit'])) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $pealkiri1 = $_POST["pealkiri1"];
            $pealkiri2 = $_POST["pealkiri2"];
            $alapealkiri = $_POST["alapealkiri"];
            $tekst = $_POST["tekst"];
            $pilt = $_FILES['pilt']['name'];
            
           move_uploaded_file($_FILES['pilt']['tmp_name'], "" . $_FILES['pilt']['name']);
            
            $vana_rida = file("palkamind.txt", FILE_IGNORE_NEW_LINES);
            
            $uus_rida = "$pealkiri1 | $pealkiri2 | $alapealkiri | $tekst | $pilt";

            $vana_rida[0] = $uus_rida;
            
            file_put_contents("palkamind.txt", implode("\n", $lines));
            
            header('Location: index.php?ok');
            exit;
        }

?>




</div> 




    <?php include 'footer.php'; ?>