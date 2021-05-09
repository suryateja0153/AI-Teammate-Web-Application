<?php

    session_start();
    include_once 'db.inc.php';

    date_default_timezone_set('America/New_York');
    $timeNow = date('Y/m/d H:i:s');

    $dataString = $_POST['userMessage'];
    
    $participantUid = mysqli_real_escape_string($conn, $_SESSION['participantUid']);

    $sql1 = "INSERT INTO brain_storming (u_id, text_input, time_in) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql1)) {
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $participantUid, $dataString, $timeNow);
        mysqli_stmt_execute($stmt);
    }
