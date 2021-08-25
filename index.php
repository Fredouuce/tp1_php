


<?php 
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet"> 
    <title>Document</title>
  

</head>
<body>

<?php 
 $_SESSION['login'] = $_GET['pseudo'];
 var_dump($_GET['pseudo']);
 var_dump($_SESSION['Login']);

 
if(isset($_SESSION['login'])){
echo "Salut".$_SESSION['login'];
}else{
  echo "Salut l'anonyme";
}


?>
<section class="flex">
<nav class="menu">


 <?php
  if (isset($_GET['site'])){
    if($_GET["site"] == "exercice"){
     include_once("menu.php");
    }elseif($_GET["site"] == "cours"){
      include_once("cours/coursMenu.php");
    }else{
      include_once("menu.php");
    }

?>
  </nav>

<section class="exo">
<?php    if (isset($_GET['site'])) {
        switch ($_GET['site']) {
            case 'home':
                include_once("home.php");
                break;

              case 'exercice':
                switch($_GET['content']){
                  case 'exercice1':
                   include_once("./exo/exo1.php");
                   break;
                   
                }
                include_once("./exo/exo1.php");
                break;

              case 'exo2':
                include_once("./exo/exo2.php");
                break;

              case 'exo3':
                include_once("./exo/exo3.php");
                break;

              case 'exo4':
                include_once("./exo/exo4.php");
                break;

              case 'exo5':
                include_once("./exo/exo5.php");
                break;

              case 'exo6':
                include_once("./exo/exo6.php");
                break;

              case 'exo7':
                include_once("./exo/exo7.php");
                break;

              case 'exo8':
                include_once("./exo/exo8.php");
                break;

            default:
                echo '404 error';
                break;
        }
    }    ?>
</section>
</section> <?php  }else{
   include_once("formulaire.php");
 } ?>
</body>
</html>

