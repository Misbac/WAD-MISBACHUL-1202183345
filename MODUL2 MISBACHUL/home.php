<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    
     .ead{
        text-align: center;
        color: blue;
     }
     #box1{
    
				width:228px;
				height:565px;
				
               
                border: 1px ;
                position: absolute;
                top: 28%;
                right: 200px;
                box-shadow: 10px 30px 30px 5px rgb(205, 205, 207);
                border-radius: 5px;
     }
     #box2{
    
             width:228px;
             height:440px;
             box-shadow: 10px 30px 30px 5px rgb(205, 205, 207);
             position: absolute;
             top: 28% ;
             right: 820px;
             border-radius: 5px;
     }
     #box3{
    
             width:228px;
             height:485px;
             box-shadow: 10px 30px 30px 5px rgb(205, 205, 207);
             
             position: absolute;
             top: 28%;
             left:530px;
             border-radius: 5px;
     }
     #kiri{
         float: right;
         margin: 2px;
         height: 150px;
         border-radius: 5px;
         
     }
     .ukuran{
         font-size: 12px;
         font-family: sans-serif;
     }
     .judul{
        font-family: sans-serif;
        
     }
     .harga{
         color: royalblue;
     }
     #btn1{
        margin: 10px 10px 10px 65px  ;
     }
     #btn2{
         margin: 10px 10px 10px 52px  ;
         
     }
     #btn3{
        margin: 10px 10px 10px 52px  ;
     }
     #menu{
       text-align: center;
     }
  
    

    </style>
  </head>
  <body class="bg-light">
  <ul class="nav justify-content-center bg-primary">
        <li class="nav-item"> <a class="nav-link active text-light" href="home.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link text-light" href="booking.php">Booking</a> </li>
        
    </ul>
          </nav>
          <br>
          <h4 class="ead">EAD HOTEL</h4>
          <h6 class="ead">Welcome To 5 Star Hotel</h6>

          <div class="container">
            <div id="box1">
                <img id="kiri" src="hotel1.jpg" />
                <br>
                <h5 class="judul">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luxury</h5>
                <h7  class="harga">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ 200/Day</h7>
                <br><br>
                <div> 
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-active">
                                <th scope="row" class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facilities</th>
                            </tr>
                            <tr class="table-Default">
                                <th scope="col" class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 Double Bed</th>

                            </tr>
                            <tr class="table-Default">
                                <th scope="col" class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 Bathroom with hot water</th>

                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Kitchen</th>

                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Television and Wifi</th>

                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Workroom</th>

                            </tr>
                        </thead>
                    </table>
                </div>
                <div id="btn1"  >
                <a href="booking.php?judul=hotel1"><button type="button" class="btn btn-primary">Book now</button></a>
                </div>
               
            </div>
            <br>
            <div id="box2"><img id="kiri" src="hotel2.jpg" />
                <h5 class="judul">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Standard</h5>
                <h7  class="harga">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $ 90/Day</h7>
                <br><br>
                <div> 
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-active">
                                <th scope="row"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facilities</th>
                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Single Bed</th>

                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Bathroom </th>
                            </tr>
                            
                        </thead>
                    </table>
                </div>
                <div id="btn2">
                <a href="booking.php?judul=hotel2"><button type="button" class="btn btn-primary">Book now</button></a>
                    
                   
                </div>
            </div>
            <div id="box3">
                <div>
                <img id="kiri" src="hotel3.jpg" />
                <br>
                </div>
                <br>
                <h5 class="judul">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Superior</h5>
                <h7 class="harga">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ 150/Day</h7>
                <br><br>
                <div> 
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-active">
                                <th scope="row"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facilities</th>
                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Double Bed</th>

                            </tr>
                            <tr class="table-Default">
                                <th scope="col"class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Telivision and Wi-fi </th>
                            </tr>
                            <tr class="table-Default">
                                <th scope="col" class="ukuran"> &nbsp;&nbsp;&nbsp;&nbsp; 1 Bathroom with hot water</th>

                            </tr>    

                        </thead>
                    </table>
                </div>
                <div id="btn3">
                <a href="booking.php?judul=hotel2"><button type="button" class="btn btn-primary">Book now</button></a>
                
                </div>
            </div>
      
          </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>