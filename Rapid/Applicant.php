<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM applicantinfo");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Applicants list</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <style>
 .bs-example{
        margin: 20px;        
    }
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: powderblue;
  color: white;
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
      <a class="nav-link" href="#">APPLICANTS</a>
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
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table id="customers">
  
  <tr>
    <td>NAME</td>
    <td>DOB</td>
    <td>AGE</td>
    <td>DEGREE</td>
	<td>COURSE</td>
	<td>CGPA</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["degree"]; ?></td>
	<td><?php echo $row["course"]; ?></td>
	<td><?php echo $row["cgpa"]; ?></td>


</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>