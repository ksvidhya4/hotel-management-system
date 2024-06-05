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

          <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

            <style>
                :root{
--teal:#51FBA6;
--teal_hover:#55FF55;}
 *{
  font-family: 'Poppins', sans-serif;
  }
  .h-font{
font-family: 'Merienda', cursive;
}
/* Chrome, Safari,Edge,Opera*/
input::-webkit-outer-spin-buttob,
input::-webkit-inner-spin-button{
-webkit-appearance:none;
margin:0;
}
/*firefox*/
input[type=number] {
-moz-appearance:textfield;
}

.custom-bg{
background-color:var(--teal);
border: 1px solid var(--teal);
}
.custom-bg:hover{
background-color:var(--teal_hover);
border: 1px solid var(--teal_hover);


}
                .availability-form{
                margin-top:-50px;
                z-index:2;
                position: relative;
                }

                @media screen and (max-width: 575px){
                .avaliability-form{
                margin-top:25px;
                padding:0 35px;
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
          <a class="nav-link active  me-2" href="admin_rooms.php">Rooms</a>
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
      <!--============= end of header area=========--->
<body>
                   <br><br><br><br>
                 <div class="row">
                   <div class="col-md-2"> </div>
                   <div class="col-md-8">
                   <form  action="" method="post">
            <center>       <a href="admin_rooms.php" class="btn btn-primary">Book Room</a>
                    <a href="admin_rooms.php" class="btn btn-success">Check Room Status</a>
                    <a href="admin_dashboard.php" class="btn btn-warning">View User Details</a>
                    <a href="" class="btn btn-info">Recently Check outs</a>
                    <a href="logout.php" class="btn btn-danger">Logout</a> 
                    <a href="admin_contact.php" class="btn btn-dark">User Queries</a>   </center>
                   </form>
                   </div>
                   <div class="col-md-12"> </div>
                   </div>

                     <br><br><br>

                       <div class="row">
                         <div class="col-md-12">
                            <center><h3>Checked In User's Details</h3></center>
                         </div>
                         <br><br>
                       </div>
                          <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                 <thead>
                                 <tr>
                                 <th>S.No</th>
                                 <th>User Name</th>
                                 <th>User ID </th>
                                 <th>User Mobile</th>
                                 <th>Room No</th>
                                 <th>User Address</th>
                                 <th>Child</th>
                                 <th>Adult</th>
                                 <th>Check In</th>
                                 <th>Check Out</th>
                              </tr>
                            </thead>
                            <center><h3 class="h-font fw-bold fs-3 mb-2 ">Single Non-AC</h3></center>
                                 <?php
                                   $user_count=0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"seaview_inn");
                                    $query = "select * from single_non_ac where status =1;";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count= $user_count+1;
                                        ?>
                                      <tr>
                                       <td><?php echo $user_count;?></td>
                                       <td><?php echo $row['holder_name'];?></td>
                                       <td><?php echo $row['holder_id'];?></td>
                                        <td><?php echo $row['holder_mobile'];?></td>
                                        <td><?php echo $row['room_no'];?></td>
                                       <td><?php echo $row['holder_address'];?></td>
                                       <td><?php echo $row['child'];?></td>
                                        <td><?php echo $row['adult'];?></td>
                                         <td><?php echo $row['in_date'];?></td>
                                       <td><?php echo $row['out_date'];?></td>
                                    </tr>
                                    <?php
                                    }
                                  ?>
                              </table>
                              </div>
                           </div>


                          <br>

                          <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                 <thead>
                                 <tr>
                                 <th>S.No</th>
                                 <th>User Name</th>
                                 <th>User ID </th>
                                 <th>User Mobile</th>
                                 <th>Room No</th>
                                 <th>User Address</th>
                                 <th>Child</th>
                                 <th>Adult</th>
                                 <th>Check In</th>
                                 <th>Check Out</th>
                              </tr>
                            </thead>
                            <center><h3 class="h-font fw-bold fs-3 mb-2 ">Single AC</h3></center>
                                 <?php
                                   $user_count=0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"seaview_inn");
                                    $query = "select * from single_ac where status =1;";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count= $user_count+1;
                                        ?>
                                      <tr>
                                       <td><?php echo $user_count;?></td>
                                       <td><?php echo $row['holder_name'];?></td>
                                       <td><?php echo $row['holder_id'];?></td>
                                        <td><?php echo $row['holder_mobile'];?></td>
                                        <td><?php echo $row['room_no'];?></td>
                                       <td><?php echo $row['holder_address'];?></td>
                                       <td><?php echo $row['child'];?></td>
                                        <td><?php echo $row['adult'];?></td>
                                         <td><?php echo $row['in_date'];?></td>
                                       <td><?php echo $row['out_date'];?></td>
                                    </tr>
                                    <?php
                                    }
                                  ?>
                              </table>
                              </div>
                           </div>

                                   <br>
                               <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                 <thead>
                                 <tr>
                                 <th>S.No</th>
                                 <th>User Name</th>
                                 <th>User ID </th>
                                 <th>User Mobile</th>
                                 <th>Room No</th>
                                 <th>User Address</th>
                                 <th>Child</th>
                                 <th>Adult</th>
                                 <th>Check In</th>
                                 <th>Check Out</th>
                              </tr>
                            </thead>
                            <center><h3 class="h-font fw-bold fs-3 mb-2 ">Double Non-AC</h3></center>
                                 <?php
                                   $user_count=0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"seaview_inn");
                                    $query = "select * from double_ac where status =1;";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count= $user_count+1;
                                        ?>
                                      <tr>
                                       <td><?php echo $user_count;?></td>
                                       <td><?php echo $row['holder_name'];?></td>
                                       <td><?php echo $row['holder_id'];?></td>
                                        <td><?php echo $row['holder_mobile'];?></td>
                                        <td><?php echo $row['room_no'];?></td>
                                       <td><?php echo $row['holder_address'];?></td>
                                       <td><?php echo $row['child'];?></td>
                                        <td><?php echo $row['adult'];?></td>
                                         <td><?php echo $row['in_date'];?></td>
                                       <td><?php echo $row['out_date'];?></td>
                                    </tr>
                                    <?php
                                    }
                                  ?>
                              </table>
                              </div>
                           </div>




                              <br>
                            <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                                 <thead>
                                 <tr>
                                 <th>S.No</th>
                                 <th>User Name</th>
                                 <th>User ID </th>
                                 <th>User Mobile</th>
                                 <th>Room No</th>
                                 <th>User Address</th>
                                 <th>Child</th>
                                 <th>Adult</th>
                                 <th>Check In</th>
                                 <th>Check Out</th>
                              </tr>
                            </thead>
                            <center><h3 class="h-font fw-bold fs-3 mb-2 ">Double Non-AC</h3></center>
                                 <?php
                                   $user_count=0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"seaview_inn");
                                    $query = "select * from double_non_ac where status =1;";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count= $user_count+1;
                                        ?>
                                      <tr>
                                       <td><?php echo $user_count;?></td>
                                       <td><?php echo $row['holder_name'];?></td>
                                       <td><?php echo $row['holder_id'];?></td>
                                        <td><?php echo $row['holder_mobile'];?></td>
                                        <td><?php echo $row['room_no'];?></td>
                                       <td><?php echo $row['holder_address'];?></td>
                                       <td><?php echo $row['child'];?></td>
                                        <td><?php echo $row['adult'];?></td>
                                         <td><?php echo $row['in_date'];?></td>
                                       <td><?php echo $row['out_date'];?></td>
                                    </tr>
                                    <?php
                                    }
                                  ?>
                              </table>
                              </div>
                           </div>






                   <!--============= start of footer area=========--->
          <div class="container-fluid bg-white mt-5">
      <div class="row">
      <div class="col-lg-4">
      <h3 class="h-font fw-bold fs-3 mb-2 ">SEAVIEW INN</h3>
                                          <p>
                                          SEAVIEW INN, Prayagraj,Uttar Pradesh.
                                          </p>
      </div>
      <div class="col-lg-4">
         <h5 class="mb-3">links</h5>
         <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">home </a>  <br>
         <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">rooms</a>  <br>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">facilities</a><br>
           <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us </a>  <br>
           <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">about</a>

      </div>
      <div class="col-lg-4 p-4">
         <h5 class="mb-3">follow us</h5>

                       <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                     <i class="bi bi-twitter me-1"></i>twitter
                       </a>    <br>

                       <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                     <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook"></i>facebook</span>
                       </a>    <br>

                       <a href="#" class="d-inline-block text-dark text-decoration-none ">
                     <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram"></i>instagram</span>
                       </a>
      </div>
      </div>
      </div>

      <h6 class="text-center bg-dark text-white p-3">Designed And Developed Dnyaneshwari Tuwar and Vidhya K S</h6>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    </body>
                       </html>


