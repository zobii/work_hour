<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php
echo "<div class='table'>";
    echo "<table>";
        //Zahlavi
    echo "<thead>";
        echo "<tr>
            <td rowspan='3'>Den v týdnu</td> <td rowspan='3'>Datum</td> <td colspan='4'>Pracovní doba</td>
            <td rowspan='3'>Přestávka</td><td rowspan='3'>Dovolená</td><td rowspan='3'>Suma</td>
            </tr>";

        echo "<tr> 
            <td colspan='2'>od</td> <td colspan='2'>do</td> 
            </tr>";

        echo "<tr>
            <td>hod.</td> <td>min.</td> <td>hod.</td> <td>min.</td>
            </tr>";
    echo "</thead>";
    echo "<tbody>";
        addTable();
    echo "</tbody>";
    echo "</table>";
echo "</div>";

function addTable() {

    for ($i = 0; $i < 5; $i++) {
        echo "<tr>
        <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
        </tr>";
    }

}
?>