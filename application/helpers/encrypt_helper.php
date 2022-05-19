<?php

function encrypt($param) {
    $id = $param * 44 + 37;
    return $id;
}

function decrypt($param) {
    $id = ($param - 37) / 44;
    return $id;
}
