<?php

function harifull($param) {
    switch ($param) {
        case 'Monday':
            $id = 'Senin';
            break;
        case 'Tuesday':
            $id = 'Selasa';
            break;
        case 'Wednesday':
            $id = 'Rabu';
            break;
        case 'Thursday':
            $id = 'Kamis';
            break;
        case 'Friday':
            $id = 'Jumat';
            break;
        case 'Saturday':
            $id = 'Sabtu';
            break;
        case 'Sunday':
            $id = 'Minggu';
            break;
    }
    return $id;
}


function hari($param) {
    switch($param) {
    case 'Mon':
        $id = 'Senin';
        break;
    case 'Tue':
        $id = 'Selasa';
        break;
    case 'Wed':
        $id = 'Rabu';
        break;
    case 'Thu':
        $id = 'Kamis';
        break;
    case 'Fri':
        $id = 'Jumat';
        break;
    case 'Sat':
        $id = 'Sabtu';
        break;
    case 'Sun':
        $id = 'Minggu';
        break;
}
    return $id;
}
