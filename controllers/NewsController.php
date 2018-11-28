<?php

class NewsController
{


    public function actionIndex()
    {
        echo "This is ActionIndex from NewsController";
        return true;

    }

    public function actionView($var1, $var2, $var3)
    {


        echo '<br>' . $var1;
        echo '<br>' . $var2;
        echo '<br>' . $var3;
        return true;

    }




}

