<?php
session_start();
if (!isset($_SESSION['web_user'])) {
    $_SESSION['web_user'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/logo_title.png" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home1.css">
</head>

<body>
    <?php
    if ($_SESSION['web_user']) {
    ?>
        <header>
            <div class="menu">
                <a href="profile.php">Profile</a>
                <a class="active" href="#Home"><b>Beranda</b></a>
            </div>
        </header>
        <br>
        <br>
        <!-- PHP Section -->
        <?php
        echo "<p class = 'hallo'><b> Hallo, " . $_SESSION['web_user_fullname'] . "
                <br> Mau belajar apa hari ini?
                </b></p>";
        ?>

        <div>
            <div class="kotak"></div>
            <br>
            <div class="materi">
                <div class="kotak1">
                    <img class="PHP" src="images/logo_PHP.png">
                    <div class="kotakijo">
                        <p class="tulisan"><b>PHP</b></p>
                    </div>
                </div>

                <div class="kotak2">
                    <img class="HTML" src="images/logo_HTML.png">
                    <div class="kotakijo1">
                        <p class="tulisan"><b>HTML 5</b></p>
                    </div>
                </div>

                <div class="kotak3">
                    <img class="CSS" src="images/logo_CSS.png">
                    <div class="kotakijo2">
                        <p class="tulisan"><b>CSS</b></p>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    <?php
    } else {
        include_once 'login.php';
    }
    ?>
</body>

</html>