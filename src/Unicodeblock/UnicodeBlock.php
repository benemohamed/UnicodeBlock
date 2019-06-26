<?php namespace Benemohamed;

/*
 * Copyright 2019 Mohamed Benrebia <mohamed@ipfinder.io>
 *
 * Licensed under the Apache License, Version 2.0 (the License);
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an AS IS BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * @category  library
 * @author    Mohamed Benrebia <mohamed@ipfinder.io>
 * @copyright 2019 Mohamed Benrebia
 * @license   https://opensource.org/licenses/Apache-2.0 Apache License, Version 2.0
 */


/**
 * Main Unicode_Block
 */
use Benemohamed\CharacterTable;

class UnicodeBlock extends AbstractUnicode
{


    /**
    * Regex , Blocks, name for Basic Latin
    * @var array
    */

    const Basic_Latin  = array( 'regex' => '/[\x{0000}-\x{007F}]/u', 'block1' => 0x0000, 'block2' => 0x007F, 'Unicode_name' => 'Basic Latin' );
    /**
    * Regex , Blocks, name for Latin-1 Supplement
    * @var array
    */

    const Latin_1_Supplement  = array( 'regex' => '/[\x{0080}-\x{00FF}]/u', 'block1' => 0x0080, 'block2' => 0x00FF, 'Unicode_name' => 'Latin-1 Supplement' );
    /**
    * Regex , Blocks, name for Latin Extended-A
    * @var array
    */

    const Latin_Extended_A  = array( 'regex' => '/[\x{0100}-\x{017F}]/u', 'block1' => 0x0100, 'block2' => 0x017F, 'Unicode_name' => 'Latin Extended-A' );
    /**
    * Regex , Blocks, name for Latin Extended-B
    * @var array
    */

    const Latin_Extended_B  = array( 'regex' => '/[\x{0180}-\x{024F}]/u', 'block1' => 0x0180, 'block2' => 0x024F, 'Unicode_name' => 'Latin Extended-B' );
    /**
    * Regex , Blocks, name for IPA Extensions
    * @var array
    */

    const IPA_Extensions  = array( 'regex' => '/[\x{0250}-\x{02AF}]/u', 'block1' => 0x0250, 'block2' => 0x02AF, 'Unicode_name' => 'IPA Extensions' );
    /**
    * Regex , Blocks, name for Spacing Modifier Letters
    * @var array
    */

    const Spacing_Modifier_Letters  = array( 'regex' => '/[\x{02B0}-\x{02FF}]/u', 'block1' => 0x02B0, 'block2' => 0x02FF, 'Unicode_name' => 'Spacing Modifier Letters' );
    /**
    * Regex , Blocks, name for Combining Diacritical Marks
    * @var array
    */

    const Combining_Diacritical_Marks  = array( 'regex' => '/[\x{0300}-\x{036F}]/u', 'block1' => 0x0300, 'block2' => 0x036F, 'Unicode_name' => 'Combining Diacritical Marks' );
    /**
    * Regex , Blocks, name for Greek And Coptic
    * @var array
    */

    const Greek_And_Coptic  = array( 'regex' => '/[\x{0370}-\x{03FF}]/u', 'block1' => 0x0370, 'block2' => 0x03FF, 'Unicode_name' => 'Greek and Coptic' );
    /**
    * Regex , Blocks, name for Cyrillic
    * @var array
    */

    const Cyrillic  = array( 'regex' => '/[\x{0400}-\x{04FF}]/u', 'block1' => 0x0400, 'block2' => 0x04FF, 'Unicode_name' => 'Cyrillic' );
    /**
    * Regex , Blocks, name for Cyrillic Supplement
    * @var array
    */

    const Cyrillic_Supplement  = array( 'regex' => '/[\x{0500}-\x{052F}]/u', 'block1' => 0x0500, 'block2' => 0x052F, 'Unicode_name' => 'Cyrillic Supplement' );
    /**
    * Regex , Blocks, name for Armenian
    * @var array
    */

    const Armenian  = array( 'regex' => '/[\x{0530}-\x{058F}]/u', 'block1' => 0x0530, 'block2' => 0x058F, 'Unicode_name' => 'Armenian' );
    /**
    * Regex , Blocks, name for Hebrew
    * @var array
    */

    const Hebrew  = array( 'regex' => '/[\x{0590}-\x{05FF}]/u', 'block1' => 0x0590, 'block2' => 0x05FF, 'Unicode_name' => 'Hebrew' );
    /**
    * Regex , Blocks, name for Arabic
    * @var array
    */

    const Arabic  = array( 'regex' => '/[\x{0600}-\x{06FF}]/u', 'block1' => 0x0600, 'block2' => 0x06FF, 'Unicode_name' => 'Arabic' );
    /**
    * Regex , Blocks, name for Syriac
    * @var array
    */

    const Syriac  = array( 'regex' => '/[\x{0700}-\x{074F}]/u', 'block1' => 0x0700, 'block2' => 0x074F, 'Unicode_name' => 'Syriac' );
    /**
    * Regex , Blocks, name for Arabic Supplement
    * @var array
    */

    const Arabic_Supplement  = array( 'regex' => '/[\x{0750}-\x{077F}]/u', 'block1' => 0x0750, 'block2' => 0x077F, 'Unicode_name' => 'Arabic Supplement' );
    /**
    * Regex , Blocks, name for Thaana
    * @var array
    */

    const Thaana  = array( 'regex' => '/[\x{0780}-\x{07BF}]/u', 'block1' => 0x0780, 'block2' => 0x07BF, 'Unicode_name' => 'Thaana' );
    /**
    * Regex , Blocks, name for NKo
    * @var array
    */

    const NKo  = array( 'regex' => '/[\x{07C0}-\x{07FF}]/u', 'block1' => 0x07C0, 'block2' => 0x07FF, 'Unicode_name' => 'NKo' );
    /**
    * Regex , Blocks, name for Samaritan
    * @var array
    */

    const Samaritan  = array( 'regex' => '/[\x{0800}-\x{083F}]/u', 'block1' => 0x0800, 'block2' => 0x083F, 'Unicode_name' => 'Samaritan' );
    /**
    * Regex , Blocks, name for Mandaic
    * @var array
    */

    const Mandaic  = array( 'regex' => '/[\x{0840}-\x{085F}]/u', 'block1' => 0x0840, 'block2' => 0x085F, 'Unicode_name' => 'Mandaic' );
    /**
    * Regex , Blocks, name for Syriac Supplement
    * @var array
    */

    const Syriac_Supplement  = array( 'regex' => '/[\x{0860}-\x{086F}]/u', 'block1' => 0x0860, 'block2' => 0x086F, 'Unicode_name' => 'Syriac Supplement' );
    /**
    * Regex , Blocks, name for Arabic Extended-A
    * @var array
    */

    const Arabic_Extended_A  = array( 'regex' => '/[\x{08A0}-\x{08FF}]/u', 'block1' => 0x08A0, 'block2' => 0x08FF, 'Unicode_name' => 'Arabic Extended-A' );
    /**
    * Regex , Blocks, name for Devanagari
    * @var array
    */

    const Devanagari  = array( 'regex' => '/[\x{0900}-\x{097F}]/u', 'block1' => 0x0900, 'block2' => 0x097F, 'Unicode_name' => 'Devanagari' );
    /**
    * Regex , Blocks, name for Bengali
    * @var array
    */

    const Bengali  = array( 'regex' => '/[\x{0980}-\x{09FF}]/u', 'block1' => 0x0980, 'block2' => 0x09FF, 'Unicode_name' => 'Bengali' );
    /**
    * Regex , Blocks, name for Gurmukhi
    * @var array
    */

    const Gurmukhi  = array( 'regex' => '/[\x{0A00}-\x{0A7F}]/u', 'block1' => 0x0A00, 'block2' => 0x0A7F, 'Unicode_name' => 'Gurmukhi' );
    /**
    * Regex , Blocks, name for Gujarati
    * @var array
    */

    const Gujarati  = array( 'regex' => '/[\x{0A80}-\x{0AFF}]/u', 'block1' => 0x0A80, 'block2' => 0x0AFF, 'Unicode_name' => 'Gujarati' );
    /**
    * Regex , Blocks, name for Oriya
    * @var array
    */

    const Oriya  = array( 'regex' => '/[\x{0B00}-\x{0B7F}]/u', 'block1' => 0x0B00, 'block2' => 0x0B7F, 'Unicode_name' => 'Oriya' );
    /**
    * Regex , Blocks, name for Tamil
    * @var array
    */

    const Tamil  = array( 'regex' => '/[\x{0B80}-\x{0BFF}]/u', 'block1' => 0x0B80, 'block2' => 0x0BFF, 'Unicode_name' => 'Tamil' );
    /**
    * Regex , Blocks, name for Telugu
    * @var array
    */

    const Telugu  = array( 'regex' => '/[\x{0C00}-\x{0C7F}]/u', 'block1' => 0x0C00, 'block2' => 0x0C7F, 'Unicode_name' => 'Telugu' );
    /**
    * Regex , Blocks, name for Kannada
    * @var array
    */

    const Kannada  = array( 'regex' => '/[\x{0C80}-\x{0CFF}]/u', 'block1' => 0x0C80, 'block2' => 0x0CFF, 'Unicode_name' => 'Kannada' );
    /**
    * Regex , Blocks, name for Malayalam
    * @var array
    */

    const Malayalam  = array( 'regex' => '/[\x{0D00}-\x{0D7F}]/u', 'block1' => 0x0D00, 'block2' => 0x0D7F, 'Unicode_name' => 'Malayalam' );
    /**
    * Regex , Blocks, name for Sinhala
    * @var array
    */

    const Sinhala  = array( 'regex' => '/[\x{0D80}-\x{0DFF}]/u', 'block1' => 0x0D80, 'block2' => 0x0DFF, 'Unicode_name' => 'Sinhala' );
    /**
    * Regex , Blocks, name for Thai
    * @var array
    */

    const Thai  = array( 'regex' => '/[\x{0E00}-\x{0E7F}]/u', 'block1' => 0x0E00, 'block2' => 0x0E7F, 'Unicode_name' => 'Thai' );
    /**
    * Regex , Blocks, name for Lao
    * @var array
    */

    const Lao  = array( 'regex' => '/[\x{0E80}-\x{0EFF}]/u', 'block1' => 0x0E80, 'block2' => 0x0EFF, 'Unicode_name' => 'Lao' );
    /**
    * Regex , Blocks, name for Tibetan
    * @var array
    */

    const Tibetan  = array( 'regex' => '/[\x{0F00}-\x{0FFF}]/u', 'block1' => 0x0F00, 'block2' => 0x0FFF, 'Unicode_name' => 'Tibetan' );
    /**
    * Regex , Blocks, name for Myanmar
    * @var array
    */

    const Myanmar  = array( 'regex' => '/[\x{1000}-\x{109F}]/u', 'block1' => 0x1000, 'block2' => 0x109F, 'Unicode_name' => 'Myanmar' );
    /**
    * Regex , Blocks, name for Georgian
    * @var array
    */

    const Georgian  = array( 'regex' => '/[\x{10A0}-\x{10FF}]/u', 'block1' => 0x10A0, 'block2' => 0x10FF, 'Unicode_name' => 'Georgian' );
    /**
    * Regex , Blocks, name for Hangul Jamo
    * @var array
    */

    const Hangul_Jamo  = array( 'regex' => '/[\x{1100}-\x{11FF}]/u', 'block1' => 0x1100, 'block2' => 0x11FF, 'Unicode_name' => 'Hangul Jamo' );
    /**
    * Regex , Blocks, name for Ethiopic
    * @var array
    */

    const Ethiopic  = array( 'regex' => '/[\x{1200}-\x{137F}]/u', 'block1' => 0x1200, 'block2' => 0x137F, 'Unicode_name' => 'Ethiopic' );
    /**
    * Regex , Blocks, name for Ethiopic Supplement
    * @var array
    */

    const Ethiopic_Supplement  = array( 'regex' => '/[\x{1380}-\x{139F}]/u', 'block1' => 0x1380, 'block2' => 0x139F, 'Unicode_name' => 'Ethiopic Supplement' );
    /**
    * Regex , Blocks, name for Cherokee
    * @var array
    */

    const Cherokee  = array( 'regex' => '/[\x{13A0}-\x{13FF}]/u', 'block1' => 0x13A0, 'block2' => 0x13FF, 'Unicode_name' => 'Cherokee' );
    /**
    * Regex , Blocks, name for Unified Canadian Aboriginal Syllabics
    * @var array
    */

    const Unified_Canadian_Aboriginal_Syllabics  = array( 'regex' => '/[\x{1400}-\x{167F}]/u', 'block1' => 0x1400, 'block2' => 0x167F, 'Unicode_name' => 'Unified Canadian Aboriginal Syllabics' );
    /**
    * Regex , Blocks, name for Ogham
    * @var array
    */

    const Ogham  = array( 'regex' => '/[\x{1680}-\x{169F}]/u', 'block1' => 0x1680, 'block2' => 0x169F, 'Unicode_name' => 'Ogham' );
    /**
    * Regex , Blocks, name for Runic
    * @var array
    */

    const Runic  = array( 'regex' => '/[\x{16A0}-\x{16FF}]/u', 'block1' => 0x16A0, 'block2' => 0x16FF, 'Unicode_name' => 'Runic' );
    /**
    * Regex , Blocks, name for Tagalog
    * @var array
    */

    const Tagalog  = array( 'regex' => '/[\x{1700}-\x{171F}]/u', 'block1' => 0x1700, 'block2' => 0x171F, 'Unicode_name' => 'Tagalog' );
    /**
    * Regex , Blocks, name for Hanunoo
    * @var array
    */

    const Hanunoo  = array( 'regex' => '/[\x{1720}-\x{173F}]/u', 'block1' => 0x1720, 'block2' => 0x173F, 'Unicode_name' => 'Hanunoo' );
    /**
    * Regex , Blocks, name for Buhid
    * @var array
    */

    const Buhid  = array( 'regex' => '/[\x{1740}-\x{175F}]/u', 'block1' => 0x1740, 'block2' => 0x175F, 'Unicode_name' => 'Buhid' );
    /**
    * Regex , Blocks, name for Tagbanwa
    * @var array
    */

    const Tagbanwa  = array( 'regex' => '/[\x{1760}-\x{177F}]/u', 'block1' => 0x1760, 'block2' => 0x177F, 'Unicode_name' => 'Tagbanwa' );
    /**
    * Regex , Blocks, name for Khmer
    * @var array
    */

    const Khmer  = array( 'regex' => '/[\x{1780}-\x{17FF}]/u', 'block1' => 0x1780, 'block2' => 0x17FF, 'Unicode_name' => 'Khmer' );
    /**
    * Regex , Blocks, name for Mongolian
    * @var array
    */

    const Mongolian  = array( 'regex' => '/[\x{1800}-\x{18AF}]/u', 'block1' => 0x1800, 'block2' => 0x18AF, 'Unicode_name' => 'Mongolian' );
    /**
    * Regex , Blocks, name for Unified Canadian Aboriginal Syllabics Extended
    * @var array
    */

    const Unified_Canadian_Aboriginal_Syllabics_Extended  = array( 'regex' => '/[\x{18B0}-\x{18FF}]/u', 'block1' => 0x18B0, 'block2' => 0x18FF, 'Unicode_name' => 'Unified Canadian Aboriginal Syllabics Extended' );
    /**
    * Regex , Blocks, name for Limbu
    * @var array
    */

    const Limbu  = array( 'regex' => '/[\x{1900}-\x{194F}]/u', 'block1' => 0x1900, 'block2' => 0x194F, 'Unicode_name' => 'Limbu' );
    /**
    * Regex , Blocks, name for Tai Le
    * @var array
    */

    const Tai_Le  = array( 'regex' => '/[\x{1950}-\x{197F}]/u', 'block1' => 0x1950, 'block2' => 0x197F, 'Unicode_name' => 'Tai Le' );
    /**
    * Regex , Blocks, name for New Tai Lue
    * @var array
    */

    const New_Tai_Lue  = array( 'regex' => '/[\x{1980}-\x{19DF}]/u', 'block1' => 0x1980, 'block2' => 0x19DF, 'Unicode_name' => 'New Tai Lue' );
    /**
    * Regex , Blocks, name for Khmer Symbols
    * @var array
    */

    const Khmer_Symbols  = array( 'regex' => '/[\x{19E0}-\x{19FF}]/u', 'block1' => 0x19E0, 'block2' => 0x19FF, 'Unicode_name' => 'Khmer Symbols' );
    /**
    * Regex , Blocks, name for Buginese
    * @var array
    */

    const Buginese  = array( 'regex' => '/[\x{1A00}-\x{1A1F}]/u', 'block1' => 0x1A00, 'block2' => 0x1A1F, 'Unicode_name' => 'Buginese' );
    /**
    * Regex , Blocks, name for Tai Tham
    * @var array
    */

    const Tai_Tham  = array( 'regex' => '/[\x{1A20}-\x{1AAF}]/u', 'block1' => 0x1A20, 'block2' => 0x1AAF, 'Unicode_name' => 'Tai Tham' );
    /**
    * Regex , Blocks, name for Combining Diacritical Marks Extended
    * @var array
    */

    const Combining_Diacritical_Marks_Extended  = array( 'regex' => '/[\x{1AB0}-\x{1AFF}]/u', 'block1' => 0x1AB0, 'block2' => 0x1AFF, 'Unicode_name' => 'Combining Diacritical Marks Extended' );
    /**
    * Regex , Blocks, name for Balinese
    * @var array
    */

    const Balinese  = array( 'regex' => '/[\x{1B00}-\x{1B7F}]/u', 'block1' => 0x1B00, 'block2' => 0x1B7F, 'Unicode_name' => 'Balinese' );
    /**
    * Regex , Blocks, name for Sundanese
    * @var array
    */

    const Sundanese  = array( 'regex' => '/[\x{1B80}-\x{1BBF}]/u', 'block1' => 0x1B80, 'block2' => 0x1BBF, 'Unicode_name' => 'Sundanese' );
    /**
    * Regex , Blocks, name for Batak
    * @var array
    */

    const Batak  = array( 'regex' => '/[\x{1BC0}-\x{1BFF}]/u', 'block1' => 0x1BC0, 'block2' => 0x1BFF, 'Unicode_name' => 'Batak' );
    /**
    * Regex , Blocks, name for Lepcha
    * @var array
    */

    const Lepcha  = array( 'regex' => '/[\x{1C00}-\x{1C4F}]/u', 'block1' => 0x1C00, 'block2' => 0x1C4F, 'Unicode_name' => 'Lepcha' );
    /**
    * Regex , Blocks, name for Ol Chiki
    * @var array
    */

    const Ol_Chiki  = array( 'regex' => '/[\x{1C50}-\x{1C7F}]/u', 'block1' => 0x1C50, 'block2' => 0x1C7F, 'Unicode_name' => 'Ol Chiki' );
    /**
    * Regex , Blocks, name for Cyrillic Extended-C
    * @var array
    */

    const Cyrillic_Extended_C  = array( 'regex' => '/[\x{1C80}-\x{1C8F}]/u', 'block1' => 0x1C80, 'block2' => 0x1C8F, 'Unicode_name' => 'Cyrillic Extended-C' );
    /**
    * Regex , Blocks, name for Sundanese Supplement
    * @var array
    */

    const Sundanese_Supplement  = array( 'regex' => '/[\x{1CC0}-\x{1CCF}]/u', 'block1' => 0x1CC0, 'block2' => 0x1CCF, 'Unicode_name' => 'Sundanese Supplement' );
    /**
    * Regex , Blocks, name for Vedic Extensions
    * @var array
    */

    const Vedic_Extensions  = array( 'regex' => '/[\x{1CD0}-\x{1CFF}]/u', 'block1' => 0x1CD0, 'block2' => 0x1CFF, 'Unicode_name' => 'Vedic Extensions' );
    /**
    * Regex , Blocks, name for Phonetic Extensions
    * @var array
    */

    const Phonetic_Extensions  = array( 'regex' => '/[\x{1D00}-\x{1D7F}]/u', 'block1' => 0x1D00, 'block2' => 0x1D7F, 'Unicode_name' => 'Phonetic Extensions' );
    /**
    * Regex , Blocks, name for Phonetic Extensions Supplement
    * @var array
    */

    const Phonetic_Extensions_Supplement  = array( 'regex' => '/[\x{1D80}-\x{1DBF}]/u', 'block1' => 0x1D80, 'block2' => 0x1DBF, 'Unicode_name' => 'Phonetic Extensions Supplement' );
    /**
    * Regex , Blocks, name for Combining Diacritical Marks Supplement
    * @var array
    */

    const Combining_Diacritical_Marks_Supplement  = array( 'regex' => '/[\x{1DC0}-\x{1DFF}]/u', 'block1' => 0x1DC0, 'block2' => 0x1DFF, 'Unicode_name' => 'Combining Diacritical Marks Supplement' );
    /**
    * Regex , Blocks, name for Latin Extended Additional
    * @var array
    */

    const Latin_Extended_Additional  = array( 'regex' => '/[\x{1E00}-\x{1EFF}]/u', 'block1' => 0x1E00, 'block2' => 0x1EFF, 'Unicode_name' => 'Latin Extended Additional' );
    /**
    * Regex , Blocks, name for Greek Extended
    * @var array
    */

    const Greek_Extended  = array( 'regex' => '/[\x{1F00}-\x{1FFF}]/u', 'block1' => 0x1F00, 'block2' => 0x1FFF, 'Unicode_name' => 'Greek Extended' );
    /**
    * Regex , Blocks, name for General Punctuation
    * @var array
    */

    const General_Punctuation  = array( 'regex' => '/[\x{2000}-\x{206F}]/u', 'block1' => 0x2000, 'block2' => 0x206F, 'Unicode_name' => 'General Punctuation' );
    /**
    * Regex , Blocks, name for Superscripts And Subscripts
    * @var array
    */

    const Superscripts_And_Subscripts  = array( 'regex' => '/[\x{2070}-\x{209F}]/u', 'block1' => 0x2070, 'block2' => 0x209F, 'Unicode_name' => 'Superscripts and Subscripts' );
    /**
    * Regex , Blocks, name for Currency Symbols
    * @var array
    */

    const Currency_Symbols  = array( 'regex' => '/[\x{20A0}-\x{20CF}]/u', 'block1' => 0x20A0, 'block2' => 0x20CF, 'Unicode_name' => 'Currency Symbols' );
    /**
    * Regex , Blocks, name for Combining Diacritical Marks For Symbols
    * @var array
    */

    const Combining_Diacritical_Marks_For_Symbols  = array( 'regex' => '/[\x{20D0}-\x{20FF}]/u', 'block1' => 0x20D0, 'block2' => 0x20FF, 'Unicode_name' => 'Combining Diacritical Marks for Symbols' );
    /**
    * Regex , Blocks, name for Letterlike Symbols
    * @var array
    */

    const Letterlike_Symbols  = array( 'regex' => '/[\x{2100}-\x{214F}]/u', 'block1' => 0x2100, 'block2' => 0x214F, 'Unicode_name' => 'Letterlike Symbols' );
    /**
    * Regex , Blocks, name for Number Forms
    * @var array
    */

    const Number_Forms  = array( 'regex' => '/[\x{2150}-\x{218F}]/u', 'block1' => 0x2150, 'block2' => 0x218F, 'Unicode_name' => 'Number Forms' );
    /**
    * Regex , Blocks, name for Arrows
    * @var array
    */

    const Arrows  = array( 'regex' => '/[\x{2190}-\x{21FF}]/u', 'block1' => 0x2190, 'block2' => 0x21FF, 'Unicode_name' => 'Arrows' );
    /**
    * Regex , Blocks, name for Mathematical Operators
    * @var array
    */

    const Mathematical_Operators  = array( 'regex' => '/[\x{2200}-\x{22FF}]/u', 'block1' => 0x2200, 'block2' => 0x22FF, 'Unicode_name' => 'Mathematical Operators' );
    /**
    * Regex , Blocks, name for Miscellaneous Technical
    * @var array
    */

    const Miscellaneous_Technical  = array( 'regex' => '/[\x{2300}-\x{23FF}]/u', 'block1' => 0x2300, 'block2' => 0x23FF, 'Unicode_name' => 'Miscellaneous Technical' );
    /**
    * Regex , Blocks, name for Control Pictures
    * @var array
    */

    const Control_Pictures  = array( 'regex' => '/[\x{2400}-\x{243F}]/u', 'block1' => 0x2400, 'block2' => 0x243F, 'Unicode_name' => 'Control Pictures' );
    /**
    * Regex , Blocks, name for Optical Character Recognition
    * @var array
    */

    const Optical_Character_Recognition  = array( 'regex' => '/[\x{2440}-\x{245F}]/u', 'block1' => 0x2440, 'block2' => 0x245F, 'Unicode_name' => 'Optical Character Recognition' );
    /**
    * Regex , Blocks, name for Enclosed Alphanumerics
    * @var array
    */

    const Enclosed_Alphanumerics  = array( 'regex' => '/[\x{2460}-\x{24FF}]/u', 'block1' => 0x2460, 'block2' => 0x24FF, 'Unicode_name' => 'Enclosed Alphanumerics' );
    /**
    * Regex , Blocks, name for Box Drawing
    * @var array
    */

    const Box_Drawing  = array( 'regex' => '/[\x{2500}-\x{257F}]/u', 'block1' => 0x2500, 'block2' => 0x257F, 'Unicode_name' => 'Box Drawing' );
    /**
    * Regex , Blocks, name for Block Elements
    * @var array
    */

    const Block_Elements  = array( 'regex' => '/[\x{2580}-\x{259F}]/u', 'block1' => 0x2580, 'block2' => 0x259F, 'Unicode_name' => 'Block Elements' );
    /**
    * Regex , Blocks, name for Geometric Shapes
    * @var array
    */

    const Geometric_Shapes  = array( 'regex' => '/[\x{25A0}-\x{25FF}]/u', 'block1' => 0x25A0, 'block2' => 0x25FF, 'Unicode_name' => 'Geometric Shapes' );
    /**
    * Regex , Blocks, name for Miscellaneous Symbols
    * @var array
    */

    const Miscellaneous_Symbols  = array( 'regex' => '/[\x{2600}-\x{26FF}]/u', 'block1' => 0x2600, 'block2' => 0x26FF, 'Unicode_name' => 'Miscellaneous Symbols' );
    /**
    * Regex , Blocks, name for Dingbats
    * @var array
    */

    const Dingbats  = array( 'regex' => '/[\x{2700}-\x{27BF}]/u', 'block1' => 0x2700, 'block2' => 0x27BF, 'Unicode_name' => 'Dingbats' );
    /**
    * Regex , Blocks, name for Miscellaneous Mathematical Symbols-A
    * @var array
    */

    const Miscellaneous_Mathematical_Symbols_A  = array( 'regex' => '/[\x{27C0}-\x{27EF}]/u', 'block1' => 0x27C0, 'block2' => 0x27EF, 'Unicode_name' => 'Miscellaneous Mathematical Symbols-A' );
    /**
    * Regex , Blocks, name for Supplemental Arrows-A
    * @var array
    */

    const Supplemental_Arrows_A  = array( 'regex' => '/[\x{27F0}-\x{27FF}]/u', 'block1' => 0x27F0, 'block2' => 0x27FF, 'Unicode_name' => 'Supplemental Arrows-A' );
    /**
    * Regex , Blocks, name for Braille Patterns
    * @var array
    */

    const Braille_Patterns  = array( 'regex' => '/[\x{2800}-\x{28FF}]/u', 'block1' => 0x2800, 'block2' => 0x28FF, 'Unicode_name' => 'Braille Patterns' );
    /**
    * Regex , Blocks, name for Supplemental Arrows-B
    * @var array
    */

    const Supplemental_Arrows_B  = array( 'regex' => '/[\x{2900}-\x{297F}]/u', 'block1' => 0x2900, 'block2' => 0x297F, 'Unicode_name' => 'Supplemental Arrows-B' );
    /**
    * Regex , Blocks, name for Miscellaneous Mathematical Symbols-B
    * @var array
    */

    const Miscellaneous_Mathematical_Symbols_B  = array( 'regex' => '/[\x{2980}-\x{29FF}]/u', 'block1' => 0x2980, 'block2' => 0x29FF, 'Unicode_name' => 'Miscellaneous Mathematical Symbols-B' );
    /**
    * Regex , Blocks, name for Supplemental Mathematical Operators
    * @var array
    */

    const Supplemental_Mathematical_Operators  = array( 'regex' => '/[\x{2A00}-\x{2AFF}]/u', 'block1' => 0x2A00, 'block2' => 0x2AFF, 'Unicode_name' => 'Supplemental Mathematical Operators' );
    /**
    * Regex , Blocks, name for Miscellaneous Symbols And Arrows
    * @var array
    */

    const Miscellaneous_Symbols_And_Arrows  = array( 'regex' => '/[\x{2B00}-\x{2BFF}]/u', 'block1' => 0x2B00, 'block2' => 0x2BFF, 'Unicode_name' => 'Miscellaneous Symbols and Arrows' );
    /**
    * Regex , Blocks, name for Glagolitic
    * @var array
    */

    const Glagolitic  = array( 'regex' => '/[\x{2C00}-\x{2C5F}]/u', 'block1' => 0x2C00, 'block2' => 0x2C5F, 'Unicode_name' => 'Glagolitic' );
    /**
    * Regex , Blocks, name for Latin Extended-C
    * @var array
    */

    const Latin_Extended_C  = array( 'regex' => '/[\x{2C60}-\x{2C7F}]/u', 'block1' => 0x2C60, 'block2' => 0x2C7F, 'Unicode_name' => 'Latin Extended-C' );
    /**
    * Regex , Blocks, name for Coptic
    * @var array
    */

    const Coptic  = array( 'regex' => '/[\x{2C80}-\x{2CFF}]/u', 'block1' => 0x2C80, 'block2' => 0x2CFF, 'Unicode_name' => 'Coptic' );
    /**
    * Regex , Blocks, name for Georgian Supplement
    * @var array
    */

    const Georgian_Supplement  = array( 'regex' => '/[\x{2D00}-\x{2D2F}]/u', 'block1' => 0x2D00, 'block2' => 0x2D2F, 'Unicode_name' => 'Georgian Supplement' );
    /**
    * Regex , Blocks, name for Tifinagh
    * @var array
    */

    const Tifinagh  = array( 'regex' => '/[\x{2D30}-\x{2D7F}]/u', 'block1' => 0x2D30, 'block2' => 0x2D7F, 'Unicode_name' => 'Tifinagh' );
    /**
    * Regex , Blocks, name for Ethiopic Extended
    * @var array
    */

    const Ethiopic_Extended  = array( 'regex' => '/[\x{2D80}-\x{2DDF}]/u', 'block1' => 0x2D80, 'block2' => 0x2DDF, 'Unicode_name' => 'Ethiopic Extended' );
    /**
    * Regex , Blocks, name for Cyrillic Extended-A
    * @var array
    */

    const Cyrillic_Extended_A  = array( 'regex' => '/[\x{2DE0}-\x{2DFF}]/u', 'block1' => 0x2DE0, 'block2' => 0x2DFF, 'Unicode_name' => 'Cyrillic Extended-A' );
    /**
    * Regex , Blocks, name for Supplemental Punctuation
    * @var array
    */

    const Supplemental_Punctuation  = array( 'regex' => '/[\x{2E00}-\x{2E7F}]/u', 'block1' => 0x2E00, 'block2' => 0x2E7F, 'Unicode_name' => 'Supplemental Punctuation' );
    /**
    * Regex , Blocks, name for CJK Radicals Supplement
    * @var array
    */

    const CJK_Radicals_Supplement  = array( 'regex' => '/[\x{2E80}-\x{2EFF}]/u', 'block1' => 0x2E80, 'block2' => 0x2EFF, 'Unicode_name' => 'CJK Radicals Supplement' );
    /**
    * Regex , Blocks, name for Kangxi Radicals
    * @var array
    */

    const Kangxi_Radicals  = array( 'regex' => '/[\x{2F00}-\x{2FDF}]/u', 'block1' => 0x2F00, 'block2' => 0x2FDF, 'Unicode_name' => 'Kangxi Radicals' );
    /**
    * Regex , Blocks, name for Ideographic Description Characters
    * @var array
    */

    const Ideographic_Description_Characters  = array( 'regex' => '/[\x{2FF0}-\x{2FFF}]/u', 'block1' => 0x2FF0, 'block2' => 0x2FFF, 'Unicode_name' => 'Ideographic Description Characters' );
    /**
    * Regex , Blocks, name for CJK Symbols And Punctuation
    * @var array
    */

    const CJK_Symbols_And_Punctuation  = array( 'regex' => '/[\x{3000}-\x{303F}]/u', 'block1' => 0x3000, 'block2' => 0x303F, 'Unicode_name' => 'CJK Symbols and Punctuation' );
    /**
    * Regex , Blocks, name for Hiragana
    * @var array
    */

    const Hiragana  = array( 'regex' => '/[\x{3040}-\x{309F}]/u', 'block1' => 0x3040, 'block2' => 0x309F, 'Unicode_name' => 'Hiragana' );
    /**
    * Regex , Blocks, name for Katakana
    * @var array
    */

    const Katakana  = array( 'regex' => '/[\x{30A0}-\x{30FF}]/u', 'block1' => 0x30A0, 'block2' => 0x30FF, 'Unicode_name' => 'Katakana' );
    /**
    * Regex , Blocks, name for Bopomofo
    * @var array
    */

    const Bopomofo  = array( 'regex' => '/[\x{3100}-\x{312F}]/u', 'block1' => 0x3100, 'block2' => 0x312F, 'Unicode_name' => 'Bopomofo' );
    /**
    * Regex , Blocks, name for Hangul Compatibility Jamo
    * @var array
    */

    const Hangul_Compatibility_Jamo  = array( 'regex' => '/[\x{3130}-\x{318F}]/u', 'block1' => 0x3130, 'block2' => 0x318F, 'Unicode_name' => 'Hangul Compatibility Jamo' );
    /**
    * Regex , Blocks, name for Kanbun
    * @var array
    */

    const Kanbun  = array( 'regex' => '/[\x{3190}-\x{319F}]/u', 'block1' => 0x3190, 'block2' => 0x319F, 'Unicode_name' => 'Kanbun' );
    /**
    * Regex , Blocks, name for Bopomofo Extended
    * @var array
    */

    const Bopomofo_Extended  = array( 'regex' => '/[\x{31A0}-\x{31BF}]/u', 'block1' => 0x31A0, 'block2' => 0x31BF, 'Unicode_name' => 'Bopomofo Extended' );
    /**
    * Regex , Blocks, name for CJK Strokes
    * @var array
    */

    const CJK_Strokes  = array( 'regex' => '/[\x{31C0}-\x{31EF}]/u', 'block1' => 0x31C0, 'block2' => 0x31EF, 'Unicode_name' => 'CJK Strokes' );
    /**
    * Regex , Blocks, name for Katakana Phonetic Extensions
    * @var array
    */

    const Katakana_Phonetic_Extensions  = array( 'regex' => '/[\x{31F0}-\x{31FF}]/u', 'block1' => 0x31F0, 'block2' => 0x31FF, 'Unicode_name' => 'Katakana Phonetic Extensions' );
    /**
    * Regex , Blocks, name for Enclosed CJK Letters And Months
    * @var array
    */

    const Enclosed_CJK_Letters_And_Months  = array( 'regex' => '/[\x{3200}-\x{32FF}]/u', 'block1' => 0x3200, 'block2' => 0x32FF, 'Unicode_name' => 'Enclosed CJK Letters and Months' );
    /**
    * Regex , Blocks, name for CJK Compatibility
    * @var array
    */

    const CJK_Compatibility  = array( 'regex' => '/[\x{3300}-\x{33FF}]/u', 'block1' => 0x3300, 'block2' => 0x33FF, 'Unicode_name' => 'CJK Compatibility' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs Extension A
    * @var array
    */

    const CJK_Unified_Ideographs_Extension_A  = array( 'regex' => '/[\x{3400}-\x{4DBF}]/u', 'block1' => 0x3400, 'block2' => 0x4DBF, 'Unicode_name' => 'CJK Unified Ideographs Extension A' );
    /**
    * Regex , Blocks, name for Yijing Hexagram Symbols
    * @var array
    */

    const Yijing_Hexagram_Symbols  = array( 'regex' => '/[\x{4DC0}-\x{4DFF}]/u', 'block1' => 0x4DC0, 'block2' => 0x4DFF, 'Unicode_name' => 'Yijing Hexagram Symbols' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs
    * @var array
    */

    const CJK_Unified_Ideographs  = array( 'regex' => '/[\x{4E00}-\x{9FFF}]/u', 'block1' => 0x4E00, 'block2' => 0x9FFF, 'Unicode_name' => 'CJK Unified Ideographs' );
    /**
    * Regex , Blocks, name for Yi Syllables
    * @var array
    */

    const Yi_Syllables  = array( 'regex' => '/[\x{A000}-\x{A48F}]/u', 'block1' => 0xA000, 'block2' => 0xA48F, 'Unicode_name' => 'Yi Syllables' );
    /**
    * Regex , Blocks, name for Yi Radicals
    * @var array
    */

    const Yi_Radicals  = array( 'regex' => '/[\x{A490}-\x{A4CF}]/u', 'block1' => 0xA490, 'block2' => 0xA4CF, 'Unicode_name' => 'Yi Radicals' );
    /**
    * Regex , Blocks, name for Lisu
    * @var array
    */

    const Lisu  = array( 'regex' => '/[\x{A4D0}-\x{A4FF}]/u', 'block1' => 0xA4D0, 'block2' => 0xA4FF, 'Unicode_name' => 'Lisu' );
    /**
    * Regex , Blocks, name for Vai
    * @var array
    */

    const Vai  = array( 'regex' => '/[\x{A500}-\x{A63F}]/u', 'block1' => 0xA500, 'block2' => 0xA63F, 'Unicode_name' => 'Vai' );
    /**
    * Regex , Blocks, name for Cyrillic Extended-B
    * @var array
    */

    const Cyrillic_Extended_B  = array( 'regex' => '/[\x{A640}-\x{A69F}]/u', 'block1' => 0xA640, 'block2' => 0xA69F, 'Unicode_name' => 'Cyrillic Extended-B' );
    /**
    * Regex , Blocks, name for Bamum
    * @var array
    */

    const Bamum  = array( 'regex' => '/[\x{A6A0}-\x{A6FF}]/u', 'block1' => 0xA6A0, 'block2' => 0xA6FF, 'Unicode_name' => 'Bamum' );
    /**
    * Regex , Blocks, name for Modifier Tone Letters
    * @var array
    */

    const Modifier_Tone_Letters  = array( 'regex' => '/[\x{A700}-\x{A71F}]/u', 'block1' => 0xA700, 'block2' => 0xA71F, 'Unicode_name' => 'Modifier Tone Letters' );
    /**
    * Regex , Blocks, name for Latin Extended-D
    * @var array
    */

    const Latin_Extended_D  = array( 'regex' => '/[\x{A720}-\x{A7FF}]/u', 'block1' => 0xA720, 'block2' => 0xA7FF, 'Unicode_name' => 'Latin Extended-D' );
    /**
    * Regex , Blocks, name for Syloti Nagri
    * @var array
    */

    const Syloti_Nagri  = array( 'regex' => '/[\x{A800}-\x{A82F}]/u', 'block1' => 0xA800, 'block2' => 0xA82F, 'Unicode_name' => 'Syloti Nagri' );
    /**
    * Regex , Blocks, name for Common Indic Number Forms
    * @var array
    */

    const Common_Indic_Number_Forms  = array( 'regex' => '/[\x{A830}-\x{A83F}]/u', 'block1' => 0xA830, 'block2' => 0xA83F, 'Unicode_name' => 'Common Indic Number Forms' );
    /**
    * Regex , Blocks, name for Phags-pa
    * @var array
    */

    const Phags_pa  = array( 'regex' => '/[\x{A840}-\x{A87F}]/u', 'block1' => 0xA840, 'block2' => 0xA87F, 'Unicode_name' => 'Phags-pa' );
    /**
    * Regex , Blocks, name for Saurashtra
    * @var array
    */

    const Saurashtra  = array( 'regex' => '/[\x{A880}-\x{A8DF}]/u', 'block1' => 0xA880, 'block2' => 0xA8DF, 'Unicode_name' => 'Saurashtra' );
    /**
    * Regex , Blocks, name for Devanagari Extended
    * @var array
    */

    const Devanagari_Extended  = array( 'regex' => '/[\x{A8E0}-\x{A8FF}]/u', 'block1' => 0xA8E0, 'block2' => 0xA8FF, 'Unicode_name' => 'Devanagari Extended' );
    /**
    * Regex , Blocks, name for Kayah Li
    * @var array
    */

    const Kayah_Li  = array( 'regex' => '/[\x{A900}-\x{A92F}]/u', 'block1' => 0xA900, 'block2' => 0xA92F, 'Unicode_name' => 'Kayah Li' );
    /**
    * Regex , Blocks, name for Rejang
    * @var array
    */

    const Rejang  = array( 'regex' => '/[\x{A930}-\x{A95F}]/u', 'block1' => 0xA930, 'block2' => 0xA95F, 'Unicode_name' => 'Rejang' );
    /**
    * Regex , Blocks, name for Hangul Jamo Extended-A
    * @var array
    */

    const Hangul_Jamo_Extended_A  = array( 'regex' => '/[\x{A960}-\x{A97F}]/u', 'block1' => 0xA960, 'block2' => 0xA97F, 'Unicode_name' => 'Hangul Jamo Extended-A' );
    /**
    * Regex , Blocks, name for Javanese
    * @var array
    */

    const Javanese  = array( 'regex' => '/[\x{A980}-\x{A9DF}]/u', 'block1' => 0xA980, 'block2' => 0xA9DF, 'Unicode_name' => 'Javanese' );
    /**
    * Regex , Blocks, name for Myanmar Extended-B
    * @var array
    */

    const Myanmar_Extended_B  = array( 'regex' => '/[\x{A9E0}-\x{A9FF}]/u', 'block1' => 0xA9E0, 'block2' => 0xA9FF, 'Unicode_name' => 'Myanmar Extended-B' );
    /**
    * Regex , Blocks, name for Cham
    * @var array
    */

    const Cham  = array( 'regex' => '/[\x{AA00}-\x{AA5F}]/u', 'block1' => 0xAA00, 'block2' => 0xAA5F, 'Unicode_name' => 'Cham' );
    /**
    * Regex , Blocks, name for Myanmar Extended-A
    * @var array
    */

    const Myanmar_Extended_A  = array( 'regex' => '/[\x{AA60}-\x{AA7F}]/u', 'block1' => 0xAA60, 'block2' => 0xAA7F, 'Unicode_name' => 'Myanmar Extended-A' );
    /**
    * Regex , Blocks, name for Tai Viet
    * @var array
    */

    const Tai_Viet  = array( 'regex' => '/[\x{AA80}-\x{AADF}]/u', 'block1' => 0xAA80, 'block2' => 0xAADF, 'Unicode_name' => 'Tai Viet' );
    /**
    * Regex , Blocks, name for Meetei Mayek Extensions
    * @var array
    */

    const Meetei_Mayek_Extensions  = array( 'regex' => '/[\x{AAE0}-\x{AAFF}]/u', 'block1' => 0xAAE0, 'block2' => 0xAAFF, 'Unicode_name' => 'Meetei Mayek Extensions' );
    /**
    * Regex , Blocks, name for Ethiopic Extended-A
    * @var array
    */

    const Ethiopic_Extended_A  = array( 'regex' => '/[\x{AB00}-\x{AB2F}]/u', 'block1' => 0xAB00, 'block2' => 0xAB2F, 'Unicode_name' => 'Ethiopic Extended-A' );
    /**
    * Regex , Blocks, name for Latin Extended-E
    * @var array
    */

    const Latin_Extended_E  = array( 'regex' => '/[\x{AB30}-\x{AB6F}]/u', 'block1' => 0xAB30, 'block2' => 0xAB6F, 'Unicode_name' => 'Latin Extended-E' );
    /**
    * Regex , Blocks, name for Cherokee Supplement
    * @var array
    */

    const Cherokee_Supplement  = array( 'regex' => '/[\x{AB70}-\x{ABBF}]/u', 'block1' => 0xAB70, 'block2' => 0xABBF, 'Unicode_name' => 'Cherokee Supplement' );
    /**
    * Regex , Blocks, name for Meetei Mayek
    * @var array
    */

    const Meetei_Mayek  = array( 'regex' => '/[\x{ABC0}-\x{ABFF}]/u', 'block1' => 0xABC0, 'block2' => 0xABFF, 'Unicode_name' => 'Meetei Mayek' );
    /**
    * Regex , Blocks, name for Hangul Syllables
    * @var array
    */

    const Hangul_Syllables  = array( 'regex' => '/[\x{AC00}-\x{D7AF}]/u', 'block1' => 0xAC00, 'block2' => 0xD7AF, 'Unicode_name' => 'Hangul Syllables' );
    /**
    * Regex , Blocks, name for Hangul Jamo Extended-B
    * @var array
    */

    const Hangul_Jamo_Extended_B  = array( 'regex' => '/[\x{D7B0}-\x{D7FF}]/u', 'block1' => 0xD7B0, 'block2' => 0xD7FF, 'Unicode_name' => 'Hangul Jamo Extended-B' );
    /**
    * Regex , Blocks, name for High Surrogates
    * @var array
    */

    const High_Surrogates  = array( 'regex' => '/[\x{D800}-\x{DB7F}]/u', 'block1' => 0xD800, 'block2' => 0xDB7F, 'Unicode_name' => 'High Surrogates' );
    /**
    * Regex , Blocks, name for High Private Use Surrogates
    * @var array
    */

    const High_Private_Use_Surrogates  = array( 'regex' => '/[\x{DB80}-\x{DBFF}]/u', 'block1' => 0xDB80, 'block2' => 0xDBFF, 'Unicode_name' => 'High Private Use Surrogates' );
    /**
    * Regex , Blocks, name for Low Surrogates
    * @var array
    */

    const Low_Surrogates  = array( 'regex' => '/[\x{DC00}-\x{DFFF}]/u', 'block1' => 0xDC00, 'block2' => 0xDFFF, 'Unicode_name' => 'Low Surrogates' );
    /**
    * Regex , Blocks, name for Private Use Area
    * @var array
    */

    const Private_Use_Area  = array( 'regex' => '/[\x{E000}-\x{F8FF}]/u', 'block1' => 0xE000, 'block2' => 0xF8FF, 'Unicode_name' => 'Private Use Area' );
    /**
    * Regex , Blocks, name for CJK Compatibility Ideographs
    * @var array
    */

    const CJK_Compatibility_Ideographs  = array( 'regex' => '/[\x{F900}-\x{FAFF}]/u', 'block1' => 0xF900, 'block2' => 0xFAFF, 'Unicode_name' => 'CJK Compatibility Ideographs' );
    /**
    * Regex , Blocks, name for Alphabetic Presentation Forms
    * @var array
    */

    const Alphabetic_Presentation_Forms  = array( 'regex' => '/[\x{FB00}-\x{FB4F}]/u', 'block1' => 0xFB00, 'block2' => 0xFB4F, 'Unicode_name' => 'Alphabetic Presentation Forms' );
    /**
    * Regex , Blocks, name for Arabic Presentation Forms-A
    * @var array
    */

    const Arabic_Presentation_Forms_A  = array( 'regex' => '/[\x{FB50}-\x{FDFF}]/u', 'block1' => 0xFB50, 'block2' => 0xFDFF, 'Unicode_name' => 'Arabic Presentation Forms-A' );
    /**
    * Regex , Blocks, name for Variation Selectors
    * @var array
    */

    const Variation_Selectors  = array( 'regex' => '/[\x{FE00}-\x{FE0F}]/u', 'block1' => 0xFE00, 'block2' => 0xFE0F, 'Unicode_name' => 'Variation Selectors' );
    /**
    * Regex , Blocks, name for Vertical Forms
    * @var array
    */

    const Vertical_Forms  = array( 'regex' => '/[\x{FE10}-\x{FE1F}]/u', 'block1' => 0xFE10, 'block2' => 0xFE1F, 'Unicode_name' => 'Vertical Forms' );
    /**
    * Regex , Blocks, name for Combining Half Marks
    * @var array
    */

    const Combining_Half_Marks  = array( 'regex' => '/[\x{FE20}-\x{FE2F}]/u', 'block1' => 0xFE20, 'block2' => 0xFE2F, 'Unicode_name' => 'Combining Half Marks' );
    /**
    * Regex , Blocks, name for CJK Compatibility Forms
    * @var array
    */

    const CJK_Compatibility_Forms  = array( 'regex' => '/[\x{FE30}-\x{FE4F}]/u', 'block1' => 0xFE30, 'block2' => 0xFE4F, 'Unicode_name' => 'CJK Compatibility Forms' );
    /**
    * Regex , Blocks, name for Small Form Variants
    * @var array
    */

    const Small_Form_Variants  = array( 'regex' => '/[\x{FE50}-\x{FE6F}]/u', 'block1' => 0xFE50, 'block2' => 0xFE6F, 'Unicode_name' => 'Small Form Variants' );
    /**
    * Regex , Blocks, name for Arabic Presentation Forms-B
    * @var array
    */

    const Arabic_Presentation_Forms_B  = array( 'regex' => '/[\x{FE70}-\x{FEFF}]/u', 'block1' => 0xFE70, 'block2' => 0xFEFF, 'Unicode_name' => 'Arabic Presentation Forms-B' );
    /**
    * Regex , Blocks, name for Halfwidth And Fullwidth Forms
    * @var array
    */

    const Halfwidth_And_Fullwidth_Forms  = array( 'regex' => '/[\x{FF00}-\x{FFEF}]/u', 'block1' => 0xFF00, 'block2' => 0xFFEF, 'Unicode_name' => 'Halfwidth and Fullwidth Forms' );
    /**
    * Regex , Blocks, name for Specials
    * @var array
    */

    const Specials  = array( 'regex' => '/[\x{FFF0}-\x{FFFF}]/u', 'block1' => 0xFFF0, 'block2' => 0xFFFF, 'Unicode_name' => 'Specials' );
    /**
    * Regex , Blocks, name for Linear B Syllabary
    * @var array
    */

    const Linear_B_Syllabary  = array( 'regex' => '/[\x{10000}-\x{1007F}]/u', 'block1' => 0x10000, 'block2' => 0x1007F, 'Unicode_name' => 'Linear B Syllabary' );
    /**
    * Regex , Blocks, name for Linear B Ideograms
    * @var array
    */

    const Linear_B_Ideograms  = array( 'regex' => '/[\x{10080}-\x{100FF}]/u', 'block1' => 0x10080, 'block2' => 0x100FF, 'Unicode_name' => 'Linear B Ideograms' );
    /**
    * Regex , Blocks, name for Aegean Numbers
    * @var array
    */

    const Aegean_Numbers  = array( 'regex' => '/[\x{10100}-\x{1013F}]/u', 'block1' => 0x10100, 'block2' => 0x1013F, 'Unicode_name' => 'Aegean Numbers' );
    /**
    * Regex , Blocks, name for Ancient Greek Numbers
    * @var array
    */

    const Ancient_Greek_Numbers  = array( 'regex' => '/[\x{10140}-\x{1018F}]/u', 'block1' => 0x10140, 'block2' => 0x1018F, 'Unicode_name' => 'Ancient Greek Numbers' );
    /**
    * Regex , Blocks, name for Ancient Symbols
    * @var array
    */

    const Ancient_Symbols  = array( 'regex' => '/[\x{10190}-\x{101CF}]/u', 'block1' => 0x10190, 'block2' => 0x101CF, 'Unicode_name' => 'Ancient Symbols' );
    /**
    * Regex , Blocks, name for Phaistos Disc
    * @var array
    */

    const Phaistos_Disc  = array( 'regex' => '/[\x{101D0}-\x{101FF}]/u', 'block1' => 0x101D0, 'block2' => 0x101FF, 'Unicode_name' => 'Phaistos Disc' );
    /**
    * Regex , Blocks, name for Lycian
    * @var array
    */

    const Lycian  = array( 'regex' => '/[\x{10280}-\x{1029F}]/u', 'block1' => 0x10280, 'block2' => 0x1029F, 'Unicode_name' => 'Lycian' );
    /**
    * Regex , Blocks, name for Carian
    * @var array
    */

    const Carian  = array( 'regex' => '/[\x{102A0}-\x{102DF}]/u', 'block1' => 0x102A0, 'block2' => 0x102DF, 'Unicode_name' => 'Carian' );
    /**
    * Regex , Blocks, name for Coptic Epact Numbers
    * @var array
    */

    const Coptic_Epact_Numbers  = array( 'regex' => '/[\x{102E0}-\x{102FF}]/u', 'block1' => 0x102E0, 'block2' => 0x102FF, 'Unicode_name' => 'Coptic Epact Numbers' );
    /**
    * Regex , Blocks, name for Old Italic
    * @var array
    */

    const Old_Italic  = array( 'regex' => '/[\x{10300}-\x{1032F}]/u', 'block1' => 0x10300, 'block2' => 0x1032F, 'Unicode_name' => 'Old Italic' );
    /**
    * Regex , Blocks, name for Gothic
    * @var array
    */

    const Gothic  = array( 'regex' => '/[\x{10330}-\x{1034F}]/u', 'block1' => 0x10330, 'block2' => 0x1034F, 'Unicode_name' => 'Gothic' );
    /**
    * Regex , Blocks, name for Old Permic
    * @var array
    */

    const Old_Permic  = array( 'regex' => '/[\x{10350}-\x{1037F}]/u', 'block1' => 0x10350, 'block2' => 0x1037F, 'Unicode_name' => 'Old Permic' );
    /**
    * Regex , Blocks, name for Ugaritic
    * @var array
    */

    const Ugaritic  = array( 'regex' => '/[\x{10380}-\x{1039F}]/u', 'block1' => 0x10380, 'block2' => 0x1039F, 'Unicode_name' => 'Ugaritic' );
    /**
    * Regex , Blocks, name for Old Persian
    * @var array
    */

    const Old_Persian  = array( 'regex' => '/[\x{103A0}-\x{103DF}]/u', 'block1' => 0x103A0, 'block2' => 0x103DF, 'Unicode_name' => 'Old Persian' );
    /**
    * Regex , Blocks, name for Deseret
    * @var array
    */

    const Deseret  = array( 'regex' => '/[\x{10400}-\x{1044F}]/u', 'block1' => 0x10400, 'block2' => 0x1044F, 'Unicode_name' => 'Deseret' );
    /**
    * Regex , Blocks, name for Shavian
    * @var array
    */

    const Shavian  = array( 'regex' => '/[\x{10450}-\x{1047F}]/u', 'block1' => 0x10450, 'block2' => 0x1047F, 'Unicode_name' => 'Shavian' );
    /**
    * Regex , Blocks, name for Osmanya
    * @var array
    */

    const Osmanya  = array( 'regex' => '/[\x{10480}-\x{104AF}]/u', 'block1' => 0x10480, 'block2' => 0x104AF, 'Unicode_name' => 'Osmanya' );
    /**
    * Regex , Blocks, name for Osage
    * @var array
    */

    const Osage  = array( 'regex' => '/[\x{104B0}-\x{104FF}]/u', 'block1' => 0x104B0, 'block2' => 0x104FF, 'Unicode_name' => 'Osage' );
    /**
    * Regex , Blocks, name for Elbasan
    * @var array
    */

    const Elbasan  = array( 'regex' => '/[\x{10500}-\x{1052F}]/u', 'block1' => 0x10500, 'block2' => 0x1052F, 'Unicode_name' => 'Elbasan' );
    /**
    * Regex , Blocks, name for Caucasian Albanian
    * @var array
    */

    const Caucasian_Albanian  = array( 'regex' => '/[\x{10530}-\x{1056F}]/u', 'block1' => 0x10530, 'block2' => 0x1056F, 'Unicode_name' => 'Caucasian Albanian' );
    /**
    * Regex , Blocks, name for Linear A
    * @var array
    */

    const Linear_A  = array( 'regex' => '/[\x{10600}-\x{1077F}]/u', 'block1' => 0x10600, 'block2' => 0x1077F, 'Unicode_name' => 'Linear A' );
    /**
    * Regex , Blocks, name for Cypriot Syllabary
    * @var array
    */

    const Cypriot_Syllabary  = array( 'regex' => '/[\x{10800}-\x{1083F}]/u', 'block1' => 0x10800, 'block2' => 0x1083F, 'Unicode_name' => 'Cypriot Syllabary' );
    /**
    * Regex , Blocks, name for Imperial Aramaic
    * @var array
    */

    const Imperial_Aramaic  = array( 'regex' => '/[\x{10840}-\x{1085F}]/u', 'block1' => 0x10840, 'block2' => 0x1085F, 'Unicode_name' => 'Imperial Aramaic' );
    /**
    * Regex , Blocks, name for Palmyrene
    * @var array
    */

    const Palmyrene  = array( 'regex' => '/[\x{10860}-\x{1087F}]/u', 'block1' => 0x10860, 'block2' => 0x1087F, 'Unicode_name' => 'Palmyrene' );
    /**
    * Regex , Blocks, name for Nabataean
    * @var array
    */

    const Nabataean  = array( 'regex' => '/[\x{10880}-\x{108AF}]/u', 'block1' => 0x10880, 'block2' => 0x108AF, 'Unicode_name' => 'Nabataean' );
    /**
    * Regex , Blocks, name for Hatran
    * @var array
    */

    const Hatran  = array( 'regex' => '/[\x{108E0}-\x{108FF}]/u', 'block1' => 0x108E0, 'block2' => 0x108FF, 'Unicode_name' => 'Hatran' );
    /**
    * Regex , Blocks, name for Phoenician
    * @var array
    */

    const Phoenician  = array( 'regex' => '/[\x{10900}-\x{1091F}]/u', 'block1' => 0x10900, 'block2' => 0x1091F, 'Unicode_name' => 'Phoenician' );
    /**
    * Regex , Blocks, name for Lydian
    * @var array
    */

    const Lydian  = array( 'regex' => '/[\x{10920}-\x{1093F}]/u', 'block1' => 0x10920, 'block2' => 0x1093F, 'Unicode_name' => 'Lydian' );
    /**
    * Regex , Blocks, name for Meroitic Hieroglyphs
    * @var array
    */

    const Meroitic_Hieroglyphs  = array( 'regex' => '/[\x{10980}-\x{1099F}]/u', 'block1' => 0x10980, 'block2' => 0x1099F, 'Unicode_name' => 'Meroitic Hieroglyphs' );
    /**
    * Regex , Blocks, name for Meroitic Cursive
    * @var array
    */

    const Meroitic_Cursive  = array( 'regex' => '/[\x{109A0}-\x{109FF}]/u', 'block1' => 0x109A0, 'block2' => 0x109FF, 'Unicode_name' => 'Meroitic Cursive' );
    /**
    * Regex , Blocks, name for Kharoshthi
    * @var array
    */

    const Kharoshthi  = array( 'regex' => '/[\x{10A00}-\x{10A5F}]/u', 'block1' => 0x10A00, 'block2' => 0x10A5F, 'Unicode_name' => 'Kharoshthi' );
    /**
    * Regex , Blocks, name for Old South Arabian
    * @var array
    */

    const Old_South_Arabian  = array( 'regex' => '/[\x{10A60}-\x{10A7F}]/u', 'block1' => 0x10A60, 'block2' => 0x10A7F, 'Unicode_name' => 'Old South Arabian' );
    /**
    * Regex , Blocks, name for Old North Arabian
    * @var array
    */

    const Old_North_Arabian  = array( 'regex' => '/[\x{10A80}-\x{10A9F}]/u', 'block1' => 0x10A80, 'block2' => 0x10A9F, 'Unicode_name' => 'Old North Arabian' );
    /**
    * Regex , Blocks, name for Manichaean
    * @var array
    */

    const Manichaean  = array( 'regex' => '/[\x{10AC0}-\x{10AFF}]/u', 'block1' => 0x10AC0, 'block2' => 0x10AFF, 'Unicode_name' => 'Manichaean' );
    /**
    * Regex , Blocks, name for Avestan
    * @var array
    */

    const Avestan  = array( 'regex' => '/[\x{10B00}-\x{10B3F}]/u', 'block1' => 0x10B00, 'block2' => 0x10B3F, 'Unicode_name' => 'Avestan' );
    /**
    * Regex , Blocks, name for Inscriptional Parthian
    * @var array
    */

    const Inscriptional_Parthian  = array( 'regex' => '/[\x{10B40}-\x{10B5F}]/u', 'block1' => 0x10B40, 'block2' => 0x10B5F, 'Unicode_name' => 'Inscriptional Parthian' );
    /**
    * Regex , Blocks, name for Inscriptional Pahlavi
    * @var array
    */

    const Inscriptional_Pahlavi  = array( 'regex' => '/[\x{10B60}-\x{10B7F}]/u', 'block1' => 0x10B60, 'block2' => 0x10B7F, 'Unicode_name' => 'Inscriptional Pahlavi' );
    /**
    * Regex , Blocks, name for Psalter Pahlavi
    * @var array
    */

    const Psalter_Pahlavi  = array( 'regex' => '/[\x{10B80}-\x{10BAF}]/u', 'block1' => 0x10B80, 'block2' => 0x10BAF, 'Unicode_name' => 'Psalter Pahlavi' );
    /**
    * Regex , Blocks, name for Old Turkic
    * @var array
    */

    const Old_Turkic  = array( 'regex' => '/[\x{10C00}-\x{10C4F}]/u', 'block1' => 0x10C00, 'block2' => 0x10C4F, 'Unicode_name' => 'Old Turkic' );
    /**
    * Regex , Blocks, name for Old Hungarian
    * @var array
    */

    const Old_Hungarian  = array( 'regex' => '/[\x{10C80}-\x{10CFF}]/u', 'block1' => 0x10C80, 'block2' => 0x10CFF, 'Unicode_name' => 'Old Hungarian' );
    /**
    * Regex , Blocks, name for Rumi Numeral Symbols
    * @var array
    */

    const Rumi_Numeral_Symbols  = array( 'regex' => '/[\x{10E60}-\x{10E7F}]/u', 'block1' => 0x10E60, 'block2' => 0x10E7F, 'Unicode_name' => 'Rumi Numeral Symbols' );
    /**
    * Regex , Blocks, name for Brahmi
    * @var array
    */

    const Brahmi  = array( 'regex' => '/[\x{11000}-\x{1107F}]/u', 'block1' => 0x11000, 'block2' => 0x1107F, 'Unicode_name' => 'Brahmi' );
    /**
    * Regex , Blocks, name for Kaithi
    * @var array
    */

    const Kaithi  = array( 'regex' => '/[\x{11080}-\x{110CF}]/u', 'block1' => 0x11080, 'block2' => 0x110CF, 'Unicode_name' => 'Kaithi' );
    /**
    * Regex , Blocks, name for Sora Sompeng
    * @var array
    */

    const Sora_Sompeng  = array( 'regex' => '/[\x{110D0}-\x{110FF}]/u', 'block1' => 0x110D0, 'block2' => 0x110FF, 'Unicode_name' => 'Sora Sompeng' );
    /**
    * Regex , Blocks, name for Chakma
    * @var array
    */

    const Chakma  = array( 'regex' => '/[\x{11100}-\x{1114F}]/u', 'block1' => 0x11100, 'block2' => 0x1114F, 'Unicode_name' => 'Chakma' );
    /**
    * Regex , Blocks, name for Mahajani
    * @var array
    */

    const Mahajani  = array( 'regex' => '/[\x{11150}-\x{1117F}]/u', 'block1' => 0x11150, 'block2' => 0x1117F, 'Unicode_name' => 'Mahajani' );
    /**
    * Regex , Blocks, name for Sharada
    * @var array
    */

    const Sharada  = array( 'regex' => '/[\x{11180}-\x{111DF}]/u', 'block1' => 0x11180, 'block2' => 0x111DF, 'Unicode_name' => 'Sharada' );
    /**
    * Regex , Blocks, name for Sinhala Archaic Numbers
    * @var array
    */

    const Sinhala_Archaic_Numbers  = array( 'regex' => '/[\x{111E0}-\x{111FF}]/u', 'block1' => 0x111E0, 'block2' => 0x111FF, 'Unicode_name' => 'Sinhala Archaic Numbers' );
    /**
    * Regex , Blocks, name for Khojki
    * @var array
    */

    const Khojki  = array( 'regex' => '/[\x{11200}-\x{1124F}]/u', 'block1' => 0x11200, 'block2' => 0x1124F, 'Unicode_name' => 'Khojki' );
    /**
    * Regex , Blocks, name for Multani
    * @var array
    */

    const Multani  = array( 'regex' => '/[\x{11280}-\x{112AF}]/u', 'block1' => 0x11280, 'block2' => 0x112AF, 'Unicode_name' => 'Multani' );
    /**
    * Regex , Blocks, name for Khudawadi
    * @var array
    */

    const Khudawadi  = array( 'regex' => '/[\x{112B0}-\x{112FF}]/u', 'block1' => 0x112B0, 'block2' => 0x112FF, 'Unicode_name' => 'Khudawadi' );
    /**
    * Regex , Blocks, name for Grantha
    * @var array
    */

    const Grantha  = array( 'regex' => '/[\x{11300}-\x{1137F}]/u', 'block1' => 0x11300, 'block2' => 0x1137F, 'Unicode_name' => 'Grantha' );
    /**
    * Regex , Blocks, name for Newa
    * @var array
    */

    const Newa  = array( 'regex' => '/[\x{11400}-\x{1147F}]/u', 'block1' => 0x11400, 'block2' => 0x1147F, 'Unicode_name' => 'Newa' );
    /**
    * Regex , Blocks, name for Tirhuta
    * @var array
    */

    const Tirhuta  = array( 'regex' => '/[\x{11480}-\x{114DF}]/u', 'block1' => 0x11480, 'block2' => 0x114DF, 'Unicode_name' => 'Tirhuta' );
    /**
    * Regex , Blocks, name for Siddham
    * @var array
    */

    const Siddham  = array( 'regex' => '/[\x{11580}-\x{115FF}]/u', 'block1' => 0x11580, 'block2' => 0x115FF, 'Unicode_name' => 'Siddham' );
    /**
    * Regex , Blocks, name for Modi
    * @var array
    */

    const Modi  = array( 'regex' => '/[\x{11600}-\x{1165F}]/u', 'block1' => 0x11600, 'block2' => 0x1165F, 'Unicode_name' => 'Modi' );
    /**
    * Regex , Blocks, name for Mongolian Supplement
    * @var array
    */

    const Mongolian_Supplement  = array( 'regex' => '/[\x{11660}-\x{1167F}]/u', 'block1' => 0x11660, 'block2' => 0x1167F, 'Unicode_name' => 'Mongolian Supplement' );
    /**
    * Regex , Blocks, name for Takri
    * @var array
    */

    const Takri  = array( 'regex' => '/[\x{11680}-\x{116CF}]/u', 'block1' => 0x11680, 'block2' => 0x116CF, 'Unicode_name' => 'Takri' );
    /**
    * Regex , Blocks, name for Ahom
    * @var array
    */

    const Ahom  = array( 'regex' => '/[\x{11700}-\x{1173F}]/u', 'block1' => 0x11700, 'block2' => 0x1173F, 'Unicode_name' => 'Ahom' );
    /**
    * Regex , Blocks, name for Warang Citi
    * @var array
    */

    const Warang_Citi  = array( 'regex' => '/[\x{118A0}-\x{118FF}]/u', 'block1' => 0x118A0, 'block2' => 0x118FF, 'Unicode_name' => 'Warang Citi' );
    /**
    * Regex , Blocks, name for Zanabazar Square
    * @var array
    */

    const Zanabazar_Square  = array( 'regex' => '/[\x{11A00}-\x{11A4F}]/u', 'block1' => 0x11A00, 'block2' => 0x11A4F, 'Unicode_name' => 'Zanabazar Square' );
    /**
    * Regex , Blocks, name for Soyombo
    * @var array
    */

    const Soyombo  = array( 'regex' => '/[\x{11A50}-\x{11AAF}]/u', 'block1' => 0x11A50, 'block2' => 0x11AAF, 'Unicode_name' => 'Soyombo' );
    /**
    * Regex , Blocks, name for Pau Cin Hau
    * @var array
    */

    const Pau_Cin_Hau  = array( 'regex' => '/[\x{11AC0}-\x{11AFF}]/u', 'block1' => 0x11AC0, 'block2' => 0x11AFF, 'Unicode_name' => 'Pau Cin Hau' );
    /**
    * Regex , Blocks, name for Bhaiksuki
    * @var array
    */

    const Bhaiksuki  = array( 'regex' => '/[\x{11C00}-\x{11C6F}]/u', 'block1' => 0x11C00, 'block2' => 0x11C6F, 'Unicode_name' => 'Bhaiksuki' );
    /**
    * Regex , Blocks, name for Marchen
    * @var array
    */

    const Marchen  = array( 'regex' => '/[\x{11C70}-\x{11CBF}]/u', 'block1' => 0x11C70, 'block2' => 0x11CBF, 'Unicode_name' => 'Marchen' );
    /**
    * Regex , Blocks, name for Masaram Gondi
    * @var array
    */

    const Masaram_Gondi  = array( 'regex' => '/[\x{11D00}-\x{11D5F}]/u', 'block1' => 0x11D00, 'block2' => 0x11D5F, 'Unicode_name' => 'Masaram Gondi' );
    /**
    * Regex , Blocks, name for Cuneiform
    * @var array
    */

    const Cuneiform  = array( 'regex' => '/[\x{12000}-\x{123FF}]/u', 'block1' => 0x12000, 'block2' => 0x123FF, 'Unicode_name' => 'Cuneiform' );
    /**
    * Regex , Blocks, name for Cuneiform Numbers And Punctuation
    * @var array
    */

    const Cuneiform_Numbers_And_Punctuation  = array( 'regex' => '/[\x{12400}-\x{1247F}]/u', 'block1' => 0x12400, 'block2' => 0x1247F, 'Unicode_name' => 'Cuneiform Numbers and Punctuation' );
    /**
    * Regex , Blocks, name for Early Dynastic Cuneiform
    * @var array
    */

    const Early_Dynastic_Cuneiform  = array( 'regex' => '/[\x{12480}-\x{1254F}]/u', 'block1' => 0x12480, 'block2' => 0x1254F, 'Unicode_name' => 'Early Dynastic Cuneiform' );
    /**
    * Regex , Blocks, name for Egyptian Hieroglyphs
    * @var array
    */

    const Egyptian_Hieroglyphs  = array( 'regex' => '/[\x{13000}-\x{1342F}]/u', 'block1' => 0x13000, 'block2' => 0x1342F, 'Unicode_name' => 'Egyptian Hieroglyphs' );
    /**
    * Regex , Blocks, name for Anatolian Hieroglyphs
    * @var array
    */

    const Anatolian_Hieroglyphs  = array( 'regex' => '/[\x{14400}-\x{1467F}]/u', 'block1' => 0x14400, 'block2' => 0x1467F, 'Unicode_name' => 'Anatolian Hieroglyphs' );
    /**
    * Regex , Blocks, name for Bamum Supplement
    * @var array
    */

    const Bamum_Supplement  = array( 'regex' => '/[\x{16800}-\x{16A3F}]/u', 'block1' => 0x16800, 'block2' => 0x16A3F, 'Unicode_name' => 'Bamum Supplement' );
    /**
    * Regex , Blocks, name for Mro
    * @var array
    */

    const Mro  = array( 'regex' => '/[\x{16A40}-\x{16A6F}]/u', 'block1' => 0x16A40, 'block2' => 0x16A6F, 'Unicode_name' => 'Mro' );
    /**
    * Regex , Blocks, name for Bassa Vah
    * @var array
    */

    const Bassa_Vah  = array( 'regex' => '/[\x{16AD0}-\x{16AFF}]/u', 'block1' => 0x16AD0, 'block2' => 0x16AFF, 'Unicode_name' => 'Bassa Vah' );
    /**
    * Regex , Blocks, name for Pahawh Hmong
    * @var array
    */

    const Pahawh_Hmong  = array( 'regex' => '/[\x{16B00}-\x{16B8F}]/u', 'block1' => 0x16B00, 'block2' => 0x16B8F, 'Unicode_name' => 'Pahawh Hmong' );
    /**
    * Regex , Blocks, name for Miao
    * @var array
    */

    const Miao  = array( 'regex' => '/[\x{16F00}-\x{16F9F}]/u', 'block1' => 0x16F00, 'block2' => 0x16F9F, 'Unicode_name' => 'Miao' );
    /**
    * Regex , Blocks, name for Ideographic Symbols And Punctuation
    * @var array
    */

    const Ideographic_Symbols_And_Punctuation  = array( 'regex' => '/[\x{16FE0}-\x{16FFF}]/u', 'block1' => 0x16FE0, 'block2' => 0x16FFF, 'Unicode_name' => 'Ideographic Symbols and Punctuation' );
    /**
    * Regex , Blocks, name for Tangut
    * @var array
    */

    const Tangut  = array( 'regex' => '/[\x{17000}-\x{187FF}]/u', 'block1' => 0x17000, 'block2' => 0x187FF, 'Unicode_name' => 'Tangut' );
    /**
    * Regex , Blocks, name for Tangut Components
    * @var array
    */

    const Tangut_Components  = array( 'regex' => '/[\x{18800}-\x{18AFF}]/u', 'block1' => 0x18800, 'block2' => 0x18AFF, 'Unicode_name' => 'Tangut Components' );
    /**
    * Regex , Blocks, name for Kana Supplement
    * @var array
    */

    const Kana_Supplement  = array( 'regex' => '/[\x{1B000}-\x{1B0FF}]/u', 'block1' => 0x1B000, 'block2' => 0x1B0FF, 'Unicode_name' => 'Kana Supplement' );
    /**
    * Regex , Blocks, name for Kana Extended-A
    * @var array
    */

    const Kana_Extended_A  = array( 'regex' => '/[\x{1B100}-\x{1B12F}]/u', 'block1' => 0x1B100, 'block2' => 0x1B12F, 'Unicode_name' => 'Kana Extended-A' );
    /**
    * Regex , Blocks, name for Nushu
    * @var array
    */

    const Nushu  = array( 'regex' => '/[\x{1B170}-\x{1B2FF}]/u', 'block1' => 0x1B170, 'block2' => 0x1B2FF, 'Unicode_name' => 'Nushu' );
    /**
    * Regex , Blocks, name for Duployan
    * @var array
    */

    const Duployan  = array( 'regex' => '/[\x{1BC00}-\x{1BC9F}]/u', 'block1' => 0x1BC00, 'block2' => 0x1BC9F, 'Unicode_name' => 'Duployan' );
    /**
    * Regex , Blocks, name for Shorthand Format Controls
    * @var array
    */

    const Shorthand_Format_Controls  = array( 'regex' => '/[\x{1BCA0}-\x{1BCAF}]/u', 'block1' => 0x1BCA0, 'block2' => 0x1BCAF, 'Unicode_name' => 'Shorthand Format Controls' );
    /**
    * Regex , Blocks, name for Byzantine Musical Symbols
    * @var array
    */

    const Byzantine_Musical_Symbols  = array( 'regex' => '/[\x{1D000}-\x{1D0FF}]/u', 'block1' => 0x1D000, 'block2' => 0x1D0FF, 'Unicode_name' => 'Byzantine Musical Symbols' );
    /**
    * Regex , Blocks, name for Musical Symbols
    * @var array
    */

    const Musical_Symbols  = array( 'regex' => '/[\x{1D100}-\x{1D1FF}]/u', 'block1' => 0x1D100, 'block2' => 0x1D1FF, 'Unicode_name' => 'Musical Symbols' );
    /**
    * Regex , Blocks, name for Ancient Greek Musical Notation
    * @var array
    */

    const Ancient_Greek_Musical_Notation  = array( 'regex' => '/[\x{1D200}-\x{1D24F}]/u', 'block1' => 0x1D200, 'block2' => 0x1D24F, 'Unicode_name' => 'Ancient Greek Musical Notation' );
    /**
    * Regex , Blocks, name for Tai Xuan Jing Symbols
    * @var array
    */

    const Tai_Xuan_Jing_Symbols  = array( 'regex' => '/[\x{1D300}-\x{1D35F}]/u', 'block1' => 0x1D300, 'block2' => 0x1D35F, 'Unicode_name' => 'Tai Xuan Jing Symbols' );
    /**
    * Regex , Blocks, name for Counting Rod Numerals
    * @var array
    */

    const Counting_Rod_Numerals  = array( 'regex' => '/[\x{1D360}-\x{1D37F}]/u', 'block1' => 0x1D360, 'block2' => 0x1D37F, 'Unicode_name' => 'Counting Rod Numerals' );
    /**
    * Regex , Blocks, name for Mathematical Alphanumeric Symbols
    * @var array
    */

    const Mathematical_Alphanumeric_Symbols  = array( 'regex' => '/[\x{1D400}-\x{1D7FF}]/u', 'block1' => 0x1D400, 'block2' => 0x1D7FF, 'Unicode_name' => 'Mathematical Alphanumeric Symbols' );
    /**
    * Regex , Blocks, name for Sutton SignWriting
    * @var array
    */

    const Sutton_SignWriting  = array( 'regex' => '/[\x{1D800}-\x{1DAAF}]/u', 'block1' => 0x1D800, 'block2' => 0x1DAAF, 'Unicode_name' => 'Sutton SignWriting' );
    /**
    * Regex , Blocks, name for Glagolitic Supplement
    * @var array
    */

    const Glagolitic_Supplement  = array( 'regex' => '/[\x{1E000}-\x{1E02F}]/u', 'block1' => 0x1E000, 'block2' => 0x1E02F, 'Unicode_name' => 'Glagolitic Supplement' );
    /**
    * Regex , Blocks, name for Mende Kikakui
    * @var array
    */

    const Mende_Kikakui  = array( 'regex' => '/[\x{1E800}-\x{1E8DF}]/u', 'block1' => 0x1E800, 'block2' => 0x1E8DF, 'Unicode_name' => 'Mende Kikakui' );
    /**
    * Regex , Blocks, name for Adlam
    * @var array
    */

    const Adlam  = array( 'regex' => '/[\x{1E900}-\x{1E95F}]/u', 'block1' => 0x1E900, 'block2' => 0x1E95F, 'Unicode_name' => 'Adlam' );
    /**
    * Regex , Blocks, name for Arabic Mathematical Alphabetic Symbols
    * @var array
    */

    const Arabic_Mathematical_Alphabetic_Symbols  = array( 'regex' => '/[\x{1EE00}-\x{1EEFF}]/u', 'block1' => 0x1EE00, 'block2' => 0x1EEFF, 'Unicode_name' => 'Arabic Mathematical Alphabetic Symbols' );
    /**
    * Regex , Blocks, name for Mahjong Tiles
    * @var array
    */

    const Mahjong_Tiles  = array( 'regex' => '/[\x{1F000}-\x{1F02F}]/u', 'block1' => 0x1F000, 'block2' => 0x1F02F, 'Unicode_name' => 'Mahjong Tiles' );
    /**
    * Regex , Blocks, name for Domino Tiles
    * @var array
    */

    const Domino_Tiles  = array( 'regex' => '/[\x{1F030}-\x{1F09F}]/u', 'block1' => 0x1F030, 'block2' => 0x1F09F, 'Unicode_name' => 'Domino Tiles' );
    /**
    * Regex , Blocks, name for Playing Cards
    * @var array
    */

    const Playing_Cards  = array( 'regex' => '/[\x{1F0A0}-\x{1F0FF}]/u', 'block1' => 0x1F0A0, 'block2' => 0x1F0FF, 'Unicode_name' => 'Playing Cards' );
    /**
    * Regex , Blocks, name for Enclosed Alphanumeric Supplement
    * @var array
    */

    const Enclosed_Alphanumeric_Supplement  = array( 'regex' => '/[\x{1F100}-\x{1F1FF}]/u', 'block1' => 0x1F100, 'block2' => 0x1F1FF, 'Unicode_name' => 'Enclosed Alphanumeric Supplement' );
    /**
    * Regex , Blocks, name for Enclosed Ideographic Supplement
    * @var array
    */

    const Enclosed_Ideographic_Supplement  = array( 'regex' => '/[\x{1F200}-\x{1F2FF}]/u', 'block1' => 0x1F200, 'block2' => 0x1F2FF, 'Unicode_name' => 'Enclosed Ideographic Supplement' );
    /**
    * Regex , Blocks, name for Miscellaneous Symbols And Pictographs
    * @var array
    */

    const Miscellaneous_Symbols_And_Pictographs  = array( 'regex' => '/[\x{1F300}-\x{1F5FF}]/u', 'block1' => 0x1F300, 'block2' => 0x1F5FF, 'Unicode_name' => 'Miscellaneous Symbols and Pictographs' );
    /**
    * Regex , Blocks, name for Emoticons
    * @var array
    */

    const Emoticons  = array( 'regex' => '/[\x{1F600}-\x{1F64F}]/u', 'block1' => 0x1F600, 'block2' => 0x1F64F, 'Unicode_name' => 'Emoticons' );
    /**
    * Regex , Blocks, name for Ornamental Dingbats
    * @var array
    */

    const Ornamental_Dingbats  = array( 'regex' => '/[\x{1F650}-\x{1F67F}]/u', 'block1' => 0x1F650, 'block2' => 0x1F67F, 'Unicode_name' => 'Ornamental Dingbats' );
    /**
    * Regex , Blocks, name for Transport And Map Symbols
    * @var array
    */

    const Transport_And_Map_Symbols  = array( 'regex' => '/[\x{1F680}-\x{1F6FF}]/u', 'block1' => 0x1F680, 'block2' => 0x1F6FF, 'Unicode_name' => 'Transport and Map Symbols' );
    /**
    * Regex , Blocks, name for Alchemical Symbols
    * @var array
    */

    const Alchemical_Symbols  = array( 'regex' => '/[\x{1F700}-\x{1F77F}]/u', 'block1' => 0x1F700, 'block2' => 0x1F77F, 'Unicode_name' => 'Alchemical Symbols' );
    /**
    * Regex , Blocks, name for Geometric Shapes Extended
    * @var array
    */

    const Geometric_Shapes_Extended  = array( 'regex' => '/[\x{1F780}-\x{1F7FF}]/u', 'block1' => 0x1F780, 'block2' => 0x1F7FF, 'Unicode_name' => 'Geometric Shapes Extended' );
    /**
    * Regex , Blocks, name for Supplemental Arrows-C
    * @var array
    */

    const Supplemental_Arrows_C  = array( 'regex' => '/[\x{1F800}-\x{1F8FF}]/u', 'block1' => 0x1F800, 'block2' => 0x1F8FF, 'Unicode_name' => 'Supplemental Arrows-C' );
    /**
    * Regex , Blocks, name for Supplemental Symbols And Pictographs
    * @var array
    */

    const Supplemental_Symbols_And_Pictographs  = array( 'regex' => '/[\x{1F900}-\x{1F9FF}]/u', 'block1' => 0x1F900, 'block2' => 0x1F9FF, 'Unicode_name' => 'Supplemental Symbols and Pictographs' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs Extension B
    * @var array
    */

    const CJK_Unified_Ideographs_Extension_B  = array( 'regex' => '/[\x{20000}-\x{2A6DF}]/u', 'block1' => 0x20000, 'block2' => 0x2A6DF, 'Unicode_name' => 'CJK Unified Ideographs Extension B' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs Extension C
    * @var array
    */

    const CJK_Unified_Ideographs_Extension_C  = array( 'regex' => '/[\x{2A700}-\x{2B73F}]/u', 'block1' => 0x2A700, 'block2' => 0x2B73F, 'Unicode_name' => 'CJK Unified Ideographs Extension C' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs Extension D
    * @var array
    */

    const CJK_Unified_Ideographs_Extension_D  = array( 'regex' => '/[\x{2B740}-\x{2B81F}]/u', 'block1' => 0x2B740, 'block2' => 0x2B81F, 'Unicode_name' => 'CJK Unified Ideographs Extension D' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs Extension E
    * @var array
    */

    const CJK_Unified_Ideographs_Extension_E  = array( 'regex' => '/[\x{2B820}-\x{2CEAF}]/u', 'block1' => 0x2B820, 'block2' => 0x2CEAF, 'Unicode_name' => 'CJK Unified Ideographs Extension E' );
    /**
    * Regex , Blocks, name for CJK Unified Ideographs Extension F
    * @var array
    */

    const CJK_Unified_Ideographs_Extension_F  = array( 'regex' => '/[\x{2CEB0}-\x{2EBEF}]/u', 'block1' => 0x2CEB0, 'block2' => 0x2EBEF, 'Unicode_name' => 'CJK Unified Ideographs Extension F' );
    /**
    * Regex , Blocks, name for CJK Compatibility Ideographs Supplement
    * @var array
    */

    const CJK_Compatibility_Ideographs_Supplement  = array( 'regex' => '/[\x{2F800}-\x{2FA1F}]/u', 'block1' => 0x2F800, 'block2' => 0x2FA1F, 'Unicode_name' => 'CJK Compatibility Ideographs Supplement' );
    /**
    * Regex , Blocks, name for Tags
    * @var array
    */

    const Tags  = array( 'regex' => '/[\x{E0000}-\x{E007F}]/u', 'block1' => 0xE0000, 'block2' => 0xE007F, 'Unicode_name' => 'Tags' );
    /**
    * Regex , Blocks, name for Variation Selectors Supplement
    * @var array
    */

    const Variation_Selectors_Supplement  = array( 'regex' => '/[\x{E0100}-\x{E01EF}]/u', 'block1' => 0xE0100, 'block2' => 0xE01EF, 'Unicode_name' => 'Variation Selectors Supplement' );
    /**
    * Regex , Blocks, name for Supplementary Private Use Area-A
    * @var array
    */

    const Supplementary_Private_Use_Area_A  = array( 'regex' => '/[\x{F0000}-\x{FFFFF}]/u', 'block1' => 0xF0000, 'block2' => 0xFFFFF, 'Unicode_name' => 'Supplementary Private Use Area-A' );
    /**
    * Regex , Blocks, name for Supplementary Private Use Area-B
    * @var array
    */

    const Supplementary_Private_Use_Area_B  = array( 'regex' => '/[\x{100000}-\x{10FFFF}]/u', 'block1' => 0x100000, 'block2' => 0x10FFFF, 'Unicode_name' => 'Supplementary Private Use Area-B' );




    /**
    * Check Basic Latin
    * @param string
    * @return array
    */
    public static function Basic_Latin(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Basic_Latin['regex'], $string) > 0),
            'block1'=> self::Basic_Latin['block1'],
            'block2'=> self::Basic_Latin['block2'],
            'Unicode_name'=>self::Basic_Latin['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Basic_Latin['block1'], self::Basic_Latin['block2'])
            ),
        );
    }


    /**
    * Check Latin-1 Supplement
    * @param string
    * @return array
    */
    public static function Latin_1_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_1_Supplement['regex'], $string) > 0),
            'block1'=> self::Latin_1_Supplement['block1'],
            'block2'=> self::Latin_1_Supplement['block2'],
            'Unicode_name'=>self::Latin_1_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_1_Supplement['block1'], self::Latin_1_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Latin Extended-A
    * @param string
    * @return array
    */
    public static function Latin_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_Extended_A['regex'], $string) > 0),
            'block1'=> self::Latin_Extended_A['block1'],
            'block2'=> self::Latin_Extended_A['block2'],
            'Unicode_name'=>self::Latin_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_Extended_A['block1'], self::Latin_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Latin Extended-B
    * @param string
    * @return array
    */
    public static function Latin_Extended_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_Extended_B['regex'], $string) > 0),
            'block1'=> self::Latin_Extended_B['block1'],
            'block2'=> self::Latin_Extended_B['block2'],
            'Unicode_name'=>self::Latin_Extended_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_Extended_B['block1'], self::Latin_Extended_B['block2'])
            ),
        );
    }


    /**
    * Check IPA Extensions
    * @param string
    * @return array
    */
    public static function IPA_Extensions(string $string): array
    {
        return array(
            'is'        => (preg_match(self::IPA_Extensions['regex'], $string) > 0),
            'block1'=> self::IPA_Extensions['block1'],
            'block2'=> self::IPA_Extensions['block2'],
            'Unicode_name'=>self::IPA_Extensions['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::IPA_Extensions['block1'], self::IPA_Extensions['block2'])
            ),
        );
    }


    /**
    * Check Spacing Modifier Letters
    * @param string
    * @return array
    */
    public static function Spacing_Modifier_Letters(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Spacing_Modifier_Letters['regex'], $string) > 0),
            'block1'=> self::Spacing_Modifier_Letters['block1'],
            'block2'=> self::Spacing_Modifier_Letters['block2'],
            'Unicode_name'=>self::Spacing_Modifier_Letters['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Spacing_Modifier_Letters['block1'], self::Spacing_Modifier_Letters['block2'])
            ),
        );
    }


    /**
    * Check Combining Diacritical Marks
    * @param string
    * @return array
    */
    public static function Combining_Diacritical_Marks(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Combining_Diacritical_Marks['regex'], $string) > 0),
            'block1'=> self::Combining_Diacritical_Marks['block1'],
            'block2'=> self::Combining_Diacritical_Marks['block2'],
            'Unicode_name'=>self::Combining_Diacritical_Marks['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Combining_Diacritical_Marks['block1'], self::Combining_Diacritical_Marks['block2'])
            ),
        );
    }


    /**
    * Check Greek And Coptic
    * @param string
    * @return array
    */
    public static function Greek_And_Coptic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Greek_And_Coptic['regex'], $string) > 0),
            'block1'=> self::Greek_And_Coptic['block1'],
            'block2'=> self::Greek_And_Coptic['block2'],
            'Unicode_name'=>self::Greek_And_Coptic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Greek_And_Coptic['block1'], self::Greek_And_Coptic['block2'])
            ),
        );
    }


    /**
    * Check Cyrillic
    * @param string
    * @return array
    */
    public static function Cyrillic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cyrillic['regex'], $string) > 0),
            'block1'=> self::Cyrillic['block1'],
            'block2'=> self::Cyrillic['block2'],
            'Unicode_name'=>self::Cyrillic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cyrillic['block1'], self::Cyrillic['block2'])
            ),
        );
    }


    /**
    * Check Cyrillic Supplement
    * @param string
    * @return array
    */
    public static function Cyrillic_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cyrillic_Supplement['regex'], $string) > 0),
            'block1'=> self::Cyrillic_Supplement['block1'],
            'block2'=> self::Cyrillic_Supplement['block2'],
            'Unicode_name'=>self::Cyrillic_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cyrillic_Supplement['block1'], self::Cyrillic_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Armenian
    * @param string
    * @return array
    */
    public static function Armenian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Armenian['regex'], $string) > 0),
            'block1'=> self::Armenian['block1'],
            'block2'=> self::Armenian['block2'],
            'Unicode_name'=>self::Armenian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Armenian['block1'], self::Armenian['block2'])
            ),
        );
    }


    /**
    * Check Hebrew
    * @param string
    * @return array
    */
    public static function Hebrew(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hebrew['regex'], $string) > 0),
            'block1'=> self::Hebrew['block1'],
            'block2'=> self::Hebrew['block2'],
            'Unicode_name'=>self::Hebrew['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hebrew['block1'], self::Hebrew['block2'])
            ),
        );
    }


    /**
    * Check Arabic
    * @param string
    * @return array
    */
    public static function Arabic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arabic['regex'], $string) > 0),
            'block1'=> self::Arabic['block1'],
            'block2'=> self::Arabic['block2'],
            'Unicode_name'=>self::Arabic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arabic['block1'], self::Arabic['block2'])
            ),
        );
    }


    /**
    * Check Syriac
    * @param string
    * @return array
    */
    public static function Syriac(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Syriac['regex'], $string) > 0),
            'block1'=> self::Syriac['block1'],
            'block2'=> self::Syriac['block2'],
            'Unicode_name'=>self::Syriac['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Syriac['block1'], self::Syriac['block2'])
            ),
        );
    }


    /**
    * Check Arabic Supplement
    * @param string
    * @return array
    */
    public static function Arabic_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arabic_Supplement['regex'], $string) > 0),
            'block1'=> self::Arabic_Supplement['block1'],
            'block2'=> self::Arabic_Supplement['block2'],
            'Unicode_name'=>self::Arabic_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arabic_Supplement['block1'], self::Arabic_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Thaana
    * @param string
    * @return array
    */
    public static function Thaana(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Thaana['regex'], $string) > 0),
            'block1'=> self::Thaana['block1'],
            'block2'=> self::Thaana['block2'],
            'Unicode_name'=>self::Thaana['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Thaana['block1'], self::Thaana['block2'])
            ),
        );
    }


    /**
    * Check NKo
    * @param string
    * @return array
    */
    public static function NKo(string $string): array
    {
        return array(
            'is'        => (preg_match(self::NKo['regex'], $string) > 0),
            'block1'=> self::NKo['block1'],
            'block2'=> self::NKo['block2'],
            'Unicode_name'=>self::NKo['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::NKo['block1'], self::NKo['block2'])
            ),
        );
    }


    /**
    * Check Samaritan
    * @param string
    * @return array
    */
    public static function Samaritan(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Samaritan['regex'], $string) > 0),
            'block1'=> self::Samaritan['block1'],
            'block2'=> self::Samaritan['block2'],
            'Unicode_name'=>self::Samaritan['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Samaritan['block1'], self::Samaritan['block2'])
            ),
        );
    }


    /**
    * Check Mandaic
    * @param string
    * @return array
    */
    public static function Mandaic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mandaic['regex'], $string) > 0),
            'block1'=> self::Mandaic['block1'],
            'block2'=> self::Mandaic['block2'],
            'Unicode_name'=>self::Mandaic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mandaic['block1'], self::Mandaic['block2'])
            ),
        );
    }


    /**
    * Check Syriac Supplement
    * @param string
    * @return array
    */
    public static function Syriac_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Syriac_Supplement['regex'], $string) > 0),
            'block1'=> self::Syriac_Supplement['block1'],
            'block2'=> self::Syriac_Supplement['block2'],
            'Unicode_name'=>self::Syriac_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Syriac_Supplement['block1'], self::Syriac_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Arabic Extended-A
    * @param string
    * @return array
    */
    public static function Arabic_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arabic_Extended_A['regex'], $string) > 0),
            'block1'=> self::Arabic_Extended_A['block1'],
            'block2'=> self::Arabic_Extended_A['block2'],
            'Unicode_name'=>self::Arabic_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arabic_Extended_A['block1'], self::Arabic_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Devanagari
    * @param string
    * @return array
    */
    public static function Devanagari(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Devanagari['regex'], $string) > 0),
            'block1'=> self::Devanagari['block1'],
            'block2'=> self::Devanagari['block2'],
            'Unicode_name'=>self::Devanagari['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Devanagari['block1'], self::Devanagari['block2'])
            ),
        );
    }


    /**
    * Check Bengali
    * @param string
    * @return array
    */
    public static function Bengali(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bengali['regex'], $string) > 0),
            'block1'=> self::Bengali['block1'],
            'block2'=> self::Bengali['block2'],
            'Unicode_name'=>self::Bengali['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bengali['block1'], self::Bengali['block2'])
            ),
        );
    }


    /**
    * Check Gurmukhi
    * @param string
    * @return array
    */
    public static function Gurmukhi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Gurmukhi['regex'], $string) > 0),
            'block1'=> self::Gurmukhi['block1'],
            'block2'=> self::Gurmukhi['block2'],
            'Unicode_name'=>self::Gurmukhi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Gurmukhi['block1'], self::Gurmukhi['block2'])
            ),
        );
    }


    /**
    * Check Gujarati
    * @param string
    * @return array
    */
    public static function Gujarati(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Gujarati['regex'], $string) > 0),
            'block1'=> self::Gujarati['block1'],
            'block2'=> self::Gujarati['block2'],
            'Unicode_name'=>self::Gujarati['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Gujarati['block1'], self::Gujarati['block2'])
            ),
        );
    }


    /**
    * Check Oriya
    * @param string
    * @return array
    */
    public static function Oriya(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Oriya['regex'], $string) > 0),
            'block1'=> self::Oriya['block1'],
            'block2'=> self::Oriya['block2'],
            'Unicode_name'=>self::Oriya['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Oriya['block1'], self::Oriya['block2'])
            ),
        );
    }


    /**
    * Check Tamil
    * @param string
    * @return array
    */
    public static function Tamil(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tamil['regex'], $string) > 0),
            'block1'=> self::Tamil['block1'],
            'block2'=> self::Tamil['block2'],
            'Unicode_name'=>self::Tamil['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tamil['block1'], self::Tamil['block2'])
            ),
        );
    }


    /**
    * Check Telugu
    * @param string
    * @return array
    */
    public static function Telugu(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Telugu['regex'], $string) > 0),
            'block1'=> self::Telugu['block1'],
            'block2'=> self::Telugu['block2'],
            'Unicode_name'=>self::Telugu['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Telugu['block1'], self::Telugu['block2'])
            ),
        );
    }


    /**
    * Check Kannada
    * @param string
    * @return array
    */
    public static function Kannada(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kannada['regex'], $string) > 0),
            'block1'=> self::Kannada['block1'],
            'block2'=> self::Kannada['block2'],
            'Unicode_name'=>self::Kannada['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kannada['block1'], self::Kannada['block2'])
            ),
        );
    }


    /**
    * Check Malayalam
    * @param string
    * @return array
    */
    public static function Malayalam(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Malayalam['regex'], $string) > 0),
            'block1'=> self::Malayalam['block1'],
            'block2'=> self::Malayalam['block2'],
            'Unicode_name'=>self::Malayalam['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Malayalam['block1'], self::Malayalam['block2'])
            ),
        );
    }


    /**
    * Check Sinhala
    * @param string
    * @return array
    */
    public static function Sinhala(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sinhala['regex'], $string) > 0),
            'block1'=> self::Sinhala['block1'],
            'block2'=> self::Sinhala['block2'],
            'Unicode_name'=>self::Sinhala['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sinhala['block1'], self::Sinhala['block2'])
            ),
        );
    }


    /**
    * Check Thai
    * @param string
    * @return array
    */
    public static function Thai(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Thai['regex'], $string) > 0),
            'block1'=> self::Thai['block1'],
            'block2'=> self::Thai['block2'],
            'Unicode_name'=>self::Thai['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Thai['block1'], self::Thai['block2'])
            ),
        );
    }


    /**
    * Check Lao
    * @param string
    * @return array
    */
    public static function Lao(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Lao['regex'], $string) > 0),
            'block1'=> self::Lao['block1'],
            'block2'=> self::Lao['block2'],
            'Unicode_name'=>self::Lao['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Lao['block1'], self::Lao['block2'])
            ),
        );
    }


    /**
    * Check Tibetan
    * @param string
    * @return array
    */
    public static function Tibetan(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tibetan['regex'], $string) > 0),
            'block1'=> self::Tibetan['block1'],
            'block2'=> self::Tibetan['block2'],
            'Unicode_name'=>self::Tibetan['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tibetan['block1'], self::Tibetan['block2'])
            ),
        );
    }


    /**
    * Check Myanmar
    * @param string
    * @return array
    */
    public static function Myanmar(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Myanmar['regex'], $string) > 0),
            'block1'=> self::Myanmar['block1'],
            'block2'=> self::Myanmar['block2'],
            'Unicode_name'=>self::Myanmar['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Myanmar['block1'], self::Myanmar['block2'])
            ),
        );
    }


    /**
    * Check Georgian
    * @param string
    * @return array
    */
    public static function Georgian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Georgian['regex'], $string) > 0),
            'block1'=> self::Georgian['block1'],
            'block2'=> self::Georgian['block2'],
            'Unicode_name'=>self::Georgian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Georgian['block1'], self::Georgian['block2'])
            ),
        );
    }


    /**
    * Check Hangul Jamo
    * @param string
    * @return array
    */
    public static function Hangul_Jamo(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hangul_Jamo['regex'], $string) > 0),
            'block1'=> self::Hangul_Jamo['block1'],
            'block2'=> self::Hangul_Jamo['block2'],
            'Unicode_name'=>self::Hangul_Jamo['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hangul_Jamo['block1'], self::Hangul_Jamo['block2'])
            ),
        );
    }


    /**
    * Check Ethiopic
    * @param string
    * @return array
    */
    public static function Ethiopic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ethiopic['regex'], $string) > 0),
            'block1'=> self::Ethiopic['block1'],
            'block2'=> self::Ethiopic['block2'],
            'Unicode_name'=>self::Ethiopic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ethiopic['block1'], self::Ethiopic['block2'])
            ),
        );
    }


    /**
    * Check Ethiopic Supplement
    * @param string
    * @return array
    */
    public static function Ethiopic_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ethiopic_Supplement['regex'], $string) > 0),
            'block1'=> self::Ethiopic_Supplement['block1'],
            'block2'=> self::Ethiopic_Supplement['block2'],
            'Unicode_name'=>self::Ethiopic_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ethiopic_Supplement['block1'], self::Ethiopic_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Cherokee
    * @param string
    * @return array
    */
    public static function Cherokee(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cherokee['regex'], $string) > 0),
            'block1'=> self::Cherokee['block1'],
            'block2'=> self::Cherokee['block2'],
            'Unicode_name'=>self::Cherokee['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cherokee['block1'], self::Cherokee['block2'])
            ),
        );
    }


    /**
    * Check Unified Canadian Aboriginal Syllabics
    * @param string
    * @return array
    */
    public static function Unified_Canadian_Aboriginal_Syllabics(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Unified_Canadian_Aboriginal_Syllabics['regex'], $string) > 0),
            'block1'=> self::Unified_Canadian_Aboriginal_Syllabics['block1'],
            'block2'=> self::Unified_Canadian_Aboriginal_Syllabics['block2'],
            'Unicode_name'=>self::Unified_Canadian_Aboriginal_Syllabics['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Unified_Canadian_Aboriginal_Syllabics['block1'], self::Unified_Canadian_Aboriginal_Syllabics['block2'])
            ),
        );
    }


    /**
    * Check Ogham
    * @param string
    * @return array
    */
    public static function Ogham(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ogham['regex'], $string) > 0),
            'block1'=> self::Ogham['block1'],
            'block2'=> self::Ogham['block2'],
            'Unicode_name'=>self::Ogham['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ogham['block1'], self::Ogham['block2'])
            ),
        );
    }


    /**
    * Check Runic
    * @param string
    * @return array
    */
    public static function Runic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Runic['regex'], $string) > 0),
            'block1'=> self::Runic['block1'],
            'block2'=> self::Runic['block2'],
            'Unicode_name'=>self::Runic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Runic['block1'], self::Runic['block2'])
            ),
        );
    }


    /**
    * Check Tagalog
    * @param string
    * @return array
    */
    public static function Tagalog(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tagalog['regex'], $string) > 0),
            'block1'=> self::Tagalog['block1'],
            'block2'=> self::Tagalog['block2'],
            'Unicode_name'=>self::Tagalog['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tagalog['block1'], self::Tagalog['block2'])
            ),
        );
    }


    /**
    * Check Hanunoo
    * @param string
    * @return array
    */
    public static function Hanunoo(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hanunoo['regex'], $string) > 0),
            'block1'=> self::Hanunoo['block1'],
            'block2'=> self::Hanunoo['block2'],
            'Unicode_name'=>self::Hanunoo['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hanunoo['block1'], self::Hanunoo['block2'])
            ),
        );
    }


    /**
    * Check Buhid
    * @param string
    * @return array
    */
    public static function Buhid(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Buhid['regex'], $string) > 0),
            'block1'=> self::Buhid['block1'],
            'block2'=> self::Buhid['block2'],
            'Unicode_name'=>self::Buhid['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Buhid['block1'], self::Buhid['block2'])
            ),
        );
    }


    /**
    * Check Tagbanwa
    * @param string
    * @return array
    */
    public static function Tagbanwa(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tagbanwa['regex'], $string) > 0),
            'block1'=> self::Tagbanwa['block1'],
            'block2'=> self::Tagbanwa['block2'],
            'Unicode_name'=>self::Tagbanwa['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tagbanwa['block1'], self::Tagbanwa['block2'])
            ),
        );
    }


    /**
    * Check Khmer
    * @param string
    * @return array
    */
    public static function Khmer(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Khmer['regex'], $string) > 0),
            'block1'=> self::Khmer['block1'],
            'block2'=> self::Khmer['block2'],
            'Unicode_name'=>self::Khmer['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Khmer['block1'], self::Khmer['block2'])
            ),
        );
    }


    /**
    * Check Mongolian
    * @param string
    * @return array
    */
    public static function Mongolian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mongolian['regex'], $string) > 0),
            'block1'=> self::Mongolian['block1'],
            'block2'=> self::Mongolian['block2'],
            'Unicode_name'=>self::Mongolian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mongolian['block1'], self::Mongolian['block2'])
            ),
        );
    }


    /**
    * Check Unified Canadian Aboriginal Syllabics Extended
    * @param string
    * @return array
    */
    public static function Unified_Canadian_Aboriginal_Syllabics_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Unified_Canadian_Aboriginal_Syllabics_Extended['regex'], $string) > 0),
            'block1'=> self::Unified_Canadian_Aboriginal_Syllabics_Extended['block1'],
            'block2'=> self::Unified_Canadian_Aboriginal_Syllabics_Extended['block2'],
            'Unicode_name'=>self::Unified_Canadian_Aboriginal_Syllabics_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Unified_Canadian_Aboriginal_Syllabics_Extended['block1'], self::Unified_Canadian_Aboriginal_Syllabics_Extended['block2'])
            ),
        );
    }


    /**
    * Check Limbu
    * @param string
    * @return array
    */
    public static function Limbu(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Limbu['regex'], $string) > 0),
            'block1'=> self::Limbu['block1'],
            'block2'=> self::Limbu['block2'],
            'Unicode_name'=>self::Limbu['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Limbu['block1'], self::Limbu['block2'])
            ),
        );
    }


    /**
    * Check Tai Le
    * @param string
    * @return array
    */
    public static function Tai_Le(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tai_Le['regex'], $string) > 0),
            'block1'=> self::Tai_Le['block1'],
            'block2'=> self::Tai_Le['block2'],
            'Unicode_name'=>self::Tai_Le['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tai_Le['block1'], self::Tai_Le['block2'])
            ),
        );
    }


    /**
    * Check New Tai Lue
    * @param string
    * @return array
    */
    public static function New_Tai_Lue(string $string): array
    {
        return array(
            'is'        => (preg_match(self::New_Tai_Lue['regex'], $string) > 0),
            'block1'=> self::New_Tai_Lue['block1'],
            'block2'=> self::New_Tai_Lue['block2'],
            'Unicode_name'=>self::New_Tai_Lue['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::New_Tai_Lue['block1'], self::New_Tai_Lue['block2'])
            ),
        );
    }


    /**
    * Check Khmer Symbols
    * @param string
    * @return array
    */
    public static function Khmer_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Khmer_Symbols['regex'], $string) > 0),
            'block1'=> self::Khmer_Symbols['block1'],
            'block2'=> self::Khmer_Symbols['block2'],
            'Unicode_name'=>self::Khmer_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Khmer_Symbols['block1'], self::Khmer_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Buginese
    * @param string
    * @return array
    */
    public static function Buginese(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Buginese['regex'], $string) > 0),
            'block1'=> self::Buginese['block1'],
            'block2'=> self::Buginese['block2'],
            'Unicode_name'=>self::Buginese['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Buginese['block1'], self::Buginese['block2'])
            ),
        );
    }


    /**
    * Check Tai Tham
    * @param string
    * @return array
    */
    public static function Tai_Tham(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tai_Tham['regex'], $string) > 0),
            'block1'=> self::Tai_Tham['block1'],
            'block2'=> self::Tai_Tham['block2'],
            'Unicode_name'=>self::Tai_Tham['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tai_Tham['block1'], self::Tai_Tham['block2'])
            ),
        );
    }


    /**
    * Check Combining Diacritical Marks Extended
    * @param string
    * @return array
    */
    public static function Combining_Diacritical_Marks_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Combining_Diacritical_Marks_Extended['regex'], $string) > 0),
            'block1'=> self::Combining_Diacritical_Marks_Extended['block1'],
            'block2'=> self::Combining_Diacritical_Marks_Extended['block2'],
            'Unicode_name'=>self::Combining_Diacritical_Marks_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Combining_Diacritical_Marks_Extended['block1'], self::Combining_Diacritical_Marks_Extended['block2'])
            ),
        );
    }


    /**
    * Check Balinese
    * @param string
    * @return array
    */
    public static function Balinese(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Balinese['regex'], $string) > 0),
            'block1'=> self::Balinese['block1'],
            'block2'=> self::Balinese['block2'],
            'Unicode_name'=>self::Balinese['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Balinese['block1'], self::Balinese['block2'])
            ),
        );
    }


    /**
    * Check Sundanese
    * @param string
    * @return array
    */
    public static function Sundanese(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sundanese['regex'], $string) > 0),
            'block1'=> self::Sundanese['block1'],
            'block2'=> self::Sundanese['block2'],
            'Unicode_name'=>self::Sundanese['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sundanese['block1'], self::Sundanese['block2'])
            ),
        );
    }


    /**
    * Check Batak
    * @param string
    * @return array
    */
    public static function Batak(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Batak['regex'], $string) > 0),
            'block1'=> self::Batak['block1'],
            'block2'=> self::Batak['block2'],
            'Unicode_name'=>self::Batak['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Batak['block1'], self::Batak['block2'])
            ),
        );
    }


    /**
    * Check Lepcha
    * @param string
    * @return array
    */
    public static function Lepcha(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Lepcha['regex'], $string) > 0),
            'block1'=> self::Lepcha['block1'],
            'block2'=> self::Lepcha['block2'],
            'Unicode_name'=>self::Lepcha['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Lepcha['block1'], self::Lepcha['block2'])
            ),
        );
    }


    /**
    * Check Ol Chiki
    * @param string
    * @return array
    */
    public static function Ol_Chiki(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ol_Chiki['regex'], $string) > 0),
            'block1'=> self::Ol_Chiki['block1'],
            'block2'=> self::Ol_Chiki['block2'],
            'Unicode_name'=>self::Ol_Chiki['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ol_Chiki['block1'], self::Ol_Chiki['block2'])
            ),
        );
    }


    /**
    * Check Cyrillic Extended-C
    * @param string
    * @return array
    */
    public static function Cyrillic_Extended_C(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cyrillic_Extended_C['regex'], $string) > 0),
            'block1'=> self::Cyrillic_Extended_C['block1'],
            'block2'=> self::Cyrillic_Extended_C['block2'],
            'Unicode_name'=>self::Cyrillic_Extended_C['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cyrillic_Extended_C['block1'], self::Cyrillic_Extended_C['block2'])
            ),
        );
    }


    /**
    * Check Sundanese Supplement
    * @param string
    * @return array
    */
    public static function Sundanese_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sundanese_Supplement['regex'], $string) > 0),
            'block1'=> self::Sundanese_Supplement['block1'],
            'block2'=> self::Sundanese_Supplement['block2'],
            'Unicode_name'=>self::Sundanese_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sundanese_Supplement['block1'], self::Sundanese_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Vedic Extensions
    * @param string
    * @return array
    */
    public static function Vedic_Extensions(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Vedic_Extensions['regex'], $string) > 0),
            'block1'=> self::Vedic_Extensions['block1'],
            'block2'=> self::Vedic_Extensions['block2'],
            'Unicode_name'=>self::Vedic_Extensions['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Vedic_Extensions['block1'], self::Vedic_Extensions['block2'])
            ),
        );
    }


    /**
    * Check Phonetic Extensions
    * @param string
    * @return array
    */
    public static function Phonetic_Extensions(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Phonetic_Extensions['regex'], $string) > 0),
            'block1'=> self::Phonetic_Extensions['block1'],
            'block2'=> self::Phonetic_Extensions['block2'],
            'Unicode_name'=>self::Phonetic_Extensions['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Phonetic_Extensions['block1'], self::Phonetic_Extensions['block2'])
            ),
        );
    }


    /**
    * Check Phonetic Extensions Supplement
    * @param string
    * @return array
    */
    public static function Phonetic_Extensions_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Phonetic_Extensions_Supplement['regex'], $string) > 0),
            'block1'=> self::Phonetic_Extensions_Supplement['block1'],
            'block2'=> self::Phonetic_Extensions_Supplement['block2'],
            'Unicode_name'=>self::Phonetic_Extensions_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Phonetic_Extensions_Supplement['block1'], self::Phonetic_Extensions_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Combining Diacritical Marks Supplement
    * @param string
    * @return array
    */
    public static function Combining_Diacritical_Marks_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Combining_Diacritical_Marks_Supplement['regex'], $string) > 0),
            'block1'=> self::Combining_Diacritical_Marks_Supplement['block1'],
            'block2'=> self::Combining_Diacritical_Marks_Supplement['block2'],
            'Unicode_name'=>self::Combining_Diacritical_Marks_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Combining_Diacritical_Marks_Supplement['block1'], self::Combining_Diacritical_Marks_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Latin Extended Additional
    * @param string
    * @return array
    */
    public static function Latin_Extended_Additional(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_Extended_Additional['regex'], $string) > 0),
            'block1'=> self::Latin_Extended_Additional['block1'],
            'block2'=> self::Latin_Extended_Additional['block2'],
            'Unicode_name'=>self::Latin_Extended_Additional['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_Extended_Additional['block1'], self::Latin_Extended_Additional['block2'])
            ),
        );
    }


    /**
    * Check Greek Extended
    * @param string
    * @return array
    */
    public static function Greek_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Greek_Extended['regex'], $string) > 0),
            'block1'=> self::Greek_Extended['block1'],
            'block2'=> self::Greek_Extended['block2'],
            'Unicode_name'=>self::Greek_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Greek_Extended['block1'], self::Greek_Extended['block2'])
            ),
        );
    }


    /**
    * Check General Punctuation
    * @param string
    * @return array
    */
    public static function General_Punctuation(string $string): array
    {
        return array(
            'is'        => (preg_match(self::General_Punctuation['regex'], $string) > 0),
            'block1'=> self::General_Punctuation['block1'],
            'block2'=> self::General_Punctuation['block2'],
            'Unicode_name'=>self::General_Punctuation['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::General_Punctuation['block1'], self::General_Punctuation['block2'])
            ),
        );
    }


    /**
    * Check Superscripts And Subscripts
    * @param string
    * @return array
    */
    public static function Superscripts_And_Subscripts(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Superscripts_And_Subscripts['regex'], $string) > 0),
            'block1'=> self::Superscripts_And_Subscripts['block1'],
            'block2'=> self::Superscripts_And_Subscripts['block2'],
            'Unicode_name'=>self::Superscripts_And_Subscripts['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Superscripts_And_Subscripts['block1'], self::Superscripts_And_Subscripts['block2'])
            ),
        );
    }


    /**
    * Check Currency Symbols
    * @param string
    * @return array
    */
    public static function Currency_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Currency_Symbols['regex'], $string) > 0),
            'block1'=> self::Currency_Symbols['block1'],
            'block2'=> self::Currency_Symbols['block2'],
            'Unicode_name'=>self::Currency_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Currency_Symbols['block1'], self::Currency_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Combining Diacritical Marks For Symbols
    * @param string
    * @return array
    */
    public static function Combining_Diacritical_Marks_For_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Combining_Diacritical_Marks_For_Symbols['regex'], $string) > 0),
            'block1'=> self::Combining_Diacritical_Marks_For_Symbols['block1'],
            'block2'=> self::Combining_Diacritical_Marks_For_Symbols['block2'],
            'Unicode_name'=>self::Combining_Diacritical_Marks_For_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Combining_Diacritical_Marks_For_Symbols['block1'], self::Combining_Diacritical_Marks_For_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Letterlike Symbols
    * @param string
    * @return array
    */
    public static function Letterlike_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Letterlike_Symbols['regex'], $string) > 0),
            'block1'=> self::Letterlike_Symbols['block1'],
            'block2'=> self::Letterlike_Symbols['block2'],
            'Unicode_name'=>self::Letterlike_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Letterlike_Symbols['block1'], self::Letterlike_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Number Forms
    * @param string
    * @return array
    */
    public static function Number_Forms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Number_Forms['regex'], $string) > 0),
            'block1'=> self::Number_Forms['block1'],
            'block2'=> self::Number_Forms['block2'],
            'Unicode_name'=>self::Number_Forms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Number_Forms['block1'], self::Number_Forms['block2'])
            ),
        );
    }


    /**
    * Check Arrows
    * @param string
    * @return array
    */
    public static function Arrows(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arrows['regex'], $string) > 0),
            'block1'=> self::Arrows['block1'],
            'block2'=> self::Arrows['block2'],
            'Unicode_name'=>self::Arrows['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arrows['block1'], self::Arrows['block2'])
            ),
        );
    }


    /**
    * Check Mathematical Operators
    * @param string
    * @return array
    */
    public static function Mathematical_Operators(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mathematical_Operators['regex'], $string) > 0),
            'block1'=> self::Mathematical_Operators['block1'],
            'block2'=> self::Mathematical_Operators['block2'],
            'Unicode_name'=>self::Mathematical_Operators['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mathematical_Operators['block1'], self::Mathematical_Operators['block2'])
            ),
        );
    }


    /**
    * Check Miscellaneous Technical
    * @param string
    * @return array
    */
    public static function Miscellaneous_Technical(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miscellaneous_Technical['regex'], $string) > 0),
            'block1'=> self::Miscellaneous_Technical['block1'],
            'block2'=> self::Miscellaneous_Technical['block2'],
            'Unicode_name'=>self::Miscellaneous_Technical['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miscellaneous_Technical['block1'], self::Miscellaneous_Technical['block2'])
            ),
        );
    }


    /**
    * Check Control Pictures
    * @param string
    * @return array
    */
    public static function Control_Pictures(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Control_Pictures['regex'], $string) > 0),
            'block1'=> self::Control_Pictures['block1'],
            'block2'=> self::Control_Pictures['block2'],
            'Unicode_name'=>self::Control_Pictures['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Control_Pictures['block1'], self::Control_Pictures['block2'])
            ),
        );
    }


    /**
    * Check Optical Character Recognition
    * @param string
    * @return array
    */
    public static function Optical_Character_Recognition(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Optical_Character_Recognition['regex'], $string) > 0),
            'block1'=> self::Optical_Character_Recognition['block1'],
            'block2'=> self::Optical_Character_Recognition['block2'],
            'Unicode_name'=>self::Optical_Character_Recognition['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Optical_Character_Recognition['block1'], self::Optical_Character_Recognition['block2'])
            ),
        );
    }


    /**
    * Check Enclosed Alphanumerics
    * @param string
    * @return array
    */
    public static function Enclosed_Alphanumerics(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Enclosed_Alphanumerics['regex'], $string) > 0),
            'block1'=> self::Enclosed_Alphanumerics['block1'],
            'block2'=> self::Enclosed_Alphanumerics['block2'],
            'Unicode_name'=>self::Enclosed_Alphanumerics['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Enclosed_Alphanumerics['block1'], self::Enclosed_Alphanumerics['block2'])
            ),
        );
    }


    /**
    * Check Box Drawing
    * @param string
    * @return array
    */
    public static function Box_Drawing(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Box_Drawing['regex'], $string) > 0),
            'block1'=> self::Box_Drawing['block1'],
            'block2'=> self::Box_Drawing['block2'],
            'Unicode_name'=>self::Box_Drawing['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Box_Drawing['block1'], self::Box_Drawing['block2'])
            ),
        );
    }


    /**
    * Check Block Elements
    * @param string
    * @return array
    */
    public static function Block_Elements(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Block_Elements['regex'], $string) > 0),
            'block1'=> self::Block_Elements['block1'],
            'block2'=> self::Block_Elements['block2'],
            'Unicode_name'=>self::Block_Elements['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Block_Elements['block1'], self::Block_Elements['block2'])
            ),
        );
    }


    /**
    * Check Geometric Shapes
    * @param string
    * @return array
    */
    public static function Geometric_Shapes(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Geometric_Shapes['regex'], $string) > 0),
            'block1'=> self::Geometric_Shapes['block1'],
            'block2'=> self::Geometric_Shapes['block2'],
            'Unicode_name'=>self::Geometric_Shapes['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Geometric_Shapes['block1'], self::Geometric_Shapes['block2'])
            ),
        );
    }


    /**
    * Check Miscellaneous Symbols
    * @param string
    * @return array
    */
    public static function Miscellaneous_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miscellaneous_Symbols['regex'], $string) > 0),
            'block1'=> self::Miscellaneous_Symbols['block1'],
            'block2'=> self::Miscellaneous_Symbols['block2'],
            'Unicode_name'=>self::Miscellaneous_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miscellaneous_Symbols['block1'], self::Miscellaneous_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Dingbats
    * @param string
    * @return array
    */
    public static function Dingbats(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Dingbats['regex'], $string) > 0),
            'block1'=> self::Dingbats['block1'],
            'block2'=> self::Dingbats['block2'],
            'Unicode_name'=>self::Dingbats['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Dingbats['block1'], self::Dingbats['block2'])
            ),
        );
    }


    /**
    * Check Miscellaneous Mathematical Symbols-A
    * @param string
    * @return array
    */
    public static function Miscellaneous_Mathematical_Symbols_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miscellaneous_Mathematical_Symbols_A['regex'], $string) > 0),
            'block1'=> self::Miscellaneous_Mathematical_Symbols_A['block1'],
            'block2'=> self::Miscellaneous_Mathematical_Symbols_A['block2'],
            'Unicode_name'=>self::Miscellaneous_Mathematical_Symbols_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miscellaneous_Mathematical_Symbols_A['block1'], self::Miscellaneous_Mathematical_Symbols_A['block2'])
            ),
        );
    }


    /**
    * Check Supplemental Arrows-A
    * @param string
    * @return array
    */
    public static function Supplemental_Arrows_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplemental_Arrows_A['regex'], $string) > 0),
            'block1'=> self::Supplemental_Arrows_A['block1'],
            'block2'=> self::Supplemental_Arrows_A['block2'],
            'Unicode_name'=>self::Supplemental_Arrows_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplemental_Arrows_A['block1'], self::Supplemental_Arrows_A['block2'])
            ),
        );
    }


    /**
    * Check Braille Patterns
    * @param string
    * @return array
    */
    public static function Braille_Patterns(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Braille_Patterns['regex'], $string) > 0),
            'block1'=> self::Braille_Patterns['block1'],
            'block2'=> self::Braille_Patterns['block2'],
            'Unicode_name'=>self::Braille_Patterns['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Braille_Patterns['block1'], self::Braille_Patterns['block2'])
            ),
        );
    }


    /**
    * Check Supplemental Arrows-B
    * @param string
    * @return array
    */
    public static function Supplemental_Arrows_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplemental_Arrows_B['regex'], $string) > 0),
            'block1'=> self::Supplemental_Arrows_B['block1'],
            'block2'=> self::Supplemental_Arrows_B['block2'],
            'Unicode_name'=>self::Supplemental_Arrows_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplemental_Arrows_B['block1'], self::Supplemental_Arrows_B['block2'])
            ),
        );
    }


    /**
    * Check Miscellaneous Mathematical Symbols-B
    * @param string
    * @return array
    */
    public static function Miscellaneous_Mathematical_Symbols_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miscellaneous_Mathematical_Symbols_B['regex'], $string) > 0),
            'block1'=> self::Miscellaneous_Mathematical_Symbols_B['block1'],
            'block2'=> self::Miscellaneous_Mathematical_Symbols_B['block2'],
            'Unicode_name'=>self::Miscellaneous_Mathematical_Symbols_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miscellaneous_Mathematical_Symbols_B['block1'], self::Miscellaneous_Mathematical_Symbols_B['block2'])
            ),
        );
    }


    /**
    * Check Supplemental Mathematical Operators
    * @param string
    * @return array
    */
    public static function Supplemental_Mathematical_Operators(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplemental_Mathematical_Operators['regex'], $string) > 0),
            'block1'=> self::Supplemental_Mathematical_Operators['block1'],
            'block2'=> self::Supplemental_Mathematical_Operators['block2'],
            'Unicode_name'=>self::Supplemental_Mathematical_Operators['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplemental_Mathematical_Operators['block1'], self::Supplemental_Mathematical_Operators['block2'])
            ),
        );
    }


    /**
    * Check Miscellaneous Symbols And Arrows
    * @param string
    * @return array
    */
    public static function Miscellaneous_Symbols_And_Arrows(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miscellaneous_Symbols_And_Arrows['regex'], $string) > 0),
            'block1'=> self::Miscellaneous_Symbols_And_Arrows['block1'],
            'block2'=> self::Miscellaneous_Symbols_And_Arrows['block2'],
            'Unicode_name'=>self::Miscellaneous_Symbols_And_Arrows['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miscellaneous_Symbols_And_Arrows['block1'], self::Miscellaneous_Symbols_And_Arrows['block2'])
            ),
        );
    }


    /**
    * Check Glagolitic
    * @param string
    * @return array
    */
    public static function Glagolitic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Glagolitic['regex'], $string) > 0),
            'block1'=> self::Glagolitic['block1'],
            'block2'=> self::Glagolitic['block2'],
            'Unicode_name'=>self::Glagolitic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Glagolitic['block1'], self::Glagolitic['block2'])
            ),
        );
    }


    /**
    * Check Latin Extended-C
    * @param string
    * @return array
    */
    public static function Latin_Extended_C(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_Extended_C['regex'], $string) > 0),
            'block1'=> self::Latin_Extended_C['block1'],
            'block2'=> self::Latin_Extended_C['block2'],
            'Unicode_name'=>self::Latin_Extended_C['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_Extended_C['block1'], self::Latin_Extended_C['block2'])
            ),
        );
    }


    /**
    * Check Coptic
    * @param string
    * @return array
    */
    public static function Coptic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Coptic['regex'], $string) > 0),
            'block1'=> self::Coptic['block1'],
            'block2'=> self::Coptic['block2'],
            'Unicode_name'=>self::Coptic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Coptic['block1'], self::Coptic['block2'])
            ),
        );
    }


    /**
    * Check Georgian Supplement
    * @param string
    * @return array
    */
    public static function Georgian_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Georgian_Supplement['regex'], $string) > 0),
            'block1'=> self::Georgian_Supplement['block1'],
            'block2'=> self::Georgian_Supplement['block2'],
            'Unicode_name'=>self::Georgian_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Georgian_Supplement['block1'], self::Georgian_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Tifinagh
    * @param string
    * @return array
    */
    public static function Tifinagh(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tifinagh['regex'], $string) > 0),
            'block1'=> self::Tifinagh['block1'],
            'block2'=> self::Tifinagh['block2'],
            'Unicode_name'=>self::Tifinagh['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tifinagh['block1'], self::Tifinagh['block2'])
            ),
        );
    }


    /**
    * Check Ethiopic Extended
    * @param string
    * @return array
    */
    public static function Ethiopic_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ethiopic_Extended['regex'], $string) > 0),
            'block1'=> self::Ethiopic_Extended['block1'],
            'block2'=> self::Ethiopic_Extended['block2'],
            'Unicode_name'=>self::Ethiopic_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ethiopic_Extended['block1'], self::Ethiopic_Extended['block2'])
            ),
        );
    }


    /**
    * Check Cyrillic Extended-A
    * @param string
    * @return array
    */
    public static function Cyrillic_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cyrillic_Extended_A['regex'], $string) > 0),
            'block1'=> self::Cyrillic_Extended_A['block1'],
            'block2'=> self::Cyrillic_Extended_A['block2'],
            'Unicode_name'=>self::Cyrillic_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cyrillic_Extended_A['block1'], self::Cyrillic_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Supplemental Punctuation
    * @param string
    * @return array
    */
    public static function Supplemental_Punctuation(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplemental_Punctuation['regex'], $string) > 0),
            'block1'=> self::Supplemental_Punctuation['block1'],
            'block2'=> self::Supplemental_Punctuation['block2'],
            'Unicode_name'=>self::Supplemental_Punctuation['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplemental_Punctuation['block1'], self::Supplemental_Punctuation['block2'])
            ),
        );
    }


    /**
    * Check CJK Radicals Supplement
    * @param string
    * @return array
    */
    public static function CJK_Radicals_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Radicals_Supplement['regex'], $string) > 0),
            'block1'=> self::CJK_Radicals_Supplement['block1'],
            'block2'=> self::CJK_Radicals_Supplement['block2'],
            'Unicode_name'=>self::CJK_Radicals_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Radicals_Supplement['block1'], self::CJK_Radicals_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Kangxi Radicals
    * @param string
    * @return array
    */
    public static function Kangxi_Radicals(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kangxi_Radicals['regex'], $string) > 0),
            'block1'=> self::Kangxi_Radicals['block1'],
            'block2'=> self::Kangxi_Radicals['block2'],
            'Unicode_name'=>self::Kangxi_Radicals['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kangxi_Radicals['block1'], self::Kangxi_Radicals['block2'])
            ),
        );
    }


    /**
    * Check Ideographic Description Characters
    * @param string
    * @return array
    */
    public static function Ideographic_Description_Characters(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ideographic_Description_Characters['regex'], $string) > 0),
            'block1'=> self::Ideographic_Description_Characters['block1'],
            'block2'=> self::Ideographic_Description_Characters['block2'],
            'Unicode_name'=>self::Ideographic_Description_Characters['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ideographic_Description_Characters['block1'], self::Ideographic_Description_Characters['block2'])
            ),
        );
    }


    /**
    * Check CJK Symbols And Punctuation
    * @param string
    * @return array
    */
    public static function CJK_Symbols_And_Punctuation(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Symbols_And_Punctuation['regex'], $string) > 0),
            'block1'=> self::CJK_Symbols_And_Punctuation['block1'],
            'block2'=> self::CJK_Symbols_And_Punctuation['block2'],
            'Unicode_name'=>self::CJK_Symbols_And_Punctuation['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Symbols_And_Punctuation['block1'], self::CJK_Symbols_And_Punctuation['block2'])
            ),
        );
    }


    /**
    * Check Hiragana
    * @param string
    * @return array
    */
    public static function Hiragana(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hiragana['regex'], $string) > 0),
            'block1'=> self::Hiragana['block1'],
            'block2'=> self::Hiragana['block2'],
            'Unicode_name'=>self::Hiragana['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hiragana['block1'], self::Hiragana['block2'])
            ),
        );
    }


    /**
    * Check Katakana
    * @param string
    * @return array
    */
    public static function Katakana(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Katakana['regex'], $string) > 0),
            'block1'=> self::Katakana['block1'],
            'block2'=> self::Katakana['block2'],
            'Unicode_name'=>self::Katakana['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Katakana['block1'], self::Katakana['block2'])
            ),
        );
    }


    /**
    * Check Bopomofo
    * @param string
    * @return array
    */
    public static function Bopomofo(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bopomofo['regex'], $string) > 0),
            'block1'=> self::Bopomofo['block1'],
            'block2'=> self::Bopomofo['block2'],
            'Unicode_name'=>self::Bopomofo['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bopomofo['block1'], self::Bopomofo['block2'])
            ),
        );
    }


    /**
    * Check Hangul Compatibility Jamo
    * @param string
    * @return array
    */
    public static function Hangul_Compatibility_Jamo(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hangul_Compatibility_Jamo['regex'], $string) > 0),
            'block1'=> self::Hangul_Compatibility_Jamo['block1'],
            'block2'=> self::Hangul_Compatibility_Jamo['block2'],
            'Unicode_name'=>self::Hangul_Compatibility_Jamo['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hangul_Compatibility_Jamo['block1'], self::Hangul_Compatibility_Jamo['block2'])
            ),
        );
    }


    /**
    * Check Kanbun
    * @param string
    * @return array
    */
    public static function Kanbun(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kanbun['regex'], $string) > 0),
            'block1'=> self::Kanbun['block1'],
            'block2'=> self::Kanbun['block2'],
            'Unicode_name'=>self::Kanbun['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kanbun['block1'], self::Kanbun['block2'])
            ),
        );
    }


    /**
    * Check Bopomofo Extended
    * @param string
    * @return array
    */
    public static function Bopomofo_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bopomofo_Extended['regex'], $string) > 0),
            'block1'=> self::Bopomofo_Extended['block1'],
            'block2'=> self::Bopomofo_Extended['block2'],
            'Unicode_name'=>self::Bopomofo_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bopomofo_Extended['block1'], self::Bopomofo_Extended['block2'])
            ),
        );
    }


    /**
    * Check CJK Strokes
    * @param string
    * @return array
    */
    public static function CJK_Strokes(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Strokes['regex'], $string) > 0),
            'block1'=> self::CJK_Strokes['block1'],
            'block2'=> self::CJK_Strokes['block2'],
            'Unicode_name'=>self::CJK_Strokes['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Strokes['block1'], self::CJK_Strokes['block2'])
            ),
        );
    }


    /**
    * Check Katakana Phonetic Extensions
    * @param string
    * @return array
    */
    public static function Katakana_Phonetic_Extensions(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Katakana_Phonetic_Extensions['regex'], $string) > 0),
            'block1'=> self::Katakana_Phonetic_Extensions['block1'],
            'block2'=> self::Katakana_Phonetic_Extensions['block2'],
            'Unicode_name'=>self::Katakana_Phonetic_Extensions['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Katakana_Phonetic_Extensions['block1'], self::Katakana_Phonetic_Extensions['block2'])
            ),
        );
    }


    /**
    * Check Enclosed CJK Letters And Months
    * @param string
    * @return array
    */
    public static function Enclosed_CJK_Letters_And_Months(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Enclosed_CJK_Letters_And_Months['regex'], $string) > 0),
            'block1'=> self::Enclosed_CJK_Letters_And_Months['block1'],
            'block2'=> self::Enclosed_CJK_Letters_And_Months['block2'],
            'Unicode_name'=>self::Enclosed_CJK_Letters_And_Months['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Enclosed_CJK_Letters_And_Months['block1'], self::Enclosed_CJK_Letters_And_Months['block2'])
            ),
        );
    }


    /**
    * Check CJK Compatibility
    * @param string
    * @return array
    */
    public static function CJK_Compatibility(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Compatibility['regex'], $string) > 0),
            'block1'=> self::CJK_Compatibility['block1'],
            'block2'=> self::CJK_Compatibility['block2'],
            'Unicode_name'=>self::CJK_Compatibility['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Compatibility['block1'], self::CJK_Compatibility['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs Extension A
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs_Extension_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs_Extension_A['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs_Extension_A['block1'],
            'block2'=> self::CJK_Unified_Ideographs_Extension_A['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs_Extension_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs_Extension_A['block1'], self::CJK_Unified_Ideographs_Extension_A['block2'])
            ),
        );
    }


    /**
    * Check Yijing Hexagram Symbols
    * @param string
    * @return array
    */
    public static function Yijing_Hexagram_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Yijing_Hexagram_Symbols['regex'], $string) > 0),
            'block1'=> self::Yijing_Hexagram_Symbols['block1'],
            'block2'=> self::Yijing_Hexagram_Symbols['block2'],
            'Unicode_name'=>self::Yijing_Hexagram_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Yijing_Hexagram_Symbols['block1'], self::Yijing_Hexagram_Symbols['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs['block1'],
            'block2'=> self::CJK_Unified_Ideographs['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs['block1'], self::CJK_Unified_Ideographs['block2'])
            ),
        );
    }


    /**
    * Check Yi Syllables
    * @param string
    * @return array
    */
    public static function Yi_Syllables(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Yi_Syllables['regex'], $string) > 0),
            'block1'=> self::Yi_Syllables['block1'],
            'block2'=> self::Yi_Syllables['block2'],
            'Unicode_name'=>self::Yi_Syllables['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Yi_Syllables['block1'], self::Yi_Syllables['block2'])
            ),
        );
    }


    /**
    * Check Yi Radicals
    * @param string
    * @return array
    */
    public static function Yi_Radicals(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Yi_Radicals['regex'], $string) > 0),
            'block1'=> self::Yi_Radicals['block1'],
            'block2'=> self::Yi_Radicals['block2'],
            'Unicode_name'=>self::Yi_Radicals['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Yi_Radicals['block1'], self::Yi_Radicals['block2'])
            ),
        );
    }


    /**
    * Check Lisu
    * @param string
    * @return array
    */
    public static function Lisu(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Lisu['regex'], $string) > 0),
            'block1'=> self::Lisu['block1'],
            'block2'=> self::Lisu['block2'],
            'Unicode_name'=>self::Lisu['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Lisu['block1'], self::Lisu['block2'])
            ),
        );
    }


    /**
    * Check Vai
    * @param string
    * @return array
    */
    public static function Vai(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Vai['regex'], $string) > 0),
            'block1'=> self::Vai['block1'],
            'block2'=> self::Vai['block2'],
            'Unicode_name'=>self::Vai['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Vai['block1'], self::Vai['block2'])
            ),
        );
    }


    /**
    * Check Cyrillic Extended-B
    * @param string
    * @return array
    */
    public static function Cyrillic_Extended_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cyrillic_Extended_B['regex'], $string) > 0),
            'block1'=> self::Cyrillic_Extended_B['block1'],
            'block2'=> self::Cyrillic_Extended_B['block2'],
            'Unicode_name'=>self::Cyrillic_Extended_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cyrillic_Extended_B['block1'], self::Cyrillic_Extended_B['block2'])
            ),
        );
    }


    /**
    * Check Bamum
    * @param string
    * @return array
    */
    public static function Bamum(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bamum['regex'], $string) > 0),
            'block1'=> self::Bamum['block1'],
            'block2'=> self::Bamum['block2'],
            'Unicode_name'=>self::Bamum['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bamum['block1'], self::Bamum['block2'])
            ),
        );
    }


    /**
    * Check Modifier Tone Letters
    * @param string
    * @return array
    */
    public static function Modifier_Tone_Letters(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Modifier_Tone_Letters['regex'], $string) > 0),
            'block1'=> self::Modifier_Tone_Letters['block1'],
            'block2'=> self::Modifier_Tone_Letters['block2'],
            'Unicode_name'=>self::Modifier_Tone_Letters['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Modifier_Tone_Letters['block1'], self::Modifier_Tone_Letters['block2'])
            ),
        );
    }


    /**
    * Check Latin Extended-D
    * @param string
    * @return array
    */
    public static function Latin_Extended_D(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_Extended_D['regex'], $string) > 0),
            'block1'=> self::Latin_Extended_D['block1'],
            'block2'=> self::Latin_Extended_D['block2'],
            'Unicode_name'=>self::Latin_Extended_D['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_Extended_D['block1'], self::Latin_Extended_D['block2'])
            ),
        );
    }


    /**
    * Check Syloti Nagri
    * @param string
    * @return array
    */
    public static function Syloti_Nagri(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Syloti_Nagri['regex'], $string) > 0),
            'block1'=> self::Syloti_Nagri['block1'],
            'block2'=> self::Syloti_Nagri['block2'],
            'Unicode_name'=>self::Syloti_Nagri['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Syloti_Nagri['block1'], self::Syloti_Nagri['block2'])
            ),
        );
    }


    /**
    * Check Common Indic Number Forms
    * @param string
    * @return array
    */
    public static function Common_Indic_Number_Forms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Common_Indic_Number_Forms['regex'], $string) > 0),
            'block1'=> self::Common_Indic_Number_Forms['block1'],
            'block2'=> self::Common_Indic_Number_Forms['block2'],
            'Unicode_name'=>self::Common_Indic_Number_Forms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Common_Indic_Number_Forms['block1'], self::Common_Indic_Number_Forms['block2'])
            ),
        );
    }


    /**
    * Check Phags-pa
    * @param string
    * @return array
    */
    public static function Phags_pa(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Phags_pa['regex'], $string) > 0),
            'block1'=> self::Phags_pa['block1'],
            'block2'=> self::Phags_pa['block2'],
            'Unicode_name'=>self::Phags_pa['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Phags_pa['block1'], self::Phags_pa['block2'])
            ),
        );
    }


    /**
    * Check Saurashtra
    * @param string
    * @return array
    */
    public static function Saurashtra(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Saurashtra['regex'], $string) > 0),
            'block1'=> self::Saurashtra['block1'],
            'block2'=> self::Saurashtra['block2'],
            'Unicode_name'=>self::Saurashtra['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Saurashtra['block1'], self::Saurashtra['block2'])
            ),
        );
    }


    /**
    * Check Devanagari Extended
    * @param string
    * @return array
    */
    public static function Devanagari_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Devanagari_Extended['regex'], $string) > 0),
            'block1'=> self::Devanagari_Extended['block1'],
            'block2'=> self::Devanagari_Extended['block2'],
            'Unicode_name'=>self::Devanagari_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Devanagari_Extended['block1'], self::Devanagari_Extended['block2'])
            ),
        );
    }


    /**
    * Check Kayah Li
    * @param string
    * @return array
    */
    public static function Kayah_Li(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kayah_Li['regex'], $string) > 0),
            'block1'=> self::Kayah_Li['block1'],
            'block2'=> self::Kayah_Li['block2'],
            'Unicode_name'=>self::Kayah_Li['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kayah_Li['block1'], self::Kayah_Li['block2'])
            ),
        );
    }


    /**
    * Check Rejang
    * @param string
    * @return array
    */
    public static function Rejang(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Rejang['regex'], $string) > 0),
            'block1'=> self::Rejang['block1'],
            'block2'=> self::Rejang['block2'],
            'Unicode_name'=>self::Rejang['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Rejang['block1'], self::Rejang['block2'])
            ),
        );
    }


    /**
    * Check Hangul Jamo Extended-A
    * @param string
    * @return array
    */
    public static function Hangul_Jamo_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hangul_Jamo_Extended_A['regex'], $string) > 0),
            'block1'=> self::Hangul_Jamo_Extended_A['block1'],
            'block2'=> self::Hangul_Jamo_Extended_A['block2'],
            'Unicode_name'=>self::Hangul_Jamo_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hangul_Jamo_Extended_A['block1'], self::Hangul_Jamo_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Javanese
    * @param string
    * @return array
    */
    public static function Javanese(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Javanese['regex'], $string) > 0),
            'block1'=> self::Javanese['block1'],
            'block2'=> self::Javanese['block2'],
            'Unicode_name'=>self::Javanese['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Javanese['block1'], self::Javanese['block2'])
            ),
        );
    }


    /**
    * Check Myanmar Extended-B
    * @param string
    * @return array
    */
    public static function Myanmar_Extended_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Myanmar_Extended_B['regex'], $string) > 0),
            'block1'=> self::Myanmar_Extended_B['block1'],
            'block2'=> self::Myanmar_Extended_B['block2'],
            'Unicode_name'=>self::Myanmar_Extended_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Myanmar_Extended_B['block1'], self::Myanmar_Extended_B['block2'])
            ),
        );
    }


    /**
    * Check Cham
    * @param string
    * @return array
    */
    public static function Cham(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cham['regex'], $string) > 0),
            'block1'=> self::Cham['block1'],
            'block2'=> self::Cham['block2'],
            'Unicode_name'=>self::Cham['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cham['block1'], self::Cham['block2'])
            ),
        );
    }


    /**
    * Check Myanmar Extended-A
    * @param string
    * @return array
    */
    public static function Myanmar_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Myanmar_Extended_A['regex'], $string) > 0),
            'block1'=> self::Myanmar_Extended_A['block1'],
            'block2'=> self::Myanmar_Extended_A['block2'],
            'Unicode_name'=>self::Myanmar_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Myanmar_Extended_A['block1'], self::Myanmar_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Tai Viet
    * @param string
    * @return array
    */
    public static function Tai_Viet(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tai_Viet['regex'], $string) > 0),
            'block1'=> self::Tai_Viet['block1'],
            'block2'=> self::Tai_Viet['block2'],
            'Unicode_name'=>self::Tai_Viet['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tai_Viet['block1'], self::Tai_Viet['block2'])
            ),
        );
    }


    /**
    * Check Meetei Mayek Extensions
    * @param string
    * @return array
    */
    public static function Meetei_Mayek_Extensions(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Meetei_Mayek_Extensions['regex'], $string) > 0),
            'block1'=> self::Meetei_Mayek_Extensions['block1'],
            'block2'=> self::Meetei_Mayek_Extensions['block2'],
            'Unicode_name'=>self::Meetei_Mayek_Extensions['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Meetei_Mayek_Extensions['block1'], self::Meetei_Mayek_Extensions['block2'])
            ),
        );
    }


    /**
    * Check Ethiopic Extended-A
    * @param string
    * @return array
    */
    public static function Ethiopic_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ethiopic_Extended_A['regex'], $string) > 0),
            'block1'=> self::Ethiopic_Extended_A['block1'],
            'block2'=> self::Ethiopic_Extended_A['block2'],
            'Unicode_name'=>self::Ethiopic_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ethiopic_Extended_A['block1'], self::Ethiopic_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Latin Extended-E
    * @param string
    * @return array
    */
    public static function Latin_Extended_E(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Latin_Extended_E['regex'], $string) > 0),
            'block1'=> self::Latin_Extended_E['block1'],
            'block2'=> self::Latin_Extended_E['block2'],
            'Unicode_name'=>self::Latin_Extended_E['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Latin_Extended_E['block1'], self::Latin_Extended_E['block2'])
            ),
        );
    }


    /**
    * Check Cherokee Supplement
    * @param string
    * @return array
    */
    public static function Cherokee_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cherokee_Supplement['regex'], $string) > 0),
            'block1'=> self::Cherokee_Supplement['block1'],
            'block2'=> self::Cherokee_Supplement['block2'],
            'Unicode_name'=>self::Cherokee_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cherokee_Supplement['block1'], self::Cherokee_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Meetei Mayek
    * @param string
    * @return array
    */
    public static function Meetei_Mayek(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Meetei_Mayek['regex'], $string) > 0),
            'block1'=> self::Meetei_Mayek['block1'],
            'block2'=> self::Meetei_Mayek['block2'],
            'Unicode_name'=>self::Meetei_Mayek['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Meetei_Mayek['block1'], self::Meetei_Mayek['block2'])
            ),
        );
    }


    /**
    * Check Hangul Syllables
    * @param string
    * @return array
    */
    public static function Hangul_Syllables(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hangul_Syllables['regex'], $string) > 0),
            'block1'=> self::Hangul_Syllables['block1'],
            'block2'=> self::Hangul_Syllables['block2'],
            'Unicode_name'=>self::Hangul_Syllables['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hangul_Syllables['block1'], self::Hangul_Syllables['block2'])
            ),
        );
    }


    /**
    * Check Hangul Jamo Extended-B
    * @param string
    * @return array
    */
    public static function Hangul_Jamo_Extended_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hangul_Jamo_Extended_B['regex'], $string) > 0),
            'block1'=> self::Hangul_Jamo_Extended_B['block1'],
            'block2'=> self::Hangul_Jamo_Extended_B['block2'],
            'Unicode_name'=>self::Hangul_Jamo_Extended_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hangul_Jamo_Extended_B['block1'], self::Hangul_Jamo_Extended_B['block2'])
            ),
        );
    }


    /**
    * Check High Surrogates
    * @param string
    * @return array
    */
    public static function High_Surrogates(string $string): array
    {
        return array(
            'is'        => (preg_match(self::High_Surrogates['regex'], $string) > 0),
            'block1'=> self::High_Surrogates['block1'],
            'block2'=> self::High_Surrogates['block2'],
            'Unicode_name'=>self::High_Surrogates['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::High_Surrogates['block1'], self::High_Surrogates['block2'])
            ),
        );
    }


    /**
    * Check High Private Use Surrogates
    * @param string
    * @return array
    */
    public static function High_Private_Use_Surrogates(string $string): array
    {
        return array(
            'is'        => (preg_match(self::High_Private_Use_Surrogates['regex'], $string) > 0),
            'block1'=> self::High_Private_Use_Surrogates['block1'],
            'block2'=> self::High_Private_Use_Surrogates['block2'],
            'Unicode_name'=>self::High_Private_Use_Surrogates['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::High_Private_Use_Surrogates['block1'], self::High_Private_Use_Surrogates['block2'])
            ),
        );
    }


    /**
    * Check Low Surrogates
    * @param string
    * @return array
    */
    public static function Low_Surrogates(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Low_Surrogates['regex'], $string) > 0),
            'block1'=> self::Low_Surrogates['block1'],
            'block2'=> self::Low_Surrogates['block2'],
            'Unicode_name'=>self::Low_Surrogates['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Low_Surrogates['block1'], self::Low_Surrogates['block2'])
            ),
        );
    }


    /**
    * Check Private Use Area
    * @param string
    * @return array
    */
    public static function Private_Use_Area(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Private_Use_Area['regex'], $string) > 0),
            'block1'=> self::Private_Use_Area['block1'],
            'block2'=> self::Private_Use_Area['block2'],
            'Unicode_name'=>self::Private_Use_Area['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Private_Use_Area['block1'], self::Private_Use_Area['block2'])
            ),
        );
    }


    /**
    * Check CJK Compatibility Ideographs
    * @param string
    * @return array
    */
    public static function CJK_Compatibility_Ideographs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Compatibility_Ideographs['regex'], $string) > 0),
            'block1'=> self::CJK_Compatibility_Ideographs['block1'],
            'block2'=> self::CJK_Compatibility_Ideographs['block2'],
            'Unicode_name'=>self::CJK_Compatibility_Ideographs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Compatibility_Ideographs['block1'], self::CJK_Compatibility_Ideographs['block2'])
            ),
        );
    }


    /**
    * Check Alphabetic Presentation Forms
    * @param string
    * @return array
    */
    public static function Alphabetic_Presentation_Forms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Alphabetic_Presentation_Forms['regex'], $string) > 0),
            'block1'=> self::Alphabetic_Presentation_Forms['block1'],
            'block2'=> self::Alphabetic_Presentation_Forms['block2'],
            'Unicode_name'=>self::Alphabetic_Presentation_Forms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Alphabetic_Presentation_Forms['block1'], self::Alphabetic_Presentation_Forms['block2'])
            ),
        );
    }


    /**
    * Check Arabic Presentation Forms-A
    * @param string
    * @return array
    */
    public static function Arabic_Presentation_Forms_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arabic_Presentation_Forms_A['regex'], $string) > 0),
            'block1'=> self::Arabic_Presentation_Forms_A['block1'],
            'block2'=> self::Arabic_Presentation_Forms_A['block2'],
            'Unicode_name'=>self::Arabic_Presentation_Forms_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arabic_Presentation_Forms_A['block1'], self::Arabic_Presentation_Forms_A['block2'])
            ),
        );
    }


    /**
    * Check Variation Selectors
    * @param string
    * @return array
    */
    public static function Variation_Selectors(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Variation_Selectors['regex'], $string) > 0),
            'block1'=> self::Variation_Selectors['block1'],
            'block2'=> self::Variation_Selectors['block2'],
            'Unicode_name'=>self::Variation_Selectors['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Variation_Selectors['block1'], self::Variation_Selectors['block2'])
            ),
        );
    }


    /**
    * Check Vertical Forms
    * @param string
    * @return array
    */
    public static function Vertical_Forms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Vertical_Forms['regex'], $string) > 0),
            'block1'=> self::Vertical_Forms['block1'],
            'block2'=> self::Vertical_Forms['block2'],
            'Unicode_name'=>self::Vertical_Forms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Vertical_Forms['block1'], self::Vertical_Forms['block2'])
            ),
        );
    }


    /**
    * Check Combining Half Marks
    * @param string
    * @return array
    */
    public static function Combining_Half_Marks(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Combining_Half_Marks['regex'], $string) > 0),
            'block1'=> self::Combining_Half_Marks['block1'],
            'block2'=> self::Combining_Half_Marks['block2'],
            'Unicode_name'=>self::Combining_Half_Marks['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Combining_Half_Marks['block1'], self::Combining_Half_Marks['block2'])
            ),
        );
    }


    /**
    * Check CJK Compatibility Forms
    * @param string
    * @return array
    */
    public static function CJK_Compatibility_Forms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Compatibility_Forms['regex'], $string) > 0),
            'block1'=> self::CJK_Compatibility_Forms['block1'],
            'block2'=> self::CJK_Compatibility_Forms['block2'],
            'Unicode_name'=>self::CJK_Compatibility_Forms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Compatibility_Forms['block1'], self::CJK_Compatibility_Forms['block2'])
            ),
        );
    }


    /**
    * Check Small Form Variants
    * @param string
    * @return array
    */
    public static function Small_Form_Variants(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Small_Form_Variants['regex'], $string) > 0),
            'block1'=> self::Small_Form_Variants['block1'],
            'block2'=> self::Small_Form_Variants['block2'],
            'Unicode_name'=>self::Small_Form_Variants['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Small_Form_Variants['block1'], self::Small_Form_Variants['block2'])
            ),
        );
    }


    /**
    * Check Arabic Presentation Forms-B
    * @param string
    * @return array
    */
    public static function Arabic_Presentation_Forms_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arabic_Presentation_Forms_B['regex'], $string) > 0),
            'block1'=> self::Arabic_Presentation_Forms_B['block1'],
            'block2'=> self::Arabic_Presentation_Forms_B['block2'],
            'Unicode_name'=>self::Arabic_Presentation_Forms_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arabic_Presentation_Forms_B['block1'], self::Arabic_Presentation_Forms_B['block2'])
            ),
        );
    }


    /**
    * Check Halfwidth And Fullwidth Forms
    * @param string
    * @return array
    */
    public static function Halfwidth_And_Fullwidth_Forms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Halfwidth_And_Fullwidth_Forms['regex'], $string) > 0),
            'block1'=> self::Halfwidth_And_Fullwidth_Forms['block1'],
            'block2'=> self::Halfwidth_And_Fullwidth_Forms['block2'],
            'Unicode_name'=>self::Halfwidth_And_Fullwidth_Forms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Halfwidth_And_Fullwidth_Forms['block1'], self::Halfwidth_And_Fullwidth_Forms['block2'])
            ),
        );
    }


    /**
    * Check Specials
    * @param string
    * @return array
    */
    public static function Specials(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Specials['regex'], $string) > 0),
            'block1'=> self::Specials['block1'],
            'block2'=> self::Specials['block2'],
            'Unicode_name'=>self::Specials['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Specials['block1'], self::Specials['block2'])
            ),
        );
    }


    /**
    * Check Linear B Syllabary
    * @param string
    * @return array
    */
    public static function Linear_B_Syllabary(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Linear_B_Syllabary['regex'], $string) > 0),
            'block1'=> self::Linear_B_Syllabary['block1'],
            'block2'=> self::Linear_B_Syllabary['block2'],
            'Unicode_name'=>self::Linear_B_Syllabary['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Linear_B_Syllabary['block1'], self::Linear_B_Syllabary['block2'])
            ),
        );
    }


    /**
    * Check Linear B Ideograms
    * @param string
    * @return array
    */
    public static function Linear_B_Ideograms(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Linear_B_Ideograms['regex'], $string) > 0),
            'block1'=> self::Linear_B_Ideograms['block1'],
            'block2'=> self::Linear_B_Ideograms['block2'],
            'Unicode_name'=>self::Linear_B_Ideograms['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Linear_B_Ideograms['block1'], self::Linear_B_Ideograms['block2'])
            ),
        );
    }


    /**
    * Check Aegean Numbers
    * @param string
    * @return array
    */
    public static function Aegean_Numbers(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Aegean_Numbers['regex'], $string) > 0),
            'block1'=> self::Aegean_Numbers['block1'],
            'block2'=> self::Aegean_Numbers['block2'],
            'Unicode_name'=>self::Aegean_Numbers['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Aegean_Numbers['block1'], self::Aegean_Numbers['block2'])
            ),
        );
    }


    /**
    * Check Ancient Greek Numbers
    * @param string
    * @return array
    */
    public static function Ancient_Greek_Numbers(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ancient_Greek_Numbers['regex'], $string) > 0),
            'block1'=> self::Ancient_Greek_Numbers['block1'],
            'block2'=> self::Ancient_Greek_Numbers['block2'],
            'Unicode_name'=>self::Ancient_Greek_Numbers['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ancient_Greek_Numbers['block1'], self::Ancient_Greek_Numbers['block2'])
            ),
        );
    }


    /**
    * Check Ancient Symbols
    * @param string
    * @return array
    */
    public static function Ancient_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ancient_Symbols['regex'], $string) > 0),
            'block1'=> self::Ancient_Symbols['block1'],
            'block2'=> self::Ancient_Symbols['block2'],
            'Unicode_name'=>self::Ancient_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ancient_Symbols['block1'], self::Ancient_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Phaistos Disc
    * @param string
    * @return array
    */
    public static function Phaistos_Disc(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Phaistos_Disc['regex'], $string) > 0),
            'block1'=> self::Phaistos_Disc['block1'],
            'block2'=> self::Phaistos_Disc['block2'],
            'Unicode_name'=>self::Phaistos_Disc['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Phaistos_Disc['block1'], self::Phaistos_Disc['block2'])
            ),
        );
    }


    /**
    * Check Lycian
    * @param string
    * @return array
    */
    public static function Lycian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Lycian['regex'], $string) > 0),
            'block1'=> self::Lycian['block1'],
            'block2'=> self::Lycian['block2'],
            'Unicode_name'=>self::Lycian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Lycian['block1'], self::Lycian['block2'])
            ),
        );
    }


    /**
    * Check Carian
    * @param string
    * @return array
    */
    public static function Carian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Carian['regex'], $string) > 0),
            'block1'=> self::Carian['block1'],
            'block2'=> self::Carian['block2'],
            'Unicode_name'=>self::Carian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Carian['block1'], self::Carian['block2'])
            ),
        );
    }


    /**
    * Check Coptic Epact Numbers
    * @param string
    * @return array
    */
    public static function Coptic_Epact_Numbers(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Coptic_Epact_Numbers['regex'], $string) > 0),
            'block1'=> self::Coptic_Epact_Numbers['block1'],
            'block2'=> self::Coptic_Epact_Numbers['block2'],
            'Unicode_name'=>self::Coptic_Epact_Numbers['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Coptic_Epact_Numbers['block1'], self::Coptic_Epact_Numbers['block2'])
            ),
        );
    }


    /**
    * Check Old Italic
    * @param string
    * @return array
    */
    public static function Old_Italic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_Italic['regex'], $string) > 0),
            'block1'=> self::Old_Italic['block1'],
            'block2'=> self::Old_Italic['block2'],
            'Unicode_name'=>self::Old_Italic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_Italic['block1'], self::Old_Italic['block2'])
            ),
        );
    }


    /**
    * Check Gothic
    * @param string
    * @return array
    */
    public static function Gothic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Gothic['regex'], $string) > 0),
            'block1'=> self::Gothic['block1'],
            'block2'=> self::Gothic['block2'],
            'Unicode_name'=>self::Gothic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Gothic['block1'], self::Gothic['block2'])
            ),
        );
    }


    /**
    * Check Old Permic
    * @param string
    * @return array
    */
    public static function Old_Permic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_Permic['regex'], $string) > 0),
            'block1'=> self::Old_Permic['block1'],
            'block2'=> self::Old_Permic['block2'],
            'Unicode_name'=>self::Old_Permic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_Permic['block1'], self::Old_Permic['block2'])
            ),
        );
    }


    /**
    * Check Ugaritic
    * @param string
    * @return array
    */
    public static function Ugaritic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ugaritic['regex'], $string) > 0),
            'block1'=> self::Ugaritic['block1'],
            'block2'=> self::Ugaritic['block2'],
            'Unicode_name'=>self::Ugaritic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ugaritic['block1'], self::Ugaritic['block2'])
            ),
        );
    }


    /**
    * Check Old Persian
    * @param string
    * @return array
    */
    public static function Old_Persian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_Persian['regex'], $string) > 0),
            'block1'=> self::Old_Persian['block1'],
            'block2'=> self::Old_Persian['block2'],
            'Unicode_name'=>self::Old_Persian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_Persian['block1'], self::Old_Persian['block2'])
            ),
        );
    }


    /**
    * Check Deseret
    * @param string
    * @return array
    */
    public static function Deseret(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Deseret['regex'], $string) > 0),
            'block1'=> self::Deseret['block1'],
            'block2'=> self::Deseret['block2'],
            'Unicode_name'=>self::Deseret['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Deseret['block1'], self::Deseret['block2'])
            ),
        );
    }


    /**
    * Check Shavian
    * @param string
    * @return array
    */
    public static function Shavian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Shavian['regex'], $string) > 0),
            'block1'=> self::Shavian['block1'],
            'block2'=> self::Shavian['block2'],
            'Unicode_name'=>self::Shavian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Shavian['block1'], self::Shavian['block2'])
            ),
        );
    }


    /**
    * Check Osmanya
    * @param string
    * @return array
    */
    public static function Osmanya(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Osmanya['regex'], $string) > 0),
            'block1'=> self::Osmanya['block1'],
            'block2'=> self::Osmanya['block2'],
            'Unicode_name'=>self::Osmanya['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Osmanya['block1'], self::Osmanya['block2'])
            ),
        );
    }


    /**
    * Check Osage
    * @param string
    * @return array
    */
    public static function Osage(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Osage['regex'], $string) > 0),
            'block1'=> self::Osage['block1'],
            'block2'=> self::Osage['block2'],
            'Unicode_name'=>self::Osage['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Osage['block1'], self::Osage['block2'])
            ),
        );
    }


    /**
    * Check Elbasan
    * @param string
    * @return array
    */
    public static function Elbasan(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Elbasan['regex'], $string) > 0),
            'block1'=> self::Elbasan['block1'],
            'block2'=> self::Elbasan['block2'],
            'Unicode_name'=>self::Elbasan['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Elbasan['block1'], self::Elbasan['block2'])
            ),
        );
    }


    /**
    * Check Caucasian Albanian
    * @param string
    * @return array
    */
    public static function Caucasian_Albanian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Caucasian_Albanian['regex'], $string) > 0),
            'block1'=> self::Caucasian_Albanian['block1'],
            'block2'=> self::Caucasian_Albanian['block2'],
            'Unicode_name'=>self::Caucasian_Albanian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Caucasian_Albanian['block1'], self::Caucasian_Albanian['block2'])
            ),
        );
    }


    /**
    * Check Linear A
    * @param string
    * @return array
    */
    public static function Linear_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Linear_A['regex'], $string) > 0),
            'block1'=> self::Linear_A['block1'],
            'block2'=> self::Linear_A['block2'],
            'Unicode_name'=>self::Linear_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Linear_A['block1'], self::Linear_A['block2'])
            ),
        );
    }


    /**
    * Check Cypriot Syllabary
    * @param string
    * @return array
    */
    public static function Cypriot_Syllabary(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cypriot_Syllabary['regex'], $string) > 0),
            'block1'=> self::Cypriot_Syllabary['block1'],
            'block2'=> self::Cypriot_Syllabary['block2'],
            'Unicode_name'=>self::Cypriot_Syllabary['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cypriot_Syllabary['block1'], self::Cypriot_Syllabary['block2'])
            ),
        );
    }


    /**
    * Check Imperial Aramaic
    * @param string
    * @return array
    */
    public static function Imperial_Aramaic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Imperial_Aramaic['regex'], $string) > 0),
            'block1'=> self::Imperial_Aramaic['block1'],
            'block2'=> self::Imperial_Aramaic['block2'],
            'Unicode_name'=>self::Imperial_Aramaic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Imperial_Aramaic['block1'], self::Imperial_Aramaic['block2'])
            ),
        );
    }


    /**
    * Check Palmyrene
    * @param string
    * @return array
    */
    public static function Palmyrene(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Palmyrene['regex'], $string) > 0),
            'block1'=> self::Palmyrene['block1'],
            'block2'=> self::Palmyrene['block2'],
            'Unicode_name'=>self::Palmyrene['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Palmyrene['block1'], self::Palmyrene['block2'])
            ),
        );
    }


    /**
    * Check Nabataean
    * @param string
    * @return array
    */
    public static function Nabataean(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Nabataean['regex'], $string) > 0),
            'block1'=> self::Nabataean['block1'],
            'block2'=> self::Nabataean['block2'],
            'Unicode_name'=>self::Nabataean['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Nabataean['block1'], self::Nabataean['block2'])
            ),
        );
    }


    /**
    * Check Hatran
    * @param string
    * @return array
    */
    public static function Hatran(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Hatran['regex'], $string) > 0),
            'block1'=> self::Hatran['block1'],
            'block2'=> self::Hatran['block2'],
            'Unicode_name'=>self::Hatran['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Hatran['block1'], self::Hatran['block2'])
            ),
        );
    }


    /**
    * Check Phoenician
    * @param string
    * @return array
    */
    public static function Phoenician(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Phoenician['regex'], $string) > 0),
            'block1'=> self::Phoenician['block1'],
            'block2'=> self::Phoenician['block2'],
            'Unicode_name'=>self::Phoenician['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Phoenician['block1'], self::Phoenician['block2'])
            ),
        );
    }


    /**
    * Check Lydian
    * @param string
    * @return array
    */
    public static function Lydian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Lydian['regex'], $string) > 0),
            'block1'=> self::Lydian['block1'],
            'block2'=> self::Lydian['block2'],
            'Unicode_name'=>self::Lydian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Lydian['block1'], self::Lydian['block2'])
            ),
        );
    }


    /**
    * Check Meroitic Hieroglyphs
    * @param string
    * @return array
    */
    public static function Meroitic_Hieroglyphs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Meroitic_Hieroglyphs['regex'], $string) > 0),
            'block1'=> self::Meroitic_Hieroglyphs['block1'],
            'block2'=> self::Meroitic_Hieroglyphs['block2'],
            'Unicode_name'=>self::Meroitic_Hieroglyphs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Meroitic_Hieroglyphs['block1'], self::Meroitic_Hieroglyphs['block2'])
            ),
        );
    }


    /**
    * Check Meroitic Cursive
    * @param string
    * @return array
    */
    public static function Meroitic_Cursive(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Meroitic_Cursive['regex'], $string) > 0),
            'block1'=> self::Meroitic_Cursive['block1'],
            'block2'=> self::Meroitic_Cursive['block2'],
            'Unicode_name'=>self::Meroitic_Cursive['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Meroitic_Cursive['block1'], self::Meroitic_Cursive['block2'])
            ),
        );
    }


    /**
    * Check Kharoshthi
    * @param string
    * @return array
    */
    public static function Kharoshthi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kharoshthi['regex'], $string) > 0),
            'block1'=> self::Kharoshthi['block1'],
            'block2'=> self::Kharoshthi['block2'],
            'Unicode_name'=>self::Kharoshthi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kharoshthi['block1'], self::Kharoshthi['block2'])
            ),
        );
    }


    /**
    * Check Old South Arabian
    * @param string
    * @return array
    */
    public static function Old_South_Arabian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_South_Arabian['regex'], $string) > 0),
            'block1'=> self::Old_South_Arabian['block1'],
            'block2'=> self::Old_South_Arabian['block2'],
            'Unicode_name'=>self::Old_South_Arabian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_South_Arabian['block1'], self::Old_South_Arabian['block2'])
            ),
        );
    }


    /**
    * Check Old North Arabian
    * @param string
    * @return array
    */
    public static function Old_North_Arabian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_North_Arabian['regex'], $string) > 0),
            'block1'=> self::Old_North_Arabian['block1'],
            'block2'=> self::Old_North_Arabian['block2'],
            'Unicode_name'=>self::Old_North_Arabian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_North_Arabian['block1'], self::Old_North_Arabian['block2'])
            ),
        );
    }


    /**
    * Check Manichaean
    * @param string
    * @return array
    */
    public static function Manichaean(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Manichaean['regex'], $string) > 0),
            'block1'=> self::Manichaean['block1'],
            'block2'=> self::Manichaean['block2'],
            'Unicode_name'=>self::Manichaean['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Manichaean['block1'], self::Manichaean['block2'])
            ),
        );
    }


    /**
    * Check Avestan
    * @param string
    * @return array
    */
    public static function Avestan(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Avestan['regex'], $string) > 0),
            'block1'=> self::Avestan['block1'],
            'block2'=> self::Avestan['block2'],
            'Unicode_name'=>self::Avestan['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Avestan['block1'], self::Avestan['block2'])
            ),
        );
    }


    /**
    * Check Inscriptional Parthian
    * @param string
    * @return array
    */
    public static function Inscriptional_Parthian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Inscriptional_Parthian['regex'], $string) > 0),
            'block1'=> self::Inscriptional_Parthian['block1'],
            'block2'=> self::Inscriptional_Parthian['block2'],
            'Unicode_name'=>self::Inscriptional_Parthian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Inscriptional_Parthian['block1'], self::Inscriptional_Parthian['block2'])
            ),
        );
    }


    /**
    * Check Inscriptional Pahlavi
    * @param string
    * @return array
    */
    public static function Inscriptional_Pahlavi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Inscriptional_Pahlavi['regex'], $string) > 0),
            'block1'=> self::Inscriptional_Pahlavi['block1'],
            'block2'=> self::Inscriptional_Pahlavi['block2'],
            'Unicode_name'=>self::Inscriptional_Pahlavi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Inscriptional_Pahlavi['block1'], self::Inscriptional_Pahlavi['block2'])
            ),
        );
    }


    /**
    * Check Psalter Pahlavi
    * @param string
    * @return array
    */
    public static function Psalter_Pahlavi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Psalter_Pahlavi['regex'], $string) > 0),
            'block1'=> self::Psalter_Pahlavi['block1'],
            'block2'=> self::Psalter_Pahlavi['block2'],
            'Unicode_name'=>self::Psalter_Pahlavi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Psalter_Pahlavi['block1'], self::Psalter_Pahlavi['block2'])
            ),
        );
    }


    /**
    * Check Old Turkic
    * @param string
    * @return array
    */
    public static function Old_Turkic(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_Turkic['regex'], $string) > 0),
            'block1'=> self::Old_Turkic['block1'],
            'block2'=> self::Old_Turkic['block2'],
            'Unicode_name'=>self::Old_Turkic['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_Turkic['block1'], self::Old_Turkic['block2'])
            ),
        );
    }


    /**
    * Check Old Hungarian
    * @param string
    * @return array
    */
    public static function Old_Hungarian(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Old_Hungarian['regex'], $string) > 0),
            'block1'=> self::Old_Hungarian['block1'],
            'block2'=> self::Old_Hungarian['block2'],
            'Unicode_name'=>self::Old_Hungarian['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Old_Hungarian['block1'], self::Old_Hungarian['block2'])
            ),
        );
    }


    /**
    * Check Rumi Numeral Symbols
    * @param string
    * @return array
    */
    public static function Rumi_Numeral_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Rumi_Numeral_Symbols['regex'], $string) > 0),
            'block1'=> self::Rumi_Numeral_Symbols['block1'],
            'block2'=> self::Rumi_Numeral_Symbols['block2'],
            'Unicode_name'=>self::Rumi_Numeral_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Rumi_Numeral_Symbols['block1'], self::Rumi_Numeral_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Brahmi
    * @param string
    * @return array
    */
    public static function Brahmi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Brahmi['regex'], $string) > 0),
            'block1'=> self::Brahmi['block1'],
            'block2'=> self::Brahmi['block2'],
            'Unicode_name'=>self::Brahmi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Brahmi['block1'], self::Brahmi['block2'])
            ),
        );
    }


    /**
    * Check Kaithi
    * @param string
    * @return array
    */
    public static function Kaithi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kaithi['regex'], $string) > 0),
            'block1'=> self::Kaithi['block1'],
            'block2'=> self::Kaithi['block2'],
            'Unicode_name'=>self::Kaithi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kaithi['block1'], self::Kaithi['block2'])
            ),
        );
    }


    /**
    * Check Sora Sompeng
    * @param string
    * @return array
    */
    public static function Sora_Sompeng(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sora_Sompeng['regex'], $string) > 0),
            'block1'=> self::Sora_Sompeng['block1'],
            'block2'=> self::Sora_Sompeng['block2'],
            'Unicode_name'=>self::Sora_Sompeng['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sora_Sompeng['block1'], self::Sora_Sompeng['block2'])
            ),
        );
    }


    /**
    * Check Chakma
    * @param string
    * @return array
    */
    public static function Chakma(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Chakma['regex'], $string) > 0),
            'block1'=> self::Chakma['block1'],
            'block2'=> self::Chakma['block2'],
            'Unicode_name'=>self::Chakma['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Chakma['block1'], self::Chakma['block2'])
            ),
        );
    }


    /**
    * Check Mahajani
    * @param string
    * @return array
    */
    public static function Mahajani(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mahajani['regex'], $string) > 0),
            'block1'=> self::Mahajani['block1'],
            'block2'=> self::Mahajani['block2'],
            'Unicode_name'=>self::Mahajani['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mahajani['block1'], self::Mahajani['block2'])
            ),
        );
    }


    /**
    * Check Sharada
    * @param string
    * @return array
    */
    public static function Sharada(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sharada['regex'], $string) > 0),
            'block1'=> self::Sharada['block1'],
            'block2'=> self::Sharada['block2'],
            'Unicode_name'=>self::Sharada['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sharada['block1'], self::Sharada['block2'])
            ),
        );
    }


    /**
    * Check Sinhala Archaic Numbers
    * @param string
    * @return array
    */
    public static function Sinhala_Archaic_Numbers(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sinhala_Archaic_Numbers['regex'], $string) > 0),
            'block1'=> self::Sinhala_Archaic_Numbers['block1'],
            'block2'=> self::Sinhala_Archaic_Numbers['block2'],
            'Unicode_name'=>self::Sinhala_Archaic_Numbers['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sinhala_Archaic_Numbers['block1'], self::Sinhala_Archaic_Numbers['block2'])
            ),
        );
    }


    /**
    * Check Khojki
    * @param string
    * @return array
    */
    public static function Khojki(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Khojki['regex'], $string) > 0),
            'block1'=> self::Khojki['block1'],
            'block2'=> self::Khojki['block2'],
            'Unicode_name'=>self::Khojki['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Khojki['block1'], self::Khojki['block2'])
            ),
        );
    }


    /**
    * Check Multani
    * @param string
    * @return array
    */
    public static function Multani(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Multani['regex'], $string) > 0),
            'block1'=> self::Multani['block1'],
            'block2'=> self::Multani['block2'],
            'Unicode_name'=>self::Multani['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Multani['block1'], self::Multani['block2'])
            ),
        );
    }


    /**
    * Check Khudawadi
    * @param string
    * @return array
    */
    public static function Khudawadi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Khudawadi['regex'], $string) > 0),
            'block1'=> self::Khudawadi['block1'],
            'block2'=> self::Khudawadi['block2'],
            'Unicode_name'=>self::Khudawadi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Khudawadi['block1'], self::Khudawadi['block2'])
            ),
        );
    }


    /**
    * Check Grantha
    * @param string
    * @return array
    */
    public static function Grantha(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Grantha['regex'], $string) > 0),
            'block1'=> self::Grantha['block1'],
            'block2'=> self::Grantha['block2'],
            'Unicode_name'=>self::Grantha['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Grantha['block1'], self::Grantha['block2'])
            ),
        );
    }


    /**
    * Check Newa
    * @param string
    * @return array
    */
    public static function Newa(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Newa['regex'], $string) > 0),
            'block1'=> self::Newa['block1'],
            'block2'=> self::Newa['block2'],
            'Unicode_name'=>self::Newa['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Newa['block1'], self::Newa['block2'])
            ),
        );
    }


    /**
    * Check Tirhuta
    * @param string
    * @return array
    */
    public static function Tirhuta(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tirhuta['regex'], $string) > 0),
            'block1'=> self::Tirhuta['block1'],
            'block2'=> self::Tirhuta['block2'],
            'Unicode_name'=>self::Tirhuta['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tirhuta['block1'], self::Tirhuta['block2'])
            ),
        );
    }


    /**
    * Check Siddham
    * @param string
    * @return array
    */
    public static function Siddham(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Siddham['regex'], $string) > 0),
            'block1'=> self::Siddham['block1'],
            'block2'=> self::Siddham['block2'],
            'Unicode_name'=>self::Siddham['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Siddham['block1'], self::Siddham['block2'])
            ),
        );
    }


    /**
    * Check Modi
    * @param string
    * @return array
    */
    public static function Modi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Modi['regex'], $string) > 0),
            'block1'=> self::Modi['block1'],
            'block2'=> self::Modi['block2'],
            'Unicode_name'=>self::Modi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Modi['block1'], self::Modi['block2'])
            ),
        );
    }


    /**
    * Check Mongolian Supplement
    * @param string
    * @return array
    */
    public static function Mongolian_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mongolian_Supplement['regex'], $string) > 0),
            'block1'=> self::Mongolian_Supplement['block1'],
            'block2'=> self::Mongolian_Supplement['block2'],
            'Unicode_name'=>self::Mongolian_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mongolian_Supplement['block1'], self::Mongolian_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Takri
    * @param string
    * @return array
    */
    public static function Takri(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Takri['regex'], $string) > 0),
            'block1'=> self::Takri['block1'],
            'block2'=> self::Takri['block2'],
            'Unicode_name'=>self::Takri['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Takri['block1'], self::Takri['block2'])
            ),
        );
    }


    /**
    * Check Ahom
    * @param string
    * @return array
    */
    public static function Ahom(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ahom['regex'], $string) > 0),
            'block1'=> self::Ahom['block1'],
            'block2'=> self::Ahom['block2'],
            'Unicode_name'=>self::Ahom['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ahom['block1'], self::Ahom['block2'])
            ),
        );
    }


    /**
    * Check Warang Citi
    * @param string
    * @return array
    */
    public static function Warang_Citi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Warang_Citi['regex'], $string) > 0),
            'block1'=> self::Warang_Citi['block1'],
            'block2'=> self::Warang_Citi['block2'],
            'Unicode_name'=>self::Warang_Citi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Warang_Citi['block1'], self::Warang_Citi['block2'])
            ),
        );
    }


    /**
    * Check Zanabazar Square
    * @param string
    * @return array
    */
    public static function Zanabazar_Square(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Zanabazar_Square['regex'], $string) > 0),
            'block1'=> self::Zanabazar_Square['block1'],
            'block2'=> self::Zanabazar_Square['block2'],
            'Unicode_name'=>self::Zanabazar_Square['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Zanabazar_Square['block1'], self::Zanabazar_Square['block2'])
            ),
        );
    }


    /**
    * Check Soyombo
    * @param string
    * @return array
    */
    public static function Soyombo(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Soyombo['regex'], $string) > 0),
            'block1'=> self::Soyombo['block1'],
            'block2'=> self::Soyombo['block2'],
            'Unicode_name'=>self::Soyombo['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Soyombo['block1'], self::Soyombo['block2'])
            ),
        );
    }


    /**
    * Check Pau Cin Hau
    * @param string
    * @return array
    */
    public static function Pau_Cin_Hau(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Pau_Cin_Hau['regex'], $string) > 0),
            'block1'=> self::Pau_Cin_Hau['block1'],
            'block2'=> self::Pau_Cin_Hau['block2'],
            'Unicode_name'=>self::Pau_Cin_Hau['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Pau_Cin_Hau['block1'], self::Pau_Cin_Hau['block2'])
            ),
        );
    }


    /**
    * Check Bhaiksuki
    * @param string
    * @return array
    */
    public static function Bhaiksuki(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bhaiksuki['regex'], $string) > 0),
            'block1'=> self::Bhaiksuki['block1'],
            'block2'=> self::Bhaiksuki['block2'],
            'Unicode_name'=>self::Bhaiksuki['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bhaiksuki['block1'], self::Bhaiksuki['block2'])
            ),
        );
    }


    /**
    * Check Marchen
    * @param string
    * @return array
    */
    public static function Marchen(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Marchen['regex'], $string) > 0),
            'block1'=> self::Marchen['block1'],
            'block2'=> self::Marchen['block2'],
            'Unicode_name'=>self::Marchen['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Marchen['block1'], self::Marchen['block2'])
            ),
        );
    }


    /**
    * Check Masaram Gondi
    * @param string
    * @return array
    */
    public static function Masaram_Gondi(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Masaram_Gondi['regex'], $string) > 0),
            'block1'=> self::Masaram_Gondi['block1'],
            'block2'=> self::Masaram_Gondi['block2'],
            'Unicode_name'=>self::Masaram_Gondi['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Masaram_Gondi['block1'], self::Masaram_Gondi['block2'])
            ),
        );
    }


    /**
    * Check Cuneiform
    * @param string
    * @return array
    */
    public static function Cuneiform(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cuneiform['regex'], $string) > 0),
            'block1'=> self::Cuneiform['block1'],
            'block2'=> self::Cuneiform['block2'],
            'Unicode_name'=>self::Cuneiform['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cuneiform['block1'], self::Cuneiform['block2'])
            ),
        );
    }


    /**
    * Check Cuneiform Numbers And Punctuation
    * @param string
    * @return array
    */
    public static function Cuneiform_Numbers_And_Punctuation(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Cuneiform_Numbers_And_Punctuation['regex'], $string) > 0),
            'block1'=> self::Cuneiform_Numbers_And_Punctuation['block1'],
            'block2'=> self::Cuneiform_Numbers_And_Punctuation['block2'],
            'Unicode_name'=>self::Cuneiform_Numbers_And_Punctuation['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Cuneiform_Numbers_And_Punctuation['block1'], self::Cuneiform_Numbers_And_Punctuation['block2'])
            ),
        );
    }


    /**
    * Check Early Dynastic Cuneiform
    * @param string
    * @return array
    */
    public static function Early_Dynastic_Cuneiform(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Early_Dynastic_Cuneiform['regex'], $string) > 0),
            'block1'=> self::Early_Dynastic_Cuneiform['block1'],
            'block2'=> self::Early_Dynastic_Cuneiform['block2'],
            'Unicode_name'=>self::Early_Dynastic_Cuneiform['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Early_Dynastic_Cuneiform['block1'], self::Early_Dynastic_Cuneiform['block2'])
            ),
        );
    }


    /**
    * Check Egyptian Hieroglyphs
    * @param string
    * @return array
    */
    public static function Egyptian_Hieroglyphs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Egyptian_Hieroglyphs['regex'], $string) > 0),
            'block1'=> self::Egyptian_Hieroglyphs['block1'],
            'block2'=> self::Egyptian_Hieroglyphs['block2'],
            'Unicode_name'=>self::Egyptian_Hieroglyphs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Egyptian_Hieroglyphs['block1'], self::Egyptian_Hieroglyphs['block2'])
            ),
        );
    }


    /**
    * Check Anatolian Hieroglyphs
    * @param string
    * @return array
    */
    public static function Anatolian_Hieroglyphs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Anatolian_Hieroglyphs['regex'], $string) > 0),
            'block1'=> self::Anatolian_Hieroglyphs['block1'],
            'block2'=> self::Anatolian_Hieroglyphs['block2'],
            'Unicode_name'=>self::Anatolian_Hieroglyphs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Anatolian_Hieroglyphs['block1'], self::Anatolian_Hieroglyphs['block2'])
            ),
        );
    }


    /**
    * Check Bamum Supplement
    * @param string
    * @return array
    */
    public static function Bamum_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bamum_Supplement['regex'], $string) > 0),
            'block1'=> self::Bamum_Supplement['block1'],
            'block2'=> self::Bamum_Supplement['block2'],
            'Unicode_name'=>self::Bamum_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bamum_Supplement['block1'], self::Bamum_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Mro
    * @param string
    * @return array
    */
    public static function Mro(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mro['regex'], $string) > 0),
            'block1'=> self::Mro['block1'],
            'block2'=> self::Mro['block2'],
            'Unicode_name'=>self::Mro['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mro['block1'], self::Mro['block2'])
            ),
        );
    }


    /**
    * Check Bassa Vah
    * @param string
    * @return array
    */
    public static function Bassa_Vah(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Bassa_Vah['regex'], $string) > 0),
            'block1'=> self::Bassa_Vah['block1'],
            'block2'=> self::Bassa_Vah['block2'],
            'Unicode_name'=>self::Bassa_Vah['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Bassa_Vah['block1'], self::Bassa_Vah['block2'])
            ),
        );
    }


    /**
    * Check Pahawh Hmong
    * @param string
    * @return array
    */
    public static function Pahawh_Hmong(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Pahawh_Hmong['regex'], $string) > 0),
            'block1'=> self::Pahawh_Hmong['block1'],
            'block2'=> self::Pahawh_Hmong['block2'],
            'Unicode_name'=>self::Pahawh_Hmong['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Pahawh_Hmong['block1'], self::Pahawh_Hmong['block2'])
            ),
        );
    }


    /**
    * Check Miao
    * @param string
    * @return array
    */
    public static function Miao(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miao['regex'], $string) > 0),
            'block1'=> self::Miao['block1'],
            'block2'=> self::Miao['block2'],
            'Unicode_name'=>self::Miao['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miao['block1'], self::Miao['block2'])
            ),
        );
    }


    /**
    * Check Ideographic Symbols And Punctuation
    * @param string
    * @return array
    */
    public static function Ideographic_Symbols_And_Punctuation(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ideographic_Symbols_And_Punctuation['regex'], $string) > 0),
            'block1'=> self::Ideographic_Symbols_And_Punctuation['block1'],
            'block2'=> self::Ideographic_Symbols_And_Punctuation['block2'],
            'Unicode_name'=>self::Ideographic_Symbols_And_Punctuation['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ideographic_Symbols_And_Punctuation['block1'], self::Ideographic_Symbols_And_Punctuation['block2'])
            ),
        );
    }


    /**
    * Check Tangut
    * @param string
    * @return array
    */
    public static function Tangut(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tangut['regex'], $string) > 0),
            'block1'=> self::Tangut['block1'],
            'block2'=> self::Tangut['block2'],
            'Unicode_name'=>self::Tangut['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tangut['block1'], self::Tangut['block2'])
            ),
        );
    }


    /**
    * Check Tangut Components
    * @param string
    * @return array
    */
    public static function Tangut_Components(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tangut_Components['regex'], $string) > 0),
            'block1'=> self::Tangut_Components['block1'],
            'block2'=> self::Tangut_Components['block2'],
            'Unicode_name'=>self::Tangut_Components['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tangut_Components['block1'], self::Tangut_Components['block2'])
            ),
        );
    }


    /**
    * Check Kana Supplement
    * @param string
    * @return array
    */
    public static function Kana_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kana_Supplement['regex'], $string) > 0),
            'block1'=> self::Kana_Supplement['block1'],
            'block2'=> self::Kana_Supplement['block2'],
            'Unicode_name'=>self::Kana_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kana_Supplement['block1'], self::Kana_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Kana Extended-A
    * @param string
    * @return array
    */
    public static function Kana_Extended_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Kana_Extended_A['regex'], $string) > 0),
            'block1'=> self::Kana_Extended_A['block1'],
            'block2'=> self::Kana_Extended_A['block2'],
            'Unicode_name'=>self::Kana_Extended_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Kana_Extended_A['block1'], self::Kana_Extended_A['block2'])
            ),
        );
    }


    /**
    * Check Nushu
    * @param string
    * @return array
    */
    public static function Nushu(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Nushu['regex'], $string) > 0),
            'block1'=> self::Nushu['block1'],
            'block2'=> self::Nushu['block2'],
            'Unicode_name'=>self::Nushu['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Nushu['block1'], self::Nushu['block2'])
            ),
        );
    }


    /**
    * Check Duployan
    * @param string
    * @return array
    */
    public static function Duployan(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Duployan['regex'], $string) > 0),
            'block1'=> self::Duployan['block1'],
            'block2'=> self::Duployan['block2'],
            'Unicode_name'=>self::Duployan['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Duployan['block1'], self::Duployan['block2'])
            ),
        );
    }


    /**
    * Check Shorthand Format Controls
    * @param string
    * @return array
    */
    public static function Shorthand_Format_Controls(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Shorthand_Format_Controls['regex'], $string) > 0),
            'block1'=> self::Shorthand_Format_Controls['block1'],
            'block2'=> self::Shorthand_Format_Controls['block2'],
            'Unicode_name'=>self::Shorthand_Format_Controls['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Shorthand_Format_Controls['block1'], self::Shorthand_Format_Controls['block2'])
            ),
        );
    }


    /**
    * Check Byzantine Musical Symbols
    * @param string
    * @return array
    */
    public static function Byzantine_Musical_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Byzantine_Musical_Symbols['regex'], $string) > 0),
            'block1'=> self::Byzantine_Musical_Symbols['block1'],
            'block2'=> self::Byzantine_Musical_Symbols['block2'],
            'Unicode_name'=>self::Byzantine_Musical_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Byzantine_Musical_Symbols['block1'], self::Byzantine_Musical_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Musical Symbols
    * @param string
    * @return array
    */
    public static function Musical_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Musical_Symbols['regex'], $string) > 0),
            'block1'=> self::Musical_Symbols['block1'],
            'block2'=> self::Musical_Symbols['block2'],
            'Unicode_name'=>self::Musical_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Musical_Symbols['block1'], self::Musical_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Ancient Greek Musical Notation
    * @param string
    * @return array
    */
    public static function Ancient_Greek_Musical_Notation(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ancient_Greek_Musical_Notation['regex'], $string) > 0),
            'block1'=> self::Ancient_Greek_Musical_Notation['block1'],
            'block2'=> self::Ancient_Greek_Musical_Notation['block2'],
            'Unicode_name'=>self::Ancient_Greek_Musical_Notation['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ancient_Greek_Musical_Notation['block1'], self::Ancient_Greek_Musical_Notation['block2'])
            ),
        );
    }


    /**
    * Check Tai Xuan Jing Symbols
    * @param string
    * @return array
    */
    public static function Tai_Xuan_Jing_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tai_Xuan_Jing_Symbols['regex'], $string) > 0),
            'block1'=> self::Tai_Xuan_Jing_Symbols['block1'],
            'block2'=> self::Tai_Xuan_Jing_Symbols['block2'],
            'Unicode_name'=>self::Tai_Xuan_Jing_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tai_Xuan_Jing_Symbols['block1'], self::Tai_Xuan_Jing_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Counting Rod Numerals
    * @param string
    * @return array
    */
    public static function Counting_Rod_Numerals(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Counting_Rod_Numerals['regex'], $string) > 0),
            'block1'=> self::Counting_Rod_Numerals['block1'],
            'block2'=> self::Counting_Rod_Numerals['block2'],
            'Unicode_name'=>self::Counting_Rod_Numerals['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Counting_Rod_Numerals['block1'], self::Counting_Rod_Numerals['block2'])
            ),
        );
    }


    /**
    * Check Mathematical Alphanumeric Symbols
    * @param string
    * @return array
    */
    public static function Mathematical_Alphanumeric_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mathematical_Alphanumeric_Symbols['regex'], $string) > 0),
            'block1'=> self::Mathematical_Alphanumeric_Symbols['block1'],
            'block2'=> self::Mathematical_Alphanumeric_Symbols['block2'],
            'Unicode_name'=>self::Mathematical_Alphanumeric_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mathematical_Alphanumeric_Symbols['block1'], self::Mathematical_Alphanumeric_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Sutton SignWriting
    * @param string
    * @return array
    */
    public static function Sutton_SignWriting(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Sutton_SignWriting['regex'], $string) > 0),
            'block1'=> self::Sutton_SignWriting['block1'],
            'block2'=> self::Sutton_SignWriting['block2'],
            'Unicode_name'=>self::Sutton_SignWriting['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Sutton_SignWriting['block1'], self::Sutton_SignWriting['block2'])
            ),
        );
    }


    /**
    * Check Glagolitic Supplement
    * @param string
    * @return array
    */
    public static function Glagolitic_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Glagolitic_Supplement['regex'], $string) > 0),
            'block1'=> self::Glagolitic_Supplement['block1'],
            'block2'=> self::Glagolitic_Supplement['block2'],
            'Unicode_name'=>self::Glagolitic_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Glagolitic_Supplement['block1'], self::Glagolitic_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Mende Kikakui
    * @param string
    * @return array
    */
    public static function Mende_Kikakui(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mende_Kikakui['regex'], $string) > 0),
            'block1'=> self::Mende_Kikakui['block1'],
            'block2'=> self::Mende_Kikakui['block2'],
            'Unicode_name'=>self::Mende_Kikakui['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mende_Kikakui['block1'], self::Mende_Kikakui['block2'])
            ),
        );
    }


    /**
    * Check Adlam
    * @param string
    * @return array
    */
    public static function Adlam(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Adlam['regex'], $string) > 0),
            'block1'=> self::Adlam['block1'],
            'block2'=> self::Adlam['block2'],
            'Unicode_name'=>self::Adlam['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Adlam['block1'], self::Adlam['block2'])
            ),
        );
    }


    /**
    * Check Arabic Mathematical Alphabetic Symbols
    * @param string
    * @return array
    */
    public static function Arabic_Mathematical_Alphabetic_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Arabic_Mathematical_Alphabetic_Symbols['regex'], $string) > 0),
            'block1'=> self::Arabic_Mathematical_Alphabetic_Symbols['block1'],
            'block2'=> self::Arabic_Mathematical_Alphabetic_Symbols['block2'],
            'Unicode_name'=>self::Arabic_Mathematical_Alphabetic_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Arabic_Mathematical_Alphabetic_Symbols['block1'], self::Arabic_Mathematical_Alphabetic_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Mahjong Tiles
    * @param string
    * @return array
    */
    public static function Mahjong_Tiles(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Mahjong_Tiles['regex'], $string) > 0),
            'block1'=> self::Mahjong_Tiles['block1'],
            'block2'=> self::Mahjong_Tiles['block2'],
            'Unicode_name'=>self::Mahjong_Tiles['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Mahjong_Tiles['block1'], self::Mahjong_Tiles['block2'])
            ),
        );
    }


    /**
    * Check Domino Tiles
    * @param string
    * @return array
    */
    public static function Domino_Tiles(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Domino_Tiles['regex'], $string) > 0),
            'block1'=> self::Domino_Tiles['block1'],
            'block2'=> self::Domino_Tiles['block2'],
            'Unicode_name'=>self::Domino_Tiles['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Domino_Tiles['block1'], self::Domino_Tiles['block2'])
            ),
        );
    }


    /**
    * Check Playing Cards
    * @param string
    * @return array
    */
    public static function Playing_Cards(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Playing_Cards['regex'], $string) > 0),
            'block1'=> self::Playing_Cards['block1'],
            'block2'=> self::Playing_Cards['block2'],
            'Unicode_name'=>self::Playing_Cards['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Playing_Cards['block1'], self::Playing_Cards['block2'])
            ),
        );
    }


    /**
    * Check Enclosed Alphanumeric Supplement
    * @param string
    * @return array
    */
    public static function Enclosed_Alphanumeric_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Enclosed_Alphanumeric_Supplement['regex'], $string) > 0),
            'block1'=> self::Enclosed_Alphanumeric_Supplement['block1'],
            'block2'=> self::Enclosed_Alphanumeric_Supplement['block2'],
            'Unicode_name'=>self::Enclosed_Alphanumeric_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Enclosed_Alphanumeric_Supplement['block1'], self::Enclosed_Alphanumeric_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Enclosed Ideographic Supplement
    * @param string
    * @return array
    */
    public static function Enclosed_Ideographic_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Enclosed_Ideographic_Supplement['regex'], $string) > 0),
            'block1'=> self::Enclosed_Ideographic_Supplement['block1'],
            'block2'=> self::Enclosed_Ideographic_Supplement['block2'],
            'Unicode_name'=>self::Enclosed_Ideographic_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Enclosed_Ideographic_Supplement['block1'], self::Enclosed_Ideographic_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Miscellaneous Symbols And Pictographs
    * @param string
    * @return array
    */
    public static function Miscellaneous_Symbols_And_Pictographs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Miscellaneous_Symbols_And_Pictographs['regex'], $string) > 0),
            'block1'=> self::Miscellaneous_Symbols_And_Pictographs['block1'],
            'block2'=> self::Miscellaneous_Symbols_And_Pictographs['block2'],
            'Unicode_name'=>self::Miscellaneous_Symbols_And_Pictographs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Miscellaneous_Symbols_And_Pictographs['block1'], self::Miscellaneous_Symbols_And_Pictographs['block2'])
            ),
        );
    }


    /**
    * Check Emoticons
    * @param string
    * @return array
    */
    public static function Emoticons(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Emoticons['regex'], $string) > 0),
            'block1'=> self::Emoticons['block1'],
            'block2'=> self::Emoticons['block2'],
            'Unicode_name'=>self::Emoticons['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Emoticons['block1'], self::Emoticons['block2'])
            ),
        );
    }


    /**
    * Check Ornamental Dingbats
    * @param string
    * @return array
    */
    public static function Ornamental_Dingbats(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Ornamental_Dingbats['regex'], $string) > 0),
            'block1'=> self::Ornamental_Dingbats['block1'],
            'block2'=> self::Ornamental_Dingbats['block2'],
            'Unicode_name'=>self::Ornamental_Dingbats['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Ornamental_Dingbats['block1'], self::Ornamental_Dingbats['block2'])
            ),
        );
    }


    /**
    * Check Transport And Map Symbols
    * @param string
    * @return array
    */
    public static function Transport_And_Map_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Transport_And_Map_Symbols['regex'], $string) > 0),
            'block1'=> self::Transport_And_Map_Symbols['block1'],
            'block2'=> self::Transport_And_Map_Symbols['block2'],
            'Unicode_name'=>self::Transport_And_Map_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Transport_And_Map_Symbols['block1'], self::Transport_And_Map_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Alchemical Symbols
    * @param string
    * @return array
    */
    public static function Alchemical_Symbols(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Alchemical_Symbols['regex'], $string) > 0),
            'block1'=> self::Alchemical_Symbols['block1'],
            'block2'=> self::Alchemical_Symbols['block2'],
            'Unicode_name'=>self::Alchemical_Symbols['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Alchemical_Symbols['block1'], self::Alchemical_Symbols['block2'])
            ),
        );
    }


    /**
    * Check Geometric Shapes Extended
    * @param string
    * @return array
    */
    public static function Geometric_Shapes_Extended(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Geometric_Shapes_Extended['regex'], $string) > 0),
            'block1'=> self::Geometric_Shapes_Extended['block1'],
            'block2'=> self::Geometric_Shapes_Extended['block2'],
            'Unicode_name'=>self::Geometric_Shapes_Extended['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Geometric_Shapes_Extended['block1'], self::Geometric_Shapes_Extended['block2'])
            ),
        );
    }


    /**
    * Check Supplemental Arrows-C
    * @param string
    * @return array
    */
    public static function Supplemental_Arrows_C(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplemental_Arrows_C['regex'], $string) > 0),
            'block1'=> self::Supplemental_Arrows_C['block1'],
            'block2'=> self::Supplemental_Arrows_C['block2'],
            'Unicode_name'=>self::Supplemental_Arrows_C['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplemental_Arrows_C['block1'], self::Supplemental_Arrows_C['block2'])
            ),
        );
    }


    /**
    * Check Supplemental Symbols And Pictographs
    * @param string
    * @return array
    */
    public static function Supplemental_Symbols_And_Pictographs(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplemental_Symbols_And_Pictographs['regex'], $string) > 0),
            'block1'=> self::Supplemental_Symbols_And_Pictographs['block1'],
            'block2'=> self::Supplemental_Symbols_And_Pictographs['block2'],
            'Unicode_name'=>self::Supplemental_Symbols_And_Pictographs['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplemental_Symbols_And_Pictographs['block1'], self::Supplemental_Symbols_And_Pictographs['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs Extension B
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs_Extension_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs_Extension_B['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs_Extension_B['block1'],
            'block2'=> self::CJK_Unified_Ideographs_Extension_B['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs_Extension_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs_Extension_B['block1'], self::CJK_Unified_Ideographs_Extension_B['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs Extension C
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs_Extension_C(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs_Extension_C['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs_Extension_C['block1'],
            'block2'=> self::CJK_Unified_Ideographs_Extension_C['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs_Extension_C['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs_Extension_C['block1'], self::CJK_Unified_Ideographs_Extension_C['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs Extension D
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs_Extension_D(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs_Extension_D['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs_Extension_D['block1'],
            'block2'=> self::CJK_Unified_Ideographs_Extension_D['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs_Extension_D['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs_Extension_D['block1'], self::CJK_Unified_Ideographs_Extension_D['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs Extension E
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs_Extension_E(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs_Extension_E['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs_Extension_E['block1'],
            'block2'=> self::CJK_Unified_Ideographs_Extension_E['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs_Extension_E['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs_Extension_E['block1'], self::CJK_Unified_Ideographs_Extension_E['block2'])
            ),
        );
    }


    /**
    * Check CJK Unified Ideographs Extension F
    * @param string
    * @return array
    */
    public static function CJK_Unified_Ideographs_Extension_F(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Unified_Ideographs_Extension_F['regex'], $string) > 0),
            'block1'=> self::CJK_Unified_Ideographs_Extension_F['block1'],
            'block2'=> self::CJK_Unified_Ideographs_Extension_F['block2'],
            'Unicode_name'=>self::CJK_Unified_Ideographs_Extension_F['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Unified_Ideographs_Extension_F['block1'], self::CJK_Unified_Ideographs_Extension_F['block2'])
            ),
        );
    }


    /**
    * Check CJK Compatibility Ideographs Supplement
    * @param string
    * @return array
    */
    public static function CJK_Compatibility_Ideographs_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::CJK_Compatibility_Ideographs_Supplement['regex'], $string) > 0),
            'block1'=> self::CJK_Compatibility_Ideographs_Supplement['block1'],
            'block2'=> self::CJK_Compatibility_Ideographs_Supplement['block2'],
            'Unicode_name'=>self::CJK_Compatibility_Ideographs_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::CJK_Compatibility_Ideographs_Supplement['block1'], self::CJK_Compatibility_Ideographs_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Tags
    * @param string
    * @return array
    */
    public static function Tags(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Tags['regex'], $string) > 0),
            'block1'=> self::Tags['block1'],
            'block2'=> self::Tags['block2'],
            'Unicode_name'=>self::Tags['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Tags['block1'], self::Tags['block2'])
            ),
        );
    }


    /**
    * Check Variation Selectors Supplement
    * @param string
    * @return array
    */
    public static function Variation_Selectors_Supplement(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Variation_Selectors_Supplement['regex'], $string) > 0),
            'block1'=> self::Variation_Selectors_Supplement['block1'],
            'block2'=> self::Variation_Selectors_Supplement['block2'],
            'Unicode_name'=>self::Variation_Selectors_Supplement['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Variation_Selectors_Supplement['block1'], self::Variation_Selectors_Supplement['block2'])
            ),
        );
    }


    /**
    * Check Supplementary Private Use Area-A
    * @param string
    * @return array
    */
    public static function Supplementary_Private_Use_Area_A(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplementary_Private_Use_Area_A['regex'], $string) > 0),
            'block1'=> self::Supplementary_Private_Use_Area_A['block1'],
            'block2'=> self::Supplementary_Private_Use_Area_A['block2'],
            'Unicode_name'=>self::Supplementary_Private_Use_Area_A['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplementary_Private_Use_Area_A['block1'], self::Supplementary_Private_Use_Area_A['block2'])
            ),
        );
    }


    /**
    * Check Supplementary Private Use Area-B
    * @param string
    * @return array
    */
    public static function Supplementary_Private_Use_Area_B(string $string): array
    {
        return array(
            'is'        => (preg_match(self::Supplementary_Private_Use_Area_B['regex'], $string) > 0),
            'block1'=> self::Supplementary_Private_Use_Area_B['block1'],
            'block2'=> self::Supplementary_Private_Use_Area_B['block2'],
            'Unicode_name'=>self::Supplementary_Private_Use_Area_B['Unicode_name'],
            'check_list' => array(
                CharacterTable::get_Table(self::Supplementary_Private_Use_Area_B['block1'], self::Supplementary_Private_Use_Area_B['block2'])
            ),
        );
    }
}
