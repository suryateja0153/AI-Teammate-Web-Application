<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

</head>
<body style="background-color:#006747">
<style>
  .avatar {
    vertical-align: right;
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  #a2 {
    display:none
  }
  #a1 {
    display:none
  }
  #a3 {
    display:none
  }
  #a4 {
    display:none
  }
  #a5 {
    display:none
  }
  #a6 {
    display:none
  }
  #a7 {
    display:none
  }
  #a8 {
    display:none
  }
  #a9 {
    display:none
  }
  #a10 {
    display:none
}
</style>
<img src="../../static/images/white-male.jpg" id="a1" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/white-female.jpg" id="a2" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/asian-male.jpg" id="a3" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/asian-female.jpg" id="a4" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/indian-male.jpg" id="a5" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/indian-female.jpg" id="a6" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/black-male.jpg" id="a7" alt="Avatar" class="avatar" ALIGN="right">
<img src="../../static/images/black-female.jpg" id="a8" alt="Avatar" class="avatar" ALIGN="right">

  <div class="container" style="height:100vh;width:100%;background-color:white ">
	     <div class="row" style="height:5vh; background-color:#CFC493">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50">AI teammate Introduction</button>
       </div>
       <br />
            <p style="text-align:justify">
                 Hi&nbsp;<span id="result"></span>.&nbsp;This is <span id="result1"></span>, an AI cognitive agent developed by the research team.&nbsp;<span id="result2"></span> is designed using machine learning technologies to analyze and assess textual situations and problems. In addition, <span id="result3"></span> is equipped with search algorithm that synthesizes information and generate solutions for textual situations and problems. Furthermore, <span id="result4"></span> is developed with a self-learning algorithm that helps <span id="result5"></span> with learning convictions and beliefs.<br></br>

                 In this study, you will be working with <span id="result6"></span> side by side through different tasks. The following pages will provide you with a description of the task that you and <span id="result7"></span>. If you are ready to start working with <span id="result8"></span>, please click the NEXT button.
            </p>
			 <div style="background-color:white; height:50px; margin-right: -15px; margin-left: -15px;padding: 5px 20px 100px 0px;">
            <div style="float:right; padding-right:50px">
                <button onclick="passvalues()" type="button" id="consentNext" class="btn btn-primary">Next</button>
            </div>
       </div>
  </div>
</body>
 <script>
  document.getElementById("result").innerHTML = localStorage.getItem("textvalue");

  var i = localStorage.getItem("eth");
  var j = localStorage.getItem("gen");

  if((i == "White") && (j == "Male"))
	{
		document.getElementById("a1").style.display = "block";
		document.getElementById("result1").innerHTML="Jake";
		document.getElementById("result2").innerHTML="Jake";
		document.getElementById("result3").innerHTML="Jake";
		document.getElementById("result4").innerHTML="Jake";
		document.getElementById("result5").innerHTML="Jake";
		document.getElementById("result6").innerHTML="Jake";
		document.getElementById("result7").innerHTML="Jake";
		document.getElementById("result8").innerHTML="Jake";
	} else if((i == "White") && (j == "Female"))
	{
		document.getElementById("a2").style.display = "block";
		document.getElementById("result1").innerHTML="Amy";
		document.getElementById("result2").innerHTML="Amy";
		document.getElementById("result3").innerHTML="Amy";
		document.getElementById("result4").innerHTML="Amy";
		document.getElementById("result5").innerHTML="Amy";
		document.getElementById("result6").innerHTML="Amy";
		document.getElementById("result7").innerHTML="Amy";
		document.getElementById("result8").innerHTML="Amy";
	} else if((i == "Black") && (j == "Female"))
	{
		document.getElementById("a8").style.display = "block";
		document.getElementById("result1").innerHTML="Jada";
		document.getElementById("result2").innerHTML="Jada";
		document.getElementById("result3").innerHTML="Jada";
		document.getElementById("result4").innerHTML="Jada";
		document.getElementById("result5").innerHTML="Jada";
		document.getElementById("result6").innerHTML="Jada";
		document.getElementById("result7").innerHTML="Jada";
		document.getElementById("result8").innerHTML="Jada";
	} else if((i == "Black") && (j == "Male"))
	{
		document.getElementById("a7").style.display = "block";
		document.getElementById("result1").innerHTML="Marquis";
		document.getElementById("result2").innerHTML="Marquis";
		document.getElementById("result3").innerHTML="Marquis";
		document.getElementById("result4").innerHTML="Marquis";
		document.getElementById("result5").innerHTML="Marquis";
		document.getElementById("result6").innerHTML="Marquis";
		document.getElementById("result7").innerHTML="Marquis";
		document.getElementById("result8").innerHTML="Marquis";
	} else if(((i == "Indian") || (i == "Middle eastern") || (i == "Hispanic/Latino")) && (j == "Male"))
	{
    document.getElementById("a5").style.display = "block";

    if((i == "Indian") && (j == "Male"))
    {
  		document.getElementById("result1").innerHTML="Neel";
  		document.getElementById("result2").innerHTML="Neel";
  		document.getElementById("result3").innerHTML="Neel";
  		document.getElementById("result4").innerHTML="Neel";
  		document.getElementById("result5").innerHTML="Neel";
  		document.getElementById("result6").innerHTML="Neel";
  		document.getElementById("result7").innerHTML="Neel";
  		document.getElementById("result8").innerHTML="Neel";
    } else if((i == "Middle eastern") && (j == "Male"))
    {
  		document.getElementById("result1").innerHTML="Kareem";
  		document.getElementById("result2").innerHTML="Kareem";
  		document.getElementById("result3").innerHTML="Kareem";
  		document.getElementById("result4").innerHTML="Kareem";
  		document.getElementById("result5").innerHTML="Kareem";
  		document.getElementById("result6").innerHTML="Kareem";
  		document.getElementById("result7").innerHTML="Kareem";
  		document.getElementById("result8").innerHTML="Kareem";
    } else if((i == "Hispanic/Latino") && (j == "Male"))
    {
  		document.getElementById("result1").innerHTML="Luis";
  		document.getElementById("result2").innerHTML="Luis";
  		document.getElementById("result3").innerHTML="Luis";
  		document.getElementById("result4").innerHTML="Luis";
  		document.getElementById("result5").innerHTML="Luis";
  		document.getElementById("result6").innerHTML="Luis";
  		document.getElementById("result7").innerHTML="Luis";
  		document.getElementById("result8").innerHTML="Luis";
    }
  } else if(((i == "Indian") || (i == "Middle eastern") || (i == "Hispanic/Latino")) && (j == "Female"))
  {
		document.getElementById("a6").style.display = "block";

    if((i == "Indian") && (j == "Female"))
    {
  		document.getElementById("result1").innerHTML="Aadya";
  		document.getElementById("result2").innerHTML="Aadya";
  		document.getElementById("result3").innerHTML="Aadya";
  		document.getElementById("result4").innerHTML="Aadya";
  		document.getElementById("result5").innerHTML="Aadya";
  		document.getElementById("result6").innerHTML="Aadya";
  		document.getElementById("result7").innerHTML="Aadya";
  		document.getElementById("result8").innerHTML="Aadya";
    } else if((i == "Middle eastern") && (j == "Female"))
    {
  		document.getElementById("result1").innerHTML="Nour";
  		document.getElementById("result2").innerHTML="Nour";
  		document.getElementById("result3").innerHTML="Nour";
  		document.getElementById("result4").innerHTML="Nour";
  		document.getElementById("result5").innerHTML="Nour";
  		document.getElementById("result6").innerHTML="Nour";
  		document.getElementById("result7").innerHTML="Nour";
  		document.getElementById("result8").innerHTML="Nour";
    } else if((i == "Hispanic/Latino") && (j == "Female"))
    {
  		document.getElementById("result1").innerHTML="Sofia";
  		document.getElementById("result2").innerHTML="Sofia";
  		document.getElementById("result3").innerHTML="Sofia";
  		document.getElementById("result4").innerHTML="Sofia";
  		document.getElementById("result5").innerHTML="Sofia";
  		document.getElementById("result6").innerHTML="Sofia";
  		document.getElementById("result7").innerHTML="Sofia";
  		document.getElementById("result8").innerHTML="Sofia";
    }
  } else if(((i == "Native Hawaiian/Pacific Islander") || (i == "Asian")) && (j == "Female"))
  {
		document.getElementById("a4").style.display = "block";

    if((i == "Native Hawaiian/Pacific Islander") && (j == "Female"))
    {
  		document.getElementById("result1").innerHTML="Alana";
  		document.getElementById("result2").innerHTML="Alana";
  		document.getElementById("result3").innerHTML="Alana";
  		document.getElementById("result4").innerHTML="Alana";
  		document.getElementById("result5").innerHTML="Alana";
  		document.getElementById("result6").innerHTML="Alana";
  		document.getElementById("result7").innerHTML="Alana";
  		document.getElementById("result8").innerHTML="Alana";
    } else if((i == "Asian") && (j == "Female"))
    {
      document.getElementById("result1").innerHTML="Jenny";
  		document.getElementById("result2").innerHTML="Jenny";
  		document.getElementById("result3").innerHTML="Jenny";
  		document.getElementById("result4").innerHTML="Jenny";
  		document.getElementById("result5").innerHTML="Jenny";
  		document.getElementById("result6").innerHTML="Jenny";
  		document.getElementById("result7").innerHTML="Jenny";
  		document.getElementById("result8").innerHTML="Jenny";
    }
  } else if(((i == "Native Hawaiian/Pacific Islander") || (i == "Asian")) && (j == "Male"))
  {
		document.getElementById("a3").style.display = "block";

    if((i == "Native Hawaiian/Pacific Islander") && (j == "Male"))
    {
  		document.getElementById("result1").innerHTML="Malu";
  		document.getElementById("result2").innerHTML="Malu";
  		document.getElementById("result3").innerHTML="Malu";
  		document.getElementById("result4").innerHTML="Malu";
  		document.getElementById("result5").innerHTML="Malu";
  		document.getElementById("result6").innerHTML="Malu";
  		document.getElementById("result7").innerHTML="Malu";
  		document.getElementById("result8").innerHTML="Malu";
    } else if((i == "Asian") && (j == "Male"))
    {
  		document.getElementById("result1").innerHTML="Andy";
  		document.getElementById("result2").innerHTML="Andy";
  		document.getElementById("result3").innerHTML="Andy";
  		document.getElementById("result4").innerHTML="Andy";
  		document.getElementById("result5").innerHTML="Andy";
  		document.getElementById("result6").innerHTML="Andy";
  		document.getElementById("result7").innerHTML="Andy";
  		document.getElementById("result8").innerHTML="Andy";
    }
  }

	function passvalues()
  {

            $.ajax({
                url: 'mq8.php',
                type: 'GET',
                success: function (response) {
                        window.location.replace(window.location.href.replace('bot-intro8', 'mq8'))

                },
                error: function (response) {
                        window.location = "bot-intro8.php";
                }
            });
		}
 </script>
</html>
