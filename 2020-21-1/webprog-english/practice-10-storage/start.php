<?php require_once('storage.php');


$storage = new JSONStorage('data.json');


function verify_post(...$inputs) {
    foreach ($inputs as $input) {
        if (!isset($_POST[$input])) {
            return FALSE;
        }
    }
    return TRUE;
}

function verify_get(...$inputs) {
    foreach ($inputs as $input) {
        if (!isset($_GET[$input])) {
            return FALSE;
        }
    }
    return TRUE;
}