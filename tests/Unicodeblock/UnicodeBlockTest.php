<?php
namespace Benemohamed\Test\UnicodeBlock;

use Benemohamed\UnicodeBlock;

use PHPUnit\Framework\TestCase;

/**
 * UnicodeBlock
 * @package Benemohamed\Test\UnicodeBlock
 */
class CharacterTableTest extends TestCase
{
    public function test_regex()
    {
        self::assertRegExp('/[\x{0600}-\x{06FF}]/u', 'شسي', 'Change pattern '); // block Arabic
        self::assertRegExp('/[\x{0C80}-\x{0CFF}]/u', 'ಶ', 'Change pattern '); // block Kannada
        self::assertRegExp('/[\x{1900}-\x{194F}]/u', 'ᤏ', 'Change pattern '); // block LIMBU LETTER NA
    }

    public static function test_file()
    {
        self::assertFileExists('./data/data.json', 'The file data.json not Exists ');
        self::assertFileExists('./data/List_of_Unicode_blocks.csv', 'The file List_of_Unicode_blocks.csv not Exists');
    }

    public static function test_method()
    {
        $test = UnicodeBlock::Arabic('يبيسب');
        self::assertNotEmpty($test);
        self::assertArrayHasKey('is', $test);
        self::assertArrayHasKey('block1', $test);
        self::assertArrayHasKey('block2', $test);
        self::assertArrayHasKey('Unicode_name', $test);
        self::assertArrayHasKey('check_list', $test);
    }
    public static function test_method_is()
    {
        $test = UnicodeBlock::Arabic('sadasd');
        self::assertFalse($test['is'], 'change string to arabic');

        $test = UnicodeBlock::Arabic('سيس');
        self::assertTrue($test['is'], 'change string to .....');

    }
    public static function test_method_count()
    {
        $total = count(get_class_methods(UnicodeBlock::class));
        self::assertSame($total, 280);
    }

}
