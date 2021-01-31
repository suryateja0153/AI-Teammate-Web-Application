<?php
  session_start();
?>

<!DOCTYPE HTML>
<html lang = "en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/panas.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />
</head>
<body style="background-color:#006747">
 <style>
   .tab-1 {
  	display:inline-block; width:ONE-TAB-WIDTH;
   }
 </style>
    <div class="container" style="height:100vh;width:100%;background-color:white ">
        <div class="row" style="height:5vh; background-color:#CFC493">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50">Basic Info</button>
        </div>
        <div class="row" style="background-color:white">
            <form name="myForm" onsubmit="return validateForm()" action="includes/db.users.php" method="post">
                <p>
            		  <label for="Name">Name:</label><br>
                  <input type="text" id="name" name="name" required><br>
              			  <p>Gender:</p>
              			  <p> <span class="tab-1"></span>&nbsp; &nbsp;Please choose the gender you identify with most ?</p>
              			  <select name="gender" id="gender" required>
                          <option value="">None</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select><br><br>

                      <p>Ethnicity:</p>
                      <p> <span class="tab-1"></span>&nbsp; &nbsp;Please choose the ethnicity you identify with most ?</p>
                      <select name="ethnicity" id="ethnicity" required>
                          <option value="">None</option>
                          <option value="White">White</option>
                          <option value="Black">Black</option>
                          <option value="Asian">Asian</option>
                          <option value="Indian">Indian</option>
                          <option value="Middle eastern">Middle eastern</option>
                          <option value="Hispanic/Latino">Hispanic/Latino</option>
                          <option value="Native Hawaiian/Pacific Islander">Native Hawaiian/Pacific Islander</option>
                      </select><br><br>

                      <label for="Age">Age:</label>
                      <p> <span class="tab-1"></span>&nbsp; &nbsp;What is your year of birth?</p>
                          <input type="text" id="age" name="age" required><br><br>

                      <label for="Work Experience">Work experience:</label>
                      <p> <span class="tab-1"></span>&nbsp; &nbsp;How many years of work experience do you have?</p>
                          <input type="text" id="workexperience" name="workexperience" required><br><br>

                      <label for="Highest Education Level">Education:</label>
                      <p> <span class="tab-1"></span>&nbsp; &nbsp;What is the highest degree or level of education you have completed?</p>
                      <select name="education" id="education" required>
                          <option value="">None</option>
                          <option value="No schooling completed">No schooling completed</option>
                          <option value="Nursery school to 8th grade">Nursery school to 8th grade</option>
                          <option value="Some high school, no diploma">Some high school, no diploma</option>
                          <option value="High school graduate, diploma or the equivalent (for example: GED)">High school graduate, diploma or the equivalent (for example: GED)</option>
                          <option value="Some college credit, no degree">Some college credit, no degree</option>
                          <option value="Trade/technical/vocational training">Trade/technical/vocational training</option>
                          <option value="Associate degree">Associate degree</option>
                          <option value="Bachelor’s degree">Bachelor’s degree</option>
                          <option value="Master’s degree">Master’s degree</option>
                          <option value="Professional degree">Professional degree</option>
                          <option value="Doctorate degree">Doctorate degree</option>
                      </select><br><br>
                </p>
        </div>
                <div style="background-color:white; height:50px; margin-right: -15px; margin-left: -15px;padding: 5px 20px 100px 0px;">
                    <div style="float:right; padding-right:50px">
                          <button type="submit" onclick="storeIt();" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
    </div>
</body>
  <script type="text/javascript">
		function validateForm() {
  		var a = document.forms["myForm"]["gender"].value;
  		var b = document.forms["myForm"]["ethnicity"].value;
      var c = document.forms["myForm"]["age"].value;
      var d = document.forms["myForm"]["education"].value;
      var e = document.forms["myForm"]["workexperience"].value;
      var f = document.forms["myForm"]["name"].value;

			if((a =="") || (b =="") || (c =="") || (d =="") || (e =="") || (f =="")) {
    				alert("Kindly provide all input");
    				return false;
			} else {
				    return true;
			}

		}

    function storeIt() {
      var n = document.getElementById("name").value;
      var e = document.getElementById("ethnicity").value;
      var g = document.getElementById("gender").value;

      localStorage.setItem("textvalue", n);
      localStorage.setItem("eth", e);
      localStorage.setItem("gen", g);
    }
	</script>
</html>
