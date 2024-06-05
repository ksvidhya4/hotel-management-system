<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEAVIEW INN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <style>
        :root {
            --teal: #51FBA6;
            --teal_hover: #55FF55;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
        }

        /* Chrome, Safari,Edge,Opera*/
        input::-webkit-outer-spin-buttob,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /*firefox*/
        input[type=number] {
            -moz-appearance: textfield;
        }

        .custom-bg {
            background-color: var(--teal);
            border: 1px solid var(--teal);
        }

        .custom-bg:hover {
            background-color: var(--teal_hover);
            border: 1px solid var(--teal_hover);


        }

        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .avaliability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php">SEAVIEW INN</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="admin_dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active  me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</head>
<!--
-10-->




<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'seaview_inn';


$con = mysqli_connect($hname, $uname, $pass, $db);

if ($con === false) {
    die("Cannot Connect to Database" . mysqli_connect_error());
}



?>










<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg ms-auto p-4 overflow-hidden">
            <center>
             <u>   <h3 class="h-font fw-bold fs-3 mb-2 ">User Queries</h3></u>
            </center>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                        <div class="row">
                            <div class="col-md-12">

                                <table class="table table-hover border">
                                    <thead class="sticky-top">
                                        <tr class="bg-dark text-light">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Date</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q = "SELECT * FROM user_queries order by 'sr_no'";
                                        $data = mysqli_query($con, $q);
                                        $i = 1;

                                        while ($row = mysqli_fetch_assoc($data)) {
                                           
                                            echo <<<query
                                                <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[email]</td>
                                                <td>$row[subject]</td>
                                                <td>$row[message]</td>
                                                <td>$row[date]</td>
                                                
                                                </tr>
                                                query;
                                            $i++;
                                        }
                                        ?>

                                    </tbody>
                                </table>



                            </div>
                        </div>

                    </div>
                    <br>










                </div>


            </div>
        </div>

    </div>
</div>
</div>