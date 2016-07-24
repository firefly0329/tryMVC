<?php 
require_once('db.php');
    
    class deleteCooking_2_model{
        function deleteMenu($cookingId){
        $db1 = new db;
        $grammer = "DELETE FROM menu where id like $cookingId";
        $db1->link($grammer);
        }
    }
?>