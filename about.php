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
    .box {
      border-top-color: var(--teal) !important;
    }

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
          <a class="nav-link active me-2" aria-current="page" href="home1.php">Home</a>
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
      </head><body class="bg-light">
      
  <div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US<h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
          A 4-star hotel located in SEAVIEW INN, Prayagraj,Uttar Pradesh. Relax in our gardens, rooms and dine. Soak up
          the hospitality in our tradition indian inn.

        </p>
  </div>


  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 md-4">
        <h3 class="mb-3">
          <p> The founder of the Seaview inn,Prayagraj,Uttar Pradesh in 2008.
      </div>
      <div class="col-lg-5 col-md-5 md-4">
        <img src="about/about.jpg" class="w-100">
      </div>
    </div>
  </div>
 
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img scr="about/hotel.svg" width="70px" >
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img scr="about/customers.svg" width="70px" >
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img scr="about/rating.svg" width="70px" >
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img scr="about/staff.svg" width="70px" >
          <h4 class="mt-3">150+ STAFF</h4>
        </div>
      </div>

    </div>
  </div>






  <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/itguy.jpg" class="w-100">
          <h5 class="mt-2">IT team head</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/cookingteam.jpg" class="w-100">
          <h5 class="mt-2">Cooking team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/reception.jpg" class="w-100">
          <h5 class="mt-2">Reception team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/housekeeping.jpg" class="w-100">
          <h5 class="mt-2">Housekeeping team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/maintenance.jpg" class="w-100">
          <h5 class="mt-2">Maintenance team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/it.jpg" class="w-100">
          <h5 class="mt-2">IT team</h5>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>






  <?php require('inc/footer.php'); ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,

        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>


</body>

</html>