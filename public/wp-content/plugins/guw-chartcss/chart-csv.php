<?php
// error_reporting(E_ALL); 
// ini_set("display_errors", 1);

require_once("../../../wp-load.php");

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

if(!empty($_POST)){
    
    // extract($_POST);

    // echo '<pre>';
    // var_dump($_POST['cases']);
    // echo '</pre>';

    $objs = unserialize(base64_decode($_POST['objs']));

    // echo '<pre>';
    // var_dump($cases);
    // echo '</pre>';

    process_csv_post_data($objs);
}
