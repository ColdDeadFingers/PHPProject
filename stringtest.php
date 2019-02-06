<?php
 class stringz{
    function stringz(){
    echo 'This is a constructor';
    }
    
    function functionName($param) {
    echo 'This is a function';
}


}
class display extends stringz{
    function display(){
        echo 'This is a constructor of a new class';
    }
}

$displ = new stringz;

echo '<BR><BR>';

$disp = new display;


