<h1 class="titre">Les boucles</h1>

<p class="enoncer"> Les boucles  for sont les boucles les plus complexes en PHP. Elles fonctionnent comme les boucles for du langage C(C++). La syntaxe des boucles for est la suivante : <br>

for (expr1; expr2; expr3)
<a href="">Exemple</a> <br> La première expression (expr1) est évaluée (exécutée), quoi qu'il arrive au début de la boucle. <br> <br> La signification d'une boucle while est très simple. PHP exécute l'instruction tant que l'expression de la boucle while est évaluée comme true. La valeur de l'expression est vérifiée à chaque début de boucle, et, si la valeur change durant l'exécution de l'instruction, l'exécution ne s'arrêtera qu'à la fin de l'itération (chaque fois que PHP exécute l'instruction, on appelle cela une itération). Si l'expression du while est false avant la première itération, l'instruction ne sera jamais exécutée. <br>

Comme avec le if, vous pouvez regrouper plusieurs instructions dans la même boucle while en les regroupant à l'intérieur d'accolades ou en utilisant la syntaxe suivante : <br> <br>

while (expression): <br>
    commandes <br>
    ... <br>
endwhile; <br> <a href="">Exemple</a>


</p>