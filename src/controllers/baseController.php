<?php
class BaseController
{
    var $model = [];
    var $form = [];
    function render($view)
    {
        extract(['model' => $this->model, 'form' => $this->form]);
        require(ROOT . 'src/views/' . $view . '.php');
    }
}
?>