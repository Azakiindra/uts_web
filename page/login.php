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
    <title>Login Page</title>
    <link rel="icon" href="/images/mylogo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/extend/adminlte.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="hold-transition login-page bg" style="background-image: url(../images/background2.png);">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary" style="background-color:rgba(0,0,0, 0.6);">
            <div class="card-header text-center">
                <a href="/index.php" class="h1" style="color: white;"><b>SA</b>TE</a>
            </div>
            <div class="card-body">
                <p style="color: white;" class="login-box-msg">Sign in to access your Course</p>
                <form method="post">
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">

                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                        </div>
                    </div>
                    <select name="role" class="form-select" aria-label="Default select example">
                        <option selected>Select Your Role</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    <div class="text-center mt-2 mb-3">
                        <input name="login" type="submit" class="btn btn-primary btn-block" value="Sign In">
                    </div>
                    <p class="mb-1">
                        <a href="/page/lorem.php">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="/page/register.php" class="text-center">Register a new member</a>
                    </p>

                    <?php
                    $user_admin = array("z@gmail.com", "zaki@gmail.com");
                    $pass_admin = array("1", "2");
                    $user_user = array("ri@gmail.com","n@g.c","a@g.c");
                    $pass_user = array("1","2","3");
                    $tmp;

                    if (isset($_POST["login"])) {
                        if ($_POST['role'] == 1) {
                            for ($i = 0; $i < count($user_admin); $i++) {
                                if ($_POST["email"] == $user_admin[$i] && $_POST["password"] == $pass_admin[$i]) {
                                    $tmp = $i;
                                    break;
                                } else {
                                    $tmp = -1;
                                }
                            }
                            if ($tmp == -1) {
                                function_alert("Wrong Email or Password");
                            } else {
                                function_alert("Login Success as Admin");
                                echo "<script>window.location.href = '/page/admin/admin.php';</script>";
                            }
                        } elseif ($_POST['role'] == 2) {
                            for ($i = 0; $i < count($user_user); $i++) {
                                if ($_POST["email"] == $user_user[$i] && $_POST["password"] == $pass_user[$i]) {
                                    $tmp = $i;
                                    break;
                                } else {
                                    $tmp = -1;
                                }
                            }
                            if ($tmp == -1) {
                                function_alert("Wrong Email or Password");
                            } else {
                                function_alert("Success Login as User");
                                echo "<script>window.location.href = '/page/user/user.php';</script>";
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