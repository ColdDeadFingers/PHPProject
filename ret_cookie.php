<?php
if(isset($_COOKIE['Name']))
{
    $LAST = $_COOKIE['Name'];
    echo "Welcome back! <br> Your name is ". $last;
}
else
{
    echo "Welcome to our site!";
}
?>
