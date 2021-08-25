<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
      
</head>
<body>

<section class="flex">


<nav class="menu"> 
    <?php 
    include_once('coursMenu.php')
    ?>
</nav>

<section class="exo">
    <?php

if(isset($_GET['content'])){
    switch ($_GET['content']){
        case 'introduction';
        include_once('coursLesson/introduction.php');
        break;

        case 'variable';
        include_once('coursLesson/variable.php');
        break;

        case 'conditions';
        include_once('coursLesson/conditions.php');
        break;

        case 'boucles';
        include_once('coursLesson/boucles.php');
        break;

        case 'tableaux';
        include_once('coursLesson/tableaux.php');
        break;

        case 'fonctions';
        include_once('coursLesson/fonctions.php');
        break;
        
        
        
        default : echo '404 error';
        break;
    }
}
?>

</section>
</section>
    
</body>
</html>