<!doctype html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="lock.js"></script>
<script src="load.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;900&display=swap" rel="stylesheet">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">


    <title>Collage Image Finder</title>
</head>

<body>


    <!-- //my-4 -->

    <div class="content">

        <div class="header">
            <img width="250px" src="images/logo.jpg" alt="">

            <div class="info">
                <div class="card">
                    <p class="card-body">Type in all keywords you need to generate an image set. </p>
                    <p class="card-body">
                        Press enter to generate and click on an image to lock it.</p>
                </div>

                <div class="form">

                    <?php
                                        //place form.php here
                                        include "form.php";

                                        ?>
                </div>



                <div class="images">

                </div>



            </div>

        </div>


        <div class="imgContainer">




        </div>

    </div>
    <script src="grid.js"></script>

</body>

</html>