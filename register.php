    <?php
    // we use the include to add 
    include('includes/dbconnect.php');
    // set error variable to be null
    $err = '';
    // $salt=[
    //     'cost'=>16
    // ];
    // $name="stephen";
    // echo password_hash($name, PASSWORD_BCRYPT) . '<br>';
    // echo password_hash($name, PASSWORD_BCRYPT, $salt). '<br>';
    // echo password_hash($name, PASSWORD_BCRYPT, [
    //     'cost'=>100
    // ]);
    // linsten for when the form button is clicked
    if (isset($_POST['register'])) {
        echo  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $dob = filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_SPECIAL_CHARS);


        // validate form input
        if (empty($email)) {
            $err = "provide email";
        } else if (empty($fullname)) {
            $err = "Provide full name";
        } else if (empty($address)) {
            $err = "provide Address";
        } else if (empty($phone)) {
            $err = "Provide phone number";
        } else if (empty($password)) {
            $err = "Provide password";
        } else if (empty($dob)) {
            $err = "provide dob";
        } else {
            $err = "";
            // hash user password
            $salt = [
                'cost' => 16
            ];
            $hash_password = password_hash($password, PASSWORD_BCRYPT, $salt);
            // store user info in database
            $insert_sql = "INSERT INTO users(email,fullname,address,phone,password,dob)
                VALUES('$email', '$fullname', '$address', '$phone' ,'$hash_password', '$dob')";
            // 
            $insert_query = mysqli_query($conn, $insert_sql);
            if ($insert_query) {
                echo "user registered successfully";
                // redirect the user to the login  page
                header("location:login");
            } else {
                // see thereason , actual reason why the query to the database did not work
                echo "server Error" . mysqli_error($conn);
            }
        }
    }


    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <div class="container mx-auto">

            <?php if ($err) : ?>
                <div class="alert alert-primary">
                    <p class="text-center text-black fw-bolder"><?= $err ?> </p>
                    <!-- <p><?php echo $err ?> </p> -->
                </div>
            <?php endif ?>




            <form method="POST" action="<?= $_SERVER["PHP_SELF"] ?>" class="mt-5">

                <div>
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label mt-4">fullname</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname">

                </div>
                <div>
                    <label for="exampleInputEmai1" class="form-label mt-4">address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                    l
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label mt-4">Phone number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">

                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label mt-4">DOB</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DOB">

                </div>
                <div>
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" autocomplete="off" name="password">
                </div>

                <button type="submit" class="btn btn-success  mt-3" name="register">Submit</button>

            </form>
        </div>

    </body>

    </html>