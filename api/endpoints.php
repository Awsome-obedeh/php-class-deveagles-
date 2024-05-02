<?php
include("../includes/dbconnect.php");
    if(isset($_POST['scope'])){

        // hanlde login request
        if($_POST['scope']=="login"){
            // take incoming values
            $email=$_POST['email'];
            $password=$_POST['password'];

            // query the databsee to find if user matches any in the database
            $login_sql="SELECT * FROM users WHERE email='$email' ";
            $login_query=mysqli_query($conn,$login_sql);

            // check if user email is correct
            if(mysqli_num_rows($login_query)>0){
                // get user password 
                $user=mysqli_fetch_assoc($login_query);
                $user_password=$user['password'];

                // compare user password
                $password_true=password_verify($password,$user_password);
                if($password_true){
                    // logged in sucessfuly
                    // send the response in json
                    echo json_encode(array("msg"=>"logged in", "status"=>200));
                }

                else{
                    // user uses a wrogn password
                    echo json_encode(array("msg"=>"Invalid credentials", "status"=>400));
                }




            }
            else{
                echo json_encode(array("msg"=>"Invalid credentials", "status"=>400));
            }






        }
    }


?>