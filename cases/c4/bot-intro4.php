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
 <img src="../../static/images/bot.jpg" id="b1" alt="Avatar" class="avatar" ALIGN="right">
 <div class="container" style="height:100vh;width:100%;background-color:white ">
	<div class="row" style="height:5vh; background-color:#CFC493">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50">AI teammate Introduction</button>
  </div>
        <br />
            <p style="text-align:justify">
                 Hi&nbsp;<span id="result"></span>.&nbsp;This is a <span id="result1"></span>, an AI cognitive agent developed by the research team.&nbsp;<span id="result2"></span> is designed using machine learning technologies to analyze and assess textual situations and problems. In addition, <span id="result3"></span> is equipped with search algorithm that synthesizes information and generate solutions for textual situations and problems. Furthermore, <span id="result4"></span> is developed with a self-learning algorithm that helps <span id="result5"></span> with learning convictions and beliefs.<br></br>

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

  	document.getElementById("b1").style.display = "block";
  	document.getElementById("result1").innerHTML="Bot";
  	document.getElementById("result2").innerHTML="Bot";
  	document.getElementById("result3").innerHTML="Bot";
  	document.getElementById("result4").innerHTML="Bot";
  	document.getElementById("result5").innerHTML="Bot";
  	document.getElementById("result6").innerHTML="Bot";
  	document.getElementById("result7").innerHTML="Bot";
  	document.getElementById("result8").innerHTML="Bot";

  	function passvalues()
    {
              $.ajax({
                  url: 'mq4.php',
                  type: 'GET',
                  success: function (response) {
                          window.location.replace(window.location.href.replace('bot-intro4', 'mq4'))
                  },
                  error: function (response) {
                          window.location = "bot-intro4.php";
                  }
              });
  	}
  </script>
</html>
