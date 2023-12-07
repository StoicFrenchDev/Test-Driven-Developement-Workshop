<?php
namespace Molkky;

use App\Molkky;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MolkkyDataProviderTest extends TestCase
{
    #[DataProvider('providerScores')]
    public function testGetscore($bowlingSeries, $expected)
    {
        $molkky = new Molkky;
        $this->assertEquals($expected, $molkky->getScore($bowlingSeries));
    }

    public static function providerScores(): array
    {
        return [
            [[[5, 4], [4], [6, 3],], 8],
            [[[4], [6], [2]], 12],
            [[[4, 2], [6, 3], [1, 5], [6, 3], [4, 10]], 10],
            [[[12], [12], [12], [12], [3]], 25],
            [[[12], [12], [12], [12], [2], [3]], 'win'],
            [[[12], [11], [10], [12], [5]], 'win'],
            [[[], [], [], []], 'lost'],
            [[[], [], [4], []], 4],
        ];
    }

}
