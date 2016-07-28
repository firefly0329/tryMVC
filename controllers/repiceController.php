<?php 
class repiceController extends Controller {
    
    function hello() {
        $user = $this->model("repice_model");
        $unsetSESSION = $user->decision();
        $this->view("Home/repice", $unsetSESSION);
    }

}
    
?>