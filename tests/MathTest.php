<?php
namespace Davit37\PhpUnit;

use PHPUnit\Framework\TestCase;
use Davit37\PhpUnit\Math;
class MathTest extends TestCase 
{
    public function testManual()
    {
        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(20, Math::sum([4,4,4,4,4]));
        self::assertEquals(9, Math::sum([3, 3, 3]));
        self::assertEquals(0, Math::sum([]));
        self::assertEquals(2, Math::sum([1,1]));
    }

    public function mathSumData(): array 
    {
        return [
            [10, [5, 5]],
            [20, [4, 4, 4, 4, 4]],
            [9, [3, 3, 3]],
            [0, []],
            [2, [1, 1]]
        ];
    }

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(int $expected, array $values) 
    {
        self::assertEquals($expected, Math::sum($values));
    }

    /**
     * @testWith [10, [5, 5]]
     *           [20, [4, 4, 4, 4, 4]]
     *           [9, [3, 3, 3]]
     *           [0, []]
     *           [2, [1, 1]]
     */

    public function testWith(int $expected, array $values) 
    {
        self::assertEquals($expected, Math::sum($values));
    }
}