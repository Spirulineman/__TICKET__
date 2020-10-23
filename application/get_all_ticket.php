<?php

require_once "config/db_connect.php";
require_once "tools/outils__perso__jonas__.php";

?>
<h1>Forum d'entraide</h1>
<?php

// ------------------  Afficher les tickets  -----------------
    //pre_var_dump('coucou');
        
$req_ticket = "SELECT * FROM ticket";
$res_ticket = mysqli_query($lien_bdd, $req_ticket);

// -----------------------------------  Boucle  -  1  -----------------------

while ($row_ticket = mysqli_fetch_assoc($res_ticket)) {

    //pre_var_dump($row_categorie, NULL);

    //pre_var_dump($categories, NULL);

    //       -----    Attribuer le numéro de ticket  -----

    $categories[] = $row_ticket;
	
	$req_numero = "SELECT * FROM ticket WHERE numero=".$row_ticket['id_categorie'];
	$res_numero = mysqli_query($lien_bdd, $req_numero);

    // ----------------------  Condition  --------------------------------

	if (mysqli_num_rows($res_numero)>0) {
		$row_numero = mysqli_fetch_assoc($res_numero);

		//On ajoute la catégorie au ticket qu'on vient d'ajouter
		$categories["numero"] = $row_numero;

    // ----------------------  FIN Condition  ----------------------
    
    
    //       -----    Attribuer le numéro de ticket  -----

    }
    ?>
    <div>
        <?php
        //pre_var_dump($categories, NULL,true);

        ?>

        <!--------------     Rendu ticket     --------------->

        <h2><a href="get_all_ticket.php?id=<?= $row_ticket["titre"] ?>&page=1"><?= $row_ticket["titre"] ?></a></h2>
        
        <!--------------   FIN  Rendu ticket     ------------>

        <!--------------     Rendu contenu + numero    --------------->

        <p><?= $row_ticket["contenu"] ?><a href="get_all_ticket.php?id=<?= $row_ticket["titre"] ?>&page=1"><?= $row_ticket["numero"] ?></a>

        <!--------------   FIN  Rendu contenu + numero    ------------>


    </div>
    <?php
// ------------------------------  FIN Boucle  -  1  -----------------------
} 


// ------------------  FIN Afficher les tickets  -----------------




?>
<!--// -----------------   FIN PHP   ------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM - TICKET</title>
</head>
<body>

</body>
</html>
