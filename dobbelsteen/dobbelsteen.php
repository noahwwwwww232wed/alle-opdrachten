<!DOCTYPE html>
<html lang="en">

<head>

  <title>Document</title>
</head>

<body>
  <form>

    Typ 5 om te starten: <input type="text" name="poging1">
    <input type="submit">


  </form>
  <?php
  if (isset($_GET["poging1"])) {
    $poging1 = $_GET["poging1"];                                       //readline("typ 5 om te starten");
  
    if ($poging1 == 5) {
      echo rand(1, 6);
    }
  }
  ?>

</body>

</html>