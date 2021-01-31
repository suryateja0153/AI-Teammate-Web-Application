<?php

  // if (isset($_POST['submit'])) {
    session_start();
    include_once 'db.inc.php';

    $u_id = mysqli_real_escape_string($conn, $_SESSION['participantUid']);
    $keyParams = mysqli_real_escape_string($conn, $_SESSION['keyParam']);
    $randoms = mysqli_real_escape_string($conn, $_SESSION['random']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $ethnicity = mysqli_real_escape_string($conn, $_POST['ethnicity']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $workexperience = mysqli_real_escape_string($conn, $_POST['workexperience']);
    $education = mysqli_real_escape_string($conn, $_POST['education']);


    $sql = "INSERT INTO info_conti (u_id, key_param, fullname, gender, ethnicity, age, workexperience, education) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssss", $u_id, $keyParams, $name, $gender, $ethnicity, $age, $workexperience, $education);
        mysqli_stmt_execute($stmt);
    }

    for ($x = 1; $x <= 8; $x++) {
      if ($randoms == $x) {
        header("Location: ../cases/c".$randoms."/bot-intro".$randoms.".php?user_inf=success");
      }
    }
  // }
  // else {
  //   header("Location: ../info.php?user_inf=error");
  // }
