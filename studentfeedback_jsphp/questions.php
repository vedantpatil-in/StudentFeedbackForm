<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['year'])) {
    header('Location: index.php');
    exit;
}

$year = htmlspecialchars($_POST['year']);
$sem = htmlspecialchars($_POST['sem']);
$date = htmlspecialchars($_POST['date']);
$branch = htmlspecialchars($_POST['branch']);
$section = htmlspecialchars($_POST['section']);
$roll = htmlspecialchars($_POST['roll']);
$subject = htmlspecialchars($_POST['subject']);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student Feedback - Questions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/script.js"></script>
  </head>

  <body>
    <form action="php/admin.php" method="POST">
      <div class="admin-login">
        <input type="submit" name="admin" value="Admin" id="admin" />
      </div>
    </form>

    <h1 class="main-heading">Student Feedback Form</h1>

    <div class="container">
      <h3>Step 2: Answer the feedback questions.</h3>

      <form name="feedbackForm" action="php/insert.php" method="POST" onsubmit="return validateQuestions()" class="student-form">
        <input type="hidden" name="year" value="<?php echo $year; ?>" />
        <input type="hidden" name="sem" value="<?php echo $sem; ?>" />
        <input type="hidden" name="date" value="<?php echo $date; ?>" />
        <input type="hidden" name="branch" value="<?php echo $branch; ?>" />
        <input type="hidden" name="section" value="<?php echo $section; ?>" />
        <input type="hidden" name="roll" value="<?php echo $roll; ?>" />
        <input type="hidden" name="subject" value="<?php echo $subject; ?>" />

        <div class="student-feedback">
          <h4>1) Has the Teacher covered entire Syllabus as prescribed by University?</h4>
          <label><input type="radio" id="ques-1-5" name="ques1" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques-1-4" name="ques1" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques-1-3" name="ques1" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques-1-2" name="ques1" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques-1-1" name="ques1" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>2) Effectiveness of Teacher in terms of:</h4>
          <h4>i. Technical Content</h4>
          <label><input type="radio" id="ques-2i-5" name="ques-2i" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques-2i-4" name="ques-2i" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques-2i-3" name="ques-2i" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques-2i-2" name="ques-2i" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques-2i-1" name="ques-2i" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>ii. Communication Skills</h4>
          <label><input type="radio" id="ques-2ii-5" name="ques-2ii" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques-2ii-4" name="ques-2ii" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques-2ii-3" name="ques-2ii" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques-2ii-2" name="ques-2ii" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques-2ii-1" name="ques-2ii" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>iii. Availability beyond normal classes and co-operation to solve individual problems</h4>
          <label><input type="radio" id="ques-2iii-5" name="ques-2iii" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques-2iii-4" name="ques-2iii" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques-2iii-3" name="ques-2iii" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques-2iii-2" name="ques-2iii" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques-2iii-1" name="ques-2iii" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>iv. Pace on which contents were covered</h4>
          <label><input type="radio" id="ques-2iv-5" name="ques-2iv" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques-2iv-4" name="ques-2iv" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques-2iv-3" name="ques-2iv" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques-2iv-2" name="ques-2iv" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques-2iv-1" name="ques-2iv" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>v. Overall effectiveness</h4>
          <label><input type="radio" id="ques-2v-5" name="ques-2v" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques-2v-4" name="ques-2v" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques-2v-3" name="ques-2v" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques-2v-2" name="ques-2v" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques-2v-1" name="ques-2v" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>3) How do you rate the contents of the curricular?</h4>
          <label><input type="radio" id="ques3-5" name="ques3" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques3-4" name="ques3" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques3-3" name="ques3" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques3-2" name="ques3" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques3-1" name="ques3" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>4) How do you rate lab experiments, if applicable?</h4>
          <label><input type="radio" id="ques4-5" name="ques4" value="5" /> 5- Excellent</label>
          <label><input type="radio" id="ques4-4" name="ques4" value="4" /> 4- Very Good</label>
          <label><input type="radio" id="ques4-3" name="ques4" value="3" /> 3- Good</label>
          <label><input type="radio" id="ques4-2" name="ques4" value="2" /> 2- Average</label>
          <label><input type="radio" id="ques4-1" name="ques4" value="1" /> 1- Below Average</label>
          <br /><br />

          <h4>5) Any Remarks</h4>
          <textarea name="remarks" rows="5"></textarea>
          <br /><br />
        </div>

        <div class="submit-form">
          <button type="button" onclick="history.back();">Back</button>
          <input type="submit" name="submit" value="Submit" id="submit" />
        </div>
      </form>
      <br />
    </div>
  </body>
</html>
