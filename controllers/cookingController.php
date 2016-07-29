<?php 
class repiceController extends Controller {
    
    function guide() {
        $user = $this->model("repice_model");
        $this->view("Home/repice");
    }

}

?>