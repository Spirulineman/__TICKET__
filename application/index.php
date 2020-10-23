
<?php

require_once "config/db_connect.php";
require_once "tools/outils__perso__jonas__.php";

//  --------------------   FORMULAIRE   -------------------------

//Variables
$id_ticket = 0;
$reponses = array();

/* TRAITEMENT DU POST */
if (!empty($_POST)) {
	if (isset($_POST['crea_ticket'])) {
		$titre = "";
        $contenu = "";
        $id_user = "1";
        $num_alea = 'jonas';
		
		if (isset($_POST['titre'])) {
			$titre = addslashes($_POST['titre']);
		}
		if (isset($_POST['contenu'])) {
			$contenu = addslashes($_POST['contenu']);
		}
		if (isset($_POST['id_ticket'])) {
			$id_ticket = intval($_POST['id_ticket']);
		}
        
        $num_alea = rand(11111111,99999999);
            //pre_var_dump($num_alea);
        
        

        $req_reponse = "INSERT INTO ticket (id_ticket, numero, titre, contenu, id_user) VALUES (NULL, '$num_alea','$titre', '$contenu', $id_user)";

        $res_reponse = mysqli_query($lien_bdd, $req_reponse);
        
        pre_var_dump($res_reponse, NULL,true);
        
		
	}
}









//  --------------  FIN  FORMULAIRE   -------------------------

// ------------------  Afficher les categories  -----------------

    //pre_var_dump('coucou');
        
$req_categorie = "SELECT * FROM categorie";
$res_categorie = mysqli_query($lien_bdd, $req_categorie);
?>
<h1>Forum d'entraide</h1>
<?php
while ($row_categorie = mysqli_fetch_assoc($res_categorie)) {

    //pre_var_dump($row_categorie, NULL);

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
    <form method="POST">
			<input type="text" name="titre" placeholder="Entrez votre théme ..." />
			<textarea name="contenu" placeholder="détaillez votre problèmatique ..."></textarea>
            <input type="hidden" name="id_user" value="<?= $id_user ?>" />
            <input type="submit" name="crea_ticket" value="Envoyer" />
		</form>

    <?php

    ?>
    </body>
</html>