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
            --teal:#279e8c;
            --teal_hover:#279e8c;
            }
            .pop:hover{
            border-top-color:var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;

            }
                .custom-bg{
                background-color:var(--teal);
                border:1px solid var(--teal);
                }
                .custom-bg:hover{
                background-color:var(--teal_ hover);
                 border-color:1px solid var(--teal_hover);

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
          
<!--header-->
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
   <h2 class="fw-bold h-font text-center">OUR FACILITIES<h2>
   <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
                          We, Seaview inn, provide the best facilities for our customers.

                          </p>
   </div>

   
   
     <div class="container">
     <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
      <img src="fac/IMG_43553.svg" width="40px">
      <h5 class="m=0 ms=3"> Wifi</h5>
      </div>
       <p>Free Access to wifi 24x7
                          </p>
      </div>
      </div>
       <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
      <img src="fac/IMG_41622.svg" width="40px">
      <h5 class="m=0 ms=3"> TV</h5>
      </div>
       <p>   For your entertainment, we have more than 24 regional language television channels.
                          </p>
      </div>
      </div>
       <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
      <img src="fac/1.svg" width="40px">
      <h5 class="m=0 ms=3">Geyser</h5>
      </div>
       <p>
                          </p>
      </div>
      </div>
       <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
      <img src="fac/IMG_49949.svg" width="40px">
      <h5 class="m=0 ms=3"> Air Conditing</h5>
      </div>
       <p>            we provide rooms such as Double Ac Rooms and Single Ac rooms
                          </p>
      </div>
      </div>
       <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
      <img src="fac/IMG_96423.svg" width="40px">
      <h5 class="m=0 ms=3"> Heater</h5>
      </div>
       <p>
                            we provide heater facilities to every room.
                          </p>
      </div>
      </div>
       <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
      <img src="fac/IMG_43553.svg" width="40px">
      <h5 class="m=0 ms=3">Wifi</h5>
      </div>
       <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Repellendus expedita nesciunt officiis dolores laboriosam eum nostrum ratione
                            tempora molestiae! Obcaecati!
                          </p>
      </div>
      </div>

      </div>
     </div>

 <?php require('inc/footer.php');?>

 </body>

 </html>