<?php
    //Closure or annonymous
    $closure = function($name,$age){
        return array ($name,$age);
    };
    print(get_class($closure));
    print("<br />");

    [$name,$age]= $closure("mark", 25);
    print($name." ".$age);
?>