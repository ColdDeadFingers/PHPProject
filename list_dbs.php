<?php

$connect = mysqli_connect('localhost', 'root', '');
$db_list = mysqli_query($connect,'SHOW DATABASES;');
echo "The list of databases are:<r>";
while ($row = mysqli_fetch_row($db_list))
{
    //echo $row->Database . "<br>";
    $row[] = $row[0];
    echo implode('<br/>', $row);

}
?> 
