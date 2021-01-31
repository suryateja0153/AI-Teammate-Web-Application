<?php
  session_start();
  $_SESSION['id'] = $_GET['id'];
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
    <link rel="stylesheet" href="../static/consent.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

</head>

<body style="background-color:#006747">
    <div class="container" style="width:100%;padding:20px 20px 50px 20px;margin-bottom:60px;background-color:white">
        <div style="text-align:center"><b>Informed Consent to Participate in Research </b></div>
        <br />
        <div>
            <p style="text-align:justify">
                <b>Overview:</b>  You are being asked to take part in a research study. The information in this document should help you to decide if you would like to participate. The sections in this Overview provide the basic information about the study. More detailed information is provided in the remainder of the document.
            </p>
            <p style="text-align:justify">
                <u>Study Staff:</u>  This study is being led by Naif Alawi who is a PhD student at/in ISDS at Muma College of Business. This person is called the Principal Investigator. He is being guided in this research by GJ de Vreede, PhD, and Triparna de Vreede, PhD. Other approved research staff may act on behalf of the Principal Investigator.
            </p>
            <p style="text-align:justify">
                <u>Study Details:</u>  This study is being conducted at USF and is supported/sponsored by USF Muma College of Business. The purpose of the study is to brainstorm recommendations for business owners to survive during Pandemics. AI refers to programmed Artificial Intelligence Agents that you will work with in the brainstorming session.
            </p>

            <p style="text-align:justify">
                <u>Participants:</u>  You are being asked to take part because you are an adult college student who participate in brainstorming or ideation discussions with other colleagues.
            </p>
            <p style="text-align:justify">
                <u>Voluntary Participation:</u>  Your participation is voluntary. You do not have to participate and may stop your participation at any time. There will be no penalties or loss of benefits or opportunities if you do not participate or decide to stop once you start. Your decision to participate or not to participate will not affect your student status, course grade, recommendations, or access to future courses or training opportunities.
            </p>
            <p style="text-align:justify">
                <u>Benefits, Compensation, and Risk:</u> We do not know if you will receive any benefit from your participation. There is no cost to participate. You will be compensated extra course credit (worth two 15-minute sessions) for your participation. This research is considered minimal risk.  Minimal risk means that study risks are the same as the risks you face in daily life.
            </p>
            <p style="text-align:justify">
                <u>Confidentiality:</u> Even if we publish the findings from this study, we will keep your study information private and confidential. Anyone with the authority to look at your records must keep them confidential.
            </p>
            <b>Why are you being asked to take part?</b>
            <p style="text-align:justify">
                As an educated person who participate in ideation and brainstorming discussions, we are asking you to collaborate with an AI to provide recommendations to small business owners.
            </p>
			<b>Study Procedures</b>

            <p style="text-align:justify">
                If you take part in this study, you will be asked to fill out a pre-survey, complete a moral choice task with your AI teammate, complete a brainstorming session with your AI teammate, fill out a post-survey.
            </p>
			<b>Alternatives / Voluntary Participation / Withdrawal</b>
			<p style="text-align:justify">
			You do not have to participate in this research study.

			You should only take part in this study if you want to volunteer. You should not feel that there is any pressure to take part in the study. You are free to participate in this research or withdraw at any time.  There will be no penalty or loss of benefits you are entitled to receive if you stop taking part in this study. Decision to participate or not to participate will not affect your student status or course grade.

			</p>

			<b>Benefits and Risks</b>
			<p style="text-align:justify">
			You will receive no other benefit from this study other than an opportunity to collaborate with an AI teammate. This research is considered to be minimal risk.
			</p>

			<b>Compensation</b>
			<p style="text-align:justify">
			You will be compensated extra course credit if you complete the study. If you withdraw for any reason from the study before completion you will not be compensated.
			</p>
			<b>Privacy and Confidentiality</b>
			<p style="text-align:justify">
			We will do our best to keep your records private and confidential. We cannot guarantee absolute confidentiality. Your personal information may be disclosed if required by law. Certain people may need to see your study records. The only people who will be allowed to see these records are: Principal Investigator, research team, the advising professor, and The University of South Florida Institutional Review Board (IRB).

			It is possible, although unlikely, that unauthorized individuals could gain access to your responses because you are responding online. Confidentiality will be maintained to the degree permitted by the technology used. No guarantees can be made regarding the interception of data sent via the Internet.  However, your participation in this online survey involves risks similar to a person’s everyday use of the Internet. If you complete and submit an anonymous survey and later request your data be withdrawn, this may or may not be possible as the researcher may be unable to extract anonymous data from the database.

			</p>
			<b>Contact Information</b>
            <p style="text-align:justify">
                If you have any questions, concerns or complaints about this study, Naif Alawi at 571-230-4551. If you have questions about your rights, complaints, or issues as a person taking part in this study, call the USF IRB at (813) 974-5638 or contact the IRB by email at RSCH-IRB@usf.edu.

				We may publish what we learn from this study. If we do, we will not let anyone know your name. We will not publish anything else that would let people know who you are. You can print a copy of this consent form for your records.

				I freely give my consent to take part in this study. I understand that by proceeding with this survey, I am agreeing to take part in research and I am 18 years of age or older.

				Please enter your Full name, U number and USF Email ID if you give consent to take part in this study.

            </p>

        </div>


        <div>
            <div id="nameError" style="display:none" class="alert alert-danger alert-dismissible fade show" role="alert">
                User Name is required
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="uidError" style="display:none" class="alert alert-danger alert-dismissible fade show" role="alert">
                U number is required
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="uidValidError" style="display:none" class="alert alert-danger alert-dismissible fade show" role="alert">
                Enter a valid U number
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="includes/db.info.php" method="POST">
              <div class="radio ">
                  <label>
                      <input type="radio" value="yes" name="optradio" checked>
                      <input class="col-lg-4  form-control-sm form-control" required name="participantFullName" id="participantFullName" placeholder="Enter your full name" type="text" style="display: inline !important">

                      <span class="input-group-text" style="margin-right: -5px; display:inline !important; padding: 4px 8px !important;" >U-</span>
                      <input class="col-lg-3 form-control form-control-sm" required name="participantUid" id="participantUid" placeholder="Enter U number" style="margin-right: -5px; display:inline !important; padding: 4px 8px; vertical-align: top !important;">
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <input class="col-lg-3 form-control form-control-sm" required name="participantMail" id="participantMail" placeholder="Enter USF Email" style="margin-right: -5px; display:inline !important; padding: 4px 8px; vertical-align: top !important;">
                      &nbsp;I consent, begin the study
                  </label>
              </div>
              <div class="radio">
                  <label><input type="radio" value="no" name="optradio"><span style="padding-left:10px">I do not consent, I do not wish to participate</span></label>
              </div>
              <div style="float:right">
                  <button type="submit" id="consentNext" class="btn btn-primary">Next</button>
              </div>
            </form>
        </div>


    </div>
	    <script src="../static/consent.js"></script>
</body>
</html>
