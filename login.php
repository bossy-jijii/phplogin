<?php
include("connection.php");

if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $gender=$_POST['gender'];

    $sql="select * from login where username='$username' and password='$password' and gender='$gender'";
    $result= mysqli_query($bdd,$sql);
    // Add error logging for debugging
    error_log("Username: $username, Password: $hashedPassword, Gender: $gender");

    if (!$result) {
        error_log("SQL Error: " . mysqli_error($bdd));
    }

    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count= mysqli_num_rows($result);

    if (isset($count) && isset($gender) && $count == 1){
        if($gender=='woman'){
        header("Location: womencat.html");
        exit;
        }
        else if($gender=='man') {
            header("Location: mencat.html");
            exit;
        }
        else if($gender=='girl') {
            header("Location: girls.html");
            exit;
        }
        else {
            header("Location: boys.html");
            exit;
        }
    }
    else{
        echo '<script>
              window.location.href="index.php";
              alert("Login failed . Invalid username or password")
              </script>';
    }
}

?>
