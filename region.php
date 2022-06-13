<?php

$jayParsedAry = [
    "results" => [
        [
            "id" => "0000",
            "text" => "Head Quarters",
            "selected" => false,
            "disabled" => false
        ],
        [
            "id" => "0001",
            "text" => "A Region",
            "selected" => false,
            "disabled" => false
        ],
        [
            "id" => "0002",
            "text" => "B Region",
            "selected" => false,
            "disabled" => false
        ],
        [
            "id" => "0003",
            "text" => "C Region",
            "selected" => false,
            "disabled" => false
        ]
    ]
];



header('Content-Type: application/json; charset=utf-8');
echo json_encode($jayParsedAry , JSON_UNESCAPED_UNICODE);