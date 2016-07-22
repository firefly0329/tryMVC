<?php
require_once('db.php');
class deleteCooking_model{
    function getMenu($cookingId){
        $db1 = new db;
        $grammer = "select * from menu where id like $cookingId";
        $result = $db1->link($grammer);
        return $result;
    }
}

?>