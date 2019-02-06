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
        $to = "receipient@example.com";
        $from = "me@example.com";
        $subject = "Test e-mail";
        $body = "This is an example for showing the usage of the mail() function.";
        $send = mail($to, $subject, $body, $from);
        if ($send)
        {
            echo "Mail sent to $to address!!";
        }
        else
        {
            echo "Mail could not be sent to $to address!!!";
        }
        ?>
    </body>
</html>
