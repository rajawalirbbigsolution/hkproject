<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function getHalaman($type,$bahasa,$limit) {
    $CI = get_instance();
    $halaman = $CI->Md_halaman->getHalamanByTypeByLangLimit($type,$bahasa,$limit);
    return $halaman;
}
function getKatalog($type,$bahasa,$limit) {
    $CI = get_instance();
    $halaman = $CI->Md_katalogg->getHalamanByTypeByLangLimit($type,$bahasa,$limit);
    return $halaman;
}
function getKategori() {
    $CI = get_instance();
    $halaman = $CI->Md_katalog->getHalamanByTypeByLangLimit();
    return $halaman;
}
