<?php
require_once('db.php');
class newCooking_model{
    function getMenuId(){
        $grammer = "select id from menu";
        $db1 = new db;
        $result = $db1->link($grammer);
        return $result;
    }
    function setMenu($id,$dishName,$writer,$picture,$difficult,$class,$time,$make,$ps,$stuff){
        $grammer = "insert into menu (`id`, `dishName`, `writer`, `picture`, `difficult`, `class`, `time`, `make`, `ps`, `stuff`) 
                            value($id, '$dishName', '$writer', '$picture', '$difficult', '$class', '$time', '$make', '$ps', '$stuff')";
        $db2 = new db;
        $db2->link($grammer);

    }
}





?>