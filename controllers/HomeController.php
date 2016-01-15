<?php
/**
 * HomeController
 *
 * @author     Federico Orlandau <federico.orlandau@gmail.com>
 */

namespace Controllers;

use Libs\View;
use Services\WoowupService;

Class HomeController
{

    public function init()
    {
        View::render('home');
    }
}
