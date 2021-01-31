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
	      <form action="includes/db.sq11.php" method="POST">
    		    <!-- <div class="row" style="background-color:white"> -->
                <div id="panas_div" style="padding: 30px 70px 0px 90px">
                    <div class="row" style="background-color:white">
                    <table id="panas_table" class="table table-sm" style="font-size: 14px;">
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
                                <td class="border">Working with an AI teammate is a good idea</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">I disliked the idea of working with AI teammate</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">Working with AI teammate for brainstorming was pleasant</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="atwwa3" value="5"></label>
                                </td>
                            </tr>
                        </tbody>
                        <br><br><br>
                        <tbody>
                            <tr>
                                <td class="border">To what extent does it seem like the AI have a mind of its own?</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">To what extent does is seem like the AI have an intention of its own?</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">To what extent does it seem like the AI have a free will of its own?</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro3" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">To what extent does it seem like the AI have a consciousness of its own?</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro4" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro4" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro4" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro4" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="anthro4" value="5"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div><br><br><br><br><br><br><br>
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
				'input[name="atwwa1"]:checked');
			var checkRadio2 = document.querySelector(
				'input[name="atwwa2"]:checked');
			var checkRadio3 = document.querySelector(
				'input[name="atwwa3"]:checked');

      var checkRadio4 = document.querySelector(
				'input[name="anthro1"]:checked');
			var checkRadio5 = document.querySelector(
				'input[name="anthro2"]:checked');
			var checkRadio6 = document.querySelector(
				'input[name="anthro3"]:checked');
      var checkRadio7 = document.querySelector(
        'input[name="anthro4"]:checked');

			if((checkRadio1 == null) || (checkRadio2 == null) || (checkRadio3 == null) || (checkRadio4 == null) || (checkRadio5 == null) || (checkRadio6 == null) || (checkRadio7 == null)) {
				document.getElementById("disp").innerHTML
					= "Kindly provide all input to proceed to next page ";
					return false;
					window.location.replace(window.location.href.replace("survey-ques11", 'survey-ques11'))
			} else if((checkRadio1 != null) && (checkRadio2 != null) && (checkRadio3 != null) || (checkRadio4 == null) || (checkRadio5 == null) || (checkRadio6 == null) || (checkRadio7 == null)) {
				  document.getElementById("disp").innerHTML
					= "Thanks for answering all questions ";

      }
    }
  </script>
</html>
