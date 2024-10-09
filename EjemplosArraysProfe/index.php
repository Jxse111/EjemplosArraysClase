<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $miArray1 = array(0, 2, 4, 6, 8);
        print_r($miArray1);
        ?>
        <br>
        <?php echo $miArray1[2]; ?>
        <br>
        <?php $miArray2 = array('hola', 'pepe', 'cómo', 'estás');
        print_r($miArray2);
        ?>
        <br>
        <?php echo $miArray2[2]; ?>
        <br>
        <?php $miArray3 = array("saludo" => 'hola', "nombre" => 'pepe', "adverbio" => 'cómo', "verbo" => 'estás');
        print_r($miArray3);
        ?>
        <br>
        <?php echo $miArray3["adverbio"]; ?>
        <br>
<?php $miArray4 = array("saludo" => 'hola', 'pepe', 'cómo', "verbo" => 'estás');
print_r($miArray4);
?>
        <br>
        <br>
<?php //echo $miArray4["adverbio"];  ?>
        <?php $miArray5 = array("saludo" => 'hola', 'pepe', "adverbio" => 'cómo', 'estás');
        print_r($miArray5);
        ?>
        <br>
        <br>
        <?php $miArray5[0] = "juan";
        print_r($miArray5);
        ?>
        <br>
        <br>
        <?php $miArray5["saludo"] = 250;
        print_r($miArray5);
        ?>
        <br>
        <br>
<?php unset($miArray5[1]);
print_r($miArray5);
?>
        <br>
        <br>
        <?php $miArray5[] = "andas";
        print_r($miArray5);
        ?>
        <br>
        <br>
        <?php unset($miArray2[0]);
        print_r($miArray2);
        ?>
        <br>
        <br>
        <?php $miArray2[] = "adiós";
        print_r($miArray2);
        ?>
        <br>
        <br>
        <?php $miArray2[0] = "Qué tal";
        print_r($miArray2);
        ?>
        <br>
        <br>
<?php $miArray6 = array("saludo" => 'hola', 'pepe', "adverbio" => 'cómo', 'estás');
print_r($miArray5);
?>
        <br>
        <br>
        <?php
        foreach ($miArray6 as $cadaElemento) {
            echo "$cadaElemento  ";
        }
        ?>
        <br>
        <br>
<?php $miArray6 = array("saludo" => 'hola', 'pepe', "adverbio" => 'cómo', 'estás');
print_r($miArray5);
?>
        <br>
        <br>
<?php
//Tengo que crear de nuevo el array porque el puntero se queda en nulldespués del foreach anterior
foreach ($miArray6 as $cadaClave => $cadaElemento) {
    echo "$cadaClave : $cadaElemento    ";
}
?>

    </body>
</html>
