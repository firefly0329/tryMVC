<?php 
class repiceController extends Controller {
    
    function guide() {
        $user = $this->model("repice_model");
        $unsetSESSION = $user->decision();
        $this->view("Home/repice", $unsetSESSION);
    }

}
    
?>