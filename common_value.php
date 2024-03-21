<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Common Elements</title>
<style>
    .common-elements {
        font-weight: bold;
        color: #008000;
    }
</style>
</head>
<body>

<?php
function findCommonElements($array1, $array2) {
    $commonElements = array();

    foreach ($array1 as $element) {
        if (in_array($element, $array2)) {
            $commonElements[] = $element;
        }
    }

    return $commonElements;
}

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(3, 4, 5, 6, 7);

echo "<h3>Given elements in Array1 are: ";
foreach ($array1 as $key => $element) {
    echo $element;
    if ($key != count($array1) - 1) {
        echo ", ";
    }
}
echo "</h3>";

echo "<h3>Given elements in Array2 are: ";
foreach ($array2 as $key => $element) {
    echo $element;
    if ($key != count($array2) - 1) {
        echo ", ";
    }
}
echo "</h3>";

$common = findCommonElements($array1, $array2);

echo "<h3 class='common-elements'>Common elements are: ";
foreach ($common as $key => $element) {
    echo $element;
    if ($key != count($common) - 1) {
        echo ", ";
    }
}
echo "</h3>";
?>

</body>
</html>
