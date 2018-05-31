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
            include('Data_Access/Integrante_DAO.php');
            
            $var1 = new Integrante_DAO();
            //echo $var1->getById(1)->fetch_object();
            //var_dump(pg_fetch_all($var1->getById(1)));
            $var1->getById(1);
        ?>
    </body>
</html>
