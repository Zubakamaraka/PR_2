<?php
function ls() {
    $output=null;
    $result_code=null;
    return exec('ls /', $output, $result_code);
}

function ps() {
    $output=null;
    $result_code=null;
    return exec('ps', $output, $result_code);
}

function whoami() {
    $output=null;
    $result_code=null;
    return exec('whoami', $output, $result_code);
}

function id() {
    $output=null;
    $result_code=null;
    return exec('id', $output, $result_code);
}

function pwd() {
    $output=null;
    $result_code=null;
    return exec('pwd', $output, $result_code);
}
