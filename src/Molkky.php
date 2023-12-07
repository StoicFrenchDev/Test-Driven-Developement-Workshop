<?php

namespace App;

class Molkky
{
    public function getScore(array $bowlingSeries)
    {
        $score = 0;
        $consecutiveZeroes = 0;

        foreach ($bowlingSeries as $throw) {

        // Si aucune quille n'est renversée
            if (empty($throw)) {
                $consecutiveZeroes++;
                // Vérifier si le joueur a perdu
                if ($consecutiveZeroes === 3) {
                    return 'lost';
                }
                continue; // Passe au lancer suivant
            }
    
        // Réinitialise le compteur de lancers sans points
        $consecutiveZeroes = 0;

        // Ajouter les points selon les règles
            if (count($throw) === 1) {
                $score += $throw[0];
            } else {
                $score += count($throw);
            }

        // Vérifier les conditions de victoire ou de réinitialisation
            if ($score > 50) {
                $score = 25;
            } elseif ($score === 50) {
                return "win";
            }

        }

        return $score;
    }
}