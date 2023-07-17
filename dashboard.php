<?php 
session_start();
if(array_key_exists("logged_in", $_SESSION)){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<div class="d-flex flex-row justify-content-center">
  <p class="display-6 align-self-center mt-5">Student Register Dashboard</p>
</div>
<div class="d-flex flex-row justify-content-center">
  <div class="d-flex flex-column">
<table class="table me-5 align-self-start" style="width: 300px;">
  <thead>
    <tr>
      <th scope="col">Student total</th>
    </tr>
  </thead>
  <tbody>
  <tr><td><?php
      include_once 'functions.php';
      $conn=connectToDatabase();
      $result=getStudentNumber($conn); 
      $row=mysqli_fetch_assoc($result);
      echo $row['count'];
   ?></td></tr>
  </tbody>
</table>
<div><p class="fw-bold">Actions</p>
<div class="list-group me-5">
  <a href="new_student.php" class="list-group-item list-group-item-action">add student</a>
  <a href="logic.php?logout=''" class="list-group-item list-group-item-action">logout</a>
</div></div>
</div>
<table class="table " style="width: 300px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Most Recently added</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $rows=getRecentlyAddedStudents($conn);    
    $no=1;
    $recentStudents="";
    foreach($rows as $row){
      echo "<tr><th scope='row'>$no</th><td>{$row['student_name']}</td></tr>";
      $no++;
    }


    ?>

    
  </tbody>
</table>

</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

<?php
$conn=null;
}else{
  header("Location: index.php");
}
?>