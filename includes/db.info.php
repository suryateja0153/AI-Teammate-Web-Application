<?php

    session_start();
    include_once 'db.inc.php';

    $_SESSION['participantUid'] = $_POST['participantUid'];

    // To randomize and check for the count of randomizer in database
    $count = "SELECT key_param FROM (
              SELECT key_param, COUNT(*) as TOTALCOUNT
              FROM info_consent
              GROUP BY key_param) k
              WHERE TOTALCOUNT >= 50;";
    $result = mysqli_query($conn, $count);
    $arr = array();

    while($row = mysqli_fetch_assoc($result))
    {
        $arr[] = $row['key_param'];
    }

    $input = array('LLL', 'LLH', 'LHL', 'LHH', 'HLL', 'HLH', 'HHL', 'HHH');
    $filtered = array_diff($input, $arr);
    $keyParam = $filtered[array_rand($filtered)];
    $_SESSION['keyParam'] = $keyParam;

    $randomizer = array('1' => 'LLL', '2' => 'LLH', '3' => 'LHL', '4' => 'LHH', '5' => 'HLL', '6' => 'HLH', '7' => 'HHL', '8' => 'HHH');
    $random = array_search($keyParam, $randomizer);
    $_SESSION['random'] = $random;

    // Entering data into database
    $participantFullName = mysqli_real_escape_string($conn, $_POST['participantFullName']);
    $participantUid = mysqli_real_escape_string($conn, $_POST['participantUid']);
    $participantMail = mysqli_real_escape_string($conn, $_POST['participantMail']);

    $sql = "INSERT INTO info_consent (u_id, student_name, student_mail, random, key_param) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $participantUid, $participantFullName, $participantMail, $random, $keyParam);
        mysqli_stmt_execute($stmt);
    }

    header("Location: ../info.php?user_inf=success");

