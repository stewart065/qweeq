<?php
            session_start();

            if(isset($_SESSION['uname'])){
                header('location:home.php');
            }


        require_once "connection.php";

        if($_POST)
        {
            $username = $_POST['uname'];
            $password = $_POST['pass'];
        
        
            $sql = "INSERT INTO `signup`(`username`, `password`) VALUES ('$username','$password')";
            $res = $con->query($sql);
            if($res)
                    header("Location:index.php");
            
                else
                    echo "failed2";       
            
        } 
          
?>