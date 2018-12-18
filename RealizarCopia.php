<?php

echo '<h2>Este formulario es para hacer copias de seguridad</h2>';
echo '<form action = "RealizarCopia.php" method = "POST">
    <table>
    <tr>
        <td>
            <input type="radio" name="rbCopia" value="0" checked="checked" />Todas las BD
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="rbCopia" value="0" />Una sola BD
        </td>
        <td>
            <input type="text" name="nombreBD" value="" size=""/>
        </td>
    </tr>
    <tr>
        <td>    
            <input type="submit" value="Realizar" name="realizar" />
        </td>
    </tr>
    </table>
</form>';
