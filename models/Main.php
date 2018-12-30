<?php
/**
 * Created by ******
 * User: gevorg
 * Date: 12/23/18
 * Time: 9:19 PM
 */

class Main
{
    public static function getMainPage()
    {
        $preconnect = new \components\Connect();
        $db = $preconnect->makeConnection();
        $newsList = array();
        $result = $db->query('SELECT id, title, date, content FROM `news` ORDER BY date DESC LIMIT 5');
        $i=0;
        while ($row=$result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['content'] = $row['content'];
            $i++;
        }
        return $newsList;
    }
}