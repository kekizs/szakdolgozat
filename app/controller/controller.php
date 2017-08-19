<?php

class controller {
    public $content;
    protected function render($view, $params=[]) {
        ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);
        require($view);

        $content = ob_get_clean();
        require './app/view/layout.php';
    }

}
