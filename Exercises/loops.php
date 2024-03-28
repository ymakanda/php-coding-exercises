<?php

    $userArrayObject = '[
        {
            "name" : "Eryn Bryan",
            "age" : "23",
            "company" : "Fishnix"
        },
        {
            "name" : "Hasnain O\'Ryan",
            "age" : "32",
            "company" : "Floataris"
        },
        {
            "name" : "Briony Mathews",
            "age" : "40",
            "company" : "Swishterix"
        }
    ]';
    
    $userArrayData = json_decode($userArrayObject, true);

    echo '<pre>';
        echo "\tName \t\tAge \tCompany \n";

        foreach($userArrayData as $value) {
            echo "\t".$value['name'] ."\t". $value['age'] ."\t". $value['company'] ."\n";
        }

    echo '</pre>';
?>