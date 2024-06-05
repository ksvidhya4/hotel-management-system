


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
          <a class="nav-link active" href="about.php">About</a>
        </li>
      </ul>

      

<!--      
<button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModel">
register
</button>
<button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModel">
login
</button>-->
<?php
if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true)
{
echo"
<div class='user'>

$_SESSION[username]-<a href='logout2.php'>Logout</a>
";
}
else{
    echo"
 <div class='d-flex'>
 <div class='sign-in-up'>
 <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
 <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
</div>
 ";
    }
    ?>
    <?php require('register1/reg.php'); ?>
   


    </div>
      </div>
    </div>
    </nav>
    

