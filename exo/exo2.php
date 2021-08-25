<h1 class='titre'>Exercice 2</h1>

<p class ="enoncer">Enoncé : <span>Calculer le prix TTC du produit. </span></p>

<div class="txt-exo">
<div class="code">
<p class ="txt margin">Copie du code : <span>
    
< ?php <br>

$ht = 50;<br>
$tva = 20;<br>

$tva_ttc = $tva / 100; //Calcul montant tva 0.2 <br>   

$tva_value = $tva_ttc * $ht; //on multiplie pour avoir la valeur de la tva 10€ ici <br>
 
$prix = $tva_value + $ht;// ajouts de la tva au prix HT <br>

echo 'le prix TTC du produit est de '.$prix.' €'; <br>

?>
</span></p>


</div>

<div class="resultat">
<p class="txt">Résultat: <span>
    <?php 

$ht = 50;
$tva = 20;

$tva_ttc = $tva / 100; //Calcul montant tva 0.2

$tva_value = $tva_ttc * $ht; //on multiplie pour avoir la valeur de la tva 10€ ici 
 
$prix = $tva_value + $ht;// ajouts de la tva au prix HT

echo 'Le prix TTC du produit est de '.$prix.' €';

?>
</span>  </p>
 
</div>


</div>