<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<img src="renommer" alt="">

    <form method="GET" action="">
        <input type="text" name="connect"> <br>
        <input type="text" name="pseudo">
        <input type="submit" value="Envoyer">
    </form>

    <?php 
        if (isset($_GET["connect"]) AND $_GET['connect'] == "citron"){
        

           header("Location: index.php?site=home");
           exit;
        }elseif (isset($_GET["connect"]) AND $_GET['connect'] != "citron"){
            echo "vous n'êtes pas au bon endroit";
        }
    ?>

    
</body>
</html>