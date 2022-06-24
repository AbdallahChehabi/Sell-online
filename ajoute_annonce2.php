<?php

if (isset($_POST['valider'])) {
  $Un_Titre = $_POST['Un_Titre'];
  $Une_Description = $_POST['Une_Description'];
  $Une_Localisation = $_POST['Localisation'];
  $Un_moyen_de_le_contacter = $_POST['Un_moyen_de_le_contacter'];
  $Catégorie = $_POST['Catégorie'];

  $fichier = fopen ("annonce.txt","a");
  fwrite($fichier,"$Un_Titre;$Une_Description;$Une_Localisation;
  $Un_moyen_de_le_contacter;$Catégorie\n");
  fclose($fichier);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

  <p>
		L'annonce a bien été mis à jour.
	</p>

  <p>
     <a href="index2.php">Revenir au formulaire</a>
  </p>

</body>

</html>
