<?php
/**
 * View
 *
 * @author     Federico Orlandau <federico.orlandau@gmail.com>
 * @copyright  2016 Federico Orlandau
 * @license    http://opensource.org/licenses/BSD-3-Clause New BSD License
 */
namespace Libs;
class View
{
    public static function render($file, $variables = array())
    {
        extract($variables);
        extract($_GET);

        ob_start();
        include $GLOBALS['directories']['views'].'/'.$file.'.php';
        $renderedView = ob_get_clean();

        echo $renderedView;
    }
}