<!DOCTYPE html>
<html>
<head>
    <title>Last news</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<?php foreach ($newsList as $newsItem):?>
<div>
    <p><?php echo $newsItem['title'];?></p>
    <p><?php echo $newsItem['id'];?></p>
    <p><?php echo $newsItem['date'];?></p>
    <p><?php echo $newsItem['short_content'];?></p></br>


</div>
<?php endforeach;?>
</body>
</html>

<!--date-->
<!--title-->
<!--short_content-->

<!--<p>--><?php //echo $_SERVER['DOCUMENT_ROOT'] . '/css/style.css';?><!--</p>-->