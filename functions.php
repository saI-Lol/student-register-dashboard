<?php
function connectToDatabase(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="dashboard" ; 

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function getStudentNumber($conn){
    $query="SELECT COUNT(*) as count FROM student";
    $result=mysqli_query( $conn, $query);
    return $result;
}

function getRecentlyAddedStudents($conn){
    $query="SELECT student_name FROM student ORDER BY time_added DESC LIMIT 5";
    $result=mysqli_query($conn, $query);
    return $result;
}

function createUser($email, $password, $conn){
    $hash=password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hash);
    $result=$stmt->execute();
    $stmt->close();
    return $result;
}

function addStudent($student_name, $reg_no, $gender, $conn){
    $currentDateTime = new DateTime();
    $time_added=$currentDateTime->format('Y-m-d H:i:s');
    $stmt = $conn->prepare("INSERT INTO student (student_name, reg_no, gender, time_added) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $student_name, $reg_no, $gender, $time_added);
    $result=$stmt->execute();
    $stmt->close();
    return $result;
}

function signInUser($email, $password, $conn){
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $stmt->close();

    if ($resultSet->num_rows > 0) {
        $row = $resultSet->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION["logged_in"]=true;
            echo "<script>
        alert('logged in');
        window.location.href = 'dashboard.php';
        </script>";
        }else{
            echo "<script>
        alert('password is incorrect');
        window.location.href = 'index.php';
        </script>";
        }
        
    } else {
        echo "<script>
        alert('email does not exist.\ncreate account');
        window.location.href = 'signup.php';
        </script>";
    }
    return;
}



    
    
    
    
    
    
    
    
    
    




