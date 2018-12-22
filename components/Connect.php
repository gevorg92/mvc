<?php
/**
 * Created by ******
 * User: gevorg
 * Date: 12/21/18
 * Time: 7:39 PM
 */

namespace components;
use PDO;

class Connect
{
    private $host, $dbname, $username, $password;
    public function __construct()
    {
        $getDirectory = dirname(__FILE__, 2);
        $ini = parse_ini_file(($getDirectory . "/config.ini"));
        $this->host = $ini['DB_HOST'];
        $this->dbname = $ini['DB_NAME'];
        $this->username = $ini['DB_USER'];
        $this->password = $ini['DB_PASSWORD'];
    }

    public function makeConnection()
    {
        $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        return $pdo;
    }
}