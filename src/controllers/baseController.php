<?php
class BaseController
{
    var $model = [];
    function render($view)
    {
        extract(['model' => $this->model]);
        require(ROOT . 'src/views/' . $view . '.php');
    }
}
?>