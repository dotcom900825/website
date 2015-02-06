<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>Intro to HCI: Assignment 6</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../css/hci.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".sidenav">

    <!--
    IntroHCI assignment template
    ------------------
    To create a new assignment:
    1) Write all the HTML as you normally would underneath the #assignment-description div.
    2) Anything that you want to appear in the navbar on the left needs to be enclosed
        in a <div id="unique-id" class="sidenav-anchor">. On page load, hci.js will look up
        anything enclosed in .sidenav-anchor, find the first header (h1-h6) inside it, and add
        it to the navigation pane on the left. Make sure it has a unique div id so that there is something
        to anchor the hyperlink to.
    3) I recommend going with Bootstrap's recommendation and putting any <table class="table"> elements enclosed in a
        <div class="table-responsive">.
    -->


    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.html">Intro to HCI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="../../index.html">Home</a></li>
            <li><a href="../../index.html#calendar">Calendar</a></li>
            <li><a href="../../studio.html">Studio</a></li>
            <li ><a href="../../mobile_app_tips.html">Resources for Mobile Web Applications</a></li>
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logistics <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../../logistics.html#prereqs">Prerequisites</a></li>
                  <li><a href="../../logistics.html#lab">Lab</a></li>
                  <li><a href="../../logistics.html#grading">Grading</a></li>
                  <li><a href="../../logistics.html#attendance">Attendance</a></li>
                  <li><a href="../../logistics.html#faq">FAQ</a></li>
                </ul>
            </li>
            <li><a href="../../index.html#calendar">Submit work</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://piazza.com/ucsd/winter2015/cogs120/home">Questions(Piazza forum)</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidenav" data-spy="affix">
                    <ul class="nav nav-stacked" id="sidenav-content">
                    </ul>
                </div> <!-- /sidenav -->
            </div> <!-- /col-md-3 -->
            <div class="col-md-9" id="assignment-description">

                <div>
                    <h1>Assignment 6: Meat on the bones</h1>
                </div>

                <div id="brief" class="sidenav-anchor">
                    <h2>Brief</h2>
                    <p>Functionality functionality functionality! Continue developing your interactive prototypes in accordance with your development plan. Also, update your development plan as you discover more about what you want to prioritize, what you can expect to implement, and what you may need to mock up. The goal is for you to complete the interaction flow this week.</p>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                    <p>This week is all about - that's right - functionality. You should be spending your time fleshing out your interactive prototype. Focus on getting the flow of your interaction working. Don't worry about making it look pretty yet. Don't stall or get too caught up in the look and feel of things. Fonts, colors, and pixel-perfect layout can come later. This week, you'll need to make good progress on the interaction design. Use the JSON and handlebars techniques you learned in lab (or equivalent technology) to populate the data for your application and deliver rich interactivity. By now you should have a good idea the kinds of data your app will utilize. Eventually, you will be required to send and retrieve data from your database as part of the final project requirements. But for now, you are only focusing on retrieving and manipulating fixed data that need not be updated on the back end. In terms of Lab 5, this means you will have a file like data.json that has data pre-stored, and your job is to retrieve that data and populate your app with it and add new objects to the data variable. You do not need to dynamically update the data.json file with new data. </p>
                    <p>Follow the development plan you created last week, and update it as you go. Mark tasks that have been completed and add new ones if you need to. Make sure that your next week is planned out with goals and who is responsible for each task. (If you'd like to give yourself the option of "late days", set an early deadline so your schedule has some flexibility.) Re-evaluate your stretch goals and what's feasible and what isn't. You may decide that your plan is too ambitious, or you may decide that your plan is too conservative; maneuver accordingly.
</p>
                </div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are some examples of development plans:<a href="https://docs.google.com/spreadsheet/ccc?key=0Ame-4omKIpLddDlvTGFqN0JqNEVXbGRGSndLc2NuTUE&usp=sharing" target="_blank"> (1)</a> is very stylized, dynamic, and mostly thorough,<a href="https://docs.google.com/spreadsheet/ccc?key=0AlCum_THvFsddGJlR1FrZ2xiSzlRdFZfUHBKcm9HUVE#gid=0" target="_blank"> (2)</a> is fairly thorough, colorful, but is missing time estimates and has only one stretch goal listed,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AkDAkl06cS84dDdoWnJKNmFPLVhNTUx4Ry1mYWZob2c&hl=en_US#gid=0" target="_blank"> (3)</a> is a mediocre plan that's mostly thorough, where most tasks are broken down into less than 1 hour chunks,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AnCm_JDaoi7ndG5fNl92YUFrWDgwdUxyVVB2azg5SVE#gid=2" target="_blank"> (4)</a> is very thorough, with time estimates and time costs, but some tasks could be more actionable,
					<a href="http://www.google.com/url?q=http%3A%2F%2Fspark-public.s3.amazonaws.com%2Fhci%2Fsource_videos%2FEvolutionOfAProjectPlan.mp4&sa=D&sntz=1&usg=AFQjCNECkSqe0VFyN4wOICycQIFhJoAslg" target="_blank"> (5)</a> is a great video of the dynamic nature of implementation plans throughout the project.</p>
					
					<p>Stay tuned for an example of a complete home screen, key screens, and navigational skeleton. </p>
                </div>
                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>The URL of the prototype version that you want us to see. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. <b>(Interaction Flow, Use of Data in Prototype)</b></li>
                        <li>The PDF of your development plan that you submitted last week. <b>(Goals)</b></li>
                        <li>The PDF of your updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>) <b>(Updated Development Plan)</b></li>
                        <li>The shared Github URL for your project. <b>(Github Repo)</b></li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>

                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th id="guiding" valign="top">Category</th>
                                    <th id="unsatisfactory" valign="top">Nope</th>
                                    <th id="minimum" valign="top">Weak</th>
                                    <th id="satisfactory" valign="top">Proficient</th>
                                    <th id="above" valign="top">Mastery</th>
                                </tr>
                                <tr>
                                    <td>Interaction Flow<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>0: No pages are connected and interactive.</td>
                                    <td>1: Few pages are connected interactive.</td>
                                    <td>3: Most pages are connected and interactive.</td>
                                    <td>4: Overall flow and navigation are complete. Pages are fleshed out and interactive.</td>
                                </tr>
                                <tr>
                                    <td>Use of Data (e.g., JSON) in Prototype<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>0: No pages in the prototype are populated with data.</td>
                                    <td>1: A few pages in the prototype are populated with data OR header/footer included programmatically, as opposed to copy&paste (either sufficient).</td>
                                    <td>2: Most pages in the prototype are populated with data OR login/other rich interactivity implemented (either sufficient).</td>
                                    <td>3: The entire prototype uses pages populated with data to deliver rich interactivity.</td>
                                </tr>
                                <tr>
                                    <td>Goals<br /><span style="color:lightGray;">4 points</span></td>
                                    <td>0: No goals were met.</td>
                                    <td>1: Only a few goals were met.</td>
                                    <td>3: Most, but not all, of the goals were met.</td>
                                    <td>4: All goals were met. Stretch goals need not be met.</td>
                                </tr>
                                <tr>
                                    <td>Updated Development Plan<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>0: No updates to plan.</td>
                                    <td>1: Plan reflects some minor changes.</td>
                                    <td>2: Plan is mostly updated, but is lacking some detail or deadlines seem unreasonable.</td>
                                    <td>3: Plan is detailed and reflects progress, new tasks, and any changes to previous tasks.</td>
                                </tr>
                                <tr>
                                    <td headers="guiding" colspan=2><br>Github Repo<br><span style="color:lightGray;"><span style="color:lightGray;">1 point.</span></td>
                                    <td colspan=3 align=right>Github Repo URL present.</td>
                                </tr>
                                <tr>
                                    <td headers="guiding" colspan=2><br>Outside the Box<br><span style="color:lightGray;"><span style="color:lightGray;">1 point. Up to 5% of submissions.</span></td>
                                    <td colspan=3 align=right>Pages are complete and all functionality is in place. Weekly stretch goals are met. The team is way ahead of the curve with respect to the interactions in their application.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor' style='margin-top: 20px'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a target="_blank" class="btn btn-primary" href="https://docs.google.com/forms/d/1mD73NfpEO0Ia8X8-9421uyDMFIvnRZlX1vYbM7KDukc/viewform">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a target="_blank" class="btn btn-primary" style="margin-top:10px" href="https://docs.google.com/forms/d/10YBUx7-IJhLLSasFP-NT1CjB_Uey-l3dg5RsXd-WiKo/viewform"> During studio, click here to assess your own work and each of your team member's work.</a>
                    </p>
                </div>

            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
