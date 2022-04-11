<!DOCTYPE html>
<html>

<head>

    <title>
        Admin
    </title>
    <link rel="icon" href="/images/mylogo.ico">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <center>
        <a href="/index.php" style="text-decoration: none; color: black;">
            <h2><b>Welcome</b> Admin</h2>
        </a>
        <br><br>
    </center>
    <div class="text-left mt-2 mb-3">
        <a href="/index.php" class="btn btn-primary btn-block" style="margin-left: 5%;">
            <b>Home</b>
        </a>
        <a href="/page/login.php" class="btn btn-primary btn-block" style="margin-left: 78.7%;">
            <b>Logout</b>
        </a>
    </div>
    <center>
        <table class="table table-striped table-bordered table-sm" style="white-space: nowrap;width: 90%;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            $nim = array("2009116024", "2009116025", "2009116026", "2009116027", "2009116028");
            $user = array("zaki", "galda", "reja", "riswan", "ibnu");
            $kelas = array("SI A", "SI B", "SI C", "SI D", "SI E");
            ?>
            <tbody>
                <?php
                function func_delete($indexnya)
                {
                    unset($nim[$indexnya]);
                    unset($user[$indexnya]);
                    unset($kelas[$indexnya]);
                }
                for ($i = 0; $i < count($nim); $i++) {
                    echo "
                    <tr>
                    <td>" . ($i + 1) . "</td>
                    <td>" . $nim[$i] . "</td>
                    <td>" . $user[$i] . "</td>
                    <td>" . $kelas[$i] . "</td>
                    <td> 
                    <a type='button' class='btn btn-success'>Update</a>
                    <a name='del' type='button' class='btn btn-danger'onclick='myFunction()'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </center>

</body>

</html>