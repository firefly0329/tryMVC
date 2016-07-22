<?php

class Controller {
    public function model($model) {
        require_once "../EasyMVC/models/$model.php";
        $obj = new $model();
        return $obj; //new出一個物件，並把這個物件的指標丟出來(等於把物件丟出來)
    }
    
    public function view($view, $data = Array()) {
        require_once "../EasyMVC/views/$view.php";
    }
}

?>