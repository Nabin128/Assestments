<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html>
<head>
<title>login system</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
           <h3>HEllo  <?php echo $_SESSION['username']; ?></h3
        </div>
    </div>
</body>
</html>