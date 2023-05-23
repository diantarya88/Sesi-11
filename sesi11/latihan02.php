<?php
    $dta[0]["NAMA"] = "TaryAgstn";
    $dta[0]["TMPT_TGL_LAHIR"] = "Mataram,23-08-2003";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ALAMAT"] = "Tegallalang,Gianyar";
    $dta[0]["JURUSAN"] = "TI-KAB";

    $dta[1]["NAMA"] = "AryaSastra";
    $dta[1]["TMPT_TGL_LAHIR"] = "Gunung Sari, 04-08-2004";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ALAMAT"] = "Gentong,Gianyar";
    $dta[1]["JURUSAN"] = "TI-MTI";

    $dta[2]["NAMA"] = "TutIntari";
    $dta[2]["TMPT_TGL_LAHIR"] = "Abang, 05-12-2003";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ALAMAT"] = "Abangsongan-Kintamani";
    $dta[2]["JURUSAN"] = "-";

    header("Content-type: application/json; charset-utf-8");
    echo json_encode($dta);
