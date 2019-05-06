<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login.php</title>
</head>
<body>
    <center>
<div class=auten style="border:1px; width">
    <form method= "Post">
    nom <br> <br> <input type="text" name="nom" id=""><br><br>
        login <br> <br> <input type="text" name"login" id=""><br><br>
        password <br> <br> <input type="password" name"password" id=""><br><br>
        <input type="submit" value="valider">
    </form>
    </div>
    <br>
    <br>
    <br>
    <br>

    <?php
     echo "<table border=\"1\" width=\"100%\">";
     // En tete du tableau
     echo "<thead>
             <tr>
                 <th> Nom   de l'utilisateur  </th>
                 <th> Login </th>
                 <th> Password </th>
             </tr>
         </thead>";
         $client=array(
                array('lamine0', 'diouf0@gmail.com', 'lam123'),
                array('lamine1','diouf1@gmail.com', 'lam456'),
                array('lamine2','diouf2@gmail.com', 'lam789'),
               
         );
         for($i=0;  $i<count($client[$i] ); $i++){
        if($_POST["nom"]==$client[$i][0]){
            header('Location:acceuilv.php') ;

         for($j=0;  $j<count($client[$j] ); $j++){
        if($_POST["login"]==$client[$j][1]){        
                        header('Location:acceuilv.php') ;


        for($k=0;  $k<count($client[$k] ); $k++){
        if($_POST["password"]==$client[$k][2]){
                    header('Location:acceuilv.php') ;
                }
            }
        }
    }
}
/*else{
 header('Location:logins.php');
 
         }*/
         }

         foreach ($client as $cle=>$tab){
            foreach($tab as $key=>$valeur){
                echo "<td><strong> $valeur </strong></td>";
            }
            echo "</tr>";
    
        }
        echo "</table>";
        
    ?>
    </center>

   <style>
   body{
       background:#7777;
   }
   
   </style>
</body>
</html>