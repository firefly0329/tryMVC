<?php
require_once('db.php');
class modifyCooking_2_model{
    function getMenu($cookingId){
        $db1 = new db;
        $grammer = "select * from menu where id = $cookingId";
        $result = $db1->link($grammer);
        return $result;
    }
    function changeMenu($id,$dishName,$writer,$picture,$difficult,$class,$time,$make,$ps,$stuff,$cookingId){
        $db2 = new db;
        $grammer = "UPDATE menu SET id=$id,`dishName`='$dishName',
        `writer`='$writer',`picture`='$picture',`difficult`='$difficult',`class`='$class',
        `time`='$time',`make`='$make',`ps`='$ps',`stuff`='$stuff' WHERE id like $cookingId";
        // exit;
        $result = $db2->link($grammer);
    }
}







?>