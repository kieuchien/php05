<?php 
    include 'connect.php';
    //Check submit register
    if(isset($_POST["register"])) {
      
        $birthday   = $_POST['birthday'];
        $first_name = $_POST['first_name'];
        $last_name =$_POST['last_name'];
        // var_dump($gender);
        // exit();
        //
        
        $sql = "INSERT INTO users (first_name, last_name, birthday)
        VALUES ('$first_name', '$last_name', '$birthday')";


         if ($conn->query($sql) === TRUE); {
            echo "Register success";
        }
    }
        
      

?>

<!--         $last_name  = $_POST['last_name'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $first_name = $_POST['first_name'];
        //insert data to users table
        $sql = "INSERT INTO users (first_name)
                VALUES ('$first_name')";
        if ($conn->query($sql) === TRUE) {
            echo "Register success";
        }  -->