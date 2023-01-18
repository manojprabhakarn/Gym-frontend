<?php
include 'libs/load.php';

?>


<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./dist/css/main.css" rel="stylesheet">
</head>

 <!-- Navbar -->
 <?load_template('nav');?>

<body>
   

    <!-- List View container-->
    <div class="container" id="listblog">
        <p style="font-size: small;">
            Posted by
            <a href="#!">Author</a>
            on <span>15, 2023</span>
        </p>
        <div class="row">
            <div class="col-9">
                <a href="#" class="text-decoration-none">
                    <strong class="fw-bold" style="font-size: 1rem; color: black;">Man must explore, and this is
                        exploration at its greatest</strong>
                </a>
            </div>
            <div class="col-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI0LOUyMS0J5J9G_3Nah7GWTOnpFP81PK1S26jBAO_TYbDZ-JWmEyWFiw0KcIXK6VFYGo&usqp=CAU"
                    width="80" height="56">
            </div>
        </div>


        <span class="mt-3 badge rounded-pill bg-secondary">Bug-bounty</span>
        <span class="badge rounded-pill bg-white text-dark fw-normal"> 5 min</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill"
            viewBox="0 0 16 16">
            <path
                d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />
        </svg>

        <hr>
    </div>

</body>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <script src="./dist/js/main.js"></script>
</footer>

</html>