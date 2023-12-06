# Énoncé du Dojo
Calculer les points au mölkky

Règles du jeu: (voir https://fr.wikipedia.org/wiki/M%C3%B6lkky)

On ne gère le score que d’un seul joueur.

- si une seule quille tombe, on ajoute au score les points de la quille
- si plus d’une quille est renversée, on ajoute au score le nombre de quilles renversées
- si le joueur dépasse les 50 points, il retombe à 25
- le joueur gagne lorsqu’il atteint exactement 50 points (on affiche 'WIN')
- OPTION : si le joueur fait 0 point trois fois de suite, il a perdu (on affiche 'LOST').

On attend une classe Molkky avec une méthode getScore() qui prend en entrée un array contenant les quilles renversées pendant la partie et renvoie le score final.

Exemple de test :
```php
$this->assertEquals(8, $molkky->getScore([[5,4],[4],[6,3],]));
```

1. Installer PHPUnit
2. Créer les tests qui vérifient la règle du jeu dans la classe `MolkkyTest`.
3. Refactoriser les tests en utilisant l'[attribut #dataProvider](https://docs.phpunit.de/en/10.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers) de PHPUnit.
4. Écrire le contenu de la méthode `getScore()`.

## Test
```php
./vendor/bin/phpunit --colors tests 
```
