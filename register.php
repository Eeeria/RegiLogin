<?php 
include('partials/header2.php')
?>

    <?php 
    if(isset($_SESSION['accountCreated'])){
        echo $_SESSION['accountCreated'];
        unset($_SESSION['accountCreated']);
    }
    ?>
    
    <div class="form_container">
        <div class="overlay">
            <!--no content-->
        </div>

        <div class="titleDiv">
            <h1 class="title">Register</h1>
            <span class="subTitle">Thanks for choosing us!</span>
        </div>

        <form action="" method="POST">
            <div class="row grid">
                <div class="row">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your Name" required>
                </div>

                <div class="row">
                    <label for="pnumber">Phone Number</label>
                    <input type="tel" id="pnumber" name="pnumber" placeholder="Enter your Phone Number" required>
                </div>

                <div class="row">
                    <label for="bdate">Birthday</label>
                    <input type="date" id="bdate" name="bdate" placeholder="Enter your Birthday" required>
                </div>

                <div class="row">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="row">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="uname" placeholder="Enter Username" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                </div>

                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Register">

                    <span class="registerLink">Have an account already? <a href="index.php">Log-IN</a></span>
                </div>
            </div>
        </form>           
        
    </div>

    
<?php 
include('partials/footer.php')
?>

<?php 

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $pnumber = $_POST['pnumber'];
    $bdate = $_POST['bdate'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin SET
        name = '$name',
        pnumber = '$pnumber',
        bdate = '$bdate',
        email = '$email',
        uname = '$uname',
        password = '$password'  
    ";

    $result = mysqli_query($conn, $sql);
    if($result == true){
        $_SESSION['accountCreated'] = '<span class="success">Account Created Succesfully!</span>';
        header('location:' .SITEURL. 'index.php');
        exit();
    }
    else{
        $_SESSION['unSuccesful'] = '<span class="fail">Failed to Create an Account!</span>';
        header('location:' .SITEURL. 'register.php');
        exit();
    }
}

?>