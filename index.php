<?php

//Start coding here

$big_array = array(    'lion',
                        'tiger',
                        'goat',
                        array('parrot','dove','duck',array('broiler','cockreil')),
                        );

echo "<pre>";
print_r($big_array);
echo "</pre>";

$listed_array = array();

function list_elemet($arr, $listed_array){
    
    global $listed_array;
    foreach($arr as $key => $value){
        if(is_array($value)){
            list_elemet($value, $listed_array);
        }else{
            $listed_array[] = $value;
        }
        
    }
    return $listed_array;
}

$new_listed = list_elemet($big_array, $listed_array);

echo "<pre>";
print_r($new_listed);
echo "</pre>";
