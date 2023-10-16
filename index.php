<!DOCTYPE html>
<html>
    <head>
        <title>Pogramación con expresiones</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Programación con expresiones</h2>
        <table>
            <tbody>
                <tr><td colspan="3">Obtención de una nota simbólica a partir de una nota numérica</td></tr>
                <tr>
                    <td>$notaNumerica = 85;</td>
                    <td><pre>match (true) {
    $notaNumerica >= 90 => 'A',
    $notaNumerica >= 80 => 'B',
    $notaNumerica >= 70 => 'C',
    $notaNumerica >= 60 => 'D',
    $notaNumerica < 60 => 'F',
    default => 'Nota inválida'
}</pre></td>
                    <td class="conversion">
                        <?php
                        $notaNumerica = 85;
                        echo "La nota corresponde a ", match (true) {
                            $notaNumerica >= 90 => 'A',
                            $notaNumerica >= 80 => 'B',
                            $notaNumerica >= 70 => 'C',
                            $notaNumerica >= 60 => 'D',
                            $notaNumerica < 60 => 'F',
                            default => 'Nota inválida'
                        };
                        ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr><td colspan="3">Cálculo del precio final después de aplicar un descuento</td></tr>
                <tr>
                    <td><pre>$precio = 563;
$descuento = 15;</pre></td>
                    <td>$precio * (1 - $descuento / 100);</td>
                    <td class="conversion">
                        <?php
                        $precio = 563;
                        $descuento = 15;
                        echo "El precio final es " . $precio * (1 - $descuento / 100);
                        ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td colspan = "3">Determina si un año es bisiesto</td>
                </tr>
                <tr>
                    <td>$anio = 2023;</td>
                    <td>($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)</td>
                    <td class="conversion"><?php
                        $anio = 2023;
                        echo "El año $anio " . ((($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) ? "es bisiesto" : "no es bisiesto");
                        ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Conversión de Celsius a Farenheit</td></tr>
                <tr>
                    <td>$celsius = 25;</td>
                    <td>($celsius * 9/5) + 32</td>
                    <td class="conversion"><?php
                        $celsius = 25;
                        echo "$celsius grados Celsius corresponden a " . ($celsius * 9 / 5) + 32 . " grados Farenheit";
                        ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr><td colspan = "3">Comprueba si una fecha es correcta</td><tr>
                <tr><td><pre>$dia = 28;
        $mes = 2;
        $anio = 1399;</pre></td>
                    <td><pre>($anyo > 1000) && ($anyo < 3000) &&
                (match ($mes) {
                    4, 6, 9, 11 => ($dia >= 1) && ($dia <= 30),
                    1, 3, 5, 7, 8, 10, 12 => ($dia >= 1) && ($dia <= 30),
                    2 => ($dia >= 1) && (( ($anyo % 4 == 0 && $anyo % 100 != 0) 
                    || $anyo % 400 == 0 )) ? $dia <= 29 : $dia <= 29,
                    default => false
                })</pre></td>
                    <td class="conversion"><?php
                        $dia = 28;
                        $mes = 2;
                        $anio = 1399;
                        echo "La fecha $dia//$mes//$anio " . (($anio > 1000) && ($anio < 3000) &&
                        (match ($mes) {
                            4, 6, 9, 11 => ($dia >= 1) && ($dia <= 30),
                            1, 3, 5, 7, 8, 10, 12 => ($dia >= 1) && ($dia <= 30),
                            2 => ($dia >= 1) && (( ($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0 )) ? $dia <= 29 : $dia <= 29,
                            default => false
                        })) ? "es correcta" : "no es correcta";
                        ?></td>
                </tr>
            <tbody>
                <tr>
                    <td>Obtener las iniciales de un nombre y apellidos</td>
                </tr>
                <tr>
                    <td>$nombre = 'Juan Perez Martinez';</td>
                    <td>str_replace(range('a', 'z'), '', $nombre)</td>
                    <td class="conversion">
                        <?php
                        $nombre = 'Juan Perez Martinez';
                        echo "Las iniciales de $nombre son " . str_replace(range('a', 'z'), '', $nombre);
                        ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
