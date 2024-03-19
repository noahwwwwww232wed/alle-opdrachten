<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>

    <form>
    Vul je email in: <input type = "text" name = "email">
    <input type = "submit">

</form>

<?php
if(isset($_GET["email"]))
{
$email = $_GET["email"];         //readline("wat is u email?");

if ( str_contains($email, "@") &&  str_contains($email, "."))
{
    echo "U email is geldig";
}

else 
{
    echo "U email is niet geldig";
}
}
?>

</body>
</html>









<?php

