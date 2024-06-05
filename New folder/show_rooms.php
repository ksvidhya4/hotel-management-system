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
          <a class="nav-link active me-2" href="rooms.php">Rooms</a>
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
            <!--rooms-->
           <body>
          <u>  <h2 class="mt-5 pt-4 nb-4 text-center fw-bold h-font">Our Rooms</h2></u>
            <div class="my-5 px-4">
            
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-6">
       <h4 class="fw-bold h-font"> Seaview inn provides the best rooms for our customers. The lavish rooms bring out the royal feeling in you. Every category of the room such as single_ac, single_non_ac, double_ac, and double_non_ac will give you a royal feeling.
              </h4></p>
  </div>

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