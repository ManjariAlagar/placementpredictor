<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Vertical Form Layout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">PLACEMENT PREDICTOR</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Applicant.php">APPLICANTS</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        BE FIRST TO APPLY
      </a>
      <div class="dropdown-menu">
        
        <a class="dropdown-item" href="Apply.php">APPLY FOR A JOB</a>
        <a class="dropdown-item" href="skill.php">GET A SKILL SCORE</a>
      </div>
    </li>
  </ul>
</nav>
<br>
  
<div class="bs-example">
    <form action="process.php" method="post">
        <div class="form-group">
            <label for="inputname">Name</label>
            <input type="text" class="form-control" name="Name" id="inputname" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="inputdate">DOB</label>
            <input type="text" class="form-control" name="DOB" id="inputdate" placeholder="DOB" required>
        </div>
        <div class="form-group">
            <label for="inputage">Age</label>
            <input type="text" class="form-control" name="Age" id="inputage" placeholder="Age" required>
        </div>
		<div class="form-group">
            <label for="dregree">Choose your degree</label>

<select name="degree" id="degree">
<option>Select your degree</option>
  <option value="BE" >BE</option>
  <option value="BTECH" >BTECH</option>
  <option value="BSC" >BSC</option>
  <option value="BCA" >BCA</option>
</select>
<select name="course" id="course">
<option>Select your course</option>
  <option value="ECE">ECE</option>
  <option value="EEE">EEE</option>
  <option value="IT">IT</option>
  <option value="BCA">BCA</option>
  <option value="MECHANICAL">MECHANICAL</option>
  <option value="MECHATRONICS">MECHATRONICS</option>
  <option value="CIVIL">CIVIL</option>
  <option value="DATA SCIENCE">DATA SCIENCE</option>
</select>
        </div>
		<div class="form-group">
            <label for="inputcgpa">Cgpa</label>
            <input type="text" name="Cgpa" class="form-control" id="inputage" placeholder="Cgpa" required>
        </div>
        <input type="submit" class="btn btn-primary" name="save" value="submit">
        
    </form>
</div>
</body>
</html>