<?php

error_reporting(E_ERROR | E_PARSE);	


$aRegionAry = [
    "results" => [
        [
            "id" => "1000",
            "text" => "Branch A",
            "selected" => false,
            "disabled" => false
        ],
        [
            "id" => "10001",
            "text" => "Branch B",
            "selected" => false,
            "disabled" => false
        ],
        [
            "id" => "10002",
            "text" => "Branch C",
            "selected" => false,
            "disabled" => false
        ],
        [
            "id" => "10003",
            "text" => "Branch D",
            "selected" => false,
            "disabled" => false
        ]
    ]
];

header('Content-Type: application/json; charset=utf-8');


if($_GET["regioncode"] == "0001")
{
    echo json_encode($aRegionAry , JSON_UNESCAPED_UNICODE);
}
else 
{
    echo json_encode(array() , JSON_UNESCAPED_UNICODE);
}   


