<?php 
session_start();
if(array_key_exists("logged_in", $_SESSION)){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<div class="d-flex flex-row justify-content-center vh-100 align-items-center" >
<form class="border rounded-3 p-4 " style="width: 30%;height:60%;" action="logic.php" method="get">
    <fieldset >

    <legend class="text-center">add new student</legend>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="student name" name="student_name" required>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="registration number" name="reg_no" required>
  </div>
<div class="mb-3">
    <label class="form-label">Gender</label>
    <div class="form-check ms-3">
    <input class="form-check-input" type="radio" name="gender" value="M" checked>
    <label class="form-check-label" >
        Male
    </label>
    </div>
    <div class="form-check ms-3">
    <input class="form-check-input" type="radio" name="gender" value="F">
    <label class="form-check-label">
        Female
    </label>
    </div>
</div>
<div class="text-center"><button type="submit" class="btn btn-primary me-0" name="add_student">add student</button></div>
<a class="" href="dashboard.php" ><small>Back to dashboard</small></a>
  
</fieldset>
</form>
<div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
  header("Location: index.php");
}
?>