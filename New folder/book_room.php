<?php
 session_start();
    if(isset($_POST['book_room'])) {
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"seaview_inn");
        if($_POST['room_type']=='Single Non-AC'){
          $query = "update single_non_ac set holder_name='$_POST[holder_name]',
          holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_moblie]',
          holder_address='$_POST[holder_address]',child=$_POST[child_no],
          adult=$_POST[adult_no],in_date='$_POST[in_date]',
          out_date='$_POST[out_date]', status= 1 where room_no= $_POST[room_no]";
        }
        if($_POST['room_type']=='Single AC'){
          $query = "update single_ac set holder_name='$_POST[holder_name]',
          holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_moblie]',
          holder_address='$_POST[holder_address]',child=$_POST[child_no],
          adult=$_POST[adult_no],in_date='$_POST[in_date]',
          out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
        }
        if($_POST['room_type']=='Double Non-AC'){
          $query = "update double_non_ac set holder_name='$_POST[holder_name]',
          holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_moblie]',
          holder_address='$_POST[holder_address]',child=$_POST[child_no],
          adult=$_POST[adult_no],in_date='$_POST[in_date]',
          out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
        }
        if($_POST['room_type']=='Double AC'){
          $query = "update double_ac set holder_name='$_POST[holder_name]',
          holder_id=$_POST[holder_id],holder_mobile='$_POST[holder_moblie]',
          holder_address='$_POST[holder_address]',child=$_POST[child_no],
          adult=$_POST[adult_no],in_date='$_POST[in_date]',
          out_date='$_POST[out_date]',status=1 where room_no=$_POST[room_no]";
        }
$query_run = mysqli_query($connection,$query);
        if($_SESSION['name']=='admin'){
          header("location:redirect_page.php");
            
        }
        else{
            header("location:redirect_user.php");
        }
   }
?>
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
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      </div>
      </div>
      </nav>
      </head>
      <!--============= end of header area=========--->

                      <br><br>
                      <div class="col-md-12">
                      <center><h3> Fill The Given Details</h3><center>
                      </div>
                 <div class="row">
                   <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <form action="" method="post">




                       <div class="form-group">
                       <label>Room no:</label>
                         <input type="text" class="form-control" name="room_no" value="<?php echo $_GET['rn']; ?>" required="">
                       </div>  <br>
                       <div class="form-group">
                        <label>Room Type:</label>
                         <input type="text" class="form-control" name="room_type" value="<?php if($_GET['rt']=='a' ){echo 'Single Non-AC';}if($_GET['rt']=='b'){echo 'Single AC';}if($_GET['rt']=='c'){echo 'Double Non-AC';}if($_GET['rt']=='d'){echo 'Double AC';}?>" required="">

                      </div> <br>
                         <div class="form-group">
                        <label>Holder Name:</label>
                         <input type="text" class="form-control" name="holder_name" required="">
                      </div>  <br>
                           <div class="form-group">
                        <label>Holder ID:</label>
                         <input type="text" class="form-control" name="holder_id" required="">
                      </div>   <br>
                       <div class="form-group">
                        <label>Holder Mobile:</label>
                         <input type="text" class="form-control" name="holder_mobile" required="">
                      </div>    <br>
                       <div class="form-group">
                        <label>Holder Address:</label>
                         <textarea rows="3" cols="40" class="form-control" name="holder_address" required=""></textarea>
                      </div>     <br>
                       <div class="form-group">
                         <label>No of Child:</label>
                         <select class="form-control" name="child_no">
                         <option>-select-</option>
                         <option>0</option>
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                         </select>
                      </div>      <br>
                      <div class="form-group">
                       <label>No of Adult:</label>
                         <select class="form-control" name="adult_no">
                         <option>-select-</option>
                         <option>0</option>
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                         </select>
                      </div>      <br>
                       <div class="form-group">
                        <label>Check In Date:</label>
                         <input type="text" class="form-control" name="in_date" required="">
                      </div>      <br>
                       <div class="form-group">
                        <label>Check Out Date:</label>
                         <input type="text" class="form-control" name="out_date" required="">
                      </div>     <br>
                      <button type="submit" class="btn btn-warning" name="book_room">Book</button>
                    </form>
                    </div>
                     <div class="col-md-4"></div>

                   </div>














                   <!--============= start of footer area=========--->
          <div class="container-fluid bg-white mt-5">
      <div class="row">
      <div class="col-lg-4">
      <h3 class="h-font fw-bold fs-3 mb-2 "> SEAVIEW INN</h3>
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
