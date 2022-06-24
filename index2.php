<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>La bonne recherche</title>
  <link rel="stylesheet" type="text/css" href="annonce2.css"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
  <h3>
    La Bonne Recherche
  </h3>
  <br />
  
  <form method="POST" action="ajoute_annonce2.php">
    <div id="cor" >
      <p><label for="Un_Titre">Un Titre</label>
         <input type="text" name="Un_Titre" id="Un_Titre" /></p>
      <p><label for="Une_Description">Une Description</label>
         <input type="text" name="Une_Description" id="Une_Description" /></p>
      <p><label for="Une_Localisation">Une Localisation</label>
          <select name="Localisation">
           <option value="ville">ville</option>
           <option value="département">département</option></select>
           <input type="text" name="Localisation" id="Localisation"/></p>
      <p><label for="Un_moyen_de_le_contacter">Un moyen de le contacter</label>
          <select name="Un moyen de le contacter">
           <option value="numéro de téléphone">numéro de téléphone</option>
           <option value="Email">Email</option></select>
         <input type="text" name="Un_moyen_de_le_contacter" id="adresse" size="50" /></p>
      <p><label for="Catégorie">Catégorie</label>
         <select name="Catégorie" >
           <option value="Auto">Auto</option>
           <option value="Immobilier">Immobilier</option>
           <option value="Emploi">Emploi</option>
         </select></p>

      <p><input type="submit" name="valider" value="Valider" /></p>
      
       </div>
       
            
        <form action="index2.php" method="post">
            <p><label id="tire" for="recherche">Un Titre</label>
            <input type="text" name="recherche" id="recherche" value="<?php if(isset($_POST['recherche'])) echo $_POST['recherche'];?>"/></p>
            <p><input type="submit" name="recherche" value="Recherche" /></p>
        </form>


  </form>

  <dl>
   <?php
      if (file_exists("annonces.txt")) {
       $fichier = fopen ("annonce.txt","r");
       while ($ligne = fgets($fichier)) {
                list($Un_Titre,$Une_Description,$Une_Localisation,$Un_moyen_de_le_contacter,
                $Catégorie) = explode(';',rtrim($ligne));
	            if (empty($_POST['recherche']) || strtoupper($_POST['recherche']) == strtoupper($Un_Titre)) {
	                echo "<dt><span class='Un_Titre'>$Un_Titre</span>
                        <span class='Une_Description'>$Une_Description</span></dt>
                          <dd class='Une_Localisation'>$Une_Localisation<br /><span class='ville'>$ville</span></dd>
	                        <dd class='Un_moyen_de_le_contacter'>$Un_moyen_de_le_contacter</dd>
	                        <dd class='Catégorie'><a href='mailto:$Catégorie'>$Catégorie</a></dd>";
	            }
            }
            fclose($fichier);

      }

   ?>
  </dl>
  
  <img id=im1 src="emploi2.jpg"alt="Arche"width="150"height="150"/>
  <img id=im2 src="auto.jpg"alt="Arche"width="150"height="150"/>
  <img id=im3 src="immobilier2.jpg"alt="Arche"width="150"height="150"/>
  
</body>

</html>
