<?php
    $dta["NAMA"] = "Taryagstn";
    $dta["TMPT_TGL_LAHIR"] = "Mataram";
    $dta["JKEL"] = "P";
    $dta["ALAMAT"] = "Tegallalang,Gianyar";
    $dta["JURUSAN"] = "TI-KAB";

    header("Content-type: application/json; charset-utf-8");
    echo json_encode($dta);
