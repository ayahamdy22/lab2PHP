<?php
$arr = ["php", "os", "DotNet", "open source"];

unset($arr[2]);
print_r($arr);

echo "<br/><br/>task 2 ===================<br/><br/>";

function displayArr($arr2)
{

    $newaArr = array_keys($arr2[0]);

    echo "<table border=1>";
    echo "<thead>";
    echo "<tr>";

    foreach ($newaArr as $keys) {
        echo "<th>$keys</th <br>";
    }

    echo "</tr>";
    echo "</thead>";

    echo "<tbody >";
    foreach ($arr2 as $keys) {
        echo "<tr>";
        foreach ($keys as $values) {
            echo "<td>$values</td>";
        }
        echo "</tr>";
    }

    echo "</tbody >";
}

displayArr([
    ["name" => "aya", "age" => 26, "address" => "banha"],
    ["name" => "shery", "age" => 28, "address" => "cairo"],
    ["name" => "eman", "age" => 26, "address" => "menofia"],
]);


// function displayArr()
// {
//     $arr2 = [
//         ["name" => "aya", "age" => 26, "address" => "banha"],
//         ["name" => "shery", "age" => 28, "address" => "cairo"],
//         ["name" => "eman", "age" => 26, "address" => "menofia"],
//     ];

//     $newaArr = array_keys($arr2[0]);

//     echo "<table border=1>";
//     echo "<thead>";
//     echo "<tr>";

//     foreach ($newaArr as $keys) {
//         echo "<th>$keys</th <br>";
//     }

//     echo "</tr>";
//     echo "</thead>";

//     echo "<tbody >";
//     foreach ($arr2 as $keys) {
//         echo "<tr>";
//         foreach ($keys as $values) {
//             echo "<td>$values</td>";
//         }
//         echo "</tr>";
//     }

//     echo "</tbody >";
// }

// displayArr();