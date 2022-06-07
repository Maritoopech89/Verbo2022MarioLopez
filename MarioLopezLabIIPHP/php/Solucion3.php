<html>
    <body>
        <?php
        $codigo = $_GET['txt_codigo'];
        $nombre = $_GET['txt_nombre'];
        $apellido = $_GET['txt_apellido'];
        $sueldob = $_GET['txt_sueldobase'];
        $bonificacion = $_GET['txt_bonificacion'];
        $hrsextras = $_GET['txt_horasextras'];

        $igss = ($sueldob * 4.83) / 100;
        $descuento = 0;
        $hextras = ((($sueldob + $bonificacion)/30/8) * ($hrsextras));
        $totalingresos = $sueldob + $hextras + $bonificacion;
        $sueldoliquido = $totalingresos - $igss;

        ?>

<table border="1" width="40%" align="center">
            <tr>
                <td colspan="2" align="center">DATOS GENERALES</td>
            </tr>
            <tr>
                <td align="left" width="50%">Código:</td>
                <td align="center"><?php echo $codigo; ?></td>
            </tr>
            <tr>
                <td align="left">Nombre Completo:</td>
                <td align="center"><?php echo $nombre," ",$apellido; ?></td>
            </tr>
            <tr>
                <td colspan="2" align="center">INGRESOS</td>
            </tr>
            <tr>
                <td align="left">Sueldo Base:</td>
                <td align="center"><?php echo $sueldob; ?></td>
            </tr>
            <tr>
                <td align="left">Bonificación:</td>
                <td align="center"><?php echo $bonificacion; ?></td>
            </tr>
            <tr>
                <td align="left">Horas Extras(#):</td>
                <td align="center"><?php echo $hextras; ?></td>
            </tr>
            <tr>
                <td colspan="2" align="center">DESCUENTOS</td>
            </tr>
            <tr>
                <td align="left">Descuentos:</td>
                <td align="center"><?php echo $descuento; ?></td>
            </tr>
            <tr>
                <td align="left">IGSS:</td>
                <td align="center"><?php echo $igss; ?></td>
            </tr>
        </table>
<br>
        <table border="1" width="40%" align="center">
            <tr>
                <td colspan="2" align="center">DATOS GENERALES</td>
            </tr>
            <tr>
                <td align="left" width="50%">Total de Ingresos:</td>
                <td align="center"><?php echo $totalingresos; ?></td>
            </tr>
            <tr>
                <td align="left">Total de Descuentos:</td>
                <td align="center"><?php echo $igss; ?></td>
            </tr>
            <tr>
                <td align="left">Sueldo Liquido:</td>
                <td align="center"><?php echo $sueldoliquido; ?></td>
            </tr>
        </table>
    <body>
<html>
    </body>

</htmL>