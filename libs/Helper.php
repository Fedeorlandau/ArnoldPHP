<?php
/**
 * Helper
 *
 * @author     Federico Orlandau <federico.orlandau@gmail.com>
 * @copyright  2016 Federico Orlandau
 * @license    http://opensource.org/licenses/BSD-3-Clause New BSD License
 */
namespace Libs;
class Helper
{
    public static function csvToArray($file)
    {
        $rows = array_map('str_getcsv', $file);
        $header = array_shift($rows);
        $array = array();
        foreach ($rows as $row) {
            $array[] = array_combine($header, $row);
        }
        return $array;
    }

    public static function redirect($string)
    {
        header("Location: " . $GLOBALS['config']['base_url'] . $string);
    }

    public static function trans($string)
    {
        $messages = include $GLOBALS['resources']['lang'];
        if (isset($messages[$string])) {
            return $messages[$string];
        } else {
            return $string;
        }
    }

    public static function cutString($string, $chars)
    {
        $exploded_string = explode(' ', $string);
        $string_sliced = array_slice($exploded_string, 0, $chars);
        $string_cut = implode(' ', $string_sliced);
        return $string_cut;
    }
}

