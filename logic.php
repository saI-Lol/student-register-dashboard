<?php
session_start();
include_once 'functions.php';
$conn=connectToDatabase();

if(isset($_POST['signup'])){
    if(createUser($_POST['email'], $_POST['password'], $conn)){
        
        echo "<script>
        alert('successfully created account');
        window.location.href = 'login.php';
        </script>";
    }else{
        
        echo "<script>
        alert('error occured when creating account');
        window.location.href = 'login.php';
        </script>";
    } 
    exit();      
}

else if(isset($_GET['add_student'])){
    if(addStudent($_GET['student_name'], $_GET['reg_no'], $_GET['gender'], $conn)){
        
        echo "<script>
        alert('successfully added student');
        window.location.href = 'new_student.php';
        </script>";
    }else{
        
        echo "<script>
        alert('error occured when adding new student');
        window.location.href = 'new_student.php';
        </script>";
    } 
    exit(); 
}

else if(isset($_POST['signin'])){
    signInUser($_POST['email'], $_POST['password'], $conn);
    exit();
    
}

else if(isset($_GET['logout'])){
    unset($_SESSION['logged_in']);
    echo "<script>
        alert('logging out');
        window.location.href = 'index.php';
        </script>";
    exit();
}
else{
    $conn=null;
    header("Location: index.php");
    exit();
}

