<h1 class='titre'>Exercice 8</h1>

<p class ="enoncer">Enoncé : <span> </span></p>

<div class="txt-exo">
<div class="code">
<p class ="txt margin">Copie du code : <span>
    < ?php 

$a= 0;

while ($a <= 20){
    $a += 2;

    if($a == 10){
         echo "h1".$a."/h1";
    }else{
        echo $a."<br>";
    }

}
?> </span></p>

</div>

<div class="resultat">
<p class="txt">Résultat: <span>
    <?php 
$a= 0;
while ($a <= 20){
    $a += 2;
    if($a == 10){
         echo "<h4>".$a."</h4>";
    }else{
        echo $a."<br>";
    }

}
?></span>  </p>
 
</div>


</div>