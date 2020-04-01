<?php

$arr = [
    0,
    [
        1,
        2,
        2,
        [
            4,
            5,
            [
                6,
                7,
                [
                  8,
                    [
                        0,
                        [
                            0,1,2,3,
                            [
                                1
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    3
];


echo "DEPTH IS: " . find9($arr);


function find9(array $arr, int $depth = 0): int {

    foreach ($arr as $item) {
        //print_r($item);
        //echo PHP_EOL;
        if (is_numeric($item)) {
            if ($item == '9') {
                return $depth;
            }
            continue;
        }

        if (is_array($item)) {
            return find9($item, $depth + 1);
        }
    }

    return -1;
}