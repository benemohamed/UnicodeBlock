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
 * Main CharacterTable
 */
class CharacterTable
{


    /**
     * Get string from numeric HEX value
     * @param  int    $blc block
     * @return string
     */
    public static function get_string(int $blc)
    {
        return mb_chr($blc);
    }


    /**
     * Get numeric value of character as DEC int
     * @param  int    $blc black
     * @return string
     */
    public static function get_numeric(string $blc)
    {
        return mb_ord($blc);
    }

    /**
     * Get string from numeric DEC value
     * @param  int    $blc_on block1
     * @param  int    $blc_tw bloc2
     * @return array
     */
    public static function get_Table(int $blc_on, int $blc_tw):array
    {
        $list = array();
        for ($i=$blc_on; $i < $blc_tw; $i++) {
            $ch =  self::get_string($i);
          //  print_r(array($ch));
            foreach (array($ch) as $key => $value) {
                 $list[] = $value;
            }
        }
        return $list ;
    }
}
