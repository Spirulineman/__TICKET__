
<?php

require_once "config/db_connect.php";
require_once "tools/outils__perso__jonas__.php";

// ------------------  Afficher les tickets  -----------------
    //pre_var_dump('coucou');
        
$req_categorie = "SELECT * FROM categorie";
$res_categorie = mysqli_query($lien_bdd, $req_categorie);



while (mysqli_num_rows($res_categorie)>0) {
    $row_categorie = mysqli_fetch_assoc($res_categorie);
    pre_var_dump($row_categorie);
} 


// ------------------  FIN Afficher les tickets  -----------------




?>
<!--// -----------------   FIN PHP   ------------------------- -->

<!--// --------------------   HTML   ------------------------- -->

<form>

</form>