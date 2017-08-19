<?php

class Application {

    private static $pdo = null;
    private static $config = null;
    private $defaultUrl = "/index.php?r=test/test";

    public static function getConnection() {
        if (!isset(self::$config)) {
            self::$config = require_once './app/config.php';
        }
        if (!isset(self::$pdo)) {
            self::$pdo = new PDO("mysql:host={$server};dbname={$db};charset=utf8", $user, $pass);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }

    public function run() {
        if (!isset($_GET["r"])) {
            header('Location: ' . $this->defaultUrl);
            exit;
        }
        $tag = explode("/", $_GET["r"]);
        if (count($tag) < 2) {
            throw new Exception("hibás url");
        }
        $controller = "{$tag[0]}Controller";
        $action = $tag[1];
        $id = false;
        if (count($tag) > 2 && is_numeric($tag[2])) {
            $id = $tag[2];
        }
        if (!file_exists("./app/controller/{$controller}.php")) {
            throw new Exception("hibás controller osztálynév");
        }
        require_once "./app/controller/{$controller}.php";
        $instance = new $controller();
        if (!method_exists($instance, $action)) {
            throw new Exception("hibás action név");
        }
        $instance->$action($id);
    }

}
