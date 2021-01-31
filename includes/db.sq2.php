<?php

  // if (isset($_POST['submit'])) {
    session_start();
    include_once 'db.inc.php';

    $_SESSION['sp1'] = mysqli_real_escape_string($conn, $_POST['sp1']);
    $_SESSION['sp2'] = mysqli_real_escape_string($conn, $_POST['sp2']);
    $_SESSION['sp3'] = mysqli_real_escape_string($conn, $_POST['sp3']);
    $_SESSION['sp4'] = mysqli_real_escape_string($conn, $_POST['sp4']);

    if (empty($_SESSION['sqarr'])) {
        $sql1 = "INSERT INTO survey_ans1 (u_id, iat1, iat2, iat3, sp1, sp2, sp3, sp4, so1, so2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['participantUid'], $_SESSION['iat1'], $_SESSION['iat2'], $_SESSION['iat3'], $_SESSION['sp1'], $_SESSION['sp2'], $_SESSION['sp3'], $_SESSION['sp4'], $_SESSION['so1'], $_SESSION['so2']);
            mysqli_stmt_execute($stmt);
        }

        $sql1 = "INSERT INTO survey_ans2 (u_id, so3, so4, st1, st2, st3, st4, ea1, ea2, pmv1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['participantUid'], $_SESSION['so3'], $_SESSION['so4'], $_SESSION['st1'], $_SESSION['st2'], $_SESSION['st3'], $_SESSION['st4'], $_SESSION['ea1'], $_SESSION['ea2'], $_SESSION['pmv1']);
            mysqli_stmt_execute($stmt);
        }

        $sql1 = "INSERT INTO survey_ans3 (u_id, pmv2, pmv3, pmv4, pfv1, pfv2, pfv3, pfv4, cap1, cap2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['participantUid'], $_SESSION['pmv2'], $_SESSION['pmv3'], $_SESSION['pmv4'], $_SESSION['pfv1'], $_SESSION['pfv2'], $_SESSION['pfv3'], $_SESSION['pfv4'], $_SESSION['cap1'], $_SESSION['cap2']);
            mysqli_stmt_execute($stmt);
        }

        $sql1 = "INSERT INTO survey_ans4 (u_id, cap3, cap4, sco1, sco2, sco3, sco4, sco5, sco6, sco7) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['participantUid'], $_SESSION['cap3'], $_SESSION['cap4'], $_SESSION['sco1'], $_SESSION['sco2'], $_SESSION['sco3'], $_SESSION['sco4'], $_SESSION['sco5'], $_SESSION['sco6'], $_SESSION['sco7']);
            mysqli_stmt_execute($stmt);
        }

        $sql1 = "INSERT INTO survey_ans5 (u_id, sco8, sco9, sco10, sco11, swa1, swa2, scs1, scs2, scs3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $_SESSION['participantUid'], $_SESSION['sco8'], $_SESSION['sco9'], $_SESSION['sco10'], $_SESSION['sco11'], $_SESSION['swa1'], $_SESSION['swa2'], $_SESSION['scs1'], $_SESSION['scs2'], $_SESSION['scs3']);
            mysqli_stmt_execute($stmt);
        }

        $sql1 = "INSERT INTO survey_ans6 (u_id, ap1, ap2, ap3, atwwa1, atwwa2, atwwa3, anthro1, anthro2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "sssssssss", $_SESSION['participantUid'], $_SESSION['ap1'], $_SESSION['ap2'], $_SESSION['ap3'], $_SESSION['atwwa1'], $_SESSION['atwwa2'], $_SESSION['atwwa3'], $_SESSION['anthro1'], $_SESSION['anthro2']);
            mysqli_stmt_execute($stmt);
        }

        $sql1 = "INSERT INTO survey_ans7 (u_id, anthro3, anthro4) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $_SESSION['participantUid'], $_SESSION['anthro3'], $_SESSION['anthro4']);
            mysqli_stmt_execute($stmt);
        }

        header("Location: ../thank-you.php?user_inf=success");
    } else {
        $here = $_SESSION['sqarr'][0];
        $_SESSION['sqarr'] = array_diff($_SESSION['sqarr'], [$here]);
        $_SESSION['sqarr'] = array_values($_SESSION['sqarr']);

        header("Location: ../survey-ques".$here.".php?user_inf=success");
    }
  // }
  // else {
  //   header("Location: ../info.php?user_inf=error");
  // }
