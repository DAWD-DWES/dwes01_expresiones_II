<!DOCTYPE html>
<html>
    <head>
        <title>Pogramación con expresiones</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Expresiones numéricas</h2>
        <table>
            <tbody>
                <tr>
                    Obtención de una nota simbólica a partir de una nota numérica
                </tr>
                <tr>
                    <td></td>
                    <td>5 + 3 - 2 * 7;</td>
                    <td class="conversion"><?php var_dump(5 + 3 - 2 * 7); ?></td>
                </tr>
            </tbody>
            <tr>
                <td></td>
                <td>10 * 2 / 4 + 2</td>
                <td class="conversion"><?php var_dump(10 * 2 / 4 + 2); ?></td>
            </tr>
            <tr>
                <td>$count1 = 5</td>
                <td>($count1++ * 2) + ($count1-- * 3)</td>
                <td class="conversion"><?php
                    $count1 = 5;
                    var_dump(($count1++ * 2) + ($count1-- * 3));
                    ?></td>
            </tr>
            <tr>
                <td>$count2 = 5</td>
                <td>(++$count2 * 2) + (--$count2 * 3)</td>
                <td class="conversion"><?php
                    $count2 = 5;
                    var_dump((++$count2 * 2) + (--$count2 * 3));
                    ?></td>
            </tr>
            <tr>
                <td><pre>$base = 2;
$exponente = 6</pre></td>
                <td>$base ** $exponent / 2</td>
                <td class="conversion"><?php
                    $base = 2;
                    $exponent = 6;
                    var_dump($base ** $exponent / 2);
                    ?></td>
            </tr>
            <tr>
                <td><pre>$nombre = 'Juan';
$apellido = 'Pérez'</pre></td>
                <td>$nombre . ' ' . $apellido</td>
                <td class="conversion"><?php
                    $nombre = 'Juan';
                    $apellido = 'Pérez';
                    var_dump($nombre . ' ' . $apellido);
                    ?></td>
            </tr>
            <tr>
                <td><pre>$valor = 13; // Binario 1101 
$mascara = 3; // Binario 0011</pre></td>
                <td>$valor & $mascara</td>
                <td class="conversion"><?php
                    $valor = 13;
                    $mascara = 3;
                    var_dump($valor & $mascara);
                    ?></td>
            </tr>
            <tr>
                <td>$num1 = 0b00010000; // Binario 00010000</td>
                <td>$num1 >> 3</td>
                <td class="conversion"><?php
                    $num1 = 0b00010000;
                    var_dump($num1 >> 3);
                    ?></td>
            </tr>
            <tr>
                <td></td>
                <td>$a = ($b = 4) + 5</td>
                <td class="conversion"><?php
                    var_dump($a = ($b = 4) + 5);
                    ?></td>
            </tr>
            <tr>
                <td><pre>$car1 = 'supercali';
$car2 = 'fragilistico';</pre></td>
                <td>$car1 .= $car2 .= 'espialidoso'</td>
                <td class="conversion"><?php
                    $car1 = 'supercali';
                    $car2 = 'fragilistico';
                    var_dump($car1 .= $car2 .= 'espialidoso');
                    ?></td>
            </tr>
            <tr>
                <td>$nota = 95;</td>
                <td>$nota >= 90 && $nota <= 100</td>
                <td class="conversion"><?php
                    $nota = 95;
                    var_dump($nota >= 90 && $nota <= 100);
                    ?></td>
            </tr>
            <tr>
                <td></td>
                <td>!(5 - 3 * 2 / 2 > 7 % 3)</td>
                <td class="conversion"><?php
                    var_dump(!(5 - 3 * 2 / 2 > 7 % 3));
                    ?></td>
            </tr>
            <tr>
                <td><pre>$tiene_tarjeta = true; 
$tiene_efectivo = false</pre></td>
                <td>$tiene_tarjeta && !$tiene_efectivo</td>
                <td class="conversion"><?php
                    $tiene_tarjeta = true;
                    $tiene_efectivo = false;
                    var_dump($tiene_tarjeta && !$tiene_efectivo);
                    ?></td>
            </tr>
            <tr>
                <td></td>
                <td>true || 1/0</td>
                <td class="conversion"><?php var_dump(true || 1 / 0); ?></td>
            </tr>
            <tr>
                <td>$edad = 17;</td>
                <td>($edad >= 18) ? "Si" : "No"</td>
                <td class="conversion"><?php
                    $edad = 17;
                    var_dump(($edad >= 18) ? "Si" : "No");
                    ?></td>
            </tr>

            <tr>
                <td>$ruta = '';</td>
                <td>$ruta ?: '/'</td>
                <td class="conversion"><?php
                    $ruta = null;
                    var_dump($ruta ?: '/');
                    ?></td>
            </tr>
            <tr>
                <td>$ruta = null;</td>
                <td>$ruta ?? '/'</td>
                <td class="conversion"><?php
                    $ruta = null;
                    var_dump($ruta ?? '/');
                    ?></td>
            </tr>
            <tr>
                <td>$edad = 17;</td>
                <td>($edad >= 18) ? "Si" : "No"</td>
                <td class="conversion"><?php
                    $edad = 17;
                    var_dump(($edad >= 18) ? "Si" : "No");
                    ?></td>
            </tr>
            <tr>
                <td>$dia = 'Lunes';</td>
                <td><pre>match ($day) {
    'Lunes' => 'Es el comienzo de la semana',
    'Martes', 'Miercoles', 'Jueves', 'Viernes' => 'Es un día entre semana',
    'Saturday', 'Sunday' => 'Es el fin de semana',
    default => 'No es un día de la semana'
};</pre></td>
                <td class="conversion"><?php
                    $dia = 'Lunes';
                    var_dump(match ($dia) {
                        'Lunes' => 'Es el comienzo de la semana',
                        'Martes', 'Miercoles', 'Jueves', 'Viernes' => 'Es un día entre semana',
                        'Saturday', 'Sunday' => 'Es el fin de semana',
                        default => 'No es un día de la semana'
                    });
                    ?></td>
            </tr>

        </table>
    </body>
</html>