<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        include 'myfile.php';
//        
//        class ClassB
//        {
//            function _construct()
//            {
//                
//            }
//            
//            function callA()
//            {
//                $classA = new ClassA();
//                $name = $classA->getname();
//                echo $name;
//            }
//                       
//        }
//                    $classB = new ClassB(); 
//                    $classB->callA();
        class Greetings {
            private $word ="Hello";
        }
        
        $closure = function($whom) {
            echo "$this->word $whom\n";
        };
        
        $obj = new Greetings();
        
        $closure->call($obj, 'John');
        $closure->call($obj, 'Kevin');

        ?>
    </body>
</html>
