<?php

















$arr = [10,2,3,4,5];

function x2(array $functionsArray)
{
    $len = count($functionsArray);
    for ($i = 0; $i < $len; $i++) {
        $functionsArray[$i] *= 2;
    }
}


function testObject(stdClass $obj) {
    $obj->name = "Oleg";
}



$obj = new stdClass();
$obj->name = "Viktor";
$obj->age = 27;
testObject($obj);


print_r($obj);

x2($arr);
print_r($arr);































$arr = [
    'type' => 'phone',
    'model' => 'Samsung',
    'price' => '100$'
];

$arr2 = ['apple', 'banana', 'pineapple', 'watermelon'];
$arr3 = [1,2,3,4,5];

function buildTable(array $arr): string {
    $html = "
        <table border='1'>
            <thead>
                <th>KEY</th>
                <th>VALUE</th>
            </thead>
        <tbody>";

    foreach ($arr as $field => $value) {
        $html .= "<tr>";
        $html .= "<td>$field</td>";
        $html .= "<td>$value</td>";
        $html .= "</tr>";
    }


    $html .= "</tbody></table>";

    return $html;
}


$html = buildTable($arr);
$html2 = buildTable($arr2);
echo $html;
echo $html2;