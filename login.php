<?php
session_start();

$servername = "localhost";
$username = "root";
$passwordDB = "";
$dbname = "petDB";

$userErr = "* Username required or incorrect.";
$passwordErr = "";

$user = "";
$password = "";


$conn = mysqli_connect($servername, $username, $passwordDB, $dbname);

$sqlSearch = "select adminusername, adminpassword from admins";
    $results = mysqli_query($conn, $sqlSearch);

    if (mysqli_num_rows($results) > 0) {

        while ($row = mysqli_fetch_array($results)) {

            $userConfirm = $row['adminusername'];
            $passConfirm = $row['adminpassword'];
        }
    } else {
        echo "Account information not correct";
    }
    mysqli_close($conn);

// checking for employee username and password
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // checking the employee username and password
    if (empty($_POST["username"]) || $_POST["username"] != $userConfirm) {
        $userErr = "* Username required or incorrect.";
    } else {
        $userErr = "";
    }
    if (empty($_POST["password"]) || $_POST["password"] != $passConfirm) {
        $passwordErr = "* Password required or incorrect.";
    } else {
        $passwordErr = "";
    }


   // Sending employee to the database if correct
    if ($userErr == "" && $passwordErr == "") {
        header("Location:http://localhost/Assignment03DatabaseNew.php");
        exit();
    }
}


?>
<html>

<head>

    <link href="login.css" rel="stylesheet">
    <style>
        .error {
            color: black;
        }
    </style>

</head>

<body>
    <div class="center">

        <div class="loginbox">
            <!---Sending the information that the employee inputed to be verified-->
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <h3>Helping Paw Adoption</h3>
                <span class="error" id="error"><?php echo $userErr; ?></span><br>
                <input class="inputstyle" type="text" name="username" placeholder="Username" /><br><br>
                <span class="error" id="error"><?php echo $passwordErr; ?></span><br>
                <input class="inputstyle" type="password" name="password" placeholder="Password" /><br><br>
                <div class="buttonspace">
                    <input class="button" type="submit" name="login" value="Login" />
                </div>
            </form>
        </div>
    </div>

</body>

</html>