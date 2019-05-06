<!DOCTYPE html>
<html>
    <head>
        <title>Recherche produit</title>
        <meta charget="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <style>
  body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
  #nom3{
    width:70%;
  }
  #inputEmail3{
    width:70%;
  }
  #inputPassword2{
    width:40%;
  } 
  #inputPassword3{
    width:70%; 
  }
  #nom1,#email,#pass{
    font-size:20px;
    font-family:verdana;
  
  } 
  #form1{
    border:0px solid black;
    width:80%;
    margin-top:50px;
    margin-left:140px;
  }
  #conn{
    margin-left:450px;
  }
  h1{
    font-size:80px;
    color:white;
  }
  #t1 th{
      font-size:20px;
      color: black;
  }
  .rouge{
            background-color:red;
        }
</style>
    </head>
    <body>
    <form action="accueil.php">
<p>
    <label>
    <input type="submit" name="deconnect" id="deconect" value="Retour"><br>
    </label>
    </p>
</form>
      <center><h1>Rechercher un produit</h1></center>
      <div id="form1"> 
    <form class="form-inline" action=recherche.php method="POST">
    <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="nom1" class="sr-only">nom</label>
    <input type="text" class="form-control" id="nom3" name="nom" placeholder="nom">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2"  id="email"  class="sr-only">prix minimal</label>
    <input type="text" class="form-control" id="inputEmail3"  name="prix_min" placeholder="prix maximal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="pass" class="sr-only">prix maximal</label>
    <input type="text" class="form-control" id="inputPassword3"  name="prix_max" placeholder="prix minimal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="quant" class="sr-only">quantité</label>
    <input type="number" class="form-control" id="inputPassword2" name="quantite" placeholder="quantité">
  </div>
  <button type="submit" class="btn btn-primary mb-2" id="conn" name="recherche">recherche</button>
</form>
</div> 
<?php
$list=array(
  array('parfum', 100, 2000,''),
    array('savon',60, 1000,''),          
    array('Ordinateus', 20, 400000,''), 
    array('nivéa', 100, 2000,''),
    array('jeans', 150, 30000,''),
    array('chemise', 20, 15000,''),
    array( 'pantalon',100,14500, '',),
    array( 'chaussures',1000,25000,'')
);
?>

<center><table border='1' width="80%">
<tr id="t1">
<th>nom produit</th>
<th>quantité produit</th>
<th>prix produit</th>
<th>montant produit</th>
</tr>

<?php

/*for($i=0; $i<count($list); $i++){
  echo "<tr>";
      $list[$i][3]=$list[$i][1]*$list[$i][2];
      for($j=0; $j<count($list[$i]); $j++){
          
          if($list[$i][1]<10){
              echo "<td class='rouge'>".$list[$i][$j]."</td>";
          }
          else{
              echo "<td>".$list[$i][$j]."</td>";
          }
          
      }echo "</tr>";
      

}*/


if(!empty($_POST["quantite"])){
    $val=$_POST["quantite"];
    for($i=0;$i<count($list);$i++){
        echo "<tr>";

        for($j=0;$j<count($list[$i]);$j++){
          $list[$i][3]=$list[$i][1]*$list[$i][2];
            if($val<=$list[$i][1]){
                echo "<td>".$list[$i][$j]."</td>";
            }
        }
        echo "</tr>";
 
    }
}

if(!empty($_POST["nom"])){
  $val1=$_POST["nom"];
  for($i=0;$i<count($list);$i++){
    echo "<tr>";
    for($j=0;$j<count($list[$i]);$j++){
      $list[$i][3]=$list[$i][1]*$list[$i][2];
      if($val1==$list[$i][0]){
        echo "<td>".$list[$i][$j]."</td>";
       
      }
    }
    echo "</tr>";
  }
}

if(!empty($_POST["prix_min"])){
  $val2=$_POST["prix_min"];
  for($i=0;$i<count($list);$i++){
      echo "<tr>";

      for($j=0;$j<count($list[$i]);$j++){
        $list[$i][3]=$list[$i][1]*$list[$i][2];
          if($val2<=$list[$i][2]){
              echo "<td>".$list[$i][$j]."</td>";
          }
      }
      echo "</tr>";

  }
}
?>
</table></center>
<style>
 body{
       background:#7777;
   }
   
</style>
    </body>
</html>