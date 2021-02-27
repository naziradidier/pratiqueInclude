<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <?php include 'returnTable.php';
 
    $tableau = returnTable($Personne);

    // boucler le tableau mais pas echo
    for ($table= 0; $table < count($tableau); $table++) {
        echo "<dl>";
        for ($tableInTable = 0; $tableInTable < count($tableau); $tableInTable++) {
          echo "<dd>".$tableau[$table][$tableInTable]."</dd>";
        }
        echo "</dl>";
      }
  
  ?>
  



























  <!--****************************************************************************************** -->
  <?php
  boucler un tableau avec un lien
  $table = array("Nazirah", "Miora", "Toavina");
  echo "<ul>";
  for ($i = 0; $i < count($table); $i++) {
    echo "<li>";
    echo "<a href=\"http://localhost/test/$table[$i].html.php\"> $table[$i]</a>";
    echo "</li>";
  }
  echo "</ul>";
  ?>
 <!--****************************************************************************************** -->
<?php
$Personne = array (
    $colonne = array("Nom", "Nazirah", "Miora", "Toavina"),
    $colonne = array("Prénom","Prisca", "Jelisca", "Mbola"),
    $colonne = array("age",19, 20, 21),
    $colonne = array("Lieu","Ambanja", "Diego", "Majunga")
);

// afficher miora seulement
for ($ligne= 0; $ligne < count($colonne); $ligne++) {
  echo "<dl>";
  for ($col = 0; $col < count($colonne); $col+=3) {
    echo "<dd>".$Personne[$ligne][$col]."</dd>";
  }
  echo "</dl>";
}
    echo $Personne[0][0].": ".$Personne[0][2].".<br>";
    echo $Personne[1][0]." :".$Personne[1][2].".<br>";
    echo $Personne[2][0].":".$Personne[2][2].".<br>";
    echo $Personne[3][0].": ".$Personne[3][2].".<br>";
    *****************************************************
    afficher miora seulement
    for ($ligne= 0; $ligne < count($colonne); $ligne++) {
      echo "<dl>";
      for ($col = 0; $col < count($colonne)-1; $col+=2) {
        echo "<dd>".$Personne[$ligne][$col]."</dd>";
      }
      echo "</dl>";
    }
    // *****************************************************
 ?>  

  </body>
</html>