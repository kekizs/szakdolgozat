<?php

class Application {

    private static $pdo = null;
    private static $config = null;

    //private $defaultUrl = "/index.php?r=test/test/1";
    //melyik controller melyik method-a
    public static function getConnection() {
        if (!isset(self::$config)) {
            self::$config = require_once './app/config.php';
        }
        if (!isset(self::$pdo)) {
            $server = self::$config["db"]["host"];
            $user = self::$config["db"]["user"];
            $pass = self::$config["db"]["password"];
            $db = self::$config["db"]["db"];

            self::$pdo = new PDO("mysql:host={$server};dbname={$db};charset=utf8", $user, $pass);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }

    public function run() {
        $tag=null;
        if (isset($_GET["r"])){
            
          $tag = explode("/", $_GET["r"]);   
        }
       
        $controllername = "defaultController";
        $action = "run";
        if (isset($tag) && isset($tag[0])) {
            $controllername = "{$tag[0]}Controller";//konkatenálás stringbe változó
        }
        if (isset($tag) && isset($tag[1])) {

            $action = $tag[1];
        }

        $id = false;
        if (isset($tag) && count($tag) > 2 && is_numeric($tag[2])) {
            $id = $tag[2];
        }
        if (!file_exists("./app/controller/{$controllername}.php")) {
            throw new Exception("hibás controller osztálynév");
        }
        require_once "./app/controller/{$controllername}.php";
        $instance = new $controllername($id);
        if (!method_exists($instance, $action)) {
            throw new Exception("hibás action név");
        }
        $instance->$action($id);
    }

//osztályt függvényesít
}
