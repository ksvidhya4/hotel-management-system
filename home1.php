<?php require('register1/connection.php'); 
session_start();
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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
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
             <?php require('inc/header.php'); ?>
          </head>

          <body class="bg-light">
           




            <div class="container-fluid px-lg-4 mt-4">
              <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="carousel/IMG_55677.png" class="w-100 d-block" />
                  </div>
                  <div class="swiper-slide">
                    <img src="carousel/IMG_15372.png" class="w-100 d-block" />
                  </div>
                  <div class="swiper-slide">
                    <img src="carousel/IMG_40905.png" class="w-100 d-block" />
                  </div>
                  <div class="swiper-slide">
                    <img src="carousel/IMG_62045.png" class="w-100 d-block" />
                  </div>
                  <div class="swiper-slide">
                    <img src="carousel/IMG_93127.png" class="w-100 d-block" />
                  </div>
                  <div class="swiper-slide">
                    <img src="carousel/IMG_99736.png" class="w-100 d-block" />
                  </div>
                </div>
              </div>
            </div>




<!--check room-->
<?php


$login=0;
 if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true)
 {
  $book_btn=" ";
 $login=1;

 }
$book_btn="<button onclick='checkLoginToBook($login)' class='btn btn-sm text-black btn-outline-dark custom-bg shadow-none'>Book now</button>"
 
 ?>

<?php
{
  echo"
<div class='container availability-form '>
              <div class='row'>
                <div class='col-lg-12 bg-white shadow p-4 rounded'>
                  <h2>Book<br> Your Room Now</h2>
                  <div class='d-flex justify-content-evenly mb-2'>
                    $book_btn
                    
                      
</div>
               

              </div>
            </div>
            </div>
";
}

?>

            


            <!--rooms-->
            <h2 class="mt-5 pt-4 nb-4 text-center fw-bold h-font">Our Rooms</h2>
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4"> <span>&#8377;</span>200 per night</h6>
                      <div class="features mb-4">
                        <h6 class="m-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          2 rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          3 sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="m-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          ac
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="m-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>

                        </span>
                      </div>

                    </div>
                  </div>
                </div>


                <div class="col-lg-4 col-md-6 my-3">
                  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4"> <span>&#8377;</span>200 per night</h6>
                      <div class="features mb-4">
                        <h6 class="m-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          2 rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          3 sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="m-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          ac
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="m-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>

                        </span>
                      </div>


                    </div>
                  </div>
                </div>





                <div class="col-lg-4 col-md-6 my-3">
                  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="rooms/3.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4"> <span>&#8377;</span>200 per night</h6>
                      <div class="features mb-4">
                        <h6 class="m-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          2 rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          3 sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="m-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          ac
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="m-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>

                        </span>
                      </div>


                    </div>
                  </div>
                </div>



              </div>
            </div>

            <!--our facilities-->
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our facilities</h2>
            <div class="container">
              <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="fac/1.svg" width="80px">
                  <h5 class="mt-3">Geyser</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="fac/IMG_43553.svg" width="80px">
                  <h5 class="mt-3">wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="fac/IMG_96423.svg" width="80px">
                  <h5 class="mt-3">Room Heater</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="fac/IMG_41622.svg" width="80px">
                  <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="fac/IMG_49949.svg" width="80px">
                  <h5 class="mt-3">Air Conditioner </h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
                  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">>>>More Facilities</a>
                </div>
              </div>
            </div>

            <!--Testimonial-->
            <h2 class="mt-5 pt-4 nb-4 text-center fw-bold h-font">Testimonial</h2>
            <div class="container">
              <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">

                  <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                      <img src="images/features/star.svg" width="30px">
                      <h6 class="m=0 ms-2">snehal</h6>
                    </div>
                    <p>
                     Great location, Really pleasant and clean rooms, but the thing that makes this such a good place to stay are the staff.
                    </p>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                  </div>

                  <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                      <img src="about/customers.svg" width="30px">
                      <h6 class="m=0 ms-2">ponnu</h6>
                    </div>
                    <p>
                    Excellent service. 10/10.
                    </p>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                  </div>

                  <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center m-3">
                      <img src="" width="30px">
                      <h6 class="m=0 ms-2">surya</h6>
                    </div>
                    <p>
                     I have stayed at dozen of hotel. This was on the top of the list of best stays/experiences ever . Staff was very hospitable and the website booking facility is amazing.  
                    </p>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                  </div>


                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>



            <!--reach us-->
            <h2 class="mt-5 pt-4 nb-4 text-center fw-bold h-font">Reach us</h2>
            <div class="container">
              <div class="row">
                <div class="col-lg-8-md-84 mb-lg-0 mb-3 bg-white rounded">
                  <iframe src="https://www.google.com/maps/d/embed?mid=12vR5SR_VS-axlDnqDdJ-QVjGGmw&ehbc=2E312F" width="1200" height="450"></iframe>
                </div>
                <div class="col-lg-8-md-4">
                  <div class="bg-white p-4 rounded mb-4">
                    <h5>call us </h5>
                    <i class="bi bi-telephone-fill"></i>
                    <a href="tel:+913456789905" class="d-inline-block mb-2 text-decoration-none text-dark">+913456789905</a>
                    <br>

                    <i class="bi bi-telephone-fill"></i>
                    <a href="tel:+913456789905" class="d-inline-block text-decoration-none text-dark">+913456789905</a>

                    <div class="col-lg-8-md-4">

                      <br>
                      <h5>Follow us </h5>

                      <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter"></i>twitter</span>
                      </a>
                      <br>

                      <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook"></i>facebook</span>
                      </a>
                      <br>
                      <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram"></i>instagram</span>
                      </a>

                    </div>
                  </div>
                </div>

              </div>

            </div>




            <?php require('inc/footer.php'); ?>


            














          </body>

          </html>
          <script>
function checkLoginToBook(status)
{
  if(status)
  {
    window.location.href='rooms.php';

  }
  else{
    alert('error,PLease login to book room!');

  }
}
</script>