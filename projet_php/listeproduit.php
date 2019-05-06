<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Accueil</title>
</head>
<body> 
<h1>Nos produits disponible, faites votre commande</h1>
<?php
echo "<table border=\"1\" width=\"100%\">";
//En-tete du tableau
echo "<thead> 
       <tr>
           <th> Nom du produit </th>
           <th> Prix </th>
           <th> Quantité </th>
           <th> Montant  </th>
        </tr>

    </thead>";
    $produit = array(
        array('Nom du produit'=>'parfum','prix'=>2000, 'Quantité'=>100,'Montant'=>20000),
        array('Nom du produit'=>'Savon','prix'=>1000, 'Quantité'=>60,'Montant'=>60000),
        array('Nom du produit'=>'Ordinateurs','prix'=>400000, 'Quantité'=>20,'Montant'=>8000000),
        array('Nom du produit'=>'Nivea','prix'=>2000, 'Quantité'=>100,'Montant'=>20000),
        array('Nom du produit'=>'Jean','prix'=>30000, 'Quantité'=>150,'Montant'=>450000),
        array('Nom du produit'=>'Chemise','prix'=>15000, 'Quantité'=>20,'Montant'=>300000),
        array('Nom du produit'=>'Pantalon','prix'=>14500, 'Quantité'=>100,'Montant'=>1450000),
        array('Nom du produit'=>'Chaussures','prix'=>25000, 'Quantité'=>1000,'Montant'=>25000000),
        array('Nom du produit'=>'Lunettes','prix'=>5000, 'Quantité'=>2000,'Montant'=>1000000),
        array('Nom du produit'=>'Chemise','prix'=>15000, 'Quantité'=>10,'Montant'=>300000),
        array('Nom du produit'=>'Pantalon','prix'=>14500, 'Quantité'=>9,'Montant'=>1450000),
        array('Nom du produit'=>'Chaussures','prix'=>25000, 'Quantité'=>1000,'Montant'=>25000000),
        array('Nom du produit'=>'Lunettes','prix'=>5000, 'Quantité'=>7,'Montant'=>1000000),

    );
    //lecture des indices et des valeurs
    foreach ($produit as $cle=>$tab){
        foreach($tab as $key=>$valeur){
            echo "<td><strong> $valeur </strong></td>";
        }
        echo "</tr>";

    }
    echo "</table>";
    
    ?>
    <style>
     body{
       background:#7777;
   }
   
    </style>
</body>
</html>