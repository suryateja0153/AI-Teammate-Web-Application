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
    right: 30px;
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
    left: 16px;
    font-size: 18px;
  }
  .center {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;
  }
  .loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 60px;
    height: 60px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
  }
  #load {
    display:none
  }
  #a1 {
    display:none
  }
  #a2 {
    display:none
  }
  .bottomright {
    position: absolute;
    bottom: -300px;
    right: 230px;
    font-size: 18px;
  }
  /* Safari */
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  .tab-1{
  	display:inline-block; width:ONE-TAB-WIDTH;
  }
  #mq {
    display:none
  }
  #a22 {
    display:none
  }
  #a11 {
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
    <div class="container" style="height:100vh;width:100%; ">
        <div class="row" style="height:5vh; background-color:#CFC493">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50">Coach Philip’s Dilemma</button>
        </div>
        <div class="row" style="height:90vh;background-color:white">
            <div class="column" style=" width: 54%;overflow: auto;background-color:white;border-radius:10px;border-right:20px !important">
                    <div>
                         <b>Task description:</b>
                         <p>In the following exercise, you read a scenario which poses a moral problem. After reading the scenario, you will be asked a question and to make a choice among the given solutions. Please make a choice that reflects your character most.
                         Your AI teammate will also analyze the same scenario and will pick a choice based on its character.
                         Please take your time to read the scenario and make your decision carefully.
                         </p><br>
                         <p>Please click proceed to continue..</p>
                         <button type="button" class="btn btn-primary active" id="pro" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50" onclick="display1()">Proceed</button><br>
                         <div id="mq">
                         <b>Scenario:</b>
                  			 <p>Coach Phillips leads one of the most successful high school football teams in Texas. His team has won the last two championships. If they win this time, they do a hattrick and receive a special award from the mayor. They are playing against a team that is very good but has not won a game in 10 years.

                  			 The game is a tie until the last few minutes. During the last few minutes of the game, Coach Phillips’ team scores and win the championship. However, Coach Phillips notices that his team won because one of his players made a foul, but the referee did not notice it. If the referee had noticed the foul, his team would not have made the score and would have lost the game.

                  			 What should Coach Phillips do?
                         </p>
                         <label><input type="radio" id="Option1" name="gender" value="Coach Phillips should report the foul to the referee and have the game outcome reversed.">
                         <span style="padding-left:10px"> Coach Phillips should report the foul to the referee and have the game outcome reversed</span></label><br>
                         <label><input type="radio" id="Option2" name="gender" value="Coach Phillips should ignore the foul and allow his team’s players and their parents enjoy the win.">
                         <span style="padding-left:10px">Coach Phillips should ignore the foul and allow his team’s players and their parents enjoy the win.</span></label><br>
                         <label><input type="radio" id="Option3" name="gender" value="Coach Phillips should inform the coach of the other team about the foul and leave it up to them to report the foul and submit their objection to the referee and the championship administration">
                         <span style="padding-left:10px">Coach Phillips should inform the coach of the other team about the foul and leave it up to them to report the foul and submit their objection to the referee and the championship administration</span></label><br>

                         <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#bgStorySetupModal" style="background-color:#4CAF50" onclick="display(); startTimer(1, document.querySelector('#time')); output()"> Submit</button>
                         </div>
                    </div>

                    <div id="disp" style=
		                  "color:green; font-size:18px; font-weight:bold;">
	                  </div>

            </div>
            <div class="column" style="width: 46%;border:solid #CFC493 3px;border-top:0px !important; height: 150vh;background-color:white; border-bottom-left-radius:10px">
                <div id="chatDiv" style="height:80vh;overflow:auto">
        					<div id="load" class="loader"></div>
        					<div id="c1" <p> <span class="tab-1"></span>&nbsp; &nbsp;  I will also answer along with you..</p></div><br>
        					<div id="c2" <p><span class="tab-1"></span>&nbsp; &nbsp; <span id="reply"></span></p></div><br>
                </div>
            </div>
        </div>
    </div>

    <div class="bottomright" style="float:right">
                <button type="button" onclick="passvalues()" id="consentNext" class="btn btn-primary">Next</button>
    </div>
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

    function output() {
      var ele = document.getElementsByName('gender');
      var ij = 1;
      if(ij == '1') {
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked){
            var abc = ele[i].value;
    				if(i == 0) {
    						document.getElementById("reply").innerHTML = "Wow! Even my answer is " +  abc + " I chose this option because the other team deserves the win and that is the moral thing to do.";
    				} else if (i == 1) {
    						document.getElementById("reply").innerHTML = "Wow! Even my answer is " +  abc + " I chose this option because the referee mistake is part of the game.";
    				} else if (i == 2) {
    						document.getElementById("reply").innerHTML = "Wow! Even my answer is " +  abc + " I chose this option because it is not Coach Phillips problem and by telling the other team coach, he give them the responsibility to deal with this issue.";
    				}
						}
        }
			} else {
        for(i = 0; i < ele.length; i++) {
            if(i != 0) {
                if(ele[i].checked) {
                    var abc = ele[(i-1)].value;
            				if((i-1) == 0) {
        						        document.getElementById("reply").innerHTML = "Well, my answer is " +  abc + " I chose this option because the other team deserves the win and that is the moral thing to do.";
        						} else if ((i-1) == 1) {
        						        document.getElementById("reply").innerHTML = "Well, my answer is " +  abc + " I chose this option because the referee mistake is part of the game.";
        						}
        				}
        		} else {
                if(ele[i].checked) {
                var abc = ele[(i+1)].value;
    						    if((i+1) == 1) {
    						            document.getElementById("reply").innerHTML = "Well, my answer is " +  abc + " I chose this option because the referee mistake is part of the game.";
    						    }
						    }
						  }
        }
        }
    }

    function display() {
    			var checkRadio = document.querySelector(
    				'input[name="gender"]:checked');

    			if(checkRadio == null) {
    				document.getElementById("disp").innerHTML
    					= "Kindly provide all input ";
    			} else {
    				document.getElementById("disp").innerHTML = " ";
    				document.getElementById("load").style.display = "none";
    				document.getElementById("c1").style.display = "none";
    			}
    }

    function display1() {
      document.getElementById("mq").style.display = "block";
      document.getElementById("c1").style.display = "block";
      document.getElementById("load").style.display = "block";
    }

    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;



        if (--timer < 0) {
    document.getElementById("c2").style.display = "block";
            timer = duration;
        }
    }, 1000);
    }

    function passvalues()
    {
                    $.ajax({
                        url: 'bs8.php',
                        type: 'GET',
                        success: function (response) {
                                window.location.replace(window.location.href.replace('mq8', 'bs8'))
                        },
                        error: function (response) {
                                window.location = 'mq8.php';
                        }
                    });
    }
</script>
</html>
