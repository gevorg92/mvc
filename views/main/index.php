<!DOCTYPE html>

<html>
<head>
<!--    <meta name="keywords" content="" />-->
<!--    <meta name="description" content="" />-->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Latest news</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
    <div id="menu">
        <ul>
            <li class="current_page_item"><a href="#">Homepage</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <!-- end #menu -->
</div>

<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#">Noname &nbsp MVC &nbsp system</a></h1>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <?php foreach ($newsList as $newsItem):?>
                    <div class="post">
                        <h2 class="title"><a href="#"><?php echo $newsItem['title'];?></a></h2>
                        <p class="meta">Posted by <a href="#">Someone</a> on <?php echo $newsItem['date'];?>
                            &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p> <!--<a href="#" class="comments">Comments (64)</a>-->
                        <div class="entry">
                            <p><img src="images/sample.png" width="800" height="300" alt="" /></p>
                            <p><?php echo $newsItem['content'];?></p></br>
                        </div>
<!--                        <div>-->
<!--                            <p>--><?php //echo $newsItem['title'];?><!--</p>-->
<!--                            <p>--><?php //echo $newsItem['id'];?><!--</p>-->
<!--                            <p>--><?php //echo $newsItem['date'];?><!--</p>-->
<!--                            <p>--><?php //echo $newsItem['content'];?><!--</p></br>-->
<!---->
<!---->
<!--                        </div>-->
                </div>
                <div style="clear: both;">&nbsp;</div>
                        <?php endforeach;?>
                    <!--TO HERE-->

                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <h2>Aliquam tempus</h2>
                            <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
                        </li>
                        <li>
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Blogroll</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2018 Sitename.com. No rights available. Design by ******.</p>
</div>
<!-- end #footer -->
</body>
</html>

<!--<a href="http://www.freecsstemplates.org">FCT</a>.-->

