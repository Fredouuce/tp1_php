<h1 class='titre'>Exercice 4</h1>

<p class ="enoncer">Enoncé : <span>Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.
 </span></p>

<div class="txt-exo">
<div class="code">
<p class ="txt margin">Copie du code : <span>
    
< ?php 

$budget = 1553.89; 
$achats = 1554.76;

if ($budget >= $achats){
    echo "Vous avez assez d'argent";
}

elseif($budget < $achats){

 echo "Vous n'avez pas assez d'argent";
}


?>
</span></p>


</div>

<div class="resultat">
<p class="txt">Résultat: <span>
    
<?php 
//EXO 5

$budget = 1553.89; 
$achats = 1554.76;

if ($budget >= $achats){
    echo "Vous avez assez d'argent";
}

elseif($budget < $achats){

 echo "Vous n'avez pas assez d'argent";
}


?>
</span>  </p>
 
</div>


</div>