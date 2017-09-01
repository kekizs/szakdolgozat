<?php

abstract class controller {
    public $content;
    public $id;
    protected function render($view, $params=[]) {
        ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require($view);
        //layoutba beleteszi a contentemet
        $content = ob_get_clean();
        $user=isset($_SESSION["user"]) ? $_SESSION["user"] : false;
        require './app/view/layout.php';
    }

    public function __construct($id) {
        $this->id = $id;
       
    }
    

    
}
