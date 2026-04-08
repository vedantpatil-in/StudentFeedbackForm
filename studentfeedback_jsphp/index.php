<!DOCTYPE html>
<html>
  <head>
    <title>Student Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/script.js"></script>
  </head>

  <body class="home">
    <form action="php/admin.php" method="POST">
      <div class="admin-login">
        <input type="submit" name="admin" value="Admin" id="admin" />
      </div>
    </form>

    <h1 class="main-heading">Student Feedback Form</h1>

    <div class="container">
      <h3>
        Fill this student feedback form so that we can make our teaching better.
      </h3>

      <form name="feedbackForm" action="questions.php" method="POST" onsubmit="return validateDetails()" class="student-form">
        <div class="student-details">
          <label for="year">Academic Year</label>
          <select name="year" id="year">
            <option value="2026">2026</option>
            <option value="2025">2025</option>
          </select>
          <br />

          <label for="sem">Semester</label>
          <select name="sem" id="sem" onchange="setSubjectOptions()">
            <option value="3rd">Sem 3</option>
            <option value="4th">Sem 4</option>
          </select>
          <br />

          <label for="date">Date of Feedback</label>
          <input type="date" id="date" name="date" />
          <br />

          <label for="branch">Branch</label>
          <select name="branch" id="branch">
            <option value="CSE">CSE</option>
            <option value="IT">IT</option>
          </select>
          <br />

          <label for="section">Section</label>
          <select name="section" id="section">
            <option value="A">Sec A</option>
            <option value="B">Sec B</option>
            <option value="C">Sec C</option>
          </select>
          <br />

          <label for="roll">Roll No</label>
          <input type="number" id="roll" name="roll" min="1" max="70" placeholder="1-70" />
          <br />

          <label for="subject">Subject</label>
          <select name="subject" id="subject">
            <option value="DSA">Data Structures and Algorithms</option>
            <option value="IQC">Introduction to Quantum Computing</option>
            <option value="DMGT">Discrete Mathematics and Graph Theory</option>
            <option value="CN">Computer Networks</option>
          </select>
          <br />
        </div>

        <div class="submit-form">
          <input type="submit" name="next" value="Next" id="next" />
        </div>
      </form>
      <br />
    </div>
  </body>
</html>
