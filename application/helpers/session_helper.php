<?php

function user() {
    $data_pengguna = $this->Md_pengguna->getPenggunabyId($this->session->userdata('user_id'));
    $nama = $data_pengguna[0]->nama;
    return $nama;

//    $data_member = $this->Md_member->getMemberbyId($this->session->userdata('user_id'));
//    $nama = $data_member[0]->nama;
//    return $nama;
}
