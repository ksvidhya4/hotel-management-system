
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
      --teal: #279e8c;
      --teal_hover: #279e8c;
    }

    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;

    }

    .custom-bg {
      background-color: var(--teal);
      border: 1px solid var(--teal);
    }

    .custom-bg:hover {
      background-color: var(--teal_ hover);
      border-color: 1px solid var(--teal_hover);

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

    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 1.7px;
    }






    
.custom-alert{
  position:fixed;
  top:65px;
  right:25px;
}


                
header div.sign-in-up button{
    background-color: #75cfb8;
    font-size: 16px;
    font-weight: 550;
    padding: 4px 12px;
    border: 2px solid #000;
    border-radius: 5px;
    outline: none;
    margin-left: 20px;
  }
  
  header div.sign-in-up button:last-child{
    background-color: #fa9579;
  }
  
  div.popup-container{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    display: none;
  }
  
  div.popup-container div.popup{
    background-color: #f0f0f0;
    width: 350px;
    border-radius: 5px;
    padding: 20px 25px 30px 25px;
  }
  
  div.popup-container div.popup h2{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 30px;
    color: #30475e;
  }
  
  div.popup-container div.popup h2 button{
    border: none;
    background-color: transparent;
    outline: none;
    font-size: 18px;
    font-weight: 550;
    color: #797775;
  }
  
  div.popup-container div.popup input{
    width: 100%;
    margin-bottom: 20px;
    background-color: transparent;
    border: none;
    border-bottom: 2px solid #30475e;
    border-radius: 0;
    padding: 5px 0;
    font-weight: 550;
    font-size: 14px;
    outline: none;
  }
  div.popup-container div.popup button.login-btn,div.popup-container div.register button.register-btn{
    font-weight: 550;
    font-style: 15px;
    color: white;
    background-color: #30475e;
    padding: 4px 10px;
    border: none;
    outline: none;
    margin-top: 5px;
  }
  
  div.popup-container div.register{
    background-color: #edeef7;
  }
  
  div.popup-container div.register h2{
    color: #fa9579;
  }
  
  div.popup-container div.register input{
    border-bottom-color: #fa9579;
  }
  
  div.popup-container div.register button.register-btn{
    background-color: #fa9579;
  }
  
  div.user{
    color: #30475e;
    background-color: #75cfb8;
    padding: 5px 15px;
    border-radius: 5px;
    font-weight: 500;
  }
  div.user a{
    color: #30475e;
  }  
 
  div.user{
    color:#30475e;
    background-color:#75cfb8;
    padding:5px 15px;
    border-radius: 5px;
    font-weight: 500;

  }

  div.user a{
    color:#30475e;
  }

  </style>

<head>
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php">SEAVIEW INN</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="home1.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" href="show_rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </head>

<body class="bg-light">
  <div class="my-5">
    <h2 class="fw-bold h-font text-center">CONTACT US<h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
          Seaview inn really care about their customers. To provide best, we welcome your suggest, difficulties, and problems related to hotel and website.

        </p>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white shadow p-4 ">
          <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/d/embed?mid=12vR5SR_VS-axlDnqDdJ-QVjGGmw&ehbc=2E312F" width="1200" height="450"></iframe>

          <h5>Address</h5>
          <a href="https://goo.gl/maps/9fsiEiX8kdqu94sS6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> SEAVIEW INN, Prayagraj,Uttar Pradesh.
          </a>

          <h5 class="mt-4">call us </h5>
          <i class="bi bi-telephone-fill"></i>
          <a href="tel:+913456789905" class="d-inline-block mb-2 text-decoration-none text-dark">+913456789905</a>
          <br>

          <i class="bi bi-telephone-fill"></i>
          <a href="tel:+913456789905" class="d-inline-block text-decoration-none text-dark">+913456789905</a>
          <h5 class="mt-4">Email</h5>
          <i class="bi bi-envelope-fill"></i><a href="mailto:ask.seaviewinn@gmail.com" class="d-inline-block text-decoration-none text-dark">ask.seaviewinn@gmail.com</a>

          <h5 class="mt-4">Follow us </h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter"></i>
          </a>


          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook"></i>
          </a>

          <a href="#" class="d-inline-block text-dark fs-5 ">
            <i class="bi bi-instagram"></i>
          </a>



        </div>
      </div>


      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Name</label>
              <input name="name" required type="text" class="form-control show-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Email</label>
              <input name="email" required type="email" class="form-control show-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Subject</label>
              <input name="subject" required type="text" class="form-control show-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Message</label>
              <textarea name="message" required class="form-control shodow-none" rows="5" style="resize:none;"></textarea>
            </div>
            <button type="submit" name="send" class="btn text-white custom-bg mt-3">Sent</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <?php
  $hname = 'localhost';
  $uname = 'root';
  $pass = '';
  $db = 'seaview_inn';


  $con = mysqli_connect($hname, $uname, $pass, $db);

  if ($con===false) {
    die("Cannot Connect to Database". mysqli_connect_error());
  }


 
  function filteration($data)
  {
    foreach ($data as $key => $value) {
      $data[$key] = trim($value);
      $data[$key] = stripcslashes($value);
      $data[$key] = htmlspecialchars($value);
      $data[$key] = strip_tags($value);
    }

    return $data;
  }
 
  ?>
 <?php
  function insert($sql, $values, $datatypes)
  {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, $datatypes,...$values);
      if (mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      } 
      else {
        mysqli_stmt_close($stmt);
        die("Query cannot be executed-insert");
      }
    } 
    else {

      die("Query cannot be prepared-insert");
    }
  }

 





  function alert($type, $msg)
    {
      $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
      echo <<<alert
  <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
  <strong class="me-3">$msg</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
  </div>
  alert;
    }
    ?>
 

  















  <?php
  if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];
    $res = insert($q, $values, 'ssss');
    if ($res == 1) {
      alert('success', 'Mail sent!');
    } else {
      alert('error', 'please try again');
    }
  }
  ?>




  <?php require('inc/footer.php'); ?>










</body>

</html>