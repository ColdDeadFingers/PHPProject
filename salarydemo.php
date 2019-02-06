<?php

include "salary.php";
echo "The Salary details of the employee: <BR><BR>";
$sal = new net_salary();
echo $sal->net(372500);

