<?php

    session_start();
    include_once 'db.inc.php';

    $id = $_SESSION["id"];

    header("Location: https://usf.az1.qualtrics.com/jfe/form/SV_035W6jbOIB1M8N7"."?id=".$id);
