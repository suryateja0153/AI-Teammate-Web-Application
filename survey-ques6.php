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
	      <form action="includes/db.sq6.php" method="POST">
    		    <div class="row" style="background-color:white">
                <div id="panas_div" style="padding: 30px 70px 0px 90px">
                    <table id="panas_table" class="table table-sm" style="font-size: 12px;">
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
                                <td class="border">Overall, I am better off working with the AI teammate</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">On the whole, the AI teammate is valuable to me</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">I gained by working with the AI teammate</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv3" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">In the end, I benefited from working the AI teapmvate</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv4" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv4" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv4" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv4" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pmv4" value="5"></label>
                                </td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                                <td class="border">Working with an AI teammate is useful to me</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">AI teammate can bring value often to my team</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">I can anticipate a need for working with an AI teammate</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv3" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">I think I will benefit frequently from working with the AI teammate</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv4" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv4" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv4" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv4" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="pfv4" value="5"></label>
                                </td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                                <td class="border">Given my experience with working with the AI teammate, I feel certain about the answers I gave above</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap1" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap1" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap1" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap1" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap1" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">Based on my exposure to working with the AI teammate, I am confident about my above assessments</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap2" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap2" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap2" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap2" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap2" value="5"></label>
                                </td>
                            </tr>
    						            <tr>
                                <td class="border">Given my knowledge about working with the AI teammate, I feel confident about my above judgments</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap3" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap3" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap3" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap3" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap3" value="5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="border">The evidence I have regarding working with the AI teammate makes me sure of my answers above</td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap4" value="1"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap4" value="2"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap4" value="3"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap4" value="4"></label>
                                </td>
                                <td class="border">
                                    <label class="radio-inline"><input type="radio" name="cap4" value="5"></label>
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
				'input[name="pmv1"]:checked');
			var checkRadio2 = document.querySelector(
				'input[name="pmv2"]:checked');
			var checkRadio3 = document.querySelector(
				'input[name="pmv3"]:checked');
      var checkRadio4 = document.querySelector(
				'input[name="pmv4"]:checked');

      var checkRadio5 = document.querySelector(
				'input[name="pfv1"]:checked');
			var checkRadio6 = document.querySelector(
				'input[name="pfv2"]:checked');
			var checkRadio7 = document.querySelector(
				'input[name="pfv3"]:checked');
      var checkRadio8 = document.querySelector(
				'input[name="pfv4"]:checked');

      var checkRadio9 = document.querySelector(
        'input[name="cap1"]:checked');
      var checkRadio10 = document.querySelector(
        'input[name="cap2"]:checked');
      var checkRadio11 = document.querySelector(
        'input[name="cap3"]:checked');
      var checkRadio12 = document.querySelector(
        'input[name="cap4"]:checked');

			if((checkRadio1 == null) || (checkRadio2 == null) || (checkRadio3 == null) || (checkRadio4 == null) || (checkRadio5 == null) || (checkRadio6 == null) || (checkRadio7 == null) || (checkRadio8 == null) || (checkRadio9 == null) || (checkRadio10 == null) || (checkRadio11 == null) || (checkRadio12 == null)) {
				document.getElementById("disp").innerHTML
					= "Kindly provide all input to proceed to next page ";
					return false;
					window.location.replace(window.location.href.replace("survey-ques6", 'survey-ques6'))
			} else if((checkRadio1 != null) && (checkRadio2 != null) && (checkRadio3 != null) || (checkRadio4 == null) || (checkRadio5 == null) || (checkRadio6 == null) || (checkRadio7 == null) || (checkRadio8 == null) || (checkRadio9 == null) || (checkRadio10 == null) || (checkRadio11 == null) || (checkRadio12 == null)) {
				  document.getElementById("disp").innerHTML
					= "Thanks for answering all questions ";

      }
    }
  </script>
</html>
