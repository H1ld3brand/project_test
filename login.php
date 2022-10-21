<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>+/-</title>
        <link rel="icon" href="images/logo_title.png" type="image/icon type">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <div class="main">
            
            <!-- JUDUL SECTION -->
            <h1>
                <div class="judul">Selamat Datang</div>
            <h1>

            <!-- FORM SECTION -->
            <table>
                <tr>
                    <td>
                        <form action="index.php" method="POST" class="displayform">
                            <div class="subjudul">Nama <b>Depan</b></div>
                            <br>
                            <input type="text" name="namadepan" class="form" placeholder="Nama Depan">
                            <br>
                            <div class="subjudul">Nama <b>Belakang</b></div>
                            <br>
                            <input type="text" name="namabelakang" class="form" placeholder="Nama Belakang">
                            <br>
                            <input type="submit" name="submit" class="submit" placeholder="MASUK">
                        </form> 
                    </td>
                </tr>
            </table>
            <br>
            <p align = "center" class = "created">
                created by +/-
                <br>
                2022
            </p>
        </div>

        <?php
            $submit = filter_input(INPUT_POST, 'submit');
            if(isset($submit)){
                $_SESSION['web_user']=true;
                $_SESSION['web_user_fullname']=(filter_input(INPUT_POST,'namadepan') . " " . filter_input(INPUT_POST,'namabelakang'));
                header('location:index.php');
            }
        ?>
    </body>

</html>