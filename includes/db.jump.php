<?php

    session_start();
    include_once 'db.inc.php';

    function randList($min, $max, $quantity) {
      $numbers = range($min, $max);
      shuffle($numbers);
      return array_slice($numbers, 0, $quantity);
    }

    $sqarr = randList(1,11,11);

    $here = $sqarr[0];
    $sqarr = array_diff($sqarr, [$here]);
    $sqarr = array_values($sqarr);

    $_SESSION['sqarr'] = $sqarr;

    header("Location: ../survey-ques".$here.".php?user_inf=success");
