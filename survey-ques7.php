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
	      <form action="includes/db.sq7.php" method="POST">
    		    <div class="row" style="background-color:white">
                <div id="panas_div" style="padding: 30px 70px 0px 90px">
                    <table id="panas_table" class="table table-sm" style="font-size:14px;">
                        <thead>
                            <tr>
                                <th class="border" >Survey Question</th>
                                <th class="border">Strongly disagree</th>
                                <th class="border">Disagree</th>
                                <th class="border">Neither agree nor disagree</th>
                                <th class="border">Agree</th>
                                <th class="border">Strongly agree</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">I often compare myself with others with respect to what I have accomplished in life</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">If I want to learn more about something, I try to find out what others think about it</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">I always pay a lot of attention to how I do things compared with how others do things</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco3" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I often compare how my loved ones (boy or girlfriend, family members, etc.) are doing with how others are doing</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco4" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco4" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco4" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco4" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco4" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I always like to know what others in a similar situation would do</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco5" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco5" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco5" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco5" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco5" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I am not the type of person who compares often with others</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco6" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco6" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco6" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco6" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco6" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">If I want to find out how well I have done something, I compare what I have done with how others have done</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco7" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco7" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco7" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco7" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco7" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I often try to find out what others think who face similar problems as I face</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco8" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco8" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco8" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco8" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco8" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I often like to talk with others about mutual opinions and experiences</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco9" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco9" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco9" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco9" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco9" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I never consider my situation in life relative to that of other people</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco10" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco10" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco10" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco10" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco10" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I often compare how I am doing socially (e.g., social skills, popularity) with other people</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco11" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco11" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco11" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco11" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="sco11" value="5"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><br>
          	<div id="disp" style=
          		"color:green; font-size:18px; font-weight:bold;">
          	</div>
            <div style="background-color:white; height:50px; margin-right: -15px; margin-left: -15px;padding: 5px 20px 100px 0px;">
                <div style="float:right; padding-right:50px">
                    <button onclick="display()" type="submit" id="consentNext" class="btn btn-primary">Next</button>
                </div>
            </div>
        </form>
    </div>
</body>
	<script type="text/javascript">

		function display() {
			var checkRadio1 = document.querySelector(
				'input[name="sco1"]:checked');
			var checkRadio2 = document.querySelector(
				'input[name="sco2"]:checked');
			var checkRadio3 = document.querySelector(
				'input[name="sco3"]:checked');
      var checkRadio4 = document.querySelector(
				'input[name="sco4"]:checked');
			var checkRadio5 = document.querySelector(
				'input[name="sco5"]:checked');
			var checkRadio6 = document.querySelector(
				'input[name="sco6"]:checked');
      var checkRadio7 = document.querySelector(
				'input[name="sco7"]:checked');
			var checkRadio8 = document.querySelector(
				'input[name="sco8"]:checked');
			var checkRadio9 = document.querySelector(
				'input[name="sco9"]:checked');
      var checkRadio10 = document.querySelector(
				'input[name="sco10"]:checked');
			var checkRadio11 = document.querySelector(
				'input[name="sco11"]:checked');

			if((checkRadio1 == null) || (checkRadio2 == null) || (checkRadio3 == null) || (checkRadio4 == null) || (checkRadio5 == null) || (checkRadio6 == null) ||(checkRadio7 == null) || (checkRadio8 == null) || (checkRadio9 == null) || (checkRadio10 == null) || (checkRadio11 == null)) {
				document.getElementById("disp").innerHTML
					= "Kindly provide all input to proceed to next page ";
					return false;
					window.location.replace(window.location.href.replace("survey-ques7", 'survey-ques7'))
			} else if((checkRadio1 != null) && (checkRadio2 != null) && (checkRadio3 != null) || (checkRadio4 == null) || (checkRadio5 == null) || (checkRadio6 == null) ||(checkRadio7 == null) || (checkRadio8 == null) || (checkRadio9 == null) || (checkRadio10 == null) || (checkRadio11 == null)) {
				  document.getElementById("disp").innerHTML
					= "Thanks for answering all questions ";

      }
    }
  </script>
</html>
