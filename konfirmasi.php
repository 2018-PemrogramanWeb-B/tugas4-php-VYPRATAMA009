<?php
session_start();
?>

<!DOCTYPE html>
<body>
<?php
$admin = $password ="";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $admin = test_input($_POST["admin"]);
        $password = test_input($_POST["password"]);
        if($admin == "overlord" && $password == "12345678") {
            $_SESSION["admin"] = $admin;
            $_SESSION["password"] = $password;
            header("location:waktu.php");
        }
        else {
            header("location:index.php");
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
</body>
</html>