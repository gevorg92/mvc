<?php
/**
 * Created by ******
 * User: gevorg
 * Date: 12/21/18
 * Time: 7:39 PM
 */

namespace components;


class Connect
{
 public function __construct($host, $dbname, $username, $password)
 {
     return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 }
}