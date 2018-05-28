<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
 <?php
  $prenom= $_GET["prenom"];//infos envoyées via GET
  echo $prenom;
  
    $date= $_GET["date"];
  echo $date;
  
  // $_POST[""]; //infos envoyées via POST
  ?>
  <h1>Hetic</h1>
  <?php
  //commentaire sur une ligne
  /*
    Commentaires sur plusieurs lignes.
  */
  $maVariable="Hello World";
  $nombre = 2;
  $bool = true;
  $tab= [10,20,30,40];
  
  echo '<style>h2{color:red;}</style>';
  echo '<h2>'.$maVariable.'</h2>'; //concaténation avec le .
  
  if($nombre==3)
  {
    $nombre++;
  }
  else
  {
    $nombre--;
  }
  
  $i=0;
  while($i<10)
  {
    echo "<p>Lorem ipsum dolor sit amet</p>";
    $i++;
  }
  
  for($j=0;$j<6;$j++)
  {
    echo "<p>Lorem ipsum dolor sit amet</p>";
  }
  ?>
</body>
</html>






