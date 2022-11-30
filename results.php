<?php

$paragrafo =$_POST['paragrafo'];
$parola =$_POST['parola'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>La parola che ho scritto è : <?php echo $parola ?> </h1>
<h1>Il paragrafo  che ho scritto è : <?php echo $paragrafo ?> </h1>

<h3>la lunghezza del paragrafo è: <?php echo strlen($paragrafo) ?> </h3>

<h4>la parola censurata è : <?php echo str_replace($parola, '***',$paragrafo) ?> </h4>




  
</body>
</html>

