
<?php

require_once "config/db_connect.php";
require_once "tools/outils__perso__jonas__.php";

// ------------------  Afficher les categories  -----------------

    //pre_var_dump('coucou');
        
$req_categorie = "SELECT * FROM categorie";
$res_categorie = mysqli_query($lien_bdd, $req_categorie);
?>
<h1>Forum d'entraide</h1>
<?php
while ($row_categorie = mysqli_fetch_assoc($res_categorie)) {

    pre_var_dump($row_categorie, NULL);

    //pre_var_dump($categories, NULL);
?>
    <div>
        <?php
        //pre_var_dump($categories, NULL,true);
        ?>
        <!--------------     Rendu catégorie     --------------->

        <h2><a href="get_all_ticket.php?id=<?= $row_categorie["id_categorie"] ?>&page=1"><?= $row_categorie["nom"] ?></a></h2>
        
        <!--------------   FIN  Rendu catégorie     --------------->

    </div>
    <?php


// ------------------  FIN Afficher les catégories  -----------------

} 







?>
<!--// -----------------   FIN PHP   ------------------------- -->

<!--// --------------------   HTML   ------------------------- -->

<html>
	<head></head>
	<body>
		

    <?php

    ?>
    </body>
</html>