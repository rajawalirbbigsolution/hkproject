<?php

function bulan($param) {
    switch ($param) {
        case 'Jan':
            $id = 'Januari';
            break;
        case 'Feb':
            $id = 'Februari';
            break;
        case 'Mar':
            $id = 'Maret';
            break;
        case 'Apr':
            $id = 'April';
            break;
        case 'May':
            $id = 'Mei';
            break;
        case 'Jun':
            $id = 'Juni';
            break;
        case 'Jul':
            $id = 'Juli';
            break;
        case 'Aug':
            $id = 'Agustus';
            break;
        case 'Sep':
            $id = 'September';
            break;
        case 'Oct':
            $id = 'Oktober';
            break;
        case 'Nov':
            $id = 'November';
            break;
        case 'Dec':
            $id = 'Desember';
            break;
    }
    return $id;
}

function bulan_simple($param) {
    switch ($param) {
        case 'May':
            $id = 'Mei';
            break;
        case 'Aug':
            $id = 'Agu';
            break;
        case 'Oct':
            $id = 'Okt';
            break;
        case 'Dec':
            $id = 'Des';
            break;
        default :
            $id = $param;
            break;
    }
    return $id;
}
