<?php session_start(); ?>

<!doctype html>
<html lang="en">
    

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>

    <form action="lists.php" method="post" enctype="multipart/form-data">
        <button class="btn brn-lg btn-block btn-dark">List of all users</button>
    </form>

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
    
    <form action="connect.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">ФИО</label>
            <input type="text" class="form-control" id="fio" name="fio"
                placeholder="ФИО...">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Дата рождения</label>
            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Дата рождения...">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">ИИН</label>
            <input type="text" class="form-control" id="iin" name="iin" placeholder="ИИН...">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Номер телефона</label>
            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Телефон...">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Адрес</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Адрес...">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" name="save_date" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    
</body>

</html>