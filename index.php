<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<div class="d-flex flex-row justify-content-center vh-100 align-items-center" >
<form class="border rounded-3 p-4 " style="width: 30%;height:40%;" action="logic.php" method="post">
    <fieldset >

    <legend class="text-center">Log in</legend>
  <div class="mb-3">
    <input type="email" class="form-control" placeholder="email" name="email" required>
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" placeholder="password" name="password" required>
  </div>

<div class="text-center"><button type="submit" class="btn btn-primary me-0" name="signin">sign in</button><a class="btn btn-primary ms-3" role="button" href="signup.php">sign up</a></div>
  
</fieldset>
</form>
<div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>