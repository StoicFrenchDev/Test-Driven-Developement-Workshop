<?php
namespace Molkky;

use App\Molkky;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MolkkyTest extends TestCase
{
    /* Si une seule quille tombe, on ajoute au score les points de la quille */
    /* Si plus d’une quille est renversée, on ajoute au score le nombre de quille renversées */
    public function testReadmeAssert()
    {
        $molkky = new Molkky;
        $this->assertEquals(8, $molkky->getScore([[5,4],[4],[6,3],]));
    }

    public function testSimpleScoreCalculation()
    {
        $molkky = new Molkky;
        $bowlingSeries = [[5, 4], [4], [6, 3]];
        $expected = 8; // Le score attendu est 8 points
        $this->assertEquals($expected, $molkky->getScore($bowlingSeries));
    }
    
    // Si le joueur dépasse les 50 points, il retombe à 25
    public function testScoreTooHigh()
    {
        $molkky = new Molkky;
        $bowlingSeries = [[12], [12], [12], [12], [3]];
        $expected = 25; // Réduction des points
        $this->assertEquals($expected, $molkky->getScore($bowlingSeries));
    }

    // Le joueur gagne lorsqu’il atteint exactement 50 points (on affiche ‘WIN’)
    public function testWinningScenario()
    {
        $molkky = new Molkky;
        $bowlingSeries = [[12], [12], [12], [12], [2]];
        $expected = 'win'; // Le joueur devrait gagner
        $this->assertEquals($expected, $molkky->getScore($bowlingSeries));
    }

    // Si le joueur fait 0 point trois fois de suite, il a perdu (on affiche ‘LOST’)
    public function testLoosingScenario()
    {
        $molkky = new Molkky;
        $bowlingSeries = [[], [], [], []];
        $expected = 'lost'; // Le joueur devrait perdre
        $this->assertEquals($expected, $molkky->getScore($bowlingSeries));
    }
}
