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
	      <form action="includes/db.sq1.php" method="POST">
    		    <div class="row" style="background-color:white">
                <div id="panas_div" style="padding: 30px 70px 0px 90px">
                    <table id="panas_table" class="table table-sm">
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
                                <td class="border">The AI teammate reminds me of myself</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">If I were describing myself to other colleagues, this AI teammate would likely be something I would mention</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">Working with the AI teammate felt like working with someone who is like me</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="iat3" value="5"></label>
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
				'input[name="iat1"]:checked');
			var checkRadio2 = document.querySelector(
				'input[name="iat2"]:checked');
			var checkRadio3 = document.querySelector(
				'input[name="iat3"]:checked');

			if((checkRadio1 == null) || (checkRadio2 == null) || (checkRadio3 == null)) {
				document.getElementById("disp").innerHTML
					= "Kindly provide all input to proceed to next page ";
					return false;
					window.location.replace(window.location.href.replace("survey-ques1", 'survey-ques1'))
			} else if((checkRadio1 != null) && (checkRadio2 != null) && (checkRadio3 != null)) {
				  document.getElementById("disp").innerHTML
					= "Thanks for answering all questions ";
      }
    }
  </script>
</html>
