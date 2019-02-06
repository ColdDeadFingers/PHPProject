<?php

class empdetail{
     private $empid;
     private $empname;
     private $empcity;
     private $empdept;
    
    function empdetail($id, $name, $city, $dept){
        $this->empcity = $city;
        $this->empdept = $dept;
        $this->empid = $id;
        $this->empname = $name;
    }
}

