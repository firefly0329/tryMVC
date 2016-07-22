<?php

class db{
    function link($grammer){
        $link = mysql_connect("localhost", "root", "");
        mysql_query("set names utf8", $link);
        mysql_selectdb("recipe", $link);
        $result = mysql_query($grammer, $link);
        return $result;
    }
} 



?>