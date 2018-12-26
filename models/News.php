<?php

class News
{
    public static function getNewsItemById($id)
    {
        $id = intval($id);
        if ($id){
            $preconnect = new \components\Connect();
            $db = $preconnect->makeConnection();
            $newsItem = array();
            $result = $db->query('SELECT `id`, `title`, `date`, `short_content` FROM `news` WHERE `id`=' . $id);
            $row=$result->fetch();
            $newsItem['id'] = $row['id'];
            $newsItem['title'] = $row['title'];
            $newsItem['date'] = $row['date'];
            $newsItem['short_content'] = $row['short_content'];

            return $newsItem;
        }
        echo "News:getnewsitembyid";
    }



    public static function getNewsList()
    {
        $preconnect = new \components\Connect();
        $db = $preconnect->makeConnection();
        $newsList = array();
        $result = $db->query('SELECT id, title, date, short_content FROM `news` ORDER BY date DESC LIMIT 10');
        $i=0;
        while ($row=$result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}