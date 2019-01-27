<?php
/**
 * Created by PhpStorm.
 * User: gevorg
 * Date: 12/23/18
 * Time: 9:15 PM
 */

include_once ROOT.'/models/Main.php';
class MainController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = Main::getMainPage();
        require_once(ROOT.'/views/main/index.php');
        return true;
    }
}