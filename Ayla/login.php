<!-- Database Connection  -->
<?php include('db.php'); ?>
<?php include('validation.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="login_register.css" type="text/css" rel="stylesheet"/>

</head>
<body>




    <!-- PHP Start  -->
    <?php

    if(isset($_POST['submit'])){ 
        $email = santEmail($_POST['email']) ;
        $password = santString($_POST['password']) ;

        

        // Start 1st condition
        if(requiredInput($email) && requiredInput($password)) {

            // Start 2nd condition
            if(maxInput($password,20)) {
                // Start 3rd condition
                if(validEmail($email)) {
                    
                    
                        // Read From DataBase
                    $sql = "SELECT * FROM `users` ";
                    $result = mysqli_query($conn,$sql);


                    if(mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_assoc($result)):
                        
                            if($email == $row['email'] && $password == $row['password'] && $row['is_admin']){
                                $id=$row['id'];
                                header("Location:index.php?id=$id");
                                // ** ?id=$id This action To prevent users entering into AdminDashboard 
                            }
                        else if($email == $row['email'] && $password == $row['password']){
                            header("Location:index.php");
                        }
                        else {
                            $error = "Please Type Valid Email & Password"; // this action gives error if email & password are not exist in database
                        }
                        endwhile;
                    endif;

                }
                else {
                    $error = "Please Type Valid Email"; // this action gives error if i entered correct password but un-correct email
                }
                // End 3rd condition
            }
            else {
                $error = "Password Must Be Less Than 20 Characters"; // // this action gives error if i entered correct email but un-correct password
            }
            // End 2nd condition
            
        }
        else {
            $error = "Please Fill All Fields"; // this action gives error if i do not entered anything
            // $error: This variable is exist in validation.php
            
        }
        // End 1st condition
    }

                    
         ?>
     
             <!-- PHP End  -->
         <div class="loginbox">
             <h2>User login</h2>
     
                <!-- Start For Error  -->
                <?php if($error) : ?>
                   <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
               <?php endif; ?>
               <!-- End For Error  -->



       
            <form action="" method="post">
       
            <input type="text" placeholder="email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button class="loginbtn" type="submit" name="submit">login</button>
       
             <div class="registerlink">
            <span>Not registered ?</span><a href="register.php">clik here</a>
       
            </div>
       
            
    
     
        </form>
        </div>

</body>
</html>