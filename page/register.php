<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    function function_alert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link rel="icon" href="/images/mylogo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/extend/adminlte.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="hold-transition login-page bg" style="background-image: url(../images/background3.png);">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary" style="background-color:rgba(0,0,0, 0.6);">
            <div class="card-header text-center">
                <a href="/index.php" class="h1" style="color: white;"><b>SA</b>TE</a>
            </div>
            <div class="card-body">
                <p style="color: white;" class="login-box-msg">Sign Up with your data</p>
                <form method="post">
                    <div class="input-group mb-3">
                        <input name="full_name" type="text" class="form-control" placeholder="Full name">

                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <input name="rpassword" type="password" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                        </div>
                    </div>
                    <select name="role" class="form-select" aria-label="Default select example">
                        <option selected>Select Your Role</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    <div class="input-group mb-3"></div>
                    <div class="text-center mt-2 mb-3">
                        <input name="signup" type="submit" class="btn btn-primary btn-block" value="Sign Up">
                    </div>
                    <p class="mb-3">
                        <a href="/page/login.php" class="text-center">Have a account ? Sign In</a>
                    </p>

                    <?php
                    if (isset($_POST["signup"])) {
                        $user_admin = array("z@gmail.com", "zaki@gmail.com");
                        $pass_admin = array("1", "2");
                        $user_user = array("ri@gmail.com", "n@g.c", "a@g.c");
                        $pass_user = array("1", "2", "3");
                        $full_name = $_POST['full_name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $rpassword = $_POST['rpassword'];
                        $tmp;
                        if ($_POST['role'] == 1) {
                            for ($i = 0; $i < count($user_admin); $i++) {
                                if ($_POST["email"] != $user_admin[$i]) {
                                    $tmp = $i;
                                    break;
                                } else {
                                    $tmp = -1;
                                }
                            }
                            if ($tmp == -1) {
                                function_alert("Email Address is Already Registered");
                            } else {
                                function_alert("Sign Up Success");
                                echo "<script>window.location.href = '/page/login.php';</script>";
                            }
                        } elseif ($_POST['role'] == 2) {
                            for ($i = 0; $i < count($user_user); $i++) {
                                if ($_POST["email"] != $user_user[$i]) {
                                    $tmp = $i;
                                    break;
                                } else {
                                    $tmp = -1;
                                }
                            }
                            if ($tmp == -1) {
                                function_alert("Email Address is Already Registered");
                            } else {
                                function_alert("Sign Up Success");
                                echo "<script>window.location.href = '/page/login.php';</script>";
                            }
                        }
                    }
                    ?>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</body>

</html>