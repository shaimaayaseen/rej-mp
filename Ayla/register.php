<!-- Database Connection  -->
<?php include('db.php'); ?>
<?php include('validation.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registion page</title>
    <link href="login_register.css" type="text/css" rel="stylesheet"/>

</head>
<body>

    <!-- Start PHP  -->

    <?php

$Check_Successfuly = 0;
$Check_UnSuccessfuly = 0;

if(isset($_POST['submit'])){ 
    $name =     santString($_POST['name']) ; 
    $email =    santEmail($_POST['email']) ;
    $password = santString($_POST['password']) ;

    // Start 1st condition
    if(requiredInput($name) && requiredInput($email) && requiredInput($password)) {

        // Start 2nd condition
        if(minInput($name,3) && maxInput($password,20)) {
            // Start 3rd condition
            if(validEmail($email)) {
                // $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
                
                // Read From DataBase
                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($conn,$sql); 

                // Start many conditions to prevent repeat email in database
                if(mysqli_num_rows($result) > 0){
                    
                    while($row = mysqli_fetch_assoc($result)){
                        if($row["email"] !== $email) {

                            $Check_Successfuly += 1;
                            
                        } else {
                            $Check_UnSuccessfuly += 1;
                        }
                    }
                    if($Check_UnSuccessfuly != 1){
                        // Start Create In DataBase
                        $sql = "INSERT INTO `users` (`full_name`, `email`, `password`) VALUES('$name' , '$email', '$password' ) ";   
                        $result = mysqli_query($conn, $sql);
                        // End Create In DataBase

                        if ( $result ) {
                            header("Location: login.php");
                        }
                    } else {
                        $error = "Please Enter available Email";
                    }
                } else {

                    // Start Create In DataBase
                    $sql = "INSERT INTO `users` (`full_name`, `email`, `password`) VALUES('$name' , '$email' , '$password' )";   
                    $result = mysqli_query($conn, $sql);
                    // End Create In DataBase

                    if ( $result ) {
                        header("Location: login.php");
                    }

                }
                 // End many conditions to prevent repeat email in database


            }
            else {
                $error = "Please Type Valid Email";
            }
            // End 3rd condition
        }
        else {
            $error = "Name Must Be Greate Than 3 Characters & Password Must Be Less Than 20 Characters";
        }
        // End 2nd condition
        
    }
    else {
        $error = "Please Fill All Fields"; 
    }
    // End 1st condition
}

?>

<!-- End PHP  -->
     
    <div class="registerbox">

        <!-- Start For Error  -->
        <?php if($error) : ?>
            <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
        <?php endif; ?>
        <!-- End For Error  -->

        <h2>SIGN UP</h2>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="text" placeholder="Full_Name" name="name"/>
            <input type="text" placeholder="Email" name="email"/>
            <input type="password" placeholder="Password" name="password"/>
            <button class="registerbtn" type="submit" name="submit">Register</button>

            <div class="loginlink">
                <span>if you already registered ?</span><a href="login.php">clik<b>to go login here</b></a>
            </div>
        </form>
    </div>
</body>
</html>