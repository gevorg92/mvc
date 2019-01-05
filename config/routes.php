<?php

namespace config;

return array(
    'news/([0-9]+)' => 'news/view/$1', // news/view/category/articleID
    'news'=>'news/index',
    'products' => 'product/list',
    '' => 'main/index',
    '([A-Za-z0-9-]+)' => 'error/error'

);