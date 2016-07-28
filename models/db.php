<?php

class db{
    function links($grammer){
        $link = mysql_connect("localhost", "root", "");
        mysql_query("set names utf8", $link);
        mysql_selectdb("recipe", $link);
        $result = mysql_query($grammer, $link);
        return $result;
    }

    // function __construct(){
    //     // $db = new PDO("mysql:host=localhost;dbname=recipe;port=3306", "root", "");
    //     // $db->exec("SET CHARACTER SET utf8");
    // }
    
    // function links($grammer){
    //     $db = new PDO("mysql:host=localhost;dbname=recipe;port=3306", "root", "");
    //     $db->exec("SET CHARACTER SET utf8");
        
    //     // $grammer = 'update table set id = :id where id = :id';
    //     // $prepare = $db->prepare($grammer);
    //     // $prepare->bindParam(':id', '20');
    //     // $prepare->execute();
    //     // $row = $prepare->fetchAll(PDO::FETCH_ASSOC);
        
        // $result = $db->query($grammer);
        // $row = $result->fetchAll(PDO::FETCH_ASSOC);
    //     $db = null;
    //     return $row;
    // }
} 



?>