<?php
// declera error message , so we wont have an 
// error showing undefined $err message
$err='';
// check for form submission
if (isset($_POST['register'])) {
    echo "form is submitted";

    echo  $email = $_POST['email'];
    echo htmlentities($password = $_POST['password']);

    //   validate uer input
    if (empty($email)) {
        echo $err = "provide email";
    } else if (empty($password)) {
        $err = "provide password";
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
        <?php if(!empty($err)) {?>

        
            <div class="alert alert-primary text-center">

                <p>  <?= $err ?>  </p>
            </div>

        <?php } ?>

        <?php if(!empty($err)) :?>
            <div class="alert alert-primary text-center">

            <p>  <?= $err ?>  </p>
            </div>
            
        <?php endif ?>

        



        <form method="POST" action="form">
            <fieldset>
                <legend>Legend</legend>
                <div class="row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticEmail" name="email">
                    </div>
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div>
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" name="password">
                </div>

                <button type="submit" class="btn btn-success  mt-3" name="register">Submit</button>
            </fieldset>
        </form>
    </div>

</body>

</html>