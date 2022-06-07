<html>
    <body>
        <?php
        $numero = $_GET['num'];
$numero;
if($numero > 0){
    echo "El Número Ingresado Es <b>Positivo</b>";
}
else if ($numero < 0){
    echo "El Número Ingresado Es <b>Negativo</b>";
}
else{
    echo "El Número Ingresado Es <b>Cero</b>";
}
        ?>
    </body>    
</html>