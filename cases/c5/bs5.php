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
</head>

<body style="background-color:#006747">
<style>
  .avatar {
    vertical-align: right;
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  .topright {
    position: absolute;
    top: 8px;
    right: 120px;
    font-size: 18px;
  }
  .relative {
    position: relative;
    left: 30px;
    border: 3px solid #73AD21;
  }
  .topleft {
    position: absolute;
    top: 8px;
    left: 680px;
    font-size: 18px;
  }
  div.absolute {
    position: absolute;
    top: 20px;

     left: 665px;
    width: 130px;
    height: 40px;
    border: 3px solid #73AD21;
  }
  div.absolute1 {
    position: absolute;
    top: 5px;

     left: 665px;
    width: 130px;
    height: 40px;
    border: 3px solid #73AD21;
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
<!-- <div> -->
  <div class="container" style="height:100vh;width:100%;background-color:white ">
        <div class="row" style="height:5vh; background-color:#CFC493">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50">Brain Storming Session Task</button>
        </div>

        <div class="row" style="height:90vh;background-color:white">
            <div class="column" style=" width: 54%;overflow: auto;background-color:white;border-radius:10px;border-right:20px !important">
              <div>
                  <p>
                     Here,you will be given a problem. You will be teamed up with an AI teammate. You will brainstorm solutions for the problem with your AI teammate. The brainstorming session will last for 10 minutes in which you are required to generate as much ideas as possible. Your AI teammate will collaborate with you and generate ideas alongside you. Upon the conclusion of the brainstorming activity, you will be asked to complete a survey.
                  </p>
  						    <h1>Problem-Solving Task:</h1>
      						<p>
        						Many small businesses are finding it challenging to sustain their operations during the COVID-you’re your task is to identify solutions for small business owners to make safeguard themselves against such crises. Please generate as many recommendations as you can for small business owners to survive during pandemics and other financial crises.
        						<br></br>
        						Suggested format for writing your recommendation is:
        						<Insert suggestion/recommendation here> because <Insert reason here>
        						Example: As a small business owner, I would create a website because it will make my merchandise more accessible to customers.”
        						</br>
        						If you are ready to start the session, please start typing your response.
                  </p>
              </div>
      				<div id="counts"></div>
      				<div id="result1"></div>
            </div>

            <div class="column" style="width: 41%;border:solid #CFC493 3px;border-top:0px !important; height: 93vh;background-color:white; border-bottom-left-radius:10px">

                <div id="chatDiv" style="height:80vh;overflow:auto"></div>
                <div>
                     <div class="form-group row" style="">
    					           <!--<div class="topright" style="background-color:#4CAF50"> Bot</div>-->
            					   <div class="topleft" style="background-color:#4CAF50"><span id="time">10:00</span> minutes!</div>
            					   <!-- <div id="AIresponse"></div> -->
    						         <!-- <div id="chatDiv" style="height:58vh;overflow:auto;"></div> -->
                             <div class="col-lg-10">
                               <input class="form-control inputBar" id="userMessage"  type="text" placeholder="Type here . . ." rows="1" cols="150" onclick="callingFun();">
                                </input>

                                <div id="charNum" style="float:right;font-size:smaller;color:darkgray">0/240</div>

                                <div class="col-lg-0">
                                    <button id="submitButton" style="background-color:#4CAF50" type = "submit" name = "submit">Submit</button>
                                </div>
                             </div>
                     </div>
                </div>
            </div>
        </div>
        <form action="../../includes/db.qlt.php" method="POST">
          <div style="float:right; padding-right:0px">
                  <button type="submit" onclick="passvalues()" class="btn btn-primary">Next</button>
          </div>
        </form>
  </div>
<!-- </div> -->
</body>

<script>
var i = localStorage.getItem("eth");
var j = localStorage.getItem("gen");

if((i == "White") && (j == "Male"))
{
  document.getElementById("a1").style.display = "block";
} else if((i == "White") && (j == "Female"))
{
  document.getElementById("a2").style.display = "block";
} else if((i == "Black") && (j == "Female"))
{
  document.getElementById("a8").style.display = "block";
} else if((i == "Black") && (j == "Male"))
{
  document.getElementById("a7").style.display = "block";
} else if(((i == "Indian") || (i == "Middle eastern") || (i == "Hispanic/Latino")) && (j == "Male"))
{
  document.getElementById("a5").style.display = "block";
} else if(((i == "Indian") || (i == "Middle eastern") || (i == "Hispanic/Latino")) && (j == "Female"))
{
  document.getElementById("a6").style.display = "block";
} else if(((i == "Native Hawaiian/Pacific Islander") || (i == "Asian")) && (j == "Female"))
{
  document.getElementById("a4").style.display = "block";
} else if(((i == "Native Hawaiian/Pacific Islander") || (i == "Asian")) && (j == "Male"))
{
  document.getElementById("a3").style.display = "block";
}

function callingFun() {
    userIn();
    startTimer(600, document.querySelector('#time'));
    ena();
}

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = 0;
			      document.getElementById("submitButton").disabled = true;
        }
    }, 1000);
	  setTimeout(function(){ alert("Thanks for participating!!The timer is up"); }, 1000000);
}

document.addEventListener("DOMContentLoaded", function botIn() {
    var responses = ["I would cut any services that I will not use during pandemic periods to reduce overhead.",
                     "I would offer pickup to ensure the safety of customers and employees while maintaining sales.",
                     "I could invest my time in taking online workshops to help my business by bringing new skills and ideas.",
                     "I would offer delivery to make sure that customers still buy from my business.",
                     "I would use online communication tools for working remotely with employees to ensure effective working environment.",
                     "I would actively interact with customers on social media to maintain business relations with my customers.",
                     "I would create a comprehensive frequently asked question list in my web page to help answer all my customers potential questions.",
                     "I would apply for government relief loans for small businesses to help covering my business expenses.",
                     "I would let my employees work remotely to reduce the liability risks to my business if they get sick.",
                     "I would offer special promotions to maintain business sales.",
                     "I would send emails to my customers promoting my website to visit and purchase online.",
                     "I would furlough some employees to reduce my business costs.",
                     "I would offer chat services to have open and quick communication with customers.",
                     "I would work from home to reduce transportation costs.",
                     "I would negotiate with my suppliers to reduce costs of supplies.",
                     "I would ask for a rent break from my landlord to manage my business cashflow dependent costs.",
                     "I would offer gift certificates for customers to buy and use later to ensure consistent cashflow for my business.",
                     "I would change my business model to make it adaptable for remote operations.",
                     "I would take advantage of the down time by working on pushed back projects that will help my business when it reopens.",
                     "I would invest in making a mobile application that supports my business operations."];
    var width = 0;
    var id = setInterval(frame, 90000);

    function frame() {
             if (width == 20) {
               clearInterval(id);
             } else {
               addMessageBot('bot', responses[width])
               width = width + 1;
             }
    }

    function addMessageBot(type, message) {
            var botml = '';
            var outB = "Teammate";
            var outB = outB.fontsize(2);
            var now = new Date().toLocaleTimeString();
            botml = outB.italics() + ':  ' + "<div><div><div><p style='word-wrap: break-word;background: #f0ecda'>" + message + "</p></div></div></div>"

            $("#chatDiv").append(botml)
            var element = document.getElementById('chatDiv');
            element.scrollTop = element.scrollHeight;
    }
});

function userIn() {
  function addMessageUser(type, message) {
          var html = '';
          var outP = "You";
          var outP = outP.fontsize(2);
          var now = new Date().toLocaleTimeString();
          html = outP.italics() + ':  ' + "<div><div><p style='word-wrap: break-word'>" + message + "</p></div></div>"

          $("#chatDiv").append(html)
          var element = document.getElementById('chatDiv');
          element.scrollTop = element.scrollHeight;
  }

  $("#userInputBlock").show()
  $("#userMessage").keyup(function () {
          countChar($("#userMessage").val())
  });
  $("#submitButton").unbind().click(function () {
          var now = new Date().getTime();
          var userVal = $("#userMessage").val()
          var sendOut = document.getElementById("userMessage").value
          $.ajax({
            type: "POST",
            url: "../../includes/db.bs.php",
            data: {userMessage: sendOut, time: now},
          });
          addMessageUser('user', userVal)
          $("#userMessage").val("");
  });

  function countChar(val) {
          var len = val.length;
          if (len >= 241) {
              message = $("#userMessage").val()
              $("#userMessage").val(message.substring(0, 240));
          } else {
              $('#charNum').text(len.toString()+'/240');
          }
  };
};

 function ena() {
         document.getElementById("submitButton").disabled = false;
 }

</script>
</html>
