<?php
    //PHP closures
    $anony = function(){
        return "lambda";
    };
    //closures
    print(get_class($anony));
    print("<br />");
    //object
    print(gettype($anony))
?>