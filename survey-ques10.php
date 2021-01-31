<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<style>
  #myProgress {
    width: 100%;
    height: 30px;
    position: relative;
    background-color: #ddd;
  }

  #myBar {
    background-color: #4CAF50;
    width: 0px;
    height: 30px;
    position: absolute;
  }
</style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body style="background-color:#006747">
    <div class="container" style="height:100vh;width:100%;background-color:white ">
        <div class="row" style="height:5vh; background-color:#CFC493">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50">Post Survey</button><br>
        </div>
	      <form action="includes/db.sq10.php" method="POST">
    		    <div class="row" style="background-color:white">
                <div id="panas_div" style="padding: 30px 70px 0px 90px">
                    <div class="row" style="background-color:white">
                        <div id="panas_div" style="padding: 30px 70px 0px 90px">
                          <p>Pick One:</p>
                          <label><input type="radio" id="Option1" name="ap1" value="1">
                          <span style="padding-left:10px">My AI teammate was generating ideas faster than I was</span></label><br>
                          <label><input type="radio" id="Option2" name="ap2" value="1">
                          <span style="padding-left:10px">My AI teammate was generating ideas slower than I was</span></label><br>
                          <label><input type="radio" id="Option3" name="ap3" value="1">
                          <span style="padding-left:10px">My AI teammate was generating ideas at about the same rate that I was</span></label><br>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          	<div id="disp" style=
          		"color:green; font-size:18px; font-weight:bold;">
          	</div>
            <div style="background-color:white; height:50px; margin-right: -15px; margin-left: -15px;padding: 5px 20px 100px 0px;">
                <div style="float: right; padding-right:50px">
                    <button onclick="display()" type="submit" id="consentNext" class="btn btn-primary">Next</button>
                </div>
            </div>
        </form>
    </div>
</body>
	<script type="text/javascript">

		function display() {
			var checkRadio1 = document.querySelector(
				'input[name="ap1"]:checked');
			var checkRadio2 = document.querySelector(
				'input[name="ap2"]:checked');
			var checkRadio3 = document.querySelector(
				'input[name="ap3"]:checked');

			if((checkRadio1 == null) || (checkRadio2 == null) || (checkRadio3 == null)) {
				document.getElementById("disp").innerHTML
					= "Kindly provide all input to proceed to next page ";
					return false;
					window.location.replace(window.location.href.replace("survey-ques10", 'survey-ques10'))
			} else if((checkRadio1 != null) && (checkRadio2 != null) && (checkRadio3 != null)) {
				  document.getElementById("disp").innerHTML
					= "Thanks for answering all questions ";

      }
    }
  </script>
</html>
