<?php 
// example for jquery.ui.combobox.ajax.js

function getTestItemsData() {
    $result_array = [];

    // values
    $test_var["LABEL"] = "Blue";
    $test_var["VALUE"] = "0";
    array_push($result_array, $test_var);
    $test_var["LABEL"] = "Red";
    $test_var["VALUE"] = "1";
    array_push($result_array, $test_var);
    $test_var["LABEL"] = "Green";
    $test_var["VALUE"] = "2";
    array_push($result_array, $test_var);
    $test_var["LABEL"] = "White";
    $test_var["VALUE"] = "3";
    array_push($result_array, $test_var);
    $test_var["LABEL"] = "Black";
    $test_var["VALUE"] = "4";
    array_push($result_array, $test_var);

    return $result_array;
}

function getTestItems($term) {
    $data = getTestItemsData();

    $result_array = [];

    foreach ($data as $element) {
        $temp_element = strtolower(trim($element["LABEL"]));
        if(strlen(trim($term)) !== 0) {
            $pos = strpos($temp_element, strtolower(trim($term)));
            if ($pos !== false) {
                array_push($result_array, $element);
            }
        } else {
            array_push($result_array, $element);
        }
        
    }

    header("Content-type:application/json");
    echo json_encode($result_array);
}

// ajax switch
if(isset($_GET['method']) && !empty($_GET['method'])) {
    $method = $_GET['method'];
    if(isset($_GET['term']) && !empty($_GET['term'])) {
        $term = $_GET['term'];
    }
    switch($method) {
        case 'getTestItems' : getTestItems($term); break;
    }
}
?>