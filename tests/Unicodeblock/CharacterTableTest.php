<?php
namespace Benemohamed\Test\CharacterTable;

use Benemohamed\Unicodeblock\CharacterTable;

use PHPUnit\Framework\TestCase;

/**
 * CharacterTable
 * @package Benemohamed\Test\CharacterTable
 */
class CharacterTableTest extends TestCase
{


    public static function test_get_string()
    {
        $test = CharacterTable::get_string(25105);
        $str ="我";
        self::assertSame($test, $str);
    }

    public static function test_get_numeric()
    {
        $test = CharacterTable::get_numeric("我");
        $str =25105;
        self::assertSame($test, $str);
    }

    public static function test_get_Table()
    {
        $test = CharacterTable::get_Table(1,88);
        self::assertNotEmpty($test);
    }
}
