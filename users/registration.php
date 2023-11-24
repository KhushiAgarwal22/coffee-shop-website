<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>KapeTann | Registration Form</title>
        <link rel="stylesheet" href="../assets/css/login.css"/>
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico"><!-- Favicon / Icon -->
    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","boomer2004@","coffee-shop");
            if($con)
            {
                echo"hi";
            }
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            // When form submitted, insert values into the database.
            if (isset($_POST['username'])) {
                echo"hiii";
                // removes backslashes
                //escapes special characters in a string
               /* $username = mysqli_real_escape_string($con, $username);
                $name    = stripslashes($_REQUEST['name']);
                $name    = mysqli_real_escape_string($con, $name);
                $email    = stripslashes($_REQUEST['email']);
                $email    = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);*/
                $name=strval($_POST['name']);
                $email=strval($_POST['email']);
                $password=strval($_POST['password']);
                $username = strval($_POST['username']);
                echo "$name $email $password $username";
                $query = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
                $result   = mysqli_query($con, $query);
                if ($result) {
                    echo "<script>
                            alert('You are registered successfully.');
                            window.location.href = 'login.php';
                        </script>";
                } else {
                    echo "<div class='form'>
                            <h3>Required fields are missing.</h3><br/>
                        <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                        </div>";
                }
            } else {
        ?>
            <form class="form"  method="post">
                <div style="margin:auto">
                    <img src="../assets/images/logo.png" alt="" class="img img-fluid">
            </div>
                <hr />
                <h1 class="login-title">Registration</h1>
                <input type="text" class="login-input" name="name" placeholder="Name"  />
                <input type="text" class="login-input" name="username" placeholder="Username"  />
                <input type="text" class="login-input" name="email" placeholder="Email Adress" >
                <input type="password" class="login-input" name="password" placeholder="Password" >
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link">Already have an account? <a href="login.php">Login here!</a></p>
            </form>
        <?php
            }
        ?>
    </body>
</html>