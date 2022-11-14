<?php
       
       session_start();
       if(isset( $_SESSION['uname'])){

        header('location:home.php');
       }
         if($_POST){
         include 'connection.php'; 
         
				
		 if(isset($username) && isset($password)){
			$username = $_POST['uname'];
			$password = $_POST['pass'];
			
		}

           $sql	="SELECT * FROM `signup` WHERE username = '$username' && password = '$password'";
  
            $res=mysqli_query($con,$sql);
                 if($res)
                 {
                  $num=mysqli_num_rows($res);
                  if($num>0)
                  {
                          $_SESSION['uname']=$username;
                          header('location:home.php');
                  }
                  else{
                          echo 'INVALID INPUTS';
                  }
            }
         }   
    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="ert.css">
    
    
    <title>Document</title>
</head>
<body>
    
<div class="cotn_principal">
     <div class="cont_centrar">

        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_login">
            <div class="cont_ba_opcitiy">
                    
                    <h2>LOGIN</h2>  
            <p></p> 
            <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
            </div>
            </div>
            <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
            <h2>SIGN UP</h2>

            
            <p></p>

            <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
            </div>
            </div>
                </div>

                
                <div class="cont_back_info">
                <div class="cont_img_back_grey">
                <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
                </div>
                
                </div>
            <div class="cont_forms" >
               <form action="" method="post">
                    <div class="cont_form_login">
                    <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons"></i></a>
                    <h2>LOGIN</h2>
                    <input type="text" name="uname" placeholder="Username" />
                    <input type="password" name="pass" placeholder="Password" />
                    <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
            </form> 
      

           <form action="signup.php" method="post">
              <div class="cont_form_sign_up">
                    <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
                        <h2>SIGN UP</h2>
                    <input type="text" name="uname" placeholder="Username" />
                    <input type="password" name="pass" placeholder="Password" />
                    <input type="password" placeholder="Confirm Password" />
                    <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

              </div>
            </form>

                </div>
                
         </div>
     </div>
</div>


        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="wew.js"></script>
</body>
</html>