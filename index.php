<?php 
include('partials/header.php')
?>


    <div class="form_container">
        <div class="overlay">
            <!--no content-->
        </div>

        <div class="titleDiv">
            <h1 class="title">Log-IN</h1>
            <span class="subTitle">Welcome back!</span>
        </div>

        <?php 
        if(isset($_SESSION['noAdmin'])){
            echo $_SESSION['noAdmin'];
            unset($_SESSION['noAdmin']);
        }
        ?>

        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="uname" placeholder="Enter Username" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                </div>

                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Log-IN">

                    <span class="registerLink">Don't have an Account? <a href="register.php">Register</a></span>
                </div>
            </div>
        </form>           
        
    </div>

<?php 
include('partials/footer.php')
?>

<?php

$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die("could not connect to mysql");
$db_select = mysqli_select_db($conn, DATABASE) or die("no database");

if (isset($_POST['submit'])) {
    // echo 'Yes data submitted';
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE uname = '$uname' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);

    if ($count == 1) {
        $_SESSION['loginMessage'] = '<span class="success">Welcome ' . $uname . ' </span>';
        header('location:' . SITEURL . 'dashboard.php');
        exit();
    } else {
        $_SESSION['noAdmin'] = '<span class="fail">' . $uname . ' is not registered! </span>';
        header('location:' . SITEURL . 'index.php');
        exit();
    }
}
?>
